<?php include 'header.php'; ?>
<main class="enquiry">


    <section class="enquiry">
        <div class="container enquiry__modal">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enquiry">
                Launch static backdrop modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="enquiry" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered enquiry__modaldialog">

                    <div class="modal-content enquiry__modal-content ">
                        <div class="modal-header enquiry__modaldialog__modalcontent--header">
                            <h5 class="modal-title enquiry__modaldialog__modalcontent--title" id="staticBackdropLabel"> 
                                Enquiry</h5>

                            <button type="button" class="close  enquiry__modaldialog__modalcontent--button"
                                data-dismiss="modal" aria-label="Close">
                                <svg xmlns="http://www.w3.org/2000/svg" width="27.422" height="27.422"
                                    viewBox="0 0 27.422 27.422">
                                    <g id="Group_14" data-name="Group 14" transform="translate(-1821 -52.539)">
                                        <g id="noun-menu-119141" transform="translate(1741.17 -1.273)">
                                            <path id="Path_22957" data-name="Path 22957"
                                                d="M76.03,197.879h35.022a.94.94,0,1,0,0-1.879H76.03a.94.94,0,1,0,0,1.879Z"
                                                transform="translate(166.655 -137.878) rotate(45)" fill="#384133" />
                                            <path id="Path_22958" data-name="Path 22958"
                                                d="M76.03,197.879h35.022a.94.94,0,1,0,0-1.879H76.03a.94.94,0,1,0,0,1.879Z"
                                                transform="translate(-111.859 -5.591) rotate(-45)" fill="#384133" />
                                        </g>
                                    </g>
                                </svg>
                            </button>

                        </div>
                        <div class="modal-body modalbody">
                            <div class="row modalbody__inputfeilds">

                                <div class="col-12 p-0 modalbody__inputfeilds--inputbox">
                                    <label for="">Enquiry</label>
                                    <input type="text" name="name" id="name" placeholder="Dining">
                                </div>

                                <div class="blockone">
                                    <h4> Number Of person</h4>
                                    <div class="row">
                                        <div
                                            class="col-md-6 modalbody__inputfeilds--inputbox adults d-flex align-items-baseline">
                                            <label for="">Adults</label>
                                            <input type="text" name="name" id="name">
                                        </div>

                                        <div
                                            class="col-md-6 modalbody__inputfeilds--inputbox kids d-flex align-items-baseline">
                                            <label for="">Kids</label>
                                            <input type="text" name="name" id="name" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="blocktwo">
                                    <div class="row align-items-center">
                                        <div class="col-md-6 modalbody__inputfeilds--inputbox">
                                            <label for="" class="required">Booking date</label>
                                            <input type="date" id="date" name="date" placeholder="DD-MM-YYYY">
                                        </div>

                                        <div class="col-md-4 modalbody__inputfeilds--inputbox">
                                            <label for="" class="required">Time</label>
                                            <input type="time" id="time" name="time" placeholder="">
                                        </div>

                                        <div class="col-md-2 modalbody__inputfeilds--inputbox align-self-end">
                                            <select class="" name="meridiem" id="meridiem">
                                                <option value="AM">AM</option>
                                                <option value="PM" selected>PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 p-0 modalbody__inputfeilds--inputbox">
                                    <label for="">Enquiry subject</label>
                                    <input type="text" name="name" id="name" placeholder="Dining">
                                </div>

                                <div class="modalbody__btn">
                                    <a href="" class="primary-btn">Submit
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15.743" height="15.62"
                                            viewBox="0 0 15.743 15.62">
                                            <path id="Path_1545" data-name="Path 1545"
                                                d="M195.585,177.9a.527.527,0,0,0-.128-.311l-3.621-3.848a.453.453,0,0,0-.64-.018.467.467,0,0,0-.018.64l2.907,3.084H182.458a.453.453,0,0,0,0,.905h11.628l-2.907,3.084a.474.474,0,0,0,.018.64.453.453,0,0,0,.64-.018l3.621-3.848a.4.4,0,0,0,.128-.311Z"
                                                transform="matrix(0.719, -0.695, 0.695, 0.719, -251.516, 10.988)"
                                                fill="#384133" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>
<?php include 'footer.php';?>