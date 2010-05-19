<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('to_words'))
{
	function to_words($value)
	{
		
	}
}

if ( ! function_exists('to_rupiah'))
{
	function to_rupiah($value)
	{
		if($value < 0)
		{
			return '( Rp '.number_format(abs($value), 0, '', '.').' )';
		}
		else
		{
			return 'Rp '.number_format($value, 0, '', '.').'  ';
		}
	}
}

?>
