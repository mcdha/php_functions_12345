<!DOCTYPE html>
<html>
<head>
    <title>Visibleby3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h3> Create a function that determine if a given number is divisible by 3.</h3>
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

function isDivisibleBy3($number) {
    if ($number % 3 === 0) {
        return true;
    } else {
        return false;
    }
}

if (isDivisibleBy3($number)) {
    echo "$number is divisible by 3";
} else {
    echo "$number is not divisible by 3";
}

}

?>