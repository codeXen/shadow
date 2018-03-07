{extends '../layouts/app.dwoo.php'}
{block 'content'}
	<div class="center col-md-6">
		<form action="{url('backend/login')}" method="post">
			<div class="form-group">
				<input type="text" name="username" placeholder="Username" class="form-control">
			</div>
			<div class="form-group">
				<input type="password" name="password" placeholder="Password" class="form-control">
			</div>
			<button class="btn btn-default">Login</button>
		</form>
	</div>
{/block}