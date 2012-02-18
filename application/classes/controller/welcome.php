<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
    
    public $template = 'welcome/index';
    
    public function action_index()
	{
		$this->response->body('hello, world!');
	}
	
	public function action_index1() {
	    $name = $this->request->param('id');
	    if ($name === NULL) {
		$name = 'Кролик';
	    }
	    $this->template->set('name',$name);
	    $this->template->set('data', $_POST);
	    $this->response->body($this->template);
	}

} // End Welcome
