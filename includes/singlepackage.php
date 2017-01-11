<?php

$packageName = "Equestrian Package";
$packageCity = "Mackinac Island";
$packageDate1 = "5/16/17";
$packageDate2 = "5/21/17";
$packagePrice = "$564";
$details = 0;
$city = 0;
if (isset($_GET['cities'])){
	$city = $_GET["cities"];
}
else {
	// goto main search
}

if ($city === "Mackinac+Island") {
	for ($i = 0; $i < 8; $i++) {
	echo '
		<div class="col-md-12">
			<div class="row package">
				<div class="col-md-8">
					<img src="img/Packages/equestrian.jpg">
					<h1>'.$packageName.' </h1><h4>'.$packageCity.'</h4>
					<h2>'.$packageDate1.' - '.$packageDate2.'</h2>
				</div>
				<div class="col-md-1">
					<h3 class="price">'.$packagePrice.'</h3>
					<br />
					<button type="button" class="btn btn-primary">View Package</button>			
				</div>
			</div>
		</div>
	';
}
}


?>