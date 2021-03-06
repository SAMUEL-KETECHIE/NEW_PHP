<?php 
session_start();

if(!isset($_SESSION["uid"])){
	header("location: index.php");
}
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>WENDOLIN SUPERMARKET</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/wenstrap.css" />
		
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>		
		
		
	</head>
<body >
		<div class="container-fluid" style="margin-bottom:70px;" >
			<nav class="navbar navbar-inverse navbar-fixed-top " role="navigation" >
				<div class="navbar-header">
					<a class="navbar-brand" style="margin-right:50px" >WenMart</a>
				</div>
				<button class="navbar-toggle btn btn-primary" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav">
						<li class="active" ><a href="index.php?home"><span class="glyphicon glyphicon-home"></span> Home</a></li>&nbsp;&nbsp;
						
						
						<li class="active dropdown"  id="get_nav_Category">
						</li>
						
						
						
						<li class="active dropdown"    id="get_nav_brand">
						</li>
						
						<li>
							<form class="navbar-form" role="search">
								<input class="form-control" type="text" id="txt_search" placeholder="Search..."></input>
								<button class="btn btn-info" type="submit" id="btn_search" ><span class="glyphicon glyphicon-search"></span></button>
							</form>
						</li>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<li class="active navbar-right pull-right">
							<a href="#" class="dropdown-toggle" id="drop" data-toggle="dropdown"> <?php echo "Hello, <br>". $_SESSION["name"]; ?> <span class="caret"></span></a>
							
								<ul class="dropdown-menu" aria-labelledby="drop">
									<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a></li>
									<li class="divider"></li>
									<li><a href="#"><span class="glyphicon glyphicon-lock"></span> Change Password</a></li>
									<li class="divider"></li>
									<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
								</ul>
							
						</li>
						&nbsp;&nbsp;&nbsp;&nbsp;

						<li class="active dropdown navbar-right pull-right">
							<a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span> Cart <span class="badge" id="badge"></span></a>
							<div class="dropdown-menu" style="width:700px;">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<div class="row">
											<div class="col-md-2">SI. No</div>
											<div class="col-md-5">Product Name</div>
											<div class="col-md-2">Quantity</div>
											<div class="col-md-3">Price(GH¢)</div>
											
										</div>
									</div>
									<div id="cart_item">
									
										<!--
											<div class="panel-body">
											
												<div class="row">
													<div class="col-md-2">1</div>
													<div class="col-md-4">Samsung Galaxy Tab 3 16g 10.1inch</div>
													<div class="col-md-2">2</div>
													<div class="col-md-2">1300</div>
													
												</div>
											</div>
											
										-->
										</div>
										
										<div class="panel-footer">
											Find out more about your <a href='cart.php' class='btn btn-info'>Cart Items</a>
										</div>
									
									
								</div>								
							</div>
						</li>
					</ul>
					
				</div>
			</nav>
		</div><!-- END OF NAVIGATION BAR -->
<p><br></p>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg"><!-- Dont forget here please -->
			<!--
				<div class="alert alert-danger alert-dismissable" style="position: fixed;z-index:10">
					<button class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				</div>
			-->
			</div>
			<div class="col-md-2"></div>
		
		</div>
		<div class="carousel slide" id="slider"  style="margin:20px;">
			<ol class="carousel-indicators">
				<li data-target="#slider" data-slide-to="0" class="active"></li>
				<li data-target="#slider" data-slide-to="1"></li>
				<li data-target="#slider" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img img-responsive " src="img/men_fashion.jpg" alt="Men's Fashion" />
				</div>
				
				<div class="item">
					<img class="img img-responsive" src="img/sandals_casual.jpg" alt="Men's Fashion" />
				</div>
				
				<div class="item">
					<img class="img img-responsive" src="img/shoe_slide.jpg" alt="Men's Fashion" />
				</div>
			</div>
		</div>
		
		<div style="margin-bottom:10px">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-2">
					<div id="getCategory">	
					</div>
					<!-- <ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><h4>Categories</h4></a></li>
						
						<li><a href="#">category</a></li>
						<li><a href="#">category</a></li>
						<li><a href="#">category</a></li>
						<li><a href="#">category</a></li>
						<li><a href="#">category</a></li>
						<li><a href="#">category</a></li>
						
					</ul> -->
					<div id="getBrand">	
					</div>
					<!--<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#"><h4>Brands</h4></a></li>
						
						<li><a href="#">brand</a></li>
						<li><a href="#">brand</a></li>
						<li><a href="#">brand</a></li>
						<li><a href="#">brand</a></li>
						<li><a href="#">brand</a></li>
						<li><a href="#">brand</a></li>
						
					</ul> -->
				</div>
				
				<div class="col-md-9">
					
					<div class="panel panel-info">
						<div class="panel-heading" style="text-align:center"><h4><b>PRODUCTS</b></h4></div>
							<div class="panel-body ">
								<div id="get_product">
								</div>
								<!--
								<div class="col-md-4">
									<div class="panel panel-info">
										<div class="panel-heading">Product Title Here</div>
											<div class="panel-body">
												<img class="img img-responsive" src="product_img/dress.jpg" alt="Image Here" style="height:250px; width:200px"/>
											</div>
											<div class="panel-body desc">
												Description goes here!
											</div>
											
										<div class="panel-footer">GHc 0.00
											<button class="btn btn-danger btn-xs" style="float: right">AddToCart</button>
										</div>		
									</div>
								</div>
								-->
							
							</div>
					</div>
					
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<center>
						<ul class="pagination" id="pageno">
							<!-- <li ><a href='#' id='page'>1</a></li> -->
						</ul>
					</center>
				</div>				
			</div>
		</div>
		
		
	</div>
	<div class="navbar panel-footer navbar-bottom">
		Copyright &copy; 2017,WenMart Gh. Alrights reserved. Powered by WenSoft Inc. Gh.
	</div><!-- end of footer -->
</body>
</html>