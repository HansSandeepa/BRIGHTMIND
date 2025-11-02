<?php require_once './headerFooter/header.php' ?>
<script>
    // Add page-specific CSS after header loads
    document.addEventListener('DOMContentLoaded', function() {
        const css = document.createElement('link');
        css.rel = 'stylesheet';
        css.href = './css/instructor-page.css';
        document.head.appendChild(css);
    });
</script>

<!-- CONTENT SECTION -->
<div class="instructor-profiles-container">
    <?php
    require_once './dbConn.php';

    $query = "SELECT * FROM instructors";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo "error running select query: " . mysqli_connect_error();
        return;
    }

    if (mysqli_num_rows($result) > 0) {
        $counter = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            // Split subjects by comma for better formatting
            $subjects = explode(',', $row['subjects']);
            $formatted_subjects = '';
            foreach ($subjects as $subject) {
                $formatted_subjects .= trim($subject) . ' ,<br> ';
            }
            $formatted_subjects = rtrim($formatted_subjects, ' ,<br> ');
    ?>
            <div class="instructor-profile">
                <div class="header">
                    <h2>Meet Instructor <?php echo $counter; ?></h2>
                </div>
                <div class="details">
                    <div class="image">
                        <img src="<?php echo htmlspecialchars($row['image_path']); ?>"
                            alt="<?php echo htmlspecialchars($row['name']); ?>"
                            onerror="this.src='./assets/default-instructor.jpg'">
                    </div>
                    <div class="info">
                        <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                        <p class="position"><?php echo htmlspecialchars($row['position']); ?></p>
                        <p class="subject">Teaching: <br><?php echo $formatted_subjects; ?></p>
                        <p class="contact">
                            <b>Email:</b><br>
                            <a href="mailto:<?php echo htmlspecialchars($row['email']); ?>">
                                <?php echo htmlspecialchars($row['email']); ?>
                            </a>
                        </p>
                        <p class="bio"><?php echo htmlspecialchars($row['bio']); ?></p>
                        <div class="other">
                            <p>Office Hours: <br><?php echo nl2br(htmlspecialchars($row['office_hours'])); ?></p>
                            <p>Department: <?php echo htmlspecialchars($row['department']); ?></p>
                        </div>
                    </div>
                </div>
            </div>
    <?php
            $counter++;
        }
    } else {
        echo '<div class="no-instructors">
                    <p>No instructors found. Click "Add New Instructor" to add one.</p>
                  </div>';
    }
    mysqli_close($conn);
    ?>
</div>

<!-- FOOTER -->
<?php require_once './headerFooter/footer.php' ?>