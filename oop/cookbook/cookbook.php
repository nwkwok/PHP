<?php
include "classes/recipes.php";
include "classes/render.php";
/* Notes:
    When you use the -> to access properties / methods in a class
    The preceding var declaration and the proceding object/method becomes on variable
    $recipe->source becomes one variable
    This is a helpful way to remember why there's no $ preceding the property/method
*/

$recipe1 = new Recipe();
$recipe1->setSource('Grandpa Kwok');
$recipe1->setTitle('my first recipe');
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 2, "cup");
$recipe1->addInstruction("This is my first instruction");
$recipe1->addTag('Breakfast');
$recipe1->addTag('Main Course');

$recipe2 = new Recipe();
$recipe2->addInstruction("This is my second instruction");
$recipe2->setSource('Gordon Ramsay');

echo Render::displayRecipe($recipe1);
