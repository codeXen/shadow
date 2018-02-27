<div class="row">
	<div class="col-md-9">
		<div class="form-group">
			<label for="">Title</label>
			<input type="text" name="title" class="form-control" placeholder="Title" value="{input()->get('title')}">

			{if isset($errors.title)}
				<span class="help-block text-danger">{$errors.title}</span>
			{/if}
		</div>	

		<div class="form-group">
			<label for="">Description</label>
			<textarea name="description" rows="8" class="form-control" placeholder="Description">{input()->get('description')}</textarea>
			
			{if isset($errors.description)}
				<span class="help-block text-danger">{$errors.description}</span>
			{/if}
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group">
			<label for="">Price</label>
			<input type="number" name="price" class="form-control" placeholder="Price" value="{input()->get('price')}">
			
			{if isset($errors.price)}
				<span class="help-block text-danger">{$errors.price}</span>
			{/if}
		</div>

		<div class="form-group">
			<label for="">Image</label>
			<input type="file" name="image" class="form-control">
			
			{if isset($errors.image)}
				<span class="help-block text-danger">{$errors.image}</span>
			{/if}
		</div>	
	</div>
</div>
