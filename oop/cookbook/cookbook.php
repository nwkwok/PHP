<?php
include "classes/recipes.php";
/* Notes:
    When you use the -> to access properties / methods in a class
    The preceding var declaration and the proceding object/method becomes on variable
    $recipe->source becomes one variable
    This is a helpful way to remember why there's no $ preceding the property/method
*/

$recipe1 = new Recipe();
$recipe1->source = 'Grandpa Kwok';
$recipe1->setTitle('my first recipe');
$recipe->addIngredient("egg", 1);
$recipe->addIngredient("flour", 2, "cup");

$recipe2 = new Recipe();
$recipe1->setTitle('my second recipe');
$recipe2->source = 'Gordon Ramsay';

echo $recipe1->getTitle();
foreach ($recipe->getIngredients() as $ing) {
    echo "\n" . $ing["amount"] . " " . $ing["measure"] . " " . $ing["item"];
}
