<?php
    session_start();
    if (!isset($_SESSION['Student_id'])) {
      header("Location: login.php"); // Redirect if not logged in
      exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="homestyle.css"/>
    <title>SKC Bulan Campus Home Page</title>
  </head>
  <body>
    <div class="bodycontainer">
      <div class="maincontainer">
      <div class="navcontainer">
          <nav id="nav-group">
            <img class="skc" src="https://github.com/gracelajohnmark/Sports_Culture_Arts/blob/45d23ffca769b2d9430ba3120f1c5cf69dc9b6c4/img/SKC%20LOGO.png?raw=true" />
            <h4 class="Logoname-1">Sorsogon State University</h4>
            <h4 class="Logoname-2">Sports Culture & Arts</h4> 
              <ul class="nav-ul">
                <li class="nav-li">
                  <a href="homepage.php" class="homepage">Home</a>
                  <img class="selected-1" src="https://github.com/gracelajohnmark/Sports_Culture_Arts/blob/0d1dd55776e32e4c51f7505e4fa851fc0c08d70f/img/selected%202.png?raw=true" />
                </li>
                <li>
                  <a href="sports/sports-equipment.php" class="Sports-menu">Sports Equipments</a>
                </li>
                <li>
                  <a href="#" class="athlete-menu">Athelete Profile</a>
                </li>
              </ul>
            <img class="notification-icon" src="https://github.com/gracelajohnmark/Sports_Culture_Arts/blob/cdb7af6549cf68baae7687506594b58b49c621d4/img/notification%20icon.png?raw=true" />
            <img class="message-icon" src="https://github.com/gracelajohnmark/Sports_Culture_Arts/blob/ec6e3c09be58d3e17a5e649e2f78f4f2079dda41/img/message%20icon.png?raw=true" />
            <img class="user-login-icon" src="https://github.com/gracelajohnmark/Sports_Culture_Arts/blob/ec6e3c09be58d3e17a5e649e2f78f4f2079dda41/img/user%20login%20icon.png?raw=true" onclick="toggleMenu()" />
            <div class="sub-menu-wrap" id="subMenu">
              <div class="sub-menu">
                <div class="user-info">
                <img class="user-login-inside-icon" src="https://c.animaapp.com/w7WS4Fj2/img/vector-8.svg" />
                <h6 class="userinfo-fullname"><?= $_SESSION['Fullname'] ?></h6>
                <h6 class="userinfo-id"><?= $_SESSION['Student_id'] ?></h6>
                <h6 class="userinfo-type"><?=$_SESSION['Usertype']?></h6>
                </div>
                <hr>
                <a href="#" class="sub-menu-link">
                  <img class="icon-container" src="https://github.com/gracelajohnmark/Sports_Culture_Arts/blob/010a30821019ac5406a8b227c40e2a1e016e6bd2/img/edit%20profile-icon.png?raw=true" alt="">
                  <p>Edit Profile</p>
                  <span>></span>
                </a>
                <a href="#" class="sub-menu-link">
                  <img class="icon-container" src="https://github.com/gracelajohnmark/Sports_Culture_Arts/blob/010a30821019ac5406a8b227c40e2a1e016e6bd2/img/settings-icon.png?raw=true" alt="">
                  <p>Settings</p>
                  <span>></span>
                </a>
                <a href="../login.php" class="sub-menu-link">
                  <img class="icon-container" src="https://github.com/gracelajohnmark/Sports_Culture_Arts/blob/41b494d794e93a67976f35ad044cd988655f3943/img/Logout-icon.png?raw=true" alt="">
                  <p>Logout</p>
                  <span>></span>
                </a>
                </div> 
                </div>
                </nav>
            </div>
        <div class="sidenavbargroup">
        <aside id="side-nav-group">
          <ul class="sidenav-ul">
            <li>
              <span class="sidebar-logo">SKC Portal</span>
              <button id="sidetoggle-btn">
              <img class="navmenu" src="https://github.com/gracelajohnmark/Sports_Culture_Arts/blob/445c8a15a86abbc49aeffc2bb7655b2d593f07fa/img/Navigation%20M.png?raw=true"/>
              </button>
            </li>
            <li class="sidenav-li-menu">
              <a href="homepage.php" class="navigation-menu">
                <span class="menu">Menu</span>
              </a>
            </li>
            <li class="sidenav-li">
              <button class="dropdown-btn">
                <img class="skcforms" src="https://github.com/gracelajohnmark/Sports_Culture_Arts/blob/445c8a15a86abbc49aeffc2bb7655b2d593f07fa/img/form.png?raw=true" alt="all types of skc forms"/>
                <span>SKC forms</span>
                <img src="https://github.com/gracelajohnmark/Sports_Culture_Arts/blob/45d23ffca769b2d9430ba3120f1c5cf69dc9b6c4/img/dropdown%20button.png?raw=true" alt="dropdown button">
              </button>
              <ul class="sub-menus">
                <li>
                  <img src="" alt="">
                  <a href="#">Personal Data</a>
                </li>
                <li>
                  <a href="#">Member's Profile</a>
                </li>
                <li>
                  <a href="#">Varsity Application Form</a>
                </li>
                <li>
                  <a href="#">Athlete Registration Form</a>
                </li>
                <li>
                  <a href="#">Application for Sports Club</a>
                </li>
              </ul>
            </li>
          </ul>
          </aside>
          <div class="container">
            <p class="intro">Welcome to Sports Culture and Arts SorSU Bulan Campus</p>
            <h6 class="username-fullname">Welcome Back! <?= $studentid = $_SESSION['Fullname'] ?></h6>
            <p class="be-one-of-our">Be a part of our organization and reunited as part of SorSU SKC</p>
            <iframe class="image" src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F110102590399937%2Fvideos%2F465134592298985%2F&show_text=false&width=560&t=0" width="560" height="400" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" autoplay="true"; clipboard-write; encrypted-media; picture-in-picture; web-share allowFullScreen="true"></iframe>
          </div>
          </div>
          </div>
          </div>
      <script>
        let subMenu = document.getElementById("subMenu");
        function toggleMenu(){
          subMenu.classList.toggle("openuser-menu");
        }
      </script>
  </body>
</html>