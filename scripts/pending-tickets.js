document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById("ticketModal");
    const closeBtn = document.querySelector(".modal .close");

    document.querySelectorAll('.view-btn').forEach(button => {
        button.addEventListener('click', function() {
            // Populate modal with ticket details
            document.getElementById('modal-inquiry-type').innerText = this.dataset.inquiryType;
            document.getElementById('modal-full-name').innerText = this.dataset.fullName;
            document.getElementById('modal-contact-no').innerText = this.dataset.contactNo;
            document.getElementById('modal-email').innerText = this.dataset.email;
            document.getElementById('modal-address').innerText = this.dataset.address;
            document.getElementById('modal-message').innerText = this.dataset.message;

            // Display the modal
            modal.style.display = "block";
        });
    });

    // Close the modal
    closeBtn.onclick = function() {
        modal.style.display = "none";
    }

    // Close the modal if clicked outside of content
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});