   <!-- ===================== FOOTER============================ -->
   <section id="footer">
   <div class="container-fluid " style="padding: 0;">

<span class="contactheadingbg">
    <!-- <h1 class="clientsheading"><span><span class="contacthead">Contact</span> <span class="client">US</span></span></h1> -->
    <div class="clientsheading clientsheadingcontact clientsheadingfooter"><h1 class="pillcontactfooter">Stay UPDATED</h1></div>
</span>
</div>
         <div class="container">
         <p class="footerpdatecontent">Subscribe to our newsletter to get latest updates</p>
         <form action="{{ route('mail') }}" method="POST">
                    @csrf
                    <div class="form-group col-xs-5 form-groupfooter">
                    <div class="search"><input type="text" class="form-control form-controlfooter" placeholder="Have a question? Ask Now"> <button type="submit" class="btn btn-primary sendformbtn sendformbtnfooter">Subscribe</button> </div>
                    </div>
                </form>
           <div class="row">
            
             <div class="col-sm-6 ">
                <div class="callus">
                  <h5 class="footerheading">Call us</h5>
                  <h5>051-8892643</h5>
                  <h5>0304-4366760</h5>
                </div>
                <div class="address">
                  <h5 class="footerheading">Address</h5>
                  <h5>Office # 12 2nd Floor Huzaifah
                  </h5><h5 >I-8 Markaz Islamabad</h5>
                </div>
                <div class="email">
                  <h5 class="footerheading">Email</h5>
                  <h5>info@obstechnologia.com</h5>
                </div>
             </div>
             <div class="boreder"></div>
             <div class="col-sm-3 offset-sm-2 linksall">
               <ul class="links">
                 <li><a href="">Contact</a></li>
                 <li><a href="">Privacy Policy</a></li>
                 <li><a href="">FAQ</a></li>
                 <li><a href="">TermsOfUse</a></li>
                 <li><a href="">Reviews</a></li>
               </ul>
             </div>
            
           </div>
           <div class=" footerimage"><div class="footerlogo"><img src="{{asset('images/logo.png')}}" alt="" ></div></div>
           <h6 class="reservedright">@2021 FUTURE,OBS Technologia,All Rights Reserved</h6>
         </div>    
  </section>
        <!-- =====================END FOOTER============================ -->