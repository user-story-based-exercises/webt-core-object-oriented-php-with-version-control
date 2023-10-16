
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
    $v1 = new Vimeo("Vegan diets and Protein", "https://player.vimeo.com/video/656492658?h=609886fb53");
    $v2 = new Vimeo("how to plan a vegan diet", "https://player.vimeo.com/video/861518311?h=f5d3c2b133");
    $v3 = new Vimeo("Vegan sosisler", "https://player.vimeo.com/video/33344663?h=d7fdaf3026");
    $v4 = new Vimeo("Vegan Nutrition Principles", "https://player.vimeo.com/video/567058979?h=dc7220eec4&color=e33a71");
    $v5 = new Vimeo("Vegan Infographic", "https://player.vimeo.com/video/224903454?h=e020c7d9a3");
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
