// new.php
$(document).ready(function() {
    $('#Username').on('keyup', function() {
      var Username = $(this).val();
      
      // AJAX call to validate email
      $.get('/Account/validateEmailAction?Username=' + Username, function(data) {
        if (data) {
          $('#Username').removeClass('is-invalid');
        } else {
          $('#Username').addClass('is-invalid');
        }
      });
    });
    
    $('form').submit(function(event) {
      var Name = $('#Name').val();
      var Password = $('#Password').val();
      var Confirm_Password = $('#Confirm_Password').val();
      var Username = $('#Username').val();
      
      // Validate name input
      if (!/^[A-Za-z]+$/.test(Name)) {
        event.preventDefault();
        alert('Name must contain only letters');
        return;
      }
      
      // Validate password input
      if (!/(?=.*[A-Za-z])(?=.*\d).{6,}/.test(Password)) {
        event.preventDefault();
        alert('Password must be at least 6 characters long and contain at least one letter and one number');
        return;
      }
      
      // Validate repeat password input
      if (Password !== Confirm_Password) {
        event.preventDefault();
        alert('Passwords do not match');
        return;
      }
      
      // Check if email is valid
      if ($('#Username').hasClass('is-invalid')) {
        event.preventDefault();
        alert('Email is already taken');
        return;
      }
    });
  });
  