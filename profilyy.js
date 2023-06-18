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
  var imageSources = ["pepsi_animation_01.gif", "images.jpeg", "images (2).jpeg" ];

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

