<!DOCTYPE html>
<html>
	<head>
		<title>Papa Parse Player</title>
		 {{ csrf_field() }}
		<meta charset="utf-8">
		<link rel="stylesheet" href="/assets/css/player.css">
		<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script> -->
		<script src="/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
		<script src="/assets/js/csv/papaparse.js"></script>
		<script src="/assets/js/csv/player2.js"></script>
	</head>
	<body>
		<h1><a href="http://papaparse.com">Papa Parse</a> Player</h1>

		<div class="grid-container">

			<div class="grid-25">
				<label><input type="checkbox" id="download"> Download</label>
				<label><input type="checkbox" id="stream"> Stream</label>
				<label><input type="checkbox" id="chunk"> Chunk</label>
				<label><input type="checkbox" id="worker"> Worker thread</label>
				<label><input type="checkbox" id="header"> Header row</label>
				<label><input type="checkbox" id="dynamicTyping"> Dynamic typing</label>
				<label><input type="checkbox" id="fastmode"> Fast mode</label>
				<label><input type="checkbox" id="skipEmptyLines"> Skip empty lines</label>
				<label><input type="checkbox" id="step-pause"> Pause on step</label>
				<label><input type="checkbox" id="print-steps"> Log each step/chunk</label>
				
				<label>Delimiter: <input type="text" size="5" placeholder="auto" id="delimiter"> <a href="javascript:" id="insert-tab">tab</a></label>

				Line Endings: 

				<label style="display: inline;"><input type="radio" name="newline" id="newline-auto" checked>Auto</label>
				<label style="display: inline;"><input type="radio" name="newline" id="newline-n">\n</label>
				<label style="display: inline;"><input type="radio" name="newline" id="newline-r">\r</label>
				<label style="display: inline;"><input type="radio" name="newline" id="newline-rn">\r\n</label>				
				
				<label>Preview: <input type="number" min="0" max="1000" placeholder="default" id="preview"></label>
				
				<label>Encoding: <input type="text" id="encoding" placeholder="default" size="10"></label>
				
				<label>Comment char: <input type="text" size="5" maxlength="1" placeholder="default" id="comments"></label>
				
				<label>Papa.LocalChunkSize: <input type="number" min="0" placeholder="default" id="localChunkSize"></label>
				
				<label>Papa.RemoteChunkSize: <input type="number" min="0" placeholder="default" id="remoteChunkSize"></label>
			</div>

			<div class="grid-75 text-center">

				<textarea id="input" placeholder="Input">Column 1,Column 2,Column 3,Column 4
1-1,1-2,1-3,1-4
2-1,2-2,2-3,2-4
3-1,3-2,3-3,3-4
40,41,42,43
"Quoted field",No quotes,"Foo","bar",extra
"Field quoted with
line break"</textarea>
		
				<br>
				<b>or</b>
				<br>

				<input type="file" id="files" multiple>
			
				<br><br>

				<button id="submit-parse">Parse</button>
				&nbsp;
				<button id="submit-unparse">Unparse</button>

				<br><br>

				<i>Open the Console in your browser's inspector tools to see results.</i>
			</div>

		</div>
	</body>
</html>