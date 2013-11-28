<html>
 <head>
  <title><?=$page_title?></title>
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
    <link href="/test/wijmo-open/development-bundle/themes/rocket/jquery-wijmo.css" rel="stylesheet" type="text/css" />
    <link href="/test/wijmo-open/development-bundle/themes/wijmo/jquery.wijmo.wijsuperpanel.css" rel="stylesheet" type="text/css" />
    <link href="/test/wijmo-open/development-bundle/themes/wijmo/jquery.wijmo.wijlist.css" rel="stylesheet" type="text/css" />
    <link href="/test/wijmo-open/development-bundle/themes/wijmo/jquery.wijmo.wijtextbox.css" rel="stylesheet" type="text/css" />
    <link href="/test/wijmo-open/development-bundle/themes/wijmo/jquery.wijmo.wijdropdown.css" rel="stylesheet" type="text/css" />
    <link href="/test/wijmo-open/development-bundle/themes/wijmo/jquery.wijmo.wijradio.css" rel="stylesheet" type="text/css" />
    <link href="/test/wijmo-open/development-bundle/themes/wijmo/jquery.wijmo.wijcheckbox.css" rel="stylesheet" type="text/css" />
    <script src="/test/wijmo-open/development-bundle/external/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/external/jquery-ui-1.9.1.custom.min.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/external/jquery.mousewheel.min.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/external/jquery.bgiframe-2.1.3-pre.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/wijmo/jquery.wijmo.wijutil.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/wijmo/jquery.wijmo.wijsuperpanel.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/wijmo/jquery.wijmo.wijlist.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/wijmo/jquery.wijmo.wijdropdown.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/wijmo/jquery.wijmo.wijradio.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/wijmo/jquery.wijmo.wijcheckbox.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/development-bundle/wijmo/jquery.wijmo.wijtextbox.js" type="text/javascript"></script>
    <script src="/test/wijmo-open/FixedColumns.js" type="text/javascript"></script>
	<script src="/test/wijmo-open/jquery.dataTables.js" type="text/javascript"></script>
	<script src="/test/wijmo-open/adminformlogic.js" type="text/javascript"></script>		
	
	
	
	<style type="text/css" media="screen">
		@import "/test/wijmo-open/site.ccss";
	</style>
		
    <style type="text/css">
        .formdecorator label
        {
            display: block;
        }        
        .formdecorator
        {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        
        .formdecorator li
        {
            clear: both;
            margin-bottom: 1em;
        }
    </style>

  <style type="text/css">
<!--
.style1 {
	color: #FF6600;
	font-size: 30px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style8 {color: #000066; font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style9 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 18px; }
.style14 {font-size: 16px}
-->
  </style>
</head>

<body class="demo-single">
<h1 class="style1 style14">Administrador</h1>
<table > <tr> <td width="327" bgcolor="#d1552f"><div id="login"><span class="style8">Password</span>: 
  <input type="password" id="psw" name="psw" value=""/><input type="button" value="Login" onClick="login()"/></div></td></tr></table>
<div id="contenidoadministrador" style="display:none">
<form name="imprimirForm" action="../form/generarexcel" method="post">
    <div class="container">
        <div class="main demo">
            <!-- Begin demo markup -->
            <form name="form1" action="overview.html" method="post">
				<ul class="formdecorator">						
					<table width="421" border="0"  bgcolor="#d1552f">
					<tr>
						<td width="79"><span class="style8">Fecha Inicio</span><span class="style9">:</span></td>
					 <td width="98"><input name="fechainicio" type="text" id="fechainicio" size =10/> </td>
						<td width="73"><span class="style8">Fecha Fin</span><span class="style9">:</span></td>
					 <td width="153"><input name="fechafin" type="text" id="fechafin" size =10/> </td>
				  </tr>
			  </table>
			 </ul>		
			  <div id="mensajeGuardar"></div>				  	
			  <button id="wijmo-button" onClick="generarexcel()">Generar reporte</button>
			</br>
			</br>
			</form>
		<div id="resultado"></div>	
	</form>
</div></div>
</div>

</body>
</html>