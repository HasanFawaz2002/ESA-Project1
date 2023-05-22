//icon drop down rotation
/*let dropbtn1 = document.getElementById("drop-btn1");
let dropicon1 = document.getElementById("drop-icon1");

dropbtn1.addEventListener("click",()=>{
    dropicon1.classList.toggle("rotate");
})

let dropbtn2 = document.getElementById("drop-btn2");
let dropicon2 = document.getElementById("drop-icon2");
dropbtn2.addEventListener("click",()=>{
    dropicon2.classList.toggle("rotate");
})
let dropbtn3 = document.getElementById("drop-btn3");
let dropicon3 = document.getElementById("drop-icon3");
dropbtn3.addEventListener("click",()=>{
    dropicon3.classList.toggle("rotate");
})
let dropbtn4 = document.getElementById("drop-btn4");
let dropicon4 = document.getElementById("drop-icon4");
dropbtn4.addEventListener("click",()=>{
    dropicon4.classList.toggle("rotate");
})*/


//carousel js
const wrapper = document.querySelector(".wrapper");
const carousel = document.querySelector(".carousel");
const firstCardWidth = carousel.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const carouselChildrens = [...carousel.children];

let isDragging = false, isAutoPlay = true, startX, startScrollLeft, timeoutId;

// Get the number of cards that can fit in the carousel at once
let cardPerView = Math.round(carousel.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to beginning of carousel for infinite scrolling
carouselChildrens.slice(-cardPerView).reverse().forEach(card => {
    carousel.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to end of carousel for infinite scrolling
carouselChildrens.slice(0, cardPerView).forEach(card => {
    carousel.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel at appropriate postition to hide first few duplicate cards on Firefox
carousel.classList.add("no-transition");
carousel.scrollLeft = carousel.offsetWidth;
carousel.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel.scrollLeft += btn.id == "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carousel.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel
    startX = e.pageX;
    startScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    if(!isDragging) return; // if isDragging is false return from here
    // Updates the scroll position of the carousel based on the cursor movement
    carousel.scrollLeft = startScrollLeft - (e.pageX - startX);
}

const dragStop = () => {
    isDragging = false;
    carousel.classList.remove("dragging");
}

const infiniteScroll = () => {
    // If the carousel is at the beginning, scroll to the end
    if(carousel.scrollLeft === 0) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.scrollWidth - (2 * carousel.offsetWidth);
        carousel.classList.remove("no-transition");
    }
    // If the carousel is at the end, scroll to the beginning
    else if(Math.ceil(carousel.scrollLeft) === carousel.scrollWidth - carousel.offsetWidth) {
        carousel.classList.add("no-transition");
        carousel.scrollLeft = carousel.offsetWidth;
        carousel.classList.remove("no-transition");
    }

    // Clear existing timeout & start autoplay if mouse is not hovering over carousel
    clearTimeout(timeoutId);
    if(!wrapper.matches(":hover")) autoPlay();
}

const autoPlay = () => {
    if(window.innerWidth < 800 || !isAutoPlay) return; // Return if window is smaller than 800 or isAutoPlay is false
    // Autoplay the carousel after every 2500 ms
    timeoutId = setTimeout(() => carousel.scrollLeft += firstCardWidth, 2500);
}
autoPlay();

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));
wrapper.addEventListener("mouseleave", autoPlay);





//Comments Modal
const openModalBtn = document.getElementById("open-modal");
const modal = document.getElementById("modal");
const CloseBtn = document.querySelector(".close");
const tabs = document.querySelectorAll(".tab");
const tabContents = document.querySelectorAll(".tab-pane");

openModalBtn.addEventListener("click", function() {
  modal.style.display = "flex";
});

CloseBtn.addEventListener("click", function() {
  modal.style.display = "none";
});

tabs.forEach(function(tab, index) {
  tab.addEventListener("click", function() {
    // Remove active class from all tabs
    tabs.forEach(function(tab) {
      tab.classList.remove("active");
    });

    // Hide all tab contents
    tabContents.forEach(function(content) {
      content.classList.remove("active");
    });

    // Set the selected tab as active
    tab.classList.add("active");

    // Show the selected tab content
    tabContents[index].classList.add("active");
  });
});

// Function to handle form submission
document.getElementById('commentForm').addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent form submission

      // Get form values
      //--var name = document.getElementById('name').value;
      var comment = document.getElementById('comment').value;

      // Create a new comment element
      var newComment = document.createElement('div');
      newComment.classList.add('comment');
      newComment.innerHTML = '<div class="user" id="user"> <div class="usericon"></div> <div class="username">Ezalden S</div>  </div>' + '<p>' + comment + '</p>';

      // Append the new comment to the comments section
      $("#comments").after(newComment);

      // Clear the form fields
      //--document.getElementById('name').value = '';
      document.getElementById('comment').value = '';
    });