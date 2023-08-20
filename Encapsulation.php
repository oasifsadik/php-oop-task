<?php
class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary);
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        if ($salary >= 0) {
            $this->salary = $salary;
        } else {
            throw new InvalidArgumentException("Salary must be non-negative value.");
        }
    }
}
$employee = new Employee("Jisan", 10000);

echo "Employee Name: " . $employee->getName() ."<br>";
echo "Salary: ৳" . $employee->getSalary()."<br>";

try {
    $employee->setSalary(20000);
    echo "New Salary: ৳" . $employee->getSalary()."<br>";
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage()."<br>";
}
try {
    $employee->setSalary(-1000);
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}

?>