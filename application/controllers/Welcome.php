<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
	    $data['mensagem'] = 'Olá mundo';
		$this->load->view('ola_mundo', $data);
	}

	public function teste( $parametro1, $parametro2 ) {
	    print 'Parametro1 ==> ' . $parametro1 . '<br>';
	    print 'Parametro2 ==> ' . $parametro2 . '<br>' ;
    }
}
