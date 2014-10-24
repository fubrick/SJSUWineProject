<!DOCTYPE html>
<html lang="en">

<head>

	<title>HTML/CSS3 Responsive Theme</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<!-- arbitrary comment -->

<body class="body">
	
	<header class="mainHeader">
		<img src="img/logo.gif">

		<nav><ul>
			<li class="active"><a href="#">Home</a></li>
			<li><a href="http://www.vinobly.com/" target="_blank">Vinobly</a></li>
			<li><a href="#">Account</a></li>
			<li><a href="#">About</a></li>
			
		</ul></nav>
	</header>

	<div class="mainContent">
		<div class="content">
			<article class="topContent">
				<header>
					<h2><a href="#" title="First Post">Modern explorer view</a></h2>
				</header>
				<select>
					<option value="byNameAsc">Name: A to Z</option>
					<option value="byNameDesc">Name: Z to A</option>
					<option value="byVintageAsc">Vintage: old to new</option>
					<option value="byVintageDesc">Vintage: new to old</option>
					<option value="byPriceAsc">Price: low to high</option>
					<option value="byPriceDesc">Price: high to low</option>
				</select> 
				<br>
				<form id="Form1" action="submit.php" method="post">
  					Table: <input type="text" name="table"><br>
  					Fields: <input type="text" name="fields"><br>
  					OrderBy: <input type="text" name="orderBy"><br>
  					Limit: <input type="text" name="limit"><br>
  					<input type="Submit">
 				</form>
 				<br>
				<footer>
					<p class="postInfo">This text can indicate current sorting</p>
				</footer>

				<content>
					<table class="wineTable">
				
					<?php include("query.php"); ?>				
<!--
					<tr>
						<td class="produdctListCol_1" align="center">
							<a href="#"><img src="img/bottle1.jpg"></a>
						</td>
						<td class="productListCol_2" align="left">
							<p>Louis Latour Marsannay, <br>Pinot Noir from France</p>
						</td>
						<td class="productListCol_3" align="left">
							<p>2013</p>
						</td>
						<td class="productListCol_4" align="right">
							<p>Row: 1<br>Sec: A</p>
							<p>$47.98</p>
						</td>
					</tr>
					<tr>
						<td class="produdctListCol_1" align="center">
							<a href="#"><img src="img/bottle2.jpg"></a>
						</td>
						<td class="productListCol_2" align="left">
							<p>Les Petits Grains Muscat de Saint Jean de Minervols, <br>Muscat from France </p>
						</td>
						<td class="productListCol_3" align="left">
							<p>2009</p>
						</td>
						<td class="productListCol_4" align="right">
							<p>Row: 5<br>Sec: B</p>
							<p>$118.95</p>
						</td>
					</tr>
					<tr>
						<td class="produdctListCol_1" align="center">
							<a href="#"><img src="img/bottle3.jpg"></a>
						</td>
						<td class="productListCol_2" align="left">
							<p>Irony Chardonnay Monterey, <br>Chardonnay from the US</p>
						</td>
						<td class="productListCol_3" align="left">
							<p>2008</p>
						</td>
						<td class="productListCol_4" align="right">
							<p>Row: 6<br>Sec: A</p>
							<p>$59.95</p>
						</td>
					</tr>
--!>
					</table>

				</content>
			</article>
			<article class="bottomContent">
				<header>
					<h2><a href="#" title="Second Post">Older style view</a></h2>
				</header>
				<footer>
					<p class="postInfo">This post is written by Jeremy Jones</p>
				</footer>
				<content>
					<table class="wines">
						<tr>
							<td>Image</td>
							<th>Name</th>
							<th>Vintage</th>
							<th>Price</th>
							<th>Location</th>
							<th>Item#</th>
						</tr>
						<tr>
							<td><img src="img/bottle2.jpg"></td>
							<td>Dona Paula<br>Black Edition Red Blend Mendoza</td>
							<td>2012</td>
							<td>$16.95</td>
							<td>Row 3</td>
							<td>71825</td>
						</span>
						</tr>
						<tr class="alt">
							<td><img src="img/bottle2.jpg"></td>
							<td>Manzanita Creek<br>Zinfandel Old Vine Cloud Buster Russian River Valley</td>
							<td>2009</td>
							<td>$24.95</td>
							<td>Row 5</td>
							<td>00859</td>
						</tr>
						<tr>
							<td><img src="img/bottle2.jpg"></td>
							<td>Caymus<br>40th Anniversary Cabernet Sauvignon Napa Valley</td>
							<td>2012</td>
							<td>$74.95</td>
							<td>Row 1</td>
							<td>98006</td>
						</tr>
						<tr class="alt">
							<td><img src="img/bottle2.jpg"></td>
							<td>Maroon<br>Cabernet Sauvignon Heritage Collection Napa Valley</td>
							<td>2012</td>
							<td>$34.95</td>
							<td>Row 4</td>
							<td>70255</td>
						</tr>
						<tr>
							<td><img src="img/bottle2.jpg"></td>
							<td>Stag's Leap Wine Cellars<br>Artemis Cabernet Sauvignon Napa Valley</td>
							<td>2011</td>
							<td>$49.95</td>
							<td>Row 1</td>
							<td>23505</td>
						</tr>
					</table>
				</content>
			</article>
		</div>
	</div>

	<aside class="topSidebar">
		<nav>
			<h2>Type</h2>
			<ul>
				<li><a href="#">Red</a></li>
				<li><a href="#">white</a></li>
				<li><a href="#">Sparkling wines</a></li>
				<li><a href="#">Dessert wines</a></li>
			</ul>
			<h2>Country</h2>
			<ul>
				<li><a href="#">USA</a></li>
				<li><a href="#">Chile</a></li>
				<li><a href="#">Argentina</a></li>
				<li><a href="#">Israel</a></li>
				<li><a href="#">France</a></li>
				<li><a href="#">Italy</a></li>
			</ul>
			<h2>Varietal</h2>
			<ul>
				<li><a href="#">Cabernet Sauvignon</a></li>
				<li><a href="#">Sauvignon Blanc</a></li>
				<li><a href="#">Chardonnay</a></li>
				<li><a href="#">Pinot Noir</a></li>
				<li><a href="#">Pinot Grigio</a></li>
				<li><a href="#">Rose</a></li>
				<li><a href="#">Zinfandel</a></li>
				<li><a href="#">Other</a></li>
			</ul>
		</nav>
	</aside>

	<footer class="mainFooter">
		<p>Copyright &copy; <a href="#" title="vinoblyMainWebsite"></a>http://www.vinobly.com/</p>
	</footer>

</body>

</html>

