document.getElementById("cd-1").addEventListener("click", function () {
    document.getElementById("my-courses").scrollIntoView({ behavior: "smooth" });
});

document.getElementById("cd-2").addEventListener("click", function () {
    document.getElementById("completed-courses").scrollIntoView({ behavior: "smooth" });
});

document.getElementById("cd-3").addEventListener("click", function () {
    document.getElementById("learning-course").scrollIntoView({ behavior: "smooth" });
});







// Handle click events for sidebar navigation (ul.sidebar-container)
document.querySelectorAll(".sidebar-container li").forEach(function (menuItem, index) {
    menuItem.addEventListener("click", function () {
        switch (index) {
            case 0:
                // Navigate to Dashboard
                window.location.href = "../user/index.php";
                break;
            case 1:
                // Navigate to My Courses
                document.getElementById("my-courses").scrollIntoView({ behavior: "smooth" });
                break;
            case 2:
                // Navigate to Explore Courses 
                window.location.href = "../privacy-policy/index.php";
                break;
            case 3:
                // Navigate to Contact Us
                window.location.href = "../contact-us/index.php";
                break;
            case 4:
                // Navigate to About Us
                window.location.href = "../about-us/index.php";
                break;
            case 5:
                // Navigate to My Account
                window.location.href = "my-account.php";
                break;
        }
    });
});

