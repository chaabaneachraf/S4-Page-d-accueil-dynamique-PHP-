<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio</title>
  <link rel="stylesheet" href="Css/style.css">
  <link rel="stylesheet" href="Css/main.css">
</head>

<body>
  <header class=" header ana">
    <nav class="content">
      <span class="logo"> chaabane achraf</span>
      <ul>
        <li> <a href="#"></a> Home</li>
        <li> <a href="#"></a> Skills</li>
        <li> <a href="#"></a> Projet</li>
        <li> <a href="#"></a> Contact</li>
      </ul>
    </nav>
    <div class="bio">
      <p>
        Hello, <br>
        I AM CHAABANE ACHRAF <br>
        Web developer
      </p>
      <img src="image/professionnelle__chaabane.png" alt="">

    </div>
  </header>


  <main class="bion">
    <section>
      <h2 class="me"> My Skills :</h2>
    </section>

    <section class=" mySkills">

<?php foreach($skills as $skill) :?>
      <article class="skill">

        <img src="image/<?=$skill['imag'] ?>" alt="">
        <h3><?= htmlspecialchars($skill['titre']) ?></h3>
        <p>
          <?=htmlspecialchars( $skill['contenu'])?>
        </p>


      </article>
      <?php endforeach; ?>




    </section>





  </main>
  <section class="project">
    <?php foreach ($projets as $projet): ?>
      <section class="bio-prject">

        <h2> <?= htmlspecialchars($projet['titre']) ?> </h2>

        <p> <?= htmlspecialchars($projet['status']) ?></p>
        <hr>
        <p><?= htmlspecialchars(mb_substr($projet['definition'], 0, 300)) ?></p>
      </section>

    <?php endforeach; ?>
  </section>

  <section class="contact">
    <h1>Contact Me</h1>
    <p>Let's work together. Feel free to reach ou</p>
    <div class="liste">
      <a href="#" class=""> Email</a>
      <a href="#" class=""> Whatspp</a>
      <a href="#" class=""> GitHub</a>
    </div>

  </section>

  <footer class="end">
    <hr>
    <p>&copy; chaabane achraf</p>

  </footer>
</body>

</html>