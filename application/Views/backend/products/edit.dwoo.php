{extends '../layouts/app.dwoo.php'}

{block 'content'}
	<div class="content">
		<form action="{url('backend/products/$product->id/update')}" method="post">
			<input type="hidden" name="_method" value="patch">
			
			<div class="row">
				<div class="col-md-9">
					<div class="form-group">
						<label for="">Title</label>
						<input type="text" name="title" value="{$product->title}" class="form-control" placeholder="Title">
					</div>	

					<div class="form-group">
						<label for="">Description</label>
						<textarea name="description" rows="8" class="form-control" placeholder="Description">{$product->description}</textarea>
					</div>
				</div> <!-- col -->
				<div class="col-md-3">
					<div class="form-group">
						<label for="">Price</label>
						<input type="number" name="price" value="{$product->price}" class="form-control" placeholder="Price">
					</div>

					<div class="form-group">
						<label for="">Image</label>
						<input type="text" name="image" value="{$product->image}" class="form-control">
					</div>	
				</div> <!-- col -->
			</div> <!-- row -->

			<button class="btn btn-default">Update</button>
		</form>
	</div>
{/block}