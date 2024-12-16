<?php

include './includes/dbcon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $attendanceData = json_decode(file_get_contents("php://input"), true);

    if (!empty($attendanceData)) {
        foreach ($attendanceData as $data) {
            $professorID = $data['professorID'];
            $attendanceStatus = $data['attendanceStatus'];
            $course = $data['course'];
            $unit = $data['unit'];
            $date = date("Y-m-d"); 

            $sql = "INSERT INTO tblattendance(professorRegistrationNumber, course, unit, attendanceStatus, dateMarked)  
                    VALUES ('$professorID', '$course', '$unit', '$attendanceStatus', '$date')";
            
            if ($conn->query($sql) === TRUE) {
                echo "Attendance data for professor ID $professorID inserted successfully.<br>";
            } else {
                echo "Error inserting attendance data: " . $conn->error . "<br>";
            }
        }
    } else {
        echo "No attendance data received.<br>";
    }
} else {
    echo "Invalid request method.<br>";
}

?>
