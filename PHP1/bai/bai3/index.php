<?php

include_once "DBUtil.php";

$dbHelper = new DBUntil();
$categoris = $dbHelper->select("select * form categories");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      
          <?php
          
               foreach($categoris as $cate) {
               echo "<tr>"
                  echo " <td>John</td>"
                    <td>Doe</td>
                    <td>john@example.com</td>
                  </tr>
               }

          ?>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>

    </tbody>
  </table>
</div>

</body>
</html>