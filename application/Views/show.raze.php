{LAYOUT: ('partials/layout')}

{START: ('styles')}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
{END}

{START: ('body')}
	<div>
		<p>This is body</p>
		<p>{username} {age}</p>

		{IF: 1 == 1 && '{username}' == 'Ruju Bajracharya'}
			<p>Inside condition</p>
		{ENDIF}
	</div>
{END}

{START: ('scripts')}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
{END}

<!-- {LOOP:products}
	<p>{title}</p>
{ENDLOOP:products} -->