<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post">
        <label>nbr:1</label>
        <input type="number" name="nbr1" placeholder="entre un nbr 1"><br><br>


        <label>operation</label>
            <select name="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="/">/</option>
                <option value="*">*</option>


            </select><br><br>

        <label>nbr:2</label>
        <input type="number" name="nbr2" placeholder="entre un nbr 2"><br><br>

       

        <input type="submit">



    </form>


<?php
if (isset($_POST['nbr1']) && isset($_POST['nbr2']) && isset($_POST['operation'])) {

    $nb1 = $_POST['nbr1'];
    $nb2 = $_POST['nbr2'];
    $op = $_POST['operation'];

    
    if (is_numeric($nb1) && is_numeric($nb2)) {

        switch ($op) {
            case '+':
                $resulta = $nb1 + $nb2;
                break;
            case '-':
                $resulta = $nb1 - $nb2;
                break;
            case '*':
                $resulta = $nb1 * $nb2;
                break;
            case '/':
                if ($nb2 != 0) {
                    $resulta = $nb1 / $nb2;
                } else {
                    $resulta = "erreur";
                }
                break;
            default:
                $resulta = "Operation ";
        }

        echo "<p>resulta: <strong>" .$resulta. "</strong></p>";

    } else {
        echo "<p>Erreur</p>";
    }
}


?>

        



</body>
</html>