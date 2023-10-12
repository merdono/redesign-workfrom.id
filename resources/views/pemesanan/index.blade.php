@extends('layouts.main')

@section('')

<section id="hero" class="text-center text-white">
    <div class="back-img">
    <h1 class="pt-5 pb-5">
        Telusuri dan pesan ruang acara yang tepat untuk setiap acara yang Anda
        bayangkan
    </h1>
    <div class="pt-5 d-flex bg-dark m-5">
        <div class="d-flex text-left ml-auto mx-auto mb-5">
        <div class="form-grup col-md-4">
            <label for="exampleInputPassword1">Tipe Acara</label>
            <select class="form-control">
            <option>Pilih penggunaan</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputPassword1">Domisili</label>
            <input
            type="password"
            class="form-control"
            id="exampleInputPassword1"
            placeholder="Masukan domisili"
            />
        </div>
        <div class="form-group col-md-4">
            <label for="validationCustom04">Kapasitas</label>
            <select class="custom-select" id="validationCustom04" required>
            <option selected disabled value="">Choose...</option>
            <option>...</option>
            </select>
        </div>
        <div class="col-md-2 align-self-end mb-3">
            <button class="btn custom-button">Login</button>
        </div>
        </div>
    </div>
    </div>
</section>

<section id="Card-loc">
    <div class="container">
    <div class="row">
        <div class="col-md-12 text-center pt-5 pb-5">
        <h1 class="text-white">
            Temukan ruang acara terbaik di seluruh Indonesia<span class="hl">
            Setiap Pekerjaan</span
            >
        </h1>
        <div class="row">
            <div class="col-md-3">
            <div class="card bg-dark text-white">
                <img src="img/image 21.png" class="card-img" alt="..." />
                <div class="card-img-overlay text-center">
                <h2 class="card-title">Jakarta</h2>
                </div>
            </div>
            </div>

            <div class="col-md-3">
            <div class="card bg-dark text-white">
                <img src="img/image 23.png" class="card-img" alt="..." />
                <div class="card-img-overlay text-center">
                <h2 class="card-title">Bandung</h2>
                </div>
            </div>
            </div>

            <div class="col-md-3">
            <div class="card bg-dark text-white">
                <img src="img/image 24.png" class="card-img" alt="..." />
                <div class="card-img-overlay text-center">
                <h2 class="card-title">Surabaya</h2>
                </div>
            </div>
            </div>

            <div class="col-md-3">
            <div class="card bg-dark text-white">
                <img src="img/image 25.png" class="card-img" alt="..." />
                <div class="card-img-overlay text-center">
                <h2 class="card-title">Medan</h2>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-12 pt-5">
            <button class="btn custom-button">Lihat Semua Lokasi</button>
        </div>
        </div>
    </div>
    </div>
</section>

<script
    src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"
></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"
></script>
<script src="scr/script.js"></script>

@endsection