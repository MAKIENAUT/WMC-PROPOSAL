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
  // Get the text field
  var link = "admin@westmigrationagency.us";

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(link);

  // Alert the copied text
  alert("Admin Email copied to clipboard");
}

function phoneShow() {
  var x = document.getElementById("telephone");
  var y = document.getElementById("card1");
  if (x.style.opacity === "1") {
    x.style.opacity = "0";
    y.style.marginLeft = "0";
  } else {
    x.style.opacity = "1";
    y.style.marginLeft = "-100px";
  }
}

function emailShow() {
  var x = document.getElementById("email");
  var y = document.getElementById("card2");
  if (x.style.opacity === "1") {
    x.style.opacity = "0";
    y.style.marginTop = "0";
  } else {
    x.style.opacity = "1";
    x.style.marginTop = "25px";
    y.style.marginTop = "-50px";
  }
}

function highlight() {
  var check = document.getElementById("socials");
  check.style.borderRadius = "15px";
  check.style.borderTop = "2px solid teal";
  check.style.borderLeft = "5px solid gold";
  check.style.borderRight = "5px solid gold";
  check.style.borderBottom = "2px solid teal";
  check.style.backgroundColor = "rgb(255, 255, 255, 0.15)";
}

function mapAlter() {
  var x = document.getElementById("address_con");
  var y = document.getElementById("address_card");
  var z = document.getElementById("iframe");
  if (x.style.opacity === "1") {
    x.style.opacity = "0";
    y.style.height = "70px";
    y.style.top = "none";
    z.style.opacity = "75%";
    z.style.width = "75%";
    z.style.height = "75%";
  } else {
    x.style.opacity = "1";
    y.style.height = "40px";
    y.style.top = "10px";
    z.style.opacity = "1";
    z.style.width = "100%";
    z.style.height = "100%";
  }
}
