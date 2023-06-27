/*// JavaScript or jQuery code
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
*/



