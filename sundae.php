<?php
// Information about an Ice Cream Sundae
$dessertName = "Ice Cream Sundae";
$ingredients = ["Vanilla ice cream", "Chocolate sauce", "Whipped cream", "Cherries"];
$basePrice = 3.00;
$extraToppings = 2.50;
$totalPrice = $basePrice + $extraToppings;

echo "Dessert: $dessertName\n";
echo "Ingredients: " . implode(", ", $ingredients) . "\n";
echo "Base price: $$basePrice\n";
echo "Price with extra toppings: $$totalPrice";
?>
