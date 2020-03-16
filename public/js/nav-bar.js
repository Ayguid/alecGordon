let mainNav = document.getElementById('js-menu');

let navBarToggle = document.getElementById('js-navbar-toggle');

navBarToggle.addEventListener('click', function () {
  mainNav.classList.toggle('active');
});


const bar = document.getElementById("navbarA");
const originalColor = bar.style.backgroundColor;

function styleNavBar() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    bar.style.backgroundColor="rgba(45, 45, 45, 0.69)";
  }
  else {
    bar.style.backgroundColor=originalColor;
  }
}


var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  // styleNavBar()
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    bar.style.top = "0";
  } else {
    bar.style.top = "-70px";
  }
  prevScrollpos = currentScrollPos;
};


var links = document.getElementsByClassName('nav-links');
for (var i = 0; i < links.length; i++) {
  links[i].onclick=function(){
    mainNav.classList.toggle('active');
  }
}


// links.forEach((link )=> {
//   link.onclick=function(){
//     mainNav.classList.toggle('active');
//   }
// });
