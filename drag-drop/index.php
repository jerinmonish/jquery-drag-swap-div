<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="bootstrap default admin template">
    <meta name="viewport" content="width=device-width">
    <title>Drag &amp; Drop</title>
    <!-- START GLOBAL CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/elegant.min.css"/>
    <link id="site-color" rel="stylesheet" href="assets/css/color-default.min.css"/>
    <link rel="stylesheet" href="assets/css/switchery.min.css"/>
    <link rel="stylesheet" href="assets/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" href="assets/css/components.min.css"/>
    <link rel="stylesheet" href="assets/css/layout.min.css"/>
</head>
<body>
<div class="loader-overlay">
    <div class="loader-preview-area">
        <div class="spinners">
            <div class="loader">
                <div class="rotating-plane"></div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <section id="main" class="container-fluid">
        <div class="row">
            <!-- START RIGHT CONTENT -->
            <section id="content-wrapper">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="nav-tab-horizontal">
                                <div class="divider15"></div>
                                <h4 class="page-content-title">Drag and store div/image format</h4>
                                <div class="tab-content">
                                    <div id="multi-list-output" class="tab-pane active">
                                        <p>This is a 6-6 multi sortable list, you can drag and drop whole list and click Save Format Button to save the image format. Once you have save the image format in Database you can click Sort Me Button So that it will so the image where you have dragged and saved.</p>
                                        <div class="sortable-list">
                                            <div class="row" data-plugin="sortable" data-handle=".tile_name" data-animation="150" data-force="30">
                                                <div class="col-xl-4 col-lg-6 col-md-12 col-xs-12 tile xl-multi-sortable">
                                                    <div class="content content-section">
                                                        <h6 class="tile_name text-xs-center">Team A</h6>
                                                        <div class="divider15"></div>
                                                        <div class="row">
                                                        <div class="multi-list-box tile_list multiple-sortable" data-plugin="sortable" data-group=".multi-list-data" data-animation="150" id="original">

                                                            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-6 box" id="Div1" timestamp1="1">
                                                                <div class="multi-list-data tetra">
                                                                <img src="https://www.w3schools.com/w3css/img_lights.jpg" alt="profile-image">
                                                                    <h6 class="text-xs-center data-name" style="display: none;">1</h6>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-6 box" id="Div2" timestamp1="2">
                                                                <div class="multi-list-data tetra">
                                                                    <img src="https://images.freeimages.com/images/large-previews/2fe/butterfly-1390152.jpg" alt="profile-image">
                                                                    <h6 class="text-xs-center data-name" style="display: none;">3</h6>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-6 box" id="Div3" timestamp1="5">
                                                                <div class="multi-list-data tetra">
                                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHa0EluyQChuBO01E_HJ09JQX1ERmNXrm6kuHSZ-KUFm_KisLAnA" alt="profile-image">
                                                                    <h6 class="text-xs-center data-name" style="display: none;">5</h6>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-6 box" id="Div4" timestamp1="90">
                                                                <div class="multi-list-data tetra" >
                                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLb5mOUtzV0ObqBVuAURSvPAsC27148aFdKGc6e6Z_Z78vmMWf" alt="profile-image">
                                                                    <h6 class="text-xs-center data-name" style="display: none;">0</h6>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-6 box" id="Div5" timestamp1="4">
                                                                <div class="multi-list-data tetra" >
                                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-R6kJB1sQcZ3sT17MOVBJgv-1j5ix_N6aMo0CsNocl-BadXh3tA" alt="profile-image">
                                                                    <h6 class="text-xs-center data-name" style="display: none;">2</h6>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 col-lg-4 col-xl-4 col-xs-6 box" id="Div6" timestamp1="7">
                                                                <div class="multi-list-data tetra">
                                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTsgKWaWvMfgSmQjJBETlectexGQ4qM_Yf4eiP44iWKUqBASfGvUA" alt="profile-image">
                                                                    <h6 class="text-xs-center data-name" style="display: none;">6</h6>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <h1>Results</h1>
                                    <div class="alert alert-danger alert-icon-corner fade in noData" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <div class="alert-media-left">
                                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                                        </div>
                                        <div class="alert-media-right">
                                            <h4 class="alert-heading">Oops!</h4>
                                            <p>It Seems that there is no data...! Kindly Rearrange the Div / Drag and Click Save Format to Save..</p>
                                        </div>
                                    </div>

                                    <div class="alert alert-danger text-xs-center alert-center saveError" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                        <h4 class="alert-heading">Error! </h4>
                                        <p>Error while saving data....!</p>
                                    </div>

                                    <div class="alert alert-success saveData" role="alert">
                                        <h4 class="alert-heading">Well done!</h4>
                                        <p>we have saved the data.</p>
                                        <p class="mb-0">Thank You..!</p>
                                    </div>

                                    <button type="button" class="btn btn-secondary" id="hove_me">Save Format</button>
                                    <button type="button" class="btn btn-secondary" id="sort_me">Sort Me</button>
                                    <div id="multi-list-code" class="tab-pane pre-code">
                                        <div data-plugin="custom-scroll" data-min="300" data-height="473">
                                            <div>
                                                        
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </section>
            <!-- END RIGHT CONTENT -->

        </div>
    </section>
    <!-- END CONTENT -->
    <!-- START FOOTER -->
    <footer id="footer">
        Copyright&copy; 2017, All Rights Reserved.
    </footer>
    <!-- END FOOTER -->
