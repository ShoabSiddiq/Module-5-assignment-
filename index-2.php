<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Sheet</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php

                // Define the Person class
                class Person
                {
                    private $name;
                    private $email;

                    public function setName($name)
                    {
                        $this->name = $name;
                    }

                    public function setEmail($email)
                    {
                        $this->email = $email;
                    }

                    public function getName()
                    {
                        return $this->name;
                    }

                    public function getEmail()
                    {
                        return $this->email;
                    }
                }
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Retrieve the name and email from the form using the $_POST superglobal               //variable
                    $name = $_POST['name'];
                    $email = $_POST['email'];

                    // Create a new instance of the Person class
                    $person = new Person();

                    // Set the name and email properties of the person object based on the form data
                    $person->setName($name);
                    $person->setEmail($email);

                    // Display the name and email properties on the webpage using the getName() //and getEmail() methods
                    echo "<p>Name: " . $person->getName() . "</p>";
                    echo "<p>Email: " . $person->getEmail() . "</p>";
                }

                ?>

            </div>

        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name"><br><br>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email"><br><br>
                    <input  type="submit" value="Submit">
                </form>

            </div>
        </div>
    </div>
</body>

</html>
