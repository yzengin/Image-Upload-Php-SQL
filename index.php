<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style type="text/css"> 
	
	.dosya {
		
		border:1px solid #ddd;
		text-align:center;
		margin:5px;
		padding:5px;
		
	}
	
	.dosya h2 {
		
		margin:5px;
		padding:10px;
		
	}
	.dosya button {
		
		border:1px solid #ddd;
		font-size:18px;
		width:120px;
		height:35px;
		border-radius:5px;
		cursor:pointer;
		
	}
	
	.liste {
		
		border:1px solid #ddd;
		position:relative;
		left:400px;
		width:450px;
		margin-top:10px;
		
	}
	.liste h2 {
		
		border:1px solid #ddd;
		margin:2px;
		padding:5px;
		background:#eee;
	}
	.liste img {
		
		
		padding:5px;
	}
	
	.liste span {
		
		margin:5px;
		padding:5px;
		font-size:20px;
	}
	
	a {
		
		text-decoration:none;
		color:red;
		font-size:20px;
		padding:10px;
		
	}
	
	</style>
</head>
<body>
	<?php  
	
	include("ayar.php");
	
	 $do = @$_GET["do"];
	
	    switch ($do) {
			
			case "sil":
			include("sil.php");
			break;
			
			case "duzenle":
			include("duzenle.php");
			break;
			
			default:
			include("anasayfa.php");
			break;
			
			
		}
	
	?>
</body>
</html>