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
        .kebijakan-image {
            margin-left: 30%;
        }

        .profil-content {
            left: 10%;
            text-align: justify;
        }

        .margin-title {
            margin-left: 100px;
        }
    }

    .margin-title {
        margin-left: 10%;
    }
</style>

</head>

<!-- MENU BAR -->

<!-- HERO -->
<section class="section">
    <div class="container col-10 col-lg-9" style="background-color: #150544; border-top-right-radius: 50px; margin-top:58px;">
        <!-- <div class="row">
            <div class="margin-title col-6 col-sm-6 col-lg-4" style="border-style: solid; padding: 15px; border-radius:20px; color:white; margin-left: 20%; margin-top:35px; font-family:poppins;">
                <h2 class="text-center">Alamat Pelaporan</h2>
            </div>
        </div> -->
        <div class="row">
            <div class="margin-title col-9 col-sm-6 col-lg-5" style="font-family:poppins; border-style: solid; padding: 15px; border-radius:20px; color:white; margin-top:35px;">
                <h2 class="text-center">ALAMAT PELAPORAN</h2>
            </div>
        </div>

        <div class="row">
            <div class="kebijakan-image col-9 col-xs-6 col-sm-6 col-lg-6 col-xl-6 ">
                <img class="img-fluid" src="<?php echo base_url() ?>assets/images/kebijakan.png" style="margin-left: -100px;">
            </div>

            <div class="profil-content col-xs-10 col-sm-8 col-md-7 col-lg-5 col-xl-6 text-left">
                <h4 class="" style="color: white; font-family:poppins; margin-bottom: 10%; margin-right :10%; margin-left:-6px; margin-top:50px;">Laporan Insiden Keamanan Siber Dapat Dikirimkan Melalui</h4>

                <p class="" style="color: white; font-family:poppins; margin-bottom: 10%; margin-right :10%;">EMAIL</p>
                <h3 class="" style="color: white; font-family:poppins; margin-bottom: 10%; margin-right :10%;">csirt[at]inti.co.id</h3>

                <p class="" style="color: white; font-family:poppins; margin-bottom: 10%; margin-right :10%;">TELEPHONE</p>
                <h3 class="" style="color: white; font-family:poppins; margin-bottom: 10%; margin-right :10%;">(022) 5201-501</h3>
            </div>
        </div>
    </div>
</section>
<section class="col-lg-12" style="height: 180px;">
    <div class="container">

    </div>
</section>
</body>

</html>