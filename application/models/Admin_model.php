<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    function insertdata_country($data)
    {
        $this->db->insert('country',$data);
    }

    function showdata_country()
    {
        $qry=$this->db->get('country');
		$arr=$qry->result_array();
		return $arr;
    }

    function insertdata_state($data)
    {
        $this->db->insert('state',$data);
    }

    function showdata_state()
    {
        $qry=$this->db->get('state');
		$arr=$qry->result_array();
		return $arr;
    }

    function insertdata_city($data)
    {
        $this->db->insert('city',$data);
    }

    function insertdata_categories($data)
    {
        $this->db->insert('categories',$data);
    }

    function showdata_categories()
    {
        $qry=$this->db->get('categories');
		$arr=$qry->result_array();
		return $arr;



    }

    function showdata_subcategories()
    {
        
        $this->db->select("*");
        $this->db->from('sub_categories');
        $this->db->join('categories', 'sub_categories.c_id = categories.id');
        $query = $this->db->get();
        $arr = $query->result_array();
		return $arr;
    }

//     function showdata_allproduct()
//     {
//         $qry=$this->db->get('product');
// 		$arr=$qry->result_array();
// 		return $arr;
//     }

//     function showdata_allproduct($id)
//     {

//         $query = " SELECT * FROM product";
//         $query .= " WHERE p_id NOT IN ( ";

//         $count = 0;
//         foreach($id as $item) {
//             $query .= $item;
//             if ($count != count($id) - 1)
//                 $query .= ",";
//             $count++;
//         }

//         $query .= ")";

//         $qry = $this->db->query($query);
//         $arr=$qry->result_array();

