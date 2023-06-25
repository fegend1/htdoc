<?php 
echo '<link rel="stylesheet" href="style.css">';
require('dbconnector.php');
if(isset($_GET['user']) && ($_GET['user']>0)){
    $user = $_GET['user'];
    $db = new PDO($dsn, $db_user,$dbpass, $erromode);
    $get = $db->prepare('SELECT * FROM users WHERE id = ?');
    $get->execute([$user]);
    $row = $get->fetch(PDO::FETCH_ASSOC);

?>
<form action="edituserprocessor.php" method="post">
    <input type="hidden" name="user" value="<?php echo $_GET['user']; ?>"> 
    <label for="name">name :</label>
    <input type="text" value="<?php echo $row['name']; ?>" id="name"  name = "name"><br><br>
    <label for="email">Email :</label>
    <input type="text" value="<?php echo $row['email']; ?>" id="email"  name = "email" placeholder ='enter gmail'><br><br>
    <label for="number">Number :</label>
    <input type="number" value="<?php echo $row['phone']; ?>" id="number"  name = "phone"><br><br>
    <label for="date">Date :</label>
    <input type="date" value="<?php echo $row['reg_date']; ?>" id="date"  name = "reg_date"><br><br>
    <label for="username">Username :</label>
    <input type="text" value="<?php echo $row['username']; ?>" name = "username" placeholder="@username"><br><br>
    <label for="paswd">Password :</label>
    <input type="password" value="<?php echo $row['password']; ?>" id="paswd"  name = "password"><br><br>
    <input type="file" value="<?php echo $row['image_path']; ?>" id="image" name="passport" />
    <input type="reset" value="clear">
    <input type="submit" value="submit">
</form>

<?php
} else{
 echo 'Access Denied, please visit the prev page';
}