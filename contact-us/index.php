<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "../components/layout/html.php";
    ?>

    <title>Contact Us</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="../styles/contact-us.css">

</head>

<body>

    <?php
    include "../components/layout/header.php";
    ?>

    <main>
        <div class="form-container">
            <h1>Thank you for your interest in AcademiX.</h1>
            <h2>Send Us An Email.</h2>

            <form action="#" method="POST">
                <label for="inquiry-type">Type of Inquiry*</label>
                <select id="inquiry-type" name="inquiry-type" required>
                    <option value="">Select</option>
                    <option value="Course Enrollment & Access">Course Enrollment & Access</option>
                    <option value="Technical Support">Technical Support</option>
                    <option value="Account & Billing">Account & Billing</option>
                    <option value="Other">Other</option>
                </select>
                <br>

                <label for="full-name">Full Name*</label>
                <input type="text" id="full-name" name="full-name" required>
                <br>

                <label for="contact-no">Contact No*</label>
                <input type="text" id="contact-no" name="contact-no" required>
                <br>

                <label for="email">Email*</label>
                <input type="email" id="email" name="email" required>
                <br>

                <label for="address">Address*</label>
                <input type="text" id="address" name="address" required>
                <br>

                <label for="message">Your Message</label>
                <textarea id="message" name="message"></textarea>
                <br>

                <button type="submit">Submit</button>
            </form>
        </div>

    </main>



    <?php
    include "../components/layout/footer.php";
    ?>

</body>

</html>