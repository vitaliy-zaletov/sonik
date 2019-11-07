

<?php get_header(); ?>


 <div class="divBlue-bg-svg">
  <div class="content-description">
    <div class="content-description_inner">
        <div class="container">
            <div class="img-inner">
                <div class="img-description_inner">
                            <img src="<?php $img_url = get_the_post_thumbnail(29); echo $img_url; ?>"
                               alt="<?php echo get_the_title(29); ?>" >  
                               
                               
                               <?php the_field('textpost_one'); ?>

                               <?php the_field('thumb_with_one'); ?>
                </div>
                <div class="arrow-inner">
                    <div class="arrow-img"><img src="img/pic-14.png" alt=""></div>
                    <div class="arrow-img"><img src="img/pic-14.png" alt=""></div>
                    <div class="arrow-img"><img src="img/pic-14.png" alt=""></div>
                </div>
            </div>
            <div class="text-exposition_primary">

            <?php 
                $rows = get_field('desc_top_fly',360);
                if($rows)
                {
                
                    foreach($rows as $row)
                    {
                        echo '<div class="text-exposition_inner"> <div class="text-exposition ">' . $row['desc_top_inner'] . '</div></div>';
                    }
                
                }

                ?>
            </div>
        </div> 
    </div>
    </div>
    <svg class="bottom-triangle_description" 
    viewBox="0 0 100 100" 
    preserveAspectRatio="none" 
    version="1.1"
    baseProfile="full"
    xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink"
    xmlns:ev="http://www.w3.org/2001/xml-events" >
    <defs>
      <linearGradient id="RadialGradient2">
        <stop offset="0%" stop-color="#006cb4"/>
        <stop offset="35%" stop-color="#00adee"/>
        <stop offset="65%" stop-color="#00adee"/>
        <stop offset="100%" stop-color="#006cb4"/>  
    </linearGradient>
    </defs>
    <path d="M0 0 L 100 0 50 50" id="footer-curve" fill="url(#RadialGradient2)"></path>
    </svg>
  </div>
  <div class="divGrey-bg-svg">
      <div class="content-setting" id="content-setting">
        <div class="container">
            <div class="title-setting_inner">
                <div class="title-setting">
                    <h3><?php echo get_the_title(83); ?></h3>
                </div>
            </div>

            <div class="galery-img">
            <?php 
                $rows = get_field('gallery_title',367);
                if($rows)
                {
                
                    foreach($rows as $row)
                    {?>
                        <div class="img-inner odd">
                        <img src=" <?php echo $row ['gallery_title_img']  ?>" alt="">
                         <div class="text-inner_absolut"><h4><?php echo $row['galery_title_one'] ?> </h4></div>
                        </div>
                        <div class="text-inner even"><h4><?php echo $row['galery_title_one'] ?></h4></div>
                  <?php  }
                
                }

                ?>
            </div>
        </div>
    </div>
    <svg class="bottom-triangle_setting"
     viewBox="0 0 100 100"
      preserveAspectRatio="none" 
      version="1.1"
         baseProfile="full"
         xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink"
         xmlns:ev="http://www.w3.org/2001/xml-events" >
     <defs>
          <linearGradient id="RadialGradient3">
            <stop offset="0%" stop-color="#f3f3f3"/>
            <stop offset="25%" stop-color="#f3f3f3"/>
            <stop offset="75%" stop-color="#f3f3f3"/>
            <stop offset="100%" stop-color="#f3f3f3"/>  
          </linearGradient>
      </defs>
     <path d="M0 0 L 100 0 50 50" id="footer-curve" fill="url(#RadialGradient3)"></path>
     </svg>
 </div>
<div class="content-improve" id="content-improve">
   <div class="title-setting_inner ">
        <div class="title-setting improve">
            <h3><?php echo get_the_title(87); ?></h3>
        </div>
    </div>
    <div class="container">
        <div class="row">
             <?php 
                $rows = get_field('advantage_type',377);
                if($rows)
                {
                    foreach($rows as $row)
                    {?>
                        <div class="col-md-3 item-margin">
                            <div class="item-first item-improve">
                                <div class="item-icon">
                                    <div class="item-icon_inner">
                                        <img src="<?php echo $row['advantage_icon']  ?>" alt="">
                                    </div>
                                </div>
                                <h4><?php echo $row['advantage_title']; ?></h4>
                            <p><?php echo $row['advantage_content'] ?></p>
                        </div>
                    </div>

                  <?php  } } ?>          
        </div>
    </div>
</div>
<svg class="bottom-triangle_description"
 viewBox="0 0 100 100" 
 preserveAspectRatio="none" 
 version="1.1"
     baseProfile="full"
     xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink"
     xmlns:ev="http://www.w3.org/2001/xml-events" >
 <path d="M0 0 L 100 0 50 50" id="footer-curve" fill="url(#RadialGradient2)"></path>
 </svg>

<div class="content-features" id="content-features">
    <div class="container">
        <div class="row">


        <?php 
                $rows = get_field('features',392);
                if($rows)
                {
                    foreach($rows as $row)
                    {?>
                        <div class="col-md-4">
                            <div class="item-features">
                                <div class="img-features">
                                    <img src="<?php echo $row['features_icon'] ?>" alt="">
                                </div>
                                <h4><?php echo $row['features_title'] ?></h4>
                                <?php echo $row['features_content'] ?>
                             
                                <?php echo $row['bth_show'] ?>
                            </div>
                        </div>

                  <?php  } } ?>  
        </div>
    </div>
</div>

<div class="content-form">
    <div class="container">
        <h3><?php echo get_the_title(89); ?></h3>

        <!-- <div class="form">
            <form method="POST" action="" id="formMain">
                <input id="name" 
                type="text" 
                name="name" 
                class="name-client"  
                placeholder="Ваше Имя"

                data-val="\S"
                data-val-msg="введите Имя"
                data-val-msg-id="userNameMsg"/>

                 <div id="userNameMsg"></div>
                 
                <input id="telephone" 
                type="text" 
                name="telephone" 
                placeholder="Ваш телефон 012.."

                data-val="^\d{10}$"
                data-val-msg="телефон в формате 0123456789 10 цифр"
                data-val-msg-id="phone-msg"/>

                <div id="phone-msg"></div>

                <button  class="coll-back" id="buttonIn" type="submit"  value="Отправить">Перезвонить мне</button>
            </form> -->
            <?php echo do_shortcode( '[contact-form-7 id="74" title="ewe" html_id="formMain"]' ); ?>
        </div>
        
        

        <!-- <div id="result_id"></div> -->
    </div>
</div>

<?php get_footer(); ?>