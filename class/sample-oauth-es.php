<?php
require_once('lib/Phirehose.php');
require_once('lib/OauthPhirehose.php');
/**
 * Example of using Phirehose to display the 'sample' twitter stream.
 */
class SampleOauthConsumer extends OauthPhirehose
{
  /**
   * Enqueue each status
   *
   * @param string $status
   */
  public function enqueueStatus($status)
  {
    /*
     * In this simple example, we will just display to STDOUT rather than enqueue.
     * NOTE: You should NOT be processing tweets at this point in a real application, instead they should be being
     *       enqueued and processed asyncronously from the collection process.
     */
    $data = json_decode($status, true);
    if (is_array($data) && isset($data['user']['screen_name'])) {
      print $data['lang'] . ': ' . $data['user']['screen_name'] . ': ' . urldecode($data['text']) . "\n";
    }
  }
}

// The OAuth credentials you received when registering your app at Twitter
define("TWITTER_CONSUMER_KEY", "2423227034-cmcmJOoZTgxi0ml34lp3rT0vJPuVUEKoKGnerce");
define("TWITTER_CONSUMER_SECRET", "mvYw02XvMLZL4gmQUGsulQWLAL8yG9QTvptaVjK9tuIPO");


// The OAuth data for the twitter account
define("OAUTH_TOKEN", "ijQEOAqzwcG9KsIc4iJeOFMtt");
define("OAUTH_SECRET", "Dzah5SHQ1YvJOUrbuXjyosZKzIRWm96ccxpohM9Khi9NpaATrU");

// Start streaming
$sc = new SampleOauthConsumer(OAUTH_TOKEN, OAUTH_SECRET, Phirehose::METHOD_SAMPLE);
//$sc = new SampleOauthConsumer('username', 'password', Phirehose::METHOD_SAMPLE, Phirehose::FORMAT_JSON, 'en');
$sc->setLang('es');
if ($_GET['c'] == 's') {
  $sc->consume(false);
} else {
  $sc->desconectar();
}
print_r($sc->getLastErrorMsg());