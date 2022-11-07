<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<style type="text/css">
    .content-body {
        margin-top: 150px;
    }

    .img-style {
        border-radius: 50px;
        width: 50px;
        height: 50px;
    }

    .cards-content {
        flex-direction: row;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        padding: 12px;
        border-radius: 12px;
        transition: transform .2s;
    }

    .cards-content:hover {
        transform: scale(1.1);
        transition-timing-function: linear;
    }

    h1 {
        font-size: 15px;
        color: #000000;
        font-weight: bold;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        line-height: -12px;
    }

    .txt-nim {
        font-size: 12px;
        font-weight: normal;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .txt-kelamin {
        text-transform: capitalize;
        font-size: 12px;
        font-weight: normal;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .body-content {
        margin-left: 12px;
    }

    .time {
        font-size: 12px;
        font-weight: normal;
        text-transform: capitalize;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    .txt-skl {
        position: absolute;
        top: 12px;
        right: 12px;
        font-size: 12px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-weight: bold;
    }
</style>

<body>
    <div class="content-body">
        <div class="container card cards-content" style="width: 30rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiGsmPX3w0ALqypaB5urEvMYLM-z2ZFSdfvGhCew4pTK8cPc8o0Gmmgbf2dDXDDA-axo0&usqp=CAU" class="card-img-top img-style" alt="...">
            <div class="body-content">

                <span class="time"></span>
                <h1><?= $nama; ?></h1>
                <span class="txt-nim"><?= $nim; ?></span>
                <span class="txt-kelamin"><?= $jenis; ?></span>
                <p class="card-text">Kmp.Beting Remaja RT 007 / 019 TUgu Utara Koja Jakarta Utara</p>
                <p class="txt-skl">SMK SEJAHTERA</p>

                <span id="running"></span>

            </div>
        </div>
    </div>
    <script>
        const time = document.querySelector(".time");
        const d = new Date(Date.now());
        let month = ["Januari", "February", "Maret", "April", "Mai", "Juni", "Juli", "Agustus", "Sepetember", "Oktober", "November", "Desember"];
        let tanggal = d.getDate();
        let bulan = d.getMonth();
        let jam = d.getHours() < 10 ? '0' + d.getHours() : d.getHours();
        let menit = d.getMinutes() < 10 ? "0" + d.getMinutes() : d.getMinutes();
        let detik = d.getSeconds() < 10 ? "0" + d.getSeconds() : d.getSeconds();

        time.textContent = `${tanggal} ${month[bulan]} ${d.getFullYear()} | ${jam}:${menit}:${detik} WIB`



        const textRunning = document.getElementById('running');
        let arrayText = ["HAi", "APAKABAR"];

        for (let i = 1; i <= arrayText.length; i++) {
            setTimeout(function() {
                arrayText[i - 1];
            }, 1000);
        }
        console.log(arrayText);
    </script>
</body>

</html>