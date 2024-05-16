<?php include 'header.php'; ?>
<main class="register-main">


    <section class="register">
        <h2 class="register__title">Register</h2>
        <div class="container d-flex justify-content-center">
            <div class="register__wrapper">
                <form action="">
                    <div class="register__input">
                        <label for="">Your name</label>
                        <input type="text" name="name" id="">
                    </div>
                    <div class="register__input">
                        <label for="">Your Email Id</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="register__input">
                        <label for="">Phone Number</label>
                        <input id="phone" type="tel" required>
                    </div>
                    <div class="register__input">
                        <label for="">Password</label>
                        <input type="pass" name="password" id="password">
                    </div>
                    <div class="register__input comfirm-pass">
                        <label for="">Confirm Password</label>
                        <input type="password" name="name" id="">
                    </div>
                </form>
            </div>
        </div>

        <div class="register__btn">
            <a href="" class="primary-btn">register
                <svg xmlns="http://www.w3.org/2000/svg" width="15.743" height="15.62" viewBox="0 0 15.743 15.62">
                    <path id="Path_1545" data-name="Path 1545"
                        d="M195.585,177.9a.527.527,0,0,0-.128-.311l-3.621-3.848a.453.453,0,0,0-.64-.018.467.467,0,0,0-.018.64l2.907,3.084H182.458a.453.453,0,0,0,0,.905h11.628l-2.907,3.084a.474.474,0,0,0,.018.64.453.453,0,0,0,.64-.018l3.621-3.848a.4.4,0,0,0,.128-.311Z"
                        transform="matrix(0.719, -0.695, 0.695, 0.719, -251.516, 10.988)" fill="#384133" />
                </svg>
            </a>
        </div>

        <p class="text-center register__terms"><span>By signing up, you agree to DMP terms</span> & conditions and
            privacy policy.</p>
        <p class="register__signin">Already registered ?<span> Signin</span></p>

    </section>

    
    <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
            </div>
            <div class="swiper-pagination"></div>
            </div>

    
</main>
<?php include 'footer.php';?>