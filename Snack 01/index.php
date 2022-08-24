<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    
    <?php
        $posts = [

            '10/01/2019' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 2'
                ],
            ],

            '10/02/2019' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 3'
                ]
            ],

            '15/05/2019' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 6'
                ]
            ],
        ];
    ?>

    <h2>Snack 1</h2>
    <p>Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.<br> 
        Stampare ogni data con i relativi post.<br><br>

        Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z
    </p>
    
    <?php foreach ($posts as $date => $dailyPosts) { ?>
        <h3>Post del giorno <?php echo $date ?> </h3>
            <?php foreach ($dailyPosts as $post) { ?>
            <!-- Per ogni post del singolo giorno -->
                <h4><?php echo $post['title'] ?></h4>
                <h5><?php echo $post['author'] ?></h5>
                <p><?php echo $post['text'] ?></p>
            <?php } ?>
    <?php } ?>

</body>
</html>