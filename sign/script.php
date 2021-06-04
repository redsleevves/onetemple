 <!-- Js  相關設定~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
 <!-- jquery3.5.1 -->
 <!-- jquery -->
 <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 <!-- bootstrap4.6.0 -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


 <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
 <script src="https://unpkg.com/moment-lunar@0.0.4/moment-lunar.min.js"></script>
 <script>
     const lunarDate = moment().year(2021).month(2).date(24).lunar().format('YYYY-MM-DD');
     const solarDate = moment().year(2017).month(0).date(1).solar().format('YYYY-MM-DD');

     console.log(lunarDate);
     console.log(solarDate);
 </script>

 <!-- js jq 開始 -->

 <script>
     // navbar
     // overlayNav進場
     $('.nav_burgurBar_img').click(function() {

         let navPosition = {
             transform: 'translateY(0)'
         }

         $(".nav_overlayNav").css(navPosition);
     })

     // overlayNav退場
     $('.nav_closeBtn').click(function() {

         let navPosition = {
             transform: 'translateY(-2500px)',
             transition: '.7s'
         }

         $(".nav_overlayNav").css(navPosition);
     })


     //Login hide
     $('#registerbtn').click(function() {
         $('#loginCenter').modal('hide');
     })

     $('#passwordbtn').click(function() {
         $('#loginCenter').modal('hide');
     })

     //overlay sub-menu
     $(document).ready(function() {
         $('.nav_ser_mobile').click(function() {

             $('.nav_dropDownMenu_mobile').toggle('slow');

         })
     });
 </script>
 <script src="./js/lucky.js"></script>