<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index',[
        'nama' => "Muny Safitri",
        'about' => "Saya adalah seorang mahasiswa Informatika Universitas Syiah Kuala sedang menempuh semester 4, Saya memeiliki motivasi yang besar dalam mendapatkan ilmu dan pengetahuan baru. Saya bertanggung jawab dan dapat dipercaya dalam melaksanakan tugas.
        Aktivitas saya dalam organisasi dan menjadi kepanitiaan di suatu event dapat mendukung perkembangan saya dalam membentuk kepribadiaan yang baik. Berani dalam memimpin, ambisius, tekun, dan
        dapat bekerjasama di dalam tim.",
        "birthday" => "22-Desember-2001",
        "born" => "Lhokseumawe",
        "city" => "Banda Aceh",
        "IG" => "miaw_73",
        "age" => "20",
        "Github" => "https://github.com/MunySafitri",
        "email" => "munysafitri@gmail.com",
        "minatHobi" => "Saya senang mempelajari berbagai bahasa pemograman. Belajar bahasa asing yang sudah saya kuasai dasarnya ke tingkat lanjut.
                        Saya juga senang menggambar, menari, olahraga, dan menulis. Saya suka mencari wawasan dan skilll baru saat di waktu luang",
        "linkIG" => "https://www.instagram.com/miaw_73/",
        "sifat" =>[
            ["Ceria","Periang dan Mudah Tertawa",75],
            ["Rajin","Kelihatan kalau tujuannya jelas",79],
            ["Santuy dan Nyaman", "Bisa Diajak Bercanda dan Healing Bareng",85],
            ["Pekerja Keras dan Adaptif","Mudah Berteman dengan Siapa Saja dan Giat",80],
        ],
        'skill'=>[
            ['Dasar SQL','70'],
            ['Dasar Java', '65'],
            ['Dasar HTML dan CSS', '65'],
            ['Dasar JavaScript', '45'],
            ['Dasar Python', '65'],
            ['Dasar C/C++','65'],
            ['Video/Foto Editing', '70'],
            ['Bahasa Inggris(pasif)', '80'],
            ['Dasar Bahasa Korea', '75'],
            ['Menggambar dan Melukis', '90' ],
            ['Dasar PHP', '60'],
            ['Publik Speaking', '60'],
            ['Dasar Framework Laravel', '60'],
            ['Dasar Ms.Office', '85'],
            ['Menari','80'],
            ['Dasar UI Figma', '75'],
            ['Dasar Jupyter Notebook', '75'],
            ['Dasar Git', '50']
        ],
        'ability' =>[
            ['Berpikir Logis dan Memecahkan Masalah', '70'],
            ['Komunikasi Lisan dan Tertulis', '75'],
            ['Coding', '85'],
            ['Bekerjasama','85'],
            ['Individu yang Termotivasi dan Memiliki Tekad', '80'],
            ['Mahir dalam MS Office', '80'],
            ['Rasa Ingin Tahu yang Tinggi dan Kreatif','80'],
            ['Adaptasi','89'],
            ['Emotional Intelligence','75'],
            ['Desain Canva', '80'],
            ['Desain Figma', '75'],
            ['Senang Membantu Orang Lain', '90']
        ],
        'kawan'=>[
            ['kawan1','stay senyum meskipun tugas membantai'],
            ['kawan2','wkwkwk, akhirnya dapat stiker kreken'],
            ['kawan3', 'bukber teman smp :}'],
            ['kawan4', 'memang syantik :3'],
            ['kawan5', 'wkwkwk, ma juga disruh foto gini..'],
            ['kawan6', 'bikin proposal bareng'],
            ['kawan7','ketidakinginan untuk berfoto'],
            ['kawan8', 'maksa si :|'],
            ['kawan9', 'Mubes 2021'],
            ['kawan10', 'ARGHH, LAPORAN RPL MERESAHKAN'],
            ['kawan11', 'meeting pertama'],
            ['kawan12', 'teman bayuu'],
            ['kawan13', 'INTERGER CHIIIZZZ'],
            ['kawan14', 'Rekan PPM HMIF'],
            ['kawan15', 'deadliner gegara tugas b.inggris :D'],
            ['kawan16', 'Silau men'],
            ['kawan17', 'BE HAPPIER'],
            ['kawan18', 'angkatan 21,20,19 INTEGER'],
            ['kawan19', 'Rapat RPL coy'],
            ['kawan20', 'USK FAIR COY'],
            ['kawan21','Rapat rpl-2 coy'],
            ['kawan22', 'USK FAIR GRAPHIC WORKSHOP'],
            ['kawan23', 'PKM SUNGGUH MELELAHKAN'],
            ['kawan24', 'meeting pertama bersama'],
            ['kawan25', 'bukber pertama bersama'],
            ['kawan26', 'teman asrama'],
            ['kawan27', 'dosen gauls, ahahah'],
            ['kawan28', 'Mubes selesai'],
            ['kawan29', 'Healing unch'],
            ['kawan30', 'beauty benar ahahah']
        ],
        'pengalaman'=> [
            ['Karyawan, Aroma Food (2019)'],
            ['Sekretaris PIK-R GALAKSI (2019)'],
            ['Sekretaris, Dewan Pengurus Himpunan Informatika (2020-Sekarang)'],
            ['Anggota Tim PKM-RSH Pengembangan Kreativitas Mahasiswa Program Merdeka berjudul Prososial pada Remaja (2021)'],
            ['Panitia, Seminar PKM-RSH Mempererat Ukhuwah dengan Prososial (2021)'],
            ['Panitia USK Fair (2021)'],
            ['Panitia INFEST(2021)'],
            ['Anggota, Himpunan Mahasiswa Informatika (Sekarang)'],
            ['Asisten Laboratorium Pemrograman USK (Sekarang)'],
            ['Anggota, Program Strategis Desa Mind Aceh Besar']
        ],
        'pendidikanFormal' =>[
            ['MIN 7 Banda Aceh'],
            ['SMPN 7 Banda Aceh'],
            ['SMAN 7 Banda Aceh'],
            ['Informaika Universitas Syiah Kuala']
        ],

        'PendidikanInformal'=>[
            ['Boootcamp Programming USK ft Progate I'],
            ['Boootcamp Programming USK ft Progate II'],
            ['Kursus Inggris'],
            ['Pelatihan Membuat Produk beku Aroma Food'],
            ['Kursus Online Bahasa Jepang, Korea, Mandarin Lingodeer'],
            ['Kursus Beladiri Taekwondo'],
            ['Kursus Huawei HCIA Routing & Swithing'],
            ['Kursus Machine Learning ft Dicoding']
        ]


    ]);
});
