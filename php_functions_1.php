<!DOCTYPE html>
<html>
<head>
    <title>vowelsConsonants</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h3> Create a function that check if a character is a vowel or consonant.</h3>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="m">Enter a letter:</label>
        <input type="text" id="m" name="m">
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $character = $_POST['m'];

    function checkVowelConsonant($char) {
        $vowels = array('a', 'e', 'i', 'o', 'u');

        $char = strtolower($char);

        if (in_array($char, $vowels)) {
            return "Vowel";
        } else {
            return "Consonant";
        }
    }

    $result = checkVowelConsonant($character);
    echo "$character is a $result";
}

?>
