<?php
require_once './headerFooter/header.php';
require_once './dbConn.php';
?>
<script>
    // Add page-specific CSS after header loads
    document.addEventListener('DOMContentLoaded', function() {
        const css = document.createElement('link');
        css.rel = 'stylesheet';
        css.href = './css/courses.css';
        document.head.appendChild(css);
    });
</script>

<!-- CONTECT SECTION -->


<!--First section-->
<div>
    <div id="choosepath">
        <p id="para1">Choose your path<br>and Grow your<br>career</p>
        <img id="leftimg" src="./assets/courses/courseleftimg.jpg">
    </div>
</div>





<!--Exclusive content-->

<p id="exclusive">Exclusive Content</p>
<div id="excourses">


    <?php
    // load paid courses dynamically (separate query)
    $paidSelect = "SELECT * FROM course WHERE paidFree = 'paid'";
    $resPaid = mysqli_query($conn, $paidSelect);

    if (!$resPaid) {
        error_log('DB query failed (paid): ' . mysqli_error($conn));
    } else {
        //echo '<form id="paidCourseForm" action="./paid_courses.php" method="GET"">';
        //echo '<input type="hidden" name="courseId" id="courseIdInput" value="">';

        while ($row = mysqli_fetch_assoc($resPaid)) {

            $id = (int)$row['id'];
            $img = htmlspecialchars($row['img_path'] ?? '', ENT_QUOTES);
            $title = htmlspecialchars($row['courseName'] ?? 'Untitled', ENT_QUOTES);
            $desc = htmlspecialchars($row['description'] ?? '', ENT_QUOTES);

            // use a paid-specific class so CSS can target paid area separately if needed
            echo '
                <div id="paid' . $id . '" class="courses paid-content" data-course-id="' . $id . '">
                    <img id="paid' . $id . 'img" src="' . $img . '" alt="' . $title . '">
                    <p id="paid' . $id . 'title">' . $title . '</p>
                    <p id="paid' . $id . 'para">' . $desc . '</p>
                </div>
            ';
        }

        //echo '</form>';

        mysqli_free_result($resPaid);
    }
    ?>


</div>

<!--Free courses content-->

<p id="free">Learn for Free</p>
<p id="freepara">Start your journey from here.<br>Free 100%</p>
<div id="freecourses" style='padding-bottom: 20px'>

    <?php
    // load free courses with a separate query
    $freeSelect = "SELECT * FROM course WHERE paidFree = 'free'";
    $resFree = mysqli_query($conn, $freeSelect);

    if (!$resFree) {
        error_log('DB query failed (free): ' . mysqli_error($conn));
    } else {
        while ($row = mysqli_fetch_assoc($resFree)) {
            $id = (int)$row['id'];
            $img = htmlspecialchars($row['img_path'] ?? '', ENT_QUOTES);
            $title = htmlspecialchars($row['courseName'] ?? 'Untitled', ENT_QUOTES);
            $desc = htmlspecialchars($row['description'] ?? '', ENT_QUOTES);

            echo '
                <div id="f' . $id . '" class="courses free-content" data-course-id="' . $id . '">
                    <img id="f' . $id . 'img" src="' . $img . '" alt="' . $title . '">
                    <p id="f' . $id . 'title">' . $title . '</p>
                    <p id="f' . $id . 'para">' . $desc . '</p>
                </div>
            ';
        }
        mysqli_free_result($resFree);
    }

    mysqli_close($conn);
    ?>
</div>

<script src="./js/coursesEventHandle.js"></script>

<!-- FOOTER SECTION  -->
<?php require_once './headerFooter/footer.php' ?>