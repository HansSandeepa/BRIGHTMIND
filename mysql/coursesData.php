<?php

// Select the database
mysqli_select_db($conn, 'brightmindDb');

$createCourse = "CREATE TABLE IF NOT EXISTS course(
    id INT AUTO_INCREMENT PRIMARY KEY,
    courseName VARCHAR(40) NOT NULL,
    paidFree ENUM('paid','free'),
    description VARCHAR(500) NOT NULL,
    img_path VARCHAR(200) NOT NULL,
    price DECIMAL(5,2) NOT NULL DEFAULT 0.0
)";

$res = mysqli_query($conn, $createCourse);

if (!$res) {
    die("Error creating table: " . mysqli_error($conn));
}

$countResult = mysqli_query($conn, "SELECT COUNT(*) AS count FROM course");
if ($countResult) {
    $countRow = mysqli_fetch_assoc($countResult);

    if ((int)$countRow['count'] === 0) {

        $insert = "INSERT INTO course (courseName, paidFree, description, img_path, price) VALUES 
                    ('AI Mastery', 'paid', 'Step into the future with cutting-edge AI knowledge—perfect for those who want to lead the tech revolution.', './assets/courses/ai.jpeg', 299.99),
                    ('Web Development', 'free', 'Build stunning, functional websites with essential tools and coding languages.', './assets/courses/web.jpeg', 0.00),
                    ('Electrical Engineering Pro', 'paid', 'Master the building blocks of electrical systems and bring your engineering ideas to life.', './assets/courses/eengineer.jpeg', 99.99),
                    ('Business Analysis Essentials', 'free', 'Gain the skills to interpret data, make strategic decisions, and drive success.', './assets/courses/f1.jpeg', 0.00),
                    ('Cybersecurity for Everyone', 'free', 'Protect your digital world with simple cybersecurity techniques.', './assets/courses/f11.jpeg', 0.00),
                    ('Financial Market', 'free', 'Understand trading and investments to kickstart your financial journey.', './assets/courses/f8.jpeg', 0.00),
                    ('Microsoft Excel', 'free', 'Learn to organize data and create professional spreadsheets effortlessly.', './assets/courses/f2.jpeg', 0.00),
                    ('Python & AI Development', 'paid', 'Start coding with Python and explore the power of AI.', './assets/courses/f3.jpeg', 199.99)";

        if (!mysqli_query($conn, $insert)) {
            echo "Error inserting data: " . mysqli_error($conn);
        }
    }
} else {
    echo "Error checking table count: " . mysqli_error($conn);
}
