@extends('layouts.main')

@section('')

<section id="hero" class="text-center text-white">
    <div class="col-md-6 mx-auto">
        <h6 class="pt-5">Office & Coworking Space</h6>
        <h1 class="pt-3">
            Temukan Ruangan untuk<span class="hl"
                >Setiap Pekerjaan</span
            >
        </h1>
        <h6 class="mx-auto pt-4 pb-5">
            Dengan berbagai pilihan ruangan yang dapat disesuaikan
            dengan kebutuhan Anda, kami akan membantu Anda mencari
            ruangan kerja yang sesuai dengan anggaran dan kebutuhan
            Anda. Temukan ruangan kerja Anda sekarang dan tingkatkan
            produktivitas kerja Anda!
        </h6>
    </div>
    <img src="img/Group-11608.png" alt="" class="img-fluid" />
</section>

<section id="kebutuhan" class="bg-light text-center text-black">
    <div class="mx-auto pb-5 text-center">
        <h1 class="pt-5">
            Sesuaikan dengan <span class="hl">Kebutuhan</span>
        </h1>
        <div class="pt-4">
            <button
                class="btn custom-button1 custom-but-width mr-3"
                data-target="eventDiv"
            >
                Event
            </button>
            <button
                class="btn custom-button1 custom-but-width mr-3"
                data-target="meetingDiv"
            >
                Meeting
            </button>
            <button
                class="btn custom-button1 custom-but-width mr-3"
                data-target="photoShootDiv"
            >
                Photo Shoot
            </button>
            <button
                class="btn custom-button1 custom-but-width mr-3"
                data-target="videoShootDiv"
            >
                Video Shoot
            </button>
        </div>
        <div id="eventDiv" class="pt-5 d-none">
            <p class="pb-5">
                Rayakan perayaan dan acara terbaik dengan tempat pilihan
                terbaik dan akses lebih mudah.
            </p>
            <img
                src="img/image 7.png"
                alt=""
                class="d-flex mx-auto pb-5"
            />
            <button class="btn custom-button custom-but-width mr-3">
                Book Now
            </button>
        </div>
        <div id="meetingDiv" class="pt-5 d-none">
            This is the content for Meeting.
        </div>
        <div id="photoShootDiv" class="pt-5 d-none">
            This is the content for Photo Shoot.
        </div>
        <div id="videoShootDiv" class="pt-5 d-none">
            This is the content for Video Shoot.
        </div>
    </div>
</section>

<!-- <section class="cust-own">
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 custom-column">
            <a href="#link1" class="d-block">
                <div class="text-center text-white">
                    <h1>For Customer</h1>
                </div>
            </a>
        </div>
        <div class="col-md-6 custom-column1">
            <a href="#link2" class="d-block">
                <div class="text-center text-white">
                    <h1>For Building Owner</h1>
                </div>
            </a>
        </div>
    </div>
</div>
</section> -->

<section class="cust">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 custom-column">
                <a href="#link1" class="d-block"> </a>
            </div>
            <div
                class="col-md-6 text-center d-flex flex-column align-items-center justify-content-center"
            >
                <div
                    class="col-md-9 d-flex flex-column align-items-center justify-content-center"
                >
                    <h1>
                        Space Terbaik untuk Semua Tim dan Pekerjaan Anda
                    </h1>
                    <h6 class="pt-4 pb-4">
                        Dengan berbagai pilihan ruangan yang dapat
                        disesuaikan dengan kebutuhan Anda, kami akan
                        membantu Anda mencari ruangan kerja yang sesuai
                        dengan anggaran dan kebutuhan Anda. Temukan
                        ruangan kerja Anda sekarang dan tingkatkan
                        produktivitas kerja Anda!
                    </h6>
                    <button class="btn custom-button custom-but-width">
                        Book Now
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="owner">
    <div class="container-fluid">
        <div class="row">
            <div
                class="col-md-6 text-center d-flex flex-column align-items-center justify-content-center"
            >
                <div
                    class="col-md-9 d-flex flex-column align-items-center justify-content-center"
                >
                    <h1>
                        Space Terbaik untuk Semua Tim dan Pekerjaan Anda
                    </h1>
                    <h6 class="pt-4 pb-4">
                        Dengan berbagai pilihan ruangan yang dapat
                        disesuaikan dengan kebutuhan Anda, kami akan
                        membantu Anda mencari ruangan kerja yang sesuai
                        dengan anggaran dan kebutuhan Anda. Temukan
                        ruangan kerja Anda sekarang dan tingkatkan
                        produktivitas kerja Anda!
                    </h6>
                    <button class="btn custom-button custom-but-width">
                        Book Now
                    </button>
                </div>
            </div>
            <div class="col-md-6 custom-column1">
                <a href="#link1" class="d-block"> </a>
            </div>
        </div>
    </div>
