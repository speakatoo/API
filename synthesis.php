<?php

$language = $_POST['language'];
$engine = $_POST['engine'];
$resourceIds = $_POST['resourceIds'];
$title = $_POST['title'];
$ttsText = $_POST['ttsText'];

$ch = curl_init('https://www.speakatoo.com/api/v1/voiceapi'); //API Call

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, false); 

curl_setopt($ch, CURLOPT_POST, TRUE);

$jsonDataEncoded = '{
    "username":"YOUR USERNAME",
    "password":"YOUR PASSWORD",
    "tts_title":"'.$title.'",
    "ssml_mode":"0",
    "tts_engine":"'.$engine.'",
    "tts_format":"mp3",
    "tts_text":"'.$ttsText.'",
    "tts_resource_ids":"'.$resourceIds.'",
    "synthesize_type":"save"
}';

curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

curl_setopt($ch, CURLOPT_COOKIEFILE, ""); 
curl_setopt($ch, CURLOPT_COOKIEJAR,  ""); 

curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
$header = array(
    'X-API-KEY: YOUR_API_KEY',
    'Content-Type: application/json'
);

curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

$result = curl_exec($ch);

curl_close($ch);
echo $result;

?>