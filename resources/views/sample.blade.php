<!DOCTYPE html>
<html lang="en">
@include('header')
<body id="mainbody">
<div class="scroller">
  @include('navbar')

  <!-- =======================Landing page==================== -->
<!-- naavbar-san -->
  <section id="landingpage">
    <nav class="navbar navbar-expand-xs">
      <a class="navbar-brand" href="#"><img src='{{asset("images/logo.png")}}'></a>
    </nav>
    <div class="container-fluid landingpage" style="padding-top: 0%;">
      <div class="row">
        <div class="col-md-6 mainpageslinks">
          <ul class="navlinks">
            <li><a href="#landingpage" class="links"><span class="innerlinks"><span class="firstletter">A</span><span class="restletters">GENCY</span></span></a>
              <div class="dotstart"></div>
            </li>
            <li><a href="#portfolio" class="links"><span class="innerlinks"><span class="firstletter">P</span><span class="restletters">ORTFOLIO</span></span></a>
              <div class="dotstart"></div>
            </li>
            <li><a href="#ourservices" class="links"><span class="innerlinks"><span class="firstletter">S</span><span class="restletters">ERVICES</span></span></a>
              <div class="dotstart"></div>
            </li>
            <li><a href="#contactform" class="links"><span class="innerlinks"><span class="firstletter">C</span><span class="restletters">ONTACT</span></span></a>
              <div class="dotstart"></div>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
           <div id="anim"></div>
          <!--<div class=""><img src='{{asset("images/mainanim.png")}}' class="mainanimimg" /></div>-->
        </div>
      </div>
    <!-- </div> -->
    <div class="home common">
      <div class="shape">
        <img src="{{asset('images/webicon1.svg')}}" alt="" class="shape1">
        <img src="{{asset('images/webicon1.svg')}}" alt="" class="shape2">
        <img src="{{asset('images/webicon1.svg')}}" alt="" class="shape3">
        <img src="{{asset('images/webicon.svg')}}" alt="" class="shape4">
        <img src="{{asset('images/webicon1.svg')}}" alt="" class="shape5">
      </div>
    </div>
    <div id="popup_box">    <!-- OUR PopupBox DIV-->
    <p>Hi,<br>
        Welcome to OBS technologia.
        See something you like? Let's have a chat about it on Whatsapp <br>0304 4366760<br><br>
        we also look at emails on info@obstechnologia.com, or you could also leave your email address or phone number, and we will get back to you on that. Thanks!
    </p>
    <a id="popupBoxClose"><i class="fas fa-times"></i></a>
    </div>
  </section>
  <!-- =======================/Landing page end==================== -->
  <!-- =====================Career============================ -->


    @section('portfolio')
    @show
  <!-- =====================Contact Form============================ -->
  @include('contactform')
  <!-- =====================END Contact form============================ -->
  @include('mainfooter')
  @include('footer')
  </div>
  <script type="text/javascript">
    function changeBG(img) {
      document.getElementById("overlaybg").style.backgroundImage = "url(http://127.0.0.1:8000/images/item1.png)";
    }
    function showDiv(img1, img2, img3, img4, title, color, content) {
      var counter = 0;
      if (img1) {
        counter++;
      }
      if (img2) {
        counter++;
      }
      if (img3) {
        counter++;
      }
      if (img4) {
        counter++;
      }
      if (title) {
        counter++;
      }
      if (counter == 5) {
        $('.preloaderprojects').fadeIn();
        $('.preloaderprojects').fadeOut(2000);
        document.getElementById('curtainleft').style.transform = 'translate(0)';
        document.getElementById('curtainright').style.transform = 'translate(0)';
        document.getElementById('payfran1').src = img1;
        document.getElementById('payfran2').src = img2;
        document.getElementById('payfran3').src = img3;
        document.getElementById('payfran4').src = img4;
        document.getElementById('title').innerHTML = title;
        document.getElementById('title').style.color = color;
        document.getElementById('content').innerHTML = content;
        document.getElementById('iconserviceheading').style.color = color;
        document.getElementById('iconservice1').style.color = color;
        document.getElementById('iconservice2').style.color = color;
        document.getElementById('iconservice3').style.color = color;
        document.getElementById('iconservice4').style.color = color;
        document.getElementById('iconservice5').style.color = color;
        document.getElementById('iconservice6').style.color = color;
      } else if (counter == 4) {
        $('.preloaderprojects').fadeIn();
        $('.preloaderprojects').fadeOut(2000);
        document.getElementById('curtainleftfortwoimg').style.transform = 'translate(0)';
        document.getElementById('curtainright').style.transform = 'translate(0)';
        document.getElementById('payfran2fortwo').src = img1;
        document.getElementById('payfran3fortwo').src = img2;
        document.getElementById('payfran4').src = img3;
        document.getElementById('title').innerHTML = title;
        document.getElementById('title').style.color = color;
        document.getElementById('content').innerHTML = content;
        document.getElementById('iconserviceheading').style.color = color;
        document.getElementById('iconservice1').style.color = color;
        document.getElementById('iconservice2').style.color = color;
        document.getElementById('iconservice3').style.color = color;
        document.getElementById('iconservice4').style.color = color;
        document.getElementById('iconservice5').style.color = color;
        document.getElementById('iconservice6').style.color = color;
      } else if (counter == 3) {
         $('.preloaderprojects').fadeIn();
        $('.preloaderprojects').fadeOut(2000);
        document.getElementById('curtainleftforoneimg').style.transform = 'translate(0)';
        document.getElementById('curtainright').style.transform = 'translate(0)';
        document.getElementById('payfran2forone').src = img1;
        document.getElementById('payfran4').src = img2;
        document.getElementById('title').innerHTML = title;
        document.getElementById('title').style.color = color;
        document.getElementById('content').innerHTML = content;
        document.getElementById('iconserviceheading').style.color = color;
        document.getElementById('iconservice1').style.color = color;
        document.getElementById('iconservice2').style.color = color;
        document.getElementById('iconservice3').style.color = color;
        document.getElementById('iconservice4').style.color = color;
        document.getElementById('iconservice5').style.color = color;
        document.getElementById('iconservice6').style.color = color;
      }
    }
    function hideDiv() {
      document.getElementById('curtainleft').style.transform = 'translate(-100%)';
      document.getElementById('curtainleftfortwoimg').style.transform = 'translate(-100%)';
      document.getElementById('curtainleftforoneimg').style.transform = 'translate(-100%)';
      document.getElementById('curtainright').style.transform = 'translate(100%)';
    }
  </script>
</body>
</html>
