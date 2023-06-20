/*script list ---------------------------------------------------------------------------------------------------------------------- */
const openModalBtn = document.getElementById("buttp");
const modal = document.getElementById("modal");
const closeBtn = document.querySelector(".close");
const tabs = document.querySelectorAll(".tab");
const tabContents = document.querySelectorAll(".tab-pane");

openModalBtn.addEventListener("click", function () {
  modal.style.display = "flex";
});

closeBtn.addEventListener("click", function () {
  modal.style.display = "none";
});

tabs.forEach(function (tab, index) {
  tab.addEventListener("click", function () {
    // Remove active class from all tabs
    tabs.forEach(function (tab) {
      tab.classList.remove("active");
    });

    // Hide all tab contents
    tabContents.forEach(function (content) {
      content.classList.remove("active");
    });

    // Set the selected tab as active
    tab.classList.add("active");

    // Show the selected tab content
    tabContents[index].classList.add("active");
  });
});
/*script average ---------------------------------------------------------------------------------------------------------------------- */
function rateIcon(event) {
  const ratingIcon = document.getElementById("rating-icon");
  const ratingStars = ratingIcon.querySelectorAll(".rating-star");

  const clickedStarIndex = Array.from(ratingStars).indexOf(event.target);

  ratingStars.forEach((star, index) => {
    star.classList.remove("good", "average", "bad");

    if (index <= clickedStarIndex) {
      if (clickedStarIndex >= 2) {
        star.classList.add("bad");
      } else if (clickedStarIndex >= 1) {
        star.classList.add("average");
      } else {
        star.classList.add("good");
      }
    }
  });
}
/*script ads 1 ----------------------------------------------------------------------------------------------------------------------------- */
// Get the image container div
var imageContainer = document.getElementById("imageContainer");

// Array of image sources
var imageSources = ["images/ad0.gif", "images/ad1.jpeg", "images/ad2.jpeg" ];

// Set initial index and update the image
var currentIndex = 0;
updateImage();

