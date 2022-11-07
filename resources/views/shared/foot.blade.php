 <!-- section footer end -->
 <div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html Templates</a></div>

 <!-- Javascript files-->
 <script src="{{ asset('js/jquery.min.js') }}"></script>
 <script src="{{ asset('js/popper.min.js') }}"></script>
 <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
 <script src="{{ asset('js/plugin.js') }}"></script>
 <!-- sidebar -->
 <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
 <script src="{{ asset('js/custom.js') }}"></script>
 <!-- javascript -->
 <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
     integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
 </script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
     integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
 </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
     integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
 </script>
 <script>
     $(document).ready(function() {
                 $(".fancybox").fancybox({
                     openEffect: "none",
                     closeEffect: "none"
                 });


                 $('#myCarousel').carousel({
                     interval: false
                 });

                 //scroll slides on swipe for touch enabled devices

                 $("#myCarousel").on("touchstart", function(event) {

                     var yClick = event.originalEvent.touches[0].pageY;
                     $(this).one("touchmove", function(event) {

                         var yMove = event.originalEvent.touches[0].pageY;
                         if (Math.floor(yClick - yMove) > 1) {
                             $(".carousel").carousel('next');
                         } else if (Math.floor(yClick - yMove) < -1) {
                             $(".carousel").carousel('prev');
                         }
                     });
                     $(".carousel").on("touchend", function() {
                         $(this).off("touchmove");
                     });
                 });
 </script>
 </body>

 </html>
