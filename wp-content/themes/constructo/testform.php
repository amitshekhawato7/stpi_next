
<?php
/*
Template Name: testform
*/
?>
<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Include the above in your HEAD tag -->
<style>
.mgtop{
	margin-top:100px !important;
}input[type="text"],
input[type="email"],
input[type="date"],
select.form-control {
    height: 50px;
    margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    background: #f8f8f8;
    border: 3px solid #ddd;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    line-height: 50px;
    color: #888;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    -o-transition: all .3s;
    -moz-transition: all .3s;
    -webkit-transition: all .3s;
    -ms-transition: all .3s;
    transition: all .3s;
}

input[type="file"] {
    height: 35px;
    margin: 0;
    padding: 0 20px;
    vertical-align: bottom;
    background: #f8f8f8;
    border: 3px solid #ddd;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    line-height: 30px;
    color: #888;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    -o-transition: all .3s;
    -moz-transition: all .3s;
    -webkit-transition: all .3s;
    -ms-transition: all .3s;
    transition: all .3s;
}

input[type=radio] {
    margin-top: 8px !important;
}

textarea,
textarea.form-control {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 30px;
}

input[type="text"]:focus,
input[type="password"]:focus,
textarea:focus,
textarea.form-control:focus {
    outline: 0;
    background: #fff;
    border: 3px solid #ccc;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
}

input[type="text"]:-moz-placeholder,
input[type="password"]:-moz-placeholder,
textarea:-moz-placeholder,
textarea.form-control:-moz-placeholder {
    color: #888;
}

input[type="text"]:-ms-input-placeholder,
input[type="password"]:-ms-input-placeholder,
textarea:-ms-input-placeholder,
textarea.form-control:-ms-input-placeholder {
    color: #888;
}

input[type="text"]::-webkit-input-placeholder,
input[type="password"]::-webkit-input-placeholder,
textarea::-webkit-input-placeholder,
textarea.form-control::-webkit-input-placeholder {
    color: #888;
}

button.btn {
    height: 50px;
    margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    background: #26A69A;
    ;
    border: 0;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    line-height: 50px;
    color: #fff;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    text-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    -o-transition: all .3s;
    -moz-transition: all .3s;
    -webkit-transition: all .3s;
    -ms-transition: all .3s;
    transition: all .3s;
}

button.btn:hover {
    opacity: 0.6;
    color: #fff;
}

button.btn:active {
    outline: 0;
    opacity: 0.6;
    color: #fff;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
}

button.btn:focus {
    outline: 0;
    opacity: 0.6;
    background: #26A69A;
    ;
    color: #fff;
}

button.btn:active:focus,
button.btn.active:focus {
    outline: 0;
    opacity: 0.6;
    background: #26A69A;
    ;
    color: #fff;
}


/*style.css**/

body {
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    color: #888;
    line-height: 30px;
    text-align: center;
}

strong {
    font-weight: 500;
}

a,
a:hover,
a:focus {
    color: #26A69A;
    ;
    text-decoration: none;
    -o-transition: all .3s;
    -moz-transition: all .3s;
    -webkit-transition: all .3s;
    -ms-transition: all .3s;
    transition: all .3s;
}

h1,
h2 {
    margin-top: 10px;
    font-size: 38px;
    font-weight: 100;
    color: #555;
    line-height: 50px;
}

h3 {
    font-size: 22px;
    font-weight: 300;
    color: #555;
    line-height: 30px;
}

::-moz-selection {
    background: #26A69A;
    ;
    color: #fff;
    text-shadow: none;
}

::selection {
    background: #26A69A;
    ;
    color: #fff;
    text-shadow: none;
}

