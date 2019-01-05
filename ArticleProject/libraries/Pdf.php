<?php defined('BASEPATH') or exit('No direct script access allowed');
// require_once __DIR  . '';

// require_once dirname(__FILE__) ."";
class Pdf extends TCPDF
{
	 function __construct() 
 	{
  		parent::__construct();
  		require_once __DIR__.'/tcpdf/tcpdf.php';
    }
}
/*Author:Tutsway.com */
/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */