<?php
	$stileInterno = "<style type = \"text/css\">
	
	body {
		background-image: url(\"sfondo.jpg\");
		background-attachment: fixed;
		text-align:center;
	}
	
	h1 {
		font-family: garamond;
		font-size: 300%;
		margin-top: 0px;
		color: #0B2E41;
	}
	
	h3 {
		color: #0B2E41;
		font-family: verdana;
	}
	
	h2 {
		color: #0B2E41;
		font-family: verdana;
		
	}
	
	th {
		color:#0B2E41;
	}
	
	.menu {
			position: fixed;
			font-size: 130%;
			left: 5%;
			top: 7%;
	}
	
	.menu a {
		text-decoration: none;
		color: dimgray;
	}
	
	.menu a:hover {
		color: black;
	}	
	
	ul {
	list-style-type: none;
	font-family: verdana;
	text-align: left;
	}
	
	li {
	padding: 10px;
	}
	
	li img {
		width: 20px;
		height:20px;
	}

	
	.post {
		text-align:left;
		position: absolute;
		left:25%;
		width:50%;
	}

	
	.ogniPost {
		padding-left: 2%;
		margin: 5%;
		height: 12%;
		background-color: rgba(255,255,255,0.8);
		color: dimgray;
		border-radius: 20px;
		border-top: solid;
		border-left:solid;
		border-width: 2px;
		border-color: dimgray;
		color: dimgray;
		font-family: courier new;
	}
	
	.destra{
		width: 20%;
		height: 10%;
		text-align: right;
		position:fixed;
		left: 75%;
		top: 0;
		
	}
	
	.spostato{
		width: 85%;
		padding-bottom: 5%;
		padding-top: 5%;
		padding-left:2%;
		word-wrap: break-word;
		font-family: garamond;
	}
	
	::selection {
		color: yellow;
	}
	
	.elimina {
		border: none;
		cursor: pointer;
		background:url(\"cancel.png\") no-repeat;
		background-size: 20px;
		color: rgba(0,0,0,0);
		float:right;
		margin-right: 7%;
		position:relative;
		top: -30px;
	}
	
	textarea {
		width: 30%;
		padding: 10px;
		padding-bottom: 30px;
		font-family: garamond;
		border:none;
	}
	
	textarea:focus {
		outline:none;
	}
	
	hr {
		height: 1px;
		border: 0;
		background-color: teal;
		width: 70%;
		float: left;
	}
	
	
	.pubblica input, .bottone {
		
		margin: 10px;
		border-radius: 20px;\n
		height : 35px;\n
		width: 200px;\n
		border-style: none;\n
		padding-left: 10px;	
		background-color: white;
		
	}
	
	.pubblica input:hover , .bottone:hover{
		background-color: gainsboro;
	}
		
	
	.carrello {
		font-size: 120%;
		margin-left:32%;
		text-align: left;
		margin-top: 5%;
		margin-bottom: 3%;	
	}
	
	.prodotti {
		margin: 10px;
		background-color: rgba(255,255,255,0.8);
		border-radius: 10px;
		width: 80%;
		border-top: solid;
		border-left:solid;
		border-width: 2px;
		border-color: dimgray;
		color: dimgray;
		font-family: garamond;
	}
	
	.prezzi {
		float: right;
		margin-right: 2%;
		color: darkslategray;
		font-weight: bold;
	}
	
	em {\n
		color: maroon;\n
	}\n
	
	.lista {
		margin: 10px;
		background-color: rgba(173,216,230,1);
		border-radius: 10px;
		width: 80%;
		border-top: solid;
		border-left:solid;
		border-width: 2px;
		border-color: dimgray;
		color: white;
		font-family: garamond;
		width: 50%;
	}
	
	.centro {
		margin-top: 10%;
	}
	
	
	</style>
	";
?>