<h1>user management <a href="create.php">create</a></h1><hr>

<?php
include 'db.php';
if(isset($_REQUEST['id'])) {
$id = $_REQUEST['id'];
$sqll = "DELETE FROM usernames WHERE id=?";
$del = $pdo->prepare($sqll);
$del->execute([$id]);

}
$sql ="SELECT * FROM usernames";
$stmt = $pdo->query($sql);
$stmt->execute();
while($val = $stmt->fetch(PDO::FETCH_ASSOC)) {
echo $val['username']." "."<a href='view.php?id=".$val['id']."'>View</a> <a href='update.php?id=".$val['id']."'>Edit</a> <a href='?id=".$val['id']."'>Delete</a><br>" ;
}
