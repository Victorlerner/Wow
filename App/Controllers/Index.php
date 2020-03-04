<?php

namespace App\Controllers;

use App\Controller;
use App\Models\User;
use App\Models\UserRole;


class Index extends Controller {

	protected function handle() {


		$user     = new User();
		$userRole = new UserRole();


		$this->view->roles      = $userRole->findAll();
		$this->view->usersRoles = $user->getWithRoles();
		$this->view->display( __DIR__ . '/../../templates/index.php' );

	}
}