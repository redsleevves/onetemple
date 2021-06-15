<script src="<?= WEB_ROOT ?>/lib/jquery-3.6.0.js"></script>
<script src="<?= WEB_ROOT ?>/bootstrap/js/bootstrap.bundle.js"></script>
<?= $_gdata['scripts'] ?>
<script>
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


    // 快速登入 test
    $('.fastinput_1').click(function(event) {
        event.preventDefault();

        $('.fastinput_1_email').val('vvvvv@RVE.COM');
        $('.fastinput_1_password').val('vvv');
    })

    // 註冊快速
    $('.fastinput_2').click(function(event) {
        event.preventDefault();

        $('.fastinput_2_email').val('abc@gmail.com');
        $('.fastinput_2_password').val('abc');
        $('.fastinput_2_mobile').val('0987654321');
        $('.fastinput_2_name').val('資策會');

    })



    const email_re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    const mobile_re = /^09\d{2}-?\d{3}-?\d{3}$/;
    const $name = $('#name'),
        $email = $('#email'),
        $mobile = $('#mobile'),
        $password = $('#password'),
        $repassword = $('#repassword');
    const fileds = [$name, $email, $mobile];
    const fileds_reg = [$name, $email, $mobile, $password, $repassword];
    // const smalls = [$name.next(), $email.next(), $mobile.next()];

    function checkForm() {

        let isPass = true;

        fileds_reg.forEach(el_reg => {
            el_reg.css('border', '1px solid #aaa');
            el_reg.parent().find('.form-text').text('');
        });

        if ($name.val().length < 2) {
            isPass = false;
            $name.css('border', '1px solid red');
            $name.next().text('請輸入正確的姓名');
        }
        if (!email_re.test($email.val())) {
            isPass = false;
            $email.css('border', '1px solid red');
            $email.next().text('請輸入正確的 email');
        }
        if (!mobile_re.test($mobile.val())) {
            isPass = false;
            $mobile.css('border', '1px solid red');
            $mobile.next().text('請輸入正確的手機號碼');
        }
        if ($repassword.val() !== $password.val()) {
            isPass = false;
            $repassword.css('border', '1px solid red');
            $repassword.next().text('請輸入相同的密碼');
        }

        if (isPass) {
            $.post(
                'add_member_api.php',
                $(document.formReg).serialize(),
                function(data) {
                    if (data.success) {
                        // alert('註冊成功');
                        window.location.replace("./member_onepage.php");
                    } else {
                        // alert(data.error);
                        $email.css('border', '1px solid red');
                        $email.next().text('此email已註冊過');
                    }
                },
                'json'
            )
        }

    }


    function checkLogin() {
        fileds.forEach(el => {
            el.css('border', '1px solid #CCCCCC');
            el.next().text('');
        });

        let isLogin = true;

        if ($('#login_email').val().length < 1) {
            let isLogin = false;
            $('#login_email').css('border', '1px solid red');
            $('#login_email').next().text('請輸入註冊時使用的Email');
        }
        if ($('#login_password').val().length < 1) {
            let isLogin = false;
            $('#login_password').css('border', '1px solid red');
            $('#login_password').next().text('請輸入註冊時使用的密碼，提示:超過六個字元');
        }
        if (isLogin) {
            $.post(
                'login-api.php',
                $(document.formLog).serialize(),
                function(data) {
                    if (data.success) {
                        // alert('登入成功');
                        location.reload();
                    } else {
                        // alert(data.error);
                        $('#login_password').next().text('帳號或密碼有誤');
                    }
                },
                'json'
            )
        }

    }
</script>