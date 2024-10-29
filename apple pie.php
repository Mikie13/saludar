<?php
// Information about an Apple Pie
$dessertName = "Apple Pie";
$ingredients = ["Apples", "Sugar", "Cinnamon", "Butter", "Flour"];
$pricePerPie = 12.00;
$slicesPerPie = 6;
$pricePerSlice = $pricePerPie / $slicesPerPie;

echo "Dessert: $dessertName\n";
echo "Ingredients: " . implode(", ", $ingredients) . "\n";
echo "Total price for one pie: $$pricePerPie\n";
echo "Price per slice: $$pricePerSlice";
?>