.btn-link-1 {
    display: inline-block;
    height: 50px;
    margin: 0 5px;
    padding: 16px 20px 0 20px;
    background: #26A69A;
    font-size: 16px;
    font-weight: 300;
    line-height: 16px;
    color: #fff;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}

.btn-link-1:hover,
.btn-link-1:focus,
.btn-link-1:active {
    outline: 0;
    opacity: 0.6;
    color: #fff;
}

.btn-link-2 {
    display: inline-block;
    height: 50px;
    margin: 0 5px;
    padding: 15px 20px 0 20px;
    background: rgba(0, 0, 0, 0.3);
    border: 1px solid #fff;
    font-size: 16px;
    font-weight: 300;
    line-height: 16px;
    color: #fff;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}

.btn-link-2:hover,
.btn-link-2:focus,
.btn-link-2:active,
.btn-link-2:active:focus {
    outline: 0;
    opacity: 0.6;
    background: rgba(0, 0, 0, 0.3);
    color: #fff;
}


/***** Top content *****/

.form-box {
    padding-top: 40px;
    font-family: 'Roboto', sans-serif !important;
}

.form-top {
    overflow: hidden;
    padding: 0 25px 15px 25px;
    background: #26A69A;
    -moz-border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    border-radius: 4px 4px 0 0;
    text-align: left;
    color: #fff;
    transition: opacity .3s ease-in-out;
}

.form-top h3 {
    color: #fff;
}

.form-bottom {
    padding: 25px 25px 30px 25px;
    background: #eee;
    -moz-border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
    border-radius: 0 0 4px 4px;
    text-align: left;
    transition: all .4s ease-in-out;
}

.form-bottom:hover {
    -webkit-box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}

form .form-bottom button.btn {
    min-width: 105px;
}

form .form-bottom .input-error {
    border-color: #d03e3e;
    color: #d03e3e;
}

form.registration-form fieldset {
    display: none;
}
#header.header-scrolled {
    background: #fff;
    padding: 20px 0;
    height: 72px;
    transition: all 0.5s;
}
#header {
    padding: 30px 0;
    height: 92px;
    position: fixed;
    left: 0;
    top: 0;
    right: 0;
    transition: all 0.5s;
    z-index: 997;
    background-color: #fff;
    box-shadow: 5px 0px 15px #c3c3c3;
}
#header #logo h1 {
    font-size: 34px;
    margin: 0;
    padding: 0;
    line-height: 1;
    font-family: "Montserrat", sans-serif;
    font-weight: 700;
    letter-spacing: 3px;
}
#header #logo h1 a, #header #logo h1 a:hover {
    color: #000;
    padding-left: 10px;
    border-left: 4px solid grey;
}
#nav-menu-container {
    float: right;
    margin: 0;
}
.nav-menu > li {
    margin-left: 10px;
}
.nav-menu > li {
    float: left;
}
.nav-menu li {
    position: relative;
    white-space: nowrap;
}
.nav-menu, .nav-menu * {
    margin: 0;
    padding: 0;
    list-style: none;
}
.header-scrolled .nav-menu li:hover > a, .header-scrolled .nav-menu > .menu-active > a {
    color: #18d26e;
}
.header-scrolled .nav-menu a {
    color: black;
}
.nav-menu li:hover > a, .nav-menu > .menu-active > a {
    color: #18d26e;
}
.nav-menu a {
    padding: 0 8px 10px 8px;
    text-decoration: none;
    display: inline-block;
    color: #000;
    font-family: "Montserrat", sans-serif;
    font-weight: 700;
    font-size: 13px;
    text-transform: uppercase;
    outline: none;
}
#mobile-nav-toggle {
    display: inline;
}
#mobile-nav-toggle {
    position: fixed;
    right: 0;
    top: 0;
    z-index: 999;
    margin: 20px 20px 0 0;
    border: 0;
    background: none;
    font-size: 24px;
    display: none;
    transition: all 0.4s;
    outline: none;
    cursor: pointer;
}
#mobile-body-overly {
    width: 100%;
    height: 100%;
    z-index: 997;
    top: 0;
    left: 0;
    position: fixed;
    background: rgba(0, 0, 0, 0.7);
    display: none;
}
body.mobile-nav-active #mobile-nav {
    left: 0;
}
#mobile-nav {
    position: fixed;
    top: 0;
    padding-top: 18px;
    bottom: 0;
    z-index: 998;
    background: rgba(0, 0, 0, 0.8);
    left: -260px;
    width: 260px;
    overflow-y: auto;
    transition: 0.4s;
}
#mobile-nav ul {
    padding: 0;
    margin: 0;
    list-style: none;
}
#mobile-nav ul li {
    position: relative;
}
#mobile-nav ul li a {
    color: #fff;
    font-size: 13px;
    text-transform: uppercase;
    overflow: hidden;
    padding: 10px 22px 10px 15px;
    position: relative;
    text-decoration: none;
    width: 100%;
    display: block;
    outline: none;
    font-weight: 700;
    font-family: "Montserrat", sans-serif;
}
#mobile-nav ul .menu-has-children i.fa-chevron-up {
    color: #18d26e;
}
#mobile-nav ul .menu-has-children i {
    position: absolute;
    right: 0;
    z-index: 99;
    padding: 15px;
    cursor: pointer;
    color: #fff;
}
#mobile-nav ul .menu-item-active {
    color: #18d26e;
}
#mobile-nav ul li li {
    padding-left: 30px;
}

.menu-has-children ul
{display: none;}

.sf-arrows .sf-with-ul {
  padding-right: 30px;
}

.sf-arrows .sf-with-ul:after {
  content: "\f107";
  position: absolute;
  right: 15px;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  color:black;
}

.sf-arrows ul .sf-with-ul:after {
  content: "\f105";
}


