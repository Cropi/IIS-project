
<!DOCTYPE html>
<html class="login-pf">
  <head>
    <meta charset="utf-8">
    <title>{{env('APP_NAME')}}</title>

    <link rel="icon" href="img/hostpital_logo.png" type="image/x-icon" />
    <link href="/css/patternfly.min.css" rel="stylesheet" type="text/css">
    <link href="/css/patternfly-additions.min.css" rel="stylesheet" type="text/css">
    <!--<link href="/css/so2platform/styles.css" rel="stylesheet" type="text/css">-->
  </head>

  <!-- Main part -->
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="brand">
            <img src="" alt="Veterinary Information System">
          </div><!--/#brand-->
        </div><!--/.col-*-->
        <div class="col-sm-7 col-md-6 col-lg-5 login"> <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
          <form class="form-horizontal" role="form" action="index.html">
            <div class="form-group">
              <label for="inputUsername" class="col-sm-2 col-md-2 control-label">Email</label>
              <div class="col-sm-10 col-md-10">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
              </div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="col-sm-2 col-md-2 control-label">Password</label>
              <div class="col-sm-10 col-md-10">
                <input id="password" type="password" class="form-control" name="password" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-8 col-sm-offset-2 col-sm-6 col-md-offset-2 col-md-6">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" tabindex="3"> Remember username
                  </label>
                </div>
                <span class="help-block"> Forgot <a data-toggle="modal" data-target="#about-modal" tabindex="6">password</a>?</span>
              </div>
              <div class="col-xs-4 col-sm-4 col-md-4 submit">
                <button type="submit" class="btn btn-primary" tabindex="4">Log In</button>
              </div>
            </div>
          </form>
        </form></div><!--/.col-*-->
        <div class="col-sm-5 col-md-6 col-lg-7 details">
          <p><strong>Welcome to Veterinary Information System | School projekt!</strong>
            This is placeholder text, only. Use this area to place any information or introductory message about your application that may be relevant for users. For example, you might include news or information about the latest release of your product here&mdash;such as a version number.</p>
        </div><!--/.col-*-->
      </div><!--/.row-->
    </div><!--/.container-->
  </body>

<!-- Forgot password modal -->
<div class="modal fade" id="about-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content about-modal-pf">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
           <span class="pficon pficon-close"></span>
          </button>
        </div>
        <div class="modal-body">
          <h1>Reset your password</h1>
          <div class="product-versions-pf">
           <ul class="list-unstyled">
             <p><strong>Email</strong>
               <div class="form-group">
                  <div class="input-group">
                     <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                     <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
                  </div>
               </div>
               <div class="form-group">
                  <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
               </div></p>
            </br></br>
           </ul>
          </div>
          <div class="trademark-pf">
           &copy; 2018 VUT FIT Attila Lakatos
          </div>
        </div>
        <!-- <div class="modal-footer">
          <img src="/assets/img/logo-alt.svg" alt=" Symbol">
        </div> -->
      </div>
   </div>
</div>


<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.js') }}"></script>

</html>
