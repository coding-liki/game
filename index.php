<?php

echo <<<HTML
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Песочница js</title>
</head>
<body>
	<div class="container">
		<div id="world">
		</div>
		<div id="controls">
			<div class="js-controls">
				<textarea id="js_code"></textarea>
				<button id="evalute_js">Выполнить</button>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$("#evalute_js").click(function(){
			var code = $("#js_code").val();
			eval(code);
		});
	});
	</script>
</body>
</html>
HTML;

?>
