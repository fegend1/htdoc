<?php require("dbconnector.php");?>

<body>
    <h2>List of registered client </h2>
    <table border='1' cellpadding="20px">
        <thead>
            <tr>
                <th>S/No</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Date of birth</th>
                <th>dats of REG</th>
                <th>Username</th>
                <th>Option</th>
                <th>Option</th>
</tr>
</thead>
<tbody>
    <?php
    $db = new PDO($dsn,$db_user,$dbpass,$erromode);
    $get = $db->prepare('SELECT * FROM users WHERE status = 1 ORDER BY NAME ASC');
    $get->execute(); 
    $info = $get->fetch(PDO::FETCH_ASSOC);
    // echo '
    // <tr>
    // <td> '.$info['name'].'</td>
    // <td>'.$info['phone'].'</td>
    // </tr>';
    $a= 1;
    while($info=$get->fetch(PDO::FETCH_ASSOC)){?>
    <tr>
    <td>
            <?php echo $a++;?>
    </td>
        <td>
            <?php echo strtoupper($info['name']);?>
    </td>
    <td>
            <?php echo $info['phone'];?>
    </td>
    <td>
            <?php echo ucwords($info['email']);?>
    </td>
    <td>
            <?php echo date($info['reg_date']);?>
    </td>
    <td>
            <?php echo $info['status'];?>
    </td>
    <td>
            <?php echo $info['username'];?>
    </td>
    <td>
        <a href="edituser.php?user=<?php echo $info['id'];?>">
    Edit info</a>
    </td>
    <td>
        <a href="deleteuser.php?user=<?php echo $info['id'];?>">
    Delete user
   </a>
    </td>
    </tr>
    <?php
    
    }
    ?>



