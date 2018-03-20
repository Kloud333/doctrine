<?php

require_once "../bootstrap.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$productRepository = $entityManager->getRepository("app\src\Entity\Posts");
$products = $productRepository->findAll();

foreach ($products as $product) {
    echo 'Post: ' . $product->getId();
    echo ' ' . $product->getTitle();
    echo ' ' . $product->getBody();
    echo '</br>';
}

?>


</body>
</html>