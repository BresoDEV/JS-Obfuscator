<?php

function HTML_begin($margenEsquerda=10)
{
    echo '
    <!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BresoDEV</title>
</head>
<style>
	*{
		word-wrap: break-word;
		border-radius: 4px;
		margin: 0;
		padding: 0;
        border:none;
		font-family: "Lucida Sans",  Geneva, Verdana, sans-serif;
		color: yellow;
		font-size:50px;
	}
	html{
		background-color: #333;
		font-size:100px;
		font-size:100px;
	}
	.ct{
		margin-top: 50px;
		margin-left: 10%;
		width: 75%;
		background-color: #666;
		padding: 10px;
		align-items: center;
		text-align: center;
		align-content: center;
	}
	.sucesso{
		padding: 5px;
		width: 80%;
		background-color: rgb(100, 200, 100);
		color: aliceblue;
		margin-top: 5px;
		margin-bottom: 5px;
	}
	.erro{
		padding: 5px;
		width: 80%;
		background-color: rgb(200, 100, 100);
		color: aliceblue;
		margin-top: 5px;
		margin-bottom: 5px;
	}
	.alerta{
		padding: 5px;
		width: 80%;
		background-color: orange;
		color: black;
		margin-top: 5px;
		margin-bottom: 5px;
	}
	textarea,input{
		background-color: #333;
		color: aliceblue;
		width: 78%;
		resize: none;
		padding: 10px;
	}
</style>
<body>
	<div class="ct">
    ';
}

function HTML_close()
{
    echo '</div>
    </body>
    </html>';
}