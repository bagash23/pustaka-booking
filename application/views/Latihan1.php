<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latiahan 1 View</title>

    <style type="text/css">
        ::selection {
            background-color: #E13300;
            color: white;
        }

        ::-moz-selection {
            background-color: #E13300;
            color: white;
        }

        h1 {
            font-size: 19px;
            font-weight: normal;
            color: black;
            text-align: left;
            font-family: Arial, Helvetica, sans-serif;
            border-bottom: 1px solid #D0D0D0;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;

        }

        p {
            margin: 0 0 10px;
            padding: 0 12px 0 12px;
            font-weight: normal;
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;

        }

        h4 {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            font-weight: normal;
            color: black;
            padding: 12px 10px 12px 10px;
        }

        .body-data {
            border-radius: 5px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
            margin: 0 15px 0 15px;
            min-height: 96px;
        }
    </style>
</head>

<body>
    <div class="body-data">

        <img src="https://codeigniter.com/assets/icons/ci-footer.png" width="20px" />
        <h1>Mulai Menghitung Bersama!</h1>
        <p>Berikut ini adalah nilai A</p>
        <code>Nilai A = <?= $nilai1; ?></code>
        <p>Berikut ini adalah nilai B</p>
        <code>Nilai B = <?= $nilai2; ?></code>

        <h4>Hasil dari penjumlahan <?= $nilai1; ?> dan <?= $nilai2; ?> adalah : <code><?= $nilai1 . " + " . $nilai2 . " = " . $hasil; ?></code> </h4>
    </div>
</body>

</html>