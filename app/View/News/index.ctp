<div class="wrapper">
    <div class="nav">
        <div class="nav_sect_selected"><div class="logo"><a href="/perabeats/">
<div class="lion"><img src="/perabeats/img/pera_beats.jpg" width="30" height="30" alt=""/></div>PERA BEATS</a></div></div>
        <div class="nav_sect" style="border-left:none"><a href="./news">NEWS</a></div>
        <div class="nav_sect"><a href="./event">EVENTS</a></div>
        <div class="nav_sect">BLOG</div>
        <div class="nav_sect" style="border-right:2px solid #ffffff;">BEAT OF A PLAYER</div>
        <div class="uni_sel" ><div></div><div></div><div></div></div>
    </div>

    <div class="inner_wrapper">
        <div class="uni_list">
            <div class="uni_sect">UNIVERSITY OF PERADENIYA</div>
            <div class="uni_sect">UNIVERSITY OF COLOMBO</div>
            <div class="uni_sect">UNIVERSITY OF JAYAWARDANAPURA</div>
            <div class="uni_sect">UNIVERSITY OF SABARAGAMUWA</div>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="pseudo"></div>
    <div class="content">
        <div class="left_panel">BLOG
        </div>
        <div class="right_panel">
            <div class="mid_header">NEWS</div>
            <?php foreach ($news as $newses): ?>
  
  <div class="single_header">
     <div class="date"><div class="date_num"><?php echo date('d', strtotime($newses['news']['news_date_added'])) ?></div>
     	<div class="date_str"><?php echo date('M', strtotime($newses['news']['news_date_added'])) ?></div>
     	<div class="timed"><?php echo date('g:i a', strtotime($newses['news']['news_date_added'])) ?></div>
     </div>	
     <div class="single_topic"><?php echo $newses['news']['news_topic'];  ?></div>
     <div class="single_by">BY <span><?php echo $newses['log_user']['lg_fname'] ."  ".$newses['log_user']['lg_lastname'];  ?></span></div>
  </div>             
     <div class="single_image"><a href="/perabeats/news/view/<?php echo $newses['news']['news_hash']?>"><img src="/perabeats/images/news/<?php echo $newses['news']['news_main_img'];  ?>" width="605" /></a></div>	
     <div class="single_desc"><?php echo $newses['news']['news_small_desc'];  ?></div>
  
  
 
    <?php endforeach; ?>
        </div>
    </div>
   
</div>
<?php include_once('footer.php'); ?>