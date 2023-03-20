
<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>






<div class="container">

<table class="hotel-table">
      <thead>
           <tr>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Parcheggio</th>
                <th>Voto</th>
                <th>Distanza dal centro</th>
             </tr>
        </thead>
            <tbody>
                 <?php foreach ($hotels as $hotel) { ?>
                    <tr>
                           <td><?php echo $hotel['name']; ?></td>
                           <td><?php echo $hotel['description']; ?></td>
                           <td><?php echo $hotel['parking'] ? 'disponibile' : 'non disponibile'; ?></td>
                           <td><?php echo $hotel['vote']; ?></td>
                           <td><?php echo $hotel['distance_to_center'] . ' km'; ?></td>
                     </tr>
              <?php } 
?>           </tbody>
    </table>


</div> <!--  // fine container -->







<style>

.container{
    max-width: 1280px;
    margin: 0 auto;
}

.hotel-table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid black;
  }
  
  .hotel-table th,
  .hotel-table td {
    font-size: 25px;
    text-align: center;
    border: 1px solid black;
  }
  
</style>
</body>
</html>