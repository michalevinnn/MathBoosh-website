<?php

$servername = "localhost";
$username   = "omersh2_mathboost_user";
$password   = "Anuk1106!!";
$dbname     = "omersh2_mathboost";

// יצירת חיבור
$conn = new mysqli($servername, $username, $password, $dbname);

// בדיקת חיבור
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// הגדרת קידוד לעברית
$conn->set_charset("utf8mb4");

// קליטת הנתונים מהטופס
$full_name   = $_POST['fullName'] ?? '';
$phone       = $_POST['phone'] ?? '';
$email       = $_POST['email'] ?? '';
$subject     = $_POST['subject'] ?? '';
$lesson_date = $_POST['lessonDate'] ?? '';
$grade       = $_POST['grade'] ?? '';
$units       = $_POST['units'] ?? '';
$lesson_type = $_POST['lessonType'] ?? '';
$lesson_time = $_POST['lessonTime'] ?? '';

// --- שלב 1: בדיקה אם השיעור כבר תפוס ---
$check_sql = "SELECT id FROM bookings WHERE lesson_date = ? AND lesson_time = ?";
$check_stmt = $conn->prepare($check_sql);
$check_stmt->bind_param("ss", $lesson_date, $lesson_time);
$check_stmt->execute();
$check_stmt->store_result();

if ($check_stmt->num_rows > 0) {
    // אם נמצאה שורה, זה אומר שהשעה תפוסה
    echo "taken";
    $check_stmt->close();
    $conn->close();
    exit(); // עוצרים את הקוד ולא ממשיכים לשמירה
}
$check_stmt->close();

// --- שלב 2: שמירת השיעור החדש ---
$sql = "INSERT INTO bookings (full_name, phone, email, subject, lesson_date, grade, units, lesson_type, lesson_time) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt) {
    // קישור כל 9 המשתנים כ-Strings (s)
    $stmt->bind_param("sssssssss", $full_name, $phone, $email, $subject, $lesson_date, $grade, $units, $lesson_type, $lesson_time);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
    $stmt->close();
} else {
    echo "error";
}

$conn->close();

?>
