//Get the button
var mybutton = document.getElementsByClassName("top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      console.log("PogU")
      mybutton[0].style.display = "block";
  } else {
      console.log("Sadge")
      mybutton[0].style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}