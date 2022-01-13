<?php

namespace Helper {

    class inputHelper{

        static function input(string $info): string {
            echo "$info : ";
            return trim(fgets(STDIN));
        }
    }
}