<html lang="tr">
<body>
<?php

echo "<table>";
echo "<tr>";
echo "<th>id</th>";
echo "<th>first_name</th>";
echo "<th>last_name</th>";
echo "<th>email</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
</body>
</html>