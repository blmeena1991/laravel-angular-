<!doctype html>
<html ng-app="ivrs">
<head>
    <meta charset="utf-8">
    <title>ivrs</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- build:css({.tmp/serve,src}) styles/vendor.css -->
    <!-- bower:css -->

    <!-- Only required for desktop -->
    <link rel="stylesheet" href="ivrs/node_modules/mobile-angular-ui/dist/css/mobile-angular-ui-hover.min.css" />

    <!-- Always required -->
    <link rel="stylesheet" href="ivrs/node_modules/mobile-angular-ui/dist/css/mobile-angular-ui-base.min.css" />

    <!-- Only required for desktop -->
    <link rel="stylesheet" href="ivrs/node_modules/mobile-angular-ui/dist/css/mobile-angular-ui-desktop.min.css" />

    <!-- run `gulp inject` to automatically populate bower styles dependencies -->
    <!-- endbower -->
    <!-- endbuild -->

    <!-- build:css({.tmp/serve,src}) styles/app.css -->
    <!-- inject:css -->
    <!-- css files will be automatically insert here -->
    <!-- endinject -->
    <!-- endbuild -->
</head>
<body ui-prevent-touchmove-defaults >
<!--[if lt IE 10]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Sidebars -->
<div ng-include="'ivrs/src/app/components/navbar/sidebar.html'"
     ui-track-as-search-param="true"
     class="sidebar sidebar-left"></div>

<div ng-include="'ivrs/src/app/components/navbar/sidebarRight.html'"
     class="sidebar sidebar-right"></div>

<div class="app"
     ui-swipe-right="Ui.turnOn('uiSidebarLeft')"
     ui-swipe-left="Ui.turnOff('uiSidebarLeft')">

    <!-- Navbars -->

    <div class="navbar navbar-app navbar-absolute-top">
        <div class="navbar-brand navbar-brand-center" ui-yield-to="title">
            Mobile Angular UI
        </div>
        <div class="btn-group pull-left">
            <div ui-toggle="uiSidebarLeft" class="btn sidebar-toggle">
                <i class="fa fa-bars"></i> Menu
            </div>
        </div>
        <div class="btn-group pull-right" ui-yield-to="navbarAction">
            <div ui-toggle="uiSidebarRight" class="btn sidebar-right-toggle">
                <i class="fa fa-comment"></i> Chat
            </div>
        </div>
    </div>

    <div class="navbar navbar-app navbar-absolute-bottom">
        <div class="btn-group justified">
            <a href="/docs" class="btn btn-navbar"><i class="fa fa-home fa-navbar"></i> Docs</a>
            <a href="https://github.com/mcasimir/mobile-angular-ui" class="btn btn-navbar"><i class="fa fa-github fa-navbar"></i> Sources</a>
            <a href="https://github.com/mcasimir/mobile-angular-ui/issues" class="btn btn-navbar"><i class="fa fa-exclamation-circle fa-navbar"></i> Issues</a>
        </div>
    </div>

    <!-- App Body -->
    <div class="app-body" ng-class="{loading: loading}">
        <div ng-show="loading" class="app-content-loading">
            <i class="fa fa-spinner fa-spin loading-spinner"></i>
        </div>
        <div class="app-content">
            <div  ui-view="content"></div>
        </div>
    </div>

</div><!-- ~ .app -->

<div ui-yield-to="modals"></div>



<!-- build:js(src) scripts/vendor.js -->
<!-- bower:js -->
<script src="ivrs/bower_components/jquery/dist/jquery.js"></script>
<script src="ivrs/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="ivrs/bower_components/angular/angular.js"></script>
<script src="ivrs/bower_components/angular-touch/angular-touch.js"></script>
<script src="ivrs/bower_components/angular-resource/angular-resource.js"></script>
<script src="ivrs/bower_components/angular-animate/angular-animate.js"></script>
<script src="ivrs/bower_components/angular-cookies/angular-cookies.js"></script>
<script src="ivrs/bower_components/angular-sanitize/angular-sanitize.js"></script>
<script src="ivrs/bower_components/angular-messages/angular-messages.js"></script>
<script src="ivrs/bower_components/angular-aria/angular-aria.js"></script>
<script src="ivrs/bower_components/angular-ui-router/release/angular-ui-router.js"></script>
<script src="ivrs/bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
<script src="ivrs/bower_components/angular-toastr/dist/angular-toastr.tpls.js"></script>
<script src="ivrs/bower_components/moment/moment.js"></script>
<script src="ivrs/node_modules/mobile-angular-ui/dist/js/mobile-angular-ui.min.js"></script>

<!-- run `gulp inject` to automatically populate bower script dependencies -->
<!-- endbower -->
<!-- endbuild -->

<!-- build:js({.tmp/serve,.tmp/partials,src}) scripts/app.js -->
<!-- inject:js -->
<script src="ivrs/src/app/index.module.js"></script>


<!-- add all controller,factory --etc here  -->
<script src="ivrs/src/app/components/webDevTec/webDevTec.service.js"></script>
<script src="ivrs/src/app/components/navbar/navbar.directive.js"></script>
<script src="ivrs/src/app/components/githubContributor/githubContributor.service.js"></script>
<script src="ivrs/src/app/main/main.controller.js"></script>

<!-- set up angular app here -->
<script src="ivrs/src/app/index.run.js"></script>
<script src="ivrs/src/app/index.route.js"></script>
<script src="ivrs/src/app/index.constants.js"></script>
<script src="ivrs/src/app/index.config.js"></script>
<script>
    jQuery.fn.extend({
        live: function (event, callback) {
            if (this.selector) {
                jQuery(document).on(event, this.selector, callback);
            }
        }
    });
</script>
<script>
    $('link[rel=stylesheet][href="/css/bootstrap.css"]').remove();
</script>
<!-- js files will be automatically insert here -->
<!-- endinject -->

<!-- inject:partials -->
<!-- angular templates will be automatically converted in js and inserted here -->
<!-- endinject -->
<!-- endbuild -->

</body>
</html>
