@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<body>
    <div class="row">
        <div class="col-2">  
            <h1>Welcome</h1>
            <p>Get the latest inspiration from our team on new works 
                Find interesting stories, unique writing, and exclusive content.</p>
        </div>
        <div class="col-2">
            <img src="images/home.png" alt="">
        </div>
    </div>
{{-- Artikel --}}
    <section class="categories">
        <h4>Artikel</h4>
        <div class="line-with-border"></div>
            <div class="row">
                <div class="col-4">
                    <img src="images/jantung.png">
                    <h4>Apa Ciri-Ciri Penyakit Jantung Lemah? Berikut Penjelasannya</h4>
                    <h5>Penyakit jantung lemah (kardiomiopati) menyebabkan berkurangnya
                        aliran darah ke seluruh tubuh. Akibatnya, organ dan jaringan tidak 
                        mendapatkan pasokan oksigen dan nutrisi penting yang cukup,
                        seperti yang dikutip dari Very Well Health.
                    </h5>
                </div>
                <div class="col-4">
                    <img src="images/belimbing.jpeg">
                    <h4>Resep Jus Belimbing Jahe Kayu Manis,Minuman Rempang Untuk Tambah Imun</h4>
                    <h5>Menerapkan pola hidup sehat bisa dimulai dengan hal sederhana, misalnya mengonsumsi jus yang baik untuk kesehatan</h5>
                </div>
                <div class="col-4">
                    <img src="images/jalan.jpg">
                    <h4>7 Tips Wisata ke Lembah Purba, Beli Paket mulai Rp 50.000</h4>
                    <h5>Menerapkan pola hidup sehat bisa dimulai dengan hal sederhana, misalnya mengonsumsi jus yang baik untuk kesehatan.</h5>
                </div>
        </div>
    </section>

    {{-- Featured products --}}
    <section class="categories">
        <h4>Essai</h4>
        <div class="line-with-border"></div>
            <div class="row">
                <div class="col-4">
                    <img src="images/ojol.jpg">
                    <h4>Sering Diremehkan, Profesi Ojol Malah Menyelamatkan Pemuda Tamatan SMA</h4>
                    <h5>Dulu, profesi ojol sempat diremehkan banyak orang. Namun, profesi ini justru menyelamatkan pemuda tamatan SMA dari status pengangguran.
                    </h5>
                </div>
                <div class="col-4">
                    <img src="images/mcd.jpg">
                    <h4>McD Bukan Tempat Nugas yang Layak karena Warmindo dan Coffee Shop Lebih Masuk Akal. Benarkah?</h4>
                    <h5>Apakah benar, kalau McD itu tempat yang layak untuk nugas? Bukankah warmindo dan coffee shop lebih masuk akal buat mahasiswa? </h5>
                </div>
                <div class="col-4">
                    <img src="images/pusing.jpeg">
                    <h4>Pengalaman Menjadi Korban “Marketing Pemaksaan” Pedagang Pasar Tradisional yang Sempat Viral di Jogja</h4>
                    <h5>Trik pedagang di sebuah pasar tradisional Jogja itu sangat “jenius”. Saking jenius, calon pelanggan jadi sangat menyesal dan kapok datang lagi.</h5>
                </div>
        </div>
    </section>

    {{-- Offer section --}}
    <section class="offer">

    </section>

    {{-- Artist testimonial --}}
    <section class="testimonial">
        <div class="small-container">
            <h4>Puisi</h4>
            <div class="line-with-border"></div>
            <div class="row">
                <div class="col-4">
                    <img src="images/sapardi.jpg" alt="Sapardi Djoko Darmono">
                    <h4>Sapardi Djoko Darmono</h4>
                </div>
                
                <div class="col-4">
                    <img src="images/rendra.jpg" alt="Chairil Anwar">
                    <h4>W.S Rendra</h4>
                </div>

                <div class="col-4">
                    <img src="images/sapardi.jpg" alt="Sapardi Djoko Darmono">
                    <h4>Sapardi Djoko Darmono</h4>
                </div>
                    
                <div class="col-4">
                    <img src="images/rendra.jpg" alt="Chairil Anwar">
                    <h4>W.S Rendra</h4>
                </div>
            </div>
        </div>
    </section>

    {{-- JS script for toggle menu --}}
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight = "0px")
            {
                MenuItems.style.maxHeight ="200px";
            }
            else
            {
                MenuItems.style.maxHeight ="0px";
            }
        }
    </script>
</body>

    {{-- Footer --}}
{{-- <footer>
        <section class="footer">
            <div class="footer">
                <div class="foot-container">
                    <div class="row">
                        <div class="footer-col-2">
                            <img src="images/logo1.png" >
                            <p>StrayKids Everywhere All Around The World</p>
                        </div>
                        <div class="footer-col-4">
                            <h3>Follow Us</h3>
                            <ul>
                                <a href="https://twitter.com/zerenerene?t=ZTSMo42P0tDv1gEaa-AS0Q&s=09"li>Twitter</li>
                                    <br>
                                <a href="https://www.instagram.com/zrnee.bbyu__/?hl=id"li>Instagram</li>
                            </ul>    
                        </div>
                    </div>
                    <hr>
                    <p class="copyright">Copyright 2022 - Azarine Abbiyun</p>
                </div>
            </div>
        </section>
</footer> --}}

@endsection