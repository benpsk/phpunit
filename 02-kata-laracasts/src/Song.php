<?php

namespace App;

class Song
{
    public function sing()
    {
        return $this->verses(99, 0);
    }

    public function verses($start, $end)
    {
        return implode("\r\n", array_map(
            fn ($number) => $this->verse($number),
            range($start, $end)
        ));
    }

    public function verse($number)
    {
        switch ($number) {
            case 2:
                return
                    "2 bottles of beer on the wall\r\n" .
                    "2 bottles of beer\r\n" .
                    "Take one down and pass it around\r\n" .
                    "1 bottle of beer on the wall\r\n";

            case 1:
                return
                    "1 bottle of beer on the wall\r\n" .
                    "1 bottle of beer\r\n" .
                    "Take one down and pass it around\r\n" .
                    "No more bottles of beer on the wall\r\n";

            case 0:
                return
                    "No more bottles of beer on the wall\r\n" .
                    "No more bottles of beer\r\n" .
                    "Go to the store and buy some more\r\n" .
                    "99 bottles of beer on the wall\r\n";

            default:
                return
                    "$number bottles of beer on the wall\r\n" .
                    "$number bottles of beer\r\n" .
                    "Take one down and pass it around\r\n" .
                    ($number - 1) . " bottles of beer on the wall\r\n";
        }
    }
}
