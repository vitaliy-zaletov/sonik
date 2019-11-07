<svg class="bottom-cta-section-curve"
 viewBox="0 0 100 100" 
 preserveAspectRatio="none" 
 version="1.1"
     baseProfile="full"
     xmlns="http://www.w3.org/2000/svg"
     xmlns:xlink="http://www.w3.org/1999/xlink"
     xmlns:ev="http://www.w3.org/2001/xml-events" 
      >
<defs>
     <defs>
      <linearGradient id="RadialGradient5">
        <stop offset="15%" stop-color="#fa9a0b"/>
        <stop offset="41%" stop-color="#fbaa0f"/>
        <stop offset="58%" stop-color="#fbaa0f"/>
        <stop offset="87%" stop-color="#fa9a0b"/>  
      </linearGradient>
  </defs>
  </defs>

<path d="M0 100 C 25 0 75 0 100 100" id="footer-curve" fill="url(#RadialGradient5)" ></path>

</svg>
<div class="footer" id="footer">
    <div class="container">
        <div class="footer-info">
            <!-- <ul class="footer-info_inner">
                <li>info@aliran.com.ua</li>
                <li><a href="">aliran.com.ua</a></li>
                <li>тел.:+38 068 94 90 070</li>
            </ul> -->

         <?php 

            $rows = get_field('footer',421);
            if($rows)
            {
                echo '<ul class="footer-info_inner">';

                foreach($rows as $row)
                {
                    echo '<li>' . $row['footer_item'] .'</li>';
                }

                echo '</ul>';
            }
?>




                
        </div>
    </div>
</div>
<div id="back-top">
    <button type="button" class="btn-up"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></button>
</div>




    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script> -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <?php wp_footer(); ?>

  </body>
</html>