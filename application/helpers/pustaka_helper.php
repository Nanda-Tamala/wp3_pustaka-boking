<?php 

function cek_login()
{
	$CI = get_instance();
	if (!$CI->session->userdata('email')) {
		$CI->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Akses ditolak, Karena Anda belum login!!</div>');
		if ($CI->session->userdata('role_id') == 1) {
			redirect('autentifikasi','refresh');
		} else {
			redirect('home','refresh');
		}
		
	} else {
		$role_id = $CI->session->userdata('role_id');
		$id_user = $CI->session->userdata('id_user');
	}
}
function cek_user()
{
    $ci = get_instance();
    $role_id = $ci->session->userdata('role_id');
    if ($role_id != 1) 
    {
        $ci->session->set_flashdata('pesan', '<div class="alert alertdanger" role="alert">Akses tidak diizinkan </div>');
        redirect('home');
    }
}