<?php include 'header.php'; ?>
<main class="signin-main">

    <section class="signin">
        <div class="container d-flex justify-content-center flex-column align-items-center">
            <h2 class="signin__title">Signin</h2>
            <div class="signin__wrapper">
                <div class="signin__wrapper--feild email">
                    <label for="">Your Email ID</label>
                    <input type="email" name="email" id="email">
                </div>
                
                <div class="signin__wrapper--feild password">
                    <label for="">Password</label>
                    <input type="password" name="password" id="password">
                </div>
            </div>

            <div class="signin__btn">
                <a href="" class="primary-btn">Signin
                    <svg xmlns="http://www.w3.org/2000/svg" width="15.743" height="15.62" viewBox="0 0 15.743 15.62">
                        <path id="Path_1545" data-name="Path 1545"
                            d="M195.585,177.9a.527.527,0,0,0-.128-.311l-3.621-3.848a.453.453,0,0,0-.64-.018.467.467,0,0,0-.018.64l2.907,3.084H182.458a.453.453,0,0,0,0,.905h11.628l-2.907,3.084a.474.474,0,0,0,.018.64.453.453,0,0,0,.64-.018l3.621-3.848a.4.4,0,0,0,.128-.311Z"
                            transform="matrix(0.719, -0.695, 0.695, 0.719, -251.516, 10.988)" fill="#384133" />
                    </svg>
                </a>
            </div>

        </div>

        <p class="text-center signin__desc">Don't have an account? <span> Register</span> </p>
        <p class="signin__frpass text-center">forget password</p>

    </section>
 
</main>
<?php include 'footer.php';?>