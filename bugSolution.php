```php
function calculateAverage(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array
  }

  //Check if all elements are numeric
  if (!allNumeric($numbers)){
    return NAN; //Return NAN if non-numeric value is found
  }
  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

function allNumeric(array $numbers):bool{
  foreach ($numbers as $number){
    if (!is_numeric($number)){
      return false;
    }
  }
  return true;
}

$numbers = [10, 20, 30, 40, 0];
$average = calculateAverage($numbers);
echo "Average: " . $average; // Output: Average: 20

$numbers2 = [];
echo "Average: " .calculateAverage($numbers2); // Output: Average: 0

$numbers3 = [10,20, 'a'];
$average3 = calculateAverage($numbers3);
echo "Average: " . $average3; // Output: Average: NAN
```