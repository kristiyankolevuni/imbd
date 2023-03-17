<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Movie Rating</title>
    <style>
      table {
        width: 50%;
        margin: 0 auto;
        border-collapse: collapse;
      }
      th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
      }
      th {
        background-color: #ddd;
      }
    </style>
  </head>
  <body>
    <div align="center">
      <h1>Docker Movie Rating</h1>
      <img src="Moby-logo.png" alt="Moby Logo">
      <h1> YOUR stu[Faculty number]@uni-plovdiv.bg </h1>
      <table>
        <tr>
          <th>NAME</th>
          <th>SCORE</th>
        </tr>
<?php
   require_once ('config.php');

   try {
      $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
      $query = $connection->query("SELECT name, rating FROM movie ORDER BY rating DESC");
      $movies = $query->fetchAll();

      if (empty($movies)) {
         echo "<tr><td colspan='2'>No data available.</td></tr>\n";
      } else {
         foreach ($movies as $title) {
            echo "<tr><td>{$title['name']}</td><td>{$title['rating']}</td></tr>\n";
         }
      }
   }
   catch (PDOException $e) {
      echo "<tr><td colspan='2'><div align='center'>\n";
      echo "Unable to connect to the database. Please try again. <a href='#' onclick='document.getElementById(\"error\").style.display = \"block\";'>Details</a><br>\n";
      echo "<span id='error' style='display: none;'><small><i>".$e->getMessage()." <a href='#' onclick='document.getElementById(\"error\").style.display = \"none\";'>Hide</a></i></small></span>\n";
      echo "</div></td></tr>\n";
   }
?>
      </table>
      <br><br>
      <small>Processed by <b><?php echo gethostname(); ?></b> on <?php echo date('Y-m-d H:i:s'); ?></small>
    </div>
  </body>
</html>
