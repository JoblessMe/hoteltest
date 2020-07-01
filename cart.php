 <html>
  <body>

  <?php
  $items=json_decode(file_get_contents('items.json'), true);
  $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  $parts = parse_url($url);
    parse_str($parts['query'], $query);
    $total=0;
    $cart=json_decode(base64_decode($query['data']), true);
    for($x=0;$x<count($cart);$x++){
      $total= $total+$items[$cart[$x]][2];
    }
echo $total;
  ?>

  </body>
  </html>
