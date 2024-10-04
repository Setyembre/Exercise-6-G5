document.addEventListener('DOMContentLoaded', function() {
    // Get all Facebook buttons
    var fbButtons = document.querySelectorAll('.fb-button');
    
    // Add click event listener to each button
    fbButtons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            // No need to prevent default behavior; href will handle navigation
            // Optional: You could log the URL to make sure it’s correct
            console.log('Navigating to: ' + this.getAttribute('href'));
        });
    });
});

// Function to display more details about the team member
function showDetails(name, studentId, age, address, email) {
    alert(`Details:\nName: ${name}\nStudent ID: ${studentId}\nAge: ${age}\nAddress: ${address}\nEmail: ${email}`);
}
