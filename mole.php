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

<?php echo present_header("Texas Mole'dm"); ?>

<div class="game">
    <h1>Texas Mole'dm</h1>
    <video width="640" height="480" controls>
        <source src="images/TexasMole'dm_Final.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="gameplay">
        <p><a href="https://sadmeme.itch.io/teaxs-moledm">Play the Game!</a></p>
    </div>

    <div class="gamecontent">
        <div class="info">
        <p><strong>Role:</strong> Systems Programmer & Producer</p>
        <p><strong>Genre:</strong> Card</p>
        <p><strong>Team Size:</strong> 4 People</p>
        <p><strong>Development Time:</strong> 5 weeks</p>
        <p><strong>Platform:</strong> Web, PC, & Mac</p>
        <p><strong>Engine:</strong> Unity</p>
            </div>
    </div>

<!--    <img class="game__img" src="images/" height="360" width="640" >-->
    <img class="game__img" src="images/moletitle.png" height="360" width="640" >
<!--    Picture-->
    <div class="gamecontent">
        <h2>Description</h2>
        <p>Take control of a mole, falling down a hole, while on patrol for the perfect poker hand and win a game of Texas Mole’dm. Will Lady Luck lend you a hand or will she watch you fall?</p>
        <p>Play as a mole, competing against another player or the computer in a fun round of Texas Mole’dm! As you are falling you can pick up and swap cards to make the perfect hand. Explore three different maps and a wide variety of obstacles and power ups in order to beat your opponent.</p>
        <p>This game was made in 5 week with the goal of making a vertical sliver of a game that could be worked on again for a full semester (16 weeks) </p>
    </div>

    <!--    Picture-->
    <!--    What I did-->
    <img class="game__img" src="images/molegamepng.png" height="360" width="640" >
    <div class="gamecontent">
        <h2>Contributions</h2>
        <ul>
            <li>Built a deck and card system using scriptable objects</li>
            <li>Allowed the cards to be picked up by the player as they are falling</li>
            <li>Utilized a comparison algorithm to compare the players hand to the dealers to determine a winner</li>
        </ul>
    </div>

    <img class="game__img" src="images/molewinner.png" height="360" width="640" >
    <div class="gamecontent">
        <h2>Takeaways</h2>
        <ul>
            <li>Managing a small team is all about keeping morals high and not over working or crunching the team</li>
            <li>5 weeks goes by fast and as a team we needed to prioritize the core concept of our game to get it done in time</li>
            <li>How to use scriptable objects and their functionality</li>
        </ul>
    </div>
</div>

<?php echo present_footer();?>

</body>
</html>