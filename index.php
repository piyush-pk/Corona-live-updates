<!DOCTYPE html>
<html>

<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-9NQWGLZXSG"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-9NQWGLZXSG');
	</script>

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-K6H2HDK');
	</script>
	<!-- End Google Tag Manager -->


	<meta name="keywords" content="piyushpk, piyush pk, corona tracker, corona live updates, corona news, latest news, covid-19,covid-19 updates, corona antidote">
	<meta name="Description" content="Latest Corona Updates OF India & All Over The World, Let's Check out">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>COVID-19 Stay Home, Stay Safe</title>
		<?php include 'css/Style.php'; ?>
		<?php include 'link/links.php'; ?>

</head>

<body onload="fetch()">
	<nav class="navbar navbar-expand-lg nav_style p-3">
		<a class="navbar-brand pl-3" href="#">COVID-19</a>
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
					<a class="nav-link" href="#India">India Cases</a>
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

	<div class="main_header">
		<div class="row w-100 h-100">
			<div class="col-lg-5 col-md-5 col-12 other-lg-1 order-2">
				<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
					<h1>Let's Stay & Fight Together Against Cor<span class="c_r"><img src="images/cv2.png" width="50px" height="50px"></span>na Virus</h1>

				</div>
			</div>

			<div class="col-lg-7 col-md-7 col-12 other-lg-2 order-1">
				<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center ">
					<img src="images/unity.png" width="300" height="300">
				</div>
			</div>

		</div>
	</div>


	<!--***************************************World Live Update***************************-->

	<section class="corona_update container-fluid">
		<div class="mb-3">
			<h3 class="text-center text-uppercase">Covid-19 updates of the india</h3>
		</div>

		<div class="table-responsive">
			<table class="table table-bordered table-striped text-center" id="India">
				<tr>
					<th>LAST UPDATED</th>
					<th>STATES</th>
					<th>TOTAL CONFIRMED</th>
					<th>ACTIVE CASES</th>
					<th>TOTAL RECOVERED</th>
					<th>TOTAL DEATHS</th>
				</tr>

				<?php

				$data = file_get_contents('https://api.covid19india.org/data.json');
				$coranalive = json_decode($data, true);

				$statescount = count($coranalive['statewise']);

				/*<!--  If you like my videos then plz subscribe and leave a comment on the video about your experience ok   -->*/


				$i = 1;
				while ($i < $statescount) {

				?>

					<tr>
						<td class="text-uppercase"><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></td>
						<td class="text-uppercase"><?php echo $coranalive['statewise'][$i]['state'] ?></td>
						<td class="text-uppercase"><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
						<td class="text-uppercase"><?php echo $coranalive['statewise'][$i]['active'] ?></td>
						<td class="text-uppercase"><?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
						<td class="text-uppercase"><?php echo $coranalive['statewise'][$i]['deaths'] ?></td>
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

					$i++;
				}


				?>


			</table>
		</div>





		<!--********************************Corona Live Updates********************************* -->
		<!--
	<section class="corona_update">
		<div class="mb-3">
			<h3 class="text-center">COVID-19 LIVE UPDATES</h3>
		</div>
		<div class="d-flex justify-content-around align-items-center count_style">
			<div class="center"><font color="blue">
				<h1 class="count">1,999,279</h1>
				<p class="text-uppercase">Total active Cases</p>
				</font>
			</div>
			
			<div class="center"><font color="green">
				<h1 class="count">478,932</h1>
				<p class="text-uppercase">total recovered</p>
				</font>
			</div>

			<div class="center"><font color="red">
				<h1 class="count">126,720</h1>
				<p class="text-uppercase">total Deaths</p>
				</font>
			</div>
		</div>
	</section>
