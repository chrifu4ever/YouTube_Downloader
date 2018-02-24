#!/bin/bash
#youtube-dl -x --audio-format mp3 https://www.youtube.com/watch?v=3OtdO12CLgI
#echo "fertig"


function showThis()
{
    echo youtube-dl  -v --format best --get-filename -x -o "down/%(title)s.%(ext)s" $1

}

function downloadThis() {
youtube-dl -x -v --format best -o "down/%(title)s.%(ext)s" $1  #Download Audio in m4a
showThis
}



downloadThis

#youtube-dl -v --format best -o "down/%(title)s.%(ext)s" $1  #Video Download
#youtube-dl -x -v --format best -o "down/%(title)s.%(ext)s" $1  #Download Audio in m4a
#echo youtube-dl  -v --format best --get-filename -x -o "down/%(title)s.%(ext)s" $1
