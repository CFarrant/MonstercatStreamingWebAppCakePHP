<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>

<!DOCTYPE mpeg>
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
      width: 100%; 
      margin-top: 10%;
      margin-bottom: 10%;
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
        <a class="nav-link active" href="../monstercatstreaming">Home</a>
        <a class="nav-link" href="../monstercatstreaming/pages/random">Random</a>
        <a class="nav-link" href="../monstercatstreaming/pages/catalog">Catalog</a>
        <a class="nav-link disabled">Album</a>
        <a class="nav-link disabled">Song</a>
      </div>
    </div>
  </nav>
  <div class=songbox>
    <div class="song">
      <span>
        <div style="margin-bottom: 5px;">
          <img style="width: 275px; height: 275px;" src='img/logo.png'>
        </div>
        <div>
          <h1>Welcome to the Monstercat Catalog Project!</h1>
          <h3>By: Christopher Farrant</h3>
        </div>
      </span>
    </div>
  </div>
</body>

</html>