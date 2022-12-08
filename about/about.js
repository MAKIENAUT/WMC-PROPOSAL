function myFunction() {
   var x = document.getElementById("myNavBar");
   if (x.className === "navbar") {
     x.className += " responsive";
   } else {
     x.className = "navbar";
   }
}

valueChecker();

window.value = 1;

function showContent1() {
  window.value = 1;
  valueChecker();
}

function showContent2() {
  window.value = 2;
  valueChecker();
}

function showContent3() {
  window.value = 3;
  valueChecker();
}


function valueChecker() {
  if (window.value === 1) {
    document.getElementById("content1").style.opacity = "1";
    document.getElementById("content2").style.opacity = "0";
    document.getElementById("content3").style.opacity = "0";

    document.getElementById("content1").style.transition  = "all 0.5s";
    document.getElementById("content2").style.transition  = "all 0.5s";
    document.getElementById("content3").style.transition  = "all 0.5s";

    document.getElementById("content_title").innerHTML = "Who We Are";

    document.getElementById("who").style.color = "goldenrod";
    document.getElementById("who").style.transition = "all 0.2s";
    document.getElementById("who").style.borderBottom = "2px solid teal";

    document.getElementById("what").style.color = "black";
    document.getElementById("what").style.transition = "all 0.2s";
    document.getElementById("what").style.borderBottom = "none";

    
    document.getElementById("who_2").style.color = "black";
    document.getElementById("who_2").style.transition = "all 0.2s";
    document.getElementById("who_2").style.borderBottom = "none";
  }
  if (window.value === 2) {
    document.getElementById("content1").style.opacity = "0";
    document.getElementById("content2").style.opacity = "1";
    document.getElementById("content3").style.opacity = "0";

    document.getElementById("content_title").innerHTML = "What We Are";

    document.getElementById("who").style.color = "black";
    document.getElementById("who").style.transition = "all 0.2s";
    document.getElementById("who").style.borderBottom = "none";

    document.getElementById("what").style.color = "goldenrod";
    document.getElementById("what").style.transition = "all 0.2s";
    document.getElementById("what").style.borderBottom = "2px solid teal";

    
    document.getElementById("who_2").style.color = "black";
    document.getElementById("who_2").style.transition = "all 0.2s";
    document.getElementById("who_2").style.borderBottom = "none";
  }
  if (window.value === 3) {
    document.getElementById("content1").style.opacity = "0";
    document.getElementById("content2").style.opacity = "0";
    document.getElementById("content3").style.opacity = "1";

    document.getElementById("content1").style.transition  = "all 0.5s";
    document.getElementById("content2").style.transition  = "all 0.5s";
    document.getElementById("content3").style.transition  = "all 0.5s";

    document.getElementById("content_title").innerHTML = "What We Do";

    document.getElementById("who").style.color = "black";
    document.getElementById("who").style.transition = "all 0.2s";
    document.getElementById("who").style.borderBottom = "none";

    document.getElementById("what").style.color = "black";
    document.getElementById("what").style.transition = "all 0.2s";
    document.getElementById("what").style.borderBottom = "none";

    
    document.getElementById("who_2").style.color = "goldenrod";
    document.getElementById("who_2").style.transition = "all 0.2s";
    document.getElementById("who_2").style.borderBottom = "2px solid teal";
  }
  console.log(window.value);
}