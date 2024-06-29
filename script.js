$(document).ready(function() {
    $('#contactForm').submit(function(event) {
        event.preventDefault(); // Prevent the form from submitting the traditional way

        $.ajax({
            url: 'submit-form.php',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                $('#responseMessage').text(response.message);
                $('#responseModal').modal('show');
            },
            error: function(xhr, status, error) {
                $('#responseMessage').text('An error occurred: ' + error);
                $('#responseModal').modal('show');
            }
        });
    });
});