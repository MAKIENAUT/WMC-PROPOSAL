function myFunction() {
  var x = document.getElementById("myNavBar");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
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
    document.getElementById("exchange_vis").style.display = "none";
    document.getElementById("visa_button").style.color = "goldenrod";
    document.getElementById("visa_button").style.borderBottom =
      "2px solid teal";
  } else {
    document.getElementById("visa_categs").style.display = "none";
    document.getElementById("exchange_vis").style.display = "block";
    document.getElementById("visa_button").style.color = "goldenrod";
    document.getElementById("visa_button").style.borderBottom =
      "2px solid teal";
  }
}
