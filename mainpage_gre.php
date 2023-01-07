
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Document Title -->
		<title>Grievance vlits</title>


		<!-- Icon Fonts -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

		<!-- Google Fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />

		<!-- CSS Files -->
		<link rel="stylesheet" href="sys.css" type="text/css" media="all" />
		<style>
		.grie{
			text-align:center;
			width:100%;
		}
		
		
		
		</style>
	</head>

	<body class="home">
	<div class = "he">
	<img src = "mainlogo3.jpg" width = "100%" height = "100px"></div>
		<div class="site-wrapper">
			<!--<section class="article-wrapper">
				<div class="article-container">
					<div class="article-block">
						<div class="entry-content">
							
							<p>The ultimate guide to creating the ultimate makeup collection.</p>
						</div>
					</div>
				</div>
			</section>-->
			<section class="tabs-wrapper">
			
				<div class="tabs-container">
				<div class = "grie">
				<img src = "grievance.jpg" width = "55%" ></div>
					<div class="tabs-block">
						<div id="tabs-section" class="tabs">
						
							<ul class="tab-head">
							
								<li>
									<a href="#tab-1" class="tab-link active"><span class="material-icons tab-icon">schema</span>  <span class="tab-label">Mechanism</span></a>
								</li>
								<li>
									<a href="#tab-2" class="tab-link"><span class="material-icons tab-icon">people</span>   <span class="tab-label">Committee</span></a>
								</li>
								<li>
									<a href="#tab-3" class="tab-link"> <span class="material-icons tab-icon">engineering</span>  <span class="tab-label">Student grievance</span></a>
								</li>
								<li>
									<a href="#tab-4" class="tab-link">  <span class="material-icons tab-icon">school</span> <span class="tab-label">Parent grievance<span></a>
								</li>
								<li>
									<a href="#tab-5" class="tab-link"> <span class="material-icons tab-icon">face</span>  <span class="tab-label">Staff grievance</span></a>
								</li>
								<li>
								<a href = "#tab-6" class = "tab-link"><span class="material-icons tab-icon">autorenew</span> <span class = "tab-label">Grievance status</span></a>
								</li>
							</ul>
							
							<section id="tab-1" class="tab-body entry-content active active-content">
								<h2>Flow Chart</h2>
								<!--<p>While some people don’t think that <a href="#">face primer</a> is necessary, I personally view it as a vital step in my makeup routine.</p>
								<p>Face primers’ exact effects on your skin and makeup can vary, but overall, their main purpose is to keep your skin looking smooth and your makeup looking fresh all day long.</p>
							
							-->
							<p><?php include('pgmechanism.php'); ?></p>
							</section>

							<section id="tab-2" class="tab-body entry-content">
								<h2>Grievance Committee</h2>
								<!--<p>Foundation is probably the hardest part of your makeup routine to get right, as you not only have to consider the type of coverage you want (i.e. sheer/natural, medium, or full), but also your skin type and undertones.</p>
								<p>If you are new to wearing foundation or aren’t sure what type/shade is right for you, I’d highly recommend going to your nearest Sephora, MAC, or department store and have a makeup artist help you pick out one that matches your complexion and fits your coverage needs. It’s also a good idea to request a sample if you want to see how a formula feels on your skin before buying.</p>
							-->
							<p><?php include('grievancecommittee.html');?></p>
							</section>

							<section id="tab-3" class="tab-body entry-content">
							<h2>Student grievance</h2>
								<p><?php include('studentgre.php');?></p>
								<!--<p>Personally, I prefer BB cream to regular foundation, as I find it to be much more natural-looking. It is a great option if you’re looking for something that has skincare benefits such as moisturizing or priming (some BB creams have primer built in).</p>
								<p>In addition, if you are new to the makeup world, a good BB cream is an even better place to start than foundation, as it feels lighter on the skin, is hard to overdo, and can be applied with your fingers.</p>
							-->
							
							</section>

							<section id="tab-4" class="tab-body entry-content">
								<h2>Parent Grievance</h2>
								<!--<p>If you have acne, dark circles, or any kind of discoloration, concealer is a must-have.</p>
								<p>Concealers come in full-coverage and sheerer-coverage formulations, and which one you should choose depends on how much you’re trying to cover up.</p>
								<p>When choosing a concealer for acne and/or discoloration, find a shade that is as close as possible to your foundation/BB cream shade for the most natural look.</p>
							-->
							<p><?php include('parentgre.php');?></p>
							</section>

							<section id="tab-5" class="tab-body entry-content">
								<h2>Staff Grivance</h2>
								<!--<p>Putting on blush can have a huge effect on your overall look, and I personally never leave it out of my makeup routine. Blush is especially necessary if you’re wearing a foundation with more opaque coverage, which can sometimes leave your complexion looking a little bit flat.</p>
								<p>Blush comes in powder, gel, and cream formulations, with powder being the most popular. Recently, though, cream and gel blush have become very popular as well.</p>
							-->
							<p><?php include('staffgre.php');?></p>
							</section>
							
							<section id="tab-6" class="tab-body entry-content">
								<h2>Grievance Status</h2>
								<!--<p>Putting on blush can have a huge effect on your overall look, and I personally never leave it out of my makeup routine. Blush is especially necessary if you’re wearing a foundation with more opaque coverage, which can sometimes leave your complexion looking a little bit flat.</p>
								<p>Blush comes in powder, gel, and cream formulations, with powder being the most popular. Recently, though, cream and gel blush have become very popular as well.</p>
							-->
							<p><?php include('statusgre.php');?></p>
							</section>
							
						</div>
					</div>
				</div>
			</section>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
			<script src="grievance.js"></script>
			

	</body>
</html>
