<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

    $id = $_GET['id'];
    $email = $_POST['email'];
    $nome = $_POST['name'];
    $message = $_POST['message'];


$from = $email;

$to = "marcio.dinhu@gmail.com";

$subject = "Mensagem de $nome";

$message =  $message;

$headers = "De:". $from;

mail($to, $subject, $message, $headers);

if($id==1)
{
    echo '<script language="javascript">';
    echo 'alert("message successfully sent");';
    echo "window.location='index.html';
          </script>";
}
else
{
    echo '<script language="javascript">';
    echo 'alert("mensagem enviada com sucesso");';
    echo "window.location='portuguese.html';
      </script>";

}
//header('Location: ');

?>