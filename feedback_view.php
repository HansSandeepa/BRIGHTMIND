<?php 
require_once 'dbConn.php';
require_once './headerFooter/header.php';
?>



     <!-- Feedback View -->
      
<h2 class="topic">All Feedback</h2>

<div class="table-container">

  <a href="about.php" class="btn-add"> Add New Feedback</a>

  <?php
  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM feedback WHERE id=$id");
    echo "<div class='alert alert-danger'>Feedback deleted successfully!</div>";
  }

  if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $rating = $_POST['rating'];

    $conn->query("UPDATE feedback SET name='$name', email='$email', message='$message', rating='$rating' WHERE id=$id");
    echo "<div class='alert alert-success'>Feedback updated successfully!</div>";
  }
  ?>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Rating</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $data="SELECT * FROM feedback ORDER BY id DESC";
      $result = mysqli_query($conn,$data);
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>
            <form method='POST'>
              <td>{$row['id']}<input type='hidden' name='id' value='{$row['id']}'></td>
              <td><input type='text' name='name' value='{$row['name']}'></td>
              <td><input type='email' name='email' value='{$row['email']}'></td>
              <td><textarea name='message'>{$row['message']}</textarea></td>
              <td><input type='number' name='rating' value='{$row['rating']}' min='1' max='5'></td>
              <td>
                <button type='submit' name='update' class='fbutton' >Update</button>
                <a href='feedback_view.php?delete={$row['id']}' class='btn-danger' onclick='return confirm(\"Delete this feedback?\")'>Delete</a>
              </td>
            </form>
          </tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<?php require_once './headerFooter/footer.php'; ?>
    <!-- FOOTER SECTION  -->
   