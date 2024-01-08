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
           min-width: 26%;
           height: 20%;
           position: absolute;
           top: 75%;
           left: 40px;
           background-color: #FFFFFF;
           border-radius: 20px;
           z-index: 9;

       }

       .center2 {
           min-width: 26%;
           height: 20%;
           position: absolute;
           top: 75%;
           left: 413px;
           background-color: #FFFFFF;
           border-radius: 20px;
           z-index: 9;

       }

       .center3 {
           min-width: 26%;
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

       .card {
           margin: 10px;
           height: 250px;
           border-top: 0px;
           box-shadow: 0 2px 2px 0px;
           margin-top: 0px;
           width: 25rem;
           border-radius: 20px 20px 20px 20px;
       }

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


       /* css cuman buat biar ke tengah ajaa */
   </style>

   </head>

   <body>
       <!-- MENU BAR -->

       <section class="" style="width:100%; min-height: 3260px;">
           <h2 style="font-family:poppins; margin-top:60px; text-align:center;">Tips Membuat Strong Password</h2>
           <img src="<?php echo base_url() ?>assets/images/berita-3.jpg" style="width:45%; margin-top:60px; margin-left:26%;">

           <p style="font-family:poppins; margin-top:80px; margin-left:6%; font-size:20px;"><b>Beberapa tips membuat password yang kuat</b></p>

           <p style="font-family:poppins;  margin-left:6%; margin-top:20px;">Kata sandi (password) yang kuat hendaknya mudah Anda ingat tetapi sulit ditebak orang lain. Mari kita lihat beberapa hal penting untuk dipertimbangkan</p>
           <p style="font-family:poppins;  margin-left:6%; margin-top:-10px;">membuat password.</p>

           <ul>
               <li style="font-family:poppins;  margin-left:6%; margin-top:20px;">Jangan pernah menggunakan informasi pribadi Anda seperti nama, ulang tahun, username, atau alamat email. Informasi-informasi ini umumnya dapat<br>diakses publik, sehingga orang lain lebih mudah menebak password Anda.</li>
               <li style="font-family:poppins;  margin-left:6%;">Gunakan password yang panjang. Setidaknya panjang password minimal 6 digit, meskipun dapat lebih panjang untuk keamanan ekstra.</li>
               <li style="font-family:poppins;  margin-left:6%;">Jangan memakai password yang sama untuk semua akun Anda. Jika seseorang menemukan kata sandi pada satu akun Anda, maka akun-akun Anda<br>lainnya akan terancam.</li>
               <li style="font-family:poppins;  margin-left: 6%;">Gunakan kombinasi angka, simbol, huruf kapital dan kecil.</li>
               <li style="font-family:poppins;  margin-left: 6%;">Hindari menggunakan kata-kata yang dapat ditemukan di dalam kamus. Misalnya, berenang1 merupakan password yang lemah.</li>
               <li style="font-family:poppins;  margin-left: 6%;">Password acak adalah password yang terkuat. Jika Anda mengalami kesulitan membuat password acak ini, maka Anda dapat menggunakan aplikasi<br>
                   <a href="https://csirt.kemenkeu.go.id/in/post/peringatan-keamanan-kerentanan-zero-day-pada-apache-java-logging-library-log4j">password generator</a>
               </li>
           </ul>

           <p style="font-family:poppins; margin-top:6%; margin-left:11%; font-size:20px;"><b>Beberapa kesalahan password pada umumnya</b></p>

           <p style="font-family:poppins; margin-left: 6%; margin-top:20px;">Pada umumnya, password yang dibuat mengandung unsur nama keluarga, hobi, atau pola sederhana lainnya. Password ini memang mudah diingat, <br>tetapi kurang aman. Mari kita pelajari beberapa kesalahan password pada umumnya dan bagaimana cara memperbaikinya.</p>
           <img src="<?php echo base_url() ?>assets/images/password1.png" style="width:50%; margin-top:40px; margin-left:26%;">
           <p style="font-family:poppins; margin-left: 6%; margin-top:50px;">Permasalahan : kata sandi ini menggunakan informasi pribadi terlalu banyak bersamaan dengan kata-kata umum yang bisa ditemukan dalam kamus.</p>
           <p style="font-family:poppins; margin-left: 6%; margin-top:20px;">Solusi : Kombinasi password yang kuat menggunakan simbol-simbol, huruf-huruf kapital, dan susunan yang acak. Anda dapat membuat kombinasi<br>password dari judul film dan jenis makanan. Misalnya, Chewbacca dan pizza dapat dikombinasikan menjadi chEwbAccAp!ZZa</p>
           <img src="<?php echo base_url() ?>assets/images/password2.png" style="width:50%; margin-top:40px; margin-left:26%;">
           <p style="font-family:poppins; margin-left: 6%; margin-top:50px;">Permasalahan : Password ini hanya terdiri dari lima digit, maka password ini terlalu singkat. Password ini juga terdiri dari beberapa bagian huruf dari<br>alamatnya, yang dapat diakses publik.</p>
           <p style="font-family:poppins; margin-left: 6%; margin-top:20px;">Solusi : Password yang kuat idealnya sepanjang 10 digit. Nama jalan dari alamat sebenarnya bisa diganti dengan nama jalan lainnya. Misalnya, Pemberly<br>Ave dapat dikombinasikan menjadi p3MberLY%Av.</p>
           <img src="<?php echo base_url() ?>assets/images/password3.png" style="width:50%; margin-top:40px; margin-left:26%;">
           <p style="font-family:poppins; margin-left: 6%; margin-top:50px;">Permasalahan : Pola seperti ini memang mudah diingat, namun juga mudah ditebak oleh hacker yang mencoba mengakses akun Anda.</p>
           <p style="font-family:poppins; margin-left: 6%; margin-top:20px;">Solusi : Ingatlah bahwa password yang disusun acak lebih kuat dari pola yang sederhana di atas. Jika Anda mengalami kesulitan membuat password baru,<br>cobalah menggunakan aplikasi password generator. Berikut ini adalah contoh password yang dihasilkan dari aplikasi password manager : #eV$pIg&qf</p>
           <img src="<?php echo base_url() ?>assets/images/password4.png" style="width:50%; margin-top:40px; margin-left:26%;">
           <p style="font-family:poppins; margin-left: 6%; margin-top:50px;">Permasalahan : Tidak ada yang salah dengan password atau cara Anda ini, tetapi ingatlah sebaiknya Anda tidak menggunakan password yang sama<br>pada akun yang berbeda.</p>
           <p style="font-family:poppins; margin-left: 6%; margin-top:20px;">Solusi : Buatlah kombinasi password yang unik untuk setiap akun Anda.</p>

           <p style="font-family:poppins; margin-top:6%; margin-left:11%; font-size:20px;"><b>Menggunakan aplikasi pengelola password (password manager)</b></p>

           <p style="font-family:poppins; margin-left: 6%; margin-top:20px;">Anda dapat menggunakan aplikasi password manager untuk menyimpan password Anda dengan aman daripada menulisnya di kertas yang rentan<br>hilang atau dicuri. Aplikasi password manager dapat mengingat dan mengisikan password-password Anda pada website yang berbeda-beda, sehingga<br>Anda tidak perlu mengingatnya lagi. Contoh-contoh aplikasi password manager yaitu LastPass , 1Password , dan password manager pada aplikasi<br><a href="https://support.google.com/chrome/answer/95606?hl=en">Google Chrome</a>.</p>
           <img src="<?php echo base_url() ?>assets/images/password5.png" style="width:50%; margin-top:40px; margin-left:26%;">
           <p style="font-family:poppins; margin-left: 6%; margin-top:50px;">Ini adalah sebuah contoh password atau kata sandi yang kuat. Kata sandi ini panjang dan sulit ditebak. Menggunakan lebih dari 10 karakter kombinasi<br>huruf (huruf kapital dan kecil), angka-angka, dan simbol-simbol, serta tidak menggunakan kata-kata umum atau informasi pribadi. Password ini rumit jika<br>diingat tanpa menggunakan aplikasi password manager dimana aplikasi ini bermanfaat untuk membuat kata sandi yang kuat.</p>
           <p style="font-family:poppins; margin-left: 6%; margin-top:20px;">Sumber: https://edu.gcfglobal.org/en/tr_id-internet-safety/membuat-kata-sandi-password-yang-kuat/1/</p>
           <button type="submit" class="btn btn-labeled" style="background-color: #150544; color:white; font-family: poppins; height:55px; margin-top:100px; margin-left:72%">
               <a href="<?php echo base_url('Content/berita2') ?>" style="color: white;">Kerentanan Zero-day Windows 11<span class="btn-label"><i class="fa fa-chevron-right"></i></span></button>
       </section>
       <section class="" style="height: 100px;">
           <div class="container">

           </div>
       </section>