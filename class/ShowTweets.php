<?php
require_once('TwitterAPIExchange.php');

$settings = array(
    'oauth_access_token' => "2423227034-cmcmJOoZTgxi0ml34lp3rT0vJPuVUEKoKGnerce",
    'oauth_access_token_secret' => "mvYw02XvMLZL4gmQUGsulQWLAL8yG9QTvptaVjK9tuIPO",
    'consumer_key' => "ijQEOAqzwcG9KsIc4iJeOFMtt",
    'consumer_secret' => "Dzah5SHQ1YvJOUrbuXjyosZKzIRWm96ccxpohM9Khi9NpaATrU"
);

$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=blue360peru&count=5';
$method = 'GET';
$Twitter = new TwitterAPIExchange($settings);

echo $Twitter->setGetfield($getfield)
				->buildOauth($url, $method)
				->performRequest();