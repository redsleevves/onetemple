<div class="nav_burgurBar">
        <div class="nav_burgurBar_img">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 25 20">
                <g id="Group_135" data-name="Group 135" transform="translate(-341.5 -1313.5)">
                    <line id="Line_50" data-name="Line 50" x2="23" transform="translate(342.5 1314.5)" fill="none"
                        stroke="#707070" stroke-linecap="round" stroke-width="2" />
                    <line id="Line_51" data-name="Line 51" x2="23" transform="translate(342.5 1323.5)" fill="none"
                        stroke="#707070" stroke-linecap="round" stroke-width="2" />
                    <line id="Line_52" data-name="Line 52" x2="23" transform="translate(342.5 1332.5)" fill="none"
                        stroke="#707070" stroke-linecap="round" stroke-width="2" />
                </g>
            </svg>
        </div>

        <div class="nav_logo_mobile">
            <img src="<?= WEB_ROOT ?>/img/nav_logo_mobile.svg" alt="">
        </div>

    </div>

    <div class="nav_overlayNav">
        <div class="nav_closeBtn mb-4">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 20 20">
                <title>close</title>
                <path fill='#fff'
                    d="M10 8.586l-7.071-7.071-1.414 1.414 7.071 7.071-7.071 7.071 1.414 1.414 7.071-7.071 7.071 7.071 1.414-1.414-7.071-7.071 7.071-7.071-1.414-1.414-7.071 7.071z">
                </path>
            </svg>
        </div>
        <div class="nav_overlayNavBox">
            <ul>
                <a href="<?= WEB_ROOT?>/temple_index.php">
                    <li>灣廟首頁</li>
                </a>
                <a href="<?= WEB_ROOT?>/news_main.php">
                    <li>最新消息</li>
                </a>
                <a href="">
                    <li>探索灣廟</li>
                </a>
                <li class="nav_ser_mobile">
                    線上服務
                    <i class="fas fa-angle-down"></i>
                </li>
                <ul class="nav_dropDownMenu_mobile">
                    <a class="dropdown-item nav_ser_item_mob" href="<?= WEB_ROOT?>/light_Introduction.php">祈福點燈</a>
                    <a class="dropdown-item nav_ser_item_mob" href="#">求神問卜</a>
                </ul>
                <a href="<?= WEB_ROOT?>/trip.php">
                    <li>聖地行旅</li>
                </a>
                <a href="">
                    <li>祈福商店</li>
                </a>
                <a href="">
                    <li>購物車</li>
                </a>
                <?php if(isset($_SESSION['user'])): ?>
                    <div class="mobile_login d-flex">
                    <div class="mobile_nav_profile d-flex">
                        <img src="<?= WEB_ROOT ?>/img/<?= htmlentities($_SESSION['user']['profilepic']) ?>">
                        <a class="nav-link"><?= htmlentities($_SESSION['user']['name']) ?></a>
                    </div>
                    <div class="nav-item">
                        <a class="nav-link" href="logout.php">登出</a>
                    </div>
                    </div>
                    <?php else: ?>
                <a href="login.php" data-toggle="modal" data-target="#loginCenter"  <?= $pageName=='login' ? 'active' : '' ?>>
                    <li>登入 | 註冊</li>
                </a>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <div class="nav_index_navbar_com">
        <div class="nav_index_navbarBox">
            <div class="nav_index_navbar_left">
                <a href="<?= WEB_ROOT?>/temple_index.php" class="nav_navbar_item">
                    <div class="nav_hide_ch">灣廟首頁</div>
                    <div class="nav_hide_en">HOME</div>
                </a>
                <a href="<?= WEB_ROOT?>/news_main.php" class="nav_navbar_item">
                    <div class="nav_hide_ch">最新消息</div>
                    <div class="nav_hide_en">NEWS</div>
                </a>
                <a href="" class="nav_navbar_item">
                    <div class="nav_hide_ch">探索灣廟</div>
                    <div class="nav_hide_en">EXPLORE</div>
                </a>
                <a href="#" class="nav_navbar_item nav_ser">
                    <div class="nav_hide_ch">線上服務</div>
                    <div class="nav_hide_en">SERVICE</div>

                    <ul class="nav_dropDownMenu">
                        <a class="dropdown-item nav_ser_item" href="<?= WEB_ROOT?>/light_Introduction.php">祈福點燈</a>
                        <a class="dropdown-item nav_ser_item" href="#">求神問卜</a>
                    </ul>
                </a>
                
                <a href="<?= WEB_ROOT?>/trip.php" class="nav_navbar_item">
                    <div class="nav_hide_ch">聖地行旅</div>
                    <div class="nav_hide_en">TRIP</div>
                </a>
                <a href="" class="nav_navbar_item">
                    <div class="nav_hide_ch">祈福商店</div>
                    <div class="nav_hide_en">SHOP</div>
                </a>
                <a href="" class="nav_navbar_item">
                    <div class="nav_hide_ch">購物車</div>
                    <div class="nav_hide_en">CART</div>
                </a>
            </div>
            <div class="nav_index_navbar_right">
            <?php if(isset($_SESSION['user'])): ?>
                    <li class="nav-item d-flex align-items-center">
                        <img src="<?= WEB_ROOT ?>/img/<?= htmlentities($_SESSION['user']['profilepic']) ?>">
                        <a class="nav-link"><?= htmlentities($_SESSION['user']['name']) ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">登出</a>
                    </li>
                    <?php else: ?>
                <a href="login.php" data-toggle="modal" data-target="#loginCenter" class="nav_navbar_item <?= $pageName=='login' ? 'active' : '' ?>">
                    <div>登入</div>
                </a>
                <span class="nav_navbar_item">|</span>
                <a href="register.php" data-toggle="modal" data-target="#registerCenter" class="nav_navbar_item <?= $pageName=='register' ? 'active' : '' ?>">
                    <div>註冊</div>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- login -->
    <div class="modal fade" id="loginCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-re">
                <div class="modal-header modal-header-re">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalCenterTitle">登入 | LOGIN</h5>
                </div>
                <div class="modal-body">
                    <form class="mt-3" name="formLog" method="post" novalidate onsubmit="checkLogin(); return false;">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-re" id="login_email" name="email" placeholder="Email">
                            <small class="form-text error"></small>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-re" type="password" id="login_password"  name="password" placeholder="Password">
                            <small class="form-text error"></small>
                        </div>
                        <input type="checkbox"> 記住帳號
                        <div class="modal-footer modal-footer-re">
                    <button type="submit" class="btn-primary-re">登入</button>
                </div>
                    </form>
                </div>
                <div class="modal-footer2-re mt-3">
                    <a class="mr-5" data-toggle="modal" data-target="#lostPassword" id="passwordbtn">忘記密碼</a>
                    <a data-toggle="modal" data-target="#registerCenter" id="registerbtn">註冊帳號</a>
                </div>
            </div>
        </div>
    </div>

    <!-- lost password -->
    <div class="modal fade" id="lostPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-re">
                <div class="modal-header modal-header-re">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalCenterTitle">找回密碼</h5>
                </div>
                <div class="modal-body">
                    <form class="mt-3">
                        <div class="form-group mb-3">
                            <p>請輸入您註冊的電子郵件，您將會在電子郵件信箱中收到重設密碼的連結。</p>
                            <input type="text" class="form-control form-control-re" id="account-name"
                                placeholder="Email">
                        </div>
                    </form>
                </div>
                <div class="modal-footer modal-footer-re">
                    <button type="button" class="btn-primary-re">送出</button>
                </div>
            </div>
        </div>
    </div>

    <!-- register -->
    <div class="modal fade" id="registerCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-re">
                <div class="modal-header modal-header-re">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalCenterTitle">註冊 | REGISTER</h5>
                </div>
                <div class="modal-body">
                    <form class="mt-3" id="formReg" name="formReg" method="post" novalidate
                          onsubmit="checkForm(); return false;">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-re" id="name" name="name" placeholder="使用者名稱">
                            <small class="form-text error"></small>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-re" id="email" name="email" placeholder="Email"
                                placeholder="Email">
                                <small class="form-text error"></small>
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-re" id="mobile" name="mobile" placeholder="手機號碼">
                                <small class="form-text error"></small>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-re" id="password" type="password"
                             placeholder="密碼">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-re" name="repassword" id="repassword" type="password" placeholder="再次輸入密碼">
                            <small class="form-text error"></small>
                        </div>
                        <div class="modal-footer modal-footer-re">
                    <button id='submit'  type="submit" class="btn-primary-re">註冊</button>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

