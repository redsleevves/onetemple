<?php include __DIR__ . '/parts/config.php'; ?>

<?php
$_gdata = [
    // 網頁名稱
    'title' => '灣廟 Collection of Taiwan Temple', 
    // 頁面私有 css
    'styles' => ' <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>',
    //頁面私有 scripts
    'scripts' => '', 
];
?>

<?php include __DIR__ . '/parts/ourhead.php'; ?>

<style>
          *, *:before, *:after {
          box-sizing: border-box;
          margin: 0;
        }
        html,body {
          font-size: 62.5%;
          height: 100%;
          overflow: hidden;
        }
        .scene {
          position: relative;
          height: 100%;
          background: #cc543a;
          /* padding: 20rem; */
          text-align: center;
        }
        h1 {
          position: relative;
          font-size: 6rem;
          letter-spacing: 0.2rem;
          font-weight: 200;
          text-transform: uppercase;
          /* font-family: test; */
          color: #000;
          z-index: 10;
          padding-top: 570px;
          font-family: 'Raleway', sans-serif;
        }

        .magBox{
          width: 300px;
          height: 300px;
          z-index: 5;
          position: absolute;
          top: calc(50% - 10rem);
          left: calc(50% - 10rem);
        }
        .magBox p{
          position: absolute;
          top: 70%;
          left: 30%;
          width: 100%;
          height: 100%;

          font-family: 'Raleway', sans-serif;
          font-size: 30px;
          font-weight: 500;
          color: #CB4042;

          z-index: 1;
          display: none;
        }
        .magic {
         
          width: 100%;
          height: 100%;
          background: url('./img/index_bannerImg\(1\).jpg') 50% 50% no-repeat fixed;
          background-size: cover;
          border-radius: 50%;
        }

        a {
            color: #000;
          }
        a:hover{
            color: #000;
            text-decoration: none;
        }

        .wordTitle {
            width: 430px;
            position: absolute;
            z-index: 10;
            left: calc(50% - 215px);
            top: 20%;

            /* border: 1px solid red; */
        }
        .wordTitle img{
          width: 100%;
          /* height: 100%; */
          object-fit: cover;
        }



        .wrapper {
          width: 100%;
          height: 100%;
          position: absolute;
          left: 50%;
          top: 50%;
          transform: translate(-50%, -50%);
          /* border-radius: 5px; */
          background-image: url(./img/nav_bcc2.png);
          overflow: hidden;
        }

        .wave1 {
          width: 800px;
          height: 925px;
          position: absolute;
          top: -65%;
          right: -15%;
          margin-left: -50px;
          margin-top: -100px;
          border-radius: 50%;
          background: rgba(204, 84, 58, 0.5);
          animation: wave 10s ease infinite;

          /* border: 1px solid red; */
        }
        .wave2 {
          width: 800px;
          height: 725px;
          position: absolute;
          bottom: -45%;
          left: -5%;
          margin-left: -50px;
          margin-top: -100px;
          border-radius: 50%;
          background: rgba(204, 84, 58, 0.3);
          animation: wave2 15s ease infinite;

          /* border: 1px solid red; */
        }

        

        @keyframes wave {
          0% { 
            transform: translate3d(50px,-25px,0);
            transform: rotate(0deg);
          }
          50% { 
            transform: rotate(240deg);
          }
          100% {
            transform: translate3d(100px,-5px,0);
            transform: rotate(360deg);
          }
        }
        @keyframes wave2 {
          0% { 
            transform: translate3d(-150px,50px,0);
            transform: rotate(0deg);
          }
          50% { 
            transform: rotate(180deg);
          }
          100% {
            transform: translate3d(20px,-105px,0);
            transform: rotate(360deg);
          }
        }

        @media (max-width: 770px) {

          .wordTitle{
            width: 350px;
          }

        }

</style>

</head>

<body>
    
    <div class="scene">
        <div class="wordTitle">
            <img src="<?=WEB_ROOT?>/img/nav_logo.svg" alt="">
        </div>

        <h1><a href="./index.php">Taiwan Temple</a></h1>

        <div class="magBox">
          <p>CLICK！</p>
          <div class="magic"></div>
        </div>

        <div class="wrapper">
          <div class="wave1"></div>
          <div class="wave2"></div>
          <div class="wave3"></div>
        </div>
    </div>


    <?php include __DIR__ . '/parts/ourscripts.php'; ?>

    <script>
        $(document).ready(function() {
        var $magic = $(".magBox"),
            magicWHalf = $magic.width() / 2;
        $(document).on("mousemove", function(e) {
            $magic.css({"left": e.pageX - magicWHalf, "top": e.pageY - magicWHalf});
        });
        });

        $('a').mouseenter(function(){
          $('.magic').css({'width': '450px','height':'450px','transition':'.6s','opacity':'.4'})
          $('.magBox p').css({'display': 'block'});
        });
          

        $('a').mouseleave(function(){
        $('.magic').css({'width': '300px','height':'300px','transition':'.6s','opacity':'1'});
        $('.magBox p').css({'display': 'none'});
        })



    </script>

</body>

</html>

