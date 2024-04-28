<h1>
    Printing 3's table using OOP in PHP
</h1>

<?php
class MultiplicationTable {
    public function printTable($num, $limit) {
        echo "Table of $num:<br>";
        for ($i = 1; $i <= $limit; $i++) {
            echo "$num * $i = " . ($num * $i);
            if ($i != $limit) {
                echo "<br>";
            }
        }
    }
}

$table = new MultiplicationTable();
$table->printTable(3, 10); // Print 3's table up to 10
?>
<h1>
Calculator in PHP using OOP
</h1>
<?php
class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }

    public function divide($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Cannot divide by zero";
        }
    }
}

$calc = new Calculator();
echo "Addition: " . $calc->add(5, 3) . "<br>";
echo "Subtraction: " . $calc->subtract(5, 3) . "<br>";
echo "Multiplication: " . $calc->multiply(5, 3) . "<br>";
echo "Division: " . $calc->divide(5, 3) . "<br>";
?>

<h1>
To-do list in PHP using OOP
</h1>

<?php
class ToDoList {
    private $tasks = [];

    public function addTask($task) {
        $this->tasks[] = $task;
    }

    public function getTasks() {
        return $this->tasks;
    }

    public function removeTask($index) {
        if (isset($this->tasks[$index])) {
            unset($this->tasks[$index]);
            $this->tasks = array_values($this->tasks); // Re-index array
        }
    }
}

$list = new ToDoList();
$list->addTask("Task 1");
$list->addTask("Task 2");
$list->addTask("Task 3");

echo "Tasks:\n";
foreach ($list->getTasks() as $index => $task) {
    echo "$index: $task\n";
}

// Remove a task
$list->removeTask(1);

echo "\nAfter removing a task:\n";
foreach ($list->getTasks() as $index => $task) {
    echo "$index: $task\n";
}
?>

<h1>
Print area of shapes (triangle, rectangle, circle) using OOP
</h1>
<?php
class ShapeAreaCalculator {
    public function triangleArea($base, $height) {
        return 0.5 * $base * $height;
    }

    public function rectangleArea($length, $width) {
        return $length * $width;
    }

    public function circleArea($radius) {
        return pi() * $radius * $radius;
    }
}

$calculator = new ShapeAreaCalculator();
echo "Area of Triangle: " . $calculator->triangleArea(5, 3) . "\n";
echo "Area of Rectangle: " . $calculator->rectangleArea(5, 3) . "\n";
echo "Area of Circle: " . $calculator->circleArea(5) . "\n";
?>

<h1>
Convert temperature from Celsius to Fahrenheit using OOP

</h1>
<?php
class TemperatureConverter {
    public function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }
}

$converter = new TemperatureConverter();
echo "Temperature in Fahrenheit: " . $converter->celsiusToFahrenheit(25) . "\n";
?>

