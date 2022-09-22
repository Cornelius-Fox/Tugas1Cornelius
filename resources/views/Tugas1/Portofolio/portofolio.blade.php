<!DOCTYPE PHP>
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/css/app.css">
 <title>portofolio</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="http://127.0.0.1:8000/about">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="http://127.0.0.1:8000/portofolio#">Portofolio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Disabled</a>
                </li>
              </ul>
            </div>
          </nav>

          <div class="jumbotron">
            <div class="media">
                <img src="/img/cornel.png" alt="zoom" width="200" hegith="200"
                class="align-self-start mr-3" alt=""
                class="rounded-circle">
                <div class="media-body">
                  <h2 class="mt-0"></h2>
                  <p></p>
                </div>
            </div>

        <h1><? $nama  ?>
            STMIK LIKMI
        </h1>
        <h2>
            Kampus Terbaik
        </h2>

        <small>
            <small>Copyright © <?php echo date("Y"); ?> LIKMI </small>
        </small>
    </body>
</html>
