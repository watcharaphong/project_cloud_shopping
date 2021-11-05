<?php
setcookie('aname','',time()-(86400 * 30), "/");
setcookie('auser','',time()-(86400 * 30), "/");

echo"<script>
window.location='login.php';</script>";
 ?>
