<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class="row">
	<div class="col-md-9">
		<div class="form-group">
			<label for="">Title</label>
			<input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo input()->get('title');?>">

			<?php if (((isset($this->scope["errors"]["title"]) ? $this->scope["errors"]["title"]:null) !== null)) {
?>

				<span class="help-block text-danger"><?php echo $this->scope["errors"]["title"];?></span>
			<?php 
}?>

		</div>	

		<div class="form-group">
			<label for="">Description</label>
			<textarea name="description" rows="8" class="form-control" placeholder="Description"><?php echo input()->get('description');?></textarea>
			
			<?php if (((isset($this->scope["errors"]["description"]) ? $this->scope["errors"]["description"]:null) !== null)) {
?>

				<span class="help-block text-danger"><?php echo $this->scope["errors"]["description"];?></span>
			<?php 
}?>

		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group">
			<label for="">Price</label>
			<input type="number" name="price" class="form-control" placeholder="Price" value="<?php echo input()->get('price');?>">
			
			<?php if (((isset($this->scope["errors"]["price"]) ? $this->scope["errors"]["price"]:null) !== null)) {
?>

				<span class="help-block text-danger"><?php echo $this->scope["errors"]["price"];?></span>
			<?php 
}?>

		</div>

		<div class="form-group">
			<label for="">Image</label>
			<input type="file" name="image" class="form-control">
			
			<?php if (((isset($this->scope["errors"]["image"]) ? $this->scope["errors"]["image"]:null) !== null)) {
?>

				<span class="help-block text-danger"><?php echo $this->scope["errors"]["image"];?></span>
			<?php 
}?>

		</div>	
	</div>
</div>
<?php  /* end template body */
return $this->buffer . ob_get_clean();
?>