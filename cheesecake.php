<?php
// Information about a Cheesecake
$dessertName = "Cheesecake";
$ingredients = ["Cream cheese", "Sugar", "Eggs", "Vanilla extract", "Graham crackers"];
$caloriesPerSlice = 320;
$slices = 10;
$totalCalories = $caloriesPerSlice * $slices;

echo "Dessert: $dessertName\n";
echo "Ingredients: " . implode(", ", $ingredients) . "\n";
echo "Calories per slice: $caloriesPerSlice kcal\n";
echo "Total calories for whole cheesecake: $totalCalories kcal";
?>
