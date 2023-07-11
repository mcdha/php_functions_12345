<!DOCTYPE html>
<html>
<head>
    <title>Number</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h3> Create a function that convert a digit into its word counterpart. E.g. 721 to Seven Two One.</h3>
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

function convertDigitToWord($number) {
    $digitWords = array(
        0 => 'Zero', 1 => 'One', 2 => 'Two', 3 => 'Three', 4 => 'Four',
        5 => 'Five', 6 => 'Six', 7 => 'Seven', 8 => 'Eight', 9 => 'Nine'
    );

    $word = '';
    $digits = str_split($number);

    foreach ($digits as $digit) {
        if (isset($digitWords[$digit])) {
            $word .= $digitWords[$digit] . ' ';
        }
    }

    return trim($word);
}

$result = convertDigitToWord($number);
echo "$number is $result";

}

?>