<!DOCTYPE html>
<html lang="en" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="src/main.css">
        <title>Advertisements | Visertisements</title>
    </head>
    <body>
        <main>
            <header>
                <hgroup>
                    <h1>Advertisements</h1>
                    <p>All Visertisement Advertisements</p>
                </hgroup>
            </header>
            <?php include "ads.php"; ?>
            <section>
                <h2>The <?php echo count($ads); ?> Advertisement(s)</h2>
                <ul class="ads">
                <?php
                    foreach ($ads as $key => $value) {
                        echo "<li>
                        <p><a target='_blank' href='{$value[2]}'>{$value[0]}</a> by {$value[1]}</p>
                        <img src='{$value[3]}' alt='{$value[0]} Ad'>
                        </li>";
                    }
                ?>
                </ul>
            </section>
        </main>
    </body>
</html>
