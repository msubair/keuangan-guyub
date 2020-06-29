<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Open Flash Chart 2 Loader Plug-in for Codeigniter
 *
 * @package CodeIgniter
 * @author  thomas (at) kbox . ch
 *
 */

// This simply switches the working dir temporarily and loads
// the ofc2 classes
//
// NOTE: some classes may be commented out in open-flash-chart.php

$old_cwd = getcwd();
chdir(dirname(__FILE__)); //change cwd to the dir of this file
require_once('ofc2/open-flash-chart.php');
chdir($old_cwd);
