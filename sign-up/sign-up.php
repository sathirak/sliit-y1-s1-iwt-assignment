<?
session_start()
    ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?
    include "../components/layout/html.php";
    ?>

    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="style.css">

    <title>Sign Up</title>
</head>

<body>
    <div class="signup-container">
        <div class="imag">
            <div class="start">
                <h1>Start Learn With Us</h1>
            </div>
            <div class="image_1">
                <img src="../assets/images/sign-up.png" alt="start image">
            </div>
        </div>

        <div class="content">
            <div class="up">
                <p>Already a member?
                    <button class="button" id="button">Sign In</button>
                    <script type="text/javascript">
                        document.getElementById("button").onclick = function () {
                            location.href = "../log-in/log-in.php";
                        };
                    </script>

                    <!-- <input type="button" class="button" onclick="alert('hi')" value="Sign In"> -->
                    <!-- <a href="../log-in.php"></a> -->
                </p>
            </div>

            <div class="form-content">
                <div class="head">
                    <div class="logo">
                        <img src="../assets/images/logo.png" alt="logo">
                    </div>
                    <div class="head-2">
                        <h2>Sign Up to AcademiX</h2>
                    </div>
                </div>

                <div class="form-signup">
                    <form action="" class="form" method="POST" autocomplete="on">
                        <div class="names">
                            <div class="fname">
                                <label for="firstname">First Name</label><br>
                                <input type="text" id="f_name" name="f_name" placeholder="Enter first name" required>
                            </div>
                            <div class="lname">
                                <label for="lastname">Last Name</label><br>
                                <input type="text" id="l_name" name="l_name" placeholder="Enter last name" required>
                            </div>
                        </div>

                        <div class="para">
                            <label for="email">Email Address</label><br>
                            <input type="email" id="email" name="email" placeholder="Enter email address" required>
                        </div>

                        <div class="para-1">
                            <label for="contact">Contact Number</label><br>
                            <input type="text" id="contact" name="contact" placeholder="Enter contact number" required>
                        </div>
                        <br>

                        <div class="dropdown">
                            <button id="dropbtn" class="dropbtn">Teacher At</button>
                            <div class="dropdown-content">
                                <a href="#">Private School</a>
                                <a href="#">Government School</a>
                                <a href="#">Tution Sector</a>
                            </div>
                        </div>

                        <div class="pw">
                            <label for="password">Password</label><br>
                            <input type="password" id="password" name="password" placeholder="Enter 8 characters "
                                required>
                        </div>

                        <div class="conf-pw">
                            <label for="conf-pw">Confirm Password</label><br>
                            <input type="password" id="password" name="password" placeholder="Confirm entered password "
                                required>
                        </div>
                        <br>

                        <div class="check">

                            <label for="check">
                                <input type="checkbox" id="check" name="check" required> Creating an account means you
                                are aggree with our Terms of Service, Privacy Policy, and Our Default Notification
                                Settings.</label>
                        </div>
                        <br>

                        <div class="signup">
                            <input type="submit" class="button-signup" onclick="alert('Hii')" value="Sign Up">
                        </div>

                    </form>
                </div>
            </div>
        </div>


</body>

</html>