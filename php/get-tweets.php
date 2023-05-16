<?php
session_start();
require_once('twitteroauth/twitteroauth.php'); //Path to twitteroauth library
 
$twitteruser = "danfisher_dev";
$notweets = 10;
$consumerkey = "zpnxGtJe8fG68nWCfx2FpA";
$consumersecret = "39xqyA4j7aAaFcQzWLvyj7Cc7LsStTgFcWNLKXgmw";
$accesstoken = "934210122-xOoJ8oucNVyxPX2tug0xBCy4qZfYVMUw6Q6pJm5I";
$accesstokensecret = "UjwPG8il8dmrMg8ujkWe4Ddgvg38Q2ItiHTiROnss";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
  
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);
?>