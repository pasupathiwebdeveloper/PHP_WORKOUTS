<?php
include 'db.php';
$id = $_REQUEST['id'];
$sqll = "SELECT * FROM usernames WHERE id=?";
$stmt_exe = $pdo->prepare($sqll);
$stmt_exe->execute([$id]);
$val = $stmt_exe->fetch(PDO::FETCH_ASSOC);
?>

<form method="POST">
<input type="text" name="name"  value= "<?php echo $val['username']; ?>"/><br>
<input type="submit" name="sub" />
</form>

<?php

if(isset($_REQUEST['sub'])) {
$name = $_REQUEST['name'];
$sql = "UPDATE usernames SET username = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name,$id]);
}
?>