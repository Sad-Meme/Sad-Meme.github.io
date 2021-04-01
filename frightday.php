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

<?php echo present_header("Frightday Night"); ?>
<div class="game">
    <h1>Frightday Night</h1>

    <img class="game__img" src="images/nightmenu.png" height="360" width="640" >

    <div class="gameplay">
        <p><a href="https://gamejolt.com/games/frightdaynight/551374">Play the Game!</a></p>
    </div>

    <div class="gamecontent">
        <div class="info">
        <p><strong>Role:</strong> Gameplay Designer and Programmer</p>
        <p><strong>Genre:</strong> 1v1 Party/Casual</p>
        <p><strong>Team Size:</strong> 4 People</p>
        <p><strong>Development Time:</strong> 6 weeks</p>
        <p><strong>Platform:</strong>PC & Mac</p>
        <p><strong>Engine:</strong> Unity</p>
            </div>
    </div>

<!--    <img class="game__img" src="images/" height="360" width="640" >-->
    <img class="game__img" src="images/nighthouse.png" height="360" width="640" >
<!--    Picture-->
    <div class="gamecontent">
        <h2>Description</h2>
        <p>Keep the house together or help tear it down!</p>
        <p>Frightday Night is a competitive party game made for 2 players. It is Friday night and you have just got the house in order for the open house event in the morning.</p>
        <p>Nothing could go wrong, unless a certain specter has taken a liking to you and doesn't want you to leave. Try your best to keep the house in order (or help take it apart) or you will NEVER get this place sold.</p>
    </div>

    <!--    Picture-->
    <!--    What I did-->
    <img class="game__img" src="images/nightchaos.png" height="360" width="640" >
    <div class="gamecontent">
        <h2>Contributions</h2>
        <ul>
            <li>Created a local 2 player movement set up using keyboard for one player and mouse for the other</li>
            <li>Implemented an interaction event that let player destroy or fix items</li>
            <li>The basis for the game and its gameplay</li>
        </ul>
    </div>

    <img class="game__img" src="images/nighthuman.png" height="360" width="640" >
    <div class="gamecontent">
        <h2>Takeaways</h2>
        <ul>
            <li>How to work with a team for the first time</li>
            <li>Document your code not only for other people but for yourself </li>
            <li>Learned how to do local versus</li>
        </ul>
    </div>
</div>
<?php echo present_footer();?>

</body>
</html>