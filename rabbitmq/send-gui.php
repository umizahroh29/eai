<html>
<body>
<form method="post" action="send.php">
    <input type="text" name="message">
    <button type="submit">Send</button>
</form>
<?php
if (isset($_SESSION['response']))
    echo $_SESSION['response'];
?>
</body>
</html>