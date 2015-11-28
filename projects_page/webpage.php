<!DOCTYPE html>
<!-- saved from url=(0038)http://getbootstrap.com/examples/blog/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="./Blog Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./Blog Template for Bootstrap_files/blog.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./Blog Template for Bootstrap_files/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
body {
	margin-left: 50px;  
	margin-top: 50px;  
}

div	{
	width:500px;
	margin-bottom: 100px;  
}


img{
	float:left;
	width:200px;
	height:200px;
}

</style>
  </head>

  <body>

	<script>
<?php
$xml=simplexml_load_file("projects_data.xml") or die("Error: Cannot create object");
//print_r($xml);
$output="";
foreach($xml as $item)
{
$str = $item->title."|".$item->description."|".$item->image."|"."-@-";
$output = $output.$str;
}
//echo $output;
?>
var output = <?= json_encode($output,JSON_HEX_APOS); ?>;
output=output.split("-@-");	
console.log(output);
for( var i =0 ; i<output.length-1 ; i++)
{
	data=output[i].split("|");
	var title = data[0];
	var description = data[1];
	var image = data[2];
	
	var div = document.createElement("DIV");
	div.id=String(title);

	
	var x = document.createElement("H2");                     
	var t = document.createTextNode(title);   					
	x.appendChild(t);                                         
	//x.className=class

	div.appendChild(x);
	
	
	var x = document.createElement("P");                                                             
	var img = document.createElement("IMG");
	img.src= image;
	x.appendChild(img);
	var t = document.createTextNode(description);   			
	x.appendChild(t);
	div.appendChild(x);

 

	var a = document.createElement('a');
	var linkText = document.createTextNode("Read More");
	a.appendChild(linkText);
	a.title = "Read More";
	a.href = "http://google.com";
	div.appendChild(a);
	


	
	document.body.appendChild(div);
}
</script>
	
	
    <footer class="blog-footer">
      <p>Page made by Siddarth Goyal</p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Blog Template for Bootstrap_files/jquery.min.js"></script>
    <script src="./Blog Template for Bootstrap_files/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Blog Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
  

</body></html>