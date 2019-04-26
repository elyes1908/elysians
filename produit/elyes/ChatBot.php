
<?php
$access_token="EAAj0q9TZAZBTIBAH0MPQg52g8d0Un14KPog3W83m2kTsf6XosQGoro3syu8gj6WSJpsssVzuvw5lCTybI76DTVXuyhxY4syaNCHOuiWsN9pcULeCXCgbNmpR9kQBIdp3HBB3aRndcVP2AvkRhO81Na9EzlkDJKwqfcOLRZACwZDZD";
$verify_token="elyes-123";
$hub_verify_token=null;
if(isset($_REQUEST['hub_mode'])&&$_REQUEST['hub_mode']=='subscribe')
{
	$challenge=$_REQUEST['hub_challenge'];
	$hub_verify_token=$_REQUEST['hub_verify_token'];
	if($hub_verify_token==$verify_token)
		header('HTTP/1.1 200 OK');
		echo $challenge;
		die;
}
$input=json_decode(file_get_contents('php://input'),true);
$sender=$input['entry'][0]['messaging'][0]['sender']['id'];
$message=isset($input['entry'][0]['messaging'][0]['message']['text'])?$input['entry'][0]['messaging'][0]['message']['text']:'';
if($message)
{
	$words = explode(" ", $message);
	if($words[0]=="yheb"||$words[0]=="chkoun"||$words[0]=="l9tates?"||$words[0]=="hi")
	{
		$message_to_reply="amal amoula <3 ";
	}
	else if($string=" hi ena amal  " )
	{
		$message_to_reply="amal amoula ? li theb l Mille-feuille ?";
	}
	else
	{
		$message_to_reply="I am Sorry, I can't help You This Time.";
	}
	$url="https://graph.facebook.com/v2.6/me/messages?access_token=".$access_token;
	$jsonData='{
					"recipient":{
						"id":"'.$sender.'"
					},
					
					"message":{
					
						"text":"'.$message_to_reply.'"
					}
				 
				}';
	$ch=curl_init($url);
	curl_setopt($ch,CURLOPT_POST,1);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$jsonData);
	curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type:application/json'));
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
	curl_setopt($ch,CURLOPT_HTTP_VERSION,CURLOPT_HTTP_VERSION_NONE);
	$result=curl_exec($ch);
	curl_close($ch);
	
}	
?>