function validateForm() {
    var valid = true;
    var inquiryType = document.getElementById("inquiry-type").value;
    var fullName = document.getElementById("full-name").value;
    var contactNo = document.getElementById("contact-no").value;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;

    // Clear previous error messages
    document.querySelectorAll('.error').forEach(function(el) {
        el.innerHTML = '';
    });

    if (inquiryType === "") {
        document.querySelector(".error[for='inquiry-type']").innerHTML = "Type of inquiry is required.";
        valid = false;
    }

    if (fullName === "") {
        document.querySelector(".error[for='full-name']").innerHTML = "Full name is required.";
        valid = false;
    }

    if (contactNo === "") {
        document.querySelector(".error[for='contact-no']").innerHTML = "Contact number is required.";
        valid = false;
    } else if (!/^[0-9]+$/.test(contactNo)) {
        document.querySelector(".error[for='contact-no']").innerHTML = "Contact number must be numeric.";
        valid = false;
    }

    if (email === "") {
        document.querySelector(".error[for='email']").innerHTML = "Email is required.";
        valid = false;
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        document.querySelector(".error[for='email']").innerHTML = "Invalid email format.";
        valid = false;
    }

    if (address === "") {
        document.querySelector(".error[for='address']").innerHTML = "Address is required.";
        valid = false;
    }

    return valid;
}

function showToast() {
    var toast = document.getElementById("toast");
    toast.className = "toast show";
    setTimeout(function(){ toast.className = toast.className.replace("show", ""); }, 3000);
}

// Check if PHP set the show_toast flag
if (typeof showToastFlag !== 'undefined' && showToastFlag) {
    window.onload = showToast;
}