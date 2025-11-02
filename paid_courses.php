<?php require_once './headerFooter/header.php' ?>
<script>
    // Add page-specific CSS after header loads
    document.addEventListener('DOMContentLoaded', function() {
        const css1 = document.createElement('link');
        css1.rel = 'stylesheet';
        css1.href = './css/individual_courses.css';
        document.head.appendChild(css1);

        const css2 = document.createElement('link');
        css2.rel = 'stylesheet';
        css2.href = './css/paid_courses.css';
        document.head.appendChild(css2);
    });
</script>

<!-- CONTECT SECTION -->
<section>

    <!-- title container -->
    <div id="title_container">
        <div id="paidTitle">
            <h1 id="courseTitle">
                AI Mastery:
                <br>
                From Beginner to Expert in ChatGPT and Midjourney
            </h1>
            <p id="courseDescription">
                This course is designed to take you from a complete beginner to an expert in AI, focusing on
                <br>
                two of the most powerful tools available today: ChatGPT and Midjourney.
                <br>
                You will learn how to leverage these tools to create stunning images and generate human-like text,
                <br>
                all while gaining a deep understanding of the underlying principles of AI.
            </p>
            <button id="enrollBtn" onclick="location.href='./paymentPage.html'">
                <div id="btnMainText">Enroll for: $19.99</div>
                <div id="btnSubText">Discount: 10%</div>
            </button>

            <video autoplay muted loop id="video">
                <source src="./assets/individual_courses/video.mp4" type="video/mp4">
            </video>

        </div>

        <!-- ratings -->
        <div id="ratings">
            <div>
                <h3 class="ratings_title">2 Course Series</h3>
                <span class="ratings_subtext">Earn a career credential that demonstrates your expertis</span>
            </div>

            <div>
                <h3 class="ratings_title">4.5 <img src="./assets/individual_courses/star-7207.svg" alt="star"
                        id="ratings_star"></h3>
                <span class="ratings_subtext">Earn a career credential that demonstrates your expertis</span>
            </div>

            <div>
                <h3 class="ratings_title">1 Month</h3>
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
                <td>Introduction to AI and ChatGPT</td>
                <td>2 hours</td>
            </tr>
            <tr>
                <td>Module 2</td>
                <td>Understanding Midjourney</td>
                <td>3 hours</td>
            </tr>
            <tr>
                <td>Module 3</td>
                <td>Advanced ChatGPT Techniques</td>
                <td>4 hours</td>
            </tr>
            <tr>
                <td>Module 4</td>
                <td>Creating Stunning Images with Midjourney</td>
                <td>5 hours</td>
            </tr>
            <tr>
                <td>Module 5</td>
                <td>Real-World Applications of AI</td>
                <td>6 hours</td>
            </tr>
            <tr>
                <td>Module 6</td>
                <td>Final Project and Certification</td>
                <td>8 hours</td>
            </tr>

        </table>
    </div>
    </div>

    <!-- requirements -->
    <div id="requirements" class="course_details">
        <h2 id="requirements_title">Requirements</h2>
        <ul id="requirements_list">
            <li>Basic computer skills</li>
            <li>Willingness to learn</li>
            <li>No prior knowledge of AI is required</li>
        </ul>
    </div>

    <!-- description -->
    <div id="description" class="course_details">
        <h2 id="description_title">Description</h2>
        <p id="description_text" class="text_content">
            This course is designed to take you from a complete beginner to an expert in AI, focusing on two of the
            <br>
            most powerful tools available today: ChatGPT and Midjourney.
            <br><br>
            You will learn how to leverage these tools to create stunning images and generate human-like text, <br>
            all while gaining a deep understanding of the <br>
            underlying principles of AI.
            <br><br>
            By the end of this course, you will have the skills and knowledge to use AI in your own projects and
            <br>
            applications, and you will be well on your way to becoming an AI expert.
        </p>
    </div>

    <!-- who is this course for -->
    <div id="who_is_this_course_for" class="course_details">
        <h2 id="who_is_this_course_for_title">Who is this course for?</h2>
        <p id="who_is_this_course_for_text" class="text_content">
            This course is designed for anyone who wants to learn about AI and how to use it in their own projects.
            <br>
            Whether you are a complete beginner or have some experience with AI, this course will provide you with
            the <br>
            knowledge and skills you need to succeed.
        </p>
    </div>
</section>



<!-- FOOTER SECTION -->
<?php require_once './headerFooter/footer.php' ?>