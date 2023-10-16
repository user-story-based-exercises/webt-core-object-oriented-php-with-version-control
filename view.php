
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>VeganTube</title>
    <link rel="stylesheet" href="healthDesign.css">
</head>
<body>
<div class="Heading">
    <h1>>VeganTube<</h1>
</div>

<h2>Section 1: Youtube</h2>
<?php
    require "Video.php";
    echo '<div class="flexbox-cont1">';

    $yt1 = new Youtube("How To Meal Prep 12 Easy Vegan Recipes In 90 Minutes For A Beginner", "https://www.youtube.com/embed/f3cQEMLnd_k?si=YXjLAcM3hwsxyNo8");
    $yt2 = new Youtube("Beginner's GUide to Veganism", "https://www.youtube.com/embed/OJxMsypwnqg?si=kyt0bigDLvqmXiOv");
    $yt3 = new Youtube("High-Protein Vegan Meals EVERYONE Should Know", "https://www.youtube.com/embed/dfI7nJFXaFA?si=Kpj-3ZjleULtFOmU" );
    $yt4 = new YouTube("20-Minute Vegan Meals EVERYONE Should Know","https://www.youtube.com/embed/d58QpQhdE9o?si=aw_dXhK_bG3Rb9Uq");
    $yt5 = new Youtube("3 Easy Vegan Recipes for Beginners", "https://www.youtube.com/embed/d58QpQhdE9o?si=aw_dXhK_bG3Rb9Uq");
    echo "<h3>". $yt1->getName() ."</h3>";
    echo $yt1->getEmbedCode();
    echo '<h3>' . $yt2->getName() . '</h3>';
    echo $yt2->getEmbedCode();
    echo '<h3>' . $yt3->getName() . '</h3>';
    echo $yt3->getEmbedCode();
    echo '<h3>' . $yt4->getName() . '</h3>';
    echo $yt4->getEmbedCode();
    echo '<h3>' . $yt5->getName() . '</h3>';
    echo $yt5->getEmbedCode();
    echo '</div>';

    echo '<h2>Source: Vimeo</h2>';
    echo '<div class="flexbox-cont2">';
    $v1 = new Vimeo("How a vegan diet affects your brain", "https://www.youtube.com/embed/SdnEbJZoNg8?si=hqSct6Tp1kToSfne");
    $v2 = new Vimeo("Here's What Happens To your Brain and Body When >ou Go Vegan", "https://www.youtube.com/embed/acePa05Cxpo?si=2Kv1JqQHlUU5IqWR");
    $v3 = new Vimeo("What You Can Expect When You Go Vegan", "https://www.youtube.com/embed/WS8pZj2bsaU?si=AyEeE7hi_QNBIumm");
    $v4 = new Vimeo("What you need to know before switching to a vegetarian diet", "https://www.youtube.com/embed/hB1CDtdcPVQ?si=6GUexIm3lcOZnMhY");
    $v5 = new Vimeo("Potentail Vitamin and Mineral Deficiency Risks on a Vegan Diet", "https://www.youtube.com/embed/M6roj07jiys?si=aqtyKPXa6e2fFbxN");
    echo "<h3>". $v1->getName() ."</h3>";
    echo $v1->getEmbedCode();
    echo '<h3>' . $v2->getName() . '</h3>';
    echo $v2->getEmbedCode();
    echo '<h3>' . $v3->getName() . '</h3>';
    echo $v3->getEmbedCode();
    echo '<h3>' . $yt4->getName() . '</h3>';
    echo $v4->getEmbedCode();
    echo '<h3>' . $v5->getName() . '</h3>';
    echo $v5->getEmbedCode();
    echo '</div>';

    echo '</div>';
    ?>

</body>
</html>
