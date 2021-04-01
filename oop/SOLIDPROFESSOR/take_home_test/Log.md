# How I Used My Time:

    # Initial commit was at 8:56 PM 
        Step 1
            8:56 PM - 9:35
                - Create potential class hierarchy and document which design pattern I chose in log and in class files
                - Layout thought process and plan 
        Step 2
            9:35 PM - 10:41 PM
                - Instantiate Laravel App
                - Skim Laravel Eloquent Docs
                - Create Models, Controllers and Routes to handle features
        Step 3
            10:41 PM - 10:56 PM 
                - Document process


# Step 1 - Thought process and plan

1. Design the classes to get a better idea of what potential models could be. 
    - In the spirit of continuing to practice my OOP, I wanted to think through what would be a the best class hierarchy given the prompt.

    # Issue number one: What design will cater to motorcycle not having doors where cars and trucks do?
    Cars, Trucks and Motorcycles all share the properties that the customers care about except for number of doors (which motorcycles don't have). When I ran into this, I thought about two options:

    # Option 1: Vehicle Abstract Class
    One idea could be to have a vehicle abstract class that holds 3 properties:
    - headlight_quality
    - paint_color
    - min_breaking_distance

    I would omit the number of doors property from this since this is only shared between cars and trucks and I could create that property when creating my car / truck class.

    # Option 2: Create VehicleWithDoors abstract class and VehicleWithoutDoors abstract class
    - I'm not entirely sure why, but in some ways it bothers me that I would create an abstract class that caters to motorcycles instead of cars and trucks that are two classes that share something in common. Instead of creating a vehicle class and adding the doors property to cars and trucks, maybe I could have two abstract classes: VehicleWithDoors and VehicleWithoutDoors. Maybe in the future there will be other types of vehicles that are classified as vehicles that will not have doors? 

    # I went with Option 1 because...
    I decided to go with option #1 because I don't know how often a car dealership will be getting vehicles with no doors other than motorcycles and I also realized that there are lots of two door cars or four door cars, so having that property for cars and trucks makes more sense. It would be weird to have the motorcycle class because it doesn't have any properties / methods to add from the abstract class, but maybe this will make it easier for the company in the future to create motorcycle objects since it's waiting to be built upon. 

2. Think about how to build out features based off what the customers need and what will make the car dealership's system more effective.

    "Scaffold out a class structure that captures the details listed above and that would make extending the dealership's inventory easily in the future.  Think about what design patterns might make it easiest for the dealership to expand the range of its inventory in the future."

    - Return a list of all the distinct makes the dealership has.
    - Return a list of all the distinct models the dealership has by vehicle type.  Allow filtering by a specific vehicle type.
    - Return a list of all the individual physical vehicles that the dealership has in stock (VIN + any other details you think are relevant about the vehicle).

    # Thinking Through Features

    ## Return a list of all the dinstct makes the dealership has:
    So, I need the ability to return a list of distinct makes a dealership has 
    I imagine this would look like a vehicle table

                             vehicle table
    _____________________________________________________________________________
    | id | make | model | type | zero-sixty | doors | color | head_light_quality|
    -----------------------------------------------------------------------------
    This way, if someone needed to perform a query and needed the distinct models available, you coudl do something like:
        SELECT DISTINCT make from vehicle

    ## Return a list of all the distinct models the dealership has by vehicle type
        SELECT DISTINCT model FROM vehicle where type = <type_param>

    ## Return a list of all individual physical vehicles that the dealership has in stock (VIN + Any other details)
    Maybe here I create an inventory table that corresponds relates to vehicle by the id
                        
                        inventory table
    _________________________________________________________
    | vin | vehicle_id | in_stock | date_in_stock | date_sold|
    ---------------------------------------------------------

# Step 2 - Build

3. Incorporate this into Laravel
    - I think this is how I would want to do it:
        (I think Luke mentioned not to worry about actually creating the tables / migrations)
        (Let's assume that the migrations are made and in the migrations, we've made the one to many relationship between vehicle and inventory)

        1. Create a Vehicle Model
        2. Create a Inventory Model
        3. Create a CarController 
            - Inside of CarController create methods that would run the Eloquent queries based off what the customers need
        4. Create the routes that will handle the customer's needs and plug them into the controller

    Let's see how it goes? :) 

# Step 3 - Document
    - I pretty much stuck to my plan that I laid out in step 3:
        *Assuming that the migrations were created and the relationships were established between the tables in the migration*
        1. Created a Vehicle Model and an Inventory Model
            - Used Eloquent to establish a one to many relationship between Vehicle Model and Inventory Model
        2. Create a Vehicle Controller and an Inventory Controller

            - The Vehicle Controller handled the first two queries:

                Query #1
                - Return a list of all the distinct makes the dealership has.
                    For this I made a route for /vehicle/make

                Query #2
                - Return a list of all the distinct models the dealership has by vehicle type.  
                Allow filtering by a specific vehicle type.
                    For this I made a route for /vehicle/model/{type}
                        This would allow the user to type in 'car', 'truck', or 'motorcycle' and query 
                        uses 'type' as a matching condition with a WHERE clause

                Query #3
                - Return a list of all the individual physical vehicles that the dealership has in stock 
                (VIN + any other details you think are relevant about the vehicle).
                    For this I made a route for /inventory and a method called inStock
                        This method would return the query result from joining the inventory table and the vehicles table
                        returning the vehicles that are in stock
                        This returned the make, model, type, zero-sixty breaking, doors, color, head light quality, VIN, 
                        in_stock and date_in_stock.

