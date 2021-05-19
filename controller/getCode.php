
<?php
if (isset($_POST)) {
    require("../res/constants.php");
    if(!strlen(trim($_POST['codeArea']))) {
        header("Location: ../");
        exit();
    }


    $secret = SECRET_KEY;
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);

    if(!$responseData->success){
        echo '<script>alert("Go away BOT \u{1F922}")</script>';
        header("Refresh:0, url=../index.php");    }

    if ($_POST['submitCode'] == "Create Paste" && $responseData->success) {
        $filename = '../Pastes/'.uniqid(rand(), true) . '.php';
        if (!file_exists($filename)) {
            $file = tmpfile();
        }

        $templateFile = fopen("template.html", "a+");
        $templateContent = '';

        while (!feof($templateFile))
            $templateContent = $templateContent . fgets($templateFile);
        $templateContent = $templateContent."<pre><code id='cod'>";
        $file = fopen($filename, "a+");
        $text = $_POST["codeArea"];
        $text = str_replace("<", '&lt;', $text);
        $text = str_replace(">", '&gt;', $text);
        $text = $text."</code></pre>";
        $languageType = $_POST['syntax'];
        switch($languageType){
            case "C":
                $text = $text. "<script src=\"../controller/scripts/syntaxHighlightC.js\"></script>";
                break;
            case "C#":
                $text = $text. "<script src=\"../controller/scripts/syntaxHighlightCSharp.js\"></script>";
                break;
            case "C++":
                $text = $text. "<script src=\"../controller/scripts/syntaxHighlightCpp.js\"></script>";
                break;
            case "HTML":
                $text = $text. "<script src=\"../controller/scripts/syntaxHighlightHTML.js\"></script>";
                break;
            case "CSS": 
                $text = $text. "<script src=\"../controller/scripts/syntaxHighlightCSS.js\"></script>";
                break;
            case "JSON":
                $text = $text. "<script src=\"../controller/scripts/syntaxHighlightJSON.js\"></script>";
                break;
            case "Python":
                $text = $text. "<script src=\"../controller/scripts/syntaxHighlightPython.js\"></script>";
                break;
            case "Java":
                $text = $text. "<script src=\"../controller/scripts/syntaxHighlightJava.js\"></script>";
                break;
            case "JavaScript":
                $text = $text. "<script src=\"../controller/scripts/syntaxHighlightJavaScript.js\"></script>";
                break;
            case "Bash":
                $text = $text. "<script src=\"../controller/scripts/syntaxHighlightBash.js\"></script>";
        }
        file_put_contents($filename, $templateContent.$text);
        fclose($file);
        header("Location: ../Pastes/" . $filename);
    }
}