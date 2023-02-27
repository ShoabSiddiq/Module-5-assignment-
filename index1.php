<!-- Create an HTML form that allows users to input their name and email address. The form should have two fields: one for name and one for email. Use appropriate HTML tags to structure the form. -->


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
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
    <div class="row">
        <div class="column column-40 column-offset-20">
            <form method="POST">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name"><br><br>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email"><br><br>
                <input type="submit" value="Submit">
            </form>
        </div>
</body>

</html>