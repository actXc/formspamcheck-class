<?php

$honeypotApiKey = 'My API key for Honeypot Project';
$akismetApiKey  = 'My API key for Akismet';
$akismetBlogURL = 'http://www.example.com';
$mollomPublicKey = 'mollomPubKey';
$mollomPrivateKey = 'mollomPrivKey';

include 'formspamcheck.class.php';

$fsc = new FormSpamCheck($honeypotApiKey,$akismetApiKey,$akismetBlogURL,$mollomPrivateKey,$mollomPublicKey);
if ($fsc->isSpam(
  array(
    'username' => 'someusername',
    'email' => 'example@example.com'
  )
)) {
  print "This is spam";
} else {
  print "This is ham";
}

