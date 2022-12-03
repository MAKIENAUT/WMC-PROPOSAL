// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
// var currentScrollPos = window.pageYOffset;
// if (prevScrollpos > currentScrollPos) {
//     document.getElementById("navbar").style.top = "0";
// } else {
//     document.getElementById("navbar").style.top = "-70px";
// }
// prevScrollpos = currentScrollPos;
// }
function copyToClipboard() {
  navigator.clipboard.writeText
      ("admin@westmigrationagency.us");

  alert("Admin Email Address copied to clipboard: \n admin@westmigrationagency.us" )
}

function scrollDown() {
  window.scrollBy(0, 150);
  showSpec();
  specDisplay();
}

window.value = 0;

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

function hideContent() {
  window.value = 0;
  valueChecker();
}

function valueChecker() {
  if (window.value === 0) {
    document.getElementById("content1").style.opacity = "0";
    document.getElementById("content2").style.opacity = "0";
    document.getElementById("content3").style.opacity = "0";

    document.getElementById("spec_button").style.display = "flex";
  }
  if (window.value === 1) {
    document.getElementById("content1").style.opacity = "100%";

    document.getElementById("spec_button").style.display = "none";
  }
  if (window.value === 2) {
    document.getElementById("content2").style.opacity = "100%";

    document.getElementById("spec_button").style.display = "none";
  }
  if (window.value === 3) {
    document.getElementById("content3").style.opacity = "100%";

    document.getElementById("spec_button").style.display = "none";
  }
  console.log(window.value);
}

function showSpec() {
  moveLogo();
}

function closeSpec() {
  revertLogo();
}

function moveLogo() {
  var logo = document.getElementById("left-title");
  var specTab = document.getElementById("spec-container");
  var specContents = document.getElementById("statement");

  document.getElementById("spec_button_con").style.display = "none";
  document.getElementById("spec_button_die").style.opacity = "1";
  logo.style.margin = "0";
  logo.style.width = "40%";
  specTab.style.display = "flex";
  specTab.style.marginTop = "0";
  specTab.style.height = "500px";
}

function revertLogo() {
  var logo = document.getElementById("left-title");
  var specTab = document.getElementById("spec-container");
  var specContents = document.getElementById("statement");

  document.getElementById("spec_button_con").style.display = "flex";
  document.getElementById("spec_button_die").style.opacity = "0";
  logo.style.margin = "50px 0 0 100px";
  logo.style.width = "60%";
  specTab.style.display = "none";
  specTab.style.marginTop = "0";
  specTab.style.height = "100%";
}

window.counter = 1;

function showVisa() {
  window.counter = 1;
  specDisplay();
  console.log(window.counter);
}
function showExchange() {
  window.counter = 0;
  specDisplay();
  console.log(window.counter);
}

function specDisplay() {
  if (window.counter === 1) {
    document.getElementById("visa_subcontainer").style.opacity = "1";

    document.getElementById("spec_button1").style.color = "black";
    document.getElementById("spec_button1").style.borderTop = "2px solid gold";
    document.getElementById("spec_button1").style.borderLeft = "5px solid teal";
    document.getElementById("spec_button1").style.borderRight =
      "5px solid teal";
    document.getElementById("spec_button1").style.borderBottom =
      "2px solid gold";
    document.getElementById("spec_button1").style.backgroundColor =
      "rgb(255,255,255,0.8)";

    document.getElementById("spec_button2").style.color = "white";
    document.getElementById("spec_button2").style.borderTop =
      "1px solid white;";
    document.getElementById("spec_button2").style.borderLeft =
      "5px solid gold;";
    document.getElementById("spec_button2").style.borderRight =
      "5px solid gold;";
    document.getElementById("spec_button2").style.borderBottom =
      "1px solid white";
    document.getElementById("spec_button2").style.backgroundColor =
      "rgb(0, 0, 0, 0.7)";

    document.getElementById("student_holder").style.opacity = "0";
  } else {
    document.getElementById("visa_subcontainer").style.opacity = "0";

    document.getElementById("spec_button1").style.color = "white";
    document.getElementById("spec_button1").style.borderTop = "2px solid white";
    document.getElementById("spec_button1").style.borderLeft = "5px solid gold";
    document.getElementById("spec_button1").style.borderRight =
      "5px solid gold";
    document.getElementById("spec_button1").style.borderBottom =
      "2px solid white";
    document.getElementById("spec_button1").style.backgroundColor =
      "rgb(0, 0, 0, 0.7)";

    document.getElementById("spec_button2").style.color = "black";
    document.getElementById("spec_button2").style.borderTop = "2px solid gold";
    document.getElementById("spec_button2").style.borderLeft = "5px solid teal";
    document.getElementById("spec_button2").style.borderRight =
      "5px solid teal";
    document.getElementById("spec_button2").style.borderBottom =
      "2px solid gold";
    document.getElementById("spec_button2").style.backgroundColor =
      "rgb(255,255,255,0.8)";

    document.getElementById("student_holder").style.opacity = "1";
  }
}

// var content_1 = document.getElementById("content1");
// if (content_1.style.display === "flex") {
//     content_1.style.display = "none";
// } else {
//     content_1.style.display = "flex"
// }
