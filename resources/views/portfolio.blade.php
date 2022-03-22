@extends('sample')
@include('header')
@section('portfolio')

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




@endsection