</section>

<section id="FAQ">
    <div class="ml-5 pt-5 pb-5">
        <h1>Frequently Asked Question</h1>
        <a
            class="d-flex"
            data-toggle="collapse"
            href="#collapseExample"
            role="button"
            aria-expanded="false"
            aria-controls="collapseExample"
        >
            <div class="d-flex faq-columns mt-3">
                <p class="mt-3 ml-5">Apa Itu Workfrom?</p>
                <button class="ml-auto mr-3 mt-1 rounded-circle">
                    <img src="img/Vector 205.png" alt="" />
                </button>
            </div>
        </a>
        <div class="collapse" id="collapseExample">
            <div class="faq-columns1 ml-3">
                Some placeholder content for the collapse component.
                This panel is hidden by default but revealed when the
                user activates the relevant trigger.
            </div>
        </div>
        <a
            class="d-flex"
            data-toggle="collapse"
            href="#collapseExample1"
            role="button"
            aria-expanded="false"
            aria-controls="collapseExample1"
        >
            <div class="d-flex faq-columns mt-3">
                <p class="mt-3 ml-5">
                    Fasilitas apa saja yang ditawarkan?
                </p>
                <button class="ml-auto mr-3 mt-1 rounded-circle">
                    <img src="img/Vector 205.png" alt="" />
                </button>
            </div>
        </a>
        <div class="collapse" id="collapseExample1">
            <div class="faq-columns1 ml-3">
                Some placeholder content for the collapse component.
                This panel is hidden by default but revealed when the
                user activates the relevant trigger.
            </div>
        </div>
        <a
            class="d-flex"
            data-toggle="collapse"
            href="#collapseExample3"
            role="button"
            aria-expanded="false"
            aria-controls="collapseExample3"
        >
            <div class="d-flex faq-columns mt-3">
                <p class="mt-3 ml-5">
                    Apakah buka di akhir pekan dan hari libur?
                </p>
                <button class="ml-auto mr-3 mt-1 rounded-circle">
                    <img src="img/Vector 205.png" alt="" />
                </button>
            </div>
        </a>
        <div class="collapse" id="collapseExample3">
            <div class="faq-columns1 ml-3">
                Some placeholder content for the collapse component.
                This panel is hidden by default but revealed when the
                user activates the relevant trigger.
            </div>
        </div>
    </div>
</section>

<section id="form" class="text-center">
    <fieldset class="ml-3 mr-3">
        <legend><h1>Pesan Ruangan Sekarang</h1></legend>
        <div class="row m-5">
            <div class="col-md-6 text-left">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input
                            type="email"
                            class="form-control"
                            id="exampleInputEmail1"
                            aria-describedby="emailHelp"
                            placeholder="Enter your name"
                        />
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input
                            type="password"
                            class="form-control"
                            id="exampleInputPassword1"
                            placeholder="Enter your email"
                        />
                    </div>
                    <div class="form-grup">
                        <label for="exampleInputPassword1"
                            >Tipe Acara</label
                        >
                        <select class="form-control">
                            <option>Please select</option>
                        </select>
                    </div>
                    <div class="form-grup pt-3">
                        <label for="exampleInputPassword1"
                            >Pax (Jumlah Orang)</label
                        >
                        <select class="form-control">
                            <option>Please select</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-md-6 text-left">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Ponsel</label>
                    <input
                        type="email"
                        class="form-control"
                        id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                        placeholder="Enter your phone number"
                    />
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"
                        >Nama Perusahaan</label
                    >
                    <input
                        type="password"
                        class="form-control"
                        id="exampleInputPassword1"
                        placeholder="Enter your company name"
                    />
                </div>
                <div class="form-grup">
                    <label for="exampleInputPassword1">Building</label>
                    <select class="form-control">
                        <option>Please select</option>
                        <option>Please select</option>
                    </select>
                </div>
                <div class="form-grup pt-3">
                    <label for="exampleInputPassword1"
                        >Dipesan Melalui
                    </label>
                    <select class="form-control">
                        <option>Please select</option>
                    </select>
                </div>
            </div>
            <div class="pt-5 ml-3">
                <button class="btn custom-button custom-but-width">
                    Pesan
                </button>
            </div>
        </div>
    </fieldset>
</section>

<section id="Partner Kami">
    <div class="container-fluid text-center pb-5 pt-5">
        <img src="/img/Frame 1000005970.png" alt="" class="img-fluid" />
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
<script>
    $(document).ready(function () {
        $(".btn").click(function () {
            // Hide all divs
            $('[id$="Div"]').addClass("d-none");

            // Show the corresponding div
            var targetDiv = $(this).data("target");
            $("#" + targetDiv).removeClass("d-none");
        });

        // Initially show the content for the first button
        $("#eventDiv").removeClass("d-none");
    });
</script>

@endsection