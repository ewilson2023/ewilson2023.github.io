<!DOCTYPE html>
<html>
	<head>
		<title>Lab <?php include 'common/labnum.php';?>My Dream Vacation</title>
		<?php require 'common/head.php';?>
	</head>
	<body>		
		<!-- HEADER -->
		<div class="header">
			<!-- Title -->
			<div class="title_wrapper">
				<h1 style="font-size: clamp(30px, 13.25cqw, 90px);">
					Lab <?php include 'common/labnum.php';?> Dream Vacation
				</h1>
				<div class="subtitle">
					<hr>
					<h2> Liz Wilson	</h2>
					<hr>
				</div>
			</div>
			<!-- NAV BAR -->
			<nav>
				<?php
					$current_page = 'vacation';		// set name variable
					require 'common/nav.php';
				?>
			</nav>
			
		</div>
		
		<!-- MAIN SECTION -->
		<div class="body_wrapper">
			<div class="main">
					
				<!-- THE LIST -->
				<h2>
					My Dream Vacation
				</h2>
				<ul>
					<li>I gain the ability to <em>teleport</em></li>
					<li>I go anywhere I want in the world all day</li>
					<li>I teleport home and sleep in <strong>my own bed</strong></li>
				</ul>

				<!-- THE TABLE -->
					<table>
						<thead>
							<tr> 					
							<!-- tr=table row-->
								<th style="text-transform: uppercase">Heading 1</th>	<!-- th=table header cell-->
								<th style="text-transform: uppercase">Heading 2</th>
							</tr>
							</thead>
						<tbody>
							<tr>
								<td style="text-align: left">H1 row1</th>	<!-- td=table data cell-->
								<td style="text-align: right">H2 row1</th>
							</tr>
							<tr>
								<td style="text-align: left">H1 row2</th>
								<td style="text-align: right">H2 row2</th>
							</tr>
						</tbody>
					</table>
					
				<!-- DOGGIES -->	
				<figure>
					<img style="
						display: block; 
						margin: auto;
						border-style: solid;
						border-color: var(--orangeLight);
						border-right-color: var(--orangeDark);
						border-bottom-color: var(--orangeDark);
						border-width: 15px;
						border-radius: 30px"
						width="400"
						alt="Doggies"
						src="images/IMG-20250507.jpg" >
					<figcaption>
						<center>Pippin and Newton</center>
					</figcaption>
				</figure>
				
				<!-- FOOTER -->
				<?php include 'common/footer.php';	?>	
			</div>
		</div>
	</body>
</html>