<?php
include './php/faq.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/app.css">
    <title>PHP Google FAQ</title>
</head>

<body>
    <main>
        <?php foreach ($faq as $sectionKey => $section) : ?>
            <h1> <?= $section["title"] ?> </h1>
            <?php foreach ($section["paragraphs"] as  $paragraph) : ?>
                <?php if ($paragraph["type"] == "p") : ?>
                    <p> <?= $paragraph["data"] ?> </p>
                <?php endif ?>
                <?php if ($paragraph["type"] == "ol") : ?>
                    <ol>
                        <?php foreach ($paragraph["items"] as  $item) : ?>
                            <li>
                                <?php foreach ($item as  $itemParagraph) : ?>
                                    <?php if ($itemParagraph["type"] == "p") : ?>
                                        <p> <?= $itemParagraph["data"] ?> </p>
                                    <?php endif ?>
                                    <?php if ($itemParagraph["type"] == "ol") : ?>

                                        <ol>
                                            <?php foreach ($itemParagraph["items"] as  $item_2) : ?>
                                                <li>
                                                    <?php foreach ($item_2 as  $itemParagraph_2) : ?>
                                                        <?php if ($itemParagraph_2["type"] == "p") : ?>
                                                            <p> <?= $itemParagraph_2["data"] ?> </p>
                                                        <?php endif ?>
                                                        <?php if ($itemParagraph_2["type"] == "ol") : ?>
                                                        <?php endif ?>
                                                    <?php endforeach ?>
                                                </li>
                                            <?php endforeach ?>
                                        </ol>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </li>
                        <?php endforeach ?>
                    </ol>
                <?php endif ?>
            <?php endforeach ?>
        <?php endforeach ?>
    </main>
</body>

</html>






<?php foreach ($faq as $key => $value) : ?>

<?php endforeach ?>




<ol>
    <li>
        <ol>
        <li></li>
        <li></li>
        </ol>
    </li>
    <li>
    </li>
</ol>