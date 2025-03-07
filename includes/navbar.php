<!-- Nav Bar -->
<nav class="navbar navbar-expand-lg smart-scroll navbar-dark bg-grey fixed-top my-md-3 mx-md-5 rounded shadow">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="images/logo.png" alt="" />
    </a>
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
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0" id="spy-target">
        <li class="nav-item">
          <a class="nav-link <?php if($active == "menu")echo "active"?>" href="index.php#menu">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($active == "reservation")echo "active"?>" href="index.php#reservation">Reservation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($active == "order")echo "active"?>" href="index.php#order">Online Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($active == "contact")echo "active"?>" href="index.php#contact" role="button">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if($active == "about")echo "active"?>" href="index.php#about" role="button">About Us</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        
        <?php 
        if(isset($_SESSION['id'])){ // if user is logged in
        ?>

<!-- DROPDOWN -->

        <!-- <li class="nav-item mt-1 me-3" title="Cart">          
            <a href="cart.php"> <i class="fa-solid fa-bag-shopping"></i> </a>         
        </li>

        <li class="nav-item">          
            <div class="btn-group">
              <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user px-1"></i>
              </button>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                <?php if($_SESSION['is_admin'] == 'yes') echo '<li><a class="dropdown-item" href="/dinasadmin/dashboard.php">Dashboard</a></li>' ?>
                <li><a class="dropdown-item" href="includes/logout.php">Logout</a></li>
              </ul>
            </div>
        </li> -->

<!-- ICONS -->
        
        <!-- <li class="nav-item" title="Cart">          
            <a href="cart.php"> <i class="fa-solid fa-bag-shopping px-1"></i> </a>         
        </li> -->

        <li class="nav-item">          
          <a href="profile.php"> <i class="fa-solid fa-user px-1"></i> </a>
        </li>

        <?php if($_SESSION['is_admin'] == 'yes') echo '<li class="nav-item" title="Dashboard"><a href="/dinasadmin/dashboard.php"><i class="fa-solid fa-square-poll-vertical px-1"></i></a></li>' ?>

        <li class="nav-item" title="Log Out">
          <a href="includes/logout.php"><i class="fa-solid fa-right-from-bracket px-1"></i></a>
        </li>


        <?php
        }else{  // else
        ?>

          <li class="nav-item">
            <a class="nav-link" href="login.php">Sign In</a>
          </li>
          <li>
            <button class="btn btn-primary text-dark nowrap">
              <a class="text-dark" href="register.php">Join Us</a>
            </button>
          </li>

        <?php
        } // end else
        ?>

      </ul>
    </div>
  </div>
</nav>

<script>
// detect scroll top or down
if ($(".smart-scroll").length > 0) {
  // check if element exists
  var last_scroll_top = 0;
  $(window).on("scroll", function () {
    scroll_top = $(this).scrollTop();
    if (scroll_top < last_scroll_top) {
      $(".smart-scroll").removeClass("scrolled-down").addClass("scrolled-up");
    } else {
      $(".smart-scroll").removeClass("scrolled-up").addClass("scrolled-down");
    }
    last_scroll_top = scroll_top;
  });
}
</script>