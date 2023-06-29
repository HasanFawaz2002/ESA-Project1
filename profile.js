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

////////////////////////////////////////////////////////////////////////// 
function toggleFade(postID) {
  var fadeOptions = document.getElementById('fade-options-' + postID);
  fadeOptions.classList.toggle('fade-in');
}
function openModal(postID) {
}
///////////////////////////////////////////////////////////////////////////////////

    var imageContainer = document.getElementById("imageContainer");
    var imageSources = ["images/ad0.gif", "images/ad1.jpeg", "images/ad2.jpeg"];
    var currentIndex = 0;
    updateImage();

    function updateImage() {
      var newImage = document.createElement("img");
      newImage.src = imageSources[currentIndex];
      newImage.alt = "Image " + (currentIndex + 1);
      imageContainer.innerHTML = "";
      imageContainer.appendChild(newImage);
      currentIndex = (currentIndex + 1) % imageSources.length;
      setTimeout(updateImage, 3000);
    }