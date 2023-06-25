<?php
echo '<link rel="stylesheet" href="style.css">';
require('dbconnector.php');
$db = new PDO($dsn, $db_user,$dbpass, $erromode);
$get = $db->prepare("SELECT * FROM users WHERE status = 1");
$get->execute();
?>
<form action="image-processor.php" method="post" enctype="multipart/form-data">
    <label for="fname">Name:</label>
    <select id="fname" name="name" onchange="putusername()" />
<option>select a user </option>
<?php
while($row=$get->fetch(PDO::FETCH_ASSOC)){
    echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
}?></select>
    <label for="caption">IMAGE CAPTION</label>
    <input type="file" accept="image/*" name="picture"><br><br>
    <input type="submit" value="sumit">
</form>