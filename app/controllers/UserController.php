<?php 

class UserController extends BaseController {
	
	public function index() {
		
		$list = [
		   (object)[ 'id' => 1, 'name' => 'John Smith', 'email' => 'john.smith@gmail.com', 'phone' => '0815541212', 'category_id' => 1, 'category_name' => 'Friends' ],
		   (object)[ 'id' => 2, 'name' => 'Susan White', 'email' => 'susan.white@gmail.com', 'phone' => '0812589894', 'category_id' => 1, 'category_name' => 'Friends' ],
		   (object)[ 'id' => 3, 'name' => 'Marry Black', 'email' => 'marry.black@gmail.com', 'phone' => '0815541219', 'category_id' => 2, 'category_name' => 'Family' ]
		
		];
		
		return View::make("users/list")
		    ->with('title', 'Daftar User')
		    ->with('list', $list);
	}
	
}