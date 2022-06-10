<?php require_once("connect.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <h4 class="bordure">afficher les choses</h4>
    <table>
        <div class="bordure"> 
        <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>body</th>
        <th>priorité</th>
        <th>type</th>
        <th>Supprimer</th>
        <th>Modifier</th>
        </tr>
        </div>
        <?php
      $req="SELECT * FROM message";
         $resultat=mysqli_query($conn,$req);
         while($aff=mysqli_fetch_assoc($resultat)){
    //  $req=$conn->query("SELETE * FROM message ");
    //      while($aff=$req->fetch_assoc()){?>
        <tr>
             <td> <?php echo  $aff["id"]; ?> </td>

             <td> <?php echo  $aff["name"]; ?> </td>

             <td> <?php echo  $aff["body"]; ?> </td>

             <td> <?php echo  $aff["priority"]; ?> </td>

             <td> <?php echo  $aff["type"]; ?> </td>
             <td><a href="suprimer.php?id=<?php echo $aff["id"] ?>">Suprimer</a></td>
             <td><a href="modifier.php?id=   <?php echo $aff["id"] ?> ">Modifier</a></td>

        </tr>
        <?php } ?>
    </table>
</body>
</html>