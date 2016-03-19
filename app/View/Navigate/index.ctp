 

<div class="wrapper">
	<div class="nav">
            <div class="nav_sect_selected"><div class="logo"><a href="/perabeats"><div class="lion"><img src="img/pera_beats.jpg" width="30" height="30" alt=""/></div>PERA BEATS</div></a></div>
        <div class="nav_sect" style="border-left:none"><a href="news">NEWS</a></div>
        <div class="nav_sect"><a href="event">EVENTS</a></div>
        <div class="nav_sect"><a href="blog">BLOG</a></div>
        <div class="nav_sect" style="border-right:2px solid #ffffff;"><a href="bop">BEAT OF A PLAYER</a></div>
        <div class="uni_sel" ><div></div><div></div><div></div></div>
	</div>
    
    <div class="anm">
		<div class="anm_sect">
        	<div class="anm_img"><img src="images/anm/2.jpg"  alt=""/></div>
            <div class="anm_desc_pb ">PERA BEATS</div>
       </div>
      <div class="uni_list">
        <div class="uni_sect">UNIVERSITY OF COLOMBO</div>
        <div class="uni_sect">EASTERN UNIVERSITY</div>        
        <div class="uni_sect">UNIVERSITY OF J'PURA</div>
        <div class="uni_sect">UNIVERSITY OF KELANIYA</div>
        <div class="uni_sect">UNIVERSITY OF MORATUWA</div>
        <div class="uni_sect">UNIVERSITY OF PERADENIYA</div>
        <div class="uni_sect">UNIVERSITY OF RAJARATA</div>
        <div class="uni_sect">UNIVERSITY OF RUHUNA</div>
        <div class="uni_sect">UNIVERSITY OF SABARAGAMUWA</div>
        <div class="uni_sect">SOUTH EASTERN UNIVERSITY</div>
        <div class="uni_sect">UNIVERSITY OF UVA WELLASSA</div>
        <div class="uni_sect">UNIVERSITY OF VPA</div>

        <div class="uni_sect">UNIVERSITY OF WAYAMBA</div>
        <div class="uni_sect">OTHER</div>
    </div>
	</div>
    
	<div class="pseudo"></div>
</div>
<div class="wrapper">
	<div class="content">
		<div class="mid_header">NEWS</div>
		<div class="news_port">
 <?php foreach ($news as $newses): ?>
         
        <?php // echo $newses['news']['news_id']; ?>
 
   


        	<div class="news_sect">
  				<a href="/perabeats/news/view/<?php  echo $newses['news']['news_hash']; ?>">          
            	<div class="news_img"><img src="images/news/<?php  echo $newses['news']['news_main_img']; ?>" width="250" alt=""/></div>
                <div class="news_head"><?php  echo $newses['news']['news_topic']; ?></div>
                <div class="news_desc"><?php  echo $newses['news']['news_desc']; ?></div>
                <div class="news_stat"><table width="0" border="0">
  <tr>
    <td><img src="images/time.png" width="13" height="13" alt=""/></td>
    <td>125</td>
    <td><img src="images/eye.png" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
</a>
          </div>
 <?php endforeach; ?>
    
           
       
	</div>	
	</div>
</div>
<div class="wrapper" style="background:#535471">
  <div class="content">
    	<div class="cent_header"><div>BEAT OF A PLAYER</div></div>
        <div class="bop_limg"><img src="images/bop/<?php echo $bop['bop']['bop_main_img'] ?>" width="458" alt=""/></div>
        <div class="bop_rdesc">
        	<div class="bop_header"><?php echo $bop['bop']['bop_topic'] ?></div>
            <div class="bop_desc"><?php echo $bop['bop']['bop_small_desc'] ?></div>
            <div class="bop_desc">
            	READ MORE<br><?php echo $bop['bop']['bop_tail'] ?>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
	<div class="content">
    	<div class="portal">
        	<div class="port_head">EVENTS</div>
 <?php foreach ($news as $newses): ?>
            <div class="port_sect">
              <div class="date"><div class="date_num"><?php echo date('d', strtotime($newses['news']['news_date_added'])) ?></div>
              <div class="date_str"><?php echo date('M', strtotime($newses['news']['news_date_added'])) ?></div>
              <div class="timed"><?php echo date('g:i a', strtotime($newses['news']['news_date_added'])) ?></div></div>
              <div class="port_desc"><?php echo $newses['news']['news_topic']; ?></div>
            </div>
        <?php // echo $newses['news']['news_id']; ?>
 
    <?php endforeach; ?>
            
          
           
        </div>
        
        <div class="portal">
        	<div class="port_head">BLOG</div>
            <div class="port_sect">
              <div class="date"><div class="date_num">02</div><div class="date_str">Jul.</div><div class="timed">5:00 pm</div></div>
              <div class="port_desc">University of Sri Jayewardenepura Colours Night 2014</div>
            </div>
            <div class="port_sect">
              <div class="date"><div class="date_num">02</div><div class="date_str">Jul.</div><div class="timed">5:00 pm</div></div>
              <div class="port_desc">University of Sri Jayewardenepura Colours Night 2014</div>
            </div>
            <div class="port_sect">
              <div class="date"><div class="date_num">02</div><div class="date_str">Jul.</div><div class="timed">5:00 pm</div></div>
              <div class="port_desc">University of Sri Jayewardenepura Colours Night 2014</div>
            </div>
        </div>
        
        <div class="portal">
        	<div class="port_head">UNIVERSITY</div>
            <div class="port_sect">
              <div class="date"><div class="date_num">02</div><div class="date_str">Jul.</div><div class="timed">5:00 pm</div></div>
              <div class="port_desc">University of Sri Jayewardenepura Colours Night 2014</div>
            </div>
            <div class="port_sect">
              <div class="date"><div class="date_num">02</div><div class="date_str">Jul.</div><div class="timed">5:00 pm</div></div>
              <div class="port_desc">University of Sri Jayewardenepura Colours Night 2014</div>
            </div>
            <div class="port_sect">
              <div class="date"><div class="date_num">02</div><div class="date_str">Jul.</div><div class="timed">5:00 pm</div></div>
              <div class="port_desc">University of Sri Jayewardenepura Colours Night 2014</div>
            </div>
        </div>
        
        <div class="portal">
        	<div class="port_head">BEAT OF A PLAYER</div>
            <div class="port_sect">
              <div class="date"><div class="date_num">02</div><div class="date_str">Jul.</div><div class="timed">5:00 pm</div></div>
              <div class="port_desc">University of Sri Jayewardenepura Colours Night 2014</div>
            </div>
            <div class="port_sect">
              <div class="date"><div class="date_num">02</div><div class="date_str">Jul.</div><div class="timed">5:00 pm</div></div>
              <div class="port_desc">University of Sri Jayewardenepura Colours Night 2014</div>
            </div>
            <div class="port_sect">
              <div class="date"><div class="date_num">02</div><div class="date_str">Jul.</div><div class="timed">5:00 pm</div></div>
              <div class="port_desc">University of Sri Jayewardenepura Colours Night 2014</div>
            </div>
        </div>
        
    </div>
</div>
<?php include_once('footer.php'); ?>
