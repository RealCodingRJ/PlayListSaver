<?php
    include "../File/File.php";

    $type = readline();

    echo "Do You Want to Save Y | N: ";
    if ($type == "Y") {
        
        echo "Enter PlayList: ";
        $input = readline();

        $file = new File();
        $file->SetName("main.lofi.url", 'w', $input);
        $file->printFinalMessage("Created File");

        $cmd=sprintf( 'start %s',$input );
        exec( $cmd );
    }
    else {
        return;
    }
