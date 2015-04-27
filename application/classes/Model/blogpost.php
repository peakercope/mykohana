<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Blogpost extends ORM
{
	protected $belongs_to = array(
								'blogcategories' => array(
									'model' => 'blogcategorie',
									'foreign_key' => 'category_id')
								);
	
}