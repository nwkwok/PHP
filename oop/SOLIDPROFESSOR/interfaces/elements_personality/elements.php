<?php 

// Pulled random personality characteristics from:
// https://debrasilvermanastrology.com/the-four-elements-personality-traits/
// Inspiration from Avatar the Last Airbender maybe? :)
const BR = '<br />';

// I created an element interface to create a method signature that all classes must follow when implementing the ElementInterface

interface ElementInterface
{
    public function showCharacteristics();
}

class Water implements ElementInterface{
    public function showCharacteristics(){
        return array(
            'Fast: They like to get things done quickly.',
            'Intellectual: They have a huge appetite for information.',
            'Communicators: They have a gift for teaching.',
            'Connectors: Air people are great at relationships.',
            'Fickle: Prone to changing their mind.',
            'Disjointed: Confused about what they want in life.',
            'Non Conformists: They make up their own style and rhythm'
        );
    }
}
class Air implements ElementInterface{
    public function showCharacteristics(){
        return array(
            'Authentic: What they feel is real.',
            'Intuitive: They know what they can trust and can’t trust.',
            'Reclusive: Sometimes a recluse.',
            'Unsocial: Water people can struggle to socially interact',
            'Sensitive: They have a deep level of sensitivity',
            'Imaginative: They possess a rich imagination',
            'Loving: They care and connect with others',
        );
    }
}
class Fire implements ElementInterface{
    public function showCharacteristics(){
        return array(
            'Expressive: They love to express themselves.',
            'Fun: They are the party lovers, the ones who want the music cranked up.',
            'Edgy: The can be blunt.',
            'Open: They say what others are thinking.'
        );
    }
}
class Earth implements ElementInterface{
    public function showCharacteristics(){
        return array(
            'Practical: They are grounded, they want results.',
            'Organised: They like checklists.',
            'Leaders: They have a specific style and don’t understand people that do things differently.',
            'Judgemental: If you are not like them they think you have a problem.',
            'Control: They like things to be done their way.',
            'Solid: They will always get the job done.',
            'Loyal: When they love you they really love you.'
        );
    }
}

// Create a function that will have a type_declaration that only allows objects of that ElementInterface to be passed.

function elementDescription(ElementInterface $element){
    echo '<strong>'.get_class($element).':</strong>'.BR;
    if(is_array($element->showCharacteristics())){
        foreach($element->showCharacteristics() as $characteristic){
            echo $characteristic.BR;
        }
    }
}

$water = new Water();
elementDescription($water);
echo BR;
$air = new Air();
elementDescription($air);
echo BR;
$fire = new Fire();
elementDescription($fire);
echo BR;
$earth = new Earth();
elementDescription($earth);
echo BR;

