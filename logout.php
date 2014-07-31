<?php

session_start();
$pagina = $_GET['p'];
        
session_destroy();


'<script>
  location.href="'.$pagina.'"
</script>';
