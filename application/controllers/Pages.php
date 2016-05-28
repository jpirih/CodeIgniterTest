<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Pages extends CI_Controller {
	
	function index( $page = 'home') 
	{

		
		if(!file_exists(APPPATH.'views/pages/'.$page.'.php'))
		{
			show_404();
		}
		else 
		{
			$data['title'] = "Home";
			$data['main_heading'] ="Dobrodošli - Welcome" ;

			$this->parser->parse('templates/header', $data);
			$this->parser->parse('pages/home', $data);
			$this->parser->parse('templates/footer', $data);

		}
	}

	
	public function about($page ='about')
	{
		$data['title'] = "About me";
		$data['main_heading'] = "Vse o meni izveš tu";
		if (! file_exists(APPPATH.'views/pages/'.$page.'.php')) 
		{
			show_404();
			
		}
		else 
		{
			$this->parser->parse('templates/header', $data);
			$this->parser->parse('pages/about', $data);
			$this->parser->parse('templates/footer', $data);
		}

		
		
	}
		
}
