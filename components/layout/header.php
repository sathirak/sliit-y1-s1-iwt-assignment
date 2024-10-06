<?php

$auth_info = [
  "user" => ["table" => "user", "id_field" => "user_id", "redirect" => "../user", "button" => "Dashboard"],
  "admin" => ["table" => "admin", "id_field" => "admin_id", "redirect" => "../admin", "button" => "Administrator"],
  "support" => ["table" => "contact_support_agent", "id_field" => "agent_id", "redirect" => "../support", "button" => "Support"],
  "reviewer" => ["table" => "course_reviewer", "id_field" => "reviewer_id", "redirect" => "../reviewer", "button" => "Reviewer"],
  "publisher" => ["table" => "course_publisher", "id_field" => "publisher_id", "redirect" => "../publisher", "button" => "Publisher"]
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
  <div class="logo">Academix</div>
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