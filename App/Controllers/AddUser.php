<?php

namespace App\Controllers;

use App\Controller;
use App\Models\User;


class AddUser  extends  Controller {


	protected function handle(){
		if(isset( $_POST['name']{1})){
			$_POST = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );
			$model           = new User();
			$model->username = $_POST['name'];
			$model->role_id = $_POST['role'];
			$model->insert();
			echo 1;
		} else {
			echo 0;
		}
	}
}