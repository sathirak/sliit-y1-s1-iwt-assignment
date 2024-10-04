<?php
session_start();
include "../../utils/auth.php";



?>

<header class="header">
  <div class="logo">Academix</div>
  <nav class="nav">
    <ul class="nav-links">
      <li><a href="/">Home</a></li>
      <li><a href="/about-us">About</a></li>
      <li><a href="/faq">FAQ</a></li>
      <li><a href="/contact-us">Contact</a></li>

    </ul>
  </nav>

  <a class="special-button" href="<?php
                                  if (isset($_SESSION['user_id'])) {
                                    $role = $_SESSION['user_role'];
                                    echo $auth_info[$role]['redirect'];
                                  } else {
                                    echo "/sign-up";
                                  }
                                  ?>">
    <?php
    if (isset($_SESSION['user_id'])) {
      $role = $_SESSION['user_role'];
      echo $auth_info[$role]['button'];
    } else {
      echo "Sign Up";
    }
    ?>
  </a>
  </a>

</header>