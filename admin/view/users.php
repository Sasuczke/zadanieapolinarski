<?php
require_once __DIR__.'/../action/users.php'
?>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col" style="width: 50px;">#</th>
      <th scope="col">Login</th>
      <th scope="col">Imię</th>
      <th scope="col">Hazwisko</th>
      <th scope="col">Hasło</th>
      <th scope="col" style="width: 150px;">Edycja</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($users as $user): ?>
        <tr>
            <td style="font-weight: 700;"><?=$user['id']?> </td>
            <td><?=$user['login'] ?> </td>
            <td><?=$user['imie'] ?> </td>
            <td><?=$user['nazwisko']?> </td>
            <td><?=$user['password']?> </td>
            <td>
                <a href="?admin&edit&id=<?=$user['id']?>" class="btn-warning">Edytuj</a>
                <a href="?admin&delete&id=<?=$user['id']?>" class="btn-danger">Usuń</a>
            </td>
      </tr>
      <?php endforeach; ?>
      </tbody>
</table>