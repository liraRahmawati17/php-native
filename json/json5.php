<?php
$movie = '{
    "Instructions": "delete everything in this object and make your own JSON object using different data.",
    "Title": "Spider-Man 3",
    "Year": "2007",
    "Rated": "Approved",
    "Released": "2 may 2007",
    "Runtime": "2h 19min",
    "Genre": [
      "Action",
      "Adventure",
      "Sci-fi"
    ],
    "Director": "Sam Raimi",
    "Writers": [
      "Sam Raimi(screenplay)",
      "Ivan Raimi(screenplay)",
      "Alvin Sargent(screenplay)"
    ],
    "Actors": [
      "Tobey Maguire",
      "Kirsten Dunst",
      "James Franco",
      "Thomas Haden Church"
    ],
    "Plot": "A strange black entity from another world bonds with Peter Parker and causes inner turmoil as he contends with new villains, temptations, and revenge.",
    "Language": "English",
    "Country": "USA",
    "Awards": "Won 1 Oscar. Another 22 wins & 13 nominations.",
    "poster":"https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg",
    "imdbRating": "8.1",
    "imdbVotes": "183,131",
    "imdbID": "tt0061722"
  }';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>movie</title>
    
</head>
<body>
    <table>
    
    <?php $data = json_decode($movie);?>
    <center><h3><?php echo $data->Title . "<br>";?></h3></center> 
    <center><img src="https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg" width="200" height="300"></center> 
    <tr>
    <p style="text-align:center;"><?php echo  $data->Plot . "<br>";?></p>
    </tr> 
    <tr>
      <td> <b> Year </b></td> 
      <td>:</td>
      <td><?php echo $data->Year . "<br>";?></td>
    </tr>
    <tr>
    <td> <b> Released </b></td>
    <td>:</td> 
      <td><?php echo $data->Released . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Runtime </b></td>
      <td>:</td>
      <td><?php echo $data->Runtime . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Genre </b></td>
      <td>:</td>
      <td><?php echo "<li>". implode("<li>", $data->Genre) . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Language </b></td>
      <td>:</td>
      <td><?php echo  $data->Language . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Country </b></td>
      <td>:</td>
      <td><?php echo  $data->Country . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Director </b></td>
      <td>:</td>
      <td><?php echo  $data->Director . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Writers </b></td>
      <td>:</td>
      <td><?php echo "<li>". implode("<li>", $data->Writers) . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Actors </b></td>
      <td>:</td>
      <td><?php echo "<li>". implode("<li>", $data->Actors) . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Rating </b></td>
      <td>:</td>
      <td><?php echo  $data->imdbRating . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> Votes </b></td>
      <td>:</td>
      <td><?php echo  $data->imdbVotes . "<br>";?></td>
    </tr>
    <tr>
      <td> <b> ID </b></td>
      <td>:</td>
      <td>    <?php echo  $data->imdbID . "<br>";?></td>
    </tr>
    </table>
</body>
</html>