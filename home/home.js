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