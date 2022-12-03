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