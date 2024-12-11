<!DOCTYPE html>
<html lang="ja">

  <head>
    <meta charset="UTF-8">
    <title>課題ソート</title>
  </head>

  <body>
    <P>
      <?PHP
      $nums = [15, 4, 18, 23, 10];
      function sort_2way($array, $order) {
          if ($order === 'sort') {
              echo '昇順にソートします。<br>';
              sort($array);
          } elseif ($order === 'rsort') {
            echo '降順にソートします。<br>';
            rsort($array);
          }  else {
            echo '【エラー】無効なソート順が指定されました。<br>';
            return;
          }
         
          foreach ($array as $array_data) {
              echo $array_data . '<br>';
          }
      }

      echo sort_2way($nums,'sort');
      echo '<br>';
      echo sort_2way($nums,'rsort');

      ?>
    </P>
  </body>

</html>