-->


		<!--********************************About Section ********************************-->

		<div class="container-fluid sub_section pt-5 pb-5 " id="aboutid">
			<div class="section_header text-center mb-5 mt-4">
				<h1>ABOUT COVID-19</h1>
			</div>
			<div class="row pt-5 ">
				<div class="col-lg-5 col-md-6 col-12 ml-auto">
					<img src="images/wc2.jpg" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<h2>What is Covid-19 (Corona Virus)</h2>
					<p>On December 31, 2019, the World Health Organisation’s (WHO) China office heard the first reports of a previously-unknown virus behind a number of pneumonia cases in Wuhan, a city in Eastern China with a population of over 11 million.
						Coronavirus disease (COVID-19) is a new strain that was discovered in 2019 and has not been previously identified in humans.</p>
					<p>The disease causes respiratory illness (like the flu) with symptoms such as a cough, fever, and in more severe cases, difficulty breathing. You can protect yourself by washing your hands frequently, avoiding touching your face, and avoiding close contact (1 meter or 3 feet) with people who are unwell.</p>
				</div>
			</div>
		</div>


		<!--**********************************************Corona Symptoms**************************************************-->

		<div class="container-fluid pt-5 pb-5 " id="symptomid">
			<div class="section_header text-center mb-5 mt-4">
				<h1>CORONAVIRUS SYMPTOMS</h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
							<img src="images/cs1.png" class="img-fluid" width="120" height="120">
							<figcaption class="text-uppercase">COUGH</figcaption>
						</figure>
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
							<img src="images/cs3.jpg" class="img-fluid" width="120" height="120">
							<figcaption class="text-uppercase">cold</figcaption>
						</figure>
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
							<img src="images/cs4.png" class="img-fluid" width="120" height="120">
							<figcaption class="text-uppercase">runny nose</figcaption>
						</figure>
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
							<img src="images/cs5.png" class="img-fluid" width="150" height="150">
							<figcaption class="text-uppercase">fever</figcaption>
						</figure>
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
							<img src="images/cs6.jpg" class="img-fluid" width="120" height="120">
							<figcaption class="text-uppercase">tiredess</figcaption>
						</figure>
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<figure class="text-center">
							<img src="images/cs2.jpg" class="img-fluid" width="120" height="120">
							<figcaption class="text-uppercase">Difficult Breathing (Severe Cases)</figcaption>
						</figure>
					</div>
				</div>
			</div>
		</div>


		<!--**********************************************Corona Prevention**************************************************-->

		<div class="container-fluid sub_section pt-5 pb-5 " id="preventionid">
			<div class="section_header text-center mb-5 mt-4">
				<h1 class="text-capitalize">6 Steps Prevention Against Coronavirus</h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<img src="images/pv2.jpg" class="img-fluid" width="90" height="90">
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p class="text-capitalize">Clean your hands regularly For 20Sec With soap & water or alcohol-based hand rub.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<img src="images/pv1.jpg" class="img-fluid" width="90" height="90">
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p class="text-capitalize">Stay At home & stay safe Is new mantra to stay safe from covid-19 as out goverment declared.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<img src="images/pv3.jpg" class="img-fluid" width="90" height="90">
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p class="text-capitalize">Keep Mask & Tissue Etc. While Sneezing & While going outside the home.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<img src="images/pv4.jpg" class="img-fluid" width="90" height="90">
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p class="text-capitalize">Maintain Social Distance Stay At home Don't meet to your relatives & friends in this situation.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<img src="images/pv5.png" class="img-fluid" width="90" height="90">
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p class="text-capitalize">Stay updated with news.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<img src="images/pv6.png" class="img-fluid" width="90" height="90">
							</div>
							<div class="col-lg-8 col-md-8 col-12">
								<p class="text-capitalize">If feed Not good & Something medical Issue then must contact to doctor.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<!--**********************************************Contact us**************************************************-->
<!-- 
		<div class="container-fluid pt-5 pb-5 " id="contactid">
			<div class="section_header text-center mb-5 mt-4">
				<h1 class="text-uppercase">Contact Us ASAP</h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<form action="" method="POST">
							<div class="form-group">
								<label>USERNAME</label>
								<input type="text" class="form-control" name="username" placeholder="Enter Your Name " autocomplete="off" required>
							</div>
							<div class="form-group">
								<label for="exampleFormControlInput1">Email</label>
								<input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
							</div>
							<div>
								<label>MOBILE</label>
								<input type="number" class="form-control" name="mobile" maxlength="10" placeholder="Enter Your Mobile Number " autocomplete="off" required>
							</div>
							<div class="form-group mt-3 mb-1"><label>Select Symptoms</label></div>
							<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input class="custom-control-input" type="checkbox" id="inlineCheckbox1" value="Cold">
								<label class="custom-control-label" for="inlineCheckbox1" name="coronasym[]">Cold</label>
							</div>


							<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input class="custom-control-input" type="checkbox" id="inlineCheckbox2" value="breath">
								<label class="custom-control-label" for="inlineCheckbox2" name="coronasym[]">Difficulty In Breathing</label>
							</div>


							<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input class="custom-control-input" type="checkbox" id="inlineCheckbox3" value="fever">
								<label class="custom-control-label" for="inlineCheckbox3" name="coronasym[]">Fever</label>
							</div>


							<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
								<input class="custom-control-input" type="checkbox" id="inlineCheckbox4" value="waekness">
								<label class="custom-control-label" for="inlineCheckbox4" name="coronasym[]">Feeling Weak</label>
							</div>


							<div class="form-group mt-3">
								<label for="exampleFormControlTextarea1">Describe How You Are Feeling:</label>
								<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
							</div>
							<button type="submit" class="btn btn-primary" name="submit">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div> -->


		<div class="container scrolltop float-right pr-5">
			<i class="fa fa arrow-up" onclick="topFunction()" id="mybtn"></i>
		</div>

		<!--***************************************************footer********************************************-->

		<footer class="mt-5">
			<div class="footer_style text-white text-center container-fluid">
				<p>Copyright By <i><u><b><a href="www.piyushpk.com">© PIYUSHPK </a></b></u></i></p>
			</div>
		</footer>

		<script type="text/javascript">
			$('.count').counterUp({
				delay: 100,
				time: 3000
			})
		</script>

		<script type="text/javascript">
			mybutton = document.getElementById("mybtn");
			window.onscroll = function() {
				scrollFunction()
			};

			function scrollFunction() {
				if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
					mybutton.style.display = "block";
				} else {
					mybutton.style.display = "none";
				}
			}

			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
		</script>
</body>

</html>


?>
