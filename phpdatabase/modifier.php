<?php require_once("connect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h1>Contact</h1>

    <form action="process-form.php" method="post">

        <label for="name">Nom</label>
        <input type="text" id="name" name="name"><br> <br>
        
        <label for="message">Message</label>
        <textarea id="message" name="message"></textarea> <br> <br>

        <label for="priority">Priorité</label>
        <select id="priority" name="priority">
            <option value="1">bas</option>
            <option value="2" selected>Medium</option>
            <option value="3">Haut</option>
        </select>

        <fieldset>
            <legend>Type</legend>   bv

            <label>
                <input type="radio" name="type" value="1" checked>
                Complainte
            </label>

            <br>

            <label>
                <input type="radio" name="type" value="2">
                Suggestion
            </label>

        </fieldset>

        <label>
            <input type="checkbox" name="terms">
            j'accepte les termes du contrat
        </label>

        <br>

        <button>Envoyé</button>

    </form>

    <?php
    if(isset($_Get["Id"]));
    {
        $name = $_POST["i"];
        $message = $_POST["message"];
        $priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);
        $type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);


    $Id=$_Get["Id"];

    $req=$conn->query("UPDATE message SET name='$name',body= '$message',priority= '$priority'WHERE id= $id");
    if( $req){
        echo "Modification Reussie";
    }
}

    ?>
    

</body>
</html>