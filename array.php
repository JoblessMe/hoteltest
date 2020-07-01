<!DOCTYPE html>
<html>
<body>
<?php
$items=array(
  array(0,"Chicken Curry",120),
  array(1,"Chicken Roast",180),
  array(2,"Rotti",20),
  array(3,"Porotta",15)
);
echo $items[3][1];
file_put_contents("items.json",json_encode($items));

$arr2 = json_decode(file_get_contents('items.json'), true);
echo $arr2[2][1];
?>

</body>
</html>
