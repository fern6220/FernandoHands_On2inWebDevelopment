<!DOCTYPE html>
<html>
<head>
    <title>Student Profile Renderer</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
            text-align: center;
        }
        .container {
            margin-top: 20px;
        }
        .card {
            background: white;
            padding: 15px;
            margin: 10px auto;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        button {
            padding: 10px 20px;
            border: none;
            background: #4CAF50;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h2>Student Profile Renderer</h2>

<form method="POST">
    <button type="submit" name="show">Show Students</button>
</form>

<div class="container">
<?php
if(isset($_POST['show'])) {

    // Student Data
    $students = [
        ["name" => "Obet Fernando", "course" => "ACT1"],
        ["name" => "Rajj Silvestre", "course" => "ACT1"],
        ["name" => "Jake Lawrence Meneses", "course" => "ACT1"],
        ["name" => "Ruth Zepaneia Marana", "course" => "ACT1"],
        ["name" => "Naomi Zai Lazaro", "course" => "ACT1"],
        ["name" => "Steven Tolentino", "course" => "ACT1"],
        ["name" => "Janelyn Nollora", "course" => "ACT1"],
        ["name" => "Student 8", "course" => "ACT1"]
    ];

    // Loop to display students
    foreach($students as $student) {
        echo "<div class='card'>";
        echo "<h3>" . $student['name'] . "</h3>";
        echo "<p>Course: " . $student['course'] . "</p>";
        echo "</div>";
    }
}
?>
</div>

</body>
</html>