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
				Game Stock
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
			<div class="row">
				<div class="col-md-6">
					<div class="page-header">
						<h1>
							Stock Information
						</h1>
					</div>
					<p>
						{Stock Infromation}
					</p>
				</div>
				<div class="col-md-6">
					<div class="btn-group">
						 
						<button class="btn btn-default">
							Action
						</button> 
						<button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<li>
								<a href="#">Action</a>
							</li>
							<li class="disabled">
								<a href="#">Another action</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="#">Something else here</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="page-header">
				<h1>
					Stock Price Movement
				</h1>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>
							Datetime
						</th>
						<th>
							Code
						</th>
						<th>
							Action
						</th>
						<th>
							Amount
						</th>
					</tr>
				</thead>
				<tbody>
				{movements}
					<tr class=" {row_class1} ">
						<td>
							{datetime}
						</td>
						<td>
							{code}
						</td>
						<td>
							{action}
						</td>
						<td>
							{amount}
						</td>
					</tr>
				{/movements}	
				</tbody>
			</table>
			<div class="page-header">
				<h1>
					Stock Transaction History
				</h1>
			</div>
			<table class="table">
				<thead>
					<tr>
						<th>
							DateTime
						</th>
						<th>
							Player
						</th>
						<th>
							Stock
						</th>
						<th>
							Trans
						</th>
						<th>
							Quantity
						</th>
					</tr>
				</thead>
				<tbody>
				{transactions}
					<tr>
						<td>
							{datetime}
						</td>
						<td>
							{player}
						</td>
						<td>
							{stock}
						</td>
						<td>
							{quantity}
						</td>
					</tr>
				{/transactions}
				</tbody>
			</table>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>