/*//carousel starts here
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
//carousel ends here
*/




/*weather api starts here*/


const apiKey = "2d27ba7852d8a8a569a63feba802ac72";
const apiUrl = "https://api.openweathermap.org/data/2.5/weather?units=metric&lat={lat}&lon={lon}&appid=" + apiKey;


const searchBox=document.querySelector(".search-weather input");
const searchBtn=document.querySelector(".search-weather button");


async function checkWeather(city) {
  const apiUrl2 = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}`;

  const response = await fetch(apiUrl2);
  const data = await response.json();
  const latitude = data.coord.lat;
  const longitude = data.coord.lon;
  const weatherUrl = apiUrl.replace("{lat}", latitude).replace("{lon}", longitude);

  const weatherResponse = await fetch(weatherUrl);
  const weatherData = await weatherResponse.json();
  console.log(weatherData);
  document.querySelector(".city").innerHTML = weatherData.name;
  document.querySelector(".temp").innerHTML = weatherData.main.temp + "°C";
  document.querySelector(".humidity").innerHTML = weatherData.main.humidity + "%";
  document.querySelector(".wind").innerHTML = weatherData.wind.speed + " KM/H";
}
searchBtn.addEventListener("click", ()=>{
    checkWeather(searchBox.value);
})





//weather api ends here



//login btn

/*document.getElementById("loginbtn").addEventListener("click", function() {
    localStorage.setItem("shouldAnimate", "true");
  });*/


  // JavaScript or jQuery code
$(document).ready(function() {

    $(".modal-btn").click(function() {
      // Find the parent post based on the clicked button
      var post = $(this).closest(".post");
  
      // Get the post ID from the data attribute
      var postId = post.data("post-id");
  
      // Find the corresponding modal using the post ID
      var modal = post.find(".modal");
  
      // Open the modal by adding the "open" class
      modal.addClass("open");
    });
  
    $(".commentclose").click(function() {
      // Find the parent modal based on the clicked button
      var modal = $(this).closest(".modal");
  
      // Close the modal by removing the "open" class
      modal.removeClass("open");
    });
  });


  //Likes
  $(document).ready(function() {
    $('.like-button').click(function() {
      var postid = $(this).data('postid');
  
      $.ajax({
        type: 'POST',
        url: 'like.php', // Path to your PHP script handling the like action
        data: { postid: postid },
        success: function(response) {
          // Handle the response from the PHP script
          if (response === 'success') {
            // Update the UI or display a success message
            console.log('Like added successfully!');
          } else {
            // Handle any error or display an error message
            console.log('Error: ' + response);
          }
        },
        error: function(xhr, status, error) {
          // Handle the AJAX request error
          console.log('AJAX Error: ' + error);
        }
      });
    });
  });

  //Reports

  $(document).ready(function() {
    $('.report-button').click(function() {
      var postid = $(this).data('postid');
  
      $.ajax({
        type: 'POST',
        url: 'report.php', // Path to your PHP script handling the report action
        data: { postid: postid },
        success: function(response) {
          // Handle the response from the PHP script
          if (response === 'success') {
            // Update the UI or display a success message
            console.log('Report added successfully!');
          } else if (response === 'duplicate') {
            // Display a message indicating that the user has already reported the post
            console.log('You have already reported this post.');
          } else {
            // Handle any other error or display an error message
            console.log('Error: ' + response);
          }
        },
        error: function(xhr, status, error) {
          // Handle the AJAX request error
          console.log('AJAX Error: ' + error);
        }
      });
    });
  });

 //comments
 $(document).ready(function() {
  // Handle comment submission
  $('.comment-btn').click(function() {
    // Get the post ID and comment text
    var postid = $(this).data('postid');
    var comment = $('#comment-input-' + postid).val();

    // Make an AJAX request to submit the comment
    $.ajax({
      type: 'POST',
      url: 'comment.php', // Path to your PHP script handling the comment submission
      data: { postid: postid, comment: comment },
      success: function(response) {
        // Handle the response from the PHP script
        if (response === 'success') {
          // Clear the comment input field
          $('#comment-input').val('');

          // Optionally, you can update the comments immediately after adding a new comment
          // loadComments(postid);

          console.log('Comment added successfully!');
          location.reload();
        } else {
          // Handle any other error or display an error message
          console.log('Error: ' + response);
        }
      },
      error: function(xhr, status, error) {
        // Handle the AJAX request error
        console.log('AJAX Error: ' + error);
      }
    });
  });
});



//story handlers starts here

  // Get the add image button, input element, and preview image element
const addImageBtn = document.getElementById('addImageBtn');
const imageInput = document.getElementById('imageInput');
const storyImageInput = document.getElementById('storyImageInput');
const previewImage = document.getElementById('previewImage');

// Add click event listener to the add image button
addImageBtn.addEventListener('click', function() {
  // Trigger the click event on the hidden input element
  imageInput.click();
});

// Add change event listener to the image input
imageInput.addEventListener('change', function(event) {
  const file = event.target.files[0];

  // Check if a file is selected
  if (file) {
    const reader = new FileReader();

    // Read the selected file as a data URL
    reader.readAsDataURL(file);

    // When the file is loaded, display the image in the preview
    reader.onload = function(event) {
      previewImage.src = event.target.result;
      previewImage.style.display = 'block';

      // Set the selected image data in the hidden input field
      storyImageInput.value = event.target.result;
    };
  }
});


 // Get all the cards
const cards = document.querySelectorAll('.card');

// Loop through each card
cards.forEach((card) => {
    // Get the image element inside the card
    const image = card.querySelector('.img img');

    // Get the data-image attribute value
    const imageSrc = image.dataset.image;

    // Add click event listener to the card
    card.addEventListener('click', () => {
        // Set the src attribute of the modal image
        const modalImage = document.getElementById('modalImage');
        modalImage.src = imageSrc;
    });
});





//story handlers end here
