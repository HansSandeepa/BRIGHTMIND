<?php
require_once 'dbconn.php';
require_once './headerFooter/header.php';

$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);
    $subjects = mysqli_real_escape_string($conn, $_POST['subjects']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $bio = mysqli_real_escape_string($conn, $_POST['bio']);
    $office_hours = mysqli_real_escape_string($conn, $_POST['office_hours']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    
    // Handle image upload
    $image_path = './assets/Apurwa kmim /default-instructor.jpg';
    
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $filename = $_FILES['image']['name'];
        $filetype = pathinfo($filename, PATHINFO_EXTENSION);
        
        if (in_array(strtolower($filetype), $allowed)) {
            $new_filename = 'instructor_' . time() . '.' . $filetype;
            $upload_path = './assets/instructors/' . $new_filename;
            
            // Create directory if it doesn't exist
            if (!file_exists('./assets/instructors/')) {
                mkdir('./assets/instructors/', 0777, true);
            }
            
            if (move_uploaded_file($_FILES['image']['tmp_name'], $upload_path)) {
                $image_path = $upload_path;
            }
        }
    }
    
    $sql = "INSERT INTO instructors (name, position, subjects, email, bio, office_hours, department, image_path) 
            VALUES ('$name', '$position', '$subjects', '$email', '$bio', '$office_hours', '$department', '$image_path')";
    
    if (mysqli_query($conn, $sql)) {
        $success_message = "Instructor added successfully!";
        header("refresh:2;url=instructor-page.php");
    } else {
        $error_message = "Error: " . mysqli_error($conn);
    }
}
?>
<script>
    // Add page-specific CSS after header loads
    document.addEventListener('DOMContentLoaded', function() {
        const css = document.createElement('link');
        css.rel = 'stylesheet';
        css.href = './css/add-instructor.css';
        document.head.appendChild(css);
    });
</script>
    <!-- Form Content -->
    <div class="form-container">
        <div class="form-header">
            <h1>Add New Instructor</h1>
            <a href="instructor-page.php" class="back-btn">← Back to Instructors</a>
        </div>

        <?php if ($success_message): ?>
            <div class="alert alert-success"><?php echo $success_message; ?></div>
        <?php endif; ?>

        <?php if ($error_message): ?>
            <div class="alert alert-error"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <form method="POST" action="" enctype="multipart/form-data" class="instructor-form">
            <div class="form-group">
                <label for="name">Full Name *</label>
                <input type="text" id="name" name="name" required placeholder="e.g., Professor John Doe">
            </div>

            <div class="form-group">
                <label for="position">Position *</label>
                <input type="text" id="position" name="position" required placeholder="e.g., Head of Computer Science Department">
            </div>

            <div class="form-group">
                <label for="subjects">Subjects (comma separated) *</label>
                <textarea id="subjects" name="subjects" required rows="3" placeholder="e.g., Web Development, Python Programming, Database Management"></textarea>
            </div>

            <div class="form-group">
                <label for="email">Email Address *</label>
                <input type="email" id="email" name="email" required placeholder="e.g., instructor@brightmind.com">
            </div>

            <div class="form-group">
                <label for="department">Department *</label>
                <input type="text" id="department" name="department" required placeholder="e.g., Computer Science">
            </div>

            <div class="form-group">
                <label for="office_hours">Office Hours *</label>
                <textarea id="office_hours" name="office_hours" required rows="2" placeholder="e.g., Monday/Wednesday - 10 AM - 12 PM"></textarea>
            </div>

            <div class="form-group">
                <label for="bio">Bio/Description *</label>
                <textarea id="bio" name="bio" required rows="4" placeholder="Brief description about the instructor..."></textarea>
            </div>

            <div class="form-group">
                <label for="image">Profile Image</label>
                <input type="file" id="image" name="image" accept="image/*">
                <small>Accepted formats: JPG, JPEG, PNG, GIF (Max 5MB)</small>
            </div>

            <div class="form-actions">
                <button type="submit" class="submit-btn">Add Instructor</button>
                <a href="instructor-page.php" class="cancel-btn">Cancel</a>
            </div>
        </form>
    </div>

    <!-- FOOTER -->
     <?php
     require_once './headerFooter/footer.php';
     ?>