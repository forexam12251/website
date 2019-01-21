

<?php
$toEmail = "db_connection.php";
$mailHeaders = "From: " . $_POST["your_name"] . "<". $_POST["your_email"] .">\r\n";
if(mail($toEmail, $_POST["comments"], $_POST["your_phone"], $mailHeaders)) {
echo"<p class='success'>Message send.</p>";
} else {
echo"<p class='Error'>Problem with sending message.</p>";
}
?>