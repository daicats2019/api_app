<?php
header("Content-Type: application/json");
$logFile = 'logs.txt';
$time = gmdate('Y-m-d H:i:s', time() + 7 * 3600);
$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$dataGet = $_SERVER['QUERY_STRING'];
$dataPost = file_get_contents('php://input');
$logMessage = $time . ' | ' . $ip . ' | ' . $userAgent . ' | ' . $dataGet . ' | ' . $dataPost;
file_put_contents($logFile, $logMessage . PHP_EOL, FILE_APPEND);
?>
{
"code": 200,
"ver": 1,
"conf": {
"lockApp": false,
"lockFree": false,
"review": true
},
"data": [
{
"id": 1,
"ip": "103.164.81.229",
"country": "Hong Kong",
"name": "Hong Kong",
"countryCode": "HK",
"region": "Central and Western District",
"city": "Hong Kong",
"timezone": "Asia/Hong_Kong",
"lat": "22.2842",
"lon": "114.1759",
"zip": "96521",
"ovpn": "https://jump247vpn.com/api/listvpn/ovpn/103.164.81.229-client.ovpn",
"flag": "https://jump247vpn.com/api/listvpn/flags/HK.png",
"vip": false
},
{
"id": 2,
"ip": "103.174.67.157",
"country": "Indonesia",
"name": "Indonesia",
"countryCode": "ID",
"region": "East Java",
"city": "Embongkaliasin",
"timezone": "Asia/Jakarta",
"lat": "-7.27319",
"lon": "112.743",
"zip": "",
"ovpn": "https://jump247vpn.com/api/listvpn/ovpn/103.174.67.157-client.ovpn",
"flag": "https://jump247vpn.com/api/listvpn/flags/ID.png",
"vip": false
},
{
"id": 3,
"ip": "103.39.124.192",
"country": "Vietnam",
"name": "Vietnam",
"countryCode": "VN",
"region": "Hanoi",
"city": "Tay Ho",
"timezone": "Asia/Bangkok",
"lat": "21.0647",
"lon": "105.801",
"zip": "",
"ovpn": "https://jump247vpn.com/api/listvpn/ovpn/103.39.124.192-client.ovpn",
"flag": "https://jump247vpn.com/api/listvpn/flags/VN.png",
"vip": false
},
{
"id": 4,
"ip": "139.99.182.105",
"country": "Australia",
"name": "Australia",
"countryCode": "AU",
"region": "New South Wales",
"city": "Sydney",
"timezone": "Australia/Sydney",
"lat": "-33.8715",
"lon": "151.2006",
"zip": "2000",
"ovpn": "https://jump247vpn.com/api/listvpn/ovpn/139.99.182.105-client.ovpn",
"flag": "https://jump247vpn.com/api/listvpn/flags/AU.png",
"vip": false
},
{
"id": 5,
"ip": "141.94.149.110",
"country": "Portugal",
"name": "Portugal",
"countryCode": "PT",
"region": "Lisbon",
"city": "Lisbon",
"timezone": "Europe/Lisbon",
"lat": "38.731",
"lon": "-9.1373",
"zip": "1000-002",
"ovpn": "https://jump247vpn.com/api/listvpn/ovpn/141.94.149.110-client.ovpn",
"flag": "https://jump247vpn.com/api/listvpn/flags/PT.png",
"vip": false
},
{
"id": 6,
"ip": "141.94.179.105",
"country": "France",
"name": "France",
"countryCode": "FR",
"region": "Grand Est",
"city": "Strasbourg",
"timezone": "Europe/Paris",
"lat": "48.5734",
"lon": "7.75211",
"zip": "67000",
"ovpn": "https://jump247vpn.com/api/listvpn/ovpn/141.94.179.105-client.ovpn",
"flag": "https://jump247vpn.com/api/listvpn/flags/FR.png",
"vip": false
},
{
"id": 7,
"ip": "141.95.12.21",
"country": "Germany",
"name": "Germany",
"countryCode": "DE",
"region": "Hesse",
"city": "Limburg an der Lahn",
"timezone": "Europe/Berlin",
"lat": "50.3986",
"lon": "8.07958",
"zip": "65550",
"ovpn": "https://jump247vpn.com/api/listvpn/ovpn/141.95.12.21-client.ovpn",
"flag": "https://jump247vpn.com/api/listvpn/flags/DE.png",
"vip": false
},
{
"id": 8,
"ip": "165.154.227.34",
"country": "Taiwan",
"name": "Taiwan",
"countryCode": "TW",
"region": "Taipei City",
"city": "Taipei",
"timezone": "Asia/Taipei",
"lat": "25.0504",
"lon": "121.5324",
"zip": "",
"ovpn": "https://jump247vpn.com/api/listvpn/ovpn/165.154.227.34-client.ovpn",
"flag": "https://jump247vpn.com/api/listvpn/flags/TW.png",
"vip": false
},
{
"id": 9,
"ip": "165.154.232.74",
"country": "Thailand",
"name": "Thailand",
"countryCode": "TH",
"region": "Bangkok",
"city": "Bangkok",
"timezone": "Asia/Bangkok",
"lat": "13.7512",
"lon": "100.5172",
"zip": "10200",
"ovpn": "https://jump247vpn.com/api/listvpn/ovpn/165.154.232.74-client.ovpn",
"flag": "https://jump247vpn.com/api/listvpn/flags/TH.png",
"vip": false
},
{
"id": 10,
"ip": "165.154.240.200",
"country": "Korean",
"name": "Korean",
"countryCode": "KR",
"region": "Korean",
"city": "Korean",
"timezone": "Korean",
"lat": "0",
"lon": "0",
"zip": "",
"ovpn": "https://jump247vpn.com/api/listvpn/ovpn/165.154.240.200-client.ovpn",
"flag": "https://jump247vpn.com/api/listvpn/flags/KR.png",
"vip": false
},
{
"id": 11,
"ip": "165.154.241.223",
"country": "Japan",
"name": "Japan",
"countryCode": "JP",
"region": "Japan",
"city": "Japan",
"timezone": "Japan",
"lat": "0",
"lon": "0",
"zip": "",
"ovpn": "https://jump247vpn.com/api/listvpn/ovpn/165.154.241.223-client.ovpn",
"flag": "https://jump247vpn.com/api/listvpn/flags/JP.png",
"vip": false
},
{
"id": 12,
"ip": "165.154.242.171",
"country": "Philippines",
"name": "Philippines",
"countryCode": "PH",
"region": "Metro Manila",
"city": "Manila",
"timezone": "Asia/Manila",
"lat": "14.6019",
"lon": "120.9896",
"zip": "0900",
"ovpn": "https://jump247vpn.com/api/listvpn/ovpn/165.154.242.171-client.ovpn",
"flag": "https://jump247vpn.com/api/listvpn/flags/PH.png",
"vip": false
},
{
"id": 13,
"ip": "167.114.49.28",
"country": "Canada",
"name": "Canada",
"countryCode": "CA",
"region": "Quebec",
"city": "Montreal",
"timezone": "America/Toronto",
"lat": "45.5063",
"lon": "-73.5794",
"zip": "H3A",
"ovpn": "https://jump247vpn.com/api/listvpn/ovpn/167.114.49.28-client.ovpn",
"flag": "https://jump247vpn.com/api/listvpn/flags/CA.png",
"vip": false
},
{
"id": 14,
"ip": "45.149.184.34",
"country": "United Kingdom",
"name": "United Kingdom",
"countryCode": "GB",
"region": "England",
"city": "London",
"timezone": "Europe/London",
"lat": "51.5088",
"lon": "-0.093",
"zip": "EC4R",
"ovpn": "https://jump247vpn.com/api/listvpn/ovpn/45.149.184.34-client.ovpn",
"flag": "https://jump247vpn.com/api/listvpn/flags/GB.png",
"vip": false
},
{
"id": 15,
"ip": "51.75.187.95",
"country": "Italy",
"name": "Italy",
"countryCode": "IT",
"region": "Lombardy",
"city": "Milan",
"timezone": "Europe/Rome",
"lat": "45.4722",
"lon": "9.1922",
"zip": "20159",
"ovpn": "https://jump247vpn.com/api/listvpn/ovpn/51.75.187.95-client.ovpn",
"flag": "https://jump247vpn.com/api/listvpn/flags/IT.png",
"vip": false
},
{
"id": 16,
"ip": "51.79.239.10",
"country": "Singapore",
"name": "Singapore",
"countryCode": "SG",
"region": "Central Singapore",
"city": "Singapore",
"timezone": "Asia/Singapore",
"lat": "1.27989",
"lon": "103.849",
"zip": "069536",
"ovpn": "https://jump247vpn.com/api/listvpn/ovpn/51.79.239.10-client.ovpn",
"flag": "https://jump247vpn.com/api/listvpn/flags/SG.png",
"vip": false
},
{
"id": 17,
"ip": "70.36.105.180",
"country": "United States",
"name": "United States",
"countryCode": "US",
"region": "California",
"city": "Los Angeles",
"timezone": "America/Los_Angeles",
"lat": "34.0456",
"lon": "-118.258",
"zip": "90189",
"ovpn": "https://jump247vpn.com/api/listvpn/ovpn/70.36.105.180-client.ovpn",
"flag": "https://jump247vpn.com/api/listvpn/flags/US.png",
"vip": false
}
],
"ads": [
{
"name": "AdMob",
"id": "your_admob_app_id",
"enabled": false,
"test": true,
"banner": [
{
"id": "your_admob_banner_id_1",
"placement": "admob_banner_placement_1",
"refresh": 30,
"enabled": false,
"config": {}
},
{
"id": "your_admob_banner_id_2",
"placement": "admob_banner_placement_2",
"refresh": 60,
"enabled": false,
"config": {}
}
],
"interstitial": [
{
"id": "your_admob_interstitial_id_1",
"placement": "admob_interstitial_placement_1",
"refresh": 30,
"enabled": false,
"config": {}
},
{
"id": "your_admob_interstitial_id_2",
"placement": "admob_interstitial_placement_2",
"refresh": 60,
"enabled": false,
"config": {}
}
],
"rewarded": [
{
"id": "your_admob_rewarded_id_1",
"placement": "admob_rewarded_placement_1",
"refresh": 30,
"amount": 1,
"type": "Coins",
"enabled": false,
"config": {}
},
{
"id": "your_admob_rewarded_id_2",
"placement": "admob_rewarded_placement_2",
"refresh": 60,
"amount": 2,
"type": "Gems",
"enabled": false,
"config": {}
}
]
},
{
"name": "Facebook Audience Network",
"id": "your_facebook_app_id",
"enabled": false,
"test": false,
"banner": [
{
"placement": "fan_banner_placement",
"refresh": 30,
"enabled": false,
"config": {}
}
],
"interstitial": [
{
"placement": "fan_interstitial_placement",
"refresh": 60,
"enabled": false,
"config": {}
}
],
"rewarded": [
{
"placement": "fan_rewarded_placement",
"refresh": 60,
"amount": 100,
"type": "Coins",
"enabled": false,
"config": {}
}
]
}
]
}