// Handle form submission for Register
$('#signup form').on('submit', function(event) {
    event.preventDefault();
    $.ajax({
        url: './register.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            // Handle successful response
            alert('Registration successful!');
            // Optionally redirect or perform other actions
        },
        error: function(xhr, status, error) {
            // Handle error response
            alert('Registration failed: ' + error);
        }
    });
});document.addEventListener("DOMContentLoaded", function() {
    const signUpButton=document.getElementById('signUpButton');
    const signInButton=document.getElementById('signInButton');
    const signInForm=document.getElementById('signIn');
    const signUpForm=document.getElementById('signup');

    signUpButton.addEventListener('click',function(){
        signInForm.style.display="none";
        signUpForm.style.display="block";
    })
    signInButton.addEventListener('click', function(){
        signInForm.style.display="block";
        signUpForm.style.display="none";
    })

    // Display the Sign In form by default
    signInForm.style.display = "block";

    // Handle form submission for Register
    $('#signup form').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: './register.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                // Handle successful response
                alert('Registration successful!');
                // Optionally redirect or perform other actions
            },
            error: function(xhr, status, error) {
                // Handle error response
                alert('Registration failed: ' + error);
            }
        });
    });
});

