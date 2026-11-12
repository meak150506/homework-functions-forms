<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associated Arrays</title>
</head>
<body>
    <?php
   
        $person = array("name" => "John", "age" => 30, "city" => "New York");
        $student = ["name" => "Alice", "grade" => 85, "subject" => "Math"];
        $product = ["name" => "Laptop", "price" => 999.99, "in_stock" => true];
     
        echo "The person's name is: " . $person["name"] . "<br>";
        echo "The student's name is: " . $student["name"] . "<br>";
        echo "The product's name is: " . $product["in_stock"] . "<br>";
    ?>
</body>
</html>