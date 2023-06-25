<?php 
echo '<link rel="stylesheet" href="style.css">';
?>
<form action="signup_process.php" method="post" novalidate>
    <label for="name">name :</label>
    <input type="text" id="name" name = "name"><br><br>
    <label for="email">Email :</label>
    <input type="text" id="email" name = "email" placeholder ='enter gmail'><br><br>
    <label for="number">Number :</label>
    <input type="number" id="number" name = "phone"><br><br>
    <label for="date">Date :</label>
    <input type="date" id="date" name = "reg_date"><br><br>
    <label for="username">Username :</label>
    <input type="text" name = "username" placeholder="@username"><br><br>
    <label for="paswd">Password :</label>
    <input type="password" id="paswd" name = "password"><br><br>
    <input type="reset" value="clear">
    <input type="submit" value="submit">
</form>