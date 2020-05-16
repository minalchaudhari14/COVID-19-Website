<!DOCTYPE html>
<html>
<head>
	<title>COVID-19</title>
	<?php include 'link/links.php';?>
	<?php include 'css/style.php';?>
</head>
<body onload="fetch()">

<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#sympid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#preventid">prevention</a>
      </li>
       <li class="nav-item">
        <a class="nav-link " href="indiacoronalive.php">indiacoronalive</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="#contactid">contact</a>
      </li>
    </ul> 
  </div>
</nav>
<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2"> 
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="images/globe-children.jpg" width="300" height="300">
			</div>
		</div>
		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1"> 
			<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"> <img src="images/corona.png"></span>na Virus</h1>
				
			</div>
			
		</div>
	</div>

</div>

<!----------corona latest updates------->
<section class="corona_update container-fluid">
	<div class="mb-3">
		<h3 class="text-uppercase text-center">covid-19 LIVE UPDATES OF THE WORLD</h3>
	</div>
	<div class="table-responsive">
		<table class=" table table-bordered table-strped text-center" id="tbval">
			<tr>
				<th>Country</th>
				<th>TotalConfirmed</th>
				<th>TotalRecovered</th>
				<th>TotalDeaths</th>
				<th>NewConfirmed</th>
				<th>NewRecovered</th>
				<th>NewDeaths</th>		
			</tr>
		</table>
		
 	</div>
	
</section>

<!--**********************About section*************-->
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
	<div class="section_header text-center md-5 mt-4">
		<h1>About COVID-19</h1>
	</div>
	<div class="row pt-5">
		<div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
			<img src="images/about corona.jpg" class="img-fluid">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<h2>What is COVID-19(Corona-virus)</h2>
			<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.This new virus and disease were unknown before the outbreak began in Wuhan,china,in December2019</p>
			<p>Coronavirises are large family of viruses which may cause illness in animals or humans,several coronaviruses are known to cause respiratory infection ranging from the comman cold to more server disease such as middle East Respiratory Syndrome(MERS) and Severe Acute Respiratory Syndrome(SARS).The most recently discovered coronavirus causes coronavirus disease COVID-19.</p>
		</div>
	</div>
</div>

<!--******************corona symptoms***************-->
<div class="container-fluid pt-5 pb-5" id="sympid">
	<div class="section_header text-center md-5 mt-4">
		<h1>Coronavirus symptoms</h1>
	</div>
	<div class="container">
		<div class="row">
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
			<img src="images/cough.jpg" class="img-fluid" width="120" height="130">
			<figcaption>Cough</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
			<img src="images/runnignose.jpg" class="img-fluid" width="120" height="120">
			<figcaption>Runny Nose</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
			<img src="images/fever.jpg" class="img-fluid" width="120" height="120">
			<figcaption>Fever</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
			<img src="images/cold.png" class="img-fluid" width="120" height="120">
			<figcaption>Cold</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
			<img src="images/tiredness.jpg" class="img-fluid" width="120" height="120">
			<figcaption>Tiredness</figcaption>
			</figure>
		</div>
		<div class="col-lg-4 col-md-4 col-12 mt-5">
			<figure class="text-center">
			<img src="images/difficulty.jpeg" class="img-fluid" width="120" height="120">
			<figcaption>Difficulty breathing(Severe cases)</figcaption>
			</figure>
		</div>
	</div>
</div>
</div>
<!--**********Prevention agianst coronavirus**********-->

<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
	<div class="section_header text-center md-5 mt-4">
		<h1>6 Steps Prevention Against Coronavirus</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
			<img src="images/handwash.png" class="img-fluid" width="90" height="90">
			</figure>
				</div>
				
				<div class="col-lg-8 col-md-8 col-12">
					<p>wash your hands regularly for 20 sec,with soap and water or sanitizer
				</p></div>
			</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
			<img src="images/mask.jpg" class="img-fluid" width="90" height="90">
			</figure>
				</div>
				
				<div class="col-lg-8 col-md-8 col-12">
					<p>Cover your nose and mouth with a disposable tissue or fiexed elbow when you cough or sneeze
				</p></div>
			</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
			<img src="images/socialdis.jpg" class="img-fluid" width="90" height="90">
			</figure>
				</div>
				
				<div class="col-lg-8 col-md-8 col-12">
					<p>Avoid close contact(1meter or 3 feet)with people who are unwell
				</p></div>
			</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
			<img src="images/stayhome.png" class="img-fluid" width="90" height="90">
			</figure>
				</div>
				
				<div class="col-lg-8 col-md-8 col-12">
					<p>Stay home and self-isolate from others in the household if you feel unwell
				</p></div>
			</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
			<img src="images/news.jpg" class="img-fluid" width="90" height="90">
			</figure>
				</div>
				
				<div class="col-lg-8 col-md-8 col-12">
					<p>Stay informed by watching news and follow the recommened practices
				</p></div>
			</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12">
						<figure class="text-center">
			<img src="images/gocorona.jpg" class="img-fluid" width="90" height="90">
			</figure>
				</div>
				
				<div class="col-lg-8 col-md-8 col-12">
					<p>If you fever,cough and difficulty breathing,seek medical care early
				</p></div>
			</div>
			</div>
		</div>
	</div>
