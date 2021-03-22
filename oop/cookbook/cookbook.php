<?php
include "classes/recipes.php";
include "classes/render.php";
include "inc/recipes.php";
/* Notes:
    When you use the -> to access properties / methods in a class
    The preceding var declaration and the proceding object/method becomes on variable
    $recipe->source becomes one variable
    This is a helpful way to remember why there's no $ preceding the property/method
*/

echo Render::displayRecipe($belgian_waffles);
