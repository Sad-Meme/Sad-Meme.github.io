<?php

/**
 * Create the HTML for the header block
 * @param $title The page title
 * @return string HTML for the header block
 */
function present_header($title) {
    $html = <<<HTML
<header>

<nav><p><a class="name" href="index.php">Sadeem Boji</a>

<!--<a class="right" href="projects.php">Projects</a>-->
<a class="right" href="about.php">About</a>
<!--<a class="right" href="contact.php">Contact</a>-->
<a class="right" href="https://docs.google.com/document/d/e/2PACX-1vTOifu1vcvtM_YqEZ3gLWYOMle5TRQDCwsbP2-Yasxp_aoL9wpF3TogHWa9XUS-DXCnQHsFaY2atEO3/pub" target="_blank">Resume</a></p></nav>
<!--<h1>$title</h1>-->
</header>
HTML;

    return $html;
}

function present_footer(){
    $html = <<<HTML
<footer>
<p>Made by Sadeem Boji - 2021</p>
</footer>
HTML;
    return $html;
}