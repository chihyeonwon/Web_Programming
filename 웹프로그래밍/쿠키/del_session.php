<?php
  session_start();
  unset($_SESSION['login']);
  //session_unset();
 echo "세션 삭제<br>";
 echo "<a href=view_session.php>세션 보기</a>";
?>
