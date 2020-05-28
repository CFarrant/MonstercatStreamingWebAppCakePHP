<?php
  use Cake\ORM\TableRegistry;
  $songs = TableRegistry::getTableLocator()->get('Songs');
  $albums = TableRegistry::getTableLocator()->get('Albums');
  $songdata = $songs->find('all', array('order' => 'random()', 'limit' => 1))->toArray();
  $albumdata = $albums->find()->where(['album_id' => $songdata[0]['album_id']])->toArray();
  $cover_url = $albumdata[0]['cover_url'];
  $artist = $songdata[0]['artist_name'];
  $title = $songdata[0]['title'];
  $primary_genre = $songdata[0]['genre_primary'];
  $secondary_genre = $songdata[0]['genre_secondary'];
  $song_url = $songdata[0]['url'];  
  $this->disableAutoLayout(); 
?>

<!DOCTYPE html>
<html>

<head>
  <title>Monstercat Catalog</title>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../css/audioplayer.css">
</head>

<body>
  <style>
    body {
      background-color: black;
      color: white;
      font-family: 'Montserrat', sans-serif;
    }
    footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
    }
    .songbox{
      margin-bottom: 4.1%;
      margin-top: 4.1%;
      width: 100%;
      text-align: center;
      vertical-align: middle;
    }
    .song{
      display: inline-block; 
      margin: 0 auto;
      padding: 3px;
    }
  </style>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand">Monstercat Catalog Project</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="../">Home</a>
        <a class="nav-link active" href="../pages/random">Random</a>
        <a class="nav-link" href="../pages/catalog">Catalog</a>
        <a class="nav-link disabled">Album</a>
        <a class="nav-link disabled">Song</a>
      </div>
    </div>
  </nav>
  <div class=songbox>
    <div class="song">
      <span>
        <div style="margin-bottom: 5px;">
          <?php echo "<img style='width: 550px; height: 550px;' src='$cover_url'>"; ?>
        </div>
        <br/>
        <div>
          <?php echo "<h1>$artist ~ $title</h1>";?>
          <br />
          <?php echo "<h3> $primary_genre, $secondary_genre</h3>";?>
        </div>
      </span>
    </div>
  </div>
</body>

<footer>
  <div class="footer">
    </div>
    <div id="wrapper">
      <?php echo "<audio preload='auto' src='$song_url?i.mp3' type='audio/mpeg' controls autoplay loop></audio>"; ?>
    </div>
    <script src="../js/jquery.js"></script>
    <script src="../js/audioplayer.js"></script>
    <script>
      $( function()
      {
        $( 'audio' ).audioPlayer();
      });
    </script>
</footer>

</html>