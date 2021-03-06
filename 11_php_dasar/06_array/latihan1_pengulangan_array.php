<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Pengulangan Array</title>
    <style>
      .kotak {
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
        transition : 1s;
      }
      .kotak2 {
        background-color: lightgreen;
      }
      .kotak:hover {
        transform: rotate(360deg);
        border-radius: 50%;
      }
      .clear {
        clear: both;
      }
    </style>
  </head>
  <body>

    <?php 

    // pengulangan pada array
    // for & foreach

    $angka = [1,2,3,4,5,6,7,8,9];

    ?>

    <!-- pengulangan array menggunakan for -->
    <?php for ( $i = 0; $i < count($angka); $i++ ) { ?>
      <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- pengulangan array menggunakan foreach -->
    <?php foreach ( $angka as $a ) { ?>
      <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- pengulangan array menggunakan foreach dan penyingkatan -->
    <?php foreach ( $angka as $a ) : ?>
      <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>

    <div class="clear"></div>

    <?php 

    // array di dalman array
    $angka2 = [[1,2,3],
              [4,5,6],
              [7,8,9]];
    ?>

    <?php foreach ( $angka2 as $ang2 ) : ?>
      <?php foreach ( $ang2 as $a2 ) : ?>
        <div class="kotak kotak2"><?= $a2; ?></div>
      <?php endforeach; ?>
      <div class="clear"></div>
    <?php endforeach; ?>

  </body>
</html>
