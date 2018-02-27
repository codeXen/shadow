{extends '../layouts/app.dwoo.php'}

{block 'content'}
	<div class="content" style="margin-top: 10px;">
		<form action="{url('backend/products/store')}" method="POST">
			{include 'partials/fields.dwoo.php'}
			<button class="btn btn-default">Submit</button>
		</form>
	</div>
{/block}