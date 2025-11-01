<?php

// Select the database
mysqli_select_db($conn, 'brightmindDb');

// Create instructors table
$createTable = "CREATE TABLE IF NOT EXISTS instructors (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        position VARCHAR(150) NOT NULL,
        subjects TEXT NOT NULL,
        email VARCHAR(100) NOT NULL,
        bio TEXT,
        office_hours TEXT,
        department VARCHAR(100),
        image_path VARCHAR(255) DEFAULT './assets/Apurwa/default-instructor.jpg',
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

if (!mysqli_query($conn, $createTable)) {
    echo "Error creating table: " . mysqli_error($conn);
}

// Only insert initial data if table is empty
$countResult = mysqli_query($conn, "SELECT COUNT(*) AS count FROM instructors");
if ($countResult) {
    $countRow = mysqli_fetch_assoc($countResult);
    if ((int)$countRow['count'] === 0) {
        $insertData = "INSERT INTO instructors (name, position, subjects, email, bio, office_hours, department, image_path) VALUES
        ('Professor Sumith', 'Head of Data Science and Programming Department', 'Data Science and Math, SQL, Python and AI', 'Sumith@math.com', 'Dr. Sumith has been teaching for over 25 years....', 'Monday/Wednesday - 10 AM - 12 PM', 'Data Science and Programming', './assets/Apurwa/Instructor 1.jpeg'),
        ('Dr. Johnson', 'Head of Multidisciplinary Studies', 'Chinese for Beginners', 'johnson@physi.com', 'Dr. Johnson\'s research focuses on....', 'Tuesday/Thursday - 12 PM - 2 PM', 'Multidisciplinary Studies', './assets/Apurwa/Instructor 2.jpeg'),
        ('Professor Witharana', 'Senior Lecturer in Multidisciplinary Studies', 'Leadership Skills, Food and Beverage Management, Google Ads for Beginners', 'Witharana@chemi.com', 'Professor Witharana is passionate about....', 'Wednesday/Friday - 11 AM - 2 PM', 'Multidisciplinary Studies', './assets/Apurwa/Instructor 3.jpeg'),
        ('Dr. Dharmarathna', 'Lecturer in Financial Management', 'Financial Market, Business analysis Essentials, Cryptography', 'Dharma@web.com', 'Dr. Dharmarathna specializes in....', 'Monday/Thursday - 3 PM - 6 PM', 'Finance', './assets/Apurwa/Instructor 4.jpeg'),
        ('Professor Chandana', 'Professor of Computer Science', 'Web development pro, Cybersecurity, AI Mastery', 'Chandana@engl.com', 'Professor Chandana has published extensively on....', 'Tuesday/Friday - 8 AM - 12 PM', 'Computer Science', './assets/Apurwa/Instructor 5.jpeg'),
        ('Dr. Sampath', 'Associate Lecturer in Electrical Engineering and Technology', 'Electrical Engineering, Microsoft Excel, Introduce Linux', 'Sampath@ai.com', 'Dr. Sampath\'s research interests include....', 'Monday - 11 AM - 4 PM', 'Electrical Engineering and Technology', './assets/Apurwa/Instructor 6.jpeg')
        ";
        if (!mysqli_query($conn, $insertData)) {
            echo "Error inserting initial data: " . mysqli_error($conn);
        }
    }
} else {
    echo "Error checking table count: " . mysqli_error($conn);
}
