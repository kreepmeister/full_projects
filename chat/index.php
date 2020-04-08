<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Чат</title>
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="img/url.png">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/script_chat.js"></script>
</head>
<body onload="chat();">
<div class="qwer">
  <h2>Чат</h2>
  <div id="chat" class="chat" name="chat">
  </div>
  <br>
  <table>
    <tr>
      <td class="dip">Имя:</td>
      <td><input type="text" name="name" id="name" class="input" placeholder="Имя" size="10"></td>
    </tr>
    <tr>
      <td class="dip">Cообщение:</td>
      <td><input type="text" name="message" id="message" class="input" placeholder="Сообщение" size="10"></td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="button" class="btn" value="Отправить!" onclick="addMessage();">
		<i><a href="READ/index.html">Документация</a></i>
      </td>
    </tr>
  </table>
</div>
</body>
</html>
