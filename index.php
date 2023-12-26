<html>

<head>
  <meta charset="utf-8">
</head>

<body>
  <?php $multi_x = 2; ?>
  <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>

  <div class="box">
    <table>
      <tbody>
        <tr>
          <?php
          $b = 2;
          for ($i = 1; $i <= 24; $i++) {
            echo "{$b} x {$i} = " . ($b * $i) . "<br/>";
          }
          ?>
        </tr>
      </tbody>
    </table>
  </div>

  <style>
    .box {
      width: 300px;
      height: 300px;
      overflow: auto;
      align-items: center;
      background-image: url("https://img.freepik.com/free-vector/hand-painted-watercolor-pastel-sky-background_23-2148902771.jpg");
    }
  </style>
</body>

</html>