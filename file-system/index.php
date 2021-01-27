<?php
$path = '/dir1/myfile.php';
$file = 'file1.txt';
/*
    // Return filename
    echo basename($path);
    # returns 'myfile.php';

    // Return filename without extension
    echo basename($path, '.php');
    #returns 'myfile'

    // Return the dir name from the path
    echo dirname($path);
    # returns 'dir1'

    // check if file exists
    echo file_exists($file1);
    # returns boolean

    // Get abs path
    echo realpath($file);
    # returns absolute path of file

    // Checks to see if file
    echo is_file($file);
    # returns boolean whether it's a file 

    echo file_exists($file);
    # returns boolean whether it's a file or a folder

    // Check to see if file is writable
    echo is_writable($file);
    # returns boolean

    // Check to see if file is readable
    echo is_readable($file);
    # returns boolean

    // Get file size
    echo filesize($file);

//Create a directory
mkdir('testing');

//Delete a directory
rmdir('testing');
# removes directory if directoy is empty

// Copy file
echo copy('file1.txt', 'newfile.txt');

// Rename file
rename('newfile.txt', 'file2.txt');

// Delete a file
unlink('file2.txt');

// Write from file to string
echo file_get_contents($file);
# takes whatever file you get in and echo it to the browser

// Write string to file 
echo file_put_contents($file, 'Goodbye World');
# outputs filesize and overwrites the text to the actual file

// Append to a file
$current = file_get_contents($file);
$current .= 'Goodbye World';
file_put_contents($file, $current);


// Open file for Reading
$handle = fopen($file, 'r');
$data = fread($handle, filesize($file));
echo $data;
fclose($handle);

// Open file for writing
$handle = fopen($file2, 'w');
$txt = "John Doe\n";
fwrite($handle, $txt);
$txt = "Steve Smith\n";
fwrite($handle, $txt);
fclose($handle);

*/