<?php
setcookie('mname','',time()-(86400 * 30), "/");
setcookie('muser','',time()-(86400 * 30), "/");

echo"<script>
window.location='index.php';</script>";
 ?>
