<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->session->userdata('id'))
        {
            $this->load->view('admin/home');
        }else{
            redirect("Login");
        }
    }

    public function view_invoice($order_id){
        $this->db->select("*");
        $this->db->from('order');
        $this->db->where('order.order_id',$order_id);
        $this->db->join('billing_detail', 'billing_detail.order_id = order.order_id', 'left outer');
        $this->db->join('order_product', 'order_product.order_id = order.order_id', 'left outer');
        $this->db->join('shipping', 'shipping.shipping_id = order.shipping_id', 'left outer');
        $querys = $this->db->get();
        $arr['bill'] = $querys->result_array();

        $this->load->view('admin/viewbill.php',$arr);
    }

    public function generate_pdf($order_id){
        $this->db->select("*");
        $this->db->from('order');
        $this->db->where('order.order_id',$order_id);
        $this->db->join('billing_detail', 'billing_detail.order_id = order.order_id', 'left outer');
        $this->db->join('order_product', 'order_product.order_id = order.order_id', 'left outer');
        $this->db->join('shipping', 'shipping.shipping_id = order.shipping_id', 'left outer');
        $querys = $this->db->get();
        $arr['bill'] = $querys->result_array();

        $this->load->view('admin/bill.php',$arr);
    }

    public function login()
    {
        $this->load->view('admin/login');
    }

    public function addproduct()
    {
        $data=array();
		if($this->input->post('submit'))
		{
            $p_name = $this->input->post('p_name');
            $categories = $this->input->post('categories');
            $subcategories = $this->input->post('subcategories');
            $price = $this->input->post('price');
            $image = $this->input->post('files');
            $weight = $this->input->post('weight');
            $stock = $this->input->post('stock');
            // $shipping = $this->input->post('shipping[]');
            // $shipping_data = implode(',',$shipping);
            //print_r($shipping_data); exit;
            $this->form_validation->set_rules('p_name','Product name','required');
            $this->form_validation->set_rules('categories','Categories','required');
            $this->form_validation->set_rules('subcategories','Subcategories','required');
            $this->form_validation->set_rules('price','Price','required');
            $this->form_validation->set_rules('weight','Weight','required');
            $this->form_validation->set_rules('stock','Stock','required');
            //$this->form_validation->set_rules('shipping[]','Shipping','required');

			if($this->form_validation->run()==FALSE)
			{
				
			}
			else{
                if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0)
                { 
                    $filesCount = count($_FILES['files']['name']);
                    $imgNamee = array();
                    for($i = 0; $i < $filesCount; $i++)
                    { 

                        // $original = strtolower(time().$_FILES['files']['name'][$i]);
                        // $imgName = str_replace(' ', 'I', $original);
                        $path = $_FILES['files']['name'][$i];
                        $ext = pathinfo($path, PATHINFO_EXTENSION);
                        $imgName = rand(100000000000000000, 900000000000000000).'.'.$ext;
                        $imgNamee[] = $imgName;
                        $_FILES['file']['name']     = $imgName; 
                        $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
                        $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                        $_FILES['file']['error']    = $_FILES['files']['error'][$i]; 
                        $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
                        
                        $uploadPath = 'assets/images/'; 
                        $config['upload_path'] = $uploadPath; 
                        $config['max_size'] = '102400';
                        $config['allowed_types'] = 'jpg|png|JPG|PNG|jpeg|JPEG|mpeg|mp3|avi|mp4|gif|GIF|mov|MOV|WEBM';
                        $config['file_name'] = $imgName;
                        $this->load->library('upload', $config); 
                        $this->upload->initialize($config); 
                        $this->upload->do_upload('file');
                        $this->upload->data();
                    }
                    // print_r($imgNamee);
                    // die;
                    $img = $imgNamee;
                    // print_r($img);
                    
                    $image = implode(',',$img);
                    $images = $image;


						if($this->upload->do_upload('file'))
						{
                            $fileData = $this->upload->data(); 
                            $uploadData[$i]['file_name'] = $fileData['file_name']; 
							$arr=array(
                            'pname' => $p_name,
                            'c_id' => $categories,
                            'subc_id' => $subcategories,
                            'price' => $price,
                            'image' => $images,
                            'weight' => $weight,
                            'stock' => $stock
                            );
                            //print_r($arr); exit;
                           $this->admin_model->insertdata_product($arr);
                           $id = $this->db->insert_id();
                           redirect('admin/Admin/addvariation/'.$id);
                        }
						else
						{
							//$data['msg']="invalid email and password!!!!";
							$data['file_error']=$this->upload->display_error();
                        }
                    // }
                }
			}		
        }
        $data['shipping'] = $this->admin_model->showdata_shipping();
        $data['categories'] = $this->admin_model->showdata_categories();
        $this->load->view('admin/addproduct',$data);
    }
    public function addvariation($id)
    {
        $data['p_id'] = $id; 
        $this->load->view('admin/add_variation',$data);
    }

    public function addcountry()
    {
        $data=array();
		if($this->input->post('submit'))
		{
            $name = $this->input->post('country');
            
			$this->form_validation->set_rules('country','Country','required');

			if($this->form_validation->run()==FALSE)
			{
				
			}
			else{
							$arr=array(
							'name'=>$name
                        );
                           $this->admin_model->insertdata_country($arr);
                           //redirect('Maruticare');
				}
						
		}
        $this->load->view('admin/add_country');
    }

    public function addstate()
    {
        $data=array();
		if($this->input->post('submit'))
		{
            $name = $this->input->post('state');
            $country = $this->input->post('country');
            
            $this->form_validation->set_rules('state','State','required');
            $this->form_validation->set_rules('country','Country','required');

			if($this->form_validation->run()==FALSE)
			{
				
			}
			else{
							$arr=array(
                            'name'=>$name,
                            'country_id' => $country
                        );
                           $this->admin_model->insertdata_state($arr);
                           //redirect('Maruticare');
				}
						
        }
        $data['country'] = $this->admin_model->showdata_country();
        $this->load->view('admin/add_state',$data);
    }

    public function addcity()
    {
        $data=array();
		if($this->input->post('submit'))
		{
            $name = $this->input->post('city');
            $state = $this->input->post('state');
            
            $this->form_validation->set_rules('city','City','required');
            $this->form_validation->set_rules('state','State','required');

			if($this->form_validation->run()==FALSE)
			{
				
			}
			else{
							$arr=array(
                            'name'=>$name,
                            'state_id' => $state
                        );
                           $this->admin_model->insertdata_city($arr);
                           //redirect('Maruticare');
				}
						
        }
        $data['state'] = $this->admin_model->showdata_state();
        $this->load->view('admin/add_city',$data);
    }

    public function addcategories()
    {
		$data=array();
		if($this->input->post('submit'))
		{
			$categories_name = $this->input->post('categories');
			
			$this->form_validation->set_rules('categories','Categories','required');

			if($this->form_validation->run()==FALSE)
			{
				
			}
			else{
                $path = $_FILES['file']['name'];
                $ext = pathinfo($path, PATHINFO_EXTENSION);
                $images = rand(100000000000000000, 900000000000000000).'.'.$ext;

                $config['upload_path']='assets/images/';
                $config['allowed_types']='gif|jpg|png|JPG|PNG|mov|mpeg|mp3|avi|mp4|gif|GIF';
                $config['file_name'] = $images;
                $this->load->library('upload',$config);
                if($this->upload->do_upload('file'))
                {
                   $file_data=$this->upload->data();
                   $arr=array(
                       'categories_name'=>$categories_name,
                       'images'=>$images

						);//print_r($arr);exit;
                   $this->admin_model->insertdata_categories($arr);
                   redirect('admin/Admin/view_categories');
               }
               else
               {
							//$data['msg']="invalid email and password!!!!";
                   $data['file_error']=$this->upload->display_error();
               }
           }
       }
		//$this->load->view('Admin/homepage');
		$this->load->view('admin/add_categories');
	}

    public function addsubcategories()
    {
        $data=array();
		if($this->input->post('submit'))
		{
            $categories_name = $this->input->post('categories');
            $subcategories = $this->input->post('subcategories');
            
            $this->form_validation->set_rules('categories','Categories','required');
            $this->form_validation->set_rules('subcategories','Sub Categories','required');

			if($this->form_validation->run()==FALSE)
			{
				
			}
			else{
							$arr=array(
                            'c_id'=>$categories_name,
                            'subcategories_name'=>$subcategories
                        );
                           $this->admin_model->insertdata_subcategories($arr);
                           redirect('admin/Admin/view_subcategories');
				}			
        }
        $data['categories'] = $this->admin_model->showdata_categories();
        $this->load->view('admin/add_subcategories',$data);
    }

    public function get_categories()
    {
        $c_id = $this->input->post('c_id');
        $this->db->where('c_id',$c_id);
        $data['row']=$this->db->get('sub_categories')->result_array();
        $this->load->view('admin/get_categories',$data);
    }

    public function view_product($start=0)
    {
        $per_page=5;
		$total=$this->admin_model->row_count();
		$data['pagination']=pagination($total,$per_page,site_url('admin/Admin/view_product'));
        $data['row']=$this->admin_model->showdata_product($per_page,$start);
        //echo "<pre>"; print_r($data);
        $this->load->view('admin/view_productpage',$data);
    }

    public function view_sale($p_id=0,$status='',$start=0)
	{
		if($p_id>0){
			$this->db->where('p_id',$p_id);
			$this->db->update('product',array('sale'=>$status));
			redirect('admin/Admin/view_product');	
		}
    }

    public function delete_product($p_id)
	{
        //echo "hiiii"; exit;
        //$imgs = explode(',',$img);print_r($imgs);
        $this->db->where('p_id',$p_id);
        $data['row']=$this->db->get('product')->result_array(); 
        foreach($data['row'] as $rows)
        {
            $imgs = explode(',',$rows['image']);
            foreach($imgs as $data)
            {
                unlink("./assets/images/".$data);
            }
            $this->admin_model->delete_productdata($p_id);
        }
        //unlink("./assets/images/".$img);
        redirect('admin/Admin/view_product');
    }
    
    public function update_product($p_id)
    {
        $this->load->library('form_validation');
		if($this->input->post())
		{
			$this->admin_model->update_productdata($p_id);
			
        }
        $data['shipping'] = $this->admin_model->showdata_shipping();
        $data['product']=$this->admin_model->select_productrecord($p_id);
        $data['categories'] = $this->admin_model->showdata_categories();
		$this->load->view('admin/addproduct',$data);
    }

    public function addvariation_value()
    {
        $data  = array();
            $id = $this->uri->segment('4');
            $data['p_id'] = $id; 
            $variationTmp = $this->input->post('variation');
            $variation_val = $this->input->post('variation_val');
        
            foreach ($variationTmp as $key => $variation) {
                if($variation == "Color"){
                    $data['d_color'] = $variation_val[$key];
                }elseif ($variation == "Cut") {
                    $data['cut'] = $variation_val[$key];
                }elseif ($variation == "Shape") {
                    $data['shape'] = $variation_val[$key];
                }elseif ($variation == "Treatment") {
                    $data['treatment'] = $variation_val[$key];
                }elseif ($variation == "DiamondType") {
                    $data['d_type'] = $variation_val[$key];
                }elseif ($variation == "DiamondSize") {
                    $data['d_size'] = $variation_val[$key];
                }elseif ($variation == "RingSize") {
                    $data['ring_size'] = $variation_val[$key];
                }elseif ($variation == "Luster") {
                    $data['luster'] = $variation_val[$key];
                }elseif ($variation == "Clarity") {
                    $data['clarity'] = $variation_val[$key];
                }elseif ($variation == "Color") {
                    $data['d_color'] = $variation_val[$key];
                }elseif ($variation == "Certification") {
                    $data['certification'] = $variation_val[$key];
                }elseif ($variation == "Gender") {
                    $data['gender'] = $variation_val[$key];
                }elseif ($variation == "Weight") {
                    $data['d_weight'] = $variation_val[$key];
                }elseif ($variation == "Metal") {
                    $data['metal'] = $variation_val[$key];
                }elseif ($variation == "NOOfDiamond") {
                    $data['no_of_diamond'] = $variation_val[$key];
                }elseif ($variation == "Bandwidth") {
                    $data['band_width'] = $variation_val[$key];
                }elseif ($variation == "Ringweight") {
                    $data['ring_weight'] = $variation_val[$key];
                }
            }
            $insert = $this->admin_model->createData($data);
            //redirect('admin/Admin/view_product');
        echo json_encode($insert);
    }

    public function adddiamond_size()
    {
        $data  = array();
        $id = $this->uri->segment('4');
        $data['p_id'] = $id; 

        $datas = $this->input->post();

        $sqlQuery ="INSERT INTO diamond_size(product_id, diamond_size, diamond_value) VALUES ";
        for($i=0; $i<count($datas['diamond_size']); $i++) {
           $sqlQuery .="(".$id.", '".$datas['diamond_size'][$i]."', '".$datas['diamond_value'][$i]."'),";
       } //multiple entry in database
        $sqlQuery = rtrim($sqlQuery, ','); // Remove last comma
        $arr = $this->db->query($sqlQuery);
        echo json_encode($arr);
    }

    public function updatevariation($id)
    {
        $this->load->library('form_validation');
		if($this->input->post())
		{
			$this->admin_model->update_variation($p_id);
			
        }
        $data['p_id'] = $id; 
        $data['productvariation'] = $this->admin_model->show_productvariation($id);
        $this->load->view('admin/add_variation',$data);
    }

    public function addsale_product()
    {   
        $data=array();
		if($this->input->post('submit'))
		{ //echo 'hi';
            $product = $this->input->post('product');
            $sale = $this->input->post('sale');
            $startDate = $this->input->post('startDate');
            $endDate = $this->input->post('endDate');
            //print_r($this->input->post());
            $this->form_validation->set_rules('product[]','Product','required');
            $this->form_validation->set_rules('sale','Sale','required');
            $this->form_validation->set_rules('startDate','startDate','required');
            $this->form_validation->set_rules('endDate','endDate','required');

			if($this->form_validation->run()==FALSE)
			{
				
			}
			else{
							$arr=array(
                            'product_id'=>$product_data = implode(',',$product),
                            'sale_percentage' => $sale,
                            'starttime' => $startDate,
                            'endtime' => $endDate
                        );
                        //print_r($arr);exit;
                        $this->admin_model->insertdata_productsale($arr);
                        redirect('admin/Admin/showallsale_product');
				}				
        }
        
        $data = $this->admin_model->showdata_allsaleproduct();
        $arr = array();
        foreach ($data as $value) {
            $arr[] =  explode(',', $value['product_id']);
        }
        if($arr != null){
            $arr = call_user_func_array('array_merge', $arr);
        } else {
            $arr = [];
        }
        $data['product'] = $this->admin_model->showdata_allproduct($arr);
        $data['categories'] =$this->admin_model->showdata_categories();//print_r($data['categories']);
        $this->load->view('admin/addsale_product',$data);
    }

    public function showallsale_product($start=0)
    {
        $per_page=5;
		$total=$this->admin_model->row_count();
		$data['pagination']=pagination($total,$per_page,site_url('admin/Admin/viewsale_product'));
        $data['row'] =$this->admin_model->showdata_saleproduct($per_page,$start);
        //echo '<pre>'; print_r($categories); print_r($data['row']);
        $this->load->view('admin/viewsale_product',$data);
    }

    public function add_shipping()
    {
        $data=array();
		if($this->input->post('submit'))
		{
            $shipping_name = $this->input->post('shipping');
            $rate = $this->input->post('rate');
            
            $this->form_validation->set_rules('shipping','Shipping','required');
            $this->form_validation->set_rules('rate','Shipping rate','required');

			if($this->form_validation->run()==FALSE)
			{
				
			}
			else{
							$arr=array(
                            'shipping_name'=>$shipping_name,
                            'shipping_rate' => $rate
                        );
                        //print_r($arr); exit;
                           $this->admin_model->insertdata_shipping($arr);
                           //redirect('Maruticare');
				}
						
		}
        $this->load->view('admin/add_shipping');
    }

    public function view_shipping()
    {
        $data['row']=$this->admin_model->showdata_shipping();
        //echo "<pre>"; print_r($data);
        $this->load->view('admin/view_shipping',$data);
    }

    public function delete_shipping($shipping_id)
    {
        $this->admin_model->delete_shippingdata($shipping_id);
        redirect('admin/Admin/view_shipping');
    }

    public function update_shipping($shipping_id)
    {
        $this->load->library('form_validation');
		if($this->input->post())
		{
			$this->admin_model->update_shippingdata($shipping_id);
        }
        $data['shipping']=$this->admin_model->show_data_shipping($shipping_id);
		$this->load->view('admin/add_shipping',$data);
    }

    public function add_slider()
    {
        $data=array();
		if($this->input->post('submit'))
		{
            $slider_text = $this->input->post('slider_text');

            $this->form_validation->set_rules('slider_text','Slider Text','required');

            if($this->form_validation->run()==FALSE)
			{
				
			}
			else{
                $config['upload_path']='assets/images/';
                $config['allowed_types']='gif|jpg|png|JPG|PNG|mov|mpeg|mp3|avi|mp4|gif|GIF';
                $this->load->library('upload',$config);
                //print_r($file_data);exit;
                if($this->upload->do_upload('files'))
                {
                    $file_data=$this->upload->data();
                    $images = strtolower($file_data['file_name']);
                    $arr=array(
                    'image' => $images,
                    'slider_text' => $slider_text
                    );
                    //print_r($arr); exit;
                    $this->admin_model->insertdata_slider($arr);
                    redirect('admin/Admin/view_slider');
                    }
                    else
                    {
                        //$data['msg']="invalid email and password!!!!";
                        $data['file_error']=$this->upload->display_error();
                    }
                }
            }
        $this->load->view('admin/add_slider');
    }

    public function view_categories()
    {
        $data['categories']=$this->admin_model->showdata_categories();
        //echo "<pre>"; print_r($data);
        $this->load->view('admin/view_categories',$data);
    }

    public function view_subcategories()
    {
        $data['subcategories']=$this->admin_model->showdata_subcategories();
        //echo "<pre>"; print_r($data);
        $this->load->view('admin/view_subcategories',$data);
    }

    public function delete_categories($id,$img)
	{
        //echo "hiiii";
        $this->admin_model->delete_categoriesdata($id);
        unlink("./assets/images/".$img);
        redirect('admin/Admin/view_categories');
    }

    public function delete_subcategories($subc_id)
	{
        //echo "hiiii";
        $this->admin_model->delete_subcategoriesdata($subc_id);
        redirect('admin/Admin/view_subcategories');
    }

    public function view_slider()
    {
        $data['slider']=$this->admin_model->showdata_slider();
        //echo "<pre>"; print_r($data);
        $this->load->view('admin/view_slider',$data);
    }

    public function delete_slider($slider_id,$img)
	{
        //echo "hiiii";
        $this->admin_model->delete_sliderdata($slider_id);
        unlink("./assets/images/".$img);
        redirect('admin/Admin/view_slider');
    }

    public function view_admin()
    {
        $data['admin']=$this->admin_model->showdata_admin();
        //echo "<pre>"; print_r($data);
        $this->load->view('admin/view_admin',$data);
    }

    public function delete_admin($id)
	{
        //echo "hiiii";
        $this->admin_model->delete_admindata($id);
        redirect('admin/Admin/view_admin');
    }

    public function delete_saleproduct($sale_id)
	{
        //echo "hiiii";
        $this->admin_model->delete_saledata($sale_id);
        redirect('admin/Admin/showallsale_product');
    }
    public function view_review()
    {
        $data['review']=$this->admin_model->showdata_review();
        //echo "<pre>"; print_r($data);
        $this->load->view('admin/view_review',$data);
    }

    public function view_contactus()
    {
        $data['contactus']=$this->admin_model->showdata_contactus();
        //echo "<pre>"; print_r($data);
        $this->load->view('admin/view_contactus',$data);
    }
    
    public function view_order()
    {
        $data['order']=$this->admin_model->showdata_order();
        //echo "<pre>"; print_r($data);
        $this->load->view('admin/view_order',$data);
    }

    public function pdffile($order_id)
    {
        //echo "hh";
        $row=array();
        // $order_id = 'order_607d5ab8df374';
        
        $row['bill'] = $this->generate_pdf($order_id);
        //print_r($row);
        $oup = $this->load->view('admin/bill',$row); 
        $this->load->library('pdf');
        $html = $this->output->get_output($oup);
        $this->pdf->loadHtml($html);
        $this->pdf->set_paper('letter', 'landscape');
        $this->pdf->render();
        $this->pdf->stream("welcome.pdf", array("Attachment"=>0),$this->session->unset_userdata(null));
        //print_r($this->pdf->render());
    }
}
