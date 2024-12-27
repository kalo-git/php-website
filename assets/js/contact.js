document.querySelector('form').onsubmit = function() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var message = document.getElementById('message').value;

    if (!name || !email || !message) {
        alert("All fields are required!");
        return false; // Prevent form submission
    }
    if (!/\S+@\S+\.\S+/.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }
    return true; // Allow form submission
};