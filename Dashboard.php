<?php
include_once("dbconn.php");

session_start();

  

if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$student = $_SESSION['username'];


if (!$conn) {
    die('Connection failed: '. mysqli_error($conn));
}

$user_sql = "SELECT * FROM user WHERE user_name = '$student' ";
$user_result = mysqli_query($conn, $user_sql);

if($user_result && mysqli_num_rows($user_result) > 0) {
    $user_data = mysqli_fetch_assoc($user_result);
    $user_name= $user_data["user_name"];
    $user_email= $user_data["email"];
    $gr_project = $user_data['gr_project'];
    $qu_marks = $user_data['qu_marks'];
    $in_assignment = $user_data['in_assignment'];
    $city = $user_data['city'];
} else {
    $user_name = 'N/A';
    $user_email = 'N/A';
    $gr_project = 'N/A';
    $qu_marks = 'N/A';
    $in_assignment = 'N/A';
    $city = '';
}

?>
<?php
include_once("headerFooter/header.php");
?>

<script>
    // Add page-specific CSS after header loads
    document.addEventListener('DOMContentLoaded', function() {
        const css = document.createElement('link');
        css.rel = 'stylesheet';
        css.href = './css/Dashbord.css';
        document.head.appendChild(css);
    });
</script>

<section>
    <div id="main1">
         <div id="main2">
                <p id="p1">overview</p>
            </div>

        <div id="sub_main">
            <div id="courses">
                <div id="topic">
                    <p id="p11">Courses</p>
                    <p id="p22">Your recent courses</p>
                </div>
                <div id="c">
                    <p class="classp110">Basics of c language</p>
                    <div id="p_b"><progress id="progress_bar" max="100" value="67"></progress></div>
                </div>
                <div id="maths">
                    <p class="classp110">Basics maths</p>
                    <div id="p_b"><progress id="progress_bar" max="100" value="40"></progress></div>
                </div>
                <div id="javascript">
                    <p class="classp110">javascript</p>
                    <div id="p_b"><progress id="progress_bar" max="100" value="90"></progress></div>
                </div>
                <div id="maltimedia">
                    <p class="classp110">maltimedia</p>
                    <div id="p_b"><progress id="progress_bar" max="100" value="20"></progress></div>
                </div>
                <div id="hardware">
                    <p class="classp110">hardware</p>
                    <div id="p_b"><progress id="progress_bar" max="100" value="45"></progress></div>
                </div>
            </div>

            <div id="rewards">
                <div id="topic2">
                    <p id="rewards_topic">Rewards</p>
                    <p id="achievements">Your latest achievements</p>
                    <div id="icon">
                        <div id="logo"><i id="link1"><img src="Dashbord_img/star-circle.svg" alt="" id="img1"></i></div>
                        <div id="logo"><i id="link1"><img src="Dashbord_img/icons-awards.jpg" alt="" id="img1"></i></div>
                        <div id="logo"><i id="link1"><img src="Dashbord_img/unnamed.webp" alt="" id="img1"></i></div>
                        <div id="logo"><i id="link1"><img src="Dashbord_img/diamond-icon-vector.jpg" alt="" id="img1"></i></div>
                        <div id="logo"><i id="link1"><img src="Dashbord_img/images.png" alt="" id="img1"></i></div>
                    </div>
                </div>
                <div id="crtificate">
                    <div id="topic_certificat">
                        <p id="c_t_1">Certificates (4)</p>
                    </div>
                    <div id="Certificat_file">
                        <div id="c_f_1"><i><img src="Dashbord_img/IL3DN_Documentation.png" alt="" id="c_f_i"></i></div>
                        <div id="c_f_1"><i><img src="Dashbord_img/IL3DN_Documentation.png" alt="" id="c_f_i"></i></div>
                        <div id="c_f_1"><i><img src="Dashbord_img//IL3DN_Documentation.png" alt="" id="c_f_i"></i></div>
                        <div id="c_f_1"><i><img src="Dashbord_img/IL3DN_Documentation.png" alt="" id="c_f_i"></i></div>
                    </div>
                </div>
            </div>

            <div id="quizzes">
                <div id="c1">
                    <p id="topicq">CA Marks</p>
                    <p id="topicq2">Your recent performance</p>
                </div>
                <div id="c2">
                    <div id="c_activity">
                        <p id="group_project">group project</p>
                    </div>
                    <div id="c_marks">
                        <div id="c_m_v">
                            <p id="marks_value"><?php echo $gr_project; ?></p>
                        </div>
                        <div id="c_m_v1">
                            <p id="grade">
                                <?php 
                                if($gr_project >= 7) echo 'Great';
                                elseif($gr_project >= 5) echo 'Good';
                                else echo 'Failed';
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div id="c3">
                    <div id="c_activity">
                        <p id="Quizzes_Marks">Quizzes Marks</p>
                    </div>
                    <div id="c_marks">
                        <div id="c_m_v">
                            <p id="marks_value"><?php echo $qu_marks; ?></p>
                        </div>
                        <div id="c_m_v1">
                            <p id="grade">
                                <?php 
                                if($qu_marks >= 7) echo 'Great';
                                elseif($qu_marks >= 5) echo 'Good';
                                else echo 'Failed';
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div id="c4">
                    <div id="c_activity">
                        <p id="individual_assignment">individual assignment</p>
                    </div>
                    <div id="c_marks">
                        <div id="c_m_v">
                            <p id="marks_value"><?php echo $in_assignment; ?></p>
                        </div>
                        <div id="c_m_v1">
                            <p id="grade">
                                <?php 
                                if($in_assignment >= 7) echo 'Great';
                                elseif($in_assignment >= 5) echo 'Good';
                                else echo 'Failed';
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div id="c5">
                    <button id="result">result</button>
                </div>
            </div>

            <div id="forum_activitys">
                <div id="f1">
                    <div id="f1_d1">
                        <p id="user1">Logged in user</p>
                    </div>
                    <div id="f1_d2">
                        <div id="f1_d1_1">
                            <img src="Dashbord_img/6522516.png" alt="" id="f1_d1_1_i">
                        </div>
                        <div id="f1_d1_2">
                            <p id="f1_d1_2_p">
                                <?php echo $user_name; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div id="f2">
                    <p id="user2">Country:</p>
                    <p id="user3">Sri Lanka</p>
                </div>
                <div id="f3">
                    <p id="user2">City/town:</p>
                    <p id="user3"><?php echo $city; ?></p>
                </div>
                <div id="f4">
                    <p id="user2">Email address:</p>
                    <p id="user4"><?php echo $user_email; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once('headerFooter/footer.php');
?>