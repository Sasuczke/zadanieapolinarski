<?php require_once __DIR__.'/../action/editusers.php'; ?>
<form action="admin/action/editusers.php" method="post">
	<div class="container">
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Login</span>
			</div>
			<input type="text" name="user_login" class="form-control" placeholder="..." aria-label="user_login" aria-describedby="basic-addon1" value="<?= $user['login']?>">
		</div>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">Imie:</span>
			</div>
			<input type="text" name="user_imie" class="form-control" placeholder="..." aria-label="user_imie" aria-describedby="basic-addon1" value="<?= $user['imie']?>">
		</div>
    <div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">Nazwisko:</span>
			</div>
			<input type="text" name="user_nazwisko" class="form-control" placeholder="..." aria-label="user_nazwisko" aria-describedby="basic-addon1" value="<?= $user['nazwisko']?>">
		</div>
    <div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">Haslo:</span>
			</div>
      <input type="password" name="user_password" class="form-control" placeholder="..." aria-label="user_password" aria-describedby="basic-addon1" value="<?= $user['password']?>">
		</div>
		<div class="btn_container">
			<input type="submit" class="btn btn-primary" value="Edytuj użytkownika!">
		</div>
		<input type="text" name="id_user" class="invisible" value="<?= $_GET['id']?>">
	</div>
</form>	
