<?php

// セッションスタート
session_start();

// セッション削除
session_destroy();

header("Location:login.php");

?>