<div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Hot Discount</h2>
                        <a href="index.php?controller=shop" class="wid-view-more">View All</a>
                        <?php foreach ($arr_hot_discount as $row){
                             ?>
                        <div class="single-wid-product">
                            <a href="index.php?controller=product_detail&id=<?php echo $row->id?>"><img src="public/backend/images/<?php echo $row->image ?>" alt="<?php echo $row->image ?>" class="product-thumb"></a>
                            <h2><a href="index.php?controller=product_detail&id=<?php echo $row->id?>"><?php echo $row->name?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$ <?php echo number_format($row->pricenew)?></ins> <del>$ <?php echo number_format($row->price)?></del>
                            </div>                            
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Hot Products</h2>
                        <a href="index.php?controller=shop" class="wid-view-more">View All</a>
                        <?php foreach ($arr_hot_product as $row){
                             ?>
                        <div class="single-wid-product">
                            <a href="index.php?controller=product_detail&id=<?php echo $row->id?>"><img src="public/backend/images/<?php echo $row->image?>" alt="<?php echo $row->image ?>" class="product-thumb"></a>
                            <h2><a href="index.php?controller=product_detail&id=<?php echo $row->id?>"><?php echo $row->name?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$ <?php echo number_format($row->pricenew)?></ins> <del>$ <?php echo number_format($row->price)?></del>
                            </div>                            
                        </div>
                        <?php } ?>                       
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="index.php?controller=shop" class="wid-view-more">View All</a>
                        <?php foreach ($arr_new as $row){
                             ?>
                        <div class="single-wid-product">
                            <a href="index.php?controller=product_detail&id=<?php echo $row->id?>"><img src="public/backend/images/<?php echo $row->image?>" alt="<?php echo $row->image ?>" class="product-thumb"></a>
                            <h2><a href="single-product.html"><?php echo $row->name?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$ <?php echo number_format($row->pricenew)?></ins> <del>$ <?php echo number_format($row->price)?></del>
                            </div>                            
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->