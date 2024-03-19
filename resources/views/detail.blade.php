@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<body>
    <body>
        <div class="konten">
            <div class="gambar">
                <img src="gambar.jpg" alt="Deskripsi gambar">
            </div>
    
            <!-- Paragraf -->
            <div class="content">
                <p>Ini adalah contoh paragraf.</p>
                <p><strong>Sumber:</strong> Verywell Health, Only My Health</p>
                <p><strong>Apa ciri-ciri penyakit jantung lemah?</strong></p>
                <p>Penyakit jantung lemah (kardiomiopati) menyebabkan berkurangnya aliran darah ke seluruh tubuh. Akibatnya, organ dan jaringan tidak mendapatkan pasokan oksigen dan nutrisi penting yang cukup, seperti yang dikutip dari Very Well Health.</p>
                <p>Dalam jantung yang sehat, darah dipompa dari sisi kanan jantung ke paru-paru untuk mengambil oksigen. Darah yang kaya oksigen kemudian mengalir dari paru-paru ke sisi kiri jantung, lalu dipompa ke seluruh tubuh. Ketika jantung lemah, sering kali jantung tidak dapat memompa darah secara efisien untuk memenuhi kebutuhan tubuh.</p>
                <p>Dikutip dari Only My Health, jantung yang lemah menyebabkan aliran darah yang tidak teratur dalam tubuh. Jika tidak diobati, gejala-gejalanya bisa bertambah buruk dan Anda mungkin harus menghadapi dampak buruk.</p>
                <p>Berikut hal yang umum terjadi sebagai ciri-ciri penyakit jantung lemah:</p>
                <ul>
                    <li>Detak jantung cepat: Ketika jantung lemah, organ ini berusaha mengimbanginya dengan memompa darah lebih cepat.</li>
                    <li>Sesak napas: Secara ilmiah dikenal sebagai dispnea, sering kali disertai rasa berat di dada.</li>
                    <li>Kurangnya energi: Orang yang memiliki jantung lemah mungkin juga kekurangan energi dalam tubuhnya.</li>
                    <li>Kembung: Kembung adalah gejala yang sangat umum dan bisa terjadi karena berbagai alasan pada penderita penyakit jantung lemah.</li>
                </ul>
                <p>Jika Anda memiliki ciri-ciri penyakit jantung lemah di atas, Anda perlu segera periksa ke dokter untuk memastikan diagnosisnya dan mendapatkan pengobatan yang tepat. Untuk diketahui, penyakit jantung lemak dapat disebabkan oleh kondisi seperti diabetes, penyakit jantung koroner, dan tekanan darah tinggi.</p>
            </div>
    
            <!-- Label untuk komentar -->
            <div class="form-komentar">
                <label for="komentar">Komentar:</label>
                <textarea id="komentar" name="komentar" rows="4" cols="50"></textarea>
            </div>
        </div>


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