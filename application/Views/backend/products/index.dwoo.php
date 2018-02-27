{extends '../layouts/app.dwoo.php'}

{block 'content'}
	<div class="content">
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
							<a href="{url('backend/products/$product->id/edit')}">edit</a>
							<a href="{url('backend/products/$product->id/delete')}">delete</a>
						</td>
					</tr>
				{/foreach}
				</tbody>
			</tbody>
		</table>
	</div> <!-- content -->
{/block}