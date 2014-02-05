<?php

/**
 * @file
 * Theme the 'bol-item' style.
 * Many, many available variables. See template_preprocess_bol_item().
 * Everything that gets put into $variables there is available.
 */
?>
<div class="container">
  <div class="foto">
    <a href="<?php print $bol_url;?>">
      <img alt="<?php print $bol_title;?>" src="<?php print $bol_thumbnailurl;?>">
    </a>
  </div>
  <div class="info">
    <div class="inner">
      <h2 class="productName"><a href="<?php print $bol_url;?>"><?php print $bol_title;?></a></h2>
      <h4>Rating: <?php print $bol_rating;  ?> | <?php print $bol_rating_percentage;  ?></h4>
      <h4>Type: <?php print $bol_type;  ?> </h4>
      <h4>Release: <?php print $bol_releasedate;  ?> </h4>
    </div>
  </div>
  
</div>
