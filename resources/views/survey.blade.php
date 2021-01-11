<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Kuisioner</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
        <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/f38b57ad54.js" crossorigin="anonymous"></script>
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    </head>

    <style>

        .card-body label {
            font-size: 17px;
        }

        .card-body input {
            margin-left: 20px;
        }
    </style>

    <body>
        <nav class="navbar navbar-expand-lg" style="background-color:#00b7c3">
            <a class="navbar-brand" href="/">
                <img src="assets/logo.png" width="200" height="61">
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
                style="color: white;">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        </nav>

        @if ($errors->any())
        <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Whoops</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Tolong Isi Semua Pertanyaan !
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $('#exampleModal').modal('show');
        </script>

        @endif

        <form
            action="{{ route('survey.store') }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="container">
                    <div class="card" style="margin-top:100px;">
                        <div class="card-header" style="background-color:#ffc107;color:white;">
                            <h4>A. Potensi Tertular Diluar Rumah</h4>
                        </div>

                        <div class="card-body">
                            <label>1. Saya pergi keluar rumah</label><br>
                            <label><input type="radio" name="t1" value="1">
                                Ya</label><br>
                            <label><input type="radio" name="t1" value="0">
                                Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>2. Saya pergi keluar rumah Saya menggunakan transportasi umum : online,
                                angkot, bus, taksi, kereta api</label><br>
                            <label><input type="radio" name="t2" value="1">
                                Ya</label><br>
                            <label><input type="radio" name="t2" value="0">
                                Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>3. Saya tidak memakai masker pada saat berkumpul dengan orang lain</label><br>
                            <label><input type="radio" name="t3" value="1">
                                Ya</label><br>
                            <label><input type="radio" name="t3" value="0">
                                Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>4. Saya berjabat dengan orang lain</label><br>
                            <label><input type="radio" name="t4" value="1">
                                Ya</label><br>
                            <label><input type="radio" name="t4" value="0">
                                Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>5. Saya tidak membersihkan tangan dengan hand sanitizer / tissue basah
                                sebelum pegang kemudi mobil/motor</label><br>
                            <label><input type="radio" name="t5" value="1">
                                Ya</label><br>
                            <input type="radio" name="t5" value="0">
                            <label for="">Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>6. Saya menyentuh benda / uang juga yang disentuh oleh orang lain</label><br>
                            <input type="radio" name="t6" value="1">
                            <label for="">Ya</label><br>
                            <input type="radio" name="t6" value="0">
                            <label for="">Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>7. Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika: belanja,
                                bekerja, belajar, ibadah</label><br>
                            <input type="radio" name="t7" value="1">
                            <label for="">Ya</label><br>
                            <input type="radio" name="t7" value="0">
                            <label for="">Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>8. Saya makan diluar rumah (warung / restaurant)</label><br>
                            <input type="radio" name="t8" value="1">
                            <label for="">Ya</label><br>
                            <input type="radio" name="t8" value="0">
                            <label for="">Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>9. Saya tidak minum hangat & cuci tangan dengan sabun setelah tiba di tujuan</label><br>
                            <input type="radio" name="t9" value="1">
                            <label for="">Ya</label><br>
                            <input type="radio" name="t9" value="0">
                            <label for="">Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>10. Saya berada di wilayah kelurahan tempat pasien tertular</label><br>
                            <input type="radio" name="t10" value="1">
                            <label for="">Ya</label><br>
                            <input type="radio" name="t10" value="0">
                            <label for="">Tidak</label>
                        </div>
                        <div class="card-footer"></div>
                    </div>

                    <div class="card" style="margin-top:100px;">
                        <div class="card-header" style="background-color:#00b7c3;color:white;">
                            <h4>B. Potensi Tertular Didalam Rumah</h4>
                        </div>

                        <div class="card-body">
                            <label>11. Saya tidak pasang hand sanitizer di depan pintu masuk, untuk
                                bersihkan tangan sebelum pegang gagang (handle) pintu masuk rumah</label><br>
                            <input type="radio" name="t11" value="1">
                            <label for="">Ya</label><br>
                            <input type="radio" name="t11" value="0">
                            <label for="">Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>12. Saya tidak mencuci tangan dengan sabun setelah tiba di rumah</label><br>
                            <input type="radio" name="t12" value="1">
                            <label for="">Ya</label><br>
                            <input type="radio" name="t12" value="0">
                            <label for="">Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>13. Saya tidak menyediakan : tisu basah/antiseptic, masker, sabun
                                antiseptic bagi keluarga di rumah</label><br>
                            <input type="radio" name="t13" value="1">
                            <label for="">Ya</label><br>
                            <input type="radio" name="t13" value="0">
                            <label for="">Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>14. Saya tidak segera merendam baju & celana bekas pakai di luar rumah
                                kedalam air panas/sabun</label><br>
                            <input type="radio" name="t14" value="1">
                            <label for="">Ya</label><br>
                            <input type="radio" name="t14" value="0">
                            <label for="">Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>15. Saya tidak segera mandi keramas setelah saya tiba di rumah</label><br>
                            <input type="radio" name="t15" value="1">
                            <label for="">Ya</label><br>
                            <input type="radio" name="t15" value="0">
                            <label for="">Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>16. Saya tidak mensosialisasikan checklist penilaian resiko pribadi ini
                                kepada keluarga di rumah</label><br>
                            <input type="radio" name="t16" value="1">
                            <label for="">Ya</label><br>
                            <input type="radio" name="t16" value="0">
                            <label for="">Tidak</label>
                        </div>
                        <div class="card-footer"></div>
                    </div>

                    <div class="card" style="margin-top:100px;">
                        <div class="card-header" style="background-color:#ffc107;color:white;">
                            <h4>C. Daya Tahan Tubuh (Imunitas)</h4>
                        </div>

                        <div class="card-body">
                            <label>17. Saya dalam sehari tidak kena cahaya matahari minimal 15 menit</label><br>
                            <input type="radio" name="t17" value="1">
                            <label for="">Ya</label><br>
                            <input type="radio" name="t17" value="0">
                            <label for="">Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>18. Saya tidak jalan kaki / berolah raga minimal 30 menit setiap hari</label><br>
                            <input type="radio" name="t18" value="1">
                            <label for="">Ya</label><br>
                            <input type="radio" name="t18" value="0">
                            <label for="">Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>19. Saya jarang minum vitamin C & E, dan kurang tidur</label><br>
                            <input type="radio" name="t19" value="1">
                            <label for="">Ya</label><br>
                            <input type="radio" name="t19" value="0">
                            <label for="">Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>20. Usia saya diatas 60 tahun</label><br>
                            <input type="radio" name="t20" value="1">
                            <label for="">Ya</label><br>
                            <input type="radio" name="t20" value="0">
                            <label for="">Tidak</label>
                        </div>

                        <div class="card-body">
                            <label>21. Saya mempunyai penyakit : jantung/diabetes/gangguan pernafasan kronik</label><br>
                            <input type="radio" name="t21" value="1">
                            <label for="">Ya</label><br>
                            <input type="radio" name="t21" value="0">
                            <label for="">Tidak</label>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success" style="float:right;">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <br>
        <br>
        <br>
        <footer>
            <div style="text-align:center;background-color:#263238;padding:10px">
                <p style="margin-top:25px;color:#fff;">Arya Dhievha Rusdiana</p>
                <p style="color:#fff">RPL XI - 3</p>
            </div>
        </footer>
    </body>
</html>
