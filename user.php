<?php include("conn.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/YOUR_KIT_ID.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="user.css" />
    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />

    <title>Hangout</title>
  </head>
  <body>
    <!--navbar starts here-->
    <nav class="navbar navbar-expand-lg"  style="position: fixed; width: 100%; z-index: 1;  box-shadow: 0 2px 5px;background-color: white; opacity: 1;">
      <div class="container-fluid">
        <h3 class="animate-charcter">
          <a class="navbar-brand" href="#"
            ><img src="/images/Logo.jpg" alt="" /> Hangout</a
          >
        </h3>
        <form class="d-flex" role="search" style="width: 35%">
          <input
          id="searchInput"
          class="form-control me-2"
          type="search"
          placeholder="Search"
          aria-label="Search"
          oninput="filterPosts()"
          />
        </form>
        <div id="notification">

          <div class="dropdown">
            <button class="btn btn-secondary  dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="bellbtn">
              <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 20C9.6193 20.0008 10.2235 19.8086 10.7285 19.4502C11.2335 19.0917 11.6143 18.5849 11.818 18H6.182C6.38566 18.5849 6.76648 19.0917 7.27151 19.4502C7.77654 19.8086 8.3807 20.0008 9 20ZM16 12.586V8C16 4.783 13.815 2.073 10.855 1.258C10.562 0.52 9.846 0 9 0C8.154 0 7.438 0.52 7.145 1.258C4.185 2.074 2 4.783 2 8V12.586L0.293001 14.293C0.199958 14.3857 0.126171 14.4959 0.0758854 14.6172C0.0256001 14.7386 -0.000189449 14.8687 1.04767e-06 15V16C1.04767e-06 16.2652 0.105358 16.5196 0.292894 16.7071C0.480431 16.8946 0.734785 17 1 17H17C17.2652 17 17.5196 16.8946 17.7071 16.7071C17.8946 16.5196 18 16.2652 18 16V15C18.0002 14.8687 17.9744 14.7386 17.9241 14.6172C17.8738 14.4959 17.8 14.3857 17.707 14.293L16 12.586Z" fill="#0055FF"/>
                </svg>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">notifactions</a></li>
              <li><a class="dropdown-item" href="#">notifactions</a></li>
              <li><a class="dropdown-item" href="#">notifactions</a></li>
            </ul>
          </div>



          

        
          
        </div>
        
          
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-lg-start"
          id="navbarSupportedContent"
        >
          <ul
            class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-end"
            style="width: 93%"
          >
            <div class="ul-main">
              <div class="firstitem">
                <li class="nav-item"></li>
                <li class="nav-item" style="transform: translateY(-3px)">
                  <svg
                    width="24"
                    height="24"
                    viewBox="0 0 21 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M2.625 19.4857H6.5625V11.9429H14.4375V19.4857H18.375V8.17143L10.5 2.51429L2.625 8.17143V19.4857ZM2.625 22C1.90313 22 1.28494 21.7536 0.770439 21.2608C0.255939 20.768 -0.000872771 20.1763 2.22835e-06 19.4857V8.17143C2.22835e-06 7.77333 0.0931894 7.39619 0.279564 7.04C0.465939 6.68381 0.722752 6.39048 1.05 6.16L8.925 0.502857C9.16562 0.335238 9.41719 0.209524 9.67969 0.125714C9.94219 0.0419046 10.2156 0 10.5 0C10.7844 0 11.0578 0.0419046 11.3203 0.125714C11.5828 0.209524 11.8344 0.335238 12.075 0.502857L19.95 6.16C20.2781 6.39048 20.5354 6.68381 20.7217 7.04C20.9081 7.39619 21.0009 7.77333 21 8.17143V19.4857C21 20.1771 20.7427 20.7693 20.2282 21.2621C19.7137 21.7549 19.096 22.0008 18.375 22H11.8125V14.4571H9.1875V22H2.625Z"
                      fill="#0055FF"
                    />
                  </svg>
                </li>
               <a href="user.html" class="nav-a"> <span>Home</span></a>
              </div>

              <div class="seconditem">
                <li class="nav-item"></li>
                <li class="nav-item">
                  <a href="setting.html" class="nav-a"> <svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M21.52 10.146C21.3034 10.1028 21.1011 10.0059 20.9316 9.86419C20.7621 9.7225 20.6309 9.54055 20.55 9.335L20.547 9.326L19.938 7.844C19.8446 7.64147 19.805 7.41828 19.8231 7.19599C19.8411 6.9737 19.9162 6.75982 20.041 6.575L20.038 6.58L21.026 5.262C21.1466 5.08945 21.2071 4.88204 21.1983 4.67172C21.1894 4.46139 21.1117 4.25981 20.977 4.098L20.978 4.1L19.896 3.015C19.733 2.88099 19.5306 2.80419 19.3198 2.79642C19.1089 2.78866 18.9014 2.85034 18.729 2.972L18.732 2.97L17.416 3.958C17.2305 4.08274 17.0158 4.15733 16.7929 4.1745C16.57 4.19168 16.3464 4.15085 16.144 4.056L16.152 4.059L14.67 3.45C14.4632 3.37178 14.2797 3.24242 14.1364 3.07401C13.9932 2.90561 13.895 2.70365 13.851 2.487L13.85 2.479L13.621 0.848C13.5832 0.640758 13.482 0.450364 13.3314 0.303117C13.1807 0.155871 12.9881 0.0590398 12.78 0.026L12.774 0.025C12.774 0.025 12.514 0 11.998 0C11.482 0 11.229 0.026 11.229 0.026C11.0197 0.0563154 10.8251 0.151102 10.6722 0.297173C10.5194 0.443245 10.4158 0.633336 10.376 0.841L10.375 0.847L10.142 2.476C10.0989 2.69244 10.002 2.89456 9.8603 3.06372C9.71857 3.23289 9.53655 3.36366 9.331 3.444L9.322 3.447L7.84 4.056C7.63736 4.14914 7.41415 4.1885 7.19187 4.17029C6.9696 4.15207 6.75577 4.07689 6.571 3.952L6.576 3.955L5.258 2.967C5.08549 2.84624 4.87816 2.78535 4.66775 2.79366C4.45734 2.80197 4.25545 2.87901 4.093 3.013L4.095 3.012L3.016 4.099C2.88153 4.2613 2.80434 4.46342 2.79639 4.67404C2.78843 4.88465 2.85016 5.09202 2.972 5.264L2.97 5.261L3.958 6.579C4.08163 6.76497 4.15563 6.97948 4.17296 7.20212C4.19029 7.42477 4.15037 7.64814 4.057 7.851L4.06 7.843L3.449 9.325C3.287 9.744 2.927 10.055 2.486 10.144L2.478 10.145L0.847 10.375C0.63954 10.4142 0.449423 10.517 0.303025 10.6691C0.156627 10.8213 0.0612059 11.0152 0.03 11.224L0.029 11.23C0.029 11.23 0 11.486 0 11.999C0 12.512 0.027 12.769 0.027 12.769C0.091 13.201 0.42 13.542 0.841 13.621L0.847 13.622L2.476 13.854C2.925 13.945 3.286 14.254 3.446 14.665L3.449 14.674L4.06 16.156C4.15367 16.3586 4.19324 16.5819 4.17484 16.8043C4.15643 17.0268 4.08069 17.2406 3.955 17.425L3.958 17.42L2.97 18.738C2.84956 18.8717 2.77263 19.0388 2.74941 19.2173C2.72619 19.3957 2.75779 19.5769 2.84 19.737L2.838 19.732C3.013 19.949 3.515 20.484 3.516 20.486L3.891 20.83C4.095 21.018 4.933 21.279 5.263 21.033L6.58 20.045C6.76542 19.92 6.98017 19.8453 7.20317 19.8283C7.42617 19.8113 7.64976 19.8525 7.852 19.948L7.844 19.945L9.326 20.554C9.746 20.715 10.057 21.076 10.145 21.517L10.146 21.525L10.375 23.151C10.455 23.579 10.795 23.908 11.221 23.973L11.227 23.974C11.227 23.974 11.484 23.999 11.999 23.999C12.514 23.999 12.769 23.972 12.769 23.972C13.199 23.905 13.537 23.576 13.615 23.156L13.616 23.15L13.85 21.521C13.94 21.072 14.25 20.711 14.661 20.553L14.67 20.55L16.152 19.939C16.3546 19.8453 16.5779 19.8058 16.8003 19.8242C17.0228 19.8426 17.2366 19.9183 17.421 20.044L17.416 20.041L18.734 21.029C18.9069 21.1497 19.1146 21.2104 19.3253 21.2015C19.536 21.1926 19.7379 21.1148 19.9 20.98L19.898 20.981L20.98 19.897C21.1138 19.7341 21.1907 19.5318 21.1988 19.3211C21.2069 19.1104 21.1459 18.9028 21.025 18.73L21.027 18.733L20.039 17.415C19.896 17.2014 19.8201 16.95 19.821 16.693C19.821 16.496 19.864 16.31 19.942 16.143L19.939 16.151L20.548 14.669C20.711 14.249 21.072 13.939 21.513 13.85L21.521 13.849L23.148 13.617C23.576 13.537 23.906 13.197 23.97 12.771L23.971 12.765C23.971 12.765 23.998 12.516 23.998 12C23.998 11.484 23.971 11.23 23.971 11.23C23.9402 11.0206 23.8448 10.8259 23.6982 10.6732C23.5516 10.5205 23.361 10.4173 23.153 10.378L23.147 10.377L21.52 10.146ZM11.997 15.001C11.4038 15.0008 10.8239 14.8247 10.3308 14.4951C9.8376 14.1654 9.45323 13.6969 9.22627 13.1488C8.9993 12.6007 8.93991 11.9977 9.05562 11.4159C9.17133 10.834 9.45693 10.2996 9.87633 9.88003C10.2957 9.4605 10.8301 9.17472 11.4119 9.05882C11.9937 8.94292 12.5967 9.0021 13.1449 9.22888C13.6931 9.45567 14.1617 9.83988 14.4915 10.3329C14.8213 10.826 14.9976 11.4058 14.998 11.999C14.9981 12.3931 14.9206 12.7844 14.7698 13.1486C14.6191 13.5127 14.398 13.8436 14.1193 14.1223C13.8406 14.401 13.5097 14.6221 13.1456 14.7728C12.7814 14.9236 12.3911 15.0011 11.997 15.001Z"
                      fill="#1E74FD"
                    />
                  </svg>
                </li>

               <span>settings</span></a> 
              </div>

              <div class="thirditem">
                <li class="nav-item"></li>
                <li class="nav-item">
                  <a href="profilyy.html" class="nav-a"><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="#1E74FD"
                    class="bi bi-person-square"
                    viewBox="0 0 16 16"
                  >
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path
                      d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"
                    />
                  </svg>
                </li>
              <span> Profile</span></a> 
              </div>
            </div>
          </ul>
        </div>
      </div>
    </nav>
    <!--navbar ends here-->

    <!-- Main Container start-->


    <div class="main">


<!--Games starts here-->
<div class="games"><svg width="42" height="36" viewBox="0 0 42 36" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M16 24V27C16 30.866 12.866 34 9 34C5.13401 34 2 30.866 2 27V13" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M26 24V27C26 30.866 29.134 34 33 34C36.866 34 40 30.866 40 27V13" stroke="black" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M29 2H13C6.92487 2 2 6.92487 2 13C2 19.0751 6.92487 24 13 24H29C35.0751 24 40 19.0751 40 13C40 6.92487 35.0751 2 29 2Z" fill="#2F88FF" stroke="black" stroke-width="4"/>
  <path d="M18 13H10" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M14 9V17" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
  <path d="M33 11C33 9.89543 32.1046 9 31 9C29.8954 9 29 9.89543 29 11C29 12.1046 29.8954 13 31 13C32.1046 13 33 12.1046 33 11Z" fill="white"/>
  <path d="M29 16C29 14.8954 28.1046 14 27 14C25.8954 14 25 14.8954 25 16C25 17.1046 25.8954 18 27 18C28.1046 18 29 17.1046 29 16Z" fill="white"/>
  </svg>
  
 <a href="http://localhost/ESA/ESA-Project1-Games/games.html" ><button id="gamesbtn">Fancy a game?</button></a> 
</div>
<!--Games ends here-->


      <!--Sidebar starts here-->
      <div class="dropdown-container" id="dropdown-sb" style="box-shadow: 0px 2px 3px black;">
       
            <h4 style="margin-top: 5px;">Categories</h4>
            
        <ul class="list-unstyled ps-0" >
          <li class="mb-1" >
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                  aria-expanded="false"
                style="font-weight:bold ;" id="drop-btn1">
                <i class='bx bx-chevron-right' id="drop-icon1"></i> <svg width="25" height="25" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M15.528 2.95383C15.6672 3.00939 15.7866 3.10539 15.8707 3.22945C15.9549 3.35351 15.9999 3.49993 16 3.64983V12.3118C15.9999 12.4617 15.9549 12.6081 15.8707 12.7322C15.7866 12.8563 15.6672 12.9523 15.528 13.0078L8.278 15.9078C8.09922 15.9793 7.89978 15.9793 7.721 15.9078L0.471 13.0078C0.331969 12.9521 0.212805 12.856 0.128861 12.732C0.0449156 12.6079 3.48599e-05 12.4616 0 12.3118L0 3.64983C3.48599e-05 3.50005 0.0449156 3.35371 0.128861 3.22966C0.212805 3.10561 0.331969 3.00954 0.471 2.95383L7.443 0.164825L7.447 0.163825L7.721 0.0538255C7.90008 -0.0179418 8.09992 -0.0179418 8.279 0.0538255L8.553 0.163825L8.557 0.164825L15.528 2.95383ZM14.154 3.48083L8 5.94283L1.846 3.48083L1 3.81983V4.21983L7.5 6.81983V14.7418L8 14.9418L8.5 14.7418V6.82083L15 4.22083V3.82083L14.154 3.48083Z" fill="#0055FF"/>
                  </svg>
                  <span><a href="http://localhost/ESA/user.php" style="text-decoration:none;color:black">General</a></span>
            </button>
            </li>
            <li class="mb-1" >
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                  aria-expanded="false"
                style="font-weight:bold ;" id="drop-btn1">
                <i class='bx bx-chevron-right' id="drop-icon1"></i> <svg width="25" height="25" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 0C4.48 0 0 4.48 0 10C0 15.52 4.48 20 10 20C15.52 20 20 15.52 20 10C20 4.48 15.52 0 10 0ZM11 3.3L12.35 2.35C14.1589 2.91055 15.7107 4.0939 16.73 5.69L16.34 7.03L14.99 7.49L11 4.7V3.3ZM7.65 2.35L9 3.3V4.7L5.01 7.49L3.66 7.03L3.27 5.69C4.29519 4.09937 5.84478 2.91772 7.65 2.35ZM5.08 15.11L3.94 15.21C2.68645 13.764 1.99749 11.9137 2 10C2 9.88 2.01 9.77 2.02 9.65L3.02 8.92L4.4 9.4L5.86 13.74L5.08 15.11ZM12.5 17.59C11.71 17.85 10.87 18 10 18C9.13 18 8.29 17.85 7.5 17.59L6.81 16.1L7.45 15H12.56L13.2 16.11L12.5 17.59ZM12.27 13H7.73L6.38 8.98L10 6.44L13.63 8.98L12.27 13ZM16.06 15.21L14.92 15.11L14.13 13.74L15.59 9.4L16.98 8.93L17.98 9.66C17.99 9.77 18 9.88 18 10C18 11.99 17.27 13.81 16.06 15.21Z" fill="#0055FF"/>
                      </svg>
                <span><a href="http://localhost/ESA/user.php?category=Sport" style="text-decoration:none;color:black">Sports</a></span>  
            </button>
            </li>
            <li class="mb-1" >
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                  aria-expanded="false"
                style="font-weight:bold ;" id="drop-btn1">
                <i class='bx bx-chevron-right' id="drop-icon1"></i> <svg width="25" height="25" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 0L0 6V18H16V6L8 0ZM8.5 9.5C8.5 10.33 7.83 11 7 11V15H6V11C5.17 11 4.5 10.33 4.5 9.5V6.5H5.5V9.5H6V6.5H7V9.5H7.5V6.5H8.5V9.5ZM11 15H10V11.5H9V8.5C9 7.4 9.9 6.5 11 6.5V15Z" fill="#0055FF"/>
                      </svg>
                <span><a href="http://localhost/ESA/user.php?category=Food" style="text-decoration:none;color:black">Food</a></span>  
            </button>
            </li>
            <li class="mb-1" >
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                  aria-expanded="false"
                style="font-weight:bold ;" id="drop-btn1">
                <i class='bx bx-chevron-right' id="drop-icon1"></i><svg width="25" height="25" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10 17H15ZM10 17H5Z" fill="#0055FF"/>
                      <path d="M15 17H10H5" stroke="#0055FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M10 17V13Z" fill="#0055FF"/>
                      <path d="M10 17V13" stroke="#0055FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M10 13H1V1H19V13H10Z" fill="#0055FF" stroke="#0055FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                <span><a href="http://localhost/ESA/user.php?category=Computers" style="text-decoration:none;color:black">Computers</a></span>  
            </button>
            </li>
            <li class="mb-1" >
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                  aria-expanded="false"
                style="font-weight:bold ;" id="drop-btn1">
                <i class='bx bx-chevron-right' id="drop-icon1"></i><svg id="car-logo" width="34" height="34" viewBox="0 0 41 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.645 4.395C14.2179 4.36217 13.819 4.16936 13.528 3.8551C13.237 3.54084 13.0753 3.12831 13.0753 2.7C13.0753 2.27169 13.237 1.85916 13.528 1.5449C13.819 1.23065 14.2179 1.03783 14.645 1.005H26.645C26.8785 0.987049 27.1133 1.01755 27.3345 1.09459C27.5557 1.17164 27.7585 1.29356 27.9304 1.45271C28.1022 1.61185 28.2394 1.8048 28.3331 2.01944C28.4269 2.23408 28.4753 2.46577 28.4753 2.7C28.4753 2.93423 28.4269 3.16593 28.3331 3.38056C28.2394 3.5952 28.1022 3.78815 27.9304 3.9473C27.7585 4.10644 27.5557 4.22836 27.3345 4.30541C27.1133 4.38245 26.8785 4.41295 26.645 4.395H14.645ZM6.505 11.485C6.51284 11.0146 6.70456 10.5659 7.03913 10.2351C7.37369 9.90423 7.8245 9.71755 8.295 9.715H9.695L12.355 7.455C12.5587 7.28139 12.8174 7.18571 13.085 7.185H28.345C28.7548 7.18729 29.1478 7.34769 29.4422 7.63275C29.7366 7.91781 29.9095 8.30552 29.925 8.715V10.865H31.715C32.135 10.8676 32.5368 11.0363 32.8328 11.3342C33.1289 11.6321 33.295 12.035 33.295 12.455V24.845C33.295 25.264 33.1285 25.6659 32.8322 25.9622C32.5359 26.2585 32.134 26.425 31.715 26.425H18.155C17.9199 26.4262 17.6899 26.3565 17.495 26.225L12.505 22.715H8.295C8.05653 22.7151 7.82045 22.6675 7.60063 22.575C7.38081 22.4826 7.18167 22.3471 7.01492 22.1767C6.84817 22.0062 6.71717 21.8041 6.6296 21.5823C6.54203 21.3605 6.49967 21.1234 6.505 20.885V11.485ZM4.395 21.265C4.36217 21.6921 4.16936 22.091 3.8551 22.382C3.54084 22.673 3.12831 22.8347 2.7 22.8347C2.27169 22.8347 1.85916 22.673 1.5449 22.382C1.23064 22.091 1.03783 21.6921 1.005 21.265V11.095C0.987049 10.8615 1.01755 10.6267 1.09459 10.4055C1.17164 10.1844 1.29356 9.98146 1.4527 9.80961C1.61185 9.63776 1.8048 9.50065 2.01944 9.40688C2.23408 9.31311 2.46577 9.26471 2.7 9.26471C2.93423 9.26471 3.16593 9.31311 3.38056 9.40688C3.5952 9.50065 3.78815 9.63776 3.9473 9.80961C4.10644 9.98146 4.22836 10.1844 4.30541 10.4055C4.38245 10.6267 4.41295 10.8615 4.395 11.095V21.265ZM4.395 16.175H6.505ZM35.145 11.935C35.1476 11.6361 35.2675 11.3502 35.4789 11.1389C35.6902 10.9275 35.9761 10.8076 36.275 10.805H37.105C37.2855 10.8057 37.4633 10.8496 37.6234 10.9332C37.7834 11.0167 37.9212 11.1373 38.025 11.285L39.795 13.715C39.9294 13.909 40.0026 14.1389 40.005 14.375V21.715C40.0073 21.9611 39.9262 22.2008 39.775 22.395L38.025 24.715C37.9215 24.8576 37.7864 24.9742 37.6302 25.0557C37.4741 25.1373 37.3011 25.1815 37.125 25.185H36.275C35.9761 25.1824 35.6902 25.0625 35.4789 24.8511C35.2675 24.6398 35.1476 24.3539 35.145 24.055V11.935ZM20.645 7.155V4.395ZM35.145 17.985H33.295Z" fill="#0055FF"/>
                      <path d="M4.395 16.175H6.505M20.645 7.155V4.395M35.145 17.985H33.295M14.645 4.395C14.2179 4.36217 13.819 4.16936 13.528 3.8551C13.237 3.54084 13.0753 3.12831 13.0753 2.7C13.0753 2.27169 13.237 1.85916 13.528 1.5449C13.819 1.23065 14.2179 1.03783 14.645 1.005H26.645C26.8785 0.987049 27.1133 1.01755 27.3345 1.09459C27.5557 1.17164 27.7585 1.29356 27.9304 1.45271C28.1022 1.61185 28.2394 1.8048 28.3331 2.01944C28.4269 2.23408 28.4753 2.46577 28.4753 2.7C28.4753 2.93423 28.4269 3.16593 28.3331 3.38056C28.2394 3.5952 28.1022 3.78815 27.9304 3.9473C27.7585 4.10644 27.5557 4.22836 27.3345 4.30541C27.1133 4.38245 26.8785 4.41295 26.645 4.395H14.645ZM6.505 11.485C6.51284 11.0146 6.70456 10.5659 7.03913 10.2351C7.37369 9.90423 7.8245 9.71755 8.295 9.715H9.695L12.355 7.455C12.5587 7.28139 12.8174 7.18571 13.085 7.185H28.345C28.7548 7.18729 29.1478 7.34769 29.4422 7.63275C29.7366 7.91781 29.9095 8.30552 29.925 8.715V10.865H31.715C32.135 10.8676 32.5368 11.0363 32.8328 11.3342C33.1289 11.6321 33.295 12.035 33.295 12.455V24.845C33.295 25.264 33.1285 25.6659 32.8322 25.9622C32.5359 26.2585 32.134 26.425 31.715 26.425H18.155C17.9199 26.4262 17.6899 26.3565 17.495 26.225L12.505 22.715H8.295C8.05653 22.7151 7.82045 22.6675 7.60063 22.575C7.38081 22.4826 7.18167 22.3471 7.01492 22.1767C6.84817 22.0062 6.71717 21.8041 6.6296 21.5823C6.54203 21.3605 6.49967 21.1234 6.505 20.885V11.485ZM4.395 21.265C4.36217 21.6921 4.16936 22.091 3.8551 22.382C3.54084 22.673 3.12831 22.8347 2.7 22.8347C2.27169 22.8347 1.85916 22.673 1.5449 22.382C1.23064 22.091 1.03783 21.6921 1.005 21.265V11.095C0.987049 10.8615 1.01755 10.6267 1.09459 10.4055C1.17164 10.1844 1.29356 9.98146 1.4527 9.80961C1.61185 9.63776 1.8048 9.50065 2.01944 9.40688C2.23408 9.31311 2.46577 9.26471 2.7 9.26471C2.93423 9.26471 3.16593 9.31311 3.38056 9.40688C3.5952 9.50065 3.78815 9.63776 3.9473 9.80961C4.10644 9.98146 4.22836 10.1844 4.30541 10.4055C4.38245 10.6267 4.41295 10.8615 4.395 11.095V21.265ZM35.145 11.935C35.1476 11.6361 35.2675 11.3502 35.4789 11.1389C35.6902 10.9275 35.9761 10.8076 36.275 10.805H37.105C37.2855 10.8057 37.4633 10.8496 37.6234 10.9332C37.7834 11.0167 37.9212 11.1373 38.025 11.285L39.795 13.715C39.9294 13.909 40.0026 14.1389 40.005 14.375V21.715C40.0073 21.9611 39.9262 22.2008 39.775 22.395L38.025 24.715C37.9215 24.8576 37.7864 24.9742 37.6302 25.0557C37.4741 25.1373 37.3011 25.1815 37.125 25.185H36.275C35.9761 25.1824 35.6902 25.0625 35.4789 24.8511C35.2675 24.6398 35.1476 24.3539 35.145 24.055V11.935Z" stroke="grey" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                <span><a href="http://localhost/ESA/user.php?category=Cars" style="text-decoration:none;color:black">Cars</a></span>  
            </button>
            </li>
        </ul>
             <!--Sidebar ends here-->
     
    </div>
  




      <!--Content starts here-->


      <!--carousel-->
      <div class="content"  id="postsContainer">
 <div class="wrapper" >
    
      <ul class="carousel" style="width: 99%;">
        <li class="card">
        
        <div class="addstory">
  <!-- Button trigger modal -->
  <form action="" type="">
  <button type="button" id="addImageBtn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border:none; background-color:white; font-size:215px; color:#0055FF;">
    +
  </button>
  </form>
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="display:flex; justify-content:center;">
            <form action="add_story.php" method="post" enctype="multipart/form-data">
    <label for="storyImage">Select Image:</label>
    <input type="file" name="storyImage" id="storyImage">
    
    <input type="submit" name="submit" value="Add Story">
  </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


          
<?php
      // Fetch users with stories from the database
      $sql = "SELECT u.Firstname, u.userprofile, s.storyImage, u.Lastname
              FROM user u
              INNER JOIN story s ON u.userID = s.userID";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $lastname = $row['Lastname'];
            $firstname = $row['Firstname'];
            $userprofile = $row['userprofile'];
            $storyImage = $row['storyImage'];
        
            echo '<li class="card">';
            echo '<div class="img"><img src="' . $userprofile . '" alt="" draggable="false" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="' . $storyImage . '"></div>';
            echo '<h2>' . $firstname . ' ' . $lastname . '</h2>';
            echo '</li>';
        }
    }
      
      ?>

    </ul>
   <!-- View Image Modal -->
   <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">View Image</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="display:flex; justify-content:center;">
        <img id="modalImage" src="" alt="Modal Image" style="width:255px; width:455px;">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


      
      <!--carousel ends here-->
 

       <!--Create Post starts here-->
       <style>
    .image-preview {
        margin-top: 10px;
        width: 200px;
        height: 200px;
        overflow: hidden;
        position: relative;
    }

    .image-preview img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .cr-post {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>

<!-- Create Post starts here -->
<div class="cr-post">
    <form action="create_post.php" method="post" enctype="multipart/form-data">
        <div style="display:flex;flex-direction:columns; justify-content:center; align-items:center;">
            <label for="postImage" style="border:1px solid #0055FF; border-radius:4px; padding:3px; margin:3px;margin-left:31%; width:85%; align-items:center; justify-content:center;display:flex;">Add an image</label>  
            <input type="file" name="postImage" id="postImage" style="visibility:hidden;" onchange="previewImage(event)">
        </div>
        <input type="text" name="userinput">
        <select name="selectcategory" id="selectcategory">
            <option value="2">Sports</option>
            <option value="1">Food</option>
            <option value="3">Computers</option>
            <option value="4">Cars</option>
        </select>
        <input type="submit" name="submit" value="Create Post" id="cr-post-btn">
    </form>


    <div class="image-preview">
        <img id="preview" src="#" alt="">
    </div>

    <script>
        function previewImage(event) {
            var input = event.target;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview').setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</div>



<?php

if(isset($_GET['category'])){
  $category = $_GET['category'];
  $q = "SELECT \n"

. "    * \n"

. "     \n"

. "FROM \n"

. "    post\n"

. "JOIN \n"

. "    user ON post.userID = user.userID\n"

. "JOIN \n"

. "    category ON post.categoryId = category.categoryId  \n"

. "     WHERE category.categoryname = '$category'  \n"

. "ORDER BY `post`.`Time` ASC  ";
$result = mysqli_query($conn,$q);
while($row = mysqli_fetch_assoc($result)){
  // Post Without Image
  if(empty($row['postImage'])){
    $postID = $row['postID'];?>
<div class="first-post post" data-post-id="1">
  <div class="posts-header">
      <button class="posts-img-btn"
          style="border-radius:50%;width: fit-content;background-color: transparent;border: transparent;"><img
              class="posts-img" style="object-fit: cover;" src="<?php echo "images/". $row['userprofile']?>" alt=""></button>
      <div class="posts-head">
          <p class="posts-text"><?php echo $row['Firstname']."".$row['Lastname']?></p>
          <p class="posts-text" style="display: inline;margin-top: 0; ">
                <?php
                $createdTime = strtotime($row['Time']);
                $postTime = date("h:i A", $createdTime);
                $postDate = date("F j, Y", $createdTime);
                echo  $postDate ."-" . $postTime;
                ?></p>
          <p class="posts-text"><?php echo $row['categoryname'] ?></p>
      </div>
  </div>
  <div class="posts-content">
      <p style="word-break: break-all;"><?php echo $row['Text']?></p>
  </div>
  <div class="posts-footer">
  
  <?php
    $q5 = "SELECT COUNT(*)  AS likes FROM likes WHERE PostID = $postID";
    $result5 = mysqli_query($conn,$q5);
    $row5 = mysqli_fetch_assoc($result5);
    $q6 = "SELECT COUNT(*)  AS reports FROM reports WHERE PostID = $postID";
    $result6 = mysqli_query($conn,$q6);
    $row6 =  mysqli_fetch_assoc($result6);
    $q7 = "SELECT COUNT(*)  AS comments FROM comments WHERE postID = $postID";
    $result7 = mysqli_query($conn,$q7);
    $row7 =  mysqli_fetch_assoc($result7);
    ?>
      <img src="images/i.feather-thumbs-up.jpg" style="border-radius: 50% ;" alt="">
      <img src="images/i.feather-heart.jpg" style="border-radius:50% ;" alt="">
      <button  class="footer-text1 like-button" data-postid="<?php echo $postID ?>"><?php echo $row5['likes']?>- Like</button>
      <button   class="modal-btn footer-text2"><?php echo $row7['comments']?> comments</button>
      <button  class="footer-text3 report-button" data-postid="<?php echo $postID ?>"><?php echo $row6['reports']?>-Reports</button>
      
  </div>
  <div class="modal" style="position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  z-index: 1;
  background-color: lightblue;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
  padding: 20px;
  width: 700px;
  height: fit-content;
  border-radius: 10px;">
    <div class="comment-head">
    <h2>Comments</h2>
    <button  class="commentclose">Close</button>
    </div>
    <div class="comments-container">
    <ul>
    <?php
      $q2 = "SELECT *\n"

      . "FROM comments c\n"
  
      . "JOIN user u ON c.userID = u.userID\n"
  
      . "WHERE c.postID = $postID";
      $result2 = mysqli_query($conn,$q2);
      while($row2 = mysqli_fetch_assoc($result2)){?>
      <li class="comments-list">
        <img style="object-fit: cover;" src="<?php echo "images/". $row2['userprofile']?>" alt="">
        <div class="comment-container">
            <p><?php echo $row2['Firstname']." ".$row2['Lastname']?></p>
            <span><?php echo $row2['comment']?></span>
        </div>
      </li>
      <?php
      }
      ?>
      
    </ul>
    </div>
    <div class="comments-bottom">
        <input type="text" name="comment" id="comment-input-<?php echo $postID ?>">
        <button class="comment-btn" data-postid="<?php echo $postID ?>" >Add Comment</button>
    </div>
  </div>
  <!-- MODAL END HERE-->
</div>
<?php
  }else if(!empty($row['postImage'])){
    $postID = $row['postID'];?>
<!-- Post With Image-->
<div class="second-post post" data-post-id="1">
                <div class="posts-header">
                    <button class="posts-img-btn"
                        style="border-radius:50%;width: fit-content;background-color: transparent;border: transparent;"><img
                            class="posts-img" style="object-fit: cover;" src="<?php echo "images/". $row['userprofile'] ?>" alt=""></button>
                    <div class="posts-head">
                        <p class="posts-text"><?php echo $row['Firstname']."".$row['Lastname']?></p>
                        <p class="posts-text" style="display: inline;margin-top: 0; "><?php
                        $createdTime = strtotime($row['Time']);
                        $postTime = date("h:i A", $createdTime);
                        $postDate = date("F j, Y", $createdTime);
                        echo  $postDate ."-" . $postTime;
                        ?></p>
                        <p class="posts-text"><?php echo $row['categoryname'] ?></p>
                    </div>
                </div>
                <div class="posts-content">
                    <p style="word-break: break-all;"><?php echo $row['Text']?></p>
                </div>
                <div class="posts-images-container">
                    <img class="posts-img1" style="object-fit: cover;" src="<?php echo"images/". $row['postImage']?>" alt="">
                </div>
                <div class="posts-footer">
                
                <?php
    $q5 = "SELECT COUNT(*)  AS likes FROM likes WHERE PostID = $postID";
    $result5 = mysqli_query($conn,$q5);
    $row5 = mysqli_fetch_assoc($result5);
    $q6 = "SELECT COUNT(*)  AS reports FROM reports WHERE PostID = $postID";
    $result6 = mysqli_query($conn,$q6);
    $row6 =  mysqli_fetch_assoc($result6);
    $q7 = "SELECT COUNT(*)  AS comments FROM comments WHERE postID = $postID";
    $result7 = mysqli_query($conn,$q7);
    $row7 =  mysqli_fetch_assoc($result7);
    ?>
      <img src="images/i.feather-thumbs-up.jpg" style="border-radius: 50% ;" alt="">
      <img src="images/i.feather-heart.jpg" style="border-radius:50% ;" alt="">
      <button  class="footer-text1 like-button" data-postid="<?php echo $postID ?>"><?php echo $row5['likes']?>- Like</button>
      <button   class="modal-btn footer-text2"><?php echo $row7['comments']?> comments</button>
      <button  class="footer-text3 report-button" data-postid="<?php echo $postID ?>"><?php echo $row6['reports']?>-Reports</button>
      
                </div>
                <!-- Modal-->
  <div class="modal" style="position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  z-index: 1;
  background-color: lightblue;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
  padding: 20px;
  width: 700px;
  height: fit-content;
  border-radius: 10px;">
    <div class="comment-head">
    <h2>Comments</h2>
    <button  class="commentclose">Close</button>
    </div>
    <div class="comments-container">
    <ul>
    <?php
      $q2 = "SELECT *\n"

      . "FROM comments c\n"
  
      . "JOIN user u ON c.userID = u.userID\n"
  
      . "WHERE c.postID = $postID";
      $result2 = mysqli_query($conn,$q2);
      while($row2 = mysqli_fetch_assoc($result2)){?>
      <li class="comments-list">
        <img style="object-fit: cover;" src="<?php echo "images/". $row2['userprofile']?>" alt="">
        <div class="comment-container">
            <p><?php echo $row2['Firstname']." ".$row2['Lastname']?></p>
            <span><?php echo $row2['comment']?></span>
        </div>
      </li>
      <?php
      }
      ?>
      
    </ul>
    </div>
    <div class="comments-bottom">
        <input type="text" name="comment" id="comment-input-<?php echo $postID ?>">
        <button class="comment-btn" data-postid="<?php echo $postID ?>" >Add Comment</button>
    </div>
  </div>
  <!-- MODAL END HERE-->
            </div>
  <?php
  }
}
}else{ // General

$q = "SELECT \n"

. "    * \n"

. "     \n"

. "FROM \n"

. "    post\n"

. "JOIN \n"

. "    user ON post.userID = user.userID\n"

. "JOIN \n"

. "    category ON post.categoryId = category.categoryId  \n"

. "ORDER BY `post`.`Time` ASC";
$result = mysqli_query($conn,$q);
while($row = mysqli_fetch_assoc($result)){
  // Post without Image 
  if(empty($row['postImage'])){
    $postID = $row['postID'];
  ?>
<div class="first-post post" data-post-id="1">
  <div class="posts-header">
      <button class="posts-img-btn"
          style="border-radius:50%;width: fit-content;background-color: transparent;border: transparent;"><img
              class="posts-img" style="object-fit: cover;" src="<?php echo "images/". $row['userprofile']?>" alt=""></button>
      <div class="posts-head">
          <p class="posts-text"><?php echo $row['Firstname']."".$row['Lastname']?></p>
          <p class="posts-text" style="display: inline;margin-top: 0; ">
                <?php
                $createdTime = strtotime($row['Time']);
                $postTime = date("h:i A", $createdTime);
                $postDate = date("F j, Y", $createdTime);
                echo  $postDate ."-" . $postTime;
                ?></p>
          <p class="posts-text"><?php echo $row['categoryname'] ?></p>
      </div>
  </div>
  <div class="posts-content">
      <p style="word-break: break-all;"><?php echo $row['Text']?></p>
  </div>
  <div class="posts-footer">
    <?php
    $q5 = "SELECT COUNT(*)  AS likes FROM likes WHERE PostID = $postID";
    $result5 = mysqli_query($conn,$q5);
    $row5 = mysqli_fetch_assoc($result5);
    $q6 = "SELECT COUNT(*)  AS reports FROM reports WHERE PostID = $postID";
    $result6 = mysqli_query($conn,$q6);
    $row6 =  mysqli_fetch_assoc($result6);
    $q7 = "SELECT COUNT(*)  AS comments FROM comments WHERE postID = $postID";
    $result7 = mysqli_query($conn,$q7);
    $row7 =  mysqli_fetch_assoc($result7);
    ?>
      <img src="images/i.feather-thumbs-up.jpg" style="border-radius: 50% ;" alt="">
      <img src="images/i.feather-heart.jpg" style="border-radius:50% ;" alt="">
      <button  class="footer-text1 like-button" data-postid="<?php echo $postID ?>"><?php echo $row5['likes']?>- Like</button>
      <button   class="modal-btn footer-text2"><?php echo $row7['comments']?> comments</button>
      <button  class="footer-text3 report-button" data-postid="<?php echo $postID ?>"><?php echo $row6['reports']?>-Reports</button>
      
  </div>
  <!-- Modal-->
  <div class="modal" style="position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  z-index: 1;
  background-color: lightblue;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
  padding: 20px;
  width: 700px;
  height: fit-content;
  border-radius: 10px;">
    <div class="comment-head">
    <h2>Comments</h2>
    <button  class="commentclose">Close</button>
    </div>
    <div class="comments-container">
    <ul>
    <?php
      $q2 = "SELECT *\n"

      . "FROM comments c\n"
  
      . "JOIN user u ON c.userID = u.userID\n"
  
      . "WHERE c.postID = $postID";
      $result2 = mysqli_query($conn,$q2);
      while($row2 = mysqli_fetch_assoc($result2)){?>
      <li class="comments-list">
        <img style="object-fit: cover;" src="<?php echo "images/".$row2['userprofile']?>" alt="">
        <div class="comment-container">
            <p><?php echo $row2['Firstname']." ".$row2['Lastname']?></p>
            <span><?php echo $row2['comment']?></span>
        </div>
      </li>
      <?php
      }
      ?>
      
    </ul>
    </div>
    <div class="comments-bottom">
        <input type="text" name="comment" id="comment-input-<?php echo $postID ?>">
        <button class="comment-btn" data-postid="<?php echo $postID ?>" >Add Comment</button>
    </div>
  </div>
  <!-- MODAL END HERE-->
</div>


<?php
  }else if(!empty($row['postImage'])){
    $postID = $row['postID'];?>
<!--Post with an image-->
<div class="second-post post" data-post-id="1">
                <div class="posts-header">
                    <button class="posts-img-btn"
                        style="border-radius:50%;width: fit-content;background-color: transparent;border: transparent;"><img
                            class="posts-img" style="object-fit: cover;" src="<?php echo "images/".$row['userprofile'] ?>" alt=""></button>
                    <div class="posts-head">
                        <p class="posts-text"><?php echo $row['Firstname']."".$row['Lastname']?></p>
                        <p class="posts-text" style="display: inline;margin-top: 0; "><?php
                        $createdTime = strtotime($row['Time']);
                        $postTime = date("h:i A", $createdTime);
                        $postDate = date("F j, Y", $createdTime);
                        echo  $postDate ."-" . $postTime;
                        ?></p>
                        <p class="posts-text"><?php echo $row['categoryname'] ?></p>
                    </div>
                </div>
                <div class="posts-content">
                    <p style="word-break: break-all;"><?php echo $row['Text']?></p>
                </div>
                <div class="posts-images-container">
                    <img class="posts-img1" style="object-fit: cover;" src="<?php echo "images/".$row['postImage']?>" alt="">
                </div>
                <div class="posts-footer">
                
                <?php
    $q5 = "SELECT COUNT(*)  AS likes FROM likes WHERE PostID = $postID";
    $result5 = mysqli_query($conn,$q5);
    $row5 = mysqli_fetch_assoc($result5);
    $q6 = "SELECT COUNT(*)  AS reports FROM reports WHERE PostID = $postID";
    $result6 = mysqli_query($conn,$q6);
    $row6 =  mysqli_fetch_assoc($result6);
    $q7 = "SELECT COUNT(*)  AS comments FROM comments WHERE postID = $postID";
    $result7 = mysqli_query($conn,$q7);
    $row7 =  mysqli_fetch_assoc($result7);
    ?>
      <img src="images/i.feather-thumbs-up.jpg" style="border-radius: 50% ;" alt="">
      <img src="images/i.feather-heart.jpg" style="border-radius:50% ;" alt="">
      <button  class="footer-text1 like-button" data-postid="<?php echo $postID ?>"><?php echo $row5['likes']?>- Like</button>
      <button   class="modal-btn footer-text2"><?php echo $row7['comments']?> comments</button>
      <button  class="footer-text3 report-button" data-postid="<?php echo $postID ?>"><?php echo $row6['reports']?>-Reports</button>
      
                </div>
                <!-- Modal-->
  <div class="modal" style="position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%,-50%);
  z-index: 1;
  background-color: lightblue;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.3);
  padding: 20px;
  width: 700px;
  height: fit-content;
  border-radius: 10px;">
    <div class="comment-head">
    <h2>Comments</h2>
    <button  class="commentclose">Close</button>
    </div>
    <div class="comments-container">
    <ul>
    <?php
      $q2 = "SELECT *\n"

      . "FROM comments c\n"
  
      . "JOIN user u ON c.userID = u.userID\n"
  
      . "WHERE c.postID = $postID";
      $result2 = mysqli_query($conn,$q2);
      while($row2 = mysqli_fetch_assoc($result2)){?>
      <li class="comments-list">
        <img style="object-fit: cover;" src="<?php echo "images/".$row2['userprofile']?>" alt="">
        <div class="comment-container">
            <p><?php echo $row2['Firstname']." ".$row2['Lastname']?></p>
            <span><?php echo $row2['comment']?></span>
        </div>
      </li>
      <?php
      }
      ?>
      
    </ul>
    </div>
    <div class="comments-bottom">
        <input type="text" name="comment" id="comment-input-<?php echo $postID ?>">
        <button class="comment-btn" data-postid="<?php echo $postID ?>" >Add Comment</button>
    </div>
  </div>
  <!-- MODAL END HERE-->
            </div>
  <?php
  }
}
}
?>


      </div>
      <!--Content ends here-->
</div>


      <!--friendlist starts here-->
      <div class="friendlist">
      
 <!-- /*weather api starts here*/ -->
     <div class="card-weather">
      <div class="search-weather">
    <input type="text" placeholder="enter country name:" spellcheck="false">
    <button><img src="weather-images/search.png" alt="" id="searchimg"></button>
      </div>
      <div class="weather">
        <img src="/weather-images/rain.png" alt="" class="weather-icon">
        <h4 class="temp"></h4>
        <h4 class="city"></h4>
        <div class="details">
          <div class="col">
            <p id="phum">Humidity:</p>
            <img src="/weather-images/humidity.png" alt="" id="humidityimage">
            <div class="w-icon-flex">
             
              <p class="humidity"></p>
              
            </div>
          </div>
          <div class="col">
            <p id="pws">Wind speed:</p>
            <img src="/weather-images/wind.png" alt="" id="windimage">
            <div class="w-icon-flex">
              
              <p class="wind"></p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
          <!-- /* weather api ends here */ -->
        <ul id='friend-list'>
          <li class='friend '>
            <img src='https://i.imgur.com/nkN3Mv0.jpg' />
            <div class='name'>
              Andres Perez
            </div>
          </li>
          <li class='friend'>
            <img src='https://i.imgur.com/0I4lkh9.jpg' />
            <div class='name'>
              Leah Slaten
            </div>
          </li>
          <li class='friend'>
            <img src='https://i.imgur.com/s2WCwH2.jpg' />
            <div class='name'>
              Mario Martinez
            </div>
          </li>
          <li class='friend'>
            <img src='https://i.imgur.com/rxBwsBB.jpg' />
            <div class='name'>
              Cynthia Lo
            </div>
          </li>
          <li class='friend'>
            <img src='https://i.imgur.com/tovkOg2.jpg' />
            <div class='name'>
              Sally Lin
            </div>
          </li>
          <li class='friend'>
            <img src='https://i.imgur.com/A7lNstm.jpg' />
            <div class='name'>
              Danny Tang
            </div>
          </li>
        </ul>




      </div>
      <!--freindlist ends here-->
    <!--Main Container end-->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="main.js"></script>

    <!--modal story open-->
    <script>
  const imageModal = document.getElementById('imageModal');
  const modalImage = document.getElementById('modalImage');

  imageModal.addEventListener('show.bs.modal', function (event) {
    const triggerButton = event.relatedTarget; // Button that triggered the modal
    const storyImage = triggerButton.getAttribute('data-bs-image'); // Get the story image URL from the button's data attribute

    // Set the story image URL as the source for the modal image
    modalImage.src = storyImage;
  });
</script>

  </body>
</html>
