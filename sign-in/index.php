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
    <link rel="stylesheet" href="../styles/sign-in.css">

    <title>Sign In</title>
</head>

<body>
    <div class="signup-container">
        <div class="imag">
            <div class="start">
                <h1>Welcome Back!</h1>
            </div>
            <div class="image_1">
                <img src="../assets/images/login-2.png" alt="login">
            </div>
        </div>

        <div class="content">
            <div class="up">
                <p>Don't have an account?

                    <button class="button" id="button">Sign Up</button>
                    <script type="text/javascript">
                        document.getElementById("button").onclick = function() {
                            location.href = "../sign-up";
                        };
                    </script>
                </p>
            </div>

            <div class="form-content">
                <div class="head">
                    <div class="logo">
                        <img src="../assets/images/logo.png" alt="logo">
                    </div>
                    <div class="head-2">
                        <h2>Sign In to AcademiX</h2>
                    </div>
                </div>

                <div class="form-signup">
                    <form action="" class="form" method="POST" autocomplete="on">

                        <div class="para">
                            <label for="email">Email Address</label><br>
                            <input type="email" id="email" name="email" placeholder="Enter email address" required>
                        </div>

                        <div class="pw">
                            <label for="password">Password</label><br>
                            <input type="password" id="password" name="password" placeholder="Enter 8 characters "
                                required>
                        </div>
                        <br>

                        <div class="forget">
                            <div class="check">
                                <label for="check">
                                    <input type="checkbox" id="check" name="check"> Remember Me</label>
                            </div>
                            <div class="f-pw">
                                <a href="#">Forgot password?</a>
                            </div>
                        </div>

                        <br>
                        <div class="signup">
                            <input type="submit" class="button-signin" onclick="alert('Hii')" value="Sign In">
                        </div>

                    </form>
                </div>
            </div>
        </div>


</body>

</html>