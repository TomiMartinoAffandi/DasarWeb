<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <form method="POST" action="">
        <label for="input">Masukkan teks:</label>
        <input type="text" name="input" id="input">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" ><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        echo $input ;

        $email = $_POST['email'];
        if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email anda valid: " ."<br>". htmlspecialchars($email, ENT_QUOTES, 'UTF-8') . "</p>";
        } else {
            echo "email anda tidak valid";
        }
        
    }
    ?>
</body>

</html>