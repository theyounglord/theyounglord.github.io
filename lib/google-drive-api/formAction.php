<?php
require_once 'google-api-php-client/src/Google/Client.php';
require_once 'google-api-php-client/src/Google/Service/Oauth2.php';
require_once 'google-api-php-client/src/Google/Service/Drive.php';
require_once 'google-api-php-client/autoload.php';

session_start();

header('Content-Type: text/html; charset=utf-8');

// Get your app info from JSON downloaded from google dev console
$json = json_decode(file_get_contents("client_secret.json"), true);
$CLIENT_ID = $json['web']['client_id'];
$CLIENT_SECRET = $json['web']['client_secret'];
$REDIRECT_URI = $json['web']['redirect_uris'][0];

// Create a new Client
$client = new Google_Client();
$client->setClientId($CLIENT_ID);
$client->setClientSecret($CLIENT_SECRET);
$client->setRedirectUri($REDIRECT_URI);
$client->addScope("https://www.googleapis.com/auth/drive");

// Refresh the user token and grand the privilege
$service = new Google_Service_Drive($client);

// Set the file metadata for drive
$mimeType = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';

$title = "mytweets";
$description = "Uploaded from your very first google drive application!";
if (isset($_GET['code'])) {
    $client->authenticate($_GET['code']);
    $_SESSION['upload_token'] = $client->getAccessToken();
    $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
    header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}
if (isset($_SESSION['upload_token']) && $_SESSION['upload_token']) {
    $client->setAccessToken($_SESSION['upload_token']);
    if ($client->isAccessTokenExpired()) {
        unset($_SESSION['upload_token']);
    }
} else {
    $authUrl = $client->createAuthUrl();
}

date_default_timezone_set('Asia/Calcutta');
$mimeType = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';
$title = "mytweets";
$driveInfo = insertFile($service, $title, $description, $mimeType);
function insertFile($service, $title, $description, $mimeType)
{
    $file = new Google_Service_Drive_DriveFile();
    // Set the metadata
    $file->setTitle($title);
    $file->setDescription($description);
    $file->setMimeType($mimeType);
    try {
        // Get the contents of the file uploaded
        $data = fopen('my_tweets.xlsx', 'w');

        $tweets = $_SESSION['downloadFormat'];
        $header = array("text");
        fputcsv($data,$header,"\t");
        foreach ($tweets as $tweet) {
            $d = array($tweet);
            fputcsv($data, $d,"\t");
        }
        
        fclose($data);
        $data = file_get_contents('my_tweets.xlsx');
        //print_r($data);
        $createdFile = $service->files->insert($file, array(
            'data' => $data,
            'mimeType' => $mimeType,
            'uploadType' => 'multipart',
        ));
        unlink('my_tweets.xlsx');
        // Return a bunch of data including the link to the file we just uploaded
        return $createdFile;
    } catch (Exception $e) {
        // print "An error occurred: " . $e->getMessage();
    }
}
$drive_link=$driveInfo["alternateLink"];
header('location: ../../#twitter-data?google-sheet-save=true');

?>