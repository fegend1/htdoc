<link rel="stylesheet" href="style-2.css">
<?php 
include('header.php');
echo'';

?>
<div class="container">
<h2>login in </h2>
<form action="login-processor.php" method="post">
<input type="text" name="username" require placeholder="@username" /><br>
<input type="password" name="password" placeholder="password" /><br>
<input id="submit" type="submit" value="submit" style="width:30vh" />
</form>
</div>








