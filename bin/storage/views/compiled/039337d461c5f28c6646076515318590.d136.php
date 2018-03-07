<?php
/* template head */
if (class_exists('Dwoo\Plugins\Functions\PluginTruncate')===false)
	$this->getLoader()->loadPlugin('PluginTruncate');
/* end template head */ ob_start(); /* template body */ ;
'';// checking for modification in file:../application/Views/backend/products/../layouts/app.dwoo.php
if (!("1519853468" == filemtime('../application/Views/backend/products/../layouts/app.dwoo.php'))) { ob_end_clean(); return false; };?><!DOCTYPE html>
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
        <a class="navbar-brand" href="<?php echo url('');?>">Shadow</a>
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
        </div>
    </nav>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="" style="margin-top: 100px;">
        <div class="container">
	        <!-- Example row of columns -->
	        <div class="row">
	        		<div class="content col-md-12">
		<a href="<?php echo url('backend/products/create');?>" class="btn btn-info" style="margin-bottom: 10px;">Add Product</a>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Image</th>
					<th>Title</th>
					<th>Price</th>
					<th>Description</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<tbody>
				<?php 
$_fh0_data = (isset($this->scope["products"]) ? $this->scope["products"] : null);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['product'])
	{
/* -- foreach start output */
?>

					<tr>
						<td><?php echo $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'image',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["product"], false);?></td>
						<td><?php echo $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'title',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["product"], false);?></td>
						<td><?php echo $this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'price',  ),  3 =>   array (    0 => '',    1 => '',  ),), $this->scope["product"], false);?></td>
						<td><?php echo $this->classCall('Dwoo\Plugins\Functions\Plugintruncate', 
                        array($this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'description',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["product"]) ? $this->scope["product"]:null), true), 30, '...', false, true));?></td>
						<td>
							<a href="<?php echo url('backend/products/'.$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["product"]) ? $this->scope["product"]:null), true).'/edit');?>" class="btn btn-primary btn-sm">Edit</a>
							<a href="<?php echo url('backend/products/'.$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["product"]) ? $this->scope["product"]:null), true).'/delete');?>" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-sm">Delete</a>
						</td>
					</tr>
				<?php 
/* -- foreach end output */
	}
}?>

				</tbody>
			</tbody>
		</table>
	</div> <!-- content -->
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