<?php
session_start();

include '../utils/db.php';

$errors = array(
    'inquiry_type' => '',
    'full_name' => '',
    'contact_no' => '',
    'email' => '',
    'address' => ''
);
$inquiry_type = $full_name = $contact_no = $email = $address = $message = '';
$show_toast = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $inquiry_type = $_POST['inquiry-type'];
    $full_name = $_POST['full-name'];
    $contact_no = $_POST['contact-no'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $message = $_POST['message'];

    // Server-side validation
    if (empty($inquiry_type)) {
        $errors['inquiry_type'] = "Type of inquiry is required.";
    }

    if (empty($full_name)) {
        $errors['full_name'] = "Full name is required.";
    }

    if (empty($contact_no)) {
        $errors['contact_no'] = "Contact number is required.";
    } elseif (!preg_match('/^[0-9]+$/', $contact_no)) {
        $errors['contact_no'] = "Contact number must be numeric.";
    }

    if (empty($email)) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    if (empty($address)) {
        $errors['address'] = "Address is required.";
    }

    // If no errors, insert into database
    if (!array_filter($errors)) {

        $sql = "INSERT INTO inquiries (inquiry_type, full_name, contact_no, email, address, message)
                VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $inquiry_type, $full_name, $contact_no, $email, $address, $message);

        if ($stmt->execute()) {           
            $show_toast = true;
            $inquiry_type = $full_name = $contact_no = $email = $address = $message = '';
        } else {
            echo "<p>There was an error: " . $stmt->error . "</p>";
        }
        // Close the statement
        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact-Us</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="../styles/contact-us.css">
</head>

<?php
include "../components/layout/header.php";
?>

<body>
    <main>
        <div class="form-container">
            <h1>Thank you for your interest in AcademiX.</h1>
            <h2>Send Us An Email.</h2>

            <!-- Toast Notification -->
            <div id="toast" class="toast">Thank you! Your inquiry has been submitted.</div>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validateForm();">
                <label for="inquiry-type">Type of Inquiry*</label>
                <select id="inquiry-type" name="inquiry-type" required>
                    <option value="">Select</option>
                    <option value="Course Enrollment & Access" <?php if ($inquiry_type == "Course Enrollment & Access") echo "selected"; ?>>Course Enrollment & Access</option>
                    <option value="Technical Support" <?php if ($inquiry_type == "Technical Support") echo "selected"; ?>>Technical Support</option>
                    <option value="Account & Billing" <?php if ($inquiry_type == "Account & Billing") echo "selected"; ?>>Account & Billing</option>
                    <option value="Other" <?php if ($inquiry_type == "Other") echo "selected"; ?>>Other</option>
                </select>
                <br>
                <div class="error"><?php echo $errors['inquiry_type']; ?></div>

                <label for="full-name">Full Name*</label>
                <input type="text" id="full-name" name="full-name" value="<?= $full_name; ?>" required>
                <br>
                <div class="error"><?php echo $errors['full_name']; ?></div>

                <label for="contact-no">Contact No*</label>
                <input type="number" id="contact-no" name="contact-no" value="<?= $contact_no; ?>" required>
                <br>
                <div class="error"><?php echo $errors['contact_no']; ?></div>

                <label for="email">Email*</label>
                <input type="email" id="email" name="email" value="<?= $email; ?>" required>
                <br>
                <div class="error"><?php echo $errors['email']; ?></div>

                <label for="address">Address*</label>
                <input type="text" id="address" name="address" value="<?= $address; ?>" required>
                <br>
                <div class="error"><?php echo $errors['address']; ?></div>

                <label for="message">Your Message</label>
                <textarea id="message" name="message"><?= $message; ?></textarea>
                <br>

                <button type="submit">Submit</button>
            </form>
        </div>
    </main>

    <!-- Link to the external JavaScript file -->
    <script src="../scripts/contact-us-form-validation.js"></script>
</body>
</html>
