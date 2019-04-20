const bar =document.getElementById("navbarA");
const originalColor = bar.style.backgroundColor;



function styleNavBar() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    bar.style.backgroundColor="rgba(45, 45, 45, 0.69)";
  }
  else {
    bar.style.backgroundColor=originalColor;
  }
}



window.onscroll = function() {
  styleNavBar()
  $(".arrow").css("opacity", 1 - $(window).scrollTop() / 250);
};


//
//
//
// var animateHTML = function() {
//   var elems;
//   var windowHeight;
//   function init() {
//     elems = document.querySelectorAll('.hidden');
//     windowHeight = window.innerHeight;
//     addEventHandlers();
//     checkPosition();
//     if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
//       bar.style.backgroundColor="rgba(45, 45, 45, 0.69)";
//     }
//     else {
//       bar.style.backgroundColor=originalColor;
//     }
//   }
//   function addEventHandlers() {
//     window.addEventListener('scroll', checkPosition);
//     window.addEventListener('resize', init);
//   }
//   function checkPosition() {
//     for (var i = 0; i < elems.length; i++) {
//       var positionFromTop = elems[i].getBoundingClientRect().top;
//       if (positionFromTop - windowHeight <= 0) {
//         elems[i].className = elems[i].className.replace(
//           'hidden',
//           'fade-in-element'
//         );
//       }
//     }
//   }
//   return {
//     init: init
//   };
// };
// animateHTML().init();
