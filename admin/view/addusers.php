<?php require_once __DIR__.'/../action/addusers.php'; ?>
<form action="admin/action/addusers.php" method="post">
	<div class="container">
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Login</span>
			</div>
			<input type="text" name="login" class="form-control" placeholder="..." aria-label="login" aria-describedby="basic-addon1">
		</div>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">Imie:</span>
			</div>
			<input type="text" name="imie" class="form-control" placeholder="..." aria-label="imie" aria-describedby="basic-addon1">
		</div>
    <div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">Nazwisko:</span>
			</div>
			<input type="text" name="nazwisko" class="form-control" placeholder="..." aria-label="nazwisko" aria-describedby="basic-addon1">
		</div>
    <div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text">Haslo:</span>
			</div>
      <input type="password" name="password" class="form-control" placeholder="..." aria-label="password" aria-describedby="basic-addon1">
		</div>
		<div class="btn_container">
			<input type="submit" class="btn btn-primary" value="Dodaj użytkownika!">
		</div>
	</div>
</form>	
