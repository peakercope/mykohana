<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Blogcategorie extends ORM
{
	protected $_has_many = array(
		'blogposts' => array(
			'model' => 'blogpost',
			'foreign_key' => 'category_id')
		);
}