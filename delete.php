<?php
// Delete handler: expects POST with stuid
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $stuid = isset($_POST["stuid"]) ? (int)$_POST["stuid"] : 0;

    if ($stuid <= 0) {
        // missing/invalid id
        header("Location: ./stde.php?error=missing_id");
        exit();
    }

    // Use your application DB (brightmindDb) and a prepared statement to avoid injection

    require_once './dbConn.php';
    
    if ($conn->connect_error) {
        header("Location: ./stde.php?error=db_connect");
        exit();
    }

    $stmt = $conn->prepare("DELETE FROM student WHERE stuid = ?");
    if ($stmt === false) {
        header("Location: ./stde.php?error=prepare_failed");
        exit();
    }

    $stmt->bind_param('i', $stuid);
    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        header("Location: ./stde.php?deleted=1");
        exit();
    } else {
        $stmt->close();
        $conn->close();
        header("Location: ./stde.php?error=exec_failed");
        exit();
    }
}
