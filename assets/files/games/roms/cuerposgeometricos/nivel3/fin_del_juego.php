<!-- saved from url=(0013)about:internet -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>fin_del_juego</title>
</head>
<body bgcolor="#ffffff">
<script language="JavaScript">
<!--
var isInternetExplorer = navigator.appName.indexOf("Microsoft") != -1;
// Gestionar todos los mensajes de FSCommand de una pel�cula Flash
function fin_del_juego_DoFSCommand(command, args) {
	var fin_del_juegoObj = isInternetExplorer ? document.all.fin_del_juego : document.fin_del_juego;
	//
	// Introduzca su c�digo aqu�.
	//
}
// Ancla para Internet Explorer
if (navigator.appName && navigator.appName.indexOf("Microsoft") != -1 && navigator.userAgent.indexOf("Windows") != -1 && navigator.userAgent.indexOf("Windows 3.1") == -1) {
	document.write('<script language=\"VBScript\"\>\n');
	document.write('On Error Resume Next\n');
	document.write('Sub fin_del_juego_FSCommand(ByVal command, ByVal args)\n');
	document.write('	Call fin_del_juego_DoFSCommand(command, args)\n');
	document.write('End Sub\n');
	document.write('</script\>\n');
}
//-->
</script>
<!--URL utilizadas en la pel�cula-->
<a href="javascript:window.close()"></a>
<a href="../../index.php"></a>
<!--Texto utilizado en la pel�cula-->
<!--
<p align="left"></p>
<p align="center"></p>
-->
<?php
$pntos3 =  $_GET["PuntosNivel3"] ; 
$pntos4 =  $_GET["PuntajeTotal"] ; 
$pntos=$pntos3+$pntos4;
?> 
<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" id="fin_del_juego" width="100%" height="100%" align="middle">
<param name="allowScriptAccess" value="sameDomain" />
<param name="movie" value="fin_del_juego.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" /><param name="FlashVars" value="pnt3=<? print $pntos3?>&pnta3=<? print $pntos4?>" /><embed src="fin_del_juego.swf" FlashVars="pnt3=<? print $pntos3?>&pnta3=<? print $pntos4?>" quality="high" bgcolor="#ffffff" width="100%" height="100%" swLiveConnect=true id="fin_del_juego" name="fin_del_juego" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer_es" />
</object>
</body>
</html>