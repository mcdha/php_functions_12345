<?php

function deleteRecurringElements($sortedList) {
    $result = array();

    $length = count($sortedList);
    $previousElement = null;

    for ($i = 0; $i < $length; $i++) {
        $currentElement = $sortedList[$i];

        if ($currentElement !== $previousElement) {
            $result[] = $currentElement;
            $previousElement = $currentElement;
        }
    }

    return $result;
}

// Example usage:
$list = array('apple', 'apple', 'banana', 'banana', 'banana', 'orange', 'peach', 'peach');
$uniqueList = deleteRecurringElements($list);

echo "<h3>Create a function that delete the recurring elements inside a sorted list of strings.</h3>";

echo "Current List: apple, apple, banana, banana, banana, orange, peach, peach"; 
echo "<br>";
echo "Updated List: " . implode(" ", $uniqueList);



?>