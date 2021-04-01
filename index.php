<?php
require 'format.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main</title>

    <link href="main.css" type="text/css" rel="stylesheet" />
</head>
<body>

<?php echo present_header("Sadeem Boji"); ?>
<!--<div class="bio">-->
<!--<div class="round_img">-->
<!--<p><img src="images/bojisade.png" height="200" width="200" alt="Sadeem Boji"></p>-->
<!--</div>-->
<!--<p>Hi, I'm Sadeem Boji! I'm a senior at MSU with a double major in CSE and Game Dev.</p>-->
<!--</div>-->
<div class="container">
    <img class="container__image" src="images/bojisade.png" height="200" width="200" alt="Sadeem Boji">
    <div class="container__text">
        <p>Hi, I'm Sadeem Boji! I'm a senior at Michigan State University with a double major in Computer Science and Game Development.</p>
    </div>
</div>

<div class="h2s">
    <h2>Projects</h2>
</div>

<div class="projects">
    <div class="snippets">
        <p><a href="grocery.php"><img src="images/list.png" height="199" width="320" alt="Grocery List">
            </a></p>
        <p><a href="grocery.php">Grocery List</a></p>
        <p>A scavenging game at day and a cooking game at night set in a post apocalyptic mall.</p>
    </div>

    <div class="snippets">
        <p><a href="frightday.php"><img src="images/Frightdaynight.png" height="186" width="309" alt="Frightday Night" >
            </a></p>
        <p><a href="frightday.php">Frightday Night</a></p>
        <p>Play as a ghost or a Human in this local versus house destruction game.</p>
    </div>

    <div class="snippets">
        <p><a href="mole.php"><img src="images/mole.png" height="135" width="342" alt="Texas Mole'dm" >
            </a></p>
        <p><a href="mole.php">Texas Mole'dm</a></p>
        <p>Take control of a mole, falling down a hole, while on patrol for the perfect poker hand.</p>
    </div>
</div>


<script src="top.js"></script>
<button class="top" onclick="topFunction()" id="myBtn" title="Go to top">^</button>

<div class="h2s">
    <h2>Contact Me</h2>
</div>

<div class="contact">
    <p>Email: sadeemtboji@gmail.com</p>
    <p>Linkedin: <a href="https://www.linkedin.com/in/sadeem-boji"><img src="images/link.png" height="25" width="25"></a></p>
    <p>Handshake: <a href="https://msu.joinhandshake.com/users/12682454"><img src="images/handshake.png" height="25" width="25"></a></p>
</div>

<?php echo present_footer();?>
</body>
</html>
