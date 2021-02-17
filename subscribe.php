<!-- ============================
  * subscribe page Template:
    - header
    - Sign Up Section
    - Payment Section
    - footer
  * Author: Tyler Adam Martinez
  * License: MIT
      =========================== -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe</title>

    <link rel="stylesheet" href="assets/css/subscribe.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- ======= Header ======= -->
    <?php include_once('header.php'); ?>

    <!-- ======= Sign Up Section ======= -->
 <section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Sign up</h2>
      </div>

        <script>
          function _(id) {return document.getElementById(id);}

          function submitForm() {
            _("send").disabled = true;
            _("status").innerHTML = "please wait ...";
            
            
            var formdata = new FormData();
            formdata.append("name", _("name").value );
            formdata.append("email", _("email").value );
            formdata.append("message", _("message").value );
            formdata.append("phone", _("phone").value );
            formdata.append("date", _("date").value );
            formdata.append("time", _("time").value );
            formdata.append("am-or-pm", ("am-or-pm").value);

            var ajax = new XMLHttpRequest();
            ajax.open( "POST", "forms/client_form.php");
            ajax.onreadystatechange = function() {
              if (ajax.readyState == 4 && ajax.status == 200) {
                if (ajax.responseText == "success") {
                  _("client_form").innerHTML = '<h2> Thanks for your submition'+_("name").value+'</h2>';
                } else {
                  _("status").innerHTML = ajax.responseText;
                  _("send").disabled = false;
                }
              }
            }
            ajax.send(formdata);
          }
        </script>


      <form onsubmit="submitForm(); return false;"  role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100" id="client_form">
        <div class="form-row">
          <div class="col-lg-4 col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="FirstName LastName" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="YourEmail@provider.com" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="(555)-555-5555" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group">
            <input type="date" name="date" class="form-control" id="date" placeholder="date">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group" id="time_div">
            <input type="time" class="form-control" name="time" id="time" placeholder="time">
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group">
          <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message"></textarea>
          <div class="validate"></div>
        </div>

        <div class="mb-3">
          <span id="status"></span>
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
        </div>

        <div class="text-center"><button type="submit" id="send" name="send">SEND</button></div>
      </form>

    </div>
  </section><!-- End Sign Up Section -->


      <!-- ======= Payment Section ======= -->
 <section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Sign up</h2>
      </div>

        <script>
          function _(id) {return document.getElementById(id);}

          function submitForm() {
            _("send").disabled = true;
            _("status").innerHTML = "please wait ...";
            
            
            var formdata = new FormData();
            formdata.append("name", _("name").value );
            formdata.append("email", _("email").value );
            formdata.append("message", _("message").value );
            formdata.append("phone", _("phone").value );
            formdata.append("date", _("date").value );
            formdata.append("time", _("time").value );
            formdata.append("am-or-pm", ("am-or-pm").value);

            var ajax = new XMLHttpRequest();
            ajax.open( "POST", "forms/client_form.php");
            ajax.onreadystatechange = function() {
              if (ajax.readyState == 4 && ajax.status == 200) {
                if (ajax.responseText == "success") {
                  _("client_form").innerHTML = '<h2> Thanks for your submition'+_("name").value+'</h2>';
                } else {
                  _("status").innerHTML = ajax.responseText;
                  _("send").disabled = false;
                }
              }
            }
            ajax.send(formdata);
          }
        </script>


      <form onsubmit="submitForm(); return false;"  role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100" id="client_form">
        <div class="form-row">
          <div class="col-lg-4 col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="FirstName LastName" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="YourEmail@provider.com" data-rule="email" data-msg="Please enter a valid email">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="(555)-555-5555" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group">
            <input type="date" name="date" class="form-control" id="date" placeholder="date">
            <div class="validate"></div>
          </div>
          <div class="col-lg-4 col-md-6 form-group" id="time_div">
            <input type="time" class="form-control" name="time" id="time" placeholder="time">
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group">
          <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message"></textarea>
          <div class="validate"></div>
        </div>

        <div class="mb-3">
          <span id="status"></span>
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
        </div>

        <div class="text-center"><button type="submit" id="send" name="send">SEND</button></div>
      </form>

    </div>
  </section><!-- End Payment Section -->

   <!-- ======= footer ======= -->
  <?php include_once('footer.php'); ?>

</body>
</html> 