<?php

/*
Access modifiers:
Public	- Publicly accessible from anywhere, even from outside the scope of the class.
Private	- Accessed within the class itself. It protects properties and methods from being access from outside the class.
Protected - Same as private, except by allowing child (sub) classes to access protected parent (super) properties and methods.
*/


class Recipe
{
    private $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = 'Nick Kwok';
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

    public function setTitle($title)
    {
        $this->title = ucwords($title);
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

    public function displayRecipe()
    {
        // $this is the same way you'd use the object name outside of the class
        $this->title . " by " . $this->source;
    }
}
