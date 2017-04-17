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

    //when the page loads hie every alert
    $('.alert').hide();

    //when the user clicks the sign up button send call the create account method
    $('#signup_btn').click(function() {
        createAccount();
    });

    //if the user clicks on a close button from the alert boxes then close the alert
    $('.close').click(function() {
        $(this).parent().hide();
    });
});


function createAccount() {
    //check to see if the two passwords match
    var pas = $('#signup_password').val();
    var re = $('#signup_rePassword').val();
    if (pas != re) {
        $('#signup_alertPassword').show();
    }
}