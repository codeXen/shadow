<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ;
'';// checking for modification in file:../application/Views/backend/products/../layouts/app.dwoo.php
if (!("1519853171" == filemtime('../application/Views/backend/products/../layouts/app.dwoo.php'))) { ob_end_clean(); return false; };?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shadow CRUD Example</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    
</head>

<body>
    <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar</a>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo url('backend/products');?>">Products <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="<?php echo url('backend/logout');?>">Logout</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="" style="margin-top: 100px;">
        <div class="container">
	        <!-- Example row of columns -->
	        <div class="row">
	        		<div class="col-md-12">
		<div class="content">
			<form action="<?php echo url('backend/products/'.$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["product"]) ? $this->scope["product"]:null), true).'/update');?>" method="post">
				<input type="hidden" name="_method" value="patch">
				
				<div class="row">
					<div class="col-md-9">
						<div class="form-group">
							<label for="">Title</label>
							<input type="text" name="title" value="<?php echo $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["product"], false);?>" class="form-control" placeholder="Title">
						</div>	

						<div class="form-group">
							<label for="">Description</label>
							<textarea name="description" rows="8" class="form-control" placeholder="Description"><?php echo $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'description',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["product"], false);?></textarea>
						</div>
					</div> <!-- col -->
					<div class="col-md-3">
						<div class="form-group">
							<label for="">Price</label>
							<input type="number" name="price" value="<?php echo $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'price',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["product"], false);?>" class="form-control" placeholder="Price">
						</div>

						<div class="form-group">
							<label for="">Image</label>
							<input type="text" name="image" value="<?php echo $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'image',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["product"], false);?>" class="form-control">
						</div>	
					</div> <!-- col -->
				</div> <!-- row -->

				<button class="btn btn-default">Update</button>
			</form>
		</div>
	</div>
	        </div>
	        <hr>
	        <footer>
	            <p>&copy; Shadow <?php echo date('Y');?></p>
	        </footer>
	    </div>
    </div>
    
    <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
   
</body>
</html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>