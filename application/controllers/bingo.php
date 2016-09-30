<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class bingo extends Application
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
		$source = $this->quotes->get(5);
		
		$this->data = array_merge($this->data, $source);
				
		$this->render();
	}
}