// Function to update the image
function updateImage() {
  // Create a new image element
  var newImage = document.createElement("img");
  newImage.src = imageSources[currentIndex];
  newImage.alt = "Image " + (currentIndex + 1);

  // Remove all existing images
  imageContainer.innerHTML = "";

  // Append the new image to the container
  imageContainer.appendChild(newImage);

  // Increment the index for the next image
  currentIndex = (currentIndex + 1) % imageSources.length;

  // Call the function again after a certain time interval (e.g., 3 seconds)
  setTimeout(updateImage, 3000);
}
/*-------------------------------------------------------------------------------- */
 // Array to store comments
 var comments = [];

 // JavaScript functions to handle modal behavior
 function openModal() {
   var postContainer = document.querySelector('.post-custom');
   postContainer.classList.add('slide-up-custom');

   var modal = document.getElementById('myModal');
   modal.style.display = 'block';
   modal.classList.add('fade-in');
   filterComments();
 }

 function closeModal() {
   var postContainer = document.querySelector('.post-custom');
   postContainer.classList.remove('slide-up-custom');

   var modal = document.getElementById('myModal');
   modal.classList.remove('fade-in');
   setTimeout(function () {
     modal.style.display = 'none';
   }, 500);
 }

 // Function to filter comments based on the selected option
 function filterComments() {
   var commentFilter = document.getElementById("commentFilter").value;
   var commentContainer = document.getElementById("commentsContainer-custom");

   if (commentFilter === "latest") {
     // Sort comments by timestamp in descending order
     var sortedComments = comments.sort(function (a, b) {
       return new Date(b.timestamp) - new Date(a.timestamp);
     });

     // Show the last 10 comments
     commentContainer.innerHTML = ""; // Clear existing comments

     var start = Math.max(0, sortedComments.length - 10); // Index of the first comment to display
     for (var i = start; i < sortedComments.length; i++) {
       var comment = sortedComments[i];
       createCommentElement(commentContainer, comment);
     }
   } else {
     // Show all comments
     commentContainer.innerHTML = ""; // Clear existing comments

     for (var i = 0; i < comments.length; i++) {
       var comment = comments[i];
       createCommentElement(commentContainer, comment);
     }
   }
 }

 function addComment(event) {
event.preventDefault();
var username = "Ghina";
var comment = document.getElementById("commentInput-custom").value.trim(); // Trim whitespace

if (comment !== "") { // Check if comment is not empty
 // Get the current timestamp
 var currentDate = new Date();
 var timestamp = currentDate.toISOString(); // Use ISO string format for timestamp

// Create a new comment object
var newComment = {
username: username,
comment: comment,
timestamp: timestamp,
liked: false // Add the liked property
};

 // Add the new comment to the comments array
 comments.push(newComment);

 // Clear input field
 document.getElementById("commentInput-custom").value = "";

 // Update the comments in the modal
 filterComments();
}
}

 // Function to create a comment element and append it to the comments container
 function createCommentElement(container, comment) {
var userProfile = document.createElement("div");
userProfile.className = "user-profile-custom";
var profileImg = document.createElement("img");
profileImg.src = "hhhhhh.jpeg";
profileImg.alt = "User Profile Picture";
profileImg.className = "profile-picture-custom";
var usernameSpan = document.createElement("span");
usernameSpan.className = "username-custom";
usernameSpan.textContent = comment.username;

var timestampSpan = document.createElement("span");
timestampSpan.className = "comment-timestamp-custom";
timestampSpan.textContent = formatCommentTimestamp(comment.timestamp);

userProfile.appendChild(profileImg);
userProfile.appendChild(usernameSpan);
userProfile.appendChild(timestampSpan); // Append the timestamp under the username

var commentText = document.createElement("p");
commentText.className = "comment-text-custom";
commentText.textContent = comment.comment;

var likeButton = document.createElement("button");
likeButton.className = "like-button-custom";
likeButton.textContent = "Like";
likeButton.classList.toggle("liked", comment.liked); // Set the initial liked state
likeButton.addEventListener("click", function() {
handleLikeButtonClick(likeButton, comment);
});
var newComment = document.createElement("div");
newComment.className = "comment-custom";
newComment.appendChild(userProfile);
newComment.appendChild(commentText);
newComment.appendChild(likeButton); // Append the "Like" button to the comment

// Insert the new comment at the beginning of the container
container.insertBefore(newComment, container.firstChild);
}

 // Function to add an emoji to the comment input
 function addEmoji(emoji) {
   var commentInput = document.getElementById("commentInput-custom");
   commentInput.value += emoji;
   commentInput.focus();
 }

 // Function to format the comment timestamp based on the elapsed time
 function formatCommentTimestamp(timestamp) {
   var currentTime = new Date();
   var commentTime = new Date(timestamp);
   var elapsedSeconds = Math.floor((currentTime - commentTime) / 1000);

   if (elapsedSeconds < 60) {
     return "Just now";
   } else if (elapsedSeconds < 3600) {
     var minutes = Math.floor(elapsedSeconds / 60);
     return minutes + " minute(s) ago";
   } else {
     var options = { hour12: false };
     return commentTime.toLocaleTimeString(undefined, options);
   }
 }

 // Submit comment on Enter key press
 var commentInput = document.getElementById("commentInput-custom");
 commentInput.addEventListener("keydown", function (event) {
   if (event.key === "Enter" && !event.shiftKey) {
     event.preventDefault();
     addComment(event);
   }
 });
 function handleLikeButtonClick(button, comment) {
// Toggle the liked state of the comment
comment.liked = !comment.liked;

// Toggle the liked state of the button
button.classList.toggle("liked", comment.liked);

// Add your logic here for handling the "Like" button click
console.log("Like button clicked for comment:", comment);
}
/*--------------------------------------------- */

const myButton = document.getElementById('myButton');
const myPath = document.getElementById('myPath');
const customGradient = document.getElementById('customGradient');
let isRed = false;

myButton.addEventListener('click', function () {
  if (isRed) {
    myPath.style.fill = 'url(#paint1_linear_394_829)';
    isRed = false;
  } else {
    myPath.style.fill = 'url(#customGradient)';
    isRed = true;
  }
});
