<!DOCTYPE html>
<html lang="en">
@include('header')
<style>
  body::-webkit-scrollbar {
  width: 12px;               /* width of the entire scrollbar */
}

body::-webkit-scrollbar-track {
  background: orange;        /* color of the tracking area */
}

body::-webkit-scrollbar-thumb {
  background-color: blue;    /* color of the scroll thumb */
  border-radius: 20px;       /* roundness of the scroll thumb */
  border: 3px solid orange;  /* creates padding around scroll thumb */
}
p{
  text-align: justify;
}
body::-webkit-scrollbar {
  width: 12px;               /* width of the entire scrollbar */
}
body::-webkit-scrollbar-track {
  background: orange;        /* color of the tracking area */
}
body::-webkit-scrollbar-thumb {
  background-color: blue;    /* color of the scroll thumb */
  border-radius: 20px;       /* roundness of the scroll thumb */
  border: 3px solid orange;  /* creates padding around scroll thumb */
}
</style>
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
 
  <!-- =====================Our Services============================ -->
  <section id="carouselsection" class="ourServices">
    <div id="ourservices">  <h1>Our SERVICES</h1>  </div>
   
 
    <div class="container-fluid" style="padding: 70px 0px;">
      <div class="wrapper ">
        <div class="carousel owl-carousel" style="display: block;">
          <div class="card card-1">
            <img src="./images/webicon.svg" alt="" class="webicon serviveiconanim1">
            <h1>01</h1>
            <hr class="line">
            <div class="cardimg">
              <img src="./images/web.svg" alt="" class="cardimage">
            </div>
            <h2>WEB DEVELOPMENT</h2>
            <hr class="line">
            <p class="servicesdetail">
              Our team creates web solutions including websites & web applications.
            </p>
            <div class="webicon1">
              <img src="./images/webicon1.svg" alt="" class="serviveiconanim2">
            </div>
            <div class="overlay overlay1">
              <img src="images/webiconhover1.svg" alt="" class="webicon serviveiconanim1">
              <h1>01</h1>
              <hr class="line">
              <div class="cardimg">
                <img src="./images/webdevelophover.svg" alt="">
              </div>
              <h2>WEB DEVELOPMENT</h2>
              <hr class="line">
              <p class="servicesdetail">
                Our team creates web solutions including websites & web applications.
              </p>
              <div class="webicon1">
                <img src="./images/webiconhover.svg" alt="" class="serviveiconanim2">
              </div>
            </div>
          </div>
          <div class="card card2">
            <img src="./images/webicon1.svg" alt="" class="webicon serviveiconanim1">
            <h1>02</h1>
            <hr class="line">
            <div class="cardimg">
              <img src="./images/uiuxservice.svg" alt="">
            </div>
            <h2>UI/UX</h2>
            <hr class="line">
            <p class="servicesdetail">
              Without UI/UX an
              application is like a suit
              without a man. We create
              visually appealing, digital
              interfaces that attract
              and retain users.
            </p>
            <div class="webicon1">
              <img src="./images/uiuxservice2.svg" alt="" class="serviveiconanim2">
            </div>
            <div class="overlay overlay2">
              <img src="./images/webiconhover.svg" alt="" class="webicon serviveiconanim1">
              <h1>02</h1>
              <hr class="line">
              <div class="cardimg">
                <img src="./images/uiuxhover.png" alt="">
              </div>
              <h2>UI/UX</h2>
              <hr class="line">
              <p class="servicesdetail">
                Without UI/UX an
                application is like a suit
                without a man. We create
                visually appealing, digital
                interfaces that attract
                and retain users.
              </p>
              <div class="webicon1">
                <img src="./images/uiuxhovericon2.svg" alt="" class="serviveiconanim2">
              </div>
            </div>
          </div>
          <div class="card card3">
            <img src="./images/uiuxservice2.svg" alt="" class="webicon serviveiconanim1">
            <h1>03</h1>
            <hr class="line">
            <div class="cardimg">
              <img src="./images/appdevicon.svg" alt="">
            </div>
            <h2>APP DEVELOPMENT</h2>
            <hr class="line">
            <p class="servicesdetail">
              We offer a full cycle of
              Android and iOS mobile
              application design, integration,
              and management services.
            </p>
            <div class="webicon1">
              <img src="./images/webicon.svg" alt="" class="serviveiconanim2">
            </div>
            <div class="overlay overlay3">
              <img src="./images/uiuxhovericon2.svg" alt="" class="webicon serviveiconanim1">
              <h1>03</h1>
              <hr class="line">
              <div class="cardimg">
                <img src="./images/hoverappdev.svg" alt="">
              </div>
              <h2>APP DEVELOPMENT</h2>
              <hr class="line">
              <p class="servicesdetail">
                We offer a full cycle of
                Android and iOS mobile
                application design, integration,
                and management services.
              </p>
              <div class="webicon1">
                <img src="./images/webiconhover1.svg" alt="" class="serviveiconanim2">
              </div>
            </div>
          </div>

          <div class="card card4">
            <img src="./images/webicon.svg" alt="" class="webicon serviveiconanim1">
            <h1>04</h1>
            <hr class="line">
            <div class="cardimg">
              <img src="./images/seoicon.svg" alt="">
            </div>
            <h2>SEO</h2>
            <hr class="line">
            <p class="servicesdetail">
              We understand different
              elements and their working
              in Search Engine Optimization.
              Hire us and turn the traffic
              into customers.
            </p>
            <div class="webicon1">
              <img src="./images/webicon1.svg" alt="" class="serviveiconanim2">
            </div>
            <div class="overlay overlay4">
              <img src="./images/webiconhover1.svg" alt="" class="webicon serviveiconanim1">
              <h1>04</h1>
              <hr class="line">
              <div class="cardimg">
                <img src="./images/seohovericon.svg" alt="">
              </div>
              <h2>SEO</h2>
              <hr class="line">
              <p class="servicesdetail">
                We understand different
                elements and their working
                in Search Engine Optimization.
                Hire us and turn the traffic
                into customers.
              </p>
              <div class="webicon1">
                <img src="./images/webiconhover.svg" alt="" class="serviveiconanim2">
              </div>
            </div>
          </div>

          <div class="card card5">
            <img src="./images/webicon1.svg" alt="" class="webicon serviveiconanim1">
            <h1>05</h1>
            <hr class="line">
            <div class="cardimg">
              <img src="./images/marketicon.svg" alt="">
            </div>
            <h2>MARKETING</h2>
            <hr class="line">
            <p class="servicesdetail">
              Want to sell a product? Our
              Experts provide PPC, SMM, SMO
              services ensuring that we win
              the trust of Your Customers.
            </p>
            <div class="webicon1">
              <img src="./images/uiuxservice2.svg" alt="" class="serviveiconanim2">
            </div>
            <div class="overlay overlay5">
              <img src="./images/webiconhover.svg" alt="" class="webicon serviveiconanim1">
              <h1>05</h1>
              <hr class="line">
              <div class="cardimg">
                <img src="./images/markethovericon.svg" alt="">
              </div>
              <h2>MARKETING</h2>
              <hr class="line">
              <p class="servicesdetail">
                Want to sell a product? Our
                Experts provide PPC, SMM, SMO
                services ensuring that we win
                the trust of Your Customers.
              </p>
              <div class="webicon1">
                <img src="./images/uiuxhovericon2.svg" alt="" class="serviveiconanim2">
              </div>
            </div>
          </div>

          <div class="card card6">
            <img src="./images/uiuxservice2.svg" alt="" class="webicon serviveiconanim1">
            <h1>06</h1>
            <hr class="line">
            <div class="cardimg">
              <img src="./images/otherserviceicon.svg" alt="">
            </div>
            <h2>OTHER SERVICES</h2>
            <hr class="line">
            <p class="servicesdetail">
              We can deliver a broad
              range of quality products
              and solutions to meet your
              operational needs.
            </p>
            <div class="webicon1">
              <img src="./images/webicon.svg" alt="" class="serviveiconanim2">
            </div>
            <div class="overlay overlay6">
              <img src="./images/uiuxhovericon2.svg" alt="" class="webicon serviveiconanim1">
              <h1>06</h1>
              <hr class="line">
              <div class="cardimg">
                <img src="./images/hoverothericon.svg" alt="">
              </div>
              <h2>OTHER SERVICES</h2>
              <hr class="line">
              <p class="servicesdetail">
                We can deliver a broad
                range of quality products
                and solutions to meet your
                operational needs.
              </p>
              <div class="webicon1">
                <img src="./images/webiconhover1.svg" alt="" class="serviveiconanim2">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- =====================End Our Services============================ -->
  <!-- =====================Satisfied Clients============================ -->
  <section id="clients" >
    <div class="container-fluid" style="padding: 0;" id="clientcontainer">
      <div class="clientsheading">
        <h1 class="pills">Satisfied Clients</h1>
      </div>

      <div class="row" style="width: 100%;">
        <div class="col-md-12">
          <div class="portfolios">
            <div class="inner-portfolios">
              <div class="clients-carousel owl-carousel custome_slide" id="slide-portfolio">
                <div class="test_img">
                  <div class="main-reviewimage">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="clientcontent">
                    <h5>Fight Alerts</h5>
                    <img src="{{asset('images/reviewstar.png')}}" alt="" class="clientcontentimg">
                    <hr class="line1">
                    <p>OBS Technologia team has an extremely well-rounded skill set across IOS and Android. The team was able to successfully bring my designs to life within IOS and Android by turning my wireframes and requirements into apps successfully posted on the app store. </p>
                  </div>
                </div>
                <div class="test_img">
                  <div class="main-reviewimage">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="clientcontent">
                    <h5>VO Rides</h5>
                    <img src="{{asset('images/reviewstar.png')}}" alt="" class="clientcontentimg">
                    <hr class="line1">
                    <p>Based on my working experience with OBS Technologia team, I will always recommend this team of talented developers. They are Very smart, and assist well in the brainstorming process.</p>
                  </div>
                </div>

                <div class="test_img">
                  <div class="main-reviewimage">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="clientcontent">
                    <h5>Party</h5>
                    <img src="{{asset('images/reviewstar.png')}}" alt="" class="clientcontentimg">
                    <hr class="line1">
                    <p>We have been working with OBS Technologia for the third time. The team consists of very good and competent individuals. The work is carried out quickly and accurately on time. Very satisfied with this team’s work and we hope to work more in future. We recommend OBS Technologia. Thank you very much!</p>
                  </div>
                </div>

                <div class="test_img">
                  <div class="main-reviewimage">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="clientcontent">
                    <h5>Waraka</h5>
                    <img src="{{asset('images/reviewstar.png')}}" alt="" class="clientcontentimg">
                    <hr class="line1">
                    <p>Osama and company did a great job. They were able to build the app according to my specifications. We didn't complete the project on time, however, they communicated with me ahead of time so that I knew that I could expect delays but other than that, job well done.</p>
                  </div>
                </div>

                <div class="test_img">
                  <div class="main-reviewimage">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="clientcontent">
                    <h5>NFL Fantasy Website</h5>
                    <img src="{{asset('images/reviewstar.png')}}" alt="" class="clientcontentimg">
                    <hr class="line1">
                    <p>Shiraz always get the job done! He along with his team worked on this project diligently and delivered a great product as he always does. He's a very good hire and a smart young man. He and his team work together to achieve the goals. The end result is definitely amazing.</p>
                  </div>
                </div>

                <div class="test_img">
                  <div class="main-reviewimage">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="clientcontent">
                    <h5>Flash Math</h5>
                    <img src="{{asset('images/reviewstar.png')}}" alt="" class="clientcontentimg">
                    <hr class="line1">
                    <p>Team OBS Technologia is an exceptional talent. They know what they are doing and are very responsive. They were able to build the two apps that I needed for iOS and Android. I will most definitely be using them again! Thank you Team OBS Technologia!</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- =====================End Satisfied Clients============================ -->
  <div id="portfolio">
    <div class="container-fluid" style="padding: 0;">
      <div class="clientsheading clientsheadingportfoliopill clientsheadingportfolio">
        <h1 class="portfoliopill">Our Portfolio</h1>
      </div>
       <section id="portfolio">
        <!-- <div class="container-fluid allprojects" id="mobappprojects">
          <div class="row portfolioimages">
                @foreach(@$projects as $project)
                    @php
                        $image3='';
                        $image4='';
                        $image5='';
                        $image6='';
                        $title='';
                        $color='';
                        if($project->proimg3)
                            $image3 = asset($project->proimg3);
                        if($project->proimg4)
                            $image4 = asset($project->proimg4);
                        if($project->proimg5)
                            $image5 = asset($project->proimg5);
                        if($project->proimg6)
                            $image6 = asset($project->proimg6);
                        if($project->title)
                            $title = $project->title;
                        if($project->color)
                            $color = $project->color;
                        if($project->content)
                            $content = $project->content;
                    @endphp
                    
                    @if($project->cat_id == '3' || $project->cat_id == '5')
                    <div class="col-sm-4" id="curtaindiv" onclick="showDiv('{{ $image3 }}','{{ $image4 }}','{{ $image5 }}','{{ $image6 }}', '{{ $title }}','{{ $color }}','{{ $content }}')">
                      <img src="{{ asset($project->proimg1) }}" class="firstimage" style="width:100%" loading="lazy">
                      <div class="portfoliooverlay1 portfoliooverlay2">
                        <div class="portfoliocontent1">
                          <h2>{{$project->title}}</h2>
        
                          <button class="btn portfoliocontent1btnprojects" onclick="showDiv('{{ $image3 }}','{{ $image4 }}','{{ $image5 }}','{{ $image6 }}', '{{ $title }}','{{ $color }}','{{ $content }}')">View Project</button>
                        </div>
                      </div>
                    </div>
                    @else
                    <div class="col-sm-4" id="curtaindiv" onclick="showDiv('{{ $image3 }}', '{{ $image4 }}', '{{ $image5 }}', '{{ $image6 }}', '{{ $title }}', '{{ $color }}', '{{ $content }}')">
                  <img src="{{ asset($project->proimg1) }}" class="firstimage" style="width:100%" loading="lazy">
                  <div class="portfoliooverlay1 portfoliooverlay2">
                    <div class="portfoliocontent1">
                      <img src="{{ asset($project->proimg2) }}">
    
                      <button class="btn portfoliocontent1btnprojects" onclick="showDiv('{{ $image3 }}','{{ $image4 }}','{{ $image5 }}','{{ $image6 }}', '{{ $title }}','{{ $color }}','{{ $content }}')">View Project</button>
                    </div>
                  </div>
                </div>
                    @endif
                    
                @endforeach
          
          </div>
        </div> -->
        <div class="container-fluid px-4">
        <div class="row gx-5 " style="background:white;">
          @foreach(@$projects as $project)
            <!-- <div class="col-sm-3 mt-2 mb-2">
            <div class="p-3 border bg-light">Custom column padding</div>

            </div> -->
            <div class="col-sm-4 mt-2 mb-2" id="curtaindiv" style="background:white;" >
              <img src="{{ asset($project->proimg1) }}" class="firstimage" style="width:100%" loading="lazy">
              <div class="portfoliooverlay1 portfoliooverlay2">
                <div class="portfoliocontent1">
                  <h2>{{$project->title}}</h2>
                  <button class="btn portfoliocontent1btnprojects" onclick="showDiv('{{ $image3 }}','{{ $image4 }}','{{ $image5 }}','{{ $image6 }}', '{{ $title }}','{{ $color }}','{{ $content }}')">View Project</button>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      </section> 
      
      
      
      
      <!-- =====================End Satisfied Clients============================ -->
      <!-- =====================Portfolio Projects============================ -->
      <section id="portfolioproects" class="curtain">
        <div id="curtainleft" style="z-index: 9999;" class="in">
        <div class="preloaderprojects"></div>
          <div class="refgridhl3">
            <div class="reflineh"></div>
            <div class="reflinev"></div>
            <div class="refbild refbild1">
              <img src="" class="refbildbg" id='payfran1'>
            </div>
            <div class="refbild refbild2">
              <img src="" class="refbildbg" id='payfran2'>
            </div>
            <div class="refbild refbild3">
              <img src="" class="refbildbg" id='payfran3'>
            </div>
          </div>
        </div>

        <div id="curtainright" style="z-index: 9999;" class="in">
          <button onclick="hideDiv()" class="crossbtn"><i class="fas fa-times"></i></button>
          <div class="responsiivecontentdiv">
            <div class="responsiivecontentdivimage">
              <img src="" class="sidelogos" id="payfran4">
            </div>
            <div class="projectcontent">
              <h3 id="title"></h3>
              <p id="content"></p>
            </div>
            <div class="servicescontent">
              <h3 id="iconserviceheading">OUR SERVICES</h3>
              <ul class="servicesinnercontent">
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice1"></i></span><span class="sercontentinnser">Mobile app development</span>
                </li>
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice2"></i></span><span class="sercontentinnser">Web development</span>
                </li>
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice3"></i></span><span class="sercontentinnser">Graphic Designing</span>
                </li>
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice4"></i></span><span class="sercontentinnser">Marketing</span>
                </li>
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice5"></i></span><span class="sercontentinnser">Search Engine optimization</span>
                </li>
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice6"></i></span><span class="sercontentinnser">Other services</span>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </section>


      <section id="portfolioproects" class="curtain">
        <div id="curtainleftfortwoimg" style="z-index: 9999;" class="in">
        <div class="preloaderprojects"></div>
          <div class="refgridhl3fortwo">
            <div class="reflineh"></div>
            <div class="refbild refbild2fortwo">
              <img src="" class="refbildbg" id='payfran2fortwo'>
            </div>
            <div class="refbild refbild3fortwo">
              <img src="" class="refbildbg" id='payfran3fortwo'>
            </div>
          </div>
        </div>
        <div id="curtainright" style="z-index: 9999;" class="in">
          <button onclick="hideDiv()" class="crossbtn"><i class="fas fa-times"></i></button>
          <div class="responsiivecontentdiv">
            <div class="responsiivecontentdivimage">
              <img src="" class="sidelogos" id="payfran4">
            </div>
            <div class="projectcontent">
              <h3>PAYFRAN</h3>
              <p id="content"></p>
            </div>
            <div class="servicescontent">
              <h3 id="iconserviceheading">OUR SERVICES</h3>
              <ul class="servicesinnercontent">
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice1"></i></span><span class="sercontentinnser">Mobile app development</span>
                </li>
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice2"></i></span><span class="sercontentinnser">Web development</span>
                </li>
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice3"></i></span><span class="sercontentinnser">Graphic Designing</span>
                </li>
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice4"></i></span><span class="sercontentinnser">Marketing</span>
                </li>
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice5"></i></span><span class="sercontentinnser">Search Engine optimization</span>
                </li>
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice6"></i></span><span class="sercontentinnser">Other services</span>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </section>


      <section id="portfolioproects" class="curtain">
        <div id="curtainleftforoneimg" style="z-index: 9999;" class="in">
        <div class="preloaderprojects"></div>
          <div class="refgridhl3">
            <div class="refbild refbildfor1">
              <img src="" class="refbildbg" id='payfran2forone' style="width:100%" loading="lazy">
            </div>
          </div>
        </div>

        <div id="curtainright" style="z-index: 9999;" class="in">
          <button onclick="hideDiv()" class="crossbtn"><i class="fas fa-times"></i></button>
          <div class="responsiivecontentdiv">
            <div class="responsiivecontentdivimage">
              <img src="" class="sidelogos" id="payfran4">
            </div>
            <div class="projectcontent">
              <h3>PAYFRAN</h3>
              <p id="content"></p>
            </div>
            <div class="servicescontent">
              <h3 id="iconserviceheading">OUR SERVICES</h3>
              <ul class="servicesinnercontent">
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice1"></i></span><span class="sercontentinnser">Mobile app development</span>
                </li>
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice2"></i></span><span class="sercontentinnser">Web development</span>
                </li>
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice3"></i></span><span class="sercontentinnser">Graphic Designing</span>
                </li>
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice4"></i></span><span class="sercontentinnser">Marketing</span>
                </li>
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice5"></i></span><span class="sercontentinnser">Search Engine optimization</span>
                </li>
                <li>
                  <span><i class="fa fa-check-circle" aria-hidden="true" id="iconservice6"></i></span><span class="sercontentinnser">Other services</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- =====================Portfolio Projects============================ -->
    </div>
