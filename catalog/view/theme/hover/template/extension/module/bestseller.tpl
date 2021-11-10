<h3 class="title"><?php echo $heading_title; ?></h3>
<div class="row">
  <?php foreach ($products as $product) { ?>
  
  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="text-center">
                            <div class="product-img">
                                <img src="<?php echo $product['thumb']; ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>">
                            </div>
                            <div class="product-caption">
                                <h3><a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a></h3>
								
                                  <?php if ($product['price']) { ?>
        <p class="price">
          <?php if (!$product['special']) { ?>
          <?php echo $product['price']; ?>
          <?php } else { ?>
          <span class="price-new"><?php echo $product['special']; ?></span> <span class="price-old"><?php echo $product['price']; ?></span>
          <?php } ?>
          <?php if ($product['tax']) { ?>
          <span class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
          <?php } ?>
        </p>
        <?php } ?>
                            </div>
                        </div>
                    </div>
  <?php } ?>
</div>