.nav-menu li:hover > ul,
.nav-menu li.sfHover > ul {
  display: block;
}
.nav-menu ul {
    margin: 4px 0 0 0;
    padding: 10px;
    box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
    background: #fff;
}
.nav-menu ul {
    position: absolute;
    display: none;
    top: 100%;
    left: 0;
    z-index: 99;
}

.sf-arrows .sf-with-ul {
    padding-right: 30px;
}
.nav-menu li {
    position: relative;
    white-space: nowrap;
}


@media (max-width: 768px){
#nav-menu-container {
    display: none;
}

#mobile-nav-toggle {
    display: inline;
}
}
</style>
</head>

<body>
<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">HEADER</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="">Home</a></li>
          <li><a href="">About Us</a></li>
          <li><a href="">Login</a></li>
          <li><a href="">Register</a></li>
          
          <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
           <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <!-- <li><a href="">Contact</a></li> -->
        </ul>
      </nav><!-- #nav-menu-container -->

    </div>
  </header><!-- #header --><link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!-- Include the above in your HEAD tag -->

 <div style="height:40px;"></div>
    <div class="assessment-container container">
        <div class="row">
            <div class="col-md-6 form-box">
                <form role="form" class="registration-form" action="javascript:void(0);">
                    <fieldset>
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span>Lorem ipsum dolor sit amet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                </p>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-6">
                                    <input type="text" class="form-control" placeholder="Firstname" id="fname">
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
                                    <input type="text" class="form-control" placeholder="Lastname" id="lname">
                                </div>
                            </div>
                            <div class="form-group" style="margin-bottom:3px;">
                                <div class="row">
                                    <div class="form-group col-md-3 col-sm-3">
                                        <select class="form-control">
                                            <option>00</option>
                                            <option>00</option>
                                            <option>00</option>
                                            <option>00</option>
                                            <option>00</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-9 col-sm-9">
                                        <input type="text" class="form-control" placeholder="Contact Number" id="contact_number">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" placeholder="Email" class="form-email form-control" id="email" required>
                            </div>

                            <div class="form-group">
                                <select class="form-control">
                                    <option>Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            
                            <button type="button" class="btn btn-next">Next</button>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3><span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span> Lorem ipsum dolor sit amet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit
                                </p>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Location</option>
                                    <option>Location</option>
                                    <option>Location</option>
                                    <option>Location</option>
                                    <option>Locationa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control" id="pref_date">
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Preffered Time</option>
                                    <option>Location</option>
                                    <option>Location</option>
                                    <option>Location</option>
                                    <option>Location</option>
                                    <option>Locationa</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-previous">Previous</button>
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
	</body>
<script>
// Mobile Navigation
  if ($('#nav-menu-container').length) {
    var $mobile_nav = $('#nav-menu-container').clone().prop({
      id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
      'class': '',
      'id': ''
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
    $('body').append('<div id="mobile-body-overly"></div>');
    $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

    $(document).on('click', '.menu-has-children i', function(e) {
      $(this).next().toggleClass('menu-item-active');
      $(this).nextAll('ul').eq(0).slideToggle();
      $(this).toggleClass("fa-chevron-up fa-chevron-down");
    });

    $(document).on('click', '#mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
      $('#mobile-body-overly').toggle();
    });

    $(document).click(function(e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
      }
    });
  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  }

  // Smooth scroll for the menu and links with .scrollto classes
  $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if( ! $('#header').hasClass('header-fixed') ) {
            top_space = top_space - 20;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .menu-active').removeClass('menu-active');
          $(this).closest('li').addClass('menu-active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
        return false;
      }
    }
  });
</script>
<script>
$(document).ready(function () {
    $('.registration-form fieldset:first-child').fadeIn('slow');

    $('.registration-form input[type="text"]').on('focus', function () {
        $(this).removeClass('input-error');
    });

    // next step
    $('.registration-form .btn-next').on('click', function () {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;

        parent_fieldset.find('input[type="text"],input[type="email"]').each(function () {
            if ($(this).val() == "") {
                $(this).addClass('input-error');
                next_step = false;
            } else {
                $(this).removeClass('input-error');
            }
        });

        if (next_step) {
            parent_fieldset.fadeOut(400, function () {
                $(this).next().fadeIn();
            });
        }

    });

    // previous step
    $('.registration-form .btn-previous').on('click', function () {
        $(this).parents('fieldset').fadeOut(400, function () {
            $(this).prev().fadeIn();
        });
    });

    // submit
    $('.registration-form').on('submit', function (e) {

        $(this).find('input[type="text"],input[type="email"]').each(function () {
            if ($(this).val() == "") {
                e.preventDefault();
                $(this).addClass('input-error');
            } else {
                $(this).removeClass('input-error');
            }
        });

    });

   
});
</script>
</html>	
			