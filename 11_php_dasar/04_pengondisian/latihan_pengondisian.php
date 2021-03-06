<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Latihan Pengondisian</title>
    <style>
      .warna-baris {
        background-color: silver;
      }
    </style>
  </head>

  <body>

    <table border="1" cellpadding="10" cellspacing="0">
      <!-- membuat tabel dengan for (cara lama) -->
      <!-- 
        <?php
        for ($i = 1; $i <= 4; $i++) {
          echo "<tr>";
          for ($j = 1; $j <= 5; $j++) {
            echo "<td>$i,$j</td>";
          }
          echo "</tr>";
        }
        ?>
      -->

      <!-- membuat tabel dengan form php & html (metode templating) -->
      <?php for ($i = 1; $i <= 4; $i++) : ?>
        <?php if ($i % 2 == 1) : ?>
          <tr class="warna-baris">
          <?php else : ?>
          <tr>
          <?php endif; ?>
          <?php for ($j = 1; $j <= 5; $j++) : ?>
            <td><?= "$i,$j"; ?></td>
          <?php endfor; ?>
          </tr>
        <?php endfor; ?>
        <!-- tag pembuka ({) dapat diganti dengan : dan tag penutup (}) dapat diganti dengan endfor; endif; dll. -->
        <!-- echo dapat diganti dengan = yang menempel pada tag pembuka php -->

    </table>

  </body>

</html>