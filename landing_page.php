<?php include __DIR__ . '/parts/config.php'; ?>

<?php
$_gdata = [
    // 網頁名稱
    'title' => '灣廟 Collection of Taiwan Temple', 
    // 頁面私有 css
    'styles' => '',
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
          color: #fff;
          z-index: 10;
          padding-top: 570px;
          font-family: 'Raleway', sans-serif;
        }
        .magic {
          z-index: 5;
          position: absolute;
          top: calc(50% - 10rem);
          left: calc(50% - 10rem);
          width: 300px;
          height: 300px;
          background: url('./img/index_bannerImg\(1\).jpg') 50% 50% no-repeat fixed;
          background-size: cover;
          border-radius: 50%;
        }
        .check-out {
          z-index: 100;
          position: absolute;
          bottom: 1rem;
          left: 50%;
          transform: translateX(-50%);
          font-size: 2rem;
          color: #fff;
          font-family: test;
        }

        a {
            color: #fff;
          }
        a:hover{
            color: #fff;
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
          background-image: linear-gradient(to top, rgba(8, 25, 45, 0.85) 0%, rgba(8, 25, 45, 1) 100%);
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
          background: rgba(46, 92, 110, 0.5);
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
          background: rgba(46, 92, 110, 0.3);
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

</style>

</head>

<body>
    
    <div class="scene">
        <div class="wordTitle">
            <img src="<?=WEB_ROOT?>/img/nav_logo.svg" alt="">
        </div>

        <h1><a href="./index.php">Taiwan Temple</a></h1>

        <div class="magic"></div>

        <div class="wrapper">
          <div class="wave1"></div>
          <div class="wave2"></div>
          <div class="wave3"></div>
        </div>
    </div>


    <?php include __DIR__ . '/parts/ourscripts.php'; ?>

    <script>
        $(document).ready(function() {
        var $magic = $(".magic"),
            magicWHalf = $magic.width() / 2;
        $(document).on("mousemove", function(e) {
            $magic.css({"left": e.pageX - magicWHalf, "top": e.pageY - magicWHalf});
        });
        });
    </script>

</body>

</html>

