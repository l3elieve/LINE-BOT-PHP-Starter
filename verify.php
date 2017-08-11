<?php

$access_token = 'tzVW45uFHGH8TXaJo2mQpceEQFi7RcEZC3edZYFbbS02sE9xWU5nyqP7AW6Yykwfrf1iBxGuPaydQSChnhIv03X1kv72OkyW1rwBShXxnvZtwlsnEWRq4fO8oFHDKvJM6Yg0CFc4Uu3HCSBfbz4A/gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;