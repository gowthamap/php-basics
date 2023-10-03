<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php forms</title>
</head>
<body>
  
<form action="save.php" method="POST">
  <input type="text" placeholder="Username" id="username" name="username"><br>
  <input type="password" placeholder="Password" id="password" name="password"><br>
  <select name="country" id="">
    <option value="0">America</option>
    <option value="1">China</option>
    <option value="2">Sri Lanka</option>
    <option value="3">India</option>
  </select>
  <input type="submit" value="Login">
</form>

</body>
</html>