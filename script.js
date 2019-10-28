
const displayScroll = function() {
  if (scrollY > 200) {
    window.document.getElementsByClassName('scrollTop')[0].style = 'display:flex;'
  }else {
    window.document.getElementsByClassName('scrollTop')[0].style = 'display:none;'
  }
}

const scrollToTop = function() {

  window.scrollTo({
    top: 0,
    left: 0,
    behavior: 'smooth'
  });
}

window.onscroll = displayScroll;

window.document.getElementsByClassName('scrollTop')[0].addEventListener("click", scrollToTop);
