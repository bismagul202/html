<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details Form</title>
</head>
<body>
    <h1>Enter Your Details</h1>
    <form action="process.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
class User {
    private $name;
    private $email;
    private $age;

    public function __construct($name, $email, $age) {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    public function validate() {
        $errors = [];

        if (empty($this->name)) {
            $errors[] = "Name is required.";
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }

        if ($this->age < 0) {
            $errors[] = "Age cannot be negative.";
        }

        return $errors;
    }

    public function getConfirmationMessage() {
        return "Thank you, {$this->name}! Your details have been submitted successfully.";
    }
}


// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    // Create a User object
    $user = new User($name, $email, $age);

    // Validate the user input
    $errors = $user->validate();

    if (empty($errors)) {
        // No errors, display the confirmation message
        echo "<h1>Confirmation</h1>";
        echo "<p>" . $user->getConfirmationMessage() . "</p>";
    } else {
        // Display errors
        echo "<h1>Errors</h1>";
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
        echo '<a href="index.php">Go back</a>';
    }
}
?>

</body>
</html>
