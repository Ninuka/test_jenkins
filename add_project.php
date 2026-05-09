<?php
include 'db.php';

if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $github = $_POST['github'];

    $sql = "INSERT INTO projects(title, description, image, github_link)
            VALUES('$title','$description','$image','$github')";

    if($conn->query($sql) === TRUE){
        echo "Project Added Successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Project</title>
</head>
<body>

<h2>Add New Project</h2>

<form method="POST">

    <input type="text" name="title" placeholder="Project Title" required>
    <br><br>

    <textarea name="description" placeholder="Project Description" required></textarea>
    <br><br>

    <input type="text" name="image" placeholder="Image URL">
    <br><br>

    <input type="text" name="github" placeholder="GitHub Link">
    <br><br>

    <button type="submit" name="submit">Add Project</button>

</form>

</body>
</html>