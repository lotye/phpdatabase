<?php
require_once('connect.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_Get['id']))
    { 

    
    $Id=$_Get['id'];
    $req="DELETE FROM message WHERE id='$Id' ";
    $result=$conn->query($req);

    if($result)

{
    echo "Supression des informations avec succès";
}
}
?>
</body>
</html>
