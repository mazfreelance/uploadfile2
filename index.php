<!DOCTYPE html>
<head>
    <title>MySQL file upload example</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    
    <script type="text/javascript">
    function Demo(anchor) {
        var a = anchor.getAttribute('value')
        //alert(value);
		document.getElementById("div").innerHTML= a;
		document.getElementById('el').value=a;
	
    }
</script>
</head>
<body>
    <form action="add_file.php" method="post" enctype="multipart/form-data">
        <input type="file" name="uploaded_file" accept="image/*"><br>
        <input type="submit" value="Upload file" ><br>
    </form>
    <p>
        <a href="list_files.php">See all files</a>
    </p>
    


<br/><br/><a href="#" onclick="Demo(this);" value="fr">
    fa
</a>

<br/><br/>
<div id="div"></div>
<form >
  <input type="text" id="el" name="el" value=""/>
</form>
</body>
</html>
