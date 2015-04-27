<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller_Template {

	public $template = 'v_base';

	public function before(){
		parent::before();
		$this -> template -> block_center = View::factory('templates/v_index');
		$this -> template -> styles = '/css/style.css';

	}

	public function action_index()
	{
		$id = $this -> request -> param('id');
		if(!$id){
			$id = 'home';
		}
		$text = ORM::factory('page')
				->where('url','=',$id)
				->find();
		$this -> template -> block_center = View::factory('templates/v_index')
											-> bind('text',$text)
											-> bind('id',$id);
	}

	public function action_blog(){
		$this -> template -> block_center = View::factory('templates/v_blog');
	}

	public function action_insert()
	{
		$a = ORM::factory('blogpost');
		$a -> title = 'Blog title';
		$a -> body = 'blog post body';
		$a -> datetime = date('y-m-d');
		$a -> save();
		$this ->redirect('/');
	}

	public function action_page()
	{
		$a = ORM::factory('page');
		$a -> name = 'About';
		$a -> body = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.';
		$a -> url = 'about';
		$a -> save();
		$this ->redirect('/');
	}
	public function action_blogcategories()
	{
		$blogcategories = ORM::factory('blogcategorie')->find_all();
		$content = View::factory('templates/v_blogcategorie')->bind('blogcategories', $blogcategories);
		$this -> template -> block_center = $content;
	}
}