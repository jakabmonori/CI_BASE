<?php
use App\Models\AdminUserModel;
use App\Models\RoleModel;

if ( ! function_exists('load_admin_css')){
    function load_assets($type = 'js')
    {
		$url = base_url();
		if($type == 'js'){
			echo '<script src="'.$url.'mazer/assets/vendors/jquery/jquery.min.js"></script>';
			echo '<script src="'.$url.'mazer/assets/vendors/ckeditor/ckeditor.js"></script>';
			echo '<script src="'.$url.'mazer/assets/vendors/dragula/dragula.min.js"></script>';
			echo '<script src="'.$url.'mazer/assets/vendors/fontawesome/all.min.js"></script>';
			echo '<script src="'.$url.'mazer/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>';
			echo '<script src="'.$url.'mazer/assets/vendors/tinymce/jquery.tinymce.min.js"></script>';
			echo '<script src="'.$url.'mazer/assets/vendors/tinymce/tinymce.min.js"></script>';
			echo '<script src="'.$url.'mazer/assets/vendors/toastify/toastify.js"></script>';
			echo '<script src="'.$url.'mazer/assets/js/bootstrap.bundle.min.js"></script>';
			echo '<script src="'.$url.'mazer/assets/js/main.js"></script>';
			echo '<script src="'.$url.'mazer/assets/js/vendors.js"></script>';

            //echo '<script src="'.$url.'/assets/js/ionyx.js"></script>';



        }else if($type == 'css'){
			echo '<link type="text/css" rel="stylesheet" href="'.$url.'mazer/assets/vendors/dragula/dragula.min.css" />';
			echo '<link type="text/css" rel="stylesheet" href="'.$url.'mazer/assets/vendors/fontawesome/all.min.css" />';
			echo '<link type="text/css" rel="stylesheet" href="'.$url.'mazer/assets/vendors/perfect-scrollbar/perfect-scrollbar.css" />';
			echo '<link type="text/css" rel="stylesheet" href="'.$url.'mazer/assets/vendors/toastify/toastify.css" />';
			echo '<link type="text/css" rel="stylesheet" href="'.$url.'mazer/assets/css/app.css" />';
			echo '<link type="text/css" rel="stylesheet" href="'.$url.'mazer/assets/css/bootstrap.css" />';

		}else{
			
		}
		
    }   
	
}

if ( ! function_exists('get_settings')){
    function get_settings($key = null)
    {
		$db = \Config\Database::connect();
		$builder = $db->table('settings');
		$res = $builder->where(['var_key'=>$key])->get();
		return $res->getRow()->value;
    }   
	
}

if ( ! function_exists('get_username')){
    function get_username($key = null)
    {

        $db = \Config\Database::connect();
		$builder = $db->table('admins');
		$res = $builder->where(['user_id'=>$key])->get();
		return $res->getRow()->name;
    }

}

if ( ! function_exists('to_slug')){
    function to_slug($str) 
    {
		$chars = [  
					  'ö' => 'o',  
					  'Ö' => 'o',  
					  'ó' => 'o',  
					  'Ó' => 'o',  
					  'ő' => 'o',  
					  'Ő' => 'o',  
					  'ú' => 'u',  
					  'Ú' => 'u',  
					  'ű' => 'u',  
					  'Ű' => 'u',  
					  'ü' => 'u',  
					  'Ü' => 'u',  
					  'á' => 'a',  
					  'Á' => 'a',  
					  'é' => 'e',  
					  'É' => 'e',  
					  'í' => 'i',  
					  'Í' => 'i',  
					];  
		  
		$key = strtr($str, $chars);  
		$key = preg_replace('/[^a-zA-Z0-9]/','-',$key);  
		$key = strtolower($key);
			
		return $key;
    }
}

if ( ! function_exists('to_key')){
    function to_key($str)
    {
		$chars = [
					  'ö' => 'o',
					  'Ö' => 'o',
					  'ó' => 'o',
					  'Ó' => 'o',
					  'ő' => 'o',
					  'Ő' => 'o',
					  'ú' => 'u',
					  'Ú' => 'u',
					  'ű' => 'u',
					  'Ű' => 'u',
					  'ü' => 'u',
					  'Ü' => 'u',
					  'á' => 'a',
					  'Á' => 'a',
					  'é' => 'e',
					  'É' => 'e',
					  'í' => 'i',
					  'Í' => 'i',
					];

		$key = strtr($str, $chars);
		$key = preg_replace('/[^a-zA-Z0-9]/','_',$key);
		$key = strtolower($key);

		return $key;
    }
}

if ( ! function_exists('RandomString')){
    function RandomString($len) 
    {
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < $len; $i++) {
            $randstring .= $characters[rand(0, strlen($characters)-1)];
        }
        return $randstring;
	}
}

