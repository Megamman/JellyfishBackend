<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Copy extends MY_Controller {

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

	 function index()
    {
 	   $this->();
    }

	function pagename()
	{
		/*
		$data = array(
			'links'		=> $this->form_edit_links()
		);
		$this->build('', $data);
		*/
	}

	public function add()
	{
		//this command loads a view from the views folder
		$this->build('');
	}

	public function update(){

		//this command loads a view from the views folder
		$this->build('');
	}
}
