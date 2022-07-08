
var readMoreAll = document.querySelectorAll('.read-more');
var collapseAll = document.querySelectorAll('.collapse');

readMoreAll.forEach(readMore => readMore.addEventListener("click", function(e) {
  e.target.nextSibling.nextSibling.style.display = 'contents';
    readMore.style.display = 'none';
    e.target.nextSibling.nextSibling.nextSibling.nextSibling.style.display = 'contents';
}))

collapseAll.forEach(collapse => collapse.addEventListener("click", function(e) {
    e.target.previousSibling.previousSibling.style.display = 'none';
    collapse.style.display = 'none';
    e.target.previousSibling.previousSibling.previousSibling.previousSibling.style.display = 'contents';
}))

var sliderImageAll = document.querySelectorAll('.slider-image');

sliderImageAll.forEach(sliderImage => sliderImage.addEventListener("mouseover", function(e) {
  sliderImage.classList.add('active');
}))

sliderImageAll.forEach(sliderImage => sliderImage.addEventListener("mouseout", function(e) {
  sliderImage.classList.remove('active');
}))



// let scrollpos = window.innerHeight;
// const monday = document.getElementById("monday");
// const mondayAnimate =  monday.childNodes[1];


// const monday_height = monday.offsetHeight;

// const add_class_on_scroll = () => {
//     mondayAnimate.classList.add("animate");
// }
// const remove_class_on_scroll = () => {
//     mondayAnimate.classList.remove("animate");
// }

// window.addEventListener('scroll', function() { 
//     console.log(scrollpos, monday_height)

//   if (scrollpos = monday_height) { add_class_on_scroll() }
//   else { remove_class_on_scroll() };


// })

function reveal() {
    var reveals = document.querySelectorAll(".background-section");
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("kenburns-top");
      } else {
        reveals[i].classList.remove("kenburns-top");
      }
    }
  }

  window.addEventListener("scroll", reveal);

// To check the scroll position on page load
reveal();

var htmlElement = document.querySelector("html");
var modalAll = document.querySelectorAll('.modal')

modalAll.forEach(modal => modal.addEventListener('show.bs.modal', function (event) {
  htmlElement.style.overflowY = "hidden"
}))

modalAll.forEach(modal => modal.addEventListener('hide.bs.modal', function (event) {
  htmlElement.style.overflowY = "unset"
}))

