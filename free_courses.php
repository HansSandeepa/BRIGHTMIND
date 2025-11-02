<?php
require_once './headerFooter/header.php';
?>

<script>
    // Add page-specific CSS after header loads
    document.addEventListener('DOMContentLoaded', function() {
        const css1 = document.createElement('link');
        css1.rel = 'stylesheet';
        css1.href = './css/individual_courses.css';
        document.head.appendChild(css1);

        const css2 = document.createElement('link');
        css2.rel = 'stylesheet';
        css2.href = './css/free_courses.css';
        document.head.appendChild(css2);
    });
</script>

<?php
$courseId = isset($_GET['id']) ? (int)$_GET['id'] : null;
if ($courseId) {
    require_once './dbConn.php';
    $stmt = mysqli_prepare($conn, "SELECT * FROM course WHERE id = ?");
    mysqli_stmt_bind_param($stmt, 'i', $courseId);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    $course = mysqli_fetch_assoc($res);
    mysqli_free_result($res);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    if ($course) {
        $courseName = $course['courseName'] ?? '';
        $imgPath = $course['img_path'] ?? '';
        $description = $course['description'] ?? '';
        // you can also render $course data into the page as needed
    }
}
?>


<!-- CONTECT SECTION -->
<section>

    <!-- title container -->
    <div id="title_container">
        <div id="paidTitle">

            <div id="courseTitleContainer">

                <div>

                    <h1 id="courseTitle">
                        <?php echo htmlspecialchars($courseName); ?>
                    </h1>
                    <p id="courseDescription">
                        <?php echo htmlspecialchars($description); ?>
                    </p>
                    <button id="enrollBtn" onclick="location.href='./login.php'">
                        <div id="btnMainText">Enroll for Free!</div>
                        <div id="btnSubText">Limited time offer</div>
                    </button>
                </div>

                <div>
                    <img src="<?php echo $imgPath?>" alt="<?php echo $imgPath?>" id="courseImage" style='width:400px; height:auto;'>
                </div>
            </div>

        </div>

        <!-- ratings -->
        <div id="ratings">
            <div>
                <h3 class="ratings_title">3 Course Series</h3>
                <span class="ratings_subtext">Earn a career credential that demonstrates your expertis</span>
            </div>

            <div>
                <h3 class="ratings_title">4.8 <img src="./assets/individual_courses/star-7207.svg" alt="star"
                        id="ratings_star"></h3>
                <span class="ratings_subtext">Earn a career credential that demonstrates your expertis</span>
            </div>

            <div>
                <h3 class="ratings_title">3 Month</h3>
                <span class="ratings_subtext">at 7 hours per week.</span>
            </div>

            <div>
                <h3 class="ratings_title">Flexible Scedule</h3>
                <span class="ratings_subtext">Learn at anywhere you want.</span>
            </div>
        </div>
    </div>


    <!-- COURSE DETAILS SECTION -->
    <!-- course content -->
    <div id="course_content" class="course_details">
        <h2 id="course_content_title">Course Content</h2>
        <table id="course_content_table">
            <tr>
                <th>Module</th>
                <th>Topics</th>
                <th>Duration</th>
            </tr>
            <tr>
                <td>Module 1</td>
                <td>Introduction to Financial Markets</td>
                <td>6 hours</td>
            </tr>
            <tr>
                <td>Module 2</td>
                <td>Understanding Stocks and Equity Markets</td>
                <td>10 hours</td>
            </tr>
            <tr>
                <td>Module 3</td>
                <td>Bonds and Fixed Income Securities</td>
                <td>12 hours</td>
            </tr>
            <tr>
                <td>Module 4</td>
                <td>Derivatives: Options and Futures</td>
                <td>14 hours</td>
            </tr>
            <tr>
                <td>Module 5</td>
                <td>Investment Strategies and Portfolio Management</td>
                <td>16 hours</td>
            </tr>
            <tr>
                <td>Module 6</td>
                <td>Risk Management in Financial Markets</td>
                <td>12 hours</td>
            </tr>
            <tr>
                <td>Module 7</td>
                <td>Global Financial Markets and Trends</td>
                <td>14 hours</td>
            </tr>
        </table>
    </div>

    <!-- requirements -->
    <div id="requirements" class="course_details">
        <h2 id="requirements_title">Requirements</h2>
        <ul id="requirements_list">
            <li>Basic understanding of mathematics</li>
            <li>Interest in financial markets and investments</li>
            <li>No prior experience in finance is required</li>
            <li>Access to a computer or mobile device with an internet connection</li>
        </ul>
    </div>

    <!-- description -->
    <div id="description" class="course_details">
        <h2 id="description_title">Description</h2>
        <p id="description_text" class="text_content">
            The Financial Market course is designed to provide you with a comprehensive understanding of how
            financial markets operate and their role in the global economy. Whether you're a beginner or looking to
            deepen your knowledge, this course covers essential topics such as stock markets, bonds, derivatives,
            and investment strategies.
            <br><br>
            Through engaging lessons and real-world examples, you'll learn how to analyze market trends, make
            informed investment decisions, and manage financial risks effectively. By the end of this course, you'll
            have the skills and confidence to navigate the complexities of financial markets and take control of
            your financial future.
        </p>
    </div>

    <!-- who is this course for -->
    <div id="who_is_this_course_for" class="course_details">
        <h2 id="who_is_this_course_for_title">Who is this course for?</h2>
        <p id="who_is_this_course_for_text" class="text_content">
            This course is ideal for anyone interested in understanding financial markets and investments.
            <br>
            Whether you're a beginner looking to build a foundation or a professional seeking to enhance your knowledge,
            this course will provide valuable insights and practical skills to navigate the financial world effectively.
        </p>
    </div>
</section>




<!-- FOOTER SECTION  -->
<?php require_once './headerFooter/footer.php' ?>