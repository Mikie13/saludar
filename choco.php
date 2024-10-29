<?php
// Information about a Chocolate Cake
$dessertName = "Chocolate Cake";
$ingredients = ["Flour", "Sugar", "Cocoa powder", "Butter", "Eggs"];
$pricePerSlice = 4.50;
$slices = 8;
$totalPrice = $pricePerSlice * $slices;

echo "Dessert: $dessertName\n";
echo "Ingredients: " . implode(", ", $ingredients) . "\n";
echo "Price per slice: $$pricePerSlice
