<div class="wrapper">
	<div class="nav">
        <div class="nav_sect_selected"><div class="logo"><a href="/">
<div class="lion"><img src="/perabeats/img/pera_beats.jpg" width="30" height="30" alt=""/></div>PERA BEATS</a></div></div>
        <div class="nav_sect" style="border-left:none"><a href="../">NEWS</a></div>
        <div class="nav_sect" style="border-left:none"><a href="../">EVENTS</a></div>
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
    
    	<div class="right_panel">
        	<div class="feed_header">NEWS FEED</div>
            
        </div>
    	<div class="left_panel">
        	<div class="mid_header">EVENT</div>
            <div class="single_header">
            	 <div class="date"><div class="date_num"><?php echo date('d', strtotime($event['event']['event_date_added'])) ?></div>
              <div class="date_str"><?php echo date('M', strtotime($event['event']['event_date_added'])) ?></div>
              <div class="timed"><?php echo date('g:i a', strtotime($event['event']['event_date_added'])) ?></div></div>	
                <div class="single_topic"><?php echo $event['event']['event_topic'];  ?></div>
                <div class="single_by">BY <span><?php echo $event['log_user']['lg_fname']." ".$event['log_user']['lg_lastname'];  ?></span></div>
          </div>
            <div class="single_image"><img src="/perabeats/images/events/<?php echo $event['event']['event_main_img'];  ?>"  alt=""/></div>
            <div class="single_content"><?php echo $event['event']['event_content'];  ?></div>
   	  </div>
	</div>
    
    <div class="content">
    </div>
</div>
