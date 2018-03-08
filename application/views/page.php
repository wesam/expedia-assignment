<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="icon" href="https://www.expedia.com/favicon.ico">
    <title>Expedia Travel: Search Hotels, Cheap Flights, Car Rentals & Vacations</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/material-kit.css?v=2.0.2">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/assets-for-demo/demo.css" rel="stylesheet" />
    <!-- iframe removal -->
</head>

<body class="index-page">
    
    <?php echo @ $search_form; ?>
    
    <?php echo @ $hotels_list; ?>
    
    
    <footer class="footer footer-default">
        <div class="container">
            <small class="copyright">
                &copy; <?php echo @ date('Y'); ?> <img src="http://www.expedia.com/_dms/header/logo.svg?locale=en_US&amp;siteid=1&amp;test=Storefront_2017_B2P_variant_2" style=" width: 70px; ">, Inc. All rights reserved.
            </small>
        </div>
    </footer>
    
    <!--   Core JS Files   -->
    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/bootstrap-material-design.min.js"></script>
    
    <script src="assets/js/plugins/moment.min.js"></script>
    <script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>

    
    <script>
        $(document).ready(function() {

            //materialKit.initFormExtendedDatetimepickers();
            $('.datetimepicker').datetimepicker({
                format: 'YYYY-MM-DD',
                icons: {
                    //time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-chevron-up",
                    down: "fa fa-chevron-down",
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-screenshot',
                    clear: 'fa fa-trash',
                    close: 'fa fa-remove'
                }
            });
        });
    </script>
    

</body>

</html>