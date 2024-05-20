<?php
  $page = "aktualitates";
  require "header.php";
  require 'connect_db.php';

  // Define the SQL query to fetch news
  $sql = "SELECT Nosaukums, Attels, Apraksts FROM itspeks_jaunumi";

  // Execute the query using mysqli
  $result = mysqli_query($savienojums, $sql);

  // Check for errors
  if (!$result) {
    die("Error fetching news: " . mysqli_error($savienojums));
  }
?>

<section id="aktualitates">
  <br><br><br><br><br>
  <h1 class="text-green-500">Aktuālās ziņas</h1>
  <p class="text-3xl italic text-green-500">
    TAILWIND TEST
  </p>

  <h2>Jaunumi</h2>

  <?php
    // Loop through each news item in the result
    while ($row = mysqli_fetch_assoc($result)) {
      $nosaukums = $row['Nosaukums'];
      $attels = $row['Attels'];
      $apraksts = $row['Apraksts'];
  ?>

      <div class="jaunums">
        <img src="<?php echo $attels; ?>" alt="Jaunuma attēls">
        <h3><?php echo $nosaukums; ?></h3>
        <p><?php echo $apraksts; ?></p>
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
