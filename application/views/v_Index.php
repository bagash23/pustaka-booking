<style>
    .txt_center {
        text-align: justify;
        color: #000;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-weight: 300;
    }

    .txt_judul_isian {
        font-weight: bold;
        color: #000;
        font-size: 30px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .txt_menu {
        font-weight: bold;
        color: #000;
        font-family: sans-serif;
        text-transform: uppercase;
        text-decoration: underline;
    }
</style>


<section>

    <h1 class="txt_judul_isian"><?php echo $judul ?></h1>
    <p class="txt_center">Pada pengertian codeigniter di atas tadi di jelaskan bahwa codeigniter menggunakan metode MVC. Apa itu</p>
    <p class="txt_center">MVC adalah teknik atau konsep yang memisahkan
        komponen utama menjadi tiga komponen yaitu model, view dan
        controller.</p>
    <ol type='a'>
        <li class="txt_menu">Model</li>
        <p class="txt_center">Model adalah kelas yang merepresentasikan atau
            memodelkan tipe data yang akan digunakan oleh aplikasi. Model juga
            dapat didefinisakn sebagai bagian penanganan yang berhubungan dengan
            pengolahan atau manipulasi database. Seperti misalnya mengambil data
            dari database, menginput dan pengolahan database lainnya. Semua
            intruksi atau fungsi yang berhubung dengan pengolahan database di
            letakkan di dalam model. Sebagai contoh, jika ingin membuat aplikasi
            untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan
            objek lingkaran sebagai kelas model.</p>
        <p class="txt_center">Sebagai catatan, Semua model harus disimpan di
            dalam folder application\models</p>
        <li class="txt_menu">View</li>
        <p class="txt_center">View merupakan bagian yang menangani halaman user
            interface atau halaman yang muncul pada user(pada browser). Tampilan
            dari user interface di kumpulkan pada view untuk memisahkannya
            dengan controller dan model sehingga memudahkan web designer dalam
            melakukan pengembangan tampilan halaman website.</p>
        <li class="txt_menu">Controller</li>
        <p class="txt_center">Controller merupakan kumpulan intruksi aksi yang
            menghubungkan model dan view, jadi user tidak akan berhubungan
            dengan model secara langsung, intinya data yang tersimpan di
            database (model) di ambil oleh controller dan kemudian controller
            pula yang menampilkan nya ke view. Jadi controller lah yang mengolah
            intruksi.</p>
        <p class="txt_center">Dari penjelasan tentang model view dan controller
            di atas dapat di simpulkan bahwa controller sebagai penghubung view
            dan model. Misalnya pada aplikasi yang menampilkan data dengan
            menggunakan metode konsep mvc, controller memanggil intruksi pada
            model yang mengambil data pada database, kemudian controller yang
            meneruskannya pada view untuk di tampilkan. Jadi jelas sudah dan
            sangat mudah dalam pengembangan aplikasi dengan cara mvc ini karena
            web designer atau front-end developer tidak perlu lagi berhubungan
            dengan controller, dia hanya perlu berhubungan dengan view untuk
            mendesign tampilann aplikasi, karena back-end developer yang</p>
    </ol>
</section>