<?php
// открыть сессию
  session_start();
?>
<html lang=ru>
<head>
  <title>Результат соединения с сервером</title>
  <meta charset="utf-8">
</head>
<body>
<?php
// извлечь из session login и пароль
  $login = $_SESSION["login"];
  $pass = $_SESSION["password"];
?>
<!-- Сообщить об успешном соединении с сервером MySql -->
<h3>Поздравляем с успешной регистрацией</h3>
</body>
</html>

