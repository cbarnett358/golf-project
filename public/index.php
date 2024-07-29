<?php
//connect css 

//connect to sportsdata.io API for live golf data
$curl = curl_init();

curl_setopt_array($curl, [
	// CURLOPT_URL => "https://live-golf-data.p.rapidapi.com/schedule?orgId=1&year=2024",
    CURLOPT_URL => "https://live-golf-data.p.rapidapi.com/stats?year=2024&statId=186",
    // CURLOPT_URL => "https://live-golf-data.p.rapidapi.com/players?lastName=Morikawa&firstName=Collin&playerId=50525",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: live-golf-data.p.rapidapi.com",
		"x-rapidapi-key: 791e185a62msh80dbc9f17d12ac4p191d89jsnd8742f31bc6e"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	//format the response into something readable
    // print "<pre>";
    // print_r(json_decode($response));
    // print "</pre>";
}

//get image from usga?
//https://www.usopen.com/players/34046.html
//potentially just scrae the image from the usga site as the api player id matches between the api and the usga sites
// print "<img src='https://res.cloudinary.com/usga-single-app/image/upload/f_auto,fl_lossy,q_auto/c_fill,dpr_2.0,g_center,h_115,w_115/championships/usopen/players/2024/34046'>";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HTML5 Boilerplate</title>
  <link rel="stylesheet" href="css/styles.css">

</head>

<body>
  <h1>PGA TOUR Card Game</h1>
  <script src="scripts.js"></script>
  <div class="card">
  <img src="https://res.cloudinary.com/usga-single-app/image/upload/f_auto,fl_lossy,q_auto/c_fill,dpr_2.0,g_center,h_115,w_115/championships/usopen/players/2024/34046" alt="Avatar" style="width:100%">
  <div class="container">
    <h4><b>John Doe</b></h4>
    <p>Architect & Engineer</p>
  </div>
</div>
</body>

</html>
