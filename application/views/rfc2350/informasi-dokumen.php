<style>
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

    p {
        color: white;
        font-family: poppins;
        font-size: medium;
    }

    .isi {
        color: white;
        font-family: poppins;
        font-size: x-large;
    }

    @media (max-width:991px) {
        .bijak-image {
            left: 45%;
        }

        .bijak-content {
            text-align: justify;
        }

        .margin-title {
            margin-left: 100px;
        }
    }

    .margin-title {
        margin-left: 10%;
    }

    .text {
        color: white;
        font-family: poppins;
    }
</style>

</head>

<!-- MENU BAR -->

<body>


    <section class="section">
        <div class="container col-10 col-lg-9" style="background-color: #150544; min-height:110%; border-top-right-radius: 50px; margin-top:58px;">
            <div class="row">
                <div class="margin-title col-9 col-sm-6 col-lg-5" style="font-family:poppins; border-style: solid; padding: 15px; border-radius:20px; color:white; margin-top:35px;">
                    <h2 class="text-center">INFORMASI DOKUMEN</h2>
                </div>
            </div>
            <div class="row">
                <div class="tentang-image col-9 col-xs-6 col-sm-6 col-lg-6 col-xl-6">
                    <img class="img-fluid" src="<?php echo base_url() ?>assets/images/indok.png">
                </div>
                <div class="tentang-content col-xs-9 col-sm-8 col-md-7 col-lg-5 col-xl-6 text-left">
                    <h5 style="color: white; font-family:poppins; margin-bottom: 10%; margin-right :10%; margin-top:24px;">Dokumen ini berisi deskripsi INTI-CSIRT berdasarkan RFC 2350, yaitu informasi dasar mengenai INTI-CSIRT, menjelaskan tanggung jawab, layanan yang diberikan, dan cara untuk menghubungi INTI-CSIRT.<br>
                    </h5>
                    <br>

                    <!-- disini foreach nya -->

                    <?php foreach ($indok as $list) { ?>

                        <h3 style="color: white; font-family:poppins; margin-bottom: 5%; margin-right :10%;"><b><?php echo $list['no']; ?></b><?php echo $list['judul']; ?></h3>
                        <p style="color: white; font-family:poppins; margin-bottom: 10%; margin-right :10%;"><?php echo nl2br($list['isi']); ?></p>


                    <?php } ?>

                </div>
            </div>
        </div>
    </section>
    <section class="" style="height: 100px;">
        <div class="container">

        </div>
    </section>

</body>

</html>