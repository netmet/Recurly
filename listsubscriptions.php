<!DOCTYPE html><html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta Content-Type: application/xml; charset=utf-8>
	    <title>Subscription State And Details </title>
</head>
<body>
<?php
require_once('lib/recurly.php');
// Configure the client with your subdomain and Private API Key
Recurly_Client::$subdomain = '<subdomain>';
Recurly_Client::$apiKey = '<privateAPIKey>';

$subscriptions = Recurly_SubscriptionList::get();
foreach ($subscriptions as $subscription) {
  
  //Set the subscription state parameter required (i.e. active, canceled, expired, future, in_trial, live, past_due), enter 'all' to show all subscription types
  $substate = 'all';
  
  //State of current subscription in the query
  $substatevalue = $subscription->state;
  
  //Check if current subscription state is equal to $substate (i.e. all, expiry, etc). If true, print it out.
  if (strpos($substate,$substatevalue) !== false || strpos($substate,'all') !== false ) {
  	
	//Print the state of the subscription
	print "Subscription State: {$substatevalue} | \t\t\t\t";
	
	//the UUID of the subscription, used in URL to link to subscription details
	$subuuid = $subscription->uuid; 
	//Print UUID
	print "Subscription UUID: {$subscription->uuid} | \t\t\t\t";
	
	//change ":subdomain" in URL to your domain
	//print link to subscription details URL, link opens in separate window or tab
	echo "Subscription Link: <a href='https://:subdomain.recurly.com/subscriptions/" . $subuuid . "'target=_blank>Click Here</a>";
	echo "<br>";
} 
  }

?>

</body>
</html>