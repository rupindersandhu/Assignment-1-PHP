<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Assignment1Comp4711</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3 class="text-center">
				Game Stocks
			</h3>
			<nav class="navbar navbar-default navbar-inverse" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Home</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
					</ul>
					
				</div>
				
			</nav>
			
			<div class = "container-fluid">
				<img class = "img-rounded center-block" alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">
			</div>
			
			<div class="row">
				<div class="col-md-6">
				<h3>
				Stock
				</h3>
					<table class="table">
				<thead>
					<tr>
						<th>
							Code
						</th>
						<th>
							Name
						</th>
						<th>
							Category
						</th>
						<th>
							Value
						</th>
					</tr>
				</thead>
				<tbody>
				{stock}
					<tr class=" {row_class1} ">
						<td>
							{Code}
						</td>
						<td>
							{Name}
						</td>
						<td>
							{Category}
						</td>
						<td>
							{Value}
						</td>
					</tr>
				{/stock}
				</tbody>
			</table>
				</div>
				
				<div class="col-md-6">
				<h3>
				Players
				</h3>
					<table class="table">
				<thead>
					<tr>
						<th>
							Player
						</th>
						<th>
							Cash
						</th>
					</tr>
				</thead>
				<tbody>
				{player}
					<tr class=" {row_class1} ">
						<td>
							{player}
						</td>
						<td>
							{cash}
						</td>
					</tr>
				{/player}
				</tbody>
			</table>
				</div>
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>