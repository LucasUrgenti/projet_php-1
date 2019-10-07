<!doctype html>
  <html>
    <head lang="fr">
      <meta charset="UTF-8">
      <link rel="stylesheet" href="style/style.css">
      <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Schoolbell&display=swap" rel="stylesheet">
      <title> FreeNote </title>
    </head>
    <body>


      <script type="text/javascript">
          function testSwipe()   {
          var div = document.getElementById('test'),
          display = getComputedStyle(div, null).display;

          if(display == "block")  {
              document.getElementById("test").style.display = "none";
          }
          else {
              document.getElementById("test").style.display = "block";
            }
          }
      </script>


      <header class="header">
        <h1 class="h1_freeNote"> <a href="index.php"> FreeNote </a> </h1>
        <ul id="ul_topBar">
          <li id="li_topBar" onclick="testSwipe()"> Login </a> </li>
          <div id="test">
            <form id = "form_login">
              <li id="li_topBar"> test </li>
            </form>
          </div>
          <li id="li_topBar"> <a href="inscription.php"> inscription </a> </li>
        </ul>
      </header>
      <div class="div_central">
        <aside class="aside">
          <article>
            <p> discussion 1
              statut : fermée </p>
            <hr>
            </article>
            <article>
              <p> discussion 2
                statut : ouvert </p>
              <hr>
              </article>
              <article>
                <p> discussion 3
                  statut : ouvert </p>
                <hr>
                </article>
            </aside>
        <section class="section">
          <article>
            <p>
            Bienvenu sur FreeNote un réseau social d'un nouveau genre !
            Completez les phrases des autres de manière  super drôle, super chouettos !
          </p>
        </article>
        </section>
      </div><!--div central -->
      <footer class="footer">
        <a href="https://github.com/leo-dalloz" > Léo Dalloz </a>
        <a href="https://github.com/jeremy-pouzargues" > Jérémy Pouzargues  </a>
        <a href="https://github.com/laurent-vouriot" > Laurent Vouriot </a>
        <a href="https://github.com/audreywagner" > Audrey Wagner </a>
      </footer>
    </body>
  </html
