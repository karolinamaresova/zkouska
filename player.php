<?php
include_once __DIR__ . DIRECTORY_SEPARATOR . "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>
<body>
<?php




$idPlayer = filter_input(INPUT_GET, "idPlayer");


$sql = $mysqli->prepare("SELECT id_player, firstname, surname, birthday, count FROM `players` WHERE id_Player = ?"
);
$sql->bind_param("s", $idPlayer);
$sql->execute();
$player = $sql->get_result()->fetch_assoc();
  
$date = new DateTime($player["birthday"]);
$now = new DateTime();
$interval = $now->diff($date);
 





?>
    <h2>Players</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Surname</th>
        <th>Age</th>
        <th>Goals</th>
        


      </tr>
    </thead>
    <tbody>
        <tbody>
            <td><?= $player["firstname"]?></td>
            <td><?= $player["surname"]?></td>            
            <td><?= $interval->y;?></td>
            <td><?= $player["count"] ?></td>

        </tbody>
    </table>

</body>
</html>

<?php
include_once __DIR__ . DIRECTORY_SEPARATOR . "footer.php";
?>