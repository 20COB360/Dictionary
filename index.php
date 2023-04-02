<?php
$word_input = "";
$meaning_output = "";
$part_output = "";
$sent_output = "";
// Create a connection to the MySQL server
$conn = mysqli_connect('localhost', 'root', '', 'dictionary');

// Check for errors
if (!$conn) {
    die('Error connecting to database: ' . mysqli_connect_error());
}
echo "<script>console.log('Connected');</script>";
// echo 'Connected to database successfully.';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<script>console.log('117');</script>";

    if (isset($_POST['find'])) {
        echo "<script>console.log('IN FIND');</script>";
        $word_input = $_POST['word'];
        if ($word_input == "") {
            echo "<script>alert(`Please enter a word`);</script>";
        } else {
            $sql = "SELECT * FROM `words` WHERE `word`='$word_input'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>console.log('FOUND');</>";
                $var = mysqli_fetch_assoc($result);
                $meaning_output = $var['meaning'];
                $part_output = $var['pos'];
                $sent_output = $var['example'];
            } else {
                echo "<script>alert(`Meaninig not found`)</script>";
            }
        }
    }

    if (isset($_POST['add'])) {
        echo "<script>console.log('IN ADD');</script>";
        $word = $_POST['word'];
        $meaning = $_POST['meaning'];
        $part = $_POST['pos'];
        $sent = $_POST['example'];

        $sql = "INSERT INTO `words`(`word`, `meaning`, `pos`, `example`) VALUES ('$word','$meaning','$part','$sent')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>console.log('ADDED');</script>
            <script>
                alert(`Added Successfully`);
            </script>";
        }
    }

    if (isset($_POST['update'])) {
        echo "<script>console.log('IN UPDATE');</script>";
        $word = $_POST['word'];
        $meaning = $_POST['meaning'];
        $part = $_POST['pos'];
        $sent = $_POST['example'];
        $sql = "UPDATE `words` SET `meaning` = '$meaning', `pos` = '$part', `example`='$sent'  WHERE `word`='$word'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>console.log('UPDATED');</script>";
            echo "<script>alert(`Updated Successfully`);</script>";
        }
    }

    if (isset($_POST['delete'])) {
        echo "<script>console.log('IN DELETE');</script>";
        $word = $_POST['word'];
        $sql = "DELETE FROM `words`  WHERE `word`='$word'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>console.log('DELETED');</script>";
            echo "<script>alert(`Deleted Successfully`);</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <script src="./index.js"></script>
    <title>Dictionary</title>
</head>

<body>
    <h1>Dictionary</h1>
    <div class="container">
        <form action="./index.php" method="POST">
            <input type="text" name="word" id="word-input" placeholder="ENTER THE WORD">
            <button type="find" name="find" class="find-btn">FIND</button>
        </form>
        <div class="meaning">
            <h3>MEANING</h3>
            <p class="mean">
                <?php

                echo $word_input . ' : ' . $part_output . '<br><br>Meaning : ' . $meaning_output . '<br><br>Sentence : ' . $sent_output;

                ?>
            </p>
        </div>
        <div class="btn-box">
            <button onclick="add()" class="add-btn">ADD WORD</button>
            <button onclick="updt()" class="updt-btn">UPDATE MEANING</button>
            <button onclick="del()" class="del-btn">DELETE WORD</button>
        </div>
    </div>

    <!-- Add words -->
    <div class="add-box modal" id="modal1">
        <div class="modal-content">
            <div class="cls">
                <button class="close" onclick="cls()">&times;</button>
            </div>
            <form method="POST" action="./index.php">
                <label for="word">Word:</label>
                <input type="text" name="word" id="word" placeholder="ENTER THE WORD YOU WANT TO ADD">
                <br>
                <label for="meaning">Meaning:</label>
                <input type="text" name="meaning" id="meaning" placeholder="ENTER THE MEANING">
                <br>
                <label for="pos">Part of Speech:</label>
                <input type="text" name="pos" id="pos" placeholder="ENTER THE PART OF SPEECH">
                <br>
                <label for="example">SENTENCE:</label>
                <input type="text" name="example" id="example" placeholder="ENTER SENTENCE">
                <br>
                <button type="add" name="add" class="add-btn">Add</button>
            </form>
        </div>
    </div>

    <!-- Update word -->
    <div class="updt-box modal" id="modal2">
        <div class="modal-content">
            <div class="cls">
                <button class="close" onclick="cls()">&times;</button>
            </div>
            <form method="POST" action="./index.php">
                <label for="word">Word:</label>
                <input type="text" name="word" id="word" placeholder="ENTER THE WORD YOU WANT TO UPDATE">
                <br>
                <label for="meaning">New Meaning:</label>
                <input type="text" name="meaning" id="meaning" placeholder="ENTER NEW MEANING">
                <br>
                <label for="pos">Part of Speech:</label>
                <input type="text" name="pos" id="pos" placeholder="ENTER NEW PART OF SPEECH">
                <br>
                <label for="example">Example:</label>
                <input type="text" name="example" id="example" placeholder="ENTER NEW SENTENCE">
                <br>
                <button type="update" name="update" class="updt-btn">Update</button>
            </form>
        </div>
    </div>

    <!-- Delete word -->
    <div class="del-box modal" id="modal3">
        <div class="modal-content">
            <div class="cls">
                <button class="close" onclick="cls()">&times;</button>
            </div>
            <form method="POST" action="./index.php">
                <label for="word">Word:</label>
                <input type="text" name="word" id="word" placeholder="ENTER THE WORD YOU WANT TO DELETE">
                <br>
                <button type="delete" name="delete" class="del-btn">Delete</button>
            </form>
        </div>
    </div>
</body>

</html>