// 		return $arr;
//     }

    function showdata_allproduct($id)
    {

        if($id == null){
            $query = " SELECT * FROM product";
        } else{

            $query = " SELECT * FROM product";
            $query .= " WHERE p_id NOT IN (";

            $count = 0;
            foreach($id as $item) {
                $query .= $item;
                if ($count != count($id) - 1)
                    $query .= ",";
                $count++;
            }

            $query .= ")";
        }

        $qry = $this->db->query($query);
        $arr=$qry->result_array();

        return $arr;
    }
    
    function showdata_allsaleproduct()
    {
        $qry=$this->db->get('sale_product');
        $arr=$qry->result_array();
        return $arr;
    }

    function insertdata_subcategories($data)
    {
        $this->db->insert('sub_categories',$data);
    }

    function get_states()
    {
        return $this->db->get("state")->result_array();
    }

    function insertdata_product($data)
    {
        $this->db->insert('product',$data);
        return $this->db->insert_id();
    }

    function insertdata_productsale($data)
    {
        $this->db->insert('sale_product',$data);
    }

    function showdata_product($per_page,$start)
    {
        $this->db->limit($per_page,$start);
        return $this->db->get("product")->result_array();
    }

    function row_count()
	{
			$qry=$this->db->get('product');
			$arr=$qry->num_rows();
			return $arr;
    }
    
    function delete_productdata($p_id='')
	{
		$this->db->where('p_id',$p_id);
		$this->db->delete('product');
		//echo $this->db->last_query();
    }

    function createData($data) 
    {
        $query = $this->db->insert('variation', $data);
        return $query;
    }
    
    function update_productdata($p_id = '')
    {

            $p_name = $this->input->post('p_name');
            $categories = $this->input->post('categories');
            $subcategories = $this->input->post('subcategories');
            $price = $this->input->post('price');
            $image = $this->input->post('files');
            $weight = $this->input->post('weight');
            $stock = $this->input->post('stock');
           
            $this->form_validation->set_rules('p_name','Product name','required');
            $this->form_validation->set_rules('categories','categories','required');
            $this->form_validation->set_rules('subcategories','subcategories','required');
            $this->form_validation->set_rules('price','price','required');
            $this->form_validation->set_rules('weight','weight','required');
            $this->form_validation->set_rules('stock','Stock','required');

			if($this->form_validation->run()==FALSE)
			{
				
			}
			else{
                if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0)
                { 
                    $filesCount = count($_FILES['files']['name']); 
                    for($i = 0; $i < $filesCount; $i++)
                    { 
                        
                        $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
                        $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
                        $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
                        $_FILES['file']['error']     = $_FILES['files']['error'][$i]; 
                        $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
                        
                        $uploadPath = 'assets/images/'; 
                        $config['upload_path'] = $uploadPath; 
                        $config['max_size'] = '102400';
                        $config['allowed_types'] = 'jpg|png|JPG|PNG|mov|mpeg|mp3|avi|mp4|gif|GIF|mov|MOV|WEBM'; 
                        $this->load->library('upload', $config); 
                        $this->upload->initialize($config); 
                        $this->upload->do_upload();
                        $dataInfo[] = $this->upload->data();
                        $img = $_FILES['files']['name'];
                        $image = implode(',',$img);
                        //print_r($image);exit;
						if($this->upload->do_upload('file'))
						{
                            $fileData = $this->upload->data(); 
                            $uploadData[$i]['file_name'] = $fileData['file_name']; 
							$arr=array(
                            'pname' => $p_name,
                            'c_id' => $categories,
                            'subc_id' => $subcategories,
                            'price' => $price,
                            'image' => $image,
                            'weight' => $weight,
                            'stock' => $stock
                            );
                        //    $this->admin_model->insertdata_product($arr);
                        //    $id = $this->db->insert_id();
                        //    redirect('admin/Admin/addvariation/'.$id);
                           
                        }
						else
						{
							//$data['msg']="invalid email and password!!!!";
							$data['file_error']=$this->upload->display_error();
                        }
                    }
                }
            }
            
            $this->db->where('p_id',$p_id);
            $this->db->update('product',$arr);
            redirect('admin/Admin/updatevariation/'.$p_id);
    }

    function update_variation($p_id = '')
    {
        print_r($p_id);
        // $data  = array();
        // $variationTmp = $this->input->post('variation');
        // $variation_val = $this->input->post('variation_val');

        // foreach ($variationTmp as $key => $variation) {
        //     if($variation == "Color"){
        //         $data['d_color'] = $variation_val[$key];
        //     }elseif ($variation == "Cut") {
        //         $data['cut'] = $variation_val[$key];
        //     }elseif ($variation == "Shape") {
        //         $data['shape'] = $variation_val[$key];
        //     }elseif ($variation == "Treatment") {
        //         $data['treatment'] = $variation_val[$key];
        //     }elseif ($variation == "DiamondType") {
        //         $data['d_type'] = $variation_val[$key];
        //     }elseif ($variation == "DiamondSize") {
        //         $data['d_size'] = $variation_val[$key];
        //     }elseif ($variation == "RingSize") {
        //         $data['ring_size'] = $variation_val[$key];
        //     }elseif ($variation == "Luster") {
        //         $data['luster'] = $variation_val[$key];
        //     }elseif ($variation == "Clarity") {
        //         $data['clarity'] = $variation_val[$key];
        //     }elseif ($variation == "Color") {
        //         $data['d_color'] = $variation_val[$key];
        //     }elseif ($variation == "Certification") {
        //         $data['certification'] = $variation_val[$key];
        //     }elseif ($variation == "Gender") {
        //         $data['gender'] = $variation_val[$key];
        //     }elseif ($variation == "Weight") {
        //         $data['d_weight'] = $variation_val[$key];
        //     }elseif ($variation == "Metal") {
        //         $data['metal'] = $variation_val[$key];
        //     }elseif ($variation == "NOOfDiamond") {
        //         $data['no_of_diamond'] = $variation_val[$key];
        //     }elseif ($variation == "Bandwidth") {
        //         $data['band_width'] = $variation_val[$key];
        //     }elseif ($variation == "Ringweight") {
        //         $data['ring_weight'] = $variation_val[$key];
        //     }
        // }
    }
    
    function select_productrecord($p_id='')
    {
        
        $this->db->select("*");
        $this->db->from('product');
        $this->db->where('product.p_id',$p_id);
        $this->db->join('categories', 'categories.id = product.c_id');
        $this->db->join('sub_categories', 'sub_categories.c_id = categories.id');
        $query = $this->db->get();
        $arr = $query->row_array();
		return $arr;
    }

    function show_productvariation($p_id)
    {
        $this->db->select("*");
        $this->db->from('product');
        $this->db->where('product.p_id',$p_id);
        $this->db->join('variation', 'product.p_id = variation.p_id');
        $query = $this->db->get();
        $arr = $query->result_array();
		return $arr;
    }

    // function showdata_saleproduct($per_page,$start)
    // {
    //     $query = $this->db->get('sale_product');
    //     $arr['sale_product'] = $query->result_array();
    //     //print_r($arr); exit;
    //     if($arr['sale_product'] != null)
    //     { 
    //     foreach($arr['sale_product'] as $row)
    //     {
    //         $product_id = explode(',',$row['product_id']);
    //     }
    //     $arrs['product'] = array();
    //     foreach($product_id as $rowid)
    //     {
    //         $this->db->select('*');
    //         $this->db->from('product');
            
    //         $this->db->where('p_id', $rowid);
    //         $querys = $this->db->get();
    //         $res=$querys->result_array(); //print_r($res); exit;
    //         // $arrs['product'] = $arr['starttime'];
    //         // $arrs['product'] = $arr['endtime'];
    //         // $arrs['product'] = $arr['sale_percentage'];
    //         // $arrs['product'] = $arr['current_time'];
    //         array_push($arrs['product'],$querys->result_array());
    //     }

    //     $data = array_merge($arr,$arrs);
    //     //echo '<pre>'; print_r($data);
    //     return $data;
    // }
    // }
    
    function showdata_saleproduct($per_page,$start)
    {
        $query = $this->db->get('sale_product');
        $arr['sale_product'] = $query->result_array();
        
        if($arr['sale_product'] != null)
        { 
            $product_id = array();
            
            foreach($arr['sale_product'] as $row)
            {
                $product_id[] = explode(',',$row['product_id']);
            }

            $product_id = call_user_func_array('array_merge', $product_id);
        // print_r($product_id); exit;
            $arrs['product'] = array();

            foreach($product_id as $rowid)
            {
            // print_r($product_id);
                $this->db->select('*');
                $this->db->from('product');
                
                $this->db->where('p_id', $rowid);
                $querys = $this->db->get();
                $res=$querys->result_array();

            // exit;
            // print_r($res); exit;
            // $arrs['product'] = $arr['starttime'];
            // $arrs['product'] = $arr['endtime'];
            // $arrs['product'] = $arr['sale_percentage'];
            // $arrs['product'] = $arr['current_time'];
                array_push($arrs['product'],$querys->result_array());
                
            }

        // die;

            $data = array_merge($arr,$arrs);
        // print_r($arrs); die;
        // die;
        //echo '<pre>'; print_r($data);
            return $data;
        }
    }

    function insertdata_shipping($data)
    {
        $this->db->insert('shipping',$data);
    }

    function showdata_shipping()
    {
        $qry=$this->db->get('shipping');
		$arr=$qry->result_array();
		return $arr;
    }

    function delete_shippingdata($shipping_id='')
	{
		$this->db->where('shipping_id',$shipping_id);
		$this->db->delete('shipping');
		//echo $this->db->last_query();
    }

    function update_shippingdata($shipping_id = '')
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
            }
            
            $this->db->where('shipping_id',$shipping_id);
            $this->db->update('shipping',$arr);
            redirect('admin/Admin/view_shipping');
    }
    
    function show_data_shipping($shipping_id='')
    {
        
        $this->db->select('*');
        $this->db->from('shipping');
        $this->db->where('shipping_id',$shipping_id);
        $query = $this->db->get();
        $arr = $query->row_array();
		return $arr;
    }

    function insertdata_slider($data)
    {
        $this->db->insert('slider',$data);
    }

    function delete_categoriesdata($id='')
	{
		$this->db->where('id',$id);
		$this->db->delete('categories');
		//echo $this->db->last_query();
    }

    function delete_subcategoriesdata($subc_id='')
	{
		$this->db->where('subc_id',$subc_id);
		$this->db->delete('sub_categories');
		//echo $this->db->last_query();
    }

    function showdata_slider()
    {
        $qry=$this->db->get('slider');
		$arr=$qry->result_array();
		return $arr;
    }

    function delete_sliderdata($slider_id='')
	{
		$this->db->where('slider_id',$slider_id);
		$this->db->delete('slider');
		//echo $this->db->last_query();
    }
    
    function showdata_admin()
    {
        $qry=$this->db->get('admin');
		$arr=$qry->result_array();
		return $arr;
    }
    
    function delete_admindata($id='')
	{
		$this->db->where('id',$id);
		$this->db->delete('admin');
		//echo $this->db->last_query();
    }

    function delete_saledata($sale_id='')
	{
		$this->db->where('sale_id',$sale_id);
		$this->db->delete('sale_product');
		//echo $this->db->last_query();
    }
    function showdata_review()
    {
        $this->db->select('*');
        $this->db->from('review');
        $this->db->join('registration', 'registration.user_id = review.user_id');
        $this->db->join('product', 'product.p_id = review.product_id');
        $query = $this->db->get();
        $arr = $query->result_array();
		return $arr;
    }

    function showdata_contactus()
    {
        $qry=$this->db->get('contactus');
		$arr=$qry->result_array();
		return $arr;
    }
    
    function showdata_order()
    {
        $this->db->select('*');
        $this->db->from('order');
        $this->db->join('registration', 'registration.user_id = order.user_id');
        // $this->db->join('product', 'product.p_id = order.product_id');
        $query = $this->db->get();
        $arr = $query->result_array();
        // echo '<pre>';
        // print_r($arr);
        // die;
		return $arr;
    }
}