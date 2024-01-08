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
</style>

</head>

<!-- MENU BAR -->

<body>


    <section class="section">
        <div class="container col-10 col-lg-9" style="background-color: #150544; min-height:110%; border-top-right-radius: 50px; margin-top:58px;">
            <div class="row">
                <div class="margin-title col-6 col-sm-4 col-lg-3" style="font-family:poppins; border-style: solid; padding: 15px; border-radius:20px; color:white; margin-top:35px; height:70px;">
                    <h2 class="text-center">KEBIJAKAN</h2>
                </div>
            </div>
            <div class="row">
                <div class="bijak-image col-9 col-xs-6 col-sm-6 col-lg-6 col-xl-6">
                    <img class="img-fluid" src="<?php echo base_url() ?>assets/images/kebijakan.png">
                </div>
                <div class="bijak-content col-xs-9 col-sm-8 col-md-7 col-lg-5 col-xl-6 text-left">
                    <h5 style="color: white; font-family:poppins; margin-bottom: 10%; margin-right :10%; margin-top:24px;">INTI-CSIRT Akan Membantu Konstituen Untuk Melakukan Penanggulangan Dan Pemulihan Insiden Keamanan Siber Di Lingkungan PT INTI (Persero) Dengan Aspek-Aspek Manajemen Insiden Keamanan Siber Berikut :</h5>
                    <h3 class="isi"><b>1.</b> Jenis-jenis Insiden dan Tingkat/Level Dukungan</h3>
                    <p>INTI-CSIRTmemiliki otoritas untuk menangani insiden yaitu :
                        <br>1. Web Defacement;
                        <br>2. DDOS;
                        <br>3. Malware;
                        <br>4. Phising;
                        <br>Dukungan yang diberikan oleh INTI-CSIRT kepada konstituen dapat bervariasi bergantung dari jenis dan dampak insiden.
                    </p>
                    <h3 class="isi"><b>2.</b> Kerja sama, Interaksi dan Pengungkapan Informasi/data</h3>
                    <p>INTI-CSIRT akan melakukan kerjasama dan berbagi informasi dengan CSIRT atau organisasi lainnya dalam lingkup keamanan siber. Seluruh informasi yang diterima oleh INTI-CSIRT akan dirahasiakan.</p>
                    <h3 class="isi"><b>3.</b> Komunikasi dan Autentikasi</h3>
                    <p>Untuk komunikasi biasa INTI-CSIRT dapat menggunakan alamat e-mail tanpa enkripsi data (e-mail konvensional) dan telepon. Namun, untuk komunikasi yang memuat informasi sensitif/terbatas/rahasia dapat menggunakan enkripsi PGP pada e-mail.</p>
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