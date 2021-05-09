<?php
  session_start();

  require_once "pdo.php";
  $stmt = $pdo->prepare('SELECT * FROM "leader" order by score desc');

    $stmt->execute();


    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css">
</head>
<body>
<header class="text-gray-600 body-font  bg-gray-900" style="color: white;">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
    </nav>
    <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center lg:items-center lg:justify-center mb-4 md:mb-0" href="index.html">
      <img src="logo.svg" style="width:200px;">
    </a>
    <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
 
    </div>
  </div>
</header>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-4xl text-3xl font-medium title-font mb-2 text-gray-900">Leaderboard</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Here are the top scorers.</p>
    </div>
    <div class="lg:w-2/3 w-full mx-auto overflow-auto">
      <table class="table-auto w-full text-left whitespace-no-wrap">
        <thead>
          <tr>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ID</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Name</th>
            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Score</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i=1;

          foreach ($rows as $key ) {
          echo '<tr>
            <td class="px-4 py-3">'.$i.'</td>
            <td class="px-4 py-3">'.$key['name'].'</td>
            <td class="px-4 py-3">'.$key['score'].'</td>
          </tr>';
          $i++;
          }

          ?>
        </tbody>
      </table>
    </div>

  </div>
</section>
<footer class="footer" style="background: black;height: 50px;text-align:center;color:white;">
  <div class="ct-footer-post" style="width: 100vw;">
    <div class="container">
      
      <div class="inner-right">
        <p>Made by Team The Scions</p>
      </div>
    </div>
  </div>
</footer>
</body>
</html>