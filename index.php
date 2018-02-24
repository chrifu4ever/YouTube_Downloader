
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Easy YouTube Downloader</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Anmeldung-Vorlage für Bootstrap</title>

    <!-- Bootstrap-CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Besondere Stile für diese Vorlage -->
    <link href="View/css/signin.css" rel="stylesheet">



    <!-- Unterstützung für Media Queries und HTML5-Elemente in IE8 über HTML5 shim und Respond.js -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
require "Downloader.php";
?>
<body>

<div class="container">

    <form class="form-signin">
        <h2 class="form-signin-heading">Willkommen bei ChriFu's Tubeloader</h2>


        <input class="form-control" type="text" placeholder="Video URL hier hinein kopieren" id="vidUrl"
               name="vidUrl" autocomplete="off" autofocus>

        <div class="radio">
            <label>
                <input type="radio" id="formatM4A" name="formatChooser" value="m4a" checked>
                m4a - Audio
            </label>
        </div>
        <div class="radio form-horizontal">
            <label>
                <input type="radio" name="formatChooser" value="mp3" checked>
                mp3 - Audio (Dauert etwas länger)
            </label>
        </div>
        <div class="radio form-horizontal">
            <label>
                <input type="radio" name="formatChooser" value="mp4" checked>
                mp4 - Video
            </label>
        </div>
        <input class="btn btn-primary btn-lg btn-block" type="submit" id="convertSubmit" name="convertSubmit"
               value="Konvertieren">
    </form>
    <hr>
    <!--Form zum herunterladen der MP3 auf dem Computer -->
    <a href="down/">Downloads</a>

</div> <!-- /container -->


<!-- IE10-Anzeigefenster-Hack für Fehler auf Surface und Desktop-Windows-8 -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

<?php
$down = new Downloader();

$newFile = "";


if (isset($_GET["convertSubmit"]))
{
    echo "URL from Index: ".$_GET["vidUrl"];
    $newFile = $down->convertUrlToFile($_GET["vidUrl"], $_GET["formatChooser"]);
    echo "<a href=$newFile>DOWNLOAD THIS FILE</a>";
}
