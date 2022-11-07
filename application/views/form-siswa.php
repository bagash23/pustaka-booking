<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <section class="card">
        <div class="container py-5 ">

            <form action="<?= base_url('inputsiswa/cetak'); ?>" method="post">
                <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                        <h3 class="mb-5 text-uppercase">Form Data Siswa</h3>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-floating">
                                    <input type="text" id="nama" name="nama" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1m">Nama Siswa</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-floating">
                                    <input type="text" id="nis" name="nis" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1n">NIS Siswa</label>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-floating">
                                    <input type="text" id="kelas" name="kelas" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1m1">Kelas Siswa</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-floating">
                                    <input type="date" id="lahir" name="lahir" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1n1">Tanggal Lahir SIswa</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating">
                            <input type="text" id="tempat" name="tempat" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1n1">Tempat Lahir Siswa</label>
                        </div>
                        <div class="form-floating mt-3">
                            <textarea class="form-control" placeholder="Masukan Alamat Siswa" id="alamat" name="alamat" style="height: 100px"></textarea>
                            <label for="floatingTextarea">Alamat Siswa</label>
                        </div>



                        <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                            <h6 class="mb-0 me-4">Jenis Kelamin: </h6>

                            <div class="form-check form-check-inline mb-0 me-4">
                                <input class="form-check-input" type="radio" id="kelamin" name="kelamin" value="Wanita" />
                                <label class="form-check-label" for="femaleGender">Wanita</label>
                            </div>

                            <div class="form-check form-check-inline mb-0 me-4">
                                <input class="form-check-input" type="radio" id="kelamin" name="kelamin" value="Pria" />
                                <label class="form-check-label" for="maleGender">Pria</label>
                            </div>

                            <div class="form-check form-check-inline mb-0">
                                <input class="form-check-input" type="radio" id="kelamin" name="kelamin" value="Aneh" />
                                <label class="form-check-label" for="otherGender">Diluar Nalar</label>
                            </div>

                        </div>

                        <select class="form-select" id="agama" name="agama" aria-label="Default select example">
                            <option selected>Pilih Agama Siswa</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>

                        <div class="pt-3 w-full">
                            <button type="submit" value="Submit" class="btn btn-primary btn-lg" style="width: 100%;">Kirim</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>