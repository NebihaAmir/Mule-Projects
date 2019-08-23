
<?php

$header = array();
$header [] = 'Authorisation: Token eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJhZG1pbiIsInBhc3N3b3JkIjoiMTIzIn0.HF6Va3g3GkDBZjEOjjC91V3obrZlhXc_vUMax5rqRa8EzqBg96Rb8D7FZP5e4s-fP8ZfHRxWD_-D1zXnbpstrA';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="assets/css/style.css">
<link href="../assets/style.css" rel="stylesheet" />
<script type="text/javascript">

	
	$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>
</head>
<body>
<div class="login-page">
  <div class="form">
	<form method="post" action="userList.php">
		
	<input type="text" placeholder="Enter Username"/>
      <input type="password" placeholder="Enter Password"/>
      <button style="background: #4CAF50;" name="submit">Login</button>

   <!--   <?php 
      	if(isset($_POST['submit'])){
      $client = curl_init();

// curl_setopt($client,CURLOPT_URL,'http://app.icraftsoft.net:9090/rest/user');
	 // curl_setopt($client,CURLOPT_HTTPHEADER,$header);
	// $result = curl_exec($client);
	// $result = json_decode($result);

// echo $result;

}
      ?> -->
	</form>
	</div>
	</div>
</body>
<!-- <script src="app.js"></script>
    <script src="controllers/home.js"></script> -->
</html>
