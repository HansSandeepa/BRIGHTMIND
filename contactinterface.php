<?php
require_once './headerFooter/header.php';
require_once './dbConn.php';
?>

<!DOCTYPE html>
<head>
    <style>
        table, th, td, tr{
            border-collapse: collapse;
            text-align: center;
            width: 1000px;
            height: 20px;
            background-color: #addfd4ff;
            margin: 200px;
        }

        table{
            margin-left: 250px;
        }

        td, tr, th{
            width: 500px;
        }

        h1{
            color: black;
            text-align: center;
        }

    </style>
</head>
<body>
    <h1>Show All Feedbacks</h1>
<table border ="1">
            <tr>
                <th>UserId</th>
                <th>Name</th>
                <th>Email</th>
                <th>Telephone number</th>
                <th>Subject line</th>
                <th>Message</th>
            </tr>
<?php
$result = $conn->query("SELECT * FROM contactdetails");
if($result) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['tnumber']}</td>
                <td>{$row['subline']}</td>
                <td>{$row['message']}</td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='6' style='color: red; text-align: center;'>Error fetching data: " . $conn->error . "</td></tr>";
}
?>
</table>

</body>
<?php

require_once './headerFooter/footer.php';

?>