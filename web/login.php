<!doctype html>
<html>
<link rel="stylesheet" href="./login.css">
<!-- Form-->
<div class="form">
    <div class="form-toggle"></div>
    <div class="form-panel one">
        <div class="form-header">
            <h1>Account Login</h1>
        </div>
        <div class="form-content">
            <form>
                <div class="form-group"><label for="username">Username</label><input type="text" id="username" name="username" required="required" /></div>
                <div class="form-group"><label for="password">Password</label><input type="password" id="password" name="password" required="required" /></div>
                <div class="form-group"><label class="form-remember"><input type="checkbox" />Remember Me</label><a class="form-recovery" href="#">Forgot Password?</a></div>
                <div class="form-group"><button type="submit">Log In</button></div>
            </form>
        </div>
    </div>
    </div
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://codepen.io/andytran/pen/vLmRVp.js"></script>
    <script>
        $(document).ready(function() {
  var panelOne = $('.form-panel.two').height(),
    panelTwo = $('.form-panel.two')[0].scrollHeight;

  $('.form-panel.two').not('.form-panel.two.active').on('click', function(e) {
    e.preventDefault();

    $('.form-toggle').addClass('visible');
    $('.form-panel.one').addClass('hidden');
    $('.form-panel.two').addClass('active');
    $('.form').animate({
      'height': panelTwo
    }, 200);
  });

  $('.form-toggle').on('click', function(e) {
    e.preventDefault();
    $(this).removeClass('visible');
    $('.form-panel.one').removeClass('hidden');
    $('.form-panel.two').removeClass('active');
    $('.form').animate({
      'height': panelOne
    }, 200);
  });
});
    </script>
</html>
