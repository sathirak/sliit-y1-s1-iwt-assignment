<?php
session_start();

include "../../utils/auth.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sign_out'])) {
  $_SESSION = [];

  session_destroy();

  header("Location: /");
  exit;
}

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

  <?php if (isset($_SESSION['user_id'])) { ?>
    <a class="special-button" href="<?php
                                    $role = $_SESSION['role'];
                                    echo $auth_info[$role]['redirect'];
                                    ?>">
      <?php echo $auth_info[$role]['button']; ?>
    </a>
    <form method="post" style="display:inline;">
      <button type="submit" name="sign_out" class="special-button">Sign Out</button>
    </form>
  <?php } else { ?>
    <a class="special-button" href="/sign-up">Sign Up</a>
  <?php } ?>

</header>