</div>
 
  <!-- =====================End Satisfied Clients============================ -->

  <!-- =====================OUR TEAM============================ -->
  <section id="ourteam">
    <div class="container-fluid" style="padding: 0;" id="teamcontainer">
      <!-- <h1 class="clientsheading"><span class="satisfed">Our</span><span class="client">TEAM</span></h1> -->
      <div class="clientsheading">
        <h1 class="pills">Our TEAM</h1>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row ">
        <div class="carouselmember owl-carousel px-4" style="display: block;">
          @foreach(@$team as $teamember)
          <div class="members">
            <img src="{{asset($teamember->picture)}}" alt="" style="width:100%" loading="lazy">
            <a href="{{asset($teamember->linkedin)}}">
              <div class="semicircle"></div>
            </a>
            <div class="membercount">
              <p>
                <!-- @if($teamember->emp_no < 10) 0{{$teamember->emp_no}} @else {{$teamember->emp_no}} @endif -->
                {{ sprintf("%02d", $teamember->emp_no) }}
              </p>
                  <h5 class="devfullname">{{$teamember->first_name}} <span class="devname">{{$teamember->last_name}}</span></h5>
                  <hr class="line2">
                  <h5><span class="devtitle">{{$teamember->designation}}</h5>
            </div>

          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="container-fluid ourteamborder" style="padding: 0;">
    </div>
  </section>
  
  <!-- =====================END OUR TEAM============================ -->

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