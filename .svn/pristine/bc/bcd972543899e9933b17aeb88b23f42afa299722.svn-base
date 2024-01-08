<style>
    h5,
    h4 {
        font-family: poppins;
        text-align: left;
        color: white;
        margin-left: 430px;
        margin-top: 5px;
    }

    h1 {
        font-family: poppins;
        color: white;
        margin-left: 130px;
        margin-top: 60px;
    }

    footer {
        height: 100px;
        background-color: #150544;
        color: white;
        font-family: poppins;
        text-align: center;
        border-radius: 5px;
    }

    .carousel-inner {
        border-radius: 20px;
    }

    .carousel-item {
        margin-top: 50px;
    }

    .carousel-item img {
        left: 0;
        min-width: 100%;
        height: 474px;
        border-radius: 50px;
    }

    .left {
        min-width: 30%;
        height: 50%;
        position: absolute;
        top: 35%;
        left: -2%;
        background-color: #150544;
        border-radius: 20px;
        z-index: 9;
    }

    @media (max-width:991px) {
        .dokpen-image {
            margin-left: 40%;
        }

        .dokpen-content {
            margin-left: 10%;
            text-align: justify;
        }

        .margin-title {
            margin-left: 100px;
        }
    }


    .margin-title {
        margin-left: 60px;
    }
</style>

</head>

<!-- MENU BAR -->

<!-- HERO -->
<section class="section" style="word-break:break-all">
    <div class="container col-10 col-lg-9" style="background-color: #150544; border-top-right-radius: 50px; margin-top:58px; ">
        <div class="row">
            <div class="margin-title col-8 col-xl-4 col-xl-6" style="border-style: solid; border-radius:20px; color:white; margin-top:35px; font-family:poppins; padding:10px;">
                <h2 class="text-center">DOKUMEN LEGAL PENDUKUNG</h2>
            </div>
        </div>
        <div class="row">
            <div class="dokpen-image col-9 col-xs-6 col-sm-6 col-lg-6 col-xl-6">
                <img class="img-fluid" src="<?php echo base_url() ?>assets/images/dokpen.png" style="margin-left: -100px;">
            </div>
            <div class="dokpen-content col-10 col-xs-10 col-sm-8 col-md-7 col-lg-5 col-xl-6 text-left">
                <div class="" style="color: white; font-family:poppins; margin-bottom: 10%; margin-right :10%; margin-top:17%; font-size:25px;">
                    <?php foreach ($dokpen as $list) { ?>
                        <?php echo $list['judul']; ?></a><a href="<?php echo base_url('assets/dokpen/') . $list['isi']; ?>" target="_blank" style="color: white; font-family:poppins; word-break:break-all;">
                            <p>DETAIL</p>
                        </a><br>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="" style="height: 180px;">
    <div class="container">

    </div>
</section>

</body>

</html>