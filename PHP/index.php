<!DOCTYPE html>
<html lang="en">

<head>
    <title>PDF Administrator</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Link to the css file-->
    <link href="../CSS/index.css" rel="stylesheet">
    <!--Link to bootstrap css file-->
    <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="jumbotron text-center">
        <h1>Hello</h1>
        <p>
            This is the pdf administrator.
        </p>
    </div>
    <div class="container">
        <div id="login_div">
            <h1>Log In</h1>
            <form id="loginForm">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="login_username" id="login_username" class="form-control" placeholder="Username" require>
                    <div class="alert alert-danger alert-dismissable" id="login_alertUsername">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error!</strong> Username not found.
                    </div>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="login_password" id="login_password" class="form-control" placeholder="Password" require>
                    <div class="alert alert-danger alert-dismissable" id="login_alertPassword">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error!</strong> Incorrect password
                    </div>
                </div>
                <div class="form-group text-center">
                    <button type="button" class="btn btn-primary btn-lg" id="login_btn">Log In</button>
                </div>
            </form>
            <div class="text-center">
                <a id="login_createAccount">Create account</a>
            </div>
        </div>
        <div id="signup_div">
            <h1>Sign Up</h1>
            <div class="alert alert-success alert-dismissable" id="signup_alertSignUpSuccess">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> Your account has been created
            </div>
            <form id="signup_form">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="signup_username" id="signup_username" class="form-control" require>
                    <div class="alert alert-danger alert-dismissable" id="signup_alertUsername">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error!</strong> The username is already in use..
                    </div>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="signup_password" id="signup_password" class="form-control" require>
                </div>
                <div class="form-group">
                    <label>Re-Type Password</label>
                    <input type="password" name="signup_rePassword" id="signup_rePassword" class="form-control" require>
                    <div class="alert alert-warning alert-dismissable" id="signup_alertPassword">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Warning!</strong> The two passwords don't match.'
                    </div>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="signup_email" id="signup_email" class="form-control" require>
                </div>
                <div class="form-group text-center">
                    <button type="button" id="signup_btn" class="btn btn-success btn-lg">Sign Up</button>
                </div>
                <div class="text-center">
                    <a id="signup_LogIn">Already have an account</a>
                </div>
            </form>
        </div>
    </div>
</body>
<!--Link to jQuery-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--Link to the javascript file-->
<script src="../JS/index.js"></script>
</html>