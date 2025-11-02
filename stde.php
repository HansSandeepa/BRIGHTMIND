<?php

include_once("headerFooter/header.php");

// Show flash messages based on query params (deleted or error)
if (isset($_GET['deleted'])) {
    echo '<script>document.addEventListener("DOMContentLoaded", function(){ alert("Record deleted successfully"); });</script>';
}
if (isset($_GET['error'])) {
    $err = htmlspecialchars($_GET['error']);
    echo '<script>document.addEventListener("DOMContentLoaded", function(){ alert("Error deleting record: ' . $err . '"); });</script>';
}

?>
<script>
    // Add page-specific CSS after header loads
    document.addEventListener('DOMContentLoaded', function() {
        const css = document.createElement('link');
        css.rel = 'stylesheet';
        css.href = './css/stde.css';
        document.head.appendChild(css);
    });
</script>

    <!-- CONTECT SECTION -->
    <section id="admintable">
    <h2>Registered Students</h2>
    <table border="1" class="studeail">
        <tr class= "tablerow">
        <th class="tableheading">Username</th>
        <th class="tableheading">Email</th>
        <th class="tableheading">Delete</th>
        </tr>
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'brightmindDb', 3307);
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }   
        $sql = "SELECT stuid,stuname, email FROM student";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>" . $row['stuname'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>
                            <form method='POST' action='./delete.php' onsubmit='return confirm(\"Are you sure you want to delete this student?\");'>
                                <input type='hidden' name='stuid' value='" . $row['stuid'] . "'>
                                <input type='submit' class='del' value='Delete'>
                            </form>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No records found</td></tr>";
        }

        ?>

 
</table>
<?php


include_once("./headerFooter/footer.php");


?>