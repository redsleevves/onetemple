<script src="<?= WEB_ROOT ?>/bs&jq/jquery-3.6.0.js"></script>
<script src="<?= WEB_ROOT ?>/bs&jq/bootstrap.bundle.js"></script>

<script>

        // overlayNav進場
        $('.nav_burgurBar_img').click(function () {

            let navPosition = {
                transform: 'translateY(0)'
            }

            $(".nav_overlayNav").css(navPosition);
        })

        // overlayNav退場
        $('.nav_closeBtn').click(function () {

            let navPosition = {
                transform: 'translateY(-2500px)',
                transition: '.7s'
            }

            $(".nav_overlayNav").css(navPosition);
        })


        //Login hide
        $('#registerbtn').click(function () {
            $('#loginCenter').modal('hide');
        })

        $('#passwordbtn').click(function () {
            $('#loginCenter').modal('hide');
        })

        //overlay sub-menu
        $(document).ready(function () {
            $('.nav_ser_mobile').click(function () {

                $('.nav_dropDownMenu_mobile').toggle('slow');

            })
        });


        //滑動出現
        $(window).scroll(function () {
            // console.log('height',$(this).scrollTop());

            $('.hideme').each(function () {
                let bottom_of_object = $(this).offset().top + 150;
                let bottom_of_window = $(window).scrollTop() + $(window).height();

                if (bottom_of_window > bottom_of_object) {
                    $(this).animate({ 'opacity': '1' }, 1300);
                }
            });
        });

        //一開始就滑上來
        $(document).ready(function () {

            $('.news_box').css('animation', 'slide 1.3s ease-in');

        });

        // Go-Top
        $(window).scroll(function (event) {
            let scrollTop = $(window).scrollTop();
            console.log(scrollTop);

            if (scrollTop >= 500) {

                $(".index_goTopImg").addClass('show');
            } else {
                $(".index_goTopImg").removeClass('show');
            }
        });

        $('.index_goTopImg').click(function () {
            $("html,body").animate({
                scrollTop: 0,
            }, 700);
        });


        //判斷page第幾頁，箭頭是否消失
        if (<?=$page?> <= 1){
            $('.arrow-page-left').addClass('itemDisplayNone')
        }else{
            $('.arrow-page-left').removeClass('itemDisplayNone')
        }

        
        if (<?=$page?> >= <?= $totalPages?>){
            $('.arrow-page-right').addClass('itemDisplayNone')
        }else{
            $('.arrow-page-right').removeClass('itemDisplayNone')
        }

    </script>