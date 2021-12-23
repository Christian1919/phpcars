<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulaire Voitures</h1>
    <form method="get" action="add.php">
        <label>Nom de la voiture</label>
        <input type="text" name="car_name" id="carName">
        <button type="submit">Valider</button>
    </form>
    <div>
        <?php
        // si car_name est fourni dans l'url alors afficher car_name
        //sinon ne rien afficher
        $car_name = $_GET['car_name'] ?? '';
        if (!empty($car_name)) {
            echo "<p>$car_name</p>";
        }
        ?>
    </div>
</body>

</html>