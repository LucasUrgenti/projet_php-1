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
          var div = document.getElementById('hide_form'),
          display = getComputedStyle(div, null).display;

          if(display == "block")  {
              document.getElementById("hide_form").style.display = "none";
          }
          else {
              document.getElementById("hide_form").style.display = "block";
            }
          }
      </script>


      <header class="header">
        <div>  </div> <!-- div pour centrer le titre-->
        <div id="div_title">
          <h1 class="h1_freeNote"> <a href="index.php"> FreeNote </a> </h1>
        </div>
        <ul id="ul_topBar">
          <li id="li_topBar"> <a href="inscription.php"> inscription </a> </li>
          <li id="li_topBar" onclick="testSwipe()"> Login </a> </li>
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
        <div id="div_hide_form">
          <div id="hide_form">
            <form id = "form_login">
              <input type="text" name="" value="" placeholder="login" id="input_form">  <br>
              <input type="password" name="" value="" placeholder="password" id="input_form">  <br>
              <input type="submit" name="" value="submit" id="input_form">
            </form>
          </div>
        </div>
      </div><!--div central -->
      <footer class="footer">
        <div id="div_liens_github">
          <a href="https://github.com/leo-dalloz" > Léo Dalloz </a>
          <a href="https://github.com/jeremy-pouzargues" > Jérémy Pouzargues  </a>
          <a href="https://github.com/laurent-vouriot" > Laurent Vouriot </a>
          <a href="https://github.com/audreywagner" > Audrey Wagner </a>
        </div>

        <span id="span_footer"> projet php S3 2019 </span>

      </footer>
    </body>
  </html
