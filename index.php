<?php
require_once 'data/goals.php';

$selected_quarter = 'q1';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add-ons Roadmap</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <header>
        <img src="images/mosaic.png" alt=""/>
        <hgroup>
            <h1>Add-ons</h1>
            <h2><span>2011</span>Roadmap</h2>
        </hgroup>
    </header>
    
    <section id="content">
        <?php
        foreach ($goals as $goal): 
            if ($goal['special']) continue;
        ?>
        <section>
            <h2><?=$goal['name']?><blockquote>&#147;<?=$goal['quote']?>&#148;</blockquote></h2>
            <div class="summary">
                <div class="initiatives selected-<?=$selected_quarter?>">
                    <h3>Initiatives <a href="#" class="q1" onclick="return selectQuarter(this);">Q1</a>
                        <a href="#" class="q2" onclick="return selectQuarter(this);">Q2</a>
                        <a href="#" class="q3" onclick="return selectQuarter(this);">Q3</a>
                        <a href="#" class="q4" onclick="return selectQuarter(this);">Q4</a></h3>
                    <?php
                    foreach ($goal['initiatives'] as $quarter => $initiatives):
                        if (!empty($initiatives)):
                    ?>
                        <ol class="quarter <?=$quarter?>">
                            <?php foreach ($initiatives as $initiative): ?>
                                <li class="p<?=$initiative['progress']?>"><span><span></span></span><?=$initiative['name']?><a>more info</a>
                                    <div>details</div>
                                </li>
                            <?php endforeach; ?>
                        </ol>
                    <?php else: ?>
                        <p class="quarter <?=$quarter?>">No initiatives this quarter.</p>
                    <?php endif;
                    endforeach; ?>
                </div>
                <div>
                    <h3>Progress</h3>
                </div>
            </div>
        </section>
        <?php endforeach; ?>
    </section>
    
    <!--<footer>
        <p>But to answer your original question, yes, we are added upon.</p>
    </footer>-->
    <script type="text/javascript" src="http://g.fligtar.com/jquery.js"></script>
    <script type="text/javascript" src="dostuff.js"></script>

    <!-- Google Analytics -->
    <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-3232120-2']);
    _gaq.push(['_trackPageview']);

    (function() {
    var ga = document.createElement('script');
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 
        'http://www') + '.google-analytics.com/ga.js';
    ga.setAttribute('async', 'true');
    document.documentElement.firstChild.appendChild(ga);
    })();
</body>
</html>