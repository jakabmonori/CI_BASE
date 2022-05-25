<!-- Footer beginning -->

<footer>

    <div class="container-fluid headline py-3 d-flex flex-row flex-wrap">
        <div class="container container-custom my-auto">
            <div class="d-flex flex-row justify-content-evenly flex-wrap">
                <div class="d-flex flex-row flex-wrap">
                    <div class="headlogoicon ">
                        <img alt="dr. Gálosi parodontológia logo" src="<?php echo base_url('/assets/img/logo.png') ?>">
                    </div>
                    <div class="headlogotext ">
                        <span class="headlogotextname">DR.GÁLOSI</span>
                        <br>
                        PARADONTOLÓGIA
                    </div>
                </div>
                <div class="d-none d-sm-block">
                    <br><br>
                </div>
                <div class="headitems d-flex flex-row" style="font-size: 13px !important; ">
                    <div class=" d-flex flex-row my-auto ms-2">
                        <a href="https://goo.gl/maps/wojrEwGbxkbhX8NB8" target="_blank" style="color: white;">
                            <div class="headlocationicon my-auto">
                                <img alt="dr. Gálosi parodontológia cím" src="<?php echo base_url('/assets/img/icons/foot-location-icon.png') ?>">
                            </div>
                            <div class="headlocation float-end d-none d-lg-flex ms-2">
                                <?php echo $elerhetosegek[0]['cim'] ?>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex flex-row my-auto ms-3">
                        <a href="tel:06303860099" style="color: white;">
                            <div class="headlocationicon my-auto">
                                <img alt="dr. Gálosi parodontológia telefonszám" src="<?php echo base_url('/assets/img/icons/foot-phone-icon.png') ?>">
                            </div>
                            <div class="headlocation float-end d-none d-lg-flex ms-2">
                                Telefonszám:
                                <br>
                                <?php echo $elerhetosegek[0]['telefon'] ?>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex flex-row my-auto ms-3">
                        <a href="mailto:info@jofog.hu" style="color: white;">
                            <div class="headlocationicon my-auto">
                                <img alt="dr. Gálosi parodontológia cím" src="<?php echo base_url('/assets/img/icons/foot-email-icon.png') ?>">
                            </div>
                            <div class="headlocation float-end d-none d-lg-flex ms-2">
                                Email:<br>
                                <?php echo $elerhetosegek[0]['email'] ?>
                            </div>
                        </a>
                    </div>
                    <div class="d-flex flex-row my-auto ms-3">
                        <a href="<?php echo $elerhetosegek[0]['facebook'] ?>" target="_blank" style="color: white;">
                            <div class="headlocationicon my-auto">
                                <img alt="dr. Gálosi parodontológia cím" src="<?php echo base_url('/assets/img/icons/foot-fb-icon.png') ?>">
                            </div>
                        </a>
                    </div>
                    <div class="d-flex flex-row my-auto ms-3">
                        <a href="<?php echo $elerhetosegek[0]['instagram'] ?>" target="_blank" style="color: white;">
                            <div class="headlocationicon my-auto">
                                <img alt="dr. Gálosi parodontológia cím" src="<?php echo base_url('/assets/img/icons/foot-insta-icon.png') ?>">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


<!-- Footer end -->

</body>
</html>