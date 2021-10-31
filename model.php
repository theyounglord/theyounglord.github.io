<?php
    require "./lib/twitteroauth/autoload.php";
    require "./lib/tcpdf/tcpdf.php";
    use Abraham\TwitterOAuth\TwitterOAuth;
    include('config.php');
    
    class Model {
        
        // connect using twitter
        public function connection() {
            if (!isset($_SESSION['access_token'])) {
                $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
                $request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));
                $_SESSION['oauth_token'] = $request_token['oauth_token'];
                $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
                $url = $connection->url('oauth/authorize', array('oauth_token' => $_SESSION['oauth_token']));
                header('location:' . $url);
            } 
            else {
                header('Location: ./#twitter-data');
            }
        }
    
        // redirect user back to index page
        public function callback(){
            $request_token = [];
            $request_token['oauth_token'] = $_REQUEST['oauth_token'];
            $request_token['oauth_token_secret'] = $_SESSION['oauth_token_secret'];
            $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $request_token['oauth_token'], $request_token['oauth_token_secret']);
            $access_token = $connection->oauth("oauth/access_token", array("oauth_verifier" => $_REQUEST['oauth_verifier']));
            $_SESSION['access_token'] = $access_token;
            header('Location: ./#twitter-data');
        }

        // To get connection from access_token
        public function getConnection() {
            $access_token = $_SESSION['access_token'];
            $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
            return $connection;
        }

        // get current logged in user
        public function getUser($connection) {
            $user = $connection->get("account/verify_credentials");
            return $user;
        }

        
        // logout
        public function logout() {
            session_unset();
            session_destroy();
            header('Location: ./#twitter');
            exit();
        }
    }
?>
