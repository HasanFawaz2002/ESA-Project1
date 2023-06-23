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
