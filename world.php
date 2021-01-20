<!DOCTYPE html>
<html>
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-9NQWGLZXSG"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-9NQWGLZXSG');
	</script>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-K6H2HDK');</script>
	<!-- End Google Tag Manager -->
	

	<meta name="keywords" content="piyushpk, piyush pk, corona tracker, corona live updates, corona news, latest news, covid-19,covid-19 updates, corona antidote">
	<<meta name="Description" content="Latest Corona Updates OF India & All Over The World, Let's Check out">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Stay Home | Stay Safe |Piyushpk</title>
	<?php include 'css/Style.php';?>
  	<?php include 'link/links.php';?>
</head>
<body>
	<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-3" href="index.php">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse pr-3" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptomid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventionid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="india.php">India Cases</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/world.php">World Cases</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
    </ul>
  </div>
</nav>



<!--**********************india*******************-->
<section class="corona_update container-fluid">
	<div class="mb-3">
		<h3 class="text-center text-uppercase">Covid-19 updates of the world</h3>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center" id="tbval">
			<tr>
				<th>COUNTRIES</th>
				<th>CONFIRMED</th>
				<th>RECOVERED</th>
				<th>DEATHS</th>
			</tr>

<?php

$j_data = file_get_contents('https://pomber.github.io/covid19/timeseries.json');
$data = json_decode($j_data, true);

foreach ($data as $key => $value) {
	# code...
	$days_count = count($value)-1;
	$days_count_prev = $days_count-1;
}

//$statescount = count($coranalive['statewise']);

 /*<!--  If you like my videos then plz subscribe and leave a comment on the video about your experience ok   -->*/


foreach ($data as $key => $value) {
	# code...


?>

	<tr>
		<td class="text-uppercase"><?php echo $key; ?></td>
		<td class="text-uppercase"><?php echo $value[$days_count]['confirmed'] ?></td>
		<td class="text-uppercase"><?php echo $value[$days_count]['recovered'] ?></td>
		<td class="text-uppercase"><?php echo $value[$days_count]['deaths'] ?></td>
	</tr>


  <!--
  echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['state'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['active'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ; 
	-->


<?php

}


?>


		</table>
	</div>

















<div class="container scrolltop float-right pr-5">
	<i class="fa fa arrow-up" onclick="topFunction()" id="mybtn"></i>
</div>

	<footer class="mt-5">
	<div class="footer_style text-white text-center container-fluid">
		<p>Copyright By <i><u><b><a href="www.piyushpk.com">© PIYUSHPK </a></b></u></i></p>
	</div>

	<script type="text/javascript">
	mybutton=document.getElementById("mybtn");
	window.onscroll=function() {scrollFunction()};
	function scrollFunction(){
		if(document.body.scrollTop>100 || document.documentElement.scrollTop>100)
		{
			mybutton.style.display="block";
		}
		else
		{
			mybutton.style.display = "none";
		}
	}
	function topFunction()
	{
		document.body.scrollTop=0;
		document.documentElement.scrollTop=0;
	}
</script>

</footer>
</body>
</html>