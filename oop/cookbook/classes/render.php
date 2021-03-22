<?php

class Render
{
    public function __toString()
    {
        $output = "The following methods are avaiable for " . __CLASS__ . " objects: \n";
        $output .= implode("\n", get_class_methods(__CLASS__));
        return $output;
    }

    public static function listIngredients($ingredients)
    {
        $output = "";
        foreach ($ingredients as $ing) {
            $output .= $ing['amount'] . " " . $ing["measure"] . " " . $ing["item"];
            $output .= "\n";
        }
        return $output;
    }
    public static function displayRecipe($recipe)
    {
        // $this is the same way you'd use the object name outside of the class
        $output = "";
        $output .= $recipe->getTitle() . " by " . $recipe->getSource();
        $output .= "\n";
        $output .= implode(", ", $recipe->getTags());
        $output .= "\n";
        $output .= "\n";
        $output .= self::listIngredients($recipe->getIngredients());
        $output .= "\n";
        $output .= implode("\n", $recipe->getInstructions());
        $output .= "\n";
        $output .= $recipe->getYield();

        return $output;
    }
}


/* 
Static methods:
    If you want a static method to be called in another static method, you would use:
        self::staticMethod();


///////////////////Coding Challenge/////////////////// 

detailsRoom should accept a single object parameter named $room. The $room object will have the follow methods:

getName: will return a string

getDimensions: will return and array of size integers

Add a return value to the detailsRoom method that displays "name Dimensions: length x width", where name is returned from the room getName method and length x width is returned from the render displayDimensions method.

You will need to call the static method displayDimensions from within the Render class and pass the dimensions from the $room object using the getDimensions method

Final Output Example: Kitchen Dimensions: 12 x 14

////////////////// Answer //////////////////////

<?php

class Render {
    public static function displayDimensions($size)
    {
      return $size[0] . " x " . $size[1];
    }
  
    public static function detailsRoom($room)
    {
      return $room->getName() . " Dimensions: " . self::displayDimensions($room->getDimensions());
    } 
}

?>

*/
