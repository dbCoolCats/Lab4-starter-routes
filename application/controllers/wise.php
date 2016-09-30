<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Wise extends Application
{
	function __construct()
	{
		parent::__construct();
	}
	/**
	 * Homepage for our app
	 */
	public function index()
	{
		// The view we want shown
		$this->data['pagebody'] = 'justone';
		
		// Building list of authors, to pass on to our view 
		$source = $this->quotes->get(1);
		
		$this->data = array_merge($this->data, $source);

	/*	
		$this->data['what'] = $source['what'];
		$this->data['who'] = $source['who'];
		$this->data['mug'] = $source['mug'];
	*/
				
		$this->render();
	}

	public function bingo()
	{
		$this->data['pagebody'] = 'justone';		
		$source = $this->quotes->get(6);
		$this->data = array_merge($this->data, $source);
		$this->render();
	}
}