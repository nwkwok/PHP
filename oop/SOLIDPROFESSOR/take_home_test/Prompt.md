Prompt:
You're building an application for a used car dealership to help it sell its inventory of vehicles -- cars, motorcycles, and trucks.  This particular dealership is really particular about the types of each vehicle that it has:

Cars: BMW, Audi, Volkswagen 
Trucks: Ford, Volkswagen
Motorcycle: BMW, Ducati, Honda

The dealership always has two particular models for each make in its vehicle class.  It always has 3 and only 3 of each make/model in stock, each with a unique VIN numbers.

    ** I think this means, for example, for BMW Cars, there are two models of a BMW Car (M3 and M5) and there are 3 of each of those models in stock each with a unique VIN # **

Their customers are particularly interested in being able to browse the entire inventory, understand the similarities between all these options, and tease out the differences so that they can find the vehicle that's best for them.  To that end, their customers are particularly interested in knowing the following about each item in their inventory:

Number of doors, (Applies to cars and trucks)
Their headlight situation. (Applies to all vehicles)
Paint Color. (Applies to all vehicles)
Their minimum breaking distance at 60mph (Applies to all vehicles)

    ** It looks like the only unique property here would be for # of doors for a motorcycle. Otherwise, all vehicles share these same properties.

Implement the following:

In a new laravel project:

Scaffold out a class structure that captures the details listed above and that would make extending the dealership's inventory easily in the future.  Think about what design patterns might make it easiest for the dealership to expand the range of its inventory in the future.

Be clear in your design which classes are Models and which ones are not.  You can return a solution in which all classes are Models, or where only some are.  While your models don't need to be fully working code, their hierarchy and what they extend (if anything) should be clearly denoted, and any relationships between these models should be created and noted with the appropriate laravel relationship definition.  

In a controller, scaffold the following API calls. You should be writing Eloquent queries that use the class hierarchy you wrote above: they don't need to run, but their intent/clarity should be obvious.

- Return a list of all the distinct makes the dealership has.
- Return a list of all the distinct models the dealership has by vehicle type.  Allow filtering by a specific vehicle type.
- Return a list of all the individual physical vehicles that the dealership has in stock (VIN + any other details you think are relevant about the vehicle).


