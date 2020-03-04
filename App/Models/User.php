<?php

namespace App\Models;

use App\Db;
use App\Model;

class User extends Model {

	public const TABLE = 'user';

	public $username;
	public $role_id;

	public function getWithRoles() {
		$sql = "SELECT username,rolename
		       FROM  " . static::TABLE . "
RIGHT JOIN user_role
ON user.role_id = user_role.id;";
		$db  = new Db();

		return $db->query(
			$sql,
			[],
			static::class );
	}


}