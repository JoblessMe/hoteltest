 <html>
  <body>

  <?php
  $items=json_decode(file_get_contents('items.json'), true);
  $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $parts = parse_url($url);
  parse_str($parts['query'], $query);
  for($x=0;$x<count($items);$x++){
  if($query['itemid']==$items[$x][0])
      echo $items[$x][$query['want']];
  }
  ?>

  </body>
  </html>