</div>
<!-- START CORE JAVASCRIPT -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/tether.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/perfect-scrollbar.jquery.min.js"></script>
<script type="text/javascript" src="assets/js/switchery.min.js"></script>
<script type="text/javascript" src="assets/js/screenfull.min.js"></script>
<script type="text/javascript" src="assets/js/classie.js"></script>


<!-- END CORE JAVASCRIPT -->
<!-- START PAGE PLUGINS -->
<script type="text/javascript" src="assets/js/Sortable.min.js"></script>

<script type="text/javascript" src="assets/js/ng-sortable.js"></script>
<script type="text/javascript" src="assets/js/jquery.nestable.js"></script>

<!-- END PAGE PLUGINS -->
<!-- START GLOBAL JAVASCRIPT -->
<script type="text/javascript" src="assets/js/site.min.js"></script>
<script type="text/javascript" src="assets/js/site-settings.min.js"></script>
<!-- END GLOBAL JAVASCRIPT -->
<!-- START PAGE JAVASCRIPT -->
<script type="text/javascript" src="assets/js/global/sortable_nestable.js"></script>
<!-- END PAGE JAVASCRIPT -->
<!-- START THEME LAYOUT JAVASCRIPT -->
<script type="text/javascript" src="assets/js/layout.min.js"></script>
<!-- END THEME LAYOUT JAVASCRIPT -->
</body>
</html>


<script type="text/javascript">
$(document).ready(function () {
    $(".noData").hide();
    $(".saveError").hide();
    $(".saveData").hide();

    $.ajax({
        type: 'POST',
        url:'get_data.php',
        data: "",
        success:function(data){
            if(data != 0){
                $(".noData").hide();
                $("#hove_me").hide();
                var show_touchs = jQuery.parseJSON(data);

                var setarray = show_touchs.div_id;
                $('div', '#original').each(function () {
                    if($(this).attr('timestamp1') != undefined){
                        var set_id = $(this).attr('id');
                        $.each(setarray,function(key,value){
                            if(set_id == value){
                                //console.log(key);
                                $("#"+set_id).attr('timestamp1',key);
                            }
                        });
                    }
                });
            } else {
                alert("No Data....!");
                $(".noData").show();
                $("#hove_me").show();
                $("#sort_me").hide();
            }
        }
    });

    $("#hove_me").click(function(){
        var array = new Array();
        $('div', '#original').each(function () {
            //debugger;
            if($(this).attr('timestamp1') != undefined){
                array.push($(this).attr('timestamp1'));
                console.log($(this).attr('id')+':'+$(this).attr('timestamp1'));
                $.ajax({
                    type: 'POST',
                    url:'set_data.php',
                    data: {div_id : $(this).attr('id'), timestamp1:$(this).attr('timestamp1')},
                    success:function(data){
                        //console.log(data);
                        if(data == 1){
                            //console.log("saved");
                            $(".noData").hide();
                            $(".saveError").hide();
                             location.reload();
                             $(".saveData").show();
                        } else {
                            //console.log("fauiled saved");
                            $(".noData").show();
                            $(".saveError").show();
                        }
                    }
                });
            }
        });
    });

    var $divs = $("div.box");
    $("#sort_me").click(function(){
        var numericallyOrderedDivs = $divs.sort(function (a, b) {
            //debugger;
            return $(a).attr('timestamp1') > $(b).attr('timestamp1');
        });
        $("#original").html(numericallyOrderedDivs);
    });

});
</script>