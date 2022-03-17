<!DOCTYPE html>
<html lang="en">
@include('header')

<body>
 
  <!-- =====================End Satisfied Clients============================ -->
  <section id="portfolio">
     <div class="container-fluid allprojects" id="mobappprojects" >
      <div class="row portfolioimages">
      @if(@$projects)
        @foreach($projects as $project)
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
         @endphp
         @if($project->cat_id == '3' || $project->cat_id == '5')
         <div class="col-sm-4" id="curtaindiv" onclick="showDiv('{{ $image3 }}','{{ $image4 }}','{{ $image5 }}','{{ $image6 }}', '{{ $title }}','{{ $color }}')">
        <img src="{{ asset($project->proimg1) }}" class="firstimage" >
           <div class="portfoliooverlay1 portfoliooverlay2"> 
             <div class="portfoliocontent1">
            <h2>{{$project->title}}</h2>
           
            <button class="btn portfoliocontent1btnprojects" onclick="showDiv('{{ $image3 }}','{{ $image4 }}','{{ $image5 }}','{{ $image6 }}', '{{ $title }}','{{ $color }}')">View Project</button>
            </div>
           </div>
        </div>

        @else
        <div class="col-sm-4" id="curtaindiv" onclick="showDiv('{{ $image3 }}','{{ $image4 }}','{{ $image5 }}','{{ $image6 }}', '{{ $title }}','{{ $color }}')">
        <img src="{{ asset($project->proimg1) }}" class="firstimage">
           <div class="portfoliooverlay1 portfoliooverlay2"> 
             <div class="portfoliocontent1">
            <img src="{{ asset($project->proimg2) }}">
           
            <button class="btn portfoliocontent1btnprojects" onclick="showDiv('{{ $image3 }}','{{ $image4 }}','{{ $image5 }}','{{ $image6 }}', '{{ $title }}','{{ $color }}')">View Project</button>
            </div>
           </div>
        </div>
        @endif
        @endforeach
      @endif
      </div>
    </div>
  </section>
    <!-- =====================End Satisfied Clients============================ -->
     <!-- =====================Portfolio Projects============================ -->
    <section id="portfolioproects" class="curtain">
                <div id="curtainleft" style="z-index: 9999;" class="in">
                    <!--<div class="preloader"></div>-->
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
                       <p></p>           
               </div>
               <div class="servicescontent">
                 <h3>OUR SERVICES</h3>
                   <ul>
                       <li>
                           <span><i class="fa fa-check-circle" aria-hidden="true"></i></span><span>Business stationery</span>
                       </li>
                   </ul>
               </div>
               </div>
               </div> 
              
    </section>


    <section id="portfolioproects" class="curtain">
      <div id="curtainleftfortwoimg" style="z-index: 9999;" class="in">
          <!--<div class="preloader"></div>-->
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
         <img src="" class="sidelogos" id="payfran4" >
        </div>
         <div class="projectcontent">
             <h3>PAYFRAN</h3>
             <p>Queensland - where the rainforest meets the Great Barrier Reef! Tourism & Events Queensland offer all the options and activities necessary for an unforgettable vacation in Australia's tropical north. Our design work for this customer includes variety of advertising measures in German-speaking countries.</p>           
     </div>
     <div class="servicescontent">
       <h3>OUR SERVICES</h3>
         <ul>
             <li>
                 <span><i class="fa fa-check-circle" aria-hidden="true"></i></span><span>Business stationery</span>
             </li>
         </ul>
     </div>
     </div>
     </div> 
     
</section>


<section id="portfolioproects" class="curtain">
  <div id="curtainleftforoneimg" style="z-index: 9999;" class="in">
      <!--<div class="preloader"></div>-->
  <div class="refgridhl3">
    <div class="refbild refbildfor1">
      <img src="" class="refbildbg" id='payfran2forone'>     
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
         <p>Queensland - where the rainforest meets the Great Barrier Reef! Tourism & Events Queensland offer all the options and activities necessary for an unforgettable vacation in Australia's tropical north. Our design work for this customer includes variety of advertising measures in German-speaking countries.</p>           
 </div>
 <div class="servicescontent">
   <h3>OUR SERVICES</h3>
     <ul>
         <li>
             <span><i class="fa fa-check-circle" aria-hidden="true"></i></span><span>Business stationery</span>
         </li>
     </ul>
 </div>
 </div>
 </div> 
</section>
     <!-- =====================Portfolio Projects============================ -->
      @include('footer')
<script>
    function showDiv(img1,img2,img3,img4,title,color){
        // $('curtainleft').on('load',function(){
        //      $('.preloader').fadeOut();
        // })
    var counter = 0;
    if(img1){
      counter++;
    }
    if(img2){
      counter++;
    }
    if(img3){
      counter++;
    }
    if(img4){
      counter++;
    }
    if(title){
      counter++;
    }
    if(counter == 5){
        document.getElementById('curtainleft').style.transform = 'translate(0)';
        document.getElementById('curtainright').style.transform = 'translate(0)';
        document.getElementById('payfran1').src=img1;
        document.getElementById('payfran2').src=img2;
        document.getElementById('payfran3').src=img3;
        document.getElementById('payfran4').src=img4;
        document.getElementById('title').innerHTML = title;
        document.getElementById('title').style.color = color;
    }
    else if(counter == 4){
    //  document.getElementById('curtainleft').style.transform = 'translate(0)';
     document.getElementById('curtainleftfortwoimg').style.transform = 'translate(0)';
     document.getElementById('curtainright').style.transform = 'translate(0)';
     document.getElementById('payfran2fortwo').src=img1;
     document.getElementById('payfran3fortwo').src=img2;
     document.getElementById('payfran4').src=img3;
     document.getElementById('title').innerHTML = title;
     document.getElementById('title').style.color = color;
    }
    else if(counter == 3){
      document.getElementById('curtainleftforoneimg').style.transform = 'translate(0)';
      document.getElementById('curtainright').style.transform = 'translate(0)';
      document.getElementById('payfran2forone').src=img1;
      document.getElementById('payfran4').src=img2;
      document.getElementById('title').innerHTML = title;
      document.getElementById('title').style.color = color;
    }
    // else
    //  document.getElementById('curtainleftforoneimg').style.transform = 'translate(0)';
    //    document.getElementById('curtainright').style.transform = 'translate(0)';
    //    document.getElementById('payfran2forone').src=img2;
    //    document.getElementById('payfran4').src=img3;
  
  }
    

  function hideDiv(){
    document.getElementById('curtainleft').style.transform = 'translate(-100%)';
    document.getElementById('curtainleftfortwoimg').style.transform = 'translate(-100%)';
    document.getElementById('curtainleftforoneimg').style.transform = 'translate(-100%)';
    document.getElementById('curtainright').style.transform = 'translate(100%)';
  }
</script>
</body>

</html>