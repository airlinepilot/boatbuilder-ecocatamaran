<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>{{ config('app.name', 'BOAT BUILDER') }}</title>

        <meta name="description" content="AppUI is a Web App Bootstrap Admin Template created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="/img/favicon.png">
        <link rel="apple-touch-icon" href="/img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="/img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="/img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="/img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="/img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="/img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="/img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="/img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="/css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="/css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="/js/vendor/modernizr-3.3.1.min.js"></script>
    </head>
    <body>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper" class="page-loading">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader">
                <div class="inner">
                    <!-- Animation spinner for all modern browsers -->
                    <div class="preloader-spinner themed-background hidden-lt-ie10"></div>

                    <!-- Text for IE9 -->
                    <h3 class="text-primary visible-lt-ie10"><strong>Loading..</strong></h3>
                </div>
            </div>
            <!-- END Preloader -->

            <!-- Page Container -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available #page-container classes:

                'sidebar-light'                                 for a light main sidebar (You can add it along with any other class)

                'sidebar-visible-lg-mini'                       main sidebar condensed - Mini Navigation (> 991px)
                'sidebar-visible-lg-full'                       main sidebar full - Full Navigation (> 991px)

                'sidebar-alt-visible-lg'                        alternative sidebar visible by default (> 991px) (You can add it along with any other class)

                'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
                'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

                'fixed-width'                                   for a fixed width layout (can only be used with a static header/main sidebar layout)

                'enable-cookies'                                enables cookies for remembering active color theme when changed from the sidebar links (You can add it along with any other class)
            -->
            <div id="page-container" class="header-fixed-top sidebar-invisible-lg-full">
                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <!-- In the PHP version you can set the following options from inc/config file -->
                    <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed main sidebar with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->
                    <header class="navbar navbar-inverse navbar-fixed-top themed-background-social" style="left: 0;">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="/admin">
                                    <i class="gi gi-settings"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->

                            <!-- Header Link -->
                            <li class="hidden-xs animation-fadeInQuick">
                                <a href=""><strong>BOAT BUIDLER</strong></a>
                            </li>
                            <!-- END Header Link -->
                        </ul>
                        <!-- END Left Header Navigation -->

                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right">
                            <!-- Search Form -->
                            <li>
                                <form action="paypal-todo" method="post" class="navbar-form-custom">
                                    <button class="btn btn-primary pull-right total-money">0$ <i class="fa fa-shopping-cart"></i></button>
                                </form>
                            </li>
                            <!-- END Search Form -->

                            <!-- Alternative Sidebar Toggle Button -->
                            <!-- END Alternative Sidebar Toggle Button -->

                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content themed-background-info text-light-op" style="padding-bottom: 0px">
                                        <h4 class="themed-background-info text-light-op"><i class="fa fa-anchor"></i> <strong>Boat Template</strong></h4>
                                        <div class="row themed-background-muted">
                                            <div class="col-md-5" style="height:500px; overflow:hidden; overflow-y:scroll;">
                                                <div class="list-group">
                                                    <nav>
                                                        <a href="javascript:void(0)" class="boat-template list-group-item active" data-image="b0.jpeg">
                                                            <h4 class="list-group-item-heading"><strong>Custom your boat</strong></h4>
                                                        </a>
                                                        <ul style="padding-left: 0px">
                                                            @foreach ($boats as $id => $boat)
                                                            <a href="javascript:void(0)" class="boat-template list-group-item" data-image="{{ $boat->image }}" data-id="{{ $boat->id }}" data-defaultitems='@foreach($boat->defaultitems as $defaultitem){{$defaultitem->id}},@endforeach'>
                                                                <span class="badge">{{ $boat->cost }} $</span>
                                                                <h4 class="list-group-item-heading"><strong>{{ $boat->name }}</strong></h4>
                                                            </a>
                                                            @endforeach
                                                        </ul>
                                                    </nav>
                                                </div>
                                                    <!-- END List Groups Content -->
                                            </div>
                                            <div class="col-md-7 col-lg-7 text-center">
                                                <img class="boat-image" src="/img/b0.jpeg" style="width: 100%; height: 500px">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="widget">
                                    <div class="widget-content themed-background-passion text-light-op" style="padding-bottom: 0px">
                                        <h4 class="themed-background-passion text-light-op"><i class="fa fa-hand-stop-o"></i> <strong>Part Picker</strong></h4>
                                        <div class="row themed-background-muted">
                                            <div class="col-md-4 col-lg-4 text-center">
                                                <h1 class="text-black item-image-name"></h1>
                                                <img class="item-image" src="/img/item-default.jpg" style="width: 100%; height: 400px">
                                            </div>
                                            <div class="col-md-8 col-lg-8 text-center text-black" >
                                                @foreach($parts as $part)
                                                <div class="row text-left part partid-{{ $part->id }}" style="background-color: #edece8; margin-top: 1px" data-partid="{{ $part->id }}" data-money="0">
                                                    <div class="col-lg-3 col-lg-3">
                                                        <h3><i class="fa fa-caret-right partid-{{ $part->id }}"></i><strong> {{ $part->name }}</strong></h3>
                                                    </div>
                                                    <div class="col-lg-7 col-lg-7 part-choice">
                                                        <h3 class="itemname-selected partid-{{ $part->id }}"><i class="fa fa-star text-success"></i> </h3>
                                                    </div>
                                                    <div class="col-md-2 text-right">
                                                        <h4 class="itemmoney-selected partid-{{ $part->id }}"> <span class="badge">0$</span></h4>
                                                    </div>
                                                </div>
                                                <div class="part-list partid-{{ $part->id }}" style="">
                                                    @foreach($part->items as $item)
                                                    <div class="row text-left item @foreach($item->boats as $boat) of-boat-{{ $boat->id }} @endforeach" style="background-color: #ffffff;">
                                                        <div class="col-md-1">
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label class="csscheckbox csscheckbox-success">
                                                                <input type="checkbox" class="part-checkbox partid-{{ $part->id }} item-{{ $item->id }}" data-partid="{{ $part->id }}" data-name="{{ $item->name }}" data-money="{{ $item->cost }}"  data-image="{{ $item->image }}">
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8 text-left">
                                                            <h4> {{ $item->name }}</h4>
                                                        </div>
                                                        <div class="col-md-1 text-right">
                                                            <h5> <span><a href="{{ $item->link }}"><i class="fa fa-eye"></i></a></span></h5>
                                                        </div>
                                                        <div class="col-md-1 text-right">
                                                            <h5> <span class="badge">{{ $item->cost }}$</span></h5>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>

        <!-- END Page Wrapper -->
        @section('script')
        <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
        <script src="/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="/js/vendor/bootstrap.min.js"></script>
        <script src="/js/plugins.js"></script>
        <script src="/js/app.js"></script>
        <script type="text/javascript">
            function update_total_money(){
                var total = 0;
                $(".itemmoney-selected").each(function(){
                    total += parseInt($(this).text().replace("$",""));
                    $(".total-money").html("" + total + '$ <i class="fa fa-shopping-cart"></i>');
                });
            }
            update_total_money();
            $(".part").click(function() {
                var partid = $(this).data("partid");
                $(".part-list.partid-"+partid).toggle();
                var icon = $('i.fa.partid-'+partid);
                if (icon.hasClass('fa-caret-right')) {
                    icon.removeClass('fa-caret-right');
                    icon.addClass('fa-caret-down');
                } else {
                    icon.removeClass('fa-caret-down');
                    icon.addClass('fa-caret-right');
                }
            });
            $(".part-checkbox").click(function() {
                var partid = $(this).data("partid");
                // $(".part-list.partid-"+partid).toggle();
                if ($(this).is(':checked')) {
                    $(".part-checkbox.partid-"+partid).prop('checked',false);                
                    $(this).prop('checked',true);
                    var itemname = $(this).data("name");
                    var itemmoney = $(this).data("money");
                    var itemimage = $(this).data("image");
                    $(".itemname-selected.partid-" + partid).html('<i class="fa fa-star text-success"></i> '+itemname);
                    $(".itemmoney-selected.partid-" + partid).html(' <span class="badge">'+itemmoney+'$</span> ');
                    update_total_money();
                    $('.item-image').attr("src", "/img/" + itemimage);
                    $('.item-image-name').text(itemname);
                } else {
                    $(this).prop('checked',false);                
                }
            });



            $(".boat-template").click(function() {
                $(".boat-template").removeClass("active");
                $(this).addClass("active");
                var image = $(this).data("image");
                var id = $(this).data("id");
                if (typeof id === "undefined") {
                    $(".part-checkbox").prop('checked',false);
                    $(".total-money").html('0$ <i class="fa fa-shopping-cart"></i>');
                    $('.item').show();
                    $(".itemname-selected").html('<i class="fa fa-star text-success"></i> ');
                    $(".itemmoney-selected").html(' <span class="badge">0$</span> ');
                    return;
                }
                var defaultitems = $(this).data("defaultitems").split(',');
                $('.boat-image').attr("src", "/img/" + image);
                $('.item').hide();
                $('.of-boat-'+id).show();
                $(".part-checkbox").prop('checked',false);
                $.each(defaultitems,function(index,value){
                    console.log(value);
                    $(".item-"+value).click();
                });
                // console.log(defaultitems);
            });
        </script>
        @show
    </body>
</html>