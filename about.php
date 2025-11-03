<?php
    require_once './headerFooter/header.php';
?>
<script>
    // Add page-specific CSS after header loads
    document.addEventListener('DOMContentLoaded', function() {
        const css = document.createElement('link');
        css.rel = 'stylesheet';
        css.href = './css/about.css';
        document.head.appendChild(css);

        const css2 = document.createElement('link');
        css2.rel = 'stylesheet';
        css2.href = './css/feedback.css';
        document.head.appendChild(css2);
    });
</script>
    <!-- full content -->
    <div class="fullContent">
        <!-- About section image -->
        <div class="about-image"></div>

        <!-- About section -->
        <div class="about">
            <h2 class="topic1">About Us</h2>
            <h4 class="sub-topic">Empowering Learning, Anywhere, Anytime</h4>
            <p class="content">Welcome to Bright Mind, where education meets innovation! We are a cutting-edge online
                learning platform designed to provide high-quality courses, interactive quizzes, and certification
                programs to learners worldwide. Our mission is to make education accessible, engaging, and effective for
                everyone.</p>
        </div>

        <!-- Mission section image -->
        <div class="mission-image"></div>

        <!-- Mission section -->
        <div class="mission">

            <h2 class="topic1">Our Mission</h2>
            <h4 class="sub-topic">We believe that learning should be:</h4>
            <ul>
                <li>
                    <p class="content">Accessible: Available to anyone with an internet connection</p>
                </li>
                <li>
                    <p class="content">Engaging: Interactive courses that keep you motivated</p>
                </li>
                <li>
                    <p class="content">Practical: Skills you can apply in real-world situations</p>
                </li>
                <li>
                    <p class="content">Affordable: High-quality education without the high costs</p>
                </li>
            </ul>

        </div>

        <!-- Why choose main section -->
        <div class="main">
            <!-- Why choose us section -->
            <h1 class="choose-topic">WHY CHOOSE US?</h1>

            <!-- Why choose us section first row -->
            <div class="choose1">
                <div class="card">
                    <h2>Learn Anywhere</h2>
                    <h4>Access courses on any device, anytime</h4>
                </div>

                <div class="card">
                    <h2>Expert Teachers</h2>
                    <h4>Learn from industry leaders and top educators</h4>
                </div>

            </div>
            <!-- Why choose us section second row -->
            <div class="choose2">
                <div class="card">
                    <h2>Career Growth</h2>
                    <h4>Gain skills that employers value</h4>
                </div>

                <div class="card">
                    <h2>Vibrant Community</h2>
                    <h4>Connect with fellow learners worldwide</h4>
                </div>

            </div>
        </div>

    </div>

    <!--Feedback Form-->
   

    <div class="container">
        
        <h2 class="ftopic">Feedback Form</h2>

        <form method="POST" action="feedback.php" >
            <label>Name</label>
            <input type="text" name="name" required>

            <label>Email</label>
            <input type="email" name="email" required>

            <label>Message</label>
            <textarea name="message" rows="3" required></textarea>

            <label>Rating (1-5)</label>
            <input type="number" name="rating" min="1" max="5" required>

            <button type="submit" name="submit" class="tbutton">Submit Feedback</button>
        </form>

        <a href="feedback_view.php" class="btn-secondary">View All Feedback</a>
    </div>

    <?php require_once './headerFooter/footer.php'; ?>