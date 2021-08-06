 //dropdowns jeb izvēlne
 function dropdown() {
  document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}  


//mainīt režīmus
function mode_swich() {
     var theme = document.getElementsByTagName('link')[0];
      if (theme.getAttribute('href') == 'style.css') {
          theme.setAttribute('href', 'darkmode.css');
      } else {
          theme.setAttribute('href', 'style.css');
       }
}

function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 1000);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i}; 
  return i;
}

   //fona maiņa atkarībā no laika
var currentTime = new Date().getHours();
if (07 < currentTime && 22 > currentTime) {
   document.write("<link rel='stylesheet' href='style.css' type='text/css'>");
} else {
   document.write("<link rel='stylesheet' href='darkmode.css' type='text/css'>");
}

 //printēšanas logs
function printPage() {
 window.print();
}

 //jQuery fade in
$(document).ready(function () {
  $('div.fade').fadeIn(2000).removeClass('fade');
});



//formu validācija 

function validateForm() {
var text;
     //epasts
     var x1=document.forms["myForm"]["email"].value;
     var atpos=x1.indexOf("@");
     var dotpos=x1.lastIndexOf(".");
     if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x1.length) {
       text ="Nederīgs e-pasts!";
       document.getElementById("demo").innerHTML = text;
       return false;
     }
     //virsraksts
    var x2 = document.forms["myForm"]["title"].value;
    if (x2 == "") {
       text = "Lūdzu uzrakstiet virsrakstu!";
       document.getElementById("demo").innerHTML = text;
       return false;
     }
     //teksts
     var x3=document.forms["myForm"]["message"].value;
     if (x3 == "") {
         text = "Lūdzu ievadiet tekstu!"; 
         document.getElementById("demo").innerHTML = text;
         return false;
     }
}

