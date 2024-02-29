<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
        crossorigin="anonymous"></script>
<style>
    body {
  background-image: url('img/hospBg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

<center><h1>Regional covid-19 Updater</h1></center>
</head>

<body>
<header>
<body>
<div class="container row">
            <!-- Default form contact -->
            <center>
<form action="action_page.php" method="post">
  

    <input type="text" placeholder="Enter Username" name="username" required>   

    </br>
    <input type="password" placeholder="Enter Password" name="password" required>

    </br>
    <input type="submit" class="button" value="login" name="login">
    <label>

    </br>
    <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    </center>
    </div>
</form>
</header>
</body>
</html>