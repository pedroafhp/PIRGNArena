<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>FutSport</title>
</head>
<body>
  <header>
    <div class="logo">
        <h1>RGN Arena</h1>
    </div>
    <nav>
        <ul>
            <li><a href="Acessar.php">Login</a></li>
            <li><a href="Noticias.html">Últimas Notícias</a></li>
            <li><a href="Jogos.html">Jogos</a></li>
            <li><a href="ColocacoesBrasileirao.html">Colocações Brasileirão</a></li>
            <li><a href="ColocacoesPremier.html">Colocações Premier</a></li>
            <li><a href="ColocacoesChampions.html">Colocações Champions</a></li>
            <li><a href="Recompensas.html">Recompensas</a></li>
        </ul>
    </nav>
</header>

  <!-- Fim do NavBar -->
  

  <!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background-color: #181818;
      color: #fff;
      font-family: Arial, sans-serif;
    }

    .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
    }

    .title {
      font-size: 24px;
      font-weight: bold;
    }

    .nav-buttons {
      display: flex;
      gap: 10px;
    }

    .nav-button {
      background-color: #282828;
      border: 1px solid #444;
      padding: 8px 12px;
      border-radius: 4px;
      cursor: pointer;
    }

    .nav-button:hover {
      background-color: #383838;
    }

    .match-card {
      background-color: #282828;
      border: 1px solid #444;
      padding: 20px;
      margin-top: 20px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .match-info {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .match-team {
      display: flex;
      align-items: center;
      gap: 5px;
    }

    .match-team-logo {
      width: 30px;
      height: 30px;
    }

    .match-score {
      font-size: 20px;
      font-weight: bold;
    }

    .match-details {
      font-size: 14px;
    }

    .play-button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 10px 15px;
      border-radius: 5px;
      cursor: pointer;
    }

    .play-button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="match-card">
    <div class="match-info">
      <div class="match-team">
        <img src="team1-logo.png" alt="Time 1" class="match-team-logo">
        <span>Time 1</span>
      </div>
      <div class="match-score">1 - 0</div>
      <div class="match-team">
        <img src="team2-logo.png" alt="Time 2" class="match-team-logo">
        <span>Time 2</span>
      </div>
    </div>
    <div class="match-details">Data: 13 de jan. - 2 de mar.</div>
    <button class="play-button">Assistir</button>
  </div>
  <div class="match-card">
    <div class="match-info">
      <div class="match-team">
        <img src="team3-logo.png" alt="Time 3" class="match-team-logo">
        <span>Time 3</span>
      </div>
      <div class="match-score">2 - 1</div>
      <div class="match-team">
        <img src="team4-logo.png" alt="Time 4" class="match-team-logo">
        <span>Time 4</span>
      </div>
    </div>
    <div class="match-details">Data: 10 de mar. - 16 de mar.</div>
    <button class="play-button">Assistir</button>
  </div>
  <div class="match-card">
    <div class="match-info">
      <div class="match-team">
        <img src="team3-logo.png" alt="Time 3" class="match-team-logo">
        <span>Time 5</span>
      </div>
      <div class="match-score">2 - 0</div>
      <div class="match-team">
        <img src="team4-logo.png" alt="Time 4" class="match-team-logo">
        <span>Time 6</span>
      </div>
    </div>
    <div class="match-details">Data: 10 de mar. - 16 de mar.</div>
    <button class="play-button">Assistir</button>
  </div>
  <div class="match-card">
    <div class="match-info">
      <div class="match-team">
        <img src="team3-logo.png" alt="Time 3" class="match-team-logo">
        <span>Time 7</span>
      </div>
      <div class="match-score">2 - 1</div>
      <div class="match-team">
        <img src="team4-logo.png" alt="Time 4" class="match-team-logo">
        <span>Time 8</span>
      </div>
    </div>
    <div class="match-details">Data: 10 de mar. - 16 de mar.</div>
    <button class="play-button">Assistir</button>
  </div>
  <div class="match-card">
    <div class="match-info">
      <div class="match-team">
        <img src="team3-logo.png" alt="Time 3" class="match-team-logo">
        <span>Time 9</span>
      </div>
      <div class="match-score">0 - 2</div>
      <div class="match-team">
        <img src="team4-logo.png" alt="Time 4" class="match-team-logo">
        <span>Time 10</span>
      </div>
    </div>
    <div class="match-details">Data: 10 de mar. - 16 de mar.</div>
    <button class="play-button">Assistir</button>
  </div>
  <header>
        <img src="" alt="">
        <nav>
        </nav>
    </header>
    <section class="hero">
    </section>
</body>
</html>

<footer>
  <div class="social-links">
      <a href="#">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Instagram</a>
  </div>
  <p>&copy; 2025 RGN Arena - Todos os direitos reservados.</p>
</footer>
</body>
</html>