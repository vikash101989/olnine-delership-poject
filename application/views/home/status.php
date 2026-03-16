<div class="styles_container__fIlej">
    <div class="styles_images__3Sj_C">
        <div class="styles_image_container__084n5">
            <div class="styles_blur_circle__MzOxD styles_right_circle__H9O_G"></div><img alt="Valmo truck image"
                loading="lazy" width="650" height="500" decoding="async" data-nimg="1" style="color:transparent"
                src="<?php echo base_url('assets'); ?>/vadmin/img/truck_image_desktop.png" />
        </div>
    </div>
    <div class="styles_blur_circle__MzOxD styles_bottom_circle__aas6J"></div>
    <div class="styles_card_container__CtIBM">

        <div class="styles_mobile_image__RqBVp">
            <div class="styles_mobile_truck__132XJ"><img alt="Valmo truck image" loading="lazy" decoding="async"
                    data-nimg="fill" class="styles_img_truck__2EWQ_"
                    style="position:absolute;height:100%;width:100%;left:13px;top:0;right:0;bottom:0;color:transparent"
                    sizes="100vw" src="<?php echo base_url('assets'); ?>/vadmin/img/truck_image_desktop.png" /></div>
        </div>
        <div class="styles_card_div__LDbSM">
            <div class="styles_blur_circle__MzOxD styles_left_circle__o3cr_"></div>
            <div class="styles_card__gBonw">
                <div class="styles_card__CJKUQ">
                    <h3>Check Your Status</h3>
                    <?php if (validation_errors()): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <?php
                    $errmsg = $this->session->flashdata('errormsg');
                    if (!empty($errmsg)): ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5 class="text-center">
                                <?php echo $errmsg; ?>
                            </h5>
                        </div>
                    <?php endif; ?>
                    <?php $msg = $this->session->flashdata('successmsg');
                    if (!empty($msg)): ?>
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5 class="text-center">
                                <?php echo $msg; ?>
                            </h5>
                        </div>
                    <?php endif; ?>


                    <form method="post" id="check_id" action="<?php echo base_url('home/welcome'); ?>">
                        <input type="text" name="app_id" placeholder="Enter Approval Number *" required /><br><br>
                        <input type="tel" name="mobile" placeholder="Enter Mobile Number *" required />
                        <div class="styles_error__aXb_b"></div>
                        <div class="styles_button_div__lxNnF">
                            <button
                                class="styles_button__slVGb styles_primary__iQFwH styles_lg__CvVR_  styles_track_button__abbct"
                                type="submit" button-attr="default" name="status_submit">Check Status</button>
                        </div>
                    </form>
                    <div class="styles_stroke__edGG3"></div><span class="styles_card_footer_heading__y_QOA">Can&#x27;t
                        Find Your confirmation Details?</span>
                    <p class="styles_card_footer_subtext__unJPM">For your account password contact your support team.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>