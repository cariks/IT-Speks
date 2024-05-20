<?php
  $page = "vakances";
  require "header.php";
  require 'connect_db.php';

  // Define the SQL query to fetch vacancies (excluding ID)
  $sql = "SELECT Nosaukums, Apraksts, Amats, Attels, Lokacija, Atalgojums, Prasmes, Slodze, Dokumenti FROM itspeks_vakances";

  // Execute the query using mysqli
  $result = mysqli_query($savienojums, $sql);

  // Check for errors
  if (!$result) {
    die("Error fetching vacancies: " . mysqli_error($savienojums));
  }
?>

<section id="vakances">
  <h2>Vakances</h2>

  <?php
    // Loop through each vacancy in the result
    while ($row = mysqli_fetch_assoc($result)) {
      $nosaukums = $row['Nosaukums'];
      $apraksts = $row['Apraksts'];
      $amats = $row['Amats'];
      $attels = $row['Attels'];
      $lokacija = $row['Lokacija'];
      $atalgojums = $row['Atalgojums'];
      $prasmes = $row['Prasmes'];
      $slodze = $row['Slodze'];
      $dokumenti = $row['Dokumenti'];
  ?>

      <div class="vakance">
        <?php if ($attels) { ?>
          <img src="<?php echo $attels; ?>" alt="Vakances attēls">
        <?php } ?>

        <h3><?php echo $nosaukums; ?> - <?php echo $amats; ?></h3>
        <p><?php echo $apraksts; ?></p>

        <ul>
          <li>Lokācija: <?php echo $lokacija; ?></li>
          <li>Atalgojums: <?php echo $atalgojums; ?></li>
        </ul>

        <p><b>Prasmes:</b> <?php echo $prasmes; ?></p>
        <p><b>Slodze:</b> <?php echo $slodze; ?></p>

        <?php if ($dokumenti) { ?>
          <p><b>Dokumenti:</b> <?php echo $dokumenti; ?></p>
        <?php } ?>
      </div>

  <?php
    }

    // Close the connection (optional, recommended at script end)
    mysqli_close($savienojums);
  ?>

</section>

<?php
  require "footer.php";
?>
