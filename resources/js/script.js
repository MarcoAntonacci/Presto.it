// BACKGROUND COLOR
if (window.location.href.indexOf('/lavora-con-noi') != -1) {
    let body=document.body;
    body.classList.add("body-work");
}

if (window.location.href.indexOf('/annunci/create') != -1) {
    let body=document.body;
    body.classList.add("body-create");
}

if (window.location.href.indexOf('/login') != -1) {
    let body=document.body;
    body.classList.add("body-login");
}

if (window.location.href.indexOf('/register') != -1) {
    let body=document.body;
    body.classList.add("body-register");
}


// ACTIVE BORDER BOTTOM



// GO UP BUTTON
mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}


