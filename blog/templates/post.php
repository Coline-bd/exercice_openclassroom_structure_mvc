<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Le blog de l'AVBN</title>
        <link href="style.css" rel="stylesheet" />
    </head>

    <body>
        <h1>Le super blog de l'AVBN !</h1>
            <div class="news">
                <h3>
                    <?=htmlspecialchars($post['title']); ?>
                    <em>le <?=$post['french_creation_date']; ?></em>
                </h3>
                <p>
                    <?=nl2br(htmlspecialchars($post['content']));?>
                    <br />
                </p>
            </div>
            <div>
                <h2>Commentaires</h2>
                    <?php 
                        foreach($comments as $comment) :
                    ?>
                    <p><strong><?= htmlspecialchars($comment['author']) ?></strong> le <?= $comment['french_creation_date'] ?></p>
                    <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
                    <?php endforeach ?>
            </div>
    </body>
</html>