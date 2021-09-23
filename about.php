<?php
require 'format.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Me</title>
    <link href="main.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php echo present_header("About Me"); ?>
<div class="about">
    <h1>About Me</h1>
    <div class="Acontainer">
        <img class="Acontainer__image" src="images/bojisade_2.png" height="500" width="300" alt="Sadeem Boji">
        <div class="Acontainer__text">
            <p>Hi! I am a programmer from Michigan and currently go to Michigan State University. There I am double majoring in Computer Science Engineering and in Games and Interactive Media. MSU’s Games curriculum is ranked seventh in the States. I am also the Vice President for the MSU Smash Ultimate Club.</p>
            <br>
            <p>Currently I am working as an Undergraduate Teaching Assistant teaching students the basics of Python. This job has greatly improved my teaching abilities. It has taught me how to make examples on the fly and adjust my class to better help the students understand Python concepts.</p>
        </div>
    </div>

    <div class="Classes">
        <div class="Class">
            <div class="CSE">
                <h2>Computer Science Classes</h2>
                <ul>
                    <li>Intro to Python</li>
                    <li>Intro to C++</li>
                    <li>Computer Architecture</li>
                    <li>Algorithms and Data Structures</li>
                    <li>Software Design</li>
                    <li>Computer Graphics</li>
                    <li>Web Development</li>
                    <li>Software Engineering</li>
                    <li>Mobile App Development</li>
                </ul>
            </div>
        </div>
        <div class="Class">
            <div class="MI">
                <h2>Game Development Classes</h2>
                <ul>
                    <li>Games and Interactivity</li>
                    <li>Game Design & Development</li>
                    <li>Preproduction for Games</li>
                    <li>Advanced Game Development</li>
                    <li>Game Design Studio</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php echo present_footer();?>

</body>
</html>