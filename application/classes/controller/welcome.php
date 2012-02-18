<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
    
    public $template = 'welcome/index';
    
    public function action_index() {
	$this->template->set('data', $_POST)
		->set('name', $this->request->param('id'))
		->set('hello');
	$data = array(
	    'name' => 'val',
	    'qwe' => 'man',
	);
	$this->response->body($this->template);
    }
} // End Welcome
