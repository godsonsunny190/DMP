<?php include 'header.php'; ?>
<main class="profile-main">


    <section class="profile">
        <h2 class="profile__title">Profile</h2>
        <div class="container d-flex justify-content-center">
            <div class="profile__wrapper">
                <form action="">
                    <div class="profile__input">
                        <label for="">Name</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div class="profile__input">
                        <label for="">Email Id</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="profile__input">
                        <label for="">Phone Number</label>
                        <input id="phone" type="tel" required>
                    </div>
                    <div class="profile__input">
                        <label for="">Uploaded Documents</label>
                        <input type="file" name="file" id="file" required>
                    </div>
                </form>
            </div>
        </div>

        <button class="profile__upload-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62">
                <g id="Group_11265" data-name="Group 11265" transform="translate(-1293 -772)">
                    <path id="Path_23416" data-name="Path 23416"
                        d="M195.5,139a1.35,1.35,0,0,1-1.35-1.35v-10.8h-10.8a1.35,1.35,0,0,1,0-2.7h10.8v-10.8a1.35,1.35,0,0,1,2.7,0v10.8h10.8a1.35,1.35,0,0,1,0,2.7h-10.8v10.8A1.35,1.35,0,0,1,195.5,139Z"
                        transform="translate(1129.002 678.004)" fill="#384133" />
                    <g id="Ellipse_15" data-name="Ellipse 15" transform="translate(1293 772)" fill="none"
                        stroke="#384133" stroke-width="1" stroke-dasharray="5">
                        <circle cx="31" cy="31" r="31" stroke="none" />
                        <circle cx="31" cy="31" r="30.5" fill="none" />
                    </g>
            </svg>
            Add documnet
        </button>

        <div class="profile__btn">
            <a href="" class="primary-btn">update
                <svg xmlns="http://www.w3.org/2000/svg" width="15.743" height="15.62" viewBox="0 0 15.743 15.62">
                    <path id="Path_1545" data-name="Path 1545"
                        d="M195.585,177.9a.527.527,0,0,0-.128-.311l-3.621-3.848a.453.453,0,0,0-.64-.018.467.467,0,0,0-.018.64l2.907,3.084H182.458a.453.453,0,0,0,0,.905h11.628l-2.907,3.084a.474.474,0,0,0,.018.64.453.453,0,0,0,.64-.018l3.621-3.848a.4.4,0,0,0,.128-.311Z"
                        transform="matrix(0.719, -0.695, 0.695, 0.719, -251.516, 10.988)" fill="#384133" />
                </svg>
            </a>
        </div>

    </section>


</main>
<?php include 'footer.php';?>