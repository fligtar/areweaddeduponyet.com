<?php
require_once 'data/panorama.php';
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
            <h2>2011 Roadmap</h2>
        </hgroup>
    </header>
    
    <section id="content">
        <?php foreach ($goals as $goal_key => $goal): ?>
        <section id="<?=$goal_key?>" class="selected-initiatives">
            <h2><span>&#147;<?=$goal['quote']?>&#148;</span><?=$goal['name']?></h2>
            <nav>
                <a href="#" class="goal" onclick="return selectView(this);">Goal</a>
                <a href="#" class="initiatives" onclick="return selectView(this);">Initiatives</a>
                <a href="#" class="kpi" onclick="return selectView(this);">KPI</a>
            </nav>
            
            <section class="goal">
                <h3>Our Goal</h3>
                <?=$goal['details']?>
            </section><!-- /.details -->
            
            <section class="initiatives selected-<?=$selected_quarter?>">
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
                            <li class="p<?=$initiative['progress']?>"><span><span></span></span><?=$initiative['name']?>
                                <?=(!empty($initiative['details']) ? "<div>{$initiative['details']}</div>" : '')?>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                <?php else: ?>
                    <p class="quarter <?=$quarter?>">No initiatives this quarter.</p>
                <?php endif;
                endforeach; ?>
            </section><!-- /.initiatives -->
            
            <section class="kpi">
                <h3>Performance Indicators</h3>
                <table>
                    <thead>
                        <tr><th></th><th>Start</th><th>Current</th><th>Goal</th></tr>
                    </thead>
                    <tbody>
                    <?php foreach ($goal['kpi'] as $kpi): ?>
                        <tr>
                            <td><?=$kpi['name']?></td>
                            <td><?=$kpi['start']?></td>
                            <td><?=$kpi['current']?></td>
                            <td><?=$kpi['goal']?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </section><!-- /.kpi -->
        </section><!-- /theme -->
        <?php endforeach; ?>
        
        <section id="vampires" class="initiatives">
            <h2>Time Vampires</h2>

            <p>The projects below don't further our goals above, but will still need to be done as part of infrastructure/platform maintenance.</p>
            <ol>
                <?php foreach ($vampires as $initiative): ?>
                    <li>
                        <strong><?=$initiative['quarter']?></strong><?=$initiative['name']?>
                        <?=(!empty($initiative['details']) ? "<div>{$initiative['details']}</div>" : '')?>
                    </li>
                <?php endforeach; ?>
            </ol>
        </section><!-- /#vampires -->
            
    </section><!-- /#content -->
    
    <script type="text/javascript" src="http://g.fligtar.com/jquery.js"></script>
    <script type="text/javascript" src="dostuff.js"></script>

    <!-- Google Analytics -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-21558001-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
</body>
</html>