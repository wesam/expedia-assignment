<div class="card card-nav-tabs">
    
    <div class="card-header card-header-warning">
        
        <a href="http://www.expedia.com" target="_blank" title="expedia.com">
            
            <img itemprop="image" alt="www.expedia.com" src="http://www.expedia.com/_dms/header/logo.svg?locale=en_US&amp;siteid=1&amp;test=Storefront_2017_B2P_variant_2" onerror="this.src=this.src.replace('.svg?','.png?');this.onerror='';this.style='';" style="font-size:0;" border="0">
            
        </a>
        
        <hr />
        
        <h4 class="card-title">Find Hotel Deals</h4>
        
        <p class="card-text">Plan your next trip with Expedia. Read reviews on thousands of hotels, and bundle for even more savings. Expedia Price Guarantee!</p>
        
    </div>
    
    <div class="card-body">

        <form method="get" action="/" style="padding: 25px;" >
            
            <div class="form-row">
                <div class="col">
                    <label class="label-control"><b>Going to:</b></label>
                    <input type="text" class="form-control" name="destinationName" placeholder="Destination, hotel name, airport, train station, landmark, or address" value="<?php echo @ $destinationName; ?>">
                </div>
            </div>
            
            <p>&nbsp;</p>

            <div class="form-row">
                <div class="col">
                    <label class="label-control"><b>Check-in:</b></label>
                    <input type="text" class="form-control datetimepicker" placeholder="YYYY-MM-DD" name="minTripStartDate" value="<?php echo @ $minTripStartDate; ?>" />
                </div>
                <div class="col">
                    <label class="label-control"><b>Check-out:</b></label>
                    <input type="text" class="form-control datetimepicker" placeholder="YYYY-MM-DD" name="maxTripStartDate" value="<?php echo @ $maxTripStartDate; ?>" />
                </div>
                <div class="col">
                    <label class="label-control"><b>Length Of Stay:</b></label>
                    <input type="number" class="form-control" placeholder="How many days?" name="lengthOfStay" value="<?php echo @ $lengthOfStay; ?>" />
                </div>
            </div>

            <p>&nbsp;</p>
            
            <div class="collapse" id="search_form">

                <div class="form-row">
                    <div class="col">
                        <label class="label-control"><b>City:</b></label>
                        <input type="text" class="form-control" name="destinationCity" placeholder="destination city" value="<?php echo @ $destinationCity; ?>" >
                    </div>
                    <div class="col">
                        <label class="label-control"><b>Province:</b></label>
                        <input type="text" class="form-control" name="destinationProvince" placeholder="Province" value="<?php echo @ $destinationProvince; ?>">
                    </div>
                    <div class="col">
                        <label class="label-control"><b>Regions Ids:</b></label>
                        <input type="text" class="form-control" name="regionIds" placeholder="Regions Ids" value="<?php echo @ $regionIds; ?>">
                    </div>
                </div>

                <p>&nbsp;</p>

                <div class="form-row">
                    <div class="col">
                        <label class="label-control"><b>Min Hotel Rating:</b></label>
                        <select class="form-control" name="minStarRating">
                            <option value="">-----</option>
                            <option value="1">1 Star</option>
                            <option value="2">2 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="5">5 Stars</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="label-control"><b>Max Hotel Rating:</b></label>
                        <select class="form-control" name="maxStarRating">
                            <option value="">-----</option>
                            <option value="1">1 Star</option>
                            <option value="2">2 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="5">5 Stars</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="label-control"><b>Min Guest Rating:</b></label>
                        <select class="form-control" name="minGuestRating">
                            <option value="">-----</option>
                            <option value="1">1 Star</option>
                            <option value="2">2 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="5">5 Stars</option>
                        </select>
                    </div>
                    <div class="col">
                        <label class="label-control"><b>Max Guest Rating:</b></label>
                        <select class="form-control" name="maxGuestRating">
                            <option value="">-----</option>
                            <option value="1">1 Star</option>
                            <option value="2">2 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="5">5 Stars</option>
                        </select>
                    </div>
                </div>
            
            </div>
            
            <a class="btn btn-success" href="/" style="float: right; margin-top: 25px;"><i class="fa fa-file"></i> Reset</a>
            
            <a class="btn btn-info" data-toggle="collapse" href="#search_form" aria-expanded="true" aria-controls="search_form" style="float: right; margin-top: 25px;"><i class="fa fa-filter"></i> Advanced</a>
            
            <button type="submit" class="btn btn-warning" style="float: right; margin-top: 25px;"><i class="fa fa-search"></i> Search</button>
                            
        </form>

    </div>
</div>