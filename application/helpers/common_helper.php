<?php 

function pagination($total=0,$per_page=3,$base_url=''){
			//echo $base_url;
			$CI = &get_instance();
			$CI->load->library('pagination');
			//echo $start; 
			$config['total_rows'] = $total;
			$config['per_page'] = $per_page;
			$config['base_url']=$base_url;
			$config['full_tag_open'] = '<div class="pagination">';
			$config['full_tag_close'] = '</div>';
			$config['cur_tag_open'] = '<a class="active">';
			$config['cur_tag_close'] = '</a>';
			$config['first_link'] = '<<<';
			$config['last_link'] = '>>>';
			$config['prev_link'] ='prev';
			$config['next_link'] = 'next';
			$CI->pagination->initialize($config);
			return $CI->pagination->create_links();
			
	}
	
?>