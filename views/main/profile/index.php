<?php

require_once("/xampp/htdocs/Source_code/views/main/navbar.php");

?>

<!-- <script>
    var loadFile = function(event) {
        var image = document.getElementById("output");
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="/Source_code/public/img/user/default.png" alt="avatar">

                <input name="profile_photo" type="file" onchange="loadFile(event)" />


                <span class="font-weight-bold"><?php echo $data->fname . ' ' . $data->lname ?></span>
                <span class="text-black-50"><?php echo $data->email ?></span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" name='fname' value="<?php echo $data->fname ?>"></div>
                    <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" value="<?php echo $data->lname ?>" name='lname'></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Phone Number</label><input type="text" class="form-control" name='phone' value="<?php echo $data->phone ?>"></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="enter email id" name='email' value="<?php echo $data->email ?>"></div>
                </div>
                <div class="row mt-3">

                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button" href="index.php?page=main&controller=register&action=index">Save Profile</button></div>
                </div>
            </div>

        </div>
    </div>
</div>
</div> -->



<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="/Source_code/public/img/user/default.png" alt="avatar">

                <input name="profile_photo" type="file" onchange="loadFile(event)" />


                <span class="font-weight-bold"><?php echo $data->fname . ' ' . $data->lname ?></span>
                <span class="text-black-50"><?php echo $data->email ?></span>
            </div>

        </div>

        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">First Name</label><input type="text" class="form-control" name='fname' value="<?php echo $data->fname ?>"></div>
                    <div class="col-md-6"><label class="labels">Last Name</label><input type="text" class="form-control" value="<?php echo $data->lname ?>" name='lname'></div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Phone Number</label><input type="text" class="form-control" name='phone' value="<?php echo $data->phone ?>"></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="text" class="form-control" placeholder="enter email id" name='email' value="<?php echo $data->email ?>"></div>
                </div>

                <div class="row mt-3">

                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button" href="index.php?page=main&controller=register&action=index">Save Profile</button></div>
                </div>

            </div>

        </div>

    </div>

</div>

</div>



<?php include_once("/xampp/htdocs/Source_code/views/main/footer.php"); ?>