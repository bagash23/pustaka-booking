<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Siswa Hasil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<style type="text/css">
    * {
        margin: 0;
        padding: 0
    }

    body {
        background-color: #efefef
    }

    .card {
        width: 350px;
        background-color: #fff;
        border: none;
        /* cursor: pointer; */
        transition: all 0.5s;
    }

    .image img {
        transition: all 0.5s;
        border-radius: 130px;
    }

    /* .card:hover .image img {
        transform: scale(1.5)
    } */

    .btn {
        height: 140px;
        width: 140px;
        border-radius: 50%
    }

    .name {
        font-size: 22px;
        font-weight: bold
    }

    .idd {
        font-size: 14px;
        font-weight: 600
    }

    .idd1 {
        font-size: 12px
    }

    .number {
        font-size: 22px;
        font-weight: bold
    }

    .follow {
        font-size: 12px;
        font-weight: 500;
        color: #444444
    }

    .btn1 {
        height: 40px;
        width: 150px;
        border: none;
        background-color: #000;
        color: #aeaeae;
        font-size: 15px
    }

    .text span {
        font-size: 13px;
        color: #545454;
        font-weight: 500
    }

    .icons i {
        font-size: 19px
    }

    hr .new1 {
        border: 1px solid
    }

    .join {
        font-size: 14px;
        color: #a0a0a0;
        font-weight: bold
    }

    .date {
        background-color: #ccc
    }
</style>

<body>
    <!-- <section class="intro">
        <div class="gradient-custom-2 h-100">
            <div class="mask d-flex align-items-center h-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table table-dark table-bordered mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nama</th>
                                            <th scope="col">NIS</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Tanggal Lahir</th>
                                            <th scope="col">Tempat Lahir</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">Agama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row"></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <form action="<?= base_url('inputsiswa/index'); ?>" method="post">
        <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
            <div class="card p-4">
                <div class=" image d-flex flex-column justify-content-center align-items-center">
                    <div class="img-bulat"> <img src="https://assets.pikiran-rakyat.com/crop/658x34:1741x1051/x/photo/2021/12/20/2821040788.jpg" height="100" width="100" /></div> <span class="name mt-3"><?= $nama; ?></span>
                    <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1"><?= $nis; ?></span> <span><i class="fa fa-copy"></i></span> </div>
                    <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1"><?= $kelamin; ?></span> <span><i class="fa fa-copy"></i></span> </div>
                    <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1"><?= $agama; ?></span> <span><i class="fa fa-copy"></i></span> </div>
                    <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number"><?= $lahir; ?> <span class="follow"><?= $tempat; ?></span></span> </div>
                    <div class="text mt-3"> <span><?= $alamat; ?></span> </div>
                    <div class=" px-2 rounded mt-4 date "> <span class="join"><?= $kelas; ?></span> </div>
                    <!-- <div class="pt-2" style="cursor: pointer;"> <span class="join">Kembali</span> </div> -->
                    <input type="submit" class="join mt-2" style="cursor: pointer; border: none;" value="kembaii">
                </div>
            </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>