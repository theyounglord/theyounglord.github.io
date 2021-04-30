<?php
    session_start();
    include('./model.php');
    $model = new Model();
    
    // login
    if( isset($_POST['login']) ) {
        $model->connection();
    }

    // redirect user back to index page
    if ( isset($_REQUEST['oauth_verifier'], $_REQUEST['oauth_token']) ) {
        $model->callback();
    }

    // logout
    if( isset($_GET['logout']) && $_GET['logout']==true ) {
        $model->logout();
    }
?>
