$(document).ready(function() {
    //hide the signup form
    $('#signup_div').hide();

    //if the user tries to create a new account display the signup form and hide the login form
    $('#login_createAccount').click(function() {
        $('#login_div').hide(650);
        $('#signup_div').show(650);
    });

    //if the user click on the already have an account button hide the sign up form and display the log in one
    $('#signup_LogIn').click(function() {
        $('#signup_div').hide(650);
        $('#login_div').show(650);
    });
});