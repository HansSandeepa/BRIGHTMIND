<?php
require_once 'dbconn.php';

$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $courseName = mysqli_real_escape_string($conn, $_POST['courseName']);
    $paidFree = mysqli_real_escape_string($conn, $_POST['paidFree']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $price = $paidFree === 'paid' ? (float)$_POST['price'] : 0.00;
    
    // Handle image upload
    $img_path = './assets/courses/default-course.jpg';
    
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $filename = $_FILES['image']['name'];
        $filetype = pathinfo($filename, PATHINFO_EXTENSION);
        
        if (in_array(strtolower($filetype), $allowed)) {
            $new_filename = 'course_' . time() . '.' . $filetype;
            $upload_path = './assets/courses/' . $new_filename;
            
            // Create directory if it doesn't exist
            if (!file_exists('./assets/courses/')) {
                mkdir('./assets/courses/', 0777, true);
            }
            
            if (move_uploaded_file($_FILES['image']['tmp_name'], $upload_path)) {
                $img_path = $upload_path;
            }
        }
    }
    
    $sql = "INSERT INTO course (courseName, paidFree, description, img_path, price) 
            VALUES ('$courseName', '$paidFree', '$description', '$img_path', $price)";
    
    if (mysqli_query($conn, $sql)) {
        $success_message = "Course added successfully!";
        header("refresh:2;url=courses.php");
    } else {
        $error_message = "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Course - Bright Mind</title>
    <link rel="icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/add-course.css">
</head>
<body>
    <!-- Header section from add-instructor.php -->
    <?php require_once './headerFooter/header.php'; ?>

    <!-- Form Content -->
    <div class="form-container">
        <div class="form-header">
            <h1>Add New Course</h1>
            <a href="courses.php" class="back-btn">← Back to Courses</a>
        </div>

        <?php if ($success_message): ?>
            <div class="alert alert-success"><?php echo $success_message; ?></div>
        <?php endif; ?>

        <?php if ($error_message): ?>
            <div class="alert alert-error"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <form method="POST" action="" enctype="multipart/form-data" class="course-form">
            <div class="form-group">
                <label for="courseName">Course Name *</label>
                <input type="text" id="courseName" name="courseName" required 
                       placeholder="e.g., Web Development Fundamentals">
            </div>

            <div class="form-group">
                <label for="paidFree">Course Type *</label>
                <select id="paidFree" name="paidFree" required onchange="togglePriceField()">
                    <option value="free">Free</option>
                    <option value="paid">Paid</option>
                </select>
            </div>

            <div class="form-group" id="priceField" style="display: none;">
                <label for="price">Price *</label>
                <input type="number" id="price" name="price" step="0.01" min="0"
                       placeholder="e.g., 99.99">
            </div>

            <div class="form-group">
                <label for="description">Course Description *</label>
                <textarea id="description" name="description" required rows="4" 
                         placeholder="Detailed description of the course..."></textarea>
            </div>

            <div class="form-group">
                <label for="image">Course Image *</label>
                <input type="file" id="image" name="image" accept="image/*" required>
                <small>Accepted formats: JPG, JPEG, PNG, GIF (Max 5MB)</small>
            </div>

            <div class="form-actions">
                <button type="submit" class="submit-btn">Add Course</button>
                <a href="courses.php" class="cancel-btn">Cancel</a>
            </div>
        </form>
    </div>

    <!-- Footer section from add-instructor.php -->
    <?php require_once './headerFooter/footer.php'; ?>

    <script>
        function togglePriceField() {
            const paidFree = document.getElementById('paidFree');
            const priceField = document.getElementById('priceField');
            const priceInput = document.getElementById('price');
            
            if (paidFree.value === 'paid') {
                priceField.style.display = 'block';
                priceInput.required = true;
            } else {
                priceField.style.display = 'none';
                priceInput.required = false;
                priceInput.value = '';
            }
        }
    </script>
</body>
</html>
<?php mysqli_close($conn); ?>