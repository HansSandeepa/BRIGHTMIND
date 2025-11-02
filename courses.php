<?php require_once './headerFooter/header.php' ?>
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


    <div id="Fone" class="paid_content courses">
        <img id="Ai" src="./assets/courses/Ai.jpeg" alt="Ai image">
        <p id="aititle">AI Mastery</p>
        <p id="aipara">Step into the future with cutting-edge AI knowledge—perfect for those who want to lead the tech revolution.</p>
        <p id="ED"><img id="aicap" src="./assets/courses/cap.png">Earn a Degree</p>
    </div>

    <div id="Sone" class="paid_content courses">
        <img id="web" src="./assets/courses/web.jpeg" alt="Web image">
        <p id="webtitle">Web Development Pro</p>
        <p id="webpara">Build stunning, functional websites with essential tools and coding languages.</p>
        <p id="ED"><img id="aicap" src="./assets/courses/cap.png">Earn a Degree</p>
    </div>

    <div id="Tone" class="paid_content courses">
        <img id="eleceng" src="./assets/courses/eengineer.jpeg" alt="Electrical Engineering image">
        <p id="elecengtitle">Electrical Engineering</p>
        <p id="elecengpara">Master the building blocks of electrical systems and bring your engineering ideas to life.</p>
        <p id="ED"><img id="aicap" src="./assets/courses/cap.png">Earn a Degree</p>
    </div>

    <div id="Lone" class="paid_content courses">
        <img id="banalyze" src="./assets/courses/banalyze.jpeg" alt="Business Analyze image">
        <p id="banalyzetitle">Business Analysis Essentials</p>
        <p id="banalyzepara">Gain the skills to interpret data, make strategic decisions, and drive success.</p>
        <p id="ED"><img id="aicap" src="./assets/courses/cap.png">Earn a Degree</p>

    </div>


</div>

<!--Free courses content-->

<p id="free">Learn for Free</p>
<p id="freepara">Start your journey from here.<br>Free 100%</p>
<div id="freecourses">
    <div id="f1" class="courses free-content">
        <img id="f1img" src="./assets/courses/f1.jpeg" alt="">
        <p id="f1title">Financial Market</p>
        <p id="f1para">Understand trading and investments to kickstart your financial journey.</p>
    </div>
    <div id="f2" class="courses free-content">
        <img id="f2img" src="./assets/courses/f2.jpeg" alt="Excel course image">
        <p id="f2title">Microsoft Excel</p>
        <p id="f1para">Learn to organize data and create professional spreadsheets effortlessly.</p>
    </div>
    <div id="f3" class="courses free-content">
        <img id="f3img" src="./assets/courses/f3.jpeg" alt="Python image">
        <p id="f3title">Python & AI Development</p>
        <p id="f1para">Start coding with Python and explore the power of AI.</p>
    </div>
    <div id="f4" class="courses free-content">
        <img id="f4img" src="./assets/courses/f4.jpeg" alt="Cybersecurity image">
        <p id="f4title">Cybersecurity for Everyone</p>
        <p id="f4para">Protect your digital world with simple cybersecurity techniques.</p>
    </div>

</div>

<!--Second row-->
<details>
    <summary id="more">See more</summary>
    <div id="freecourses2">
        <div id="f5" class="courses paid_content">
            <img id="f5img" src="./assets/courses/f5.jpeg" alt="Chinese image">
            <p id="f5title">Chinese for Beginner</p>
            <p id="f5para">Learn essential Mandarin phrases and vocabulary to kickstart your language journey.</p>
        </div>
        <div id="f6" class="courses paid_content">
            <img id="f6img" src="./assets/courses/f6.jpeg" alt="Excel course image">
            <p id="f6title">SQL for Everyone</p>
            <p id="f6para">Discover the basics of querying and managing databases with beginner-friendly SQL.</p>
        </div>
        <div id="f7" class="courses paid_content">
            <img id="f7img" src="./assets/courses/f7.jpeg" alt="Python image">
            <p id="f7title">Food and Beverage Management</p>
            <p id="f7para">Gain foundational insights into managing food and beverage operations effectively.</p>
        </div>
        <div id="f8" class="courses paid_content">
            <img id="f8img" src="./assets/courses/f8.jpeg" alt="Cybersecurity image">
            <p id="f8title">Leadership Skills</p>
            <p id="f8para">Develop key strategies for leading teams and making confident decisions.</p>
        </div>

    </div>

    <!--Third row-->
    <div id="freecourses3">
        <div id="f9" class="courses paid_content">
            <img id="f9img" src="./assets/courses/f9.jpeg" alt="Linux image">
            <p id="f9title">Introduce Linux</p>
            <p id="f9para">Learn the basics of Linux and step into the open-source world with confidence.</p>
        </div>
        <div id="f10" class="courses paid_content">
            <img id="f10img" src="./assets/courses/f10.jpeg" alt="Data science image">
            <p id="f10title">Data science Math skills</p>
            <p id="f10para">Master essential math concepts to build a strong foundation for data science.</p>
        </div>
        <div id="f11" class="courses paid_content">
            <img id="f11img" src="./assets/courses/f11.jpeg" alt="Cryptography image">
            <p id="f11title">Cryptography</p>
            <p id="f11para">Understand encryption and protect sensitive information in the digital age.</p>
        </div>
        <div id="f12" class="courses paid_content">
            <img id="f12img" src="./assets/courses/f12.jpeg" alt="Google ads image">
            <p id="f12title">Google Ads for Beginner</p>
            <p id="f12para">Learn to create effective ad campaigns and grow your business online.</p>
        </div>
    </div>
</details>

<!-- FOOTER SECTION  -->
<?php require_once './headerFooter/footer.php' ?>