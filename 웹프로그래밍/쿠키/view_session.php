<?php
  session_start();
  echo "로그인 ID :", $_SESSION['login'];
  echo "<br><a href=del_session.php>세션 삭제</a>";
?>
