<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>
	* {
		margin: 0;
		padding: 0;
		border: none;
	}

	html {
		background-color: #333;

		color: aliceblue;
	}

	.ct {
		align-items: center;
		text-align: center;
		width: 76%;
		margin-left: 12%;
		background-color: #666;
	}

	footer {
		text-align: center;
		bottom: 10px;
		margin-top: 10px;
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	}

	h1 {
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		margin-top: 40px;
		margin-bottom: 40px;
	}

	textarea {
		width: 80%;
		background-color: #333;
		resize: none;
		margin-bottom: 10px;
		color: aliceblue;
		border-radius: 5px;
		padding: 5px;
	}

	button {
		border-radius: 5px;
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		width: 76%;
		background-color: #333;
		resize: none;
		margin-bottom: 30px;
		padding: 2%;
		color: aliceblue;
		font-size: 100%;
	}

	span {
		color: yellow;
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		font-size: 30px;
		display: none;
	}
</style>

<body>
	<div class="ct">
		<h1>JS Obfuscator</h1>
		<span id="span"></span>
		<textarea name="" id="t" cols="30" rows="10" placeholder="Paste your code here..."></textarea>
		<br>
		<button id="b">Start</button>
		<button id="d">Decript (beta)</button>
	</div>
</body>
<script>


	document.getElementById('b').addEventListener('click', () => {
		document.getElementById('span').style.display = 'none';
		if (document.getElementById('t').value.includes(';')) {
			if (document.getElementById('t').value.includes('BresoDEV')) 
				{
					document.getElementById('span').textContent = 'Code allready obfuscated';
				document.getElementById('span').style.display = 'block';
				}
				else{
					document.getElementById('t').value = cr(document.getElementById('t').value);
				}
		}
		else {
			document.getElementById('span').textContent = 'Fix your code,";" missing';
			document.getElementById('span').style.display = 'block';
		}
	});

	document.getElementById('d').addEventListener('click', () => {
		document.getElementById('span').style.display = 'none';

		var txt = document.getElementById('t').value;
		if (txt.includes('BresoDEV')) {
			var i = 0;
			while (i !== 2000) {
				txt = dr(txt);
				i++
			}
			document.getElementById('t').value = txt;
		}
		else {
			document.getElementById('span').textContent = 'Invalid code';
			document.getElementById('span').style.display = 'block';
		}

	});



	//document.getElementById('aa').addEventListener('click', () => {
	//	alert('best');
	//});



	function cr(st) {


		if (st.includes(';')) {
			st = st.replace(/;/g, ';' +
				'b = Math.pow(b, (b * 0xAB) / (b + 0xB) * Math.PI); ' +
				'_0b = Math.pow(Math.round(b), (b * 0xAB) / (b + 0xAB) * Math.PI); ' +
				'_0c = Math.pow(Math.round(_0b), (b * 0xAB) / (_0b + 0xAB) * Math.PI); ' +
				'' + '/*BresoDEV*/', true);
		}

		if (st.includes('{')) {
			st = st.replace(/{/g, '{' +
				'b = Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = (b * 0xAB) - (b + 0xAB) * Math.PI; ' +
				'b = b+Math.pow(b, (b * 0xAB) - (b + 0xB) * Math.PI); ' +
				'b = b+Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = b+Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = (b * 0xAB) - (b + 0xAB) * Math.PI; ' +
				'b = Math.pow(b, (b * 0xAB) - (b + 0xB) * Math.PI); ' +
				'_0c = Math.pow(Math.round(_0b), (b * 0xAB) - (_0b + 0xAB) * Math.PI); ' +
				'b = b+Math.pow(b, (b * 0xAB) - (b + 0x2) * Math.PI); ' +
				'b = b+Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = b+Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = (b * 0xAB) - (b + 0xAB) * Math.PI; ' +
				'b = Math.pow(b, (b * 0xAB) - (b + 0xB) * Math.PI); ' +
				'_0c = Math.pow(Math.round(_0b), (b * 0xAB) - (_0b + 0xAB) * Math.PI); ' +
				'b = b+Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = b+Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI);' +
				'b = b+Math.pow(b, (b * 0xAB) - (b + 0x2) * Math.PI); ' +
				'b = b+Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = b+Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'_0c = Math.pow(Math.round(_0b), (b * 0xAB) - (_0b + 0xAB) * Math.PI); ' +
				'b = (b * 0xAB) - (b + 0xAB) * Math.PI; ' +
				'b = Math.pow(b, (b * 0xAB) - (b + 0xB) * Math.PI); ' +
				'b = Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = (b * 0xAB) - (b + 0xAB) * Math.PI; ' +
				'b = Math.pow(b, (b * 0xAB) - (b + 0xB) * Math.PI); ' +
				'_0c = Math.pow(Math.round(_0b), (b * 0xAB) - (_0b + 0xAB) * Math.PI); ' +
				'b = Math.pow(b, (b * 0xAB) - (b + 0x2) * Math.PI); ' +
				'b = Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = (b * 0xAB) - (b + 0xAB) * Math.PI; ' +
				'b = b+Math.pow(b, (b * 0xAB) - (b + 0xB) * Math.PI); ' +
				'b = b+Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = b+Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'_0c = Math.pow(Math.round(_0b), (b * 0xAB) - (_0b + 0xAB) * Math.PI); ' +
				'b = Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'_0c = Math.pow(Math.round(_0b), (b * 0xAB) - (_0b + 0xAB) * Math.PI); ' +
				'b = b+Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = b+Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = (b * 0xAB) - (b + 0xAB) * Math.PI; ' +
				'b = Math.pow(b, (b * 0xAB) - (b + 0xB) * Math.PI);' +
				'b = b+Math.pow(b, (b * 0xAB) - (b + 0x2) * Math.PI); ' +
				'b = b+Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = b+Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = (b * 0xAB) - (b + 0xAB) * Math.PI; ' +
				'b = b+Math.pow(b, (b * 0xAB) - (b + 0xB) * Math.PI);' +
				'b = b+Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'b = b+Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'_0c = Math.pow(Math.round(_0b), (b * 0xAB) - (_0b + 0xAB) * Math.PI); ' +
				'/*BresoDEV*/');
		}


		if (st.includes('()')) {
			st = st.replace('()', '(/*BresoDEV*/)');
		}
		if (st.includes('NaN')) {
			st = st.replace('NaN', '');
		}

		if (st.includes('console.log')) {
			st = st.replace('console.log', '' +
				'b = Math.pow(b, (b * 0xAB) - (b + 0xB) * Math.PI); ' +
				'_0b = Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'_0c = Math.pow(Math.round(_0b), (b * 0xAB) - (_0b + 0xAB) * Math.PI); console.log');
		}
		if (st.includes('alert(')) {
			st = st.replace('alert(', '' +
				'b = Math.pow(b, (b * 0xAB) - (b + 0xB) * Math.PI); ' +
				'_0b = Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI); ' +
				'_0c = Math.pow(Math.round(_0b), (b * 0xAB) - (_0b + 0xAB) * Math.PI); alert(');
		}



		st = 'var b = Math.pow(b, (b * 0xAB) + (b + 0xB) * Math.PI);' +
			'var _0b = Math.pow(Math.round(b), (b * 0xAB) + (b + 0xAB) * Math.PI);' +
			'var _0c = Math.pow(Math.round(_0b), (b * 0xAB) + (_0b + 0xAB) * Math.PI);' +
			'var _0c = Math.pow(Math.round(_0b), (b * 0xAB) + (_0b + 0xAB) * Math.PI);' +
			'var _03 = Math.pow(Math.round(_0c), (b * 0xAB) + (_0b + 0xAB) * Math.PI);' +
			'console.error("JS Obfuscated by BresoDEV");' + st;
		return st;



	}

	//-----------------------------------------------------------


	function dr(st) {


		if (st.includes('var b = Math.pow(b, (b * 0xAB) + (b + 0xB) * Math.PI);')) {
			st = st.replace('var b = Math.pow(b, (b * 0xAB) + (b + 0xB) * Math.PI);', '');
		}
		if (st.includes('var _0b = Math.pow(Math.round(b), (b * 0xAB) + (b + 0xAB) * Math.PI);')) {
			st = st.replace('var _0b = Math.pow(Math.round(b), (b * 0xAB) + (b + 0xAB) * Math.PI);', '');
		}
		if (st.includes('var _0c = Math.pow(Math.round(_0b), (b * 0xAB) + (_0b + 0xAB) * Math.PI);')) {
			st = st.replace('var _0c = Math.pow(Math.round(_0b), (b * 0xAB) + (_0b + 0xAB) * Math.PI);', '');
		}
		if (st.includes('var _0c = Math.pow(Math.round(_0b), (b * 0xAB) + (_0b + 0xAB) * Math.PI);')) {
			st = st.replace('var _0c = Math.pow(Math.round(_0b), (b * 0xAB) + (_0b + 0xAB) * Math.PI);', '');
		}
		if (st.includes('var _03 = Math.pow(Math.round(_0c), (b * 0xAB) + (_0b + 0xAB) * Math.PI);')) {
			st = st.replace('var _03 = Math.pow(Math.round(_0c), (b * 0xAB) + (_0b + 0xAB) * Math.PI);', '');
		}
		if (st.includes('console.error("JS Obfuscated by BresoDEV");')) {
			st = st.replace('console.error("JS Obfuscated by BresoDEV");', '');
		}
		if (st.includes('b = Math.pow(b, (b * 0xAB) / (b + 0xB) * Math.PI);')) {
			st = st.replace('b = Math.pow(b, (b * 0xAB) / (b + 0xB) * Math.PI);', '');
		}
		if (st.includes('_0b = Math.pow(Math.round(b), (b * 0xAB) / (b + 0xAB) * Math.PI);')) {
			st = st.replace('_0b = Math.pow(Math.round(b), (b * 0xAB) / (b + 0xAB) * Math.PI);', '');
		}
		if (st.includes('_0c = Math.pow(Math.round(_0b), (b * 0xAB) / (_0b + 0xAB) * Math.PI);')) {
			st = st.replace('_0c = Math.pow(Math.round(_0b), (b * 0xAB) / (_0b + 0xAB) * Math.PI);', '');
		}
		if (st.includes('/*BresoDEV*/')) {
			st = st.replace('/*BresoDEV*/', '');
		}
		if (st.includes('b = Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI);')) {
			st = st.replace('b = Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI);', '');
		}
		if (st.includes('b = Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI);')) {
			st = st.replace('b = Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI);', '');
		}
		if (st.includes('b = (b * 0xAB) - (b + 0xAB) * Math.PI;')) {
			st = st.replace('b = (b * 0xAB) - (b + 0xAB) * Math.PI;', '');
		}
		if (st.includes('b = b + Math.pow(b, (b * 0xAB) - (b + 0xB) * Math.PI);')) {
			st = st.replace('b = b + Math.pow(b, (b * 0xAB) - (b + 0xB) * Math.PI);', '');
		}

		if (st.includes('b = b + Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI);')) {
			st = st.replace('b = b + Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI);', '');
		}
		if (st.includes('b = b + Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI);')) {
			st = st.replace('b = b + Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI);', '');
		}
		if (st.includes('b = b+Math.pow(b, (b * 0xAB) - (b + 0xB) * Math.PI);')) {
			st = st.replace('b = b+Math.pow(b, (b * 0xAB) - (b + 0xB) * Math.PI);', '');
		}
		if (st.includes('b = b+Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI);')) {
			st = st.replace('b = b+Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI);', '');
		}
		if (st.includes('b = b+Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI);')) {
			st = st.replace('b = b+Math.pow(b, (b * 0xAB) - (b + 0xAB) * Math.PI);', '');
		}
		if (st.includes('b = Math.pow(b, (b * 0xAB) - (b + 0xB) * Math.PI);')) {
			st = st.replace('b = Math.pow(b, (b * 0xAB) - (b + 0xB) * Math.PI);', '');
		}

		if (st.includes('_0c = Math.pow(Math.round(_0b), (b * 0xAB) - (_0b + 0xAB) * Math.PI);')) {
			st = st.replace('_0c = Math.pow(Math.round(_0b), (b * 0xAB) - (_0b + 0xAB) * Math.PI);', '');
		}
		if (st.includes('b = b+Math.pow(b, (b * 0xAB) - (b + 0x2) * Math.PI);')) {
			st = st.replace('b = b+Math.pow(b, (b * 0xAB) - (b + 0x2) * Math.PI);', '');
		}
		if (st.includes('b = b+Math.pow(b, (b * 0xAB) - (b + 0x2) * Math.PI);')) {
			st = st.replace('b = b+Math.pow(b, (b * 0xAB) - (b + 0x2) * Math.PI);', '');
		}
		if (st.includes('b = Math.pow(b, (b * 0xAB) - (b + 0x2) * Math.PI);')) {
			st = st.replace('b = Math.pow(b, (b * 0xAB) - (b + 0x2) * Math.PI);', '');
		}
		if (st.includes('c = Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI);')) {
			st = st.replace('c = Math.pow(Math.round(b), (b * 0xAB) - (b + 0xAB) * Math.PI);', '');
		}
		if (st.includes('_0')) {
			st = st.replace('_0', '');
		}
		if (st.includes('  ')) {
			st = st.replace('  ', ' ');
		}
		if (st.includes('c = Math.pow(Math.round(b), (b * 0xAB) / (b + 0xAB) * Math.PI);')) {
			st = st.replace('c = Math.pow(Math.round(b), (b * 0xAB) / (b + 0xAB) * Math.PI);', '');
		}
		if (st.includes('b = Math.pow(Math.round(b), (b * 0xAB) / (b + 0xAB) * Math.PI);')) {
			st = st.replace('b = Math.pow(Math.round(b), (b * 0xAB) / (b + 0xAB) * Math.PI);', '');
		}
		if (st.includes('b = b + Math.pow(b, (b * 0xAB) - (b + 0x2) * Math.PI);')) {
			st = st.replace('b = b + Math.pow(b, (b * 0xAB) - (b + 0x2) * Math.PI);', '');
		}
		if (st.includes('b = b + Math.pow(b, (b * 0xAB) - (b + 0x2) * Math.PI);')) {
			st = st.replace('b = b + Math.pow(b, (b * 0xAB) - (b + 0x2) * Math.PI);', '');
		}
		if (st.includes('b = b + Math.pow(b, (b * 0xAB) - (b + 0x2) * Math.PI);')) {
			st = st.replace('b = b + Math.pow(b, (b * 0xAB) - (b + 0x2) * Math.PI);', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}

		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}
		if (st.includes('')) {
			st = st.replace('', '');
		}



		return st;



	}


</script>
<footer>
	Created by BresoDEV
</footer>

</html>