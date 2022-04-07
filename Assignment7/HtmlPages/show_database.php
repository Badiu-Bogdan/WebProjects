<?php
    $con = mysqli_connect("localhost","root","","Lab7");
    if (!$con) {
        die('Could not connect: ' . $con->connect_error);
    }

    $result = mysqli_query($con, "SELECT * FROM products where category Like '%" . $_GET['category']. "%'");

    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Category</th><th>Description</th></tr>";
    while ($row = mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['category'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";

    }
    echo "</table>";

    mysqli_close($con);
?>
