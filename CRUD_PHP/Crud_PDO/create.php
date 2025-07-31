<?php
include 'db.php';

?>

<form method="POST">
<input type="text" name="name" /><br>
<input type="submit" name="sub" />
</form>

<?php
if(isset($_REQUEST['sub'])) {
$name = $_REQUEST['name'];
$sql = "INSERT INTO usernames (username) VALUES (?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name]);
}
?>