</div>
<!--**********contact us**********-->

<div class="container-fluid pt-5 pb-5" id="contactid">
	<div class="section_header text-center md-5 mt-4">
		<h1>Contact Us ASAP</h1>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-12">
				<form action="" method="POST">
					<div class="form-group">
    <label >Username</label>
    <input type="text" class="form-control"name="username" placeholder="name" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label>Email </label>
    <input type="email" class="form-control" name="email"placeholder="name@example.com" required autocomplete="off">
  </div>
  <div class="form-group">
    <label>Mobile </label>
    <input type="number" class="form-control" name="mobile"placeholder="mobile" required autocomplete="off">
  </div>
  <div class="form-group">
  	<label>Select Symptoms</label><br>
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input " id="customcheckbox1" name="coronasym[]" value="cold">
  		<label class="custom-control-label" for="customcheckbox1">cold</label>
  	</div>
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input " id="customcheckbox2" name="coronasym[]" value="fever">
  		<label class="custom-control-label" for="customcheckbox2">fever</label>
  	</div>
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input " id="customcheckbox3" name="coronasym[]" value="breath">
  		<label class="custom-control-label" for="customcheckbox3">difficulty inbreath</label>
  	</div>
  	<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
  		<input type="checkbox" class="custom-control-input " id="customcheckbox4" name="coronasym[]" value="tired">
  		<label class="custom-control-label" for="customcheckbox4">feeling weak</label>
  	</div>

  </div>

  <div class="form-group">
    <label>Descripe how you are feeling</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="msg" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
			</div>
		</div>
	</div>
</div>

<!--*******************top cursor*******************-->
<div class="container scrolltop float-right pr-5">
	<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"> </i>
</div>

<!--***********footer**********-->

<footer class="mt-5">
	<div class="footer_style text-white text-center container-fluid">
		<p>copyright by Minal chaudhari</p>
	</div>
</footer>


<script type="text/javascript">

$('.count').counterUp({
	delay:10,
	time:3000
})


mybutton =document.getElementById("myBtn");
window.onscroll = function(){
	scrollFunction()
};
function scrollFunction(){
	if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100)
	{
		mybutton.style.display = "block";
	}
	else
	{
		mybutton.style.display ="none";
	}
}
function topFunction(){
	document.body.scrollTop =0;
	document.documentElement.scrolltop =0;
}

 function fetch(){
 	$.get("https://api.covid19api.com/summary",
 		function(data)
 		{
 			var tbval = document.getElementById('tbval');

 			for(var i=1; i<(data['Countries'].length);i++)
 			{
 				var x = tbval.insertRow();
 				x.insertCell(0);

 				tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
 				tbval.rows[i].cells[0].style.background = '#7a4a91';
 				tbval.rows[i].cells[0].style.color = '#fff';

 				x.insertCell(1);
 				tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
 				tbval.rows[i].cells[1].style.background = '#4bb7d8';

 				x.insertCell(2);
 				tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
 				tbval.rows[i].cells[2].style.background = '#9cc850';

 					x.insertCell(3);
 				tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
 				tbval.rows[i].cells[3].style.background = '#f36e23';

 					x.insertCell(4);
 				tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
 				tbval.rows[i].cells[4].style.background = '#4bb7d8';

 				x.insertCell(5);
 				tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
 				tbval.rows[i].cells[5].style.background = '#9cc850';

 				x.insertCell(6);
 				tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
 				tbval.rows[i].cells[6].style.background = '#f36e23';

 			}
 		}

 		);
 }
</script>
</body>
</html>

<?php

include  'dbcon.php';

if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$symp = $_POST['coronasym'];
	$msg = $_POST['msg'];

	$chk = "";

	foreach ($symp as $chk1) {
		$chk .= $chk1.",";
		# code...
	}

	$insertquery = "insert into coronacase(username,email,mobile	,symp,message) values('$username','$email','$mobile','$chk','$msg') ";
	$query = mysqli_query($con,$insertquery);


}


?>