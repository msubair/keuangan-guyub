<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('bulan_list'))
{
	function bulan_list($kosong = 0)
	{
		$CI =& get_instance();
		$CI->lang->load('calendar');

		if($kosong) $result[0] = 'Semua bulan';
		$result['01'] = $CI->lang->line('cal_january');
		$result['02'] = $CI->lang->line('cal_february');
		$result['03'] = $CI->lang->line('cal_march');
		$result['04'] = $CI->lang->line('cal_april');
		$result['05'] = $CI->lang->line('cal_may');
		$result['06'] = $CI->lang->line('cal_june');
		$result['07'] = $CI->lang->line('cal_july');
		$result['08'] = $CI->lang->line('cal_august');
		$result['09'] = $CI->lang->line('cal_september');
		$result['10'] = $CI->lang->line('cal_october');
		$result['11'] = $CI->lang->line('cal_november');
		$result['12'] = $CI->lang->line('cal_december');
		
		return $result;
	}
}

if ( ! function_exists('tahun_list'))
{
	function tahun_list($kosong = 0, $dari = -10, $sampai = 0)
	{
		$CI =& get_instance();
		$CI->lang->load('calendar');

		if($kosong) $result[0] = 'Semua tahun';
		
		$y = date("Y");
		for($i = $dari; $i <= $sampai; $i++)
		{
			$result[$y + $i] = $y + $i;
		}

		return $result;
	}
}

if ( ! function_exists('nama_bulan'))
{
	function nama_bulan($bulan)
	{
		$array_bulan = bulan_list();
		if(strlen($bulan) == 1) $bulan = '0'.$bulan;
		return $array_bulan[$bulan];
	}
}

?>
