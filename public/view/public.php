<form action="public/action/login.php" method="post">
	<div class="login_center mx-auto col-3">
		<div class="form-group">
      <label for="login" class="my-1 h6">Podaj nazwę użytkownika na którego chcesz się zalogować</label>
			<input type="login" name="login" class="form-control" id="login" placeholder="LOGIN">
			<label for="password" class="my-1 h6">Podaj hasło dla użytkownika</label>
			<input type="password" name="password" class="form-control" id="password" placeholder="HASŁO">
		</div>
		<input type="submit" class="btn btn-primary" value="Zaloguj się">
	</div>
</form>