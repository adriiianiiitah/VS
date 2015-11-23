<!DOCTYPE html>
<html>
	<head>
		  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="../apple-touch-icon.png">
        <link rel="icon" href="favicon.ico"  type="image/x-icon">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
			<!--[if lt IE 9]>
            <script src="../js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css">
        
        <script type="text/javascript" src="js/jquery.min.js"></script>
   </head>
	<body>
		<?php 
      	require_once('views/menu.html');
    	?>	
    	<div class="container padding">	
    		<form class="form-horizontal" role="form">
  			<div class="row">
  				<fieldset>
					<legend>Create Account</legend>
  					<div>
						<div class="form-group">								
							<label for="country" class="sr-only">Country</label>
							<select class="form-control input-lg" id="country" name="country">
								<option>-- Select a country --</option>
								<option value="100">United States of America</option>								
								<option value="200">Canada</option>
								<option value="300">México</option>
							</select>
						</div>
						<div class="form-group">
							<select class="form-control input-lg" name="state" >
								<!-- USA -->>
								<option value="0"> --Select a State/Province</option>
								<option value="1">Alabama</option>
								<option value="2">Alaska</option>
								<option value="3">American Samoa</option>
								<option value="4">Arizona</option>
								<option value="5">Arkansas</option>
								<option value="6">Armed Forces Africa</option>
								<option value="7">Armed Forces Americas</option>
								<option value="8">Armed Forces Canada</option>
								<option value="9">Armed Forces Europe</option>
								<option value="10">Armed Forces Middle East</option>
								<option value="11">Armed Forces Pacific</option>
								<option value="12">California</option>
								<option value="13">Colorado</option>
								<option value="14">Connecticut</option>
								<option value="15">Delaware</option>
								<option value="16">District of Columbia</option>
								<option value="17">Federated States Of Micronesia</option>
								<option value="18">Florida</option><option value="19">Georgia</option>
								<option value="20">Guam</option>
								<option value="21">Hawaii</option>
								<option value="22">Idaho</option>
								<option value="23">Illinois</option>
								<option value="24">Indiana</option>
								<option value="25">Iowa</option>
								<option value="26">Kansas</option>
								<option value="27">Kentucky</option>
								<option value="28">Louisiana</option>
								<option value="29">Maine</option>
								<option value="30">Marshall Islands</option>
								<option value="31">Maryland</option>
								<option value="32">Massachusetts</option>
								<option value="33">Michigan</option>
								<option value="34">Minnesota</option>
								<option value="35">Mississippi</option>
								<option value="36">Missouri</option>
								<option value="37">Montana</option>
								<option value="38">Nebraska</option>
								<option value="39">Nevada</option>
								<option value="40">New Hampshire</option>
								<option value="41">New Jersey</option>
								<option value="42">New Mexico</option>
								<option value="43">New York</option>
								<option value="44">North Carolina</option>
								<option value="45">North Dakota</option>
								<option value="46">Northern Mariana Islands</option>
								<option value="47">Ohio</option>
								<option value="48">Oklahoma</option>
								<option value="49">Oregon</option>
								<option value="50">Palau</option>
								<option value="51">Pennsylvania</option>
								<option value="52">Puerto Rico</option>
								<option value="53">Rhode Island</option>
								<option value="54">South Carolina</option>
								<option value="55">South Dakota</option>
								<option value="56">Tennessee</option>
								<option value="57">Texas</option>
								<option value="58">Utah</option>
								<option value="59">Vermont</option>
								<option value="61">Virginia</option>
								<option value="60">Virgin Islands</option>
								<option value="62">Washington</option>
								<option value="63">West Virginia</option>
								<option value="64">Wisconsin</option>
								<option value="65">Wyoming</option>
								<!-- canada-->
								<option value="66">Alberta</option>
								<option value="67">British Columbia</option>
								<option value="68">Manitoba</option>
								<option value="70">New Brunswick</option>
								<option value="69">Newfoundland and Labrador</option>
								<option value="72">Northwest Territories</option>
								<option value="71">Nova Scotia</option>
								<option value="73">Nunavut</option>
								<option value="74">Ontario</option>
								<option value="75">Prince Edward Island</option>
								<option value="76">Quebec</option>
								<option value="77">Saskatchewan</option>
								<option value="78">Yukon Territory</option>
							</select>
						</div>
						<div class="form-group">
							<label class="sr-only" for="city"></label>
							<input class="form-control input-lg" name="City" placeholder="City"/>
						</div>
						<div class="form-group">
							<label class="sr-only" for="street"></label>
							<input class="form-control input-lg" name="street" placeholder="Streest Address"/>
						</div>
								<div class="form-group">
									<label class="sr-only" for="num"></label>
									<input class="form-control input-lg" name="num" placeholder="unit"/>
								</div>
								<div class="form-group">
									<label class="sr-only" for="zipcode"></label>
									<input class="form-control input-lg" name="zipcode" placeholder="Zip Code"/>
								</div>	
							<div class="form-group">
								<button class="btn btn-lg" type="submit">Send</button>
							
							</div>							
						</div>
					</div>
				</fieldset>
  			</div>
  		</div>
	</body>
</html>