<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <meta charset="utf-8" />
        <title>Admin Login </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('admin/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('admin/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('admin/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{ asset('admin/pages/css/login.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="">
                <img src="{{ asset('admin/pages/img/logo-big.png')}}" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="{{ url('admin/reset-password') }}" method="post">
              @csrf
              <input type="hidden" name="token" value="{{ $token }}">
                <h3 class="form-title font-green">Change Password</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter email and password. </span>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <input type="email" class="form-control form-control-solid placeholder-no-fix" id="email" aria-describedby="emailHelp" name="email" placeholder="Email" required="" autocomplete="off" value="{{ $email ?? old('email') }}">
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input type="password" class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" required="">
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Confirm Password</label>
                    <input type="password" class="form-control form-control-solid placeholder-no-fix" type="confirm_password" autocomplete="off" placeholder="Password" name="password" required="">
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase">Login</button>
                </div>

            </form>


        </div>

        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ asset('admin/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('admin/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('admin/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('admin/global/scripts/app.min.js')}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('admin/pages/scripts/login.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    <!-- Google Code for Universal Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-37564768-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- End -->

<!-- Google Tag Manager -->
<noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-W276BJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W276BJ');</script>
<!-- End -->
</body>
</html>
