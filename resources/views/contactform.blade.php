
<section id="contactform" class="mt-4">
    <div class="container-fluid " style="padding: 0;">

        <span class="contactheadingbg">
            <!-- <h1 class="clientsheading"><span><span class="contacthead">Contact</span> <span class="client">US</span></span></h1> -->
            <div class="clientsheading clientsheadingcontact"><h1 class="pillscontact">Contact US</h1></div>
        </span>
    </div>
    <div class="container contactcontainer">

        <p class="contactformpara" style="text-align: justify;">We’re more than happy to personally advise you and work together to find strategically sophisticated solutions tailor-made to your needs and the needs of your business. </p>
                <form action="{{ route('mail') }}" method="POST">
                    @csrf
                    <div class="form-group">
                       <span><i class="fas fa-user"></i></span> <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <span><i class="fas fa-envelope"></i></span><input type="email" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                    <span><i class="fas fa-inbox"></i></span><textarea class="form-control" name="message" placeholder="Message" rows="3"></textarea>
                    </div>
                    <div class="form-group sendformbtndiv">
                    <button type="submit" class="btn btn-primary sendformbtn">Submit</button>
                    </div>
                </form>
    </div>
</section>