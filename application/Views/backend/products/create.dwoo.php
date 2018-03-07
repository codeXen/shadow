{extends '../layouts/app.dwoo.php'}

{block 'content'}
	<div class="col-md-12">
		<div class="content">
			<form action="{url('backend/products/store')}" method="POST">
				{include 'partials/fields.dwoo.php'}
				<button class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
{/block}