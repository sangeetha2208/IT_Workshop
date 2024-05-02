<html>
<body>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Retrieve form data
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

echo "num 1: $num1 <br>";
echo "num 2: $num2 <br>";
echo "The sum of $num1 and $num2 is:" .$num1 + $num2;
}
?>

</body>
</html>
