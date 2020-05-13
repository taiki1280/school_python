<html>
  <head>
    <title>実習6-4</title>
  </head>
  <body>
<?php
  $season = array("キャベツ" => "春" , "スイカ" => "夏" , "ナス" => "秋" , "ハクサイ" => "冬");
  $season2 = array_filter($season,"isSpring");
?>

    <table border="1">
      <tr>
        <td>野菜</td><td>季節</td>
      </tr>
<?php
  foreach($season2 as $key => $value){
?>
      <tr>
        <td><?= $key ?></td><td><?= $value ?></td>
      </tr>
<?php
  }

  function isSpring($value){
      return $value == "春";
  }
?>
    </table>
  </body>
</html>