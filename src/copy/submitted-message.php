<?php include 'header.php'; ?>
<main class="submiited-message">


    <section class="submitted-msg">
        <div class="container">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#submittedMsg">backdrop
                modal</button>

            <div class="modal fade" id="submittedMsg" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered submitted-msg__modal">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Successfully submitted</h5>
                            <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">

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
                        <div class="modal-body">
                            <p class="modal-message">Sed ut perspiciatis unde omnis 
                            iste natus error sit voluptatem accusantium 
                            doloremque laudantium totam.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#submittedMsg" data-toggle="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
<?php include 'footer.php';?>