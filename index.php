<?php
include_once __DIR__ . DIRECTORY_SEPARATOR . "header.php";
?>


<?php

?>




<h2>Players</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Surname</th>




      </tr>
    </thead>
    <tbody>
      <?php
$sql = $mysqli->prepare("SELECT * 
FROM players");
$sql->execute();
$result = $sql->get_result();
while ($player = $result->fetch_assoc()) {
    ?>

      <a href="player.php?idPlayer=<?php echo $player['id_player']; ?>">



        <tr>
          <td>
            <?php echo $player['firstname'] ?>
          </td>
          <td>
            <?php echo $player['surname'] ?>
          </td>


          <td>
            <a href="player.php?idPlayer=<?= $player['id_player'] ?>" class="btn btn-primary"></a>
          </td>
        </tr>



        <?php
}
?>

    </tbody>
  </table>
</div>


<?php
include_once __DIR__ . DIRECTORY_SEPARATOR . "footer.php";
?>