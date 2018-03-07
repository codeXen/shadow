{extends '../layouts/app.dwoo.php'}

{block 'content'}
	<div class="content col-md-12">
		<a href="{url('backend/products/create')}" class="btn btn-info" style="margin-bottom: 10px;">Add Product</a>
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
				{foreach $products product}
					<tr>
						<td>{$product->image}</td>
						<td>{$product->title}</td>
						<td>{$product->price}</td>
						<td>{truncate $product->description 30 middle=true}</td>
						<td>
							<a href="{url('backend/products/$product->id/edit')}" class="btn btn-primary btn-sm">Edit</a>
							<a href="{url('backend/products/$product->id/delete')}" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-sm">Delete</a>
						</td>
					</tr>
				{/foreach}
				</tbody>
			</tbody>
		</table>
	</div> <!-- content -->
{/block}