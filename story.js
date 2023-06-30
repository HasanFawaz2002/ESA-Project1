



//weather api starts here


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


// JavaScript code
document.addEventListener('DOMContentLoaded', function() {
  var toggleButtons = document.querySelectorAll('.mb-1');

  toggleButtons.forEach(function(button) {
    button.addEventListener('click', function() {
      // Remove active class from all toggle buttons
      toggleButtons.forEach(function(btn) {
        btn.style.backgroundColor='white';
      });

      // Add active class to the clicked toggle button
      this.style.backgroundColor='blue';
    });
  });
});



function filterPosts() {
  const searchInput = document.getElementById('searchInput');
  const searchText = searchInput.value.toLowerCase();

  const postsContainer = document.getElementById('postsContainer');
  const posts = postsContainer.getElementsByClassName('post');

  for (let i = 0; i < posts.length; i++) {
    const post = posts[i];
    const userName = post.querySelector('.posts-text').textContent.toLowerCase();
    const postText = post.querySelector('.posts-content p').textContent.toLowerCase();

    if (userName.includes(searchText) || postText.includes(searchText)) {
      post.style.display = 'block';
      userName.style.color = 'blue';
    } else {
      post.style.display = 'none';
    }
  }
}