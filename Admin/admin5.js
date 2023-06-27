//SideBar Toggle

var sidebar = document.getElementById("sidebar");

function openSidebar(){
    sidebar.style.display="inline";
    sidebar.style.position="absolute"

}

function closeSidebar(){
    sidebar.style.display="none"
}

//MAIN Toggle

let firstList = document.getElementById("1");
let secondList = document.getElementById("2");
let thirdList = document.getElementById("3");




let main = document.getElementById("main");
let user = document.getElementById("user");
let post = document.getElementById("post");
//let report = document.getElementById("report");

firstList.addEventListener("click",()=>{
    main.style.display="block";
    user.style.display="none";
    post.style.display="none";
    //report.style.display="none";
});
secondList.addEventListener("click",()=>{
    main.style.display="none";
    user.style.display="block";
    post.style.display="none";
    //report.style.display="none";
})
thirdList.addEventListener("click",()=>{
  main.style.display="none";
  user.style.display="none";
  post.style.display="block";
  //report.style.display="none";
})




//DropDown
function toggleDropdown() {
    var dropdown = document.getElementById("myDropdown");
    dropdown.classList.toggle("show");
  }
  
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      for (var i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }


  let searchInput = document.getElementById('search');

  searchInput.addEventListener('input', function() {
  
    let query = searchInput.value.toLowerCase();
  
    let userItems = document.getElementsByClassName('user-list-item');
  
    for (var i = 0; i < userItems.length; i++) {
      let userItem = userItems[i];
      let userName = userItem.querySelector('.user-id p:nth-child(2)').textContent.toLowerCase();
  
      if (userName.includes(query)) {
        userItem.style.display = 'block';
      } else {
        userItem.style.display = 'none'; 
      }
    }
  });

  