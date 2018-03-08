<div class="card card-nav-tabs">
    <div class="card-header card-header-success">
        <h4 class="card-title"><i class="fa fa-hotel"></i> Hotels List</h4>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-sm-12 listing-block">
        <?php
            foreach($hotels as $item) {
        ?>
                <div class="card">
                    <div class="card-body media">
                        
                        <a href="<?php echo urldecode($item['hotelUrls']['hotelInfositeUrl']);?>" target="_blank" title="<?php echo $item['hotelInfo']['localizedHotelName'];?>">
                            <img class="d-flex align-self-start" src="<?php echo str_replace('_t.jpg', '_b.jpg', $item['hotelInfo']['hotelImageUrl']);?>" alt="<?php echo $item['hotelInfo']['hotelName'];?>" style="height: 165px; width: 250px;">
                        </a>
                        
                        <div class="media-body pl-3">
                            
                            <h4 class="card-title">
                                <a href="<?php echo urldecode($item['hotelUrls']['hotelInfositeUrl']);?>" target="_blank" title="<?php echo $item['hotelInfo']['localizedHotelName'];?>">
                                    <?php echo $item['hotelInfo']['localizedHotelName'];?>
                                </a>
                            </h4>
                            
                            <small>
                                <span>
                                    Hotel Rating: 
                                    <span class="small-text">(<?php echo $item['hotelInfo']['hotelStarRating']; ?> of 5)</span>
                                    <span class="fa fa-star<?php if($item['hotelInfo']['hotelStarRating'] < 0.5) echo '-o'; ?>" data-rating="1"></span>
                                    <span class="fa fa-star<?php if($item['hotelInfo']['hotelStarRating'] < 1.5) echo '-o'; ?>" data-rating="2"></span>
                                    <span class="fa fa-star<?php if($item['hotelInfo']['hotelStarRating'] < 2.5) echo '-o'; ?>" data-rating="3"></span>
                                    <span class="fa fa-star<?php if($item['hotelInfo']['hotelStarRating'] < 3.5) echo '-o'; ?>" data-rating="4"></span>
                                    <span class="fa fa-star<?php if($item['hotelInfo']['hotelStarRating'] < 4.5) echo '-o'; ?>" data-rating="5"></span>  
                                </span>
                                &nbsp;|&nbsp;
                                <span>
                                    Guest Rating: 
                                    <span class="small-text">(<?php echo $item['hotelInfo']['hotelGuestReviewRating']; ?> of 5)</span>
                                    <span class="fa fa-star<?php if($item['hotelInfo']['hotelGuestReviewRating'] < 0.5) echo '-o'; ?>" data-rating="1"></span>
                                    <span class="fa fa-star<?php if($item['hotelInfo']['hotelGuestReviewRating'] < 1.5) echo '-o'; ?>" data-rating="2"></span>
                                    <span class="fa fa-star<?php if($item['hotelInfo']['hotelGuestReviewRating'] < 2.5) echo '-o'; ?>" data-rating="3"></span>
                                    <span class="fa fa-star<?php if($item['hotelInfo']['hotelGuestReviewRating'] < 3.5) echo '-o'; ?>" data-rating="4"></span>
                                    <span class="fa fa-star<?php if($item['hotelInfo']['hotelGuestReviewRating'] < 4.5) echo '-o'; ?>" data-rating="5"></span>  
                                    , <?php echo $item['hotelInfo']['hotelReviewTotal']; ?> Reviews
                                </span>
                            </small>
                            
                            <p><i class="fa fa-map"></i> <?php echo $item['hotelInfo']['hotelStreetAddress'];?> - <?php echo $item['destination']['longName'];?></p>
                            
                            
                            <?php
                                if($item['hotelPricingInfo']['percentSavings']) {
                                    echo "<strike>{$item['hotelPricingInfo']['originalPricePerNight']} {$item['hotelPricingInfo']['currency']}</strike> <b>{$item['hotelPricingInfo']['averagePriceValue']} {$item['hotelPricingInfo']['currency']}</b> rate per night, ";
                                    
                                    echo '<span style="color: green;">' . $item['hotelPricingInfo']['percentSavings'] . '% discount rate</span>';
                                }
                                else {
                                    echo "<b>{$item['hotelPricingInfo']['averagePriceValue']} {$item['hotelPricingInfo']['currency']} </b> rate per night";
                                }
                            ?>
                            
                            <p><i class="fa fa-calendar"></i> 
                                <?php echo date("F j, Y", strtotime(implode('/', $item['offerDateRange']['travelStartDate']))) ;?> - 
                                <?php echo date("F j, Y", strtotime(implode('/', $item['offerDateRange']['travelEndDate']))) ;?>
                            </p>
                            
                        </div>
                    </div>
                </div>
        <?php
            }
        ?>
            </div>
        </div>
        
    </div>
</div>