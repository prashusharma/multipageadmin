<?php

session_start();

if (!isset($_SESSION['user_id'])) {

   header("LOCATION: ./login.php");  

}

?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin Pannel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/grid_stack.min.css" />
    <link rel="stylesheet" href="js/plugins/jquery_confirm/jquery_confirm.css">
    <link rel="stylesheet" href="js/plugins/colorpicker/bootstrap-colorpicker-plus.min.css">
    <link rel="stylesheet" href="js/plugins/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="js/plugins/intro-tour/introjs.min.css">
    <link rel="stylesheet" href="js/plugins/intro-tour/themes/introjs-modern.css">
    <link rel="stylesheet" href="js/plugins/datepicker/datepicker.css">

    <link rel="stylesheet" type="text/css" href="css/dripicon.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/admin.css" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>
</head>

<body class="theme-body">
    <div class="theme-wrapper">
        <header>
            <?php include './includes/header.php'?>
        </header><!-- Header -->

        <div class="theme-content">
            <aside class="console-sidemenu active" id="sidemenu">
                <?php include './includes/sidemenu.php'?>
            </aside><!-- Console Sidemenu -->

            <div class="content-area">
            <?php

                if (isset($_GET['file'])) {

                    include './'.$_GET["file"];

                }else{

                    include './dashboard.php'; 

                }

                ?>
            </div><!-- Content Area -->

            <aside class="more-opt-panel"></aside>
        </div><!-- Theme Content -->

    </div><!-- Theme Wrapper -->


    <script src="js/jquerymain_jquerytouch_jquerycookies.js"></script>
    <script src="js/plugins/loader/loadingoverlay.min.js"></script>
    <script src="js/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Bootstrap and Popper.js -->
    <script src="js/bootstrap_popper.min.js"></script>



    <!-- Grid Stack Start -->
    <script>var _tooltip = jQuery.fn.tooltip;</script>
    <script src="js/jquery_ui.min.js"></script>
    <script>jQuery.fn.tooltip = _tooltip;</script>
    <script src="js/grid_stack_pack.min.js"></script>


    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script><!-- Sparkline -->
    <script src="js/plugins/chartjs/Chart.bundle.min.js"></script><!-- Chart JS -->
    <script src="js/plugins/colorpicker/bootstrap-colorpicker-plus.min.js"></script><!-- ColorPicker -->
    <script src="js/plugins/jquery_confirm/jquery_confirm.js"></script><!-- Confirm -->
    <script src="js/plugins/toaster/jquery.toaster.js"></script>
    <script src="js/script.js"></script><!-- Common Scripts -->

    <!-- Pagelevel Initializations Of Plugins -->
    <script src="js/page-level/chartjs/linechart1.js"></script>
    <script src="js/page-level/chartjs/donutchart1.js"></script>
    <script src="js/page-level/chartjs/barchart1.js"></script>
	<script src="js/page-level/select2.js"></script>
    <script>
        $(document).ready(function () {
            if ($('#select-city-partner').prop("checked")) {
                $('#partner').show();
            }

            $('#select-city-partner').change(function(){
                if ($(this).prop("checked")) {
                    $(this).val('1');
                    $('#partner').slideDown();
                }else{
                    $(this).val('2');
                    $('#partner').slideUp();
                }
            });
            $('#flexSwitchCheckDefault').change(function(){
                let that = $(this);
                console.log(that.is(":checked"));
                let option = $('#select-service-page').find('option');
                if(that.is(":checked")){
                    // that.parent().siblings('.select2-container').slideUp();
                    let val = [];
                    $.each(option, function (indexInArray, valueOfElement) { 
                        $(valueOfElement).attr("selected","selected");
                    });
                    $('#select-service-page').val(['1', '2', '3', '4', '5', '6', '7']);
                    $('#select-service-page').trigger('change');
                }else{
                    // that.parent().siblings('.select2-container').slideDown();
                    $.each(option, function (indexInArray, valueOfElement) { 
                        $(valueOfElement).removeAttr("selected");
                    });
                    $('#select-service-page').trigger('change');
                }
                
            })
           
           $('#city-name').change(function (e) { 
               e.preventDefault();
               $.ajax({
                   type: "POST",
                   url: "./action_page.php",
                   data: {
                       checkCity: $(this).val(),
                       state: $('[name="state-name"]').val(),
                       country: $('[name="country-select"]').val()
                   },
                   dataType: "HTML",
                   success: function (response) {
                    if (response != '') {
                       $('#select-service-page').html(response).trigger('change');
                       $('#city-name').siblings(".text-muted").html("");
                       $('[name="link-keyword"]').removeAttr("disabled");
                           $('[type="submit"]').removeAttr("disabled");
                       } else {
                           $('#city-name').siblings(".text-muted").html("all services are listed. please select other city");
                           $('[name="link-keyword"]').attr("disabled","disabled");
                           $('[type="submit"]').attr("disabled","disabled");
                       }
                   }
               });
           });

           $('[name="state-name"]').change(function (e) { 
               e.preventDefault();
               let country = $('[name="country-select"]').val();
               $.ajax({
                   type: "POST",
                   url: "./action_page.php",
                   data: {
                       partnerCheck: "wait",
                       country: country,
                       state: $(this).val()
                   },
                   dataType: "HTML",
                   success: function (response) {
                       $('.message').html(response);
                   }
               });
           });
            $('[name="country-select"]').change(function (e) { 
                e.preventDefault();
                let code = $(this).val();

                $('.input-group-text img').attr('src', 'https://flagcdn.com/16x12/'+code.toLowerCase()+'.png');
            });
        });
    </script>
</body>

</html>