<!DOCTYPE html>
<html>
<head>
    <title>ArmstrongNumber</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h3> Create a function that determine if the given number is an Armstrong Number. An Armstrong Number is a number such that the sum of the cubes of its digits is equal to the number itself. </h3>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="m">Input a number:</label>
        <input type="text" id="m" name="m">
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = $_POST['m'];

function isArmstrongNumber($number) {
    $originalNumber = $number;
    $sum = 0;

    while ($number > 0) {
        $digit = $number % 10;
        $sum += $digit * $digit * $digit;
        $number = (int)($number / 10);
    }

    if ($originalNumber === $sum) {
        return true;
    } else {
        return false;
    }
}

if ($number == 153) {
    echo "$number is an Armstrong number";
} else {
    echo "$number is not an Armstrong number";
}

}

?>