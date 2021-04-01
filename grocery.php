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

<?php echo present_header("Grocery List"); ?>

<div class="game">
    <h1>Grocery List</h1>
    <video width="640" height="480" controls>
        <source src="images/Grocery%20List.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="gameplay">
        <p><a href="https://gamejolt.com/games/Grocery_list/566437">Play the Game!</a></p>
    </div>

    <div class="gamecontent">
        <div class="info">
        <p><strong>Role:</strong> Front End Systems & Movement Programmer</p>
        <p><strong>Genre:</strong> Adventure/Survival</p>
        <p><strong>Team Size:</strong> 5 People</p>
        <p><strong>Development Time:</strong> 6 weeks</p>
        <p><strong>Platform:</strong>PC & Mac</p>
        <p><strong>Engine:</strong> Unity</p>
            </div>
    </div>

<!--    <img class="game__img" src="images/" height="360" width="640" >-->
    <img class="game__img" src="images/listmainmenu.png" height="360" width="640" >
<!--    Picture-->
    <div class="gamecontent">
        <h2>Description</h2>
        <p>In Grocery List, you play as a cook trapped in a post-apocalyptic town.  Rescue is on the way but it will still be some time before you can escape. During the day you have to venture out into the town and collect barely-edible ingredients and recipes.</p>
        <p>During the night, you cook “dishes” for your fellow survivors at your camp. Different survivors have different wants and needs, and there isn’t enough time to satisfy them all.  Who will you prioritize?  Will everyone make it to the rescue?</p>
    </div>

    <!--    Picture-->
    <!--    What I did-->
    <img class="game__img" src="images/listcar.png" height="360" width="640" >
    <div class="gamecontent">
        <h2>Contributions</h2>
        <ul>
            <li>Created a system that allows you to pick up 3D ingredients in the day to later use them as 2D ingredients at Night</li>
            <li>Implemented a complex cooking system that kept track of your ingredients and recipes</li>
            <li>Full 3D movement for the player in the Day scene with an unlockable sprint</li>
        </ul>
    </div>

    <img class="game__img" src="images/listnight.png" height="360" width="640" >
    <div class="gamecontent">
        <h2>Takeaways</h2>
        <ul>
            <li>More progress is made when active code meetings are made because they allow for allows for collaborative solutions and debugging</li>
            <li>How to make a system based game where components move from scene to scene using an inventory </li>
            <li>Learned how to create a 2D scene that involves dragging items around</li>
        </ul>
    </div>

    <img class="game__img" src="images/listending.png" height="360" width="640" >
</div>

<?php echo present_footer();?>

</body>
</html>