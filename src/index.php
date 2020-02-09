<!DOCTYPE html>
<html lang="tr">
<body>



</body>
</html>

<?php
//$db = new PDO('mysql:host=database;dbname=mydb;charset=utf8mb4', 'myuser', 'secret');
//$databaseTest = ($db->query('SELECT * FROM dockerSample'))->fetchAll(PDO::FETCH_OBJ);
?>
<?php //foreach($databaseTest as $row): ?>
<!--    <p>Hello, --><? //= $row->name ?><!--</p>-->
<?php //endforeach; ?>
<?php
/*$host = 'db';
$user = 'root';
$pass = 'example';
$dbname = 'myDB';
$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to MySQL successfully!";

$sql = "SELECT * FROM Test";;
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        require 'index.view.php';
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
$conn->close();
*/?>