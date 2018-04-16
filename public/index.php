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

//$postsRepository = $entityManager->getRepository("app\src\Entity\Posts");
//$posts = $postsRepository->findAll();

//foreach ($posts as $post) {
//    echo 'Post: ' . $post->getId();
//    echo ' ' . $post->getTitle();
//    echo ' ' . $post->getBody();
//    echo '</br>';
//}

$qb = $entityManager->createQueryBuilder();

var_dump($qb->select('users')
    ->from('app\src\Entity\Users','users')
    ->getQuery()
    ->execute());

?>


</body>
</html>