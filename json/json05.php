<?php
$movie = '{
    "Instructions": "delete everything in this object and make your own JSON object using different data.",
    "Title": "The Graduate",
    "Year": "1967",
    "Rated": "Approved",
    "Released": "22 Dec 1967",
    "Runtime": "106 min",
    "Genre": [
      "Comedy",
      "Drama",
      "Romance"
    ],
    "Director": "Mike Nichols",
    "Writers": [
      "Calder Willingham (screenplay)",
      "Buck Henry (screenplay)",
      "Charles Webb (based on the novel by)"
    ],
    "Actors": [
      "Anne Bancroft",
      "Dustin Hoffman",
      "Katharine Ross",
      "William Daniels"
    ],
    "Plot": "Sosok Spidey baru versi Holland ini muncul pertama kali di film Captain America: Civil War. Spider-Man Homecoming dibuka dengan adegan yang beririsan dengan bagian film Civil War. Dalam adegan itu ditampilkan Peter Parker yang sibuk membuat vlog untuk mengabadikan proses menuju detik-detik sebelum dia beraksi merebut perisai Captain America sesuai perintah Tony Stark (Robert Downey Jr) alias Iron Man. Peter Parker digambarkan sebagai remaja yang semangatnya menggebu-gebu dalam membasmi kejahatan. Ia sangat antusias untuk menanti misi lain agar bisa kembali beraksi dengan kostum Spider-Man canggih pemberian Tony Stark. Antusiasmenya dianggap angin lalu. Tak ada misi baru dari Tony Stark. Peter memutuskan untuk menghukum orang-orang jahat di sekitarnya setiap pulang sekolah demi membuktikan bahwa dirinya mampu dan pantas jadi pahlawan super. Suatu hari, Peter mendapati sekelompok perampok ATM sedang beraksi menggunakan senjata canggih yang terbuat dari batu berkilau misterius. Peristiwa itu kemudian mempertemukannya dengan Vulture alias Adrian Toomes (Michael Keaton) yang beraksi dengan kostum bersayap canggih selayaknya manusia burung. Terlepas dari itu semua, Peter adalah anak biasa yang menghadapi problematika remaja pada umumnya. Baginya, sekolah kadang terasa membosankan, tapi di situ dia bisa bertemu cewek kakak kelas yang jadi cinta monyetnya. Dia bersahabat dengan Ned, kawan baik yang tak sengaja mengetahui identitas rahasia dan belakangan jadi tangan kanannya ketika dia sedang beraksi. Peter yang cerdas juga disibukkan dengan latihan untuk kompetisi mewakili sekolah, tempatnya berinteraksi dengan Liz (Laura Harrier), gadis senior yang ditaksirnya. Ada juga gadis lain, MJ (Zendaya), yang berlagak cuek tapi sering ada di dekat Peter dan Ned.",
    "Language": "English",
    "Country": "USA",
    "Awards": "Won 1 Oscar. Another 22 wins & 13 nominations.",
    "poster":"https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg",
    "imdbRating": "8.1",
    "imdbVotes": "183,131",
    "imdbID": "tt0061722"
  }';
   $data = json_decode($movie);
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
    <center><h3><?php echo $data->Title . "<br><br> ";?></h3></center> 
    <center><img src="https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg" width="200" height="300"></center> <br>
    <center><?php echo $data->Plot;?></center> <br>  
    <?php echo "Year :" . $data->Year . "<br>";?>
    <?php echo "Released :" . $data->Released . "<br>";?>
    <?php echo "Runtime :" . $data->Runtime . "<br>";?>
    <?php echo "Genre : " . implode(" , ", $data->Genre) . "<br>";?>
    <?php echo "Director :" . $data->Director . "<br>";?>
    <?php echo "Writers : " . implode(" , ", $data->Writers) . "<br>";?>
    <?php echo "Actors : " . implode(" , ", $data->Actors) . "<br>";?>
    <?php echo "Language : " . $data -> Language . "<br>";?>
    <?php echo "Country : " . $data -> Country . "<br>";?>
    <?php echo "Awards : " . $data -> Awards . "<br>";?>
    <?php echo "Rating : " . $data -> imdbRating . "<br>";?>
    <?php echo "Votes : " . $data -> imdbVotes . "<br>";?>
    <?php echo "ID : " . $data -> imdbID . "<br>";?>

</body>
</html>