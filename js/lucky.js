// --------導覽列----------
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

// p1
function required() {
    var god = document.getElementById("gods");
    var selectedValue = god.options[god.selectedIndex].value;
    if (selectedValue == '0') {
        // alert("Please select a card type");
        $('#pleaseSelect').css('visibility', 'visible')
    } else {
        $('.lucky_p2').removeClass('nextstep')
        $('.lucky_p1').addClass('nextstep')
        $('.node2').addClass('stageColor').siblings().removeClass('stageColor')
        $('.lucky_Swipe_page p').text('02')
    }
}
$('.lucky_button01 .lucky_p1').click(function () {
    required()
})

// p2
// 選願望動畫
let chosen = document.getElementsByClassName('clickIcon')
console.log(chosen.length)
$('.unit').click(function () {
    $(this).children('.pic').toggleClass('clickIcon')
    $(this).siblings().children('.pic').removeClass('clickIcon')
    $(this).find('path').attr('fill', function (index, attr) {
        return attr == "white" ? "#cc543a" : "white";
    });
    $(this).siblings().find('path').attr('fill', '#cc543a')

})

$('.lucky_button01 .lucky_p2').click(function () {

    console.log(chosen.length)
    if (chosen.length > 0) {
        let boxleft = $('.wishes').position().left
        let boxtop = $('.wishes').position().top
        let boxheight = $('.wishes').height()
        let boxwidth = $('.wishes').width()
        let chosenleft = $(chosen).parent().position().left
        let chosentop = $(chosen).parent().position().top
        $(chosen).parent().css({
            left: chosenleft + 'px',
            top: chosentop + 'px'
        })
        $(chosen).parent().siblings().css('opacity', '0')
        $(chosen).siblings().css('opacity', '0')
        $('.lucky_button01 .lucky_p2').addClass('nextstep')
        setTimeout(function () {
            $(chosen).parent().css({
                position: 'absolute',
                left: (boxleft + boxwidth / 2) + -50 + 'px',
                top: (boxtop + boxheight / 2) + 'px',
                transform: 'scale(' + 3 + ')',
                transition: 3 + 's'
            })
        }, 1500);

        setTimeout(function () {
            $('.lucky_p3').removeClass('nextstep')
            $('.lucky_p2').addClass('nextstep')
            $('.node3').addClass('stageColor').siblings().removeClass('stageColor')
            $('.lucky_Swipe_page p').text('03')
        }, 4000);

    } else {
        $('#quest').append('<p style="color:#cc543a; margin-left:30px; font-weight:bold">請選擇一項</p>')
    }
})

// p5
// --------筊杯-動畫------------           
let laugh = {
    "img": "./img/YanCup-02-1.png",
    "name": "笑筊",
    "hint": "求籤失敗，請重新求籤",
};
let yin = {
    "img": "./img/YanCup-03-1.png",
    "name": "陰筊",
    "hint": "求籤失敗，請重新求籤",

};
let san = {
    "img": "./img/YanCup-01-1.png",
    "name": "聖筊",
    "hint": "求籤成功，請查閱籤詩",
};
let please = [laugh, yin, san]
var luckyNum = Math.floor(Math.random() * please.length);

function getRandomImage() {
    return document.getElementById("lucky_Sign_animation05_1").innerHTML = '<img src="' + please[luckyNum].img + '" />' + '<h3>' + please[luckyNum].name + '</h3>',
        document.getElementById("lucky_result05_1").innerHTML = '<p>' + please[luckyNum].hint + '</p>';
}

if ($(window).width() > 1000) {
    $('.lucky_button01 .lucky_p4').click(function () {
        document.getElementById('YanCup').addEventListener('animationend', function () {
            $('#YanCup_1').css('visibility', 'visible');
            $('#YanCup_2').css('visibility', 'visible');
            $('#YanCup').css('visibility', 'hidden');
        });
        document.getElementById('YanCup_1').addEventListener('animationend', function () {
            $('.lucky_Sign_animation05_0').addClass('d-none');
            getRandomImage()
            console.log(please[luckyNum].name)
            $('#YanCup').css('visibility', 'visible');
        });
    })
}
getRandomImage()
let failure = 1
$('.lucky_button01 .lucky_p5').click(function () {
    if (please[luckyNum].name == '聖筊') {
        $('.lucky_p6').removeClass('nextstep')
        $('.lucky_p5').addClass('nextstep')
        $('.node6').addClass('stageColor').siblings().removeClass('stageColor')
        $('.lucky_Swipe_page p').text('06')
    } else {
        if ($(window).width() > 1000) {
            $('.lucky_Sign_animation05_1').addClass('d-none');
            $('.lucky_result05_1').addClass('d-none');
            $('.lucky_Sign_animation05_0').removeClass('d-none');

            document.getElementById('YanCup_1').addEventListener('animationend', function () {
                $('.lucky_Sign_animation05_0').addClass('d-none');
                $('.lucky_Sign_animation05_1').removeClass('d-none')
                $('.lucky_result05_1').removeClass('d-none');
                ;
                luckyNum = Math.floor(Math.random() * please.length);
                getRandomImage(luckyNum);
                console.log(please[luckyNum].name)
                document.getElementById("lucky_result05_1").append("擲筊次數：" + failure);
            });
        } else {
            luckyNum = Math.floor(Math.random() * please.length);
            getRandomImage(luckyNum);
            console.log(failure);
            document.getElementById("lucky_result05_1").append("擲筊次數：" + failure);
        }

        failure++;
    }

})
// 換頁
function nextPage(i) {
    $('.lucky_button01 button').eq(i).click(
        function () {
            console.log($('.lucky_button01 button').length, i)
            $(`.lucky_p${i + 1}`).addClass('nextstep')
            $(`.lucky_p${i + 2}`).removeClass('nextstep')
            $(`.node${(i + 2)}`).addClass('stageColor').siblings().removeClass('stageColor')
            $('.lucky_Swipe_page p').text(`0${(i + 2)}`)
        }
    )
}
var itemNum = $('.lucky_button01 button').length
for (i = 0; i < itemNum; i++) {
    if (i == 0) continue;
    else if (i == 1) continue;
    else if (i == 4) continue;
    nextPage(i);
}
//------神明圖片切換------
const obj = document.getElementById('gods');
const gods = document.querySelectorAll('#gods option');//抓下拉是選單的文明文字
const godImg = document.querySelector('.lucky_GodImg');//抓藥更換的神明圖片位置

$("#gods").change(function () {
    $(".lucky_GodImg img").attr('src', "/img/" + $(this).val() + ".png")
})