if ( ! function_exists('is_admin')){
    function is_admin($key = null)
    {
        $session = \Config\Services::session();
        if($session->get('role_id') < 2){
            return true;
        }else{
            return false;
        }
    }

}

if ( ! function_exists('getUserId')){
    function getUserId()
    {
        $session = \Config\Services::session();
        return $session->id;
    }

}

if ( ! function_exists('getUserEmail')){
    function getUserEmail()
    {
        $session = \Config\Services::session();
        return $session->email;
    }

}

if ( ! function_exists('getUserTel')){
    function getUserTel()
    {
        $session = \Config\Services::session();
        return $session->tel;
    }

}

if ( ! function_exists('getUserAge')){
    function getUserAge()
    {
        $session = \Config\Services::session();
        return $session->age;
    }

}

if ( ! function_exists('is_dev_user')){
    function is_dev_user($key = null)
    {
        $session = \Config\Services::session();
        if($session->get('role_id') == 3){
            return true;
        }else{
            return false;
        }
    }

}

if ( ! function_exists('is_logged_in')){
    function is_logged_in($key = null)
    {
        $session = \Config\Services::session();
        if($session->get('isAdminLoggedIn') == true){
            return true;
        }else{
            return false;
        }
    }

}

if ( ! function_exists('fromDate')){
    function fromDate($time) {
        date_default_timezone_set('Europe/Budapest');
        $time = time() - $time+1; // to get the time since that moment
        $tokens = array (
            31536000 => 'éve',
            2592000 => 'hónapja',
            604800 => 'hete',
            86400 => 'napja',
            3600 => 'órája',
            60 => 'perce',
            1 => 'másodperce'
        );
        foreach ($tokens as $unit => $text) {
            if ($time < $unit) continue;
            $numberOfUnits = floor($time / $unit);
            return $numberOfUnits.' '.$text;
            //.(($numberOfUnits>1)?'s':'');
        }
    }
}

if ( ! function_exists('log_db')){
    function log_db($data) {
        $db = \Config\Database::connect();
        $builder = $db->table('tmp');
        $builder->insert(['data'=>print_r($data, true)]);
    }
}

if ( ! function_exists('set_search_history')){
    function set_search_history($slug, $data) {
        $db = \Config\Database::connect();
        $builder = $db->table('search_history');
        $builder->insert(['user_id'=>getUserId(), 'value'=>json_encode($data), 'slug'=>$slug]);
    }
}

if ( ! function_exists('get_search_history')){
    function get_search_history($slug) {
        $db = \Config\Database::connect();
        $builder = $db->table('search_history');
        $value = $builder->where(['user_id'=>getUserId(), 'slug'=>$slug])->orderBy('id', 'desc')->limit(1)->get();
        if($value->resultID->num_rows != 0){
            $r =  $value->getRowObject()->value;
        }else{
            $r = '{"city_id":"312"}';
        }

        return json_decode($r, true);
    }
}

if ( ! function_exists('filter_clean')){
    function filter_clean($data) {
       $ret_data = [];

       foreach($data as $d=>$c){
           $ret_data[$d]= str_replace('=', '', $c);
       }
       return $ret_data;
    }
}

if ( ! function_exists('isJson')){
    function isJson($string) {
        return ((is_string($string) &&
            (is_object(json_decode($string)) ||
                is_array(json_decode($string))))) ? true : false;
    }
}

if ( ! function_exists('json_out')){
    function json_out($Return=array()) {
            header("Access-Control-Allow-Origin: *");
            header("Content-Type: application/json; charset=UTF-8");
            exit(json_encode($Return));
        }
}

if ( ! function_exists('in_array_r')) {

    function in_array_r($needle, $haystack, $strict = false)
    {
        foreach ($haystack as $item) {
            if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
                return true;
            }
        }

        return false;
    }
}

if ( ! function_exists('access')){
    function access($cred_array) {
            $user_id = getUserId();
            $admin_model = new AdminUserModel();
            $role_data = $admin_model->find($user_id);
            $role_model = new RoleModel();
            $resource_ids = $role_model->find($role_data['role_id'])->resources;
            $res_arr = explode(',', $resource_ids);

            if(is_array($cred_array)){
                foreach ($cred_array as $ca){
                    if(!in_array($ca,$res_arr)){
                        return false;
                    }
                }
            }else return false;
            return true;
        }
}



if ( ! function_exists('TicketNum')){
    function TicketNum()
    {
        return date('Ymd').rand(10,99);
    }
}

if ( ! function_exists('convert_date')){
    function convert_date($d)
    {
        return date('Y-m-d H:i:s', strtotime($d));
    }
}


if ( ! function_exists('_lang_key')){
    function _lang_key($d)
    {
        $content_model = new \App\Models\ContentModel();
        return $content_model->getContentByKey($d);
    }
}








