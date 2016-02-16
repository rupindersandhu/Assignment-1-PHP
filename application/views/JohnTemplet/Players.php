 
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
					<img class="img-rounded" alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/">
				</div>
				<div class="col-md-6">
					<div class="page-header">
						<h1>
							Player Information
						</h1>
					</div>
					<p>
						{Player Information}
					</p>
				</div>
			</div>
			<div class="page-header">
				<h1>
					Player Broker History
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
							{trans}
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
