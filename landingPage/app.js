const Menu = document.querySelector("#menu");
const overlaySidebar = document.querySelector(".overlay-sidebar")
const Times = document.querySelector(".fa-times-circle");

// Filter List
const church = document.querySelector("#church");
const outdoorAdventure = document.querySelector("#outdoor-adventure");
const mostVisited = document.querySelector("#most-visited");
const hotelResort = document.querySelector("#hotel-resort");
const outdoorBtn = document.querySelector(".outdoor-btn");
const churchBtn = document.querySelector(".church-btn");
const visitedBtn = document.querySelector(".visited-btn");
const hrBtn = document.querySelector(".hr-btn");


Menu.addEventListener('click', ()=> {
    overlaySidebar.style.top = 0;
    overlaySidebar.style.opacity = 1;
});

Times.addEventListener('click', ()=> {
    overlaySidebar.style.top = "-100vh"; 
    overlaySidebar.style.opacity = 0;
});


// Filter List
outdoorBtn.addEventListener('click', ()=> {
    outdoorAdventure.style.display = "block";
    church.style.display = "none";
    mostVisited.style.display = "none";
    hotelResort.style.display = "none";
    outdoorBtn.classList.add("active");
    churchBtn.classList.remove("active");
    visitedBtn.classList.remove("active");
    hrBtn.classList.remove("active");
})

churchBtn.addEventListener('click', ()=> {
    church.style.display = "block";
    outdoorAdventure.style.display = "none";
    mostVisited.style.display = "none";
    hotelResort.style.display = "none";
    churchBtn.classList.add("active");
    outdoorBtn.classList.remove("active");
    visitedBtn.classList.remove("active");
    hrBtn.classList.remove("active");
})

visitedBtn.addEventListener('click', ()=> {
    mostVisited.style.display = "block";
    outdoorAdventure.style.display = "none";
    church.style.display = "none";
    hotelResort.style.display = "none";
    visitedBtn.classList.add("active");
    outdoorBtn.classList.remove("active");
    churchBtn.classList.remove("active");
    hrBtn.classList.remove("active");
})


hrBtn.addEventListener('click', ()=> {
    hotelResort.style.display = "block";
    mostVisited.style.display = "none";
    outdoorAdventure.style.display = "none";
    church.style.display = "none";
    hrBtn.classList.add("active");
    visitedBtn.classList.remove("active");
    outdoorBtn.classList.remove("active");
    churchBtn.classList.remove("active");
})



//Smooth Scroll---------------------------------------------------------
// const scroller = new LocomotiveScroll({
//   el: document.querySelector('.main-container'),
//   smooth: true
// });




  // var Scrollbar = window.Scrollbar;

  // Scrollbar.init(document.querySelector('#my-scrollbar'));

// Smooth scroll setup
// const bodyScrollBar = Scrollbar.init(document.body, { damping: 0.1, delegateTo: document });
 
// bodyScrollBar.setPosition(0, 0);
// bodyScrollBar.track.xAxis.element.remove();

// // How to get them to work together
// ScrollTrigger.scrollerProxy("body", {
//   scrollTop(value) {
//     if (arguments.length) {
//       bodyScrollBar.scrollTop = value;
//     }
//     return bodyScrollBar.scrollTop;
//   }
// });






// For more information, see greensock.com/docs/v3/Plugins/ScrollTrigger
// Tell ScrollTrigger to use these proxy getter/setter methods for the "body" element: 
// ScrollTrigger.scrollerProxy("body", {
//   scrollTop(value) {
//     if (arguments.length) {
//       bodyScrollBar.scrollTop = value; // setter
//     }
//     return bodyScrollBar.scrollTop; // getter
//   },
//   scrollLeft(value) {
//     if (arguments.length) {
//       bodyScrollBar.scrollLeft = value; // setter
//     }
//     return bodyScrollBar.scrollLeft; // getter
//   }
// });




// var Scrollbar = window.Scrollbar;

// Scrollbar.init(document.querySelector('#my-scrollbar'));

// console.log()