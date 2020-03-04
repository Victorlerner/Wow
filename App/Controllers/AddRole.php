<?php

namespace App\Controllers;


use App\Controller;
use App\Models\UserRole;


class AddRole  extends  Controller {

	protected function handle(){
		if(isset( $_POST['rolename']{1})){
			$_POST = filter_input_array( INPUT_POST, FILTER_SANITIZE_STRING );
			$model           = new UserRole();
			$model->rolename = $_POST['rolename'];
			$model->insert();
			echo 1;
		} else {
			echo 0;
		}

	}
}