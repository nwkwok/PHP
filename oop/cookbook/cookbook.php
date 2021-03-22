<?php

class Recipe
{
    public $title;
    public $ingredients = array();
    public $instructions = array();
    public $yield;
    public $tag = array();
    public $source = 'Nick Kwok';

    public function displayRecipe()
    {
        // $this is the same way you'd use the object name outside of the class
        $this->title . " by " . $this->source;
    }
}

$recipe1 = new Recipe();
$recipe1->source = 'Grandpa Kwok';
$recipe1->title = 'My First Recipe';

// When you use the -> to access properties / methods in a class
// The preceding var declaration and the proceding object/method becomes on variable
// $recipe->source becomes one variable
// This is a helpful way to remember why there's no $ preceding the property/method

$recipe2 = new Recipe();
$recipe1->title = 'My Second Recipe';
$recipe2->source = 'Gordon Ramsay';

echo $recipe1->displayRecipe();
