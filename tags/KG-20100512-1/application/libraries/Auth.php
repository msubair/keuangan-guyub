<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth {

    function check_user_authentification($admin_only = 0)
    {
		$CI =& get_instance();
		$CI->load->library('session');
		if(!$CI->session->userdata('SESS_USER_ID'))
		{
			$data = array(
				'SESS_LOGIN_STATEMENT' => 'Akses Ditolak ;)',
				'ERRMSG_ARR' => 'Anda harus login terlebih dahulu !'
			);
			$CI->session->set_userdata($data);
			redirect('login');
 		}
 		elseif($admin_only && (!$CI->session->userdata('ADMIN')))
 		{
			$data = array(
				'SESS_LOGIN_STATEMENT' => 'Akses Ditolak ;)',
				'ERRMSG_ARR' => 'Anda harus login sebagai admin untuk dapat mengakses bagian management'
			);
			$CI->session->set_userdata($data);
			redirect('login');
		}
    }
}

?>
