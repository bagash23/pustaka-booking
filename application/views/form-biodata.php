<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Input Biodata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<style type="text/css">
    body {
        background-image: linear-gradient(to right, #06283D, #000000);
    }

    .content-form {
        background-color: white;
        padding: 50px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        width: 50%;
        margin-top: 100px;
        border-radius: 20px;
    }

    .txt-judul {
        text-align: center;
        margin-bottom: 10px;
        font-size: 20px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: #000000;
        font-weight: bold;
    }

    .txt-desk {
        text-align: center;
        color: #000000;
        font-weight: normal;
        font-size: 12px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-style: italic;
    }
</style>

<body>
    <div class=" container content-form">
        <h1 class="txt-judul">Masukan Biodata Anda</h1>
        <p class="txt-desk">Sesuai dengan identitas anda</p>
        <form action="<?= base_url('biodata/cetak'); ?>" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Masukan Nim Anda</label>
                <input type="text" class="form-control" name="nim" id="nim">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Masukan Nama Anda</label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <div class="mb-3">
                <select name="jenis" id="jenis">
                    <option value="">Pilih Jenis Kelamain Anda</option>
                    <option value="laki - laki">Laki - Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" value="Submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>