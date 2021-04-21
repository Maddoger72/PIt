<?php

define('SLASH', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));

require_once ROOT.SLASH."util".SLASH."autoload.php";
require_once ROOT.SLASH."view".SLASH."connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="view/styles.css">
    <script src="controller/script.js"></script>
    <script src="controller/emptyCode.js"></script>
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
        <a class="home" href="index.php">PasteIt</a>
        <a class="contact" href="view/contact.html">Contact</a>
        <a class="how-to" href="view/how-to.html">How to use</a>
        <a class="report" href="view/report.html">Report</a>
    </div>
    <div class="header-right">
        <a class="login" href="view/login.html">Login</a>
        <a class="register" href="view/register.html">Register</a>
    </div>

</div>
<div class="footer">
    <a class=reportContent href="view/reportContent.php"> Report a post</a>
</div>

<div class="textarea-container">
    <br>
    Paste here the code!<br>

    <form name="code" method="post" action="controller/getCode.php">
    <label class="left">
            <textarea name="codeArea" id="textarea" class="textarea" ></textarea>
        </label>
        <table class="tabel">
            <tr>
                <td><label class="syntax">Syntax Highlighting:</label></td>
                <td><label>
                        <select name="syntax" class="right-select">
                            <option value="C">C</option>
                            <option value="C#">C#</option>
                            <option value="C++">C++</option>
                            <option value="HTML">HTML</option>
                            <option value="CSS">CSS</option>
                            <option value="JSON">JSON</option>
                            <option value="Java">Java</option>
                            <option value="JavaScript">JavaScript</option>
                            <option value="Python">Python</option>
                            <option value="Bash">Bash</option>
                        </select>
                    </label></td>
            </tr>
            <tr>
                <td><label class="expiration">Expiration time:</label></td>
                <td><label>
                        <select class="right-select" name="expiration">
                            <option value="Disabled">Disabled</option>
                            <option value="5">5 minutes</option>
                            <option value="10">10 minutes</option>
                            <option value="30">30 minutes</option>
                            <option value="1hr">1 hour</option>
                            <option value="1day">1 day</option>
                            <option value="1week">1 week</option>
                            <option value="1month">1 month</option>
                        </select>
                    </label></td>
            </tr>
            <tr>
                <td><label class="privacy">Public:</label></td>
                <td><label>
                        <input type="checkbox" class="right-select" onclick="myFunction()">
                    </label></td>
            </tr>
            <tr>
                <td><label id="insert-label" class="password">Insert password here:</label></td>

                <td> <label for="field-password">
                        <input class="right-select" type="password" id="field-password" placeholder="Password"/>
                    </label></td>
            </tr>
        </table>
        <br>
        <input type="submit" class="create-paste" name="submitCode" value="Create Paste" onclick="return emptyCode();"/>
    </form>
</div>
</body>
</html>


