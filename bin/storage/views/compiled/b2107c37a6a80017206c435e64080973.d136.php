<?php
/* template head */
if (class_exists('Dwoo\Plugins\Functions\PluginInclude')===false)
	$this->getLoader()->loadPlugin('PluginInclude');
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
			<div class="content" style="margin-top: 10px;">
		<form action="<?php echo url('backend/products/store');?>" method="POST">
			<?php echo $this->classCall('Dwoo\Plugins\Functions\Plugininclude', 
                        array('partials/fields.dwoo.php', null, null, null, '_root', null));?>

			<button class="btn btn-default">Submit</button>
		</form>
	</div>
	</div>
	
	
</body>
</html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>