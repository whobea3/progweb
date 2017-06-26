<?php
setcookie("logado", "");
?>
<html>
<head>
<meta charset="utf-8"/>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<TITLE>Upload</TITLE>
<meta http-equiv="refresh" content="3;url=index.php">
<script language="JavaScript">
  function deleteCookie(nome){
    var exdate = new Date();
    exdate.setTime(exdate.getTime() + (-1 * 24 * 3600 
       * 1000));
    document.cookie = nome + "=" + escape("")+ ((-1 
       == null) ? "" : "; expires=" + exdate);
  } 
</script>

</head>
<body>
  <div class="alert alert-info">
    Você foi <strong> desconectado</strong> do sistema<a href="#" class="alert-link">!
  </div>
<script language="JavaScript">
  deleteCookie("logado");
</script>

</BODY>
</HTML>
