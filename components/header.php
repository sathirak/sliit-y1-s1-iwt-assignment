<?php

$auth_info = [
  "user" =>  ["redirect" => "../user", "button" => "Dashboard"],
  "admin" => ["redirect" => "/admin", "button" => "Administrator"],
  "support" => ["redirect" => "/support", "button" => "Support"],
  "reviewer" => ["redirect" => "../reviewer", "button" => "Reviewer"],
  "publisher" => ["redirect" => "../publisher", "button" => "Publisher"]
];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sign_out'])) {
  $_SESSION = [];
  session_destroy();
  header("Location: /");
  exit;
}

?>

<!-- Header -->
<header class="header">
  <a class="logo" href="/">Academix</a>
  <nav class="nav">
    <ul class="nav-links">
      <li><a href="/">Home</a></li>
      <li><a href="/about-us">About</a></li>
      <li><a href="/faq">FAQ</a></li>
      <li><a href="/contact-us">Contact</a></li>
    </ul>
  </nav>


  <!-- Sign in button -->
  <?php if (isset($_SESSION['user_id'])) { ?>
    <a class="special-button" href="<?php
                                    $role = $_SESSION['role'];
                                    echo $auth_info[$role]['redirect'];
                                    ?>">
      <?php echo $auth_info[$role]['button']; ?>
    </a>

    <!-- Sign Out Button -->
    <form method="post" style="display:inline;">
      <button type="submit" name="sign_out" class="special-button">Sign Out</button>
    </form>
  <?php } else { ?>
    <a class="special-button" href="/sign-up">Sign Up</a>
  <?php } ?>

</header>