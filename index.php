<!DOCTYPE html>
<html>
<head>
    <title>Calculate Discriminant</title>
    <script>
        function validateForm() {
            var a = document.getElementById("a").value;
            var b = document.getElementById("b").value;
            var c = document.getElementById("c").value;
            
            if (a === "" || b === "" || c === "") {
                alert("Please fill up all the variables.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

<h1 style="font-weight: bold;">Discriminant of a quadratic equation</h1>

<form method="post" action="" onsubmit="return validateForm();">
    <label for="a">A:</label>
    <input type="number" id="a" name="a" placeholder="Value of A here"><br><br>

    <label for="b">B:</label>
    <input type="number" id="b" name="b" placeholder="Value of B here"><br><br>

    <label for="c">C:</label>
    <input type="number" id="c" name="c" placeholder="Value of C here"><br><br>

    <input type="submit" value="Calculate">
</form>

<?php

function calculateDiscriminant($a, $b, $c) {
    return pow($b, 2) - (4 * $a * $c);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    
    $discriminant = calculateDiscriminant($a, $b, $c);

    
    echo "<p>The values of A, B, and C entered by the user are:</p>";
    echo "<ul>";
    echo "<li>A: " . $a . "</li>";
    echo "<li>B: " . $b . "</li>";
    echo "<li>C: " . $c . "</li>";
    echo "</ul>";
    echo "<p>The discriminant of the quadratic equation ax^2 + bx + c is: " . $discriminant . "</p>";
}
?>

</body>
</html>
