<?php 

#right now we're having to include every new class to use it. If you have 20+ classes, it can get very confusing.

# there is something built in to PHP that allows you to do this in a better way

/*
    >> create classes directory
    >> create a 'namespace' for each different class
        i.e. 
        Classes
            - Person
                - person.class.php
            - Car 
                - car.class.php

    >> put all classes inside of this directory
    >> change names to className.class.php
    >> this way you can load all of your classes from one directory.

Instead of using include 'path to class file'
We can do:

    spl_autoload_register('myAutoLoader');
    function myAutoLoader($className){
        $path = 'classes/';
        $extension = '.class.php';
        $fullPath = $path . className . $extension;
        include_once $fullPath;

    if !(file_exists($fullPath)) {
        return false;
        }

    }

You can save this in a file called autoLoader.php, save this in a separate directory, and import it so that you can autoLoad all classes. 

Now you can include the namespace at the top of the className.class.php by putting:

    namespace Person;  

Above defining the class. 

Now when you instantiate any object that is inside of your classes directory, you can do 

$newObj = new Namespace\Class();