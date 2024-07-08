// profile.js

$(document).ready(function() {
    $('#loadProfileBtn').click(function() {
        // Perform AJAX request
        $.ajax({
            url: 'profile.php', // Your server endpoint to fetch data
            type: 'GET', // HTTP method (GET or POST)
            dataType: 'json', // Expected data type from server
            success: function(response) {
                // Handle successful response
                $('#profileInfo').html('<h4>Profile Information:</h4>' +
                                      '<p>Name: ' + response.name + '</p>' +
                                      '<p>Email: ' + response.email + '</p>');
            },
            error: function(xhr, status, error) {
                // Handle errors
                console.error('AJAX Error: ' + status + ' - ' + error);
            }
        });
    });
});
