    <style>
        body {
            width: 100%;
            height: 100%;
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

        .center {
            min-width: 28%;
            height: 20%;
            position: absolute;
            top: 75%;
            left: 40px;
            background-color: #FFFFFF;
            border-radius: 20px;
            z-index: 9;

        }

        .center2 {
            min-width: 28%;
            height: 20%;
            position: absolute;
            top: 75%;
            left: 413px;
            background-color: #FFFFFF;
            border-radius: 20px;
            z-index: 9;

        }

        .center3 {
            min-width: 28%;
            height: 20%;
            position: absolute;
            top: 75%;
            left: 788px;
            background-color: #FFFFFF;
            border-radius: 20px;
            z-index: 9;

        }

        .isi {
            height: 500px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-family: poppins;
        }

        /* .card {
            margin: 10px;
            height: 250px;
            border-top: 0px;
            box-shadow: 0 2px 2px 0px;
            margin-top: 0px;
            width: 25rem;
            border-radius: 20px 20px 20px 20px;
        } */

        .btn {
            border-radius: 5px 5px 5px 5px;
            background-color: white;
            border: none;
            color: black;
        }

        .atas {
            background-color: #150544;
            height: 140px;
            width: 235px;
            border-radius: 15px;
            margin-top: 2905px;
            z-index: 15;
            top: 75%;
            position: absolute;
            margin-left: 80px;
        }

        .bawah {
            background-color: #150544;
            height: 160px;
            width: 140px;
            border-radius: 15px;
            margin-top: 2545px;
            z-index: 15;
            top: 75%;
            position: absolute;
            margin-left: 450px;
        }

        @media (max-width:991px) {
            .brt-image {
                margin-left: 30%;
            }
        }

        .brt-content {
            margin-top: 25px;
        }

        /* css cuman buat biar ke tengah ajaa */
    </style>

    </head>

    <!-- HERO -->
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-12 mb-5">
                <div class="container">
                    <!-- <div class="col-12" style="background-color: #150544; height:100px; border-top-right-radius: 40px; border-bottom-right-radius: 40px; margin-right:110px; margin-top:80px;"> -->
                    <div class="row m-5" style="background-color: #150544; border-top-right-radius: 40px; border-bottom-right-radius: 40px;">
                        <div class="brt-image col-xs-3 col-sm-4 col-lg-4 col-xl-4 col-md-5 d-none d-sm-block">
                            <img class="img-fluid" src="<?php echo base_url() ?>assets/images/berita.png" style=" margin-top:-25px; margin-left :-120px;">
                        </div>
                        <div class="col-xs-9 col-sm-8 col-md-7 col-lg-8 col-xl-6 d-flex align-items-center">
                            <h1 style="font-family:poppins; color:white;">NEWS FOR YOU</h1>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="col-12">
                        <?php foreach ($buletin as $list) { ?>
                            <div class="card mb-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="<?php echo base_url('assets/images/berita/') . $list['image']; ?>" class="rounded-2 img-fluid card-img">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title" style=" font-size: 22px; font-family: poppins; "><b><?php echo $list['judul']; ?></b></h5>
                                            <p class="text-muted"><?php echo $list['tanggal']; ?></p>
                                            <?php
                                            $string    =    $list['ringkasan'];
                                            $string = (strlen($string) > 50) ? substr($string, 0, 200) . "... <a href='" . base_url('content/view/') . $list['id_brt'] . "'>Read More</a>" : $string;
                                            echo $string;
                                            ?>
                                            <!-- <p class="card-text"><?php echo $list['ringkasan']; ?></p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <?php echo $this->pagination->create_links() ?>
            </nav>
        </div>

    </div>

    </body>