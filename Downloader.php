<?php

/**
 * Created by PhpStorm.
 * User: christian
 * Date: 17.02.2018
 * Time: 11:33
 */
class Downloader
{
      public function convertUrlToFile($url, $format)
    {
        switch ($format) {
            case "m4a":

                shell_exec("youtube-dl -x -v --format best -o \"down/%(title)s.%(ext)s\" $url");
                $showName = (string)shell_exec("youtube-dl  -v --format best --get-filename -x -o \"down/%(title)s.m4a\" $url");

                return $showName;
                break;
            case "mp3":

                shell_exec("youtube-dl -x --audio-format mp3 -o \"down/%(title)s.%(ext)s\" $url");
                $showName = (string)shell_exec("youtube-dl  -v --format best --get-filename -x -o \"down/%(title)s.mp3\" $url");
                $showNameM4A = str_replace(".mp3",".m4a",$showName);
                /*
                TODO: Besseren Weg finden um MP3 zu erstellen - ffmpeg etc
                */
                return $showName;
                break;
            case "mp4":

                shell_exec("youtube-dl -v --format best -o \"down/%(title)s.%(ext)s\" $url");
                $showName = (string)shell_exec("youtube-dl  -v --format best --get-filename -x -o \"down/%(title)s.mp4\" $url");
                return $showName;
                break;
        }
    }


}