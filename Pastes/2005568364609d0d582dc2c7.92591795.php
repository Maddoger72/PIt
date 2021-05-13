
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <link rel="stylesheet" href="../view/styles.css">
  <link rel="stylesheet" href="../controller/highlight.css">
  <link rel="icon"
        href="https://icons-for-free.com/iconfiles/png/512/clipboard+paste+task+icon-1320161389075402003.png">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PIt</title>

</head>

<body>
<div class="header">
  <div class="header-left">
    <a class="home" href="../indexLogged.php">PasteIt</a>
    <a class="contact" href="../view/contactLogged.php">Contact</a>
    <a class="how-to" href="../view/how-toLogged.php">How to use</a>
    <a class="report" href="../view/reportLogged.html">Report</a>
  </div>
  <div class="header-right">
    <a class="login"> <?php session_start(); echo $_SESSION["username"]; ?> </a>
    <a class="register" href="../indexLogged.php">Log out</a>
  </div>
</div>

<pre><code id='cod'>adfsxcv</code></pre><script src="../controller/scripts/syntaxHighlight.js"></script>