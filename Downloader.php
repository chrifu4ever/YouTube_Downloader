<?php

/**
 * Created by PhpStorm.
 * User: christian
 * Date: 17.02.2018
 * Time: 11:33
 */
class Downloader
{
    /* //Kann später gelöscht werden
    public function __construct()
    {
        echo "Aufgerufen<br>";
    }

    public function __destruct()
    {
        echo "Zerstört<br>";

    }
    */


    public function convertUrlToFile($url, $format)
    {
        echo "URL: ".$url."<br>";
        echo "Format: ".$format."<br>";



        switch ($format) {
            case "m4a":
                echo "m4a gewählt<br>";
                shell_exec("youtube-dl -x -v --format best -o \"down/%(title)s.%(ext)s\" $url");
                $showName = (string)shell_exec("youtube-dl  -v --format best --get-filename -x -o \"down/%(title)s.m4a\" $url");
                echo "Showname: ".$showName;
                return $showName;
                break;
            case "mp3":
                echo "mp3 gewählt<br>";
                shell_exec("youtube-dl -x --audio-format mp3 -o \"down/%(title)s.%(ext)s\" $url");
                $showName = (string)shell_exec("youtube-dl  -v --format best --get-filename -x -o \"down/%(title)s.mp3\" $url");
                $showNameM4A = str_replace(".mp3",".m4a",$showName);
                /*
                echo "MP3:".$showName."<br>";
                echo "M4A:".$showNameM4A."<br>";
                echo "<br><br>ffmpeg -i $showNameM4A -acodec libmp3lame -ab 128k $showName";
                shell_exec("ffmpeg -i $showNameM4A -acodec libmp3lame -ab 128k $showName");
                TODO: Besseren Weg finden um MP3 zu erstellen - ffmpeg etc
                */
                return $showName;
                break;
            case "mp4":
                echo "mp4 gewählt<br>";
                shell_exec("youtube-dl -v --format best -o \"down/%(title)s.%(ext)s\" $url");
                $showName = (string)shell_exec("youtube-dl  -v --format best --get-filename -x -o \"down/%(title)s.mp4\" $url");
                return $showName;
                break;
        }

        /*
        shell_exec("youtube-dl -x -v --format best -o \"down/%(title)s.%(ext)s\" $url");
        //shell_exec("youtube-dl -v --format best -o \"down/%(title)s.%(ext)s\" $a");
        echo "Konvertieren erfolgreich<br>";
        $showName = (string)shell_exec("youtube-dl  -v --format best --get-filename -x -o \"down/%(title)s.m4a\" $url");
        return $showName;
        */
    }


}