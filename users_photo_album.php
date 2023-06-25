<link rel="stylesheet" href="gallary.css">
<?php
include('header.php');
require('dbconnector.php');
$db = new PDO($dsn,$db_user,$dbpass,$erromode);
$get = $db->prepare("SELECT * FROM users WHERE status = 1");
$get->execute();
echo'<div class="wrapper">';
while($data = $get->fetch(PDO::FETCH_ASSOC)){
    ?>

<div class="image_container">
        <div class="btns">
       <a href="deleteuser.php?user=<?php echo $data['id'];?>">Delete</a>
       <a href="edituser.php?user=<?php echo $data['id'];?>">Edit</a>

        </div>
        <div class="image"><img src="<?php echo $data['image_path'];?>" title="<?php echo $data['username'];?>"></div>
        <div class="footer"><p><?php echo $data['name'];?></p></div>
    </div>
    <?php
}
echo '</div>';
