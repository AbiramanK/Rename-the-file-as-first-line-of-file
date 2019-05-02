<?php
    // get all file names in current directory
    foreach (glob("*.*") as $filename) {

        // assign $filename to $old_name
        $old_name = $filename ;

        if(trim($filename) !== "index.php" )
        {
            // find file extension
            $fileNameArray = explode(".", $filename) ;
            $fileNameEnd = end($fileNameArray) ;

            // read first line of file
            $fn = fopen($filename,"r");
            $result = fgets($fn);
            $result = trim($result) ;
            fclose($fn);

            // assign new_name to file
            $new_name = $result . "." . $fileNameEnd ;

            // checking file present in directory
            if(file_exists($old_name))
            {
                // rename the file name as file line of the file
                rename( $old_name, $new_name ) ;
            }

        }
    }
?>