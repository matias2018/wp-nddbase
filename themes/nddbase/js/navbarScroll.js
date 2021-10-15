
// As soon as the user scrolls down 1px from the top of the document, resize the navbar's and the logo's height
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
    document.querySelector(".navbar").style.height = "70px";
    document.querySelector(".logo-nav").style.height = "40px";
    document.querySelector(".navbar").classList.add('sticky');
  } else {
    document.querySelector(".navbar").style.height = "130px";
    document.querySelector(".logo-nav").style.height = "50px";
    document.querySelector(".navbar").classList.remove('sticky');
  }
}