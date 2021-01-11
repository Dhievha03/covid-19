<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Hasil</title>
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
                        <h6 class="modal-title" id="exampleModalLabel">Terimakasih Telah Meluangkan Waktu Anda Untuk Mengisi Survey</h6>
                    </div>
                    <div class="modal-body">

                        <div class="row" style="text-align: center;">

                            @if($survey->ya<8)
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label id="status">Resiko Anda Tertular Covid-19</label>
                                    <label style="border-radius:5px;background-color:#43a047;width:80px;color:white;"> Rendah</label>
                                </div>
                            </div>
                            @elseif($survey->ya>7 & $survey->ya<15)
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label id="status">Resiko Anda Tertular Covid-19</label>
                                    <label style="border-radius:5px;background-color:#fdd835;width:80px;color:white;"> Sedang</label>
                                </div>
                            </div>
                            @elseif($survey->ya>14)
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label id="status">Resiko Anda Tertular Covid-19</label>
                                    <label  style="border-radius:5px;background-color:#e53935;width:80px;color:white;"> Tinggi</label>
                                </div>
                            </div>
                            @endif
                    </div>
                    <div class="modal-footer">
                        <a href="/"><button type="button" class="btn btn-danger">Close</button></a>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $('#exampleModal').modal('show');
        </script>

    </body>
</html>
