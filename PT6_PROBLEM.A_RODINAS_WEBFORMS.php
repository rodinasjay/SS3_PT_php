<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
            body {
                background: skyblue;
                font-family: sans-serif;
                text-align: center;
            }
            form {
                background: white;
            padding: 30px;
            border-radius: 10px;
            height: 150px;
            width: 350px;
            margin: auto;
            border-top: 5px solid black;
            border-left: 5px solid black;
            border-bottom: 5px solid blue;
            border-right: 5px solid blue;
            }
        </style>
    </head>

    <body>
        <h1>GRADE CALCULATOR</h1>
    <form action="" method="POST">
        <label>1st Quarter Grade</label> <input type="number" name="firstquarter"><br>
        <label>2st Quarter Grade</label> <input type="number" name="secondquarter"><br>
        <label>3st Quarter Grade</label> <input type="number" name="thirdquarter"><br>
        <label>4st Quarter Grade</label> <input type="number" name="fourthquarter"><br>
        <input type="submit" name="submit">
    </form>

<?php
if (isset($_POST['submit'])) {

    $first_quarter = $_POST['firstquarter'];
    $second_quarter = $_POST['secondquarter'];
    $third_quarter = $_POST['thirdquarter'];
    $fourth_quarter = $_POST['fourthquarter'];

    $averageGrade = ($first_quarter + $second_quarter + $third_quarter + $fourth_quarter) / 4;

if ($averageGrade >= 90 && $averageGrade <=100) {
   echo "Average Grade: " . $averageGrade;
   echo "<br><br>OUTSTANDING!!!";
   echo "<br><br>Passed";

}elseif ($averageGrade >= 85 && $averageGrade <=89){
   echo "Average Grade: " . $averageGrade;
   echo "<br><br>VERY SATISFACTORY!!!";
   echo "<br><br>Passed";

}elseif ($averageGrade >= 80 && $averageGrade <=84){
   echo "Average Grade: " . $averageGrade;
   echo "<br><br>SATISFACTORY!!!";
   echo "<br><br>Passed";

}elseif ($averageGrade >= 75 && $averageGrade <=79){
   echo "Average Grade: " . $averageGrade;
   echo "<br><br>FAIRLY SATISFACTORY!!!";
   echo "<br><br>Passed";

}elseif ( $averageGrade <=74) {
   echo "Average Grade: " . $averageGrade;
   echo "<br><br>DID NOT MEET EXPECTATIONS!!!";
   echo "<br><br>Failed";
}
}
   ?>
    </body>
</html>
