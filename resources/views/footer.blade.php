<!DOCTYPE html>
<html lang="en">
<body>
 <script src="{{asset('js/index.js')}}"></script>
  <!--<script src="{{asset('js/lf30_ebiybky1.json')}}"></script> -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js"></script>
  
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>

    <script>
         var animation = bodymovin.loadAnimation({
      // animationData: { /* ... */ },
      container: document.getElementById('anim'), // required
      path: '{{asset("js/lf30_has6gi6t.json")}}', 
      renderer: 'svg', // required
      loop: true, // optional
      autoplay: true, // optional
      name: "Demo Animation", // optional
   });
    </script>
    
