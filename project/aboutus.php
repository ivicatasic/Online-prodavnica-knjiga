<?php session_start();?>

<html>
<head>
		<?php
			include("includes/head.inc.php");
            header('Content-Type: text/html; charset=utf-8');
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
						<center><img style='max-width:100%; max-height:100%;'src="images/finnal.gif"></<center>
					</div>
				</div>
				<br>
			<!-- end header -->
			
			<!-- start page -->
			<br>
				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<center><h1 class="title">O nama</h1></center>
							
								<hr style="border:1px Solid #a1a1a1;">
							<div class="entry" style="height:auto">
								Izdavačka kuća <i>Lektira </i>osnovana je aprila 2009. godine. Od skromnih početaka sa nekoliko objavljenih naslova za godinu dana došli smo do produkcije od preko tri stotine objavljenih naslova godišnje te sa pravom možemo reći da smo jedna od najvećih izdavačkih kuća ne samo u zemlji, već i u čitavom regionu.

								Prvi zadatak koji smo sebi postavili od osnivanja bio je da na pravi način predstavimo domaćoj javnosti jednog od najpopularnijih svetskih pisaca Terija Pračeta. Za petnaest godina objavili smo veliki broj značajnih i uticajnih stranih i domaćih pisaca.
								Standardi koje smo postavili na početku i od kojih nećemo odustajati jesu da naši čitaoci zaslužuju samo najbolje – kako u pogledu književnog kvaliteta, tako i kada je reč o opremi knjige. Uprkos najvećim standardima koje smo poštovali, cene naših izdanja uvek su bile među najnižim u knjižarama. Poštujući svoj zamašni izdavački plan za naredni period, Lektira će i nadalje uspostavljati nove standarde u izdavaštvu izlazeći u susret potrebama, zahtevima i očekivanjima svojih čitalaca.
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
