```php
function calculateAverage(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 40, 0];
$average = calculateAverage($numbers);
echo "Average: " . $average; // Output: Average: 20

$numbers2 = [];
echo "Average: " .calculateAverage($numbers2); // Output: Average: 0

$numbers3 = [10,20, 'a'];
$average3 = calculateAverage($numbers3);
echo "Average: " . $average3; //Warning: Division by zero
```