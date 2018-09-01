{LAYOUT: ('partials/layout')}

{START: ('styles')}
	<link rel="stylesheet" href="test.css">
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
	<script src="test.js"></script>
{END}