<?php include'application/bdd_connection.php';

$query = 'SELECT * FROM User ';
$resultSet = $pdo->query($query);
$artistes = $resultSet->fetchAll();

$query = 'SELECT * FROM News ';
$resultSet = $pdo->query($query);
$news = $resultSet->fetchAll();

$query = 'SELECT * FROM Videos ';
$resultSet = $pdo->query($query);
$videos = $resultSet->fetchAll();



    if(isset($_POST["mail"])){
        $email = $_POST["mail"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//            $emailErr = "Invalid email format";
//            echo $emailErr;
        }else {
            $query = 'INSERT INTO Newsletter (Email) VALUES(?)';
            $resultSet = $pdo->prepare($query);
            $resultSet->execute([$_POST['mail']]);

            $to = $_POST['mail'];
            $subject = "Newsletter Subscription";
            $txt = "Hello fellaz, you have subcribed to our newsletter! If you want to unsubscribe click on the following link:";
            $headers = "From: webmaster@example.com" . "\r\n" . "CC: somebodyelse@example.com";
            mail($to,$subject,$txt,$headers);
        }

    }
//if(isset($_GET["del"])) {
//    $query = "DELETE FROM Newsletter WHERE Id=?";
//    $resultSet=$pdo->prepare($query);
//    $resultSet->execute([$_GET["del"]]);
//}

//   ######### DO NOT COMMENT ###########
$template = 'index';
include 'layout.phtml';



?>

<td><a href="liste_admins.php?del=<?php echo $admin["Id"]?>" class="btn btn-danger waves-effect waves-light with-md"><i class="mdi mdi-trash-can"></i>Supprimer</a></td>

