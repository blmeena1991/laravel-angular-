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

    <link rel="stylesheet" href="ivrs/bower_components/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="ivrs/bower_components/angular-toastr/dist/angular-toastr.min.css" />
    <link rel="stylesheet" href="ivrs/bower_components/animate.css/animate.css" />
    <!-- run `gulp inject` to automatically populate bower styles dependencies -->
    <!-- endbower -->
    <!-- endbuild -->

    <!-- build:css({.tmp/serve,src}) styles/app.css -->
    <!-- inject:css -->
    <!-- css files will be automatically insert here -->
    <!-- endinject -->
    <!-- endbuild -->
</head>
<body>
        <!--[if lt IE 10]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>

        </header>
        <div  ui-view="content"></div>
        <footer>

        </footer>

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

        <!-- run `gulp inject` to automatically populate bower script dependencies -->
        <!-- endbower -->
        <!-- endbuild -->

        <!-- build:js({.tmp/serve,.tmp/partials,src}) scripts/app.js -->
        <!-- inject:js -->
        <script src="ivrs/src/app/index.module.js"></script>


        <!-- set up angular app here -->
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
