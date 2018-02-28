<?php
/* template head */
if (class_exists('Dwoo\Plugins\Functions\PluginTruncate')===false)
	$this->getLoader()->loadPlugin('PluginTruncate');
/* end template head */ ob_start(); /* template body */ ;
'';// checking for modification in file:../application/Views/backend/products/../layouts/app.dwoo.php
if (!("1519833055" == filemtime('../application/Views/backend/products/../layouts/app.dwoo.php'))) { ob_end_clean(); return false; };?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shadow Backend Test</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
	<style>
		.content {
			margin-top: 10px;
		}
	</style>
	
</head>
<body>
	<div class="container">
			<div class="content">
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
							<a href="<?php echo url('backend/products/'.$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["product"]) ? $this->scope["product"]:null), true).'/edit');?>">edit</a>
							<a href="<?php echo url('backend/products/'.$this->readVarInto(array (  1 =>   array (    0 => '->',  ),  2 =>   array (    0 => 'id',  ),  3 =>   array (    0 => '',    1 => '',  ),), (isset($this->scope["product"]) ? $this->scope["product"]:null), true).'/delete');?>">delete</a>
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
	
	
</body>
</html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>