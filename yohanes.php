<html>
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Text Message</title>
 
 <style type="text/css">
 		body{
			background-color: black;
			margin: 0;
		}
	textarea{
			width: 100%;
			/*height: 250px;*/
			background-color: darkblue;
			color: lightgreen;
			border: 5px solid gray;
			font-size: 30px;
		}
	iframe{
			width: 100%;
			height: 500px;
			background-color: yellow;
			border: 5px solid gray;
		}
	#sb{
			border: 5px solid gray;
			border-radius: 5px;
			background-color: brown;
			color: white;
			font-size: 50px;
		}
 </style>

 </head>

 <body>

<iframe src="dynamic.txt" name="ifr"></iframe> <br><br><br>

<?php 
 if(!empty($_POST['name'])) {

if ($_POST['name'] == "()") {
 	$newfile2 = fopen('dynamic.txt', 'w') or die("!!!");
 	fwrite($newfile2, "");
 }
else {
 //echo "Greetings, {$_POST['name']}, and welcome.";
 $newfile = fopen('dynamic.txt', 'a') or die("!!!");
 $newfile1 = fopen('static.txt', 'a') or die("!!!");
 $txt = "Yoha:\t{$_POST['name']}\n--------------------------------------------\n";
 fwrite($newfile, $txt);
 fwrite($newfile1, $txt);
}
}
  ?>

 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 
 <center>
 <textarea name="name"></textarea> 
 <br><br><br>
 <input type="submit" id="sb" />
 </center> 

 <br> <a href="dynamic.txt" target="ifr"> <button>Check Me!</button> </a>

 </form>
 <br><br><br>
 </body>
</html>