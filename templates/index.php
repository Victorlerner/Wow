<?php
/** @var \App\View $this */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WoW</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/main.js"></script>
</head>
<body>
<div class="container">
    <h1>User</h1>


    <form id="add-user-role" action="">
        <h2>Add new user role</h2>
        <label>
            Role name
            <input name="rolename" type="text" value="" class="form-control">
        </label>
        <button type="button" onclick="addUserRole()" class="btn btn-success ">Add role</button>

    </form>


    <form id="add-user" action="">
        <h2>Add new user</h2>
        <labal>
            Select user role
			<?php if ( isset( $this->roles[0]->rolename{1} ) ): ?>
                <select name="role" class="form-control">
					<?php foreach ( $this->roles as $role ): ?>
                        <option value="<?php echo $role->id ?? ''; ?>"><?php echo $role->rolename ?? ''; ?></option>
					<?php endforeach; ?>
                </select>
			<?php endif; ?>
        </labal>

        <label>
            User name
            <input type="text" name="name" value="" class="form-control">
        </label>
        <button type="button" onclick="addUser()" class="btn btn-success ">Add user</button>
    </form>

    <h1>User List</h1>
	<?php
	if ( isset( $this->usersRoles[0] ) ): ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">User Role</th>
            </tr>
            </thead>
            <tbody>
			<?php foreach ( $this->usersRoles as $k => $roles ):
				if ( ! isset( $roles->username{1} ) ) {
					continue;
				}
				?>
                <tr>
                    <th scope="row"><?php echo $k; ?></th>
                    <td><?php echo $roles->username; ?></td>
                    <td><?php echo $roles->rolename; ?></td>
                </tr>
			<?php endforeach; ?>


            </tbody>
        </table>
	<?php endif; ?>
</div>
</body>
</html>