<?php
    include "ads.php";

    $ad = $ads[rand(0, (count($ads) - 1))];
?>

<title>Visertisements</title>
<style>
    body {
        background-color: black;
        background-image: url("<?php echo $ad[3]; ?>");
        background-size: cover;
        padding: 0px;
        margin: 0px;
        width: 100%;
    }

    #ad {
        z-index: 0;
        position: absolute;
        display: block;
        width: 100%;
        height: 100%;
        color: #00000000;
        text-align: center;
    }

    #badge {
        position: absolute;
        z-index: 10;
        font-size: 12px;
        right: 0px;
        bottom: 0px;
        background: black;
        padding: 2px 0px 0px 2px;
        border-radius: 5px 0px 0px 0px;
    }

    #badge a {
        color: white;
        text-decoration: none;
    }

    #badge a:hover {
        text-decoration: underline;
    }

    #nsfw {
        position: absolute;
        z-index: 20;
        font-size: 12px;
        left: 0;
        top: 0;
        color: white;
        background: black;
        padding: 0px 2px 2px 0px;
        border-radius: 0px 0px 5px 0px;
    }
</style>

<body>
    <a id="ad" target="_top" href="<?php echo $ad[2] ?>" title="<?php echo $ad[0] ?> by <?php echo $ad[1] ?>">
        <?php echo $ad[0] ?> by <?php echo $ad[1] ?>
    </a>
    <div id="badge">
        <a target="_top" href="https://wiki.shroom.ink/visertisements/">Visertisements</a>
    </div>
    <?php
        if ($ad[4]) {
            echo '<div id="nsfw">18+</div>';
        };
    ?>
</body>
