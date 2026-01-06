<?php
class FileManager {
    public $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
        echo "FileManager constructor called: $filename\n";
    }

    public function doSomething() {
        echo "Please do something with: $this->filename\n";
    }

    public function __destruct()
    {
        echo "FileManager destructor called: $this->filename\n";
    }
}

$file = new FileManager("myfile.txt");
$file->doSomething();


