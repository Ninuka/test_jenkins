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

<section class="skills">
    <h2>Skills</h2>

    <div class="skills-container">
        <div class="skill">HTML</div>
        <div class="skill">CSS</div>
        <div class="skill">JavaScript</div>
        <div class="skill">PHP</div>
        <div class="skill">MySQL</div>
        <div class="skill">React</div>
        <div class="skill">Node.js</div>
        <div class="skill">MongoDB</div>
        <div class="skill">Git & GitHub</div>
    </div>
</section>

<section class="education">
    <h2>Education</h2>

    <div class="edu-card">
        <h3>Bachelor of Information Technology</h3>
        <p>University of Moratuwa</p>
        <span>Final Year Undergraduate</span>
    </div>
</section>

<section class="experience">
    <h2>Experience</h2>

    <div class="exp-card">
        <h3>System Engineer Intern</h3>
        <p>Metropolitan Technologies (Pvt) Ltd</p>
        <span>2024 - Present</span>
    </div>

    <div class="exp-card">
        <h3>Freelance Web Developer</h3>
        <p>Worked on MERN stack and PHP projects</p>
    </div>
</section>

<section class="contact">
    <h2>Contact Me</h2>

    <form action="#" method="POST">

        <input type="text" placeholder="Your Name" required>

        <input type="email" placeholder="Your Email" required>

        <textarea placeholder="Your Message"></textarea>

        <button type="submit">Send Message</button>

    </form>
</section>

<footer>
    <p>© 2026 Ninuka Nethnidu</p>
</footer>

</body>
</html>