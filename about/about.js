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

// COMPANY DESCRIPTION FUNCTIONS
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


// SPECIALIZATION SECTION
window.raw = 1;

function visa_categories() {
  window.raw = 0;
  selector();
}

function exchange_visitor() {
  window.raw = 1;
  selector();
}

function selector() {
  if (window.raw === 0) {
    document.getElementById("visa_categories").style.display = "flex";
    document.getElementById("exchange_visitor").style.display = "none";

    document.getElementById("visa_button").style.color = "goldenrod";
    document.getElementById("visa_button").style.transition = "all 0.5s";
    document.getElementById("visa_button").style.borderBottom = "2px solid teal";

    
    document.getElementById("exchange_button").style.color = "black";
    document.getElementById("exchange_button").style.transition = "all 0.5s";
    document.getElementById("exchange_button").style.borderBottom = "none";
  }
  if (window.raw === 1) {
    document.getElementById("visa_categories").style.display = "none";
    document.getElementById("exchange_visitor").style.display = "flex";

    document.getElementById("visa_button").style.color = "black";
    document.getElementById("visa_button").style.transition = "all 0.5s";
    document.getElementById("visa_button").style.borderBottom = "none";

    
    document.getElementById("exchange_button").style.color = "goldenrod";
    document.getElementById("exchange_button").style.transition = "all 0.5s";
    document.getElementById("exchange_button").style.borderBottom = "2px solid teal";
  }
  console.log(window.raw);
}

function reveal_body1() {
  var x = document.getElementById("content_body1");
  if (x.style.display === "flex") {
    x.style.display = "none";
  } else {
    x.style.display = "flex";
  }
}



// EXCHANGE SECTION
function show_body1() {
  var x = document.getElementById("panel_body1");
  var y = document.getElementById("exchange_body1");
  if (x.style.display === "flex") {
    x.style.display = "none";
    y.style.width = "65%";
  } else {
    x.style.display = "flex";
    y.style.width = "90%";
  }
}
