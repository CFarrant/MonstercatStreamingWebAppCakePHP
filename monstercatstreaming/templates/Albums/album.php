<!DOCTYPE html>
<html>

<head>
  <title>Monstercat Catalog</title>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
  <style>
    .sticky {
      position: fixed;
      top: 0;
      width: 100%;
    }
    body {
      background-color: black;
      color: white;
      font-family: 'Montserrat', sans-serif;
    }
    .wrapper {
      display: grid;
      grid-gap: 30px;
      grid-auto-flow: row;
      grid-template-columns: auto;
    }
    body .wrapper {
      margin-top: 5%;
      margin-left: 5%;
      margin-right: 5%;
      margin-bottom: 2.5%
    }
    .songbox {
      margin-top: 5%;
      margin-left: 35%;
      margin-right: 35%;
      text-align: center;
      vertical-align: middle;
    }
    .song{
      display: inline-block; 
      margin: 0 auto;
    }
    .box {
      height: auto;
      border-radius: 5px;
      padding: 10px;
      margin-left: 10%;
      margin-right: 10%;
      font-size: 100%;
      color: white;
      text-align: center;
      text-decoration: none;
    }
    .box a{
      text-decoration: none;
    }
    .box:hover {
      background-color: grey;
      text-decoration: none;
      color: white;
    }
    .box a:hover {
      text-decoration: none;
      color: white;
    }
  </style>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky">
    <a class="navbar-brand">Monstercat Catalog Project</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="../">Home</a>
        <a class="nav-link" href="../songs/random">Random</a>
        <a class="nav-link" href="../albums/catalog">Catalog</a>
        <a class="nav-link active">Album</a>
        <a class="nav-link disabled">Song</a>
      </div>
    </div>
  </nav>
  <div class="songbox">
    <div class="song">
      <div>
        <?php echo "<img style='width: 400px; height: 400px;' src='$album->cover_url'>" ?>
      </div>
      <br/>
      <div>
        <?php echo "<h1>$album->name</h1>" ?>
        <?php echo "<h3>$album->artist_name</h3>" ?>
        <?php echo "<h5>$album->genre_primary, $album->genre_secondary</h5>" ?>
      </div>
    </div>    
  </div>
  <div style="margin-top: 20px; margin-bottom: 20px;">
    <?php foreach ($songs as $song): ?>
    <?php echo "<a href='../songs/song?id=$song->track_id'>" ?>
      <div class="box">
        <div>
          <?php echo "<h3>$song->track_number) $song->title ~ $song->artist_name</h3>" ?>
        </div>
      </div>
    </a>
    <?php endforeach ?>
  </div>
</body>

</html>