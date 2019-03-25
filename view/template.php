<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP MY SQL MVC</title>
        <script src="view/jquery-1.9.1.js"></script>
        <script src="view/list"></script>
        <script src="view/bootstrap-3.3.7/js/bootstrap.min.js"></script>
        <link href="view/bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="view/style.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body data-gr-c-s-loaded="true">
        <div class="container">
            <legend>
                <h3 class="pull">Employee Manager</h3>
                    <a href="index.php?action=registerForm"><p>Register</p></a>
                <form action="">
    <!-- <input type="submit" value="logout" name="" class="btn btn-"> -->
    <button type="submit" value="logout" name="" class="float-right btn btn-primary">Logout</button>
</form>
            </legend>
            
            <?php
                include 'view/'.$data['page'].'.php';
            ?>
        </div>
    </body>
</html>