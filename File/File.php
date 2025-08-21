<?php

    class File {

        public string $fileName;
        public string $fileOption;

        function SetName($fileName, ?string $fileOption, ?string $message )  {
            fopen($fileName, $fileOption);
            fwrite($fileName, $message);
        }

        function printFinalMessage($message) {
            echo $message;
        }

    }