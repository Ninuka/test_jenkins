<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>M.P. Ninuka Nethnidu</h1>
    <p>Web Developer | System Engineer Intern</p>
</header>

<section class="about">
    <h2>About Me</h2>
    <p>
        I am an IT undergraduate at the University of Moratuwa.
        I specialize in web development using PHP, MySQL, MERN stack,
        and modern web technologies.
    </p>
</section>

<section class="projects">
    <h2>My Projects</h2>

    <div class="project-container">

    <?php
    $sql = "SELECT * FROM projects ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
    ?>

        <div class="card">
            <img src="<?php echo $row['image']; ?>" alt="project image">
            <h3><?php echo $row['title']; ?></h3>
            <p><?php echo $row['description']; ?></p>

            <a href="<?php echo $row['github_link']; ?>" target="_blank">
                View Project
            </a>
        </div>

    <?php
        }
    } else {
        echo "<p>No projects found.</p>";
    }
    ?>

    </div>
</section>

<footer>
    <p>© 2026 Ninuka Nethnidu</p>
</footer>

</body>
</html>