<template>
    <div class="container">
        <div class="">
            <div class="center">
                <div class="container-fluid">
                    <form action="#" class="popup-form" id="myRegister" style="padding:5px;background:grey;border-radius:10px">
                        <div class="login_icon text-center"><i class="icon_lock_alt"></i></div>
                        <input type="text" class="form-control form-white" placeholder="Name" style="border-radius:10px">
                        <input type="text" class="form-control form-white" placeholder="Last Name" style="border-radius:10px">
                        <input type="email" class="form-control form-white" placeholder="Email" style="border-radius:10px">
                        <input type="text" class="form-control form-white" placeholder="Password" id="password1" style="border-radius:10px">
                        <input type="text" class="form-control form-white" placeholder="Confirm password" id="password2" style="border-radius:10px">
                        <div id="pass-info" class="clearfix"></div>
                        <div class="checkbox-holder text-left">
                            <div class="checkbox">
                                <input type="checkbox" value="accept_2" id="check_2" name="check_2">
                                <label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-submit">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>