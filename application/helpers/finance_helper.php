<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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

if ( ! function_exists('to_words'))
{
	function to_words($x)	
	{
		$number = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
		if ($x < 12)
		{
			return $number[$x];
		}
		elseif ($x < 20)
		{
			return $number[$x - 10] . " belas";
		}
		elseif ($x < 100)
		{
			$unit = ($x % 10 != 0) ? " ".$number[$x % 10] : "";
			return $number[(int) $x / 10] . " puluh" . $unit ;
		}
		elseif ($x < 200)
		{
			$unit = ($x - 100 != 0) ? " ".to_words($x - 100) : "";
			return "seratus" . $unit;
		}
		elseif ($x < 1000)
		{
			$unit = ($x % 100 != 0) ? " ".to_words($x % 100) : "";
			return $number[(int) $x / 100] . " ratus" . $unit;
		}
		elseif ($x < 2000)
		{
			$unit = ($x - 1000 != 0) ? " ".to_words($x - 1000) : "";
			return "seribu" . $unit;
		}
		elseif ($x < 1000000)
		{
			$unit = ($x % 1000 != 0) ? " ".to_words($x % 1000) : "";
			return to_words((int) $x / 1000) . " ribu" . $unit;
		}
		elseif ($x < 1000000000)
		{
			$unit = ($x % 1000000 != 0) ? " ".to_words($x % 1000000) : "";
			return to_words((int) $x / 1000000) . " juta" . $unit;
		}
	}
}

?>
