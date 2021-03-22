<?php

/*
Access modifiers:
Public	- Publicly accessible from anywhere, even from outside the scope of the class.
Private	- Accessed within the class itself. It protects properties and methods from being access from outside the class.
Protected - Same as private, except by allowing child (sub) classes to access protected parent (super) properties and methods.

Consistency with getters and setters
    Although you don't have to use getters and setters for all properties,
    If you decide to do it for one property, it's best to do it for all. 
    Just because there isn't something that we want to do with the incoming data now,
    it doesn't mean that we won't in the future - so best to make it modular now.


*/


class Recipe
{
    private $title;
    private $ingredients = array();
    private $instructions = array();
    private $yield;
    private $tag = array();
    private $source = 'Nick Kwok';
    private $measurements = array(
        "tsp",
        "tbsp",
        "cup",
        "oz",
        "lb",
        "fl oz",
        "pint",
        "quart",
        "gallon"
    );

    public function __construct($title = null)
    {
        $this->setTitle($title);
    }

    /* toString magic method:
    If you were to call an object that is instantiated form a class by itself,
    it would throw an error:
        $object = new Object();
        echo $object
            - throws error

        However, if you added a __toString() it will run the magic method __toString() when
        the object gets called and will return what is in that method.

    */

    public function __toString()
    {
        $output = "You are calling a " . __CLASS__ . " object with the title \"";
        $output .= $this->getTitle() . "\"";
        $output .= "\nIt is stored in " . basename(__FILE__) . " at " . __DIR__ . ".";
        $output .= "\nThis display is from line " . __LINE__ . " in method " . __METHOD__;
        $output .= "\nThe following methods are available for objects of this class: \n";
        $output .= implode("\n", get_class_methods(__CLASS__));
        return $output;

        // Other magic constants
        // __DIR__ 
        // __FILE__
    }

    public function setTitle($title)
    {
        if (empty($title)) {
            $this->title = null;
        } else {
            $this->title = ucwords($title);
        }
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function addIngredient($item, $amount = null, $measure = null)
    {
        if ($amount != null && !is_float($amount) && !is_int($amount)) {
            exit("The amount must be a float: " . gettype($amount) . " $amount given.");
        }
        if ($measure != null && !in_array($measure, $this->measurements)) {
            exit("Please enter a valid measurement: " . implode(", ", $this->measurements));
        }
        $this->ingredients[] = array(
            "item" => ucwords($item),
            "amount" => $amount,
            "measure" => $measure
        );
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function addInstruction($string)
    {
        $this->instructions[] = $string;
    }

    public function getInstructions()
    {
        return $this->instructions;
    }

    public function addTag($tag)
    {
        $this->tags[] = strtolower($tag);
    }

    public function getTags()
    {
        return $this->tag;
    }

    public function setYield($yield)
    {
        $this->yield = $yield;
    }

    public function getYeild()
    {
        return $this->yield;
    }

    public function setSource($source)
    {
        $this->source = ucwords($source);
    }

    public function getSource()
    {
        return $this->source;
    }
}
