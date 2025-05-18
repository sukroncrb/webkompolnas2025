<?php 

namespace App\Schema;

use Abiesoft\Resource\Mysql\DB;
use Abiesoft\Resource\Mysql\Schema;
class berita extends Schema 
{

    public function buattabel()
    {
        $schema = new Schema;
        $schema->teks(nama:'judul', default: 'NULL');
        $schema->teks(nama:'slug', default: 'NULL');
        $schema->paragrap(nama:'potongan');
        $schema->paragrap(nama:'isi');
        $schema->paragrap(nama:'gambar');
        $schema->teks(nama:'kategori', default: 'NULL');
        $schema->angka(nama:'dibaca', default: 0);
        $schema->angka(nama:'sfacebook', default: 0);
        $schema->angka(nama:'stwitter', default: 0);
        $schema->angka(nama:'swa', default: 0);
        $schema->teks(nama:'penulis', default: 'NULL');
        $schema->teks(nama:'tag', default: 'NULL');
        $schema->enum(nama:'publikasi', data:['Terbit','Pending','Draft']);
        $sql = $schema->create('berita');
        DB::terhubung()->query($sql);
        $this->buatdata();
    }

    public function buatdata()
    {
        
        DB::terhubung()->input('berita', [
            'id' => '01850999-8037-4635-8e8a-1fd9daef2f7f',
            'judul' => 'Serdik Sespimmen 65 Audiensi ke Kompolnas, Perdalam Wawasan Kepemimpinan',
            'slug' => 'Serdik-Sespimmen-65-Audiensi-ke-Kompolnas-Perdalam-Wawasan-Kepemimpinan',
            'potongan' => 'Jakarta - Peserta didik (Serdik) Sespimmen 65 melakukan audiensi dengan Kompolnas dalam rangka kegiatan literasi. Para calon pemimpin Polri di masa yang akan datang itu belajar dan berdiskusi terkait kepemimpinan kepolisian.',
            'isi' => '&lt;p&gt;Jakarta - Peserta didik (Serdik) Sespimmen 65 melakukan audiensi dengan Kompolnas dalam rangka kegiatan literasi. Para calon pemimpin Polri di masa yang akan datang itu belajar dan berdiskusi terkait kepemimpinan kepolisian.&lt;/p&gt;&lt;p&gt;Pertemuan ini berlangsung pada Kamis (24/4/2025). Pertemuan ini dihadiri oleh komisioner Kompolnas dan juga Serdik Sespimmen sebanyak 12 orang di Kantor Kompolnas, Jakarta.&lt;/p&gt;&lt;p&gt;&quot;Maksud kedatangan kami ke Kompolnas dalam rangka kegiatan literasi, salah satunya adalah leader branding yaitu kami dari Sespimmen mengambil belajar wawasan terkait kepemimpinan kepolisian terutama dalam hal ini, dalam pandangan Kompolnas, bagaimana kami ke depannya menjadi pemimpin-pemimpin Polri di masa mendatang,&quot; ujar Ketua Senat Sespimmen 65 dalam keterangan yang diterima, Jumat (25/4/2025).&lt;/p&gt;&lt;p&gt;Ketua Harian Kompolnas Arief Wicaksono mengapresiasi tujuan dari Serdik Sespimmnas mengunjungi Kompolnas. Arief berharap mereka akan menjadi pemimpin Polri yang baik di masa depan.&lt;/p&gt;&lt;p&gt;&quot;Jadi terima kasih atas kunjungan Serdik Sesmpimmen 65, ini adalah kesempatan yang baik karena sebagai sama-sama kita dengar tadi mereka akan mencari literasi, dan mereka juga akan menyelesaikan pendidikan kurang lebih dua minggu lagi ya, dan mereka ini pasti akan menjadi pimpinan level kapolres atau kabupaten/kota,&quot; kata Arief.&lt;/p&gt;&lt;p&gt;Arief berharap banyak kepada mereka. Dia berharap mereka benar-benar bisa menjalankan tugas Polri di masyarakat.&lt;/p&gt;&lt;p&gt;&quot;Dalam kepemimpinan ini mudah-mudahan bisa menjaga, membawa, Polri sesuai tugas mereka sebagai pelindung, pelayan masyarakat, pemelihara ketertiban, dan beberapa hal lain sudah kami diskusikan itu bisa diserap mereka dengan baik,&quot; katanya.&lt;/p&gt;&lt;p&gt;Arief berharap semua ilmu yang didiskusikan bersama itu bisa terserap dengan baik. Dia juga mengingatkan pentingnya menjaga sinergitas TNI-Polri.&lt;/p&gt;&lt;p&gt;&quot;Dan lebih lagi kita memberikan harapan agar Polri ke depan bisa lebih sinergitas dengan TNI, karena di dalam semua kepemimpinan pasti tidak lepas dengan bertugas, mudah-mudahan ke depan bisa lebih baik, semua kita tetap sehat, semangat, dan sukses,&quot; ucap Arief.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;sumber: detik.com&lt;/p&gt;',
            'gambar' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/berita/3114sespimmen-65-temui-kompolnas-1745543248582_169_(1).jpeg',
            'kategori' => 'Kompolnas',
            'dibaca' => 2,
            'sfacebook' => 0,
            'stwitter' => 0,
            'swa' => 0,
            'penulis' => 'c46ca720-f134-4ccb-8ccb-6d9ed994de99',
            'tag' => 'Serdik;Kompolnas',
            'publikasi' => 'Terbit',
            'dibuat' => '2025-04-26 11:39:03',
        ]);
        
        DB::terhubung()->input('berita', [
            'id' => '1f8d1154-3c67-4e71-8f68-216631590955',
            'judul' => 'Kompolnas Tinjau TKP Mobil Polisi Dibakar Massa di Depok, Ini Temuannya',
            'slug' => 'Kompolnas-Tinjau-TKP-Mobil-Polisi-Dibakar-Massa-di-Depok-Ini-Temuannya',
            'potongan' => 'Jakarta - Kompolnas meninjau tempat kejadian perkara (TKP) tiga mobil polisi dibakar massa di Kampung Baru, Harjamukti, Depok, Jawa Barat (Jabar). Komisioner Kompolnas, Choirul Anam, mengatakan polisi sudah menjalankan tugas sesuai standard operating procedure (SOP) saat peristiwa tersebut terjadi.',
            'isi' => '&lt;p&gt;&lt;strong&gt;Jakarta&lt;/strong&gt; - Kompolnas meninjau tempat kejadian perkara (TKP) tiga mobil polisi dibakar massa di Kampung Baru, Harjamukti, Depok, Jawa Barat (Jabar). Komisioner Kompolnas, Choirul Anam, mengatakan polisi sudah menjalankan tugas sesuai standard operating procedure (SOP) saat peristiwa tersebut terjadi.&lt;/p&gt;&lt;p&gt;Peninjauan itu dilakukan Anam pada Minggu (20/4) kemarin, didampingi Kapolres Metro Depok Kombes Abdul Waras. Anam mengatakan, dari hasil peninjauan di lapangan, pihaknya memperoleh gambaran mengenai kronologi peristiwa penyerangan terhadap petugas dan pembakaran mobil polisi tersebut.&lt;/p&gt;&lt;p&gt;Menurutnya, peristiwa bermula saat anggota Satreskrim Polres Metro Depok berupaya menjemput seorang tersangka berinisial TS. Pelaku terlibat dalam dua laporan polisi, yakni terkait kepemilikan senjata api ilegal dan dugaan penyerobotan lahan.&lt;/p&gt;&lt;p&gt;&quot;Dari hasil penelusuran kami, ada indikasi bahwa orang-orang yang melakukan perlawanan terhadap petugas bukan berasal dari warga sekitar. Kami menduga mereka bagian dari komunitas yang dekat dengan TS,&quot; ujar Anam dalam keterangannya, Senin (21/4/2025).&lt;/p&gt;&lt;p&gt;Anam menjelaskan, saat polisi berhasil membawa TS hingga ke portal pintu masuk Kampung Baru, diduga telah terjadi pengondisian yang mengarah pada tindakan perusakan dan pembakaran mobil.&lt;/p&gt;&lt;p&gt;&quot;Dari video yang kami lihat, memang ada upaya mengonsolidasikan massa, walau tidak maksimal. Kami percaya warga setempat dapat membedakan mana petugas kepolisian dan mana tindakan melawan hukum,&quot; jelasnya.&lt;/p&gt;&lt;p&gt;Anam menegaskan polisi saat itu telah menjalankan tugas sesuai prosedur dengan menunjukkan identitas sebagai petugas resmi. Dia mengimbau siapa pun yang terlibat atau mengetahui aksi perusakan dan pembakaran agar segera menyerahkan diri.&lt;/p&gt;&lt;p&gt;&quot;Semakin kooperatif, semakin bagus. Tapi jika tidak, kami dorong agar penegakan hukum dilakukan secara tegas. Hukum tidak boleh kalah oleh kekerasan ataupun kelompok mana pun,&quot; tegasnya.&lt;/p&gt;&lt;p&gt;Anam pun menekankan pentingnya menjaga wibawa negara sebagai negara hukum. &quot;Kalau penegakan hukum bisa dikalahkan, negara ini bisa bubar. Karena kita berdiri di atas hukum,&quot; ucapnya.&lt;/p&gt;&lt;p&gt;Sementara itu, Kapolres Metro Depok Kombes Abdul Waras mengapresiasi langkah Kompolnas yang turut memberikan dukungan moril kepada kepolisian dalam menangani kasus tersebut.&lt;/p&gt;&lt;p&gt;&quot;Kompolnas sangat men-support kami untuk mengambil tindakan tegas terhadap siapa pun yang melakukan kekerasan, apalagi saat petugas menjalankan tugas penegakan hukum,&quot; ujar Waras.&lt;/p&gt;&lt;p&gt;Dia mengungkapkan saat ini telah ditetapkan dua tersangka yang sudah ditahan di Polda Metro Jaya. Namun, penyidikan masih terus berjalan dan tidak menutup kemungkinan jumlah tersangka akan bertambah.&lt;/p&gt;&lt;p&gt;&quot;Kami terbuka terhadap informasi apa pun dari masyarakat terkait peristiwa ini. Silakan sampaikan kepada kami atau langsung ke Kompolnas,&quot; ucapnya.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;sumber: detik.com&lt;/p&gt;',
            'gambar' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/berita/2070komisioner-kompolnas-choirul-anam-dok-ist-1745211691222_169.jpeg',
            'kategori' => 'Kompolnas',
            'dibaca' => 6,
            'sfacebook' => 0,
            'stwitter' => 0,
            'swa' => 0,
            'penulis' => 'c46ca720-f134-4ccb-8ccb-6d9ed994de99',
            'tag' => 'pembakaran',
            'publikasi' => 'Terbit',
            'dibuat' => '2025-04-27 00:09:43',
        ]);
        
        DB::terhubung()->input('berita', [
            'id' => '3771d444-9099-4754-bf13-3000740d78e6',
            'judul' => 'Kompolnas Ikuti Kegiatan Penanaman Pohon Dalam Rangka Swasembada Pangan',
            'slug' => 'Kompolnas-Ikuti-Kegiatan-Penanaman-Pohon-Dalam-Rangka-Swasembada-Pangan',
            'potongan' => 'Hahaha',
            'isi' => '&lt;p&gt;Anggota Kompolnas Yusuf Warsyim mengikuti Kegiatan Penanaman Pohon dan Jagung Pipil dalam rangka Pelestarian Lingkungan dan Swasembada Pangan, yang di hadiri Kapolda dan PJU Polda Riau serta Gubernur Riau, Walikota Pekanbaru dan Forkopimda.&lt;/p&gt;',
            'gambar' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/berita/60206653ysf.JPG',
            'kategori' => 'Kompolnas',
            'dibaca' => 19,
            'sfacebook' => 0,
            'stwitter' => 0,
            'swa' => 0,
            'penulis' => 'c46ca720-f134-4ccb-8ccb-6d9ed994de99',
            'tag' => 'Yusuf Warsyim',
            'publikasi' => 'Terbit',
            'dibuat' => '2025-04-30 23:18:46',
        ]);
        
        DB::terhubung()->input('berita', [
            'id' => '3ad66f3e-3769-4f55-8691-0b755f888c45',
            'judul' => 'Jalani Penilaian Awal Kompolnas Awards dari Itwasda Polda Sumut, Kapolsek Berastagi Sampaikan Pihaknya Maksimal Dalam Tugas',
            'slug' => 'Jalani-Penilaian-Awal-Kompolnas-Awards-dari-Itwasda-Polda-Sumut-Kapolsek-Berastagi-Sampaikan-Pihaknya-Maksimal-Dalam-Tugas',
            'potongan' => 'Berastagi, Karosatuklik.com – Polsek Berastagi menerima kunjungan Tim Itwasda Polda Sumut dalam rangka pelaksanaan penilaian awal menuju Kompolnas Awards Tahun 2025, pada Jumat (25/4/2025).

Penilaian ini dipimpin oleh AKBP Triyadi, SIK, MH selaku Ketua Tim bersama sejumlah perwira dari Itwasda Polda Sumut.',
            'isi' => '&lt;p&gt;&lt;strong&gt;Berastagi&lt;/strong&gt;, Karosatuklik.com – Polsek Berastagi menerima kunjungan Tim Itwasda Polda Sumut dalam rangka pelaksanaan penilaian awal menuju Kompolnas Awards Tahun 2025, pada Jumat (25/4/2025).&lt;/p&gt;&lt;p&gt;Penilaian ini dipimpin oleh AKBP Triyadi, SIK, MH selaku Ketua Tim bersama sejumlah perwira dari Itwasda Polda Sumut.&lt;/p&gt;&lt;p&gt;Kapolsek Berastagi AKP Hendry Tobing, SH, menyampaikan paparan langsung di hadapan tim penilai, yang memuat capaian capaian Polsek Berastagi dalam pelayanan masyarakat, penanganan kamtibmas, problem solving, serta upaya penegakan hukum yang dilakukan secara humanis dan profesional.&lt;/p&gt;&lt;p&gt;“Kami tidak menunggu adanya penilaian atau penghargaan untuk bekerja maksimal. Apa yang kami jalankan selama ini murni karena komitmen untuk memberikan yang terbaik kepada masyarakat,” tegas Kapolsek.&lt;/p&gt;&lt;p&gt;Usai menerima paparan, tim penilai melanjutkan kegiatan dengan meninjau langsung Mako Polsek Berastagi. Dalam peninjauan tersebut, tim melakukan pengecekan terhadap kesiapan fasilitas pelayanan publik, ruang tahanan, sarana prasarana pendukung, serta kinerja dan sikap personel dalam pelaksanaan tugas sehari hari.&lt;/p&gt;&lt;p&gt;AKP Hendry Tobing menambahkan bahwa kunjungan ini menjadi momentum untuk melihat secara nyata bagaimana upaya Polsek Berastagi menjalankan tugasnya di lapangan.&lt;/p&gt;&lt;p&gt;“Bagi kami, evaluasi seperti ini adalah ruang pembelajaran yang sangat kami butuhkan untuk terus meningkatkan kualitas kerja,” ujarnya.&lt;/p&gt;&lt;p&gt;Melalui kegiatan ini, Polsek Berastagi berharap dapat menunjukkan dedikasi dan kinerjanya secara terbuka, serta memperkuat kepercayaan publik terhadap institusi Polri di tingkat kewilayahan. (R1)&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;sumber: Karosatuklik.com&lt;/p&gt;',
            'gambar' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/berita/8092FB_IMG_1745577178145.jpg',
            'kategori' => 'Kompolnas',
            'dibaca' => 1,
            'sfacebook' => 0,
            'stwitter' => 0,
            'swa' => 0,
            'penulis' => 'c46ca720-f134-4ccb-8ccb-6d9ed994de99',
            'tag' => 'Kompolnas Award',
            'publikasi' => 'Terbit',
            'dibuat' => '2025-04-26 23:23:34',
        ]);
        
        DB::terhubung()->input('berita', [
            'id' => '541e5f4b-f185-4bf1-b5dc-70769b49f311',
            'judul' => 'PPATK Puji Kinerja Polri Berangus Judol',
            'slug' => 'PPATK-Puji-Kinerja-Polri-Berangus-Judol',
            'potongan' => 'RM.id Rakyat Merdeka - Pusat Pelaporan dan Analisis Transaksi Keuangan (PPATK) RI mencatat akumulasi perputaran transaksi keuangan transaksi judi online (judol) mengalami kenaikan pada tahun 2005.

Namun PPATK mengakui bahwa kinerja pemerintah, khususnya Polri, dalam menekan angka judol tersebut dinilai berhasil.',
            'isi' => '&lt;p&gt;&lt;strong&gt;RM.id&nbsp;Rakyat Merdeka&lt;/strong&gt; - Pusat Pelaporan dan Analisis Transaksi Keuangan (PPATK) RI mencatat akumulasi perputaran transaksi keuangan transaksi judi online (judol) mengalami kenaikan pada tahun 2005.&lt;/p&gt;&lt;p&gt;Namun PPATK mengakui bahwa kinerja pemerintah, khususnya Polri, dalam menekan angka judol tersebut dinilai berhasil.&lt;/p&gt;&lt;p&gt;“Harus diakui kerja keras yang sudah dilakukan oleh pemerintah melalui desk judol ini berhasil menekan laju pertumbuhan aktivitas judol, apalagi Polri sudah menunjukkan sukses penegakan hukumnya,” kata Ketua PPATK Ivan Yustiavandana dalam keterangan tertulis, di Jakarta, Minggu (27/4/2025).&lt;/p&gt;&lt;p&gt;PPATK sebelumnya mengungkapkan, angka perputaran di tahun 2025 mencapai Rp 1.200 triliun. Angka tersebut diambil dari pergeseran pola transaksi judol hingga hasilnya diamankan ke luar negeri.&lt;/p&gt;&lt;p&gt;&quot;Bahwa nilai Rp 1.200 T merupakan perkiraan akumulasi perputaran judi online sampai dengan akhir tahun 2025. Nilai tersebut didasarkan atas trend nilai perputaran tahun 2024,&quot; katanya.&lt;/p&gt;&lt;p&gt;Terjadi pergeseran pola transaksi dari deposit ke dalam situs perjudian, sampai cara melarikan dana ke luar negeri.&lt;/p&gt;&lt;p&gt;&quot;Kami punya parameter dan melakukan analisis terhadap rekening-rekening terkait. Itu jumlah potensi hingga akhir tahun 2025,&quot; lanjutnya.&lt;/p&gt;&lt;p&gt;Lebih lanjut, Ivan mengaku crypto masih kerap dimanfaatkan untuk memindahkan dana oleh para pelaku judol. Salah satu aliran dana itu paling masif dilancarkan ke Singapura.&lt;/p&gt;&lt;p&gt;&quot;Sebagaimana tahun 2024 bahwa kripto mengalami trend kenaikan sebagai salah satu instrumen untuk memindahkan dana. Namun, masih ditemukan pula aliran dana ke Singapura, UK dan Filipina dengan menggunakan instrumen transfer dana,&quot; ujarnya.&lt;/p&gt;&lt;p&gt;&quot;Ya memang kemajuan fintech berdampak masifnya virtual currency dipergunakan sebagai alternatif transaksi untuk menyembunyikan harta-harta illegal,&quot; sambungnya.&lt;/p&gt;&lt;p&gt;Terkait pengguna judol, Ivan mengatakan PPATK masih menunggu data pasti.&lt;/p&gt;&lt;p&gt;&quot;Data masih ditunggu sampai semester pertama tahun ini. Kecenderungan ada (kenaikan),&quot; tuturnya.&nbsp;&lt;/p&gt;&lt;p&gt;Sebelumnya, Ivan Yustiavandana menyebut saat ini Indonesia sedang menghadapi masalah judi online (judol). Hal ini dilihat dari perputaran dana judi online pada 2025 yang mencapai Rp 1.200 triliun.&lt;/p&gt;&lt;p&gt;&quot;Berdasarkan data, selama tahun 2025, diperkirakan perputaran dana judi online mencapai Rp 1.200 triliun,&quot; kata Ivan dalam acara peringatan Gerakan Nasional APU PPT ke-23 dalam situs PPATK, dikutip Kamis (24/4/2025).&lt;/p&gt;&lt;p&gt;Ivan mengatakan jumlah perputaran dana judi online ini pun mengalami kenaikan dari tahun lalu. Dia menjelaskan, pada 2024, perputaran dana judi online sebesar Rp 981 triliun.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;sumber:  rm.id&lt;/p&gt;',
            'gambar' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/berita/3239ppatk-puji-kinerja-polri-berangus-judol_263594.jpg',
            'kategori' => 'Polri',
            'dibaca' => 2,
            'sfacebook' => 0,
            'stwitter' => 0,
            'swa' => 0,
            'penulis' => 'c46ca720-f134-4ccb-8ccb-6d9ed994de99',
            'tag' => 'PPATK; Judol',
            'publikasi' => 'Terbit',
            'dibuat' => '2025-04-28 01:05:46',
        ]);
        
        DB::terhubung()->input('berita', [
            'id' => '6b395dd9-77eb-4ae5-870f-d0c024a96953',
            'judul' => 'Soal Sespimmen Polri yang Disorot Usai Temui Jokowi',
            'slug' => 'Soal-Sespimmen-Polri-yang-Disorot-Usai-Temui-Jokowi',
            'potongan' => 'TEMPO.CO, Jakarta - Sejumlah peserta dari Sekolah Staf dan Pemimpin Menengah (Sespimmen) Polri melawat ke rumah Jokowi di Solo, Jawa Tengah pada Kamis, 17 April lalu. Mereka yang datang berasal dari Pendidikan Reguler ke-65. Ajudan Jokowi Komisaris Syarif Muhammad Fitriansyah juga sedang menempuh pendidikan di Sespimmen Polri Dikreg ke-65 tersebut.',
            'isi' => '&lt;p&gt;&lt;strong&gt;TEMPO.CO&lt;/strong&gt;, Jakarta - Sejumlah peserta dari Sekolah Staf dan Pemimpin Menengah (Sespimmen) Polri melawat ke rumah Jokowi di Solo, Jawa Tengah pada Kamis, 17 April lalu. Mereka yang datang berasal dari Pendidikan Reguler ke-65. Ajudan Jokowi Komisaris Syarif Muhammad Fitriansyah juga sedang menempuh pendidikan di Sespimmen Polri Dikreg ke-65 tersebut.&lt;/p&gt;&lt;p&gt;Jokowi mengatakan dalam pertemuan tersebut dirinya hanya membicarakan soal kepemimpinan. &quot;Kemarin dari kepolisian ada dari Sespimmen datang menanyakan mengenai yang berkaitan dengan leadership,&quot; kata Jokowi saat ditemui di Kawasan Jakarta Pusat pada Selasa, 22 April 2025.&lt;/p&gt;&lt;p&gt;Selain itu, menurut Jokowi, dalam pertemuan tersebut dibahas pula bagaimana urusan-urusan ke depannya. Namun, Jokowi tak menjelaskan secara detail terkait urusan yang ia maksud.&lt;/p&gt;&lt;p&gt;Perwira Penuntut Kelompok Belajar II Serdik Sespimmen Pendidikan Reguler ke-65, Komisaris Besar Denny, mengatakan kedatangan mereka hari itu untuk silaturahmi dengan Jokowi. &quot;Bersilaturahmi dengan Bapak Jokowi sekalian meminta masukan untuk perkembangan ke depannya,&quot; kata Denny seusai pertemuan dengan Jokowi di dalam rumah mantan Wali Kota Solo itu.&lt;/p&gt;&lt;p&gt;Menurut Denny, perkembangan ke depan yang dimaksud berkaitan kepemimpinan agar bisa menghadapi tantangan global pada era digital, kecerdasan buatan atau kecerdasan artifisial (AI) serta robotic.&nbsp;&nbsp;&lt;/p&gt;&lt;p&gt;Dalam kesempatan itu, mereka juga mendapatkan masukan dari Jokowi agar terus meningkatkan sinergitas antara Polri dan TNI sehingga lebih baik ke depannya dan bisa dicintai oleh masyarakat serta dapat menjadi panutan. &quot;Ya intinya beliau (berpesan) untuk menjadi anggota Polri dan TNI yang lebih baik ke depan dan bisa dicintai oleh masyarakat dan menjadi panutan untuk masyarakat,&quot; kata dia.&lt;/p&gt;&lt;p&gt;Sementara itu, Jokowi mengatakan dalam pertemuan tersebut dirinya hanya membicarakan soal kepemimpinan. &quot;Kemarin dari kepolisian ada dari Sespimmen datang menanyakan mengenai yang berkaitan dengan leadership,&quot; kata Jokowi saat ditemui di Kawasan Jakarta Pusat pada Selasa, 22 April 2025.&lt;/p&gt;&lt;p&gt;Selain itu, Jokowi mengatakan dalam pertemuan tersebut soal bagaimana urusan-urusan ke depannya. Namun, Jokowi tak menjelaskan secara detail terkait urusan yang ia maksud.&lt;/p&gt;&lt;p&gt;&quot;Ada yang berkaitan ya urusan-urusan sebetulnya nanti ke depan akan seperti apa, ya saya sampaikan yang saya tahu, yang enggak tahu enggak mungkin saya sampaikan,&quot; kata bapak Gibran Rakabuming Raka itu.&nbsp;&lt;/p&gt;&lt;p&gt;Jokowi Siratkan Pesan Politik&lt;/p&gt;&lt;p&gt;Direktur Eksekutif Trias Politika Strategis Agung Baskoro menilai pertemuan antara peserta dari Sespimmen Polri an Jokowi sebagai penegasan hubungan kedua pihak. Menurut dia, mantan presiden itu ingin memberi sinyal ke publik bahwa hubungannya dengan institusi kepolisian baik-baik saja.&lt;/p&gt;&lt;p&gt;Agung berpendapat, Jokowi memiliki kedekatan dengan Polri selama dua periode kepemimpinannya. &quot;Sehingga ketika para peserta Sespimmen Polri hadir ke Solo, semakin menguatkan bahwa mereka ingin melanjutkan relasi positif itu,&quot; katanya saat dihubungi pada Senin, 21 April 2025.&lt;/p&gt;&lt;p&gt;Dia berujar bahwa ada pesan tersirat yang coba disampaikan oleh Jokowi ke publik ihwal pertemuannya dengan Sespimmen Polri. &quot;Ini semacam sinyal kepada siapa pun yang coba mengganggu Jokowi, istilahnya pesannya jangan aneh-aneh karena beliau punya relasi bagus,&quot; ujarnya.&lt;/p&gt;&lt;p&gt;Direktur Eksekutif Parameter Politik Indonesia Adi Prayitno menyinggung ihwal persepsi matahari kembar usai para pimpinan menengah polisi itu sowan ke kediaman Jokowi. Menurut dia, ada kepercayaan dari publik ihwal persepsi matahari kembar yang terjadi di pemerintahan Prabowo Subianto saat ini.&lt;/p&gt;&lt;p&gt;Namun, menurut dia, persepsi itu bisa dinetralisir bila peserta Sespimmen Polri itu turut menemui mantan presiden maupun tokoh bangsa lainnya. &quot;Problemnya yang didatangi dan diminta arahan hanya Jokowi, itulah yang kemudian membuat publik yakin ada matahari kembar,&quot; ujarnya ketika dihubungi pada Senin, 21 April 2025.&lt;/p&gt;&lt;p&gt;Sejarah Sespimmen Polri&lt;/p&gt;&lt;p&gt;Sekolah Staf dan Pimpinan Tingkat Menengah (Sespimmen) adalah lembaga pendidikan di bawah Lemdiklat Polri yang berfokus pada pengembangan pendidikan dan pelatihan bagi perwira menengah Polri dan peserta dari mancanegara. Sespimmen bertujuan menghasilkan perwira dengan kemampuan manajerial tingkat menengah, moralitas, integritas, serta wawasan kebangsaan dan kepemimpinan strategis.&lt;/p&gt;&lt;p&gt;Dilansir dari laman siapsespimpolri.id, Sespimmen awalnya merupakan bagian dari pengembangan lembaga pendidikan Polri untuk memenuhi kebutuhan kepemimpinan tingkat menengah. Hingga saat ini, Sespimmen terus berperan penting dalam mencetak perwira Polri yang siap menghadapi tantangan modern di berbagai lini kepemimpinan.&lt;/p&gt;&lt;p&gt;Sespimmen Polri adalah sekolah staf dan pimpinan menengah Polri yang mendidik perwira menengah Polri dengan pangkat AKBP dan Kompol serta peserta dari mancanegara yang diharapkan mampu berperan sebagai staf dan pimpinan pada organisasi tingkat menengah.&lt;/p&gt;&lt;p&gt;Sespimmen bercikal-bakal dari Sekolah Staf dan Pimpinan Polri atau SESPIM Polri yang didirikan pada 24 September 1964. Pada pperjalanannya SESPIM Polri mengalami beberapa perubahan.Pada tanggal 19 Maret 1965 angkatan satu dibuka dengan sebutan Sekolah Staf dan komando angkatan kepolisisn (SESKOAK). Tanggal 1 Juli 1969 (SESKOAK) menjadi Sekolah Staf dan Komando Angkatan Kepolisian (SESKOPOL).&lt;/p&gt;&lt;p&gt;Pada 1974, SESKOPOL Berubah menjadi Sesko ABRI bagian Kepolisian. Kemudian, 30 Oktober 1984, Sesko ABRI bagian kepolisian diubah menjadi Sespim Polri. Selanjutnya, pada 25 Mei 2001 Sespim Polri berada dibawah Dediklat Kapolri, Pada 17 Oktober 2002 Sespim Polri kembali keberadaannya langsung berada dibawah Kapolri. Pada 14 September 2010 seluruh lembaga pendidikan Polri berada dibawah Lemdikpol.&nbsp;&lt;/p&gt;&lt;p&gt;Sekolah Kepemimpinan Kepolisian Republik Indonesia (Sespim Polri) merupakan sebuah lembaga Kepolisian yang bertugas menyelenggarakan pendidikan manajemen tingkat tinggi, tingkat menengah, dan tingkat pertama, mengkaji dan mengembangkan kebijakan kepolisian, menyelenggarakan pendidikan dan pelatihan manajemen lainnya bagi personel Polri dan non Polri serta mengelola komponen pendidikan di lingkungan SESPIM Polri.&nbsp;&lt;/p&gt;&lt;p&gt;Dalam rangka memenuhi tuntutan perubahan peran Polri, serta dibutuhkannya Perwira Polri yang menduduki jabatan eselon I maka berdasarkan Surat Keputusan Kapolri No.Pol.: Skep/902/VII/2000 24 Juli 2000 dibentuklah Program Pendidikan Sekolah Staf dan Pimpinan Menengah (Sespimmen) Polri.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;sumber: tempo.co&lt;/p&gt;',
            'gambar' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/berita/90711392913_720.jpg',
            'kategori' => 'Polri',
            'dibaca' => 5,
            'sfacebook' => 0,
            'stwitter' => 0,
            'swa' => 0,
            'penulis' => 'c46ca720-f134-4ccb-8ccb-6d9ed994de99',
            'tag' => 'Sespimen',
            'publikasi' => 'Terbit',
            'dibuat' => '2025-04-27 00:57:08',
        ]);
        
        DB::terhubung()->input('berita', [
            'id' => '73e8f2f6-b1c7-49d3-92c4-b702f770822e',
            'judul' => 'Polri Bersama Unhan Berkolaborasi Latih 3.183 Sarjana untuk Sukseskan MBG',
            'slug' => 'Polri-Bersama-Unhan-Berkolaborasi-Latih-3183-Sarjana-untuk-Sukseskan-MBG',
            'potongan' => 'Jakarta - Polri bersama Universitas Pertahanan (Unhan) berkolaborasi dalam Pelatihan Sarjana Penggerak Pembangunan Indonesia (SPPI) di Sekolah Polisi Negara (SPN) Purwokerto, Jawa Tengah (Jateng). Polri menyebut kegiatan ini merupakan bagian dari komitmen dalam mendukung program Pemerintah, yaitu Makan Bergizi Gratis (MBG) demi mencetak sumber daya manusia (SDM) yang unggul.',
            'isi' => '&lt;p&gt;&lt;strong&gt;Jakarta&lt;/strong&gt; - Polri bersama Universitas Pertahanan (Unhan) berkolaborasi dalam Pelatihan Sarjana Penggerak Pembangunan Indonesia (SPPI) di Sekolah Polisi Negara (SPN) Purwokerto, Jawa Tengah (Jateng). Polri menyebut kegiatan ini merupakan bagian dari komitmen dalam mendukung program Pemerintah, yaitu Makan Bergizi Gratis (MBG) demi mencetak sumber daya manusia (SDM) yang unggul.&lt;/p&gt;&lt;p&gt;&quot;Polri berperan aktif mencetak SDM unggul yang siap mengawaki program strategis nasional, terutama peningkatan kualitas gizi masyarakat. Pelatihan ini tidak hanya membentuk karakter tangguh, tetapi juga memastikan peserta mampu menjalankan peran di lapangan dengan profesional,&quot; tegas Karo Bindiklat Lemdiklat Polri Brigjen Susilo Teguh Raharjo, dalam keterangan tertulis Inspektorat Pengawasan Umum (Itwasum) Polri, Jumat (24/4/2025).&lt;/p&gt;&lt;p&gt;Teguh menjelaskan program MBG adalah pelaksanaan dari poin keempat Asta Cita Pemerintahan Presiden Prabowo Subianto dan Wapres Gibran Rakabuming Raka, yakni memperkuat pembangunan SDM, kesehatan, dan kesetaraan melalui MBG. Pelatihan SPPI ini diikuti oleh 3.183 sarjana dari berbagai disiplin ilmu yang akan disiapkan sebagai penggerak di Satuan Pelayanan Pemenuhan Gizi (SPPG).&lt;/p&gt;&lt;p&gt;Pelatihan digelar sejak 14 April hingga 12 Juli 2025, atau sekitar 3 bulan. Peserta dibekali materi dasar kemiliteran, disiplin, etos kerja, dan loyalitas tinggi di tujuh Satuan Pendidikan (Satdik) Polri, termasuk SPN Purwokerto, Pusdik Brimob, dan Pusdik Polair.&lt;/p&gt;&lt;p&gt;Berikut 7 sekolah polisi yang menyelenggarakan Pelatihan SPPI:&lt;/p&gt;&lt;p&gt;1. Pusdik Brimob (448 peserta)&lt;/p&gt;&lt;p&gt;2. Pusdik Polair (200 peserta)&lt;/p&gt;&lt;p&gt;3. Satlat Kor Brimob (247 peserta)&lt;/p&gt;&lt;p&gt;4. SPN Polda Jateng (941 peserta)&lt;/p&gt;&lt;p&gt;5. SPN Polda Sulsel (651 peserta)&lt;/p&gt;&lt;p&gt;6. SPN Polda Sumsel (321 peserta)&lt;/p&gt;&lt;p&gt;7. SPN Polda Bali (375 peserta).&lt;/p&gt;&lt;p&gt;Pelatihan ini merupakan respons Polri terhadap surat dari Rektor Unhan Nomor B/553/II/2025 dan B/577/II/2025. Surat itu berisi permohonan dukungan fasilitas dan personel.&lt;/p&gt;&lt;p&gt;Saat mengecek jalannya pelatihan, Teguh juga menekankan pentingnya penerapan standar operasional prosedur atau SOP, menjaga kesehatan peserta, serta memastikan asupan gizi para peserta selama pelatihan. &quot;Kami berkomitmen menyiapkan generasi yang sehat dan kompeten, sekaligus menjadi contoh dalam implementasi program makan bergizi gratis,&quot; tambahnya.&lt;/p&gt;&lt;p&gt;Teguh menyampaikan kegiatan dia pun berdialog dengan para pengasuh pelatihan guna memastikan keselarasan proses pembelajaran dengan target capaian. &quot;Dukungan Polri ini menjadi bukti nyata loyalitas institusi dalam merealisasikan kebijakan pemerintah untuk kesejahteraan rakyat,&quot; pungkas Teguh.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;sumber: detik.com&lt;/p&gt;',
            'gambar' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/berita/548polri-unhan-berkolaborasi-latih-3183-sarjana-untuk-sukseskan-mbg-1745615508081_169.jpeg',
            'kategori' => 'Polri',
            'dibaca' => 5,
            'sfacebook' => 0,
            'stwitter' => 0,
            'swa' => 0,
            'penulis' => 'c46ca720-f134-4ccb-8ccb-6d9ed994de99',
            'tag' => 'MBG;Makan bergizi gratis',
            'publikasi' => 'Terbit',
            'dibuat' => '2025-04-27 01:01:57',
        ]);
        
        DB::terhubung()->input('berita', [
            'id' => '78f5a99f-ea44-4f3f-9a9f-4d4b4672abca',
            'judul' => 'Kompolnas Akan Selidiki Alasan Polri Tangguhkan Penahanan Kades Kohod Dkk',
            'slug' => 'Kompolnas-Akan-Selidiki-Alasan-Polri-Tangguhkan-Penahanan-Kades-Kohod-Dkk',
            'potongan' => 'JAKARTA, KOMPAS.com - Komisi Kepolisian Nasional (Kompolnas) akan memeriksa alasan penangguhan penahanan terhadap Kepala Desa Kohod, Arsin bin Asip, dan tiga orang lainnya yang berstatus sebagai tersangka dalam kasus dugaan pemalsuan surat tanah di lahan pagar laut di Tangerang. Diketahui, penahanan ini ditangguhkan pada Rabu (24/4/2025) lalu karena telah melewati batas maksimal penahanan di masa penyidikan. “Kami akan cek dulu statusnya kayak apa. Apakah masa tahanannya habis atau bukan,” ujar Komisioner Kompolnas Choirul Anam saat dihubungi Kompas.com, Jumat (25/4/2025).',
            'isi' => '&lt;p&gt;&lt;strong&gt;JAKARTA, KOMPAS.com &lt;/strong&gt;- Komisi Kepolisian Nasional (Kompolnas) akan memeriksa alasan penangguhan penahanan terhadap Kepala Desa Kohod, Arsin bin Asip, dan tiga orang lainnya yang berstatus sebagai tersangka dalam kasus dugaan pemalsuan surat tanah di lahan pagar laut di Tangerang. Diketahui, penahanan ini ditangguhkan pada Rabu (24/4/2025) lalu karena telah melewati batas maksimal penahanan di masa penyidikan. “Kami akan cek dulu statusnya kayak apa. Apakah masa tahanannya habis atau bukan,” ujar Komisioner Kompolnas Choirul Anam saat dihubungi Kompas.com, Jumat (25/4/2025).&lt;/p&gt;&lt;p&gt;Anam mengatakan, jika masa tahanan habis, penangguhan wajib dilakukan sesuai aturan hukum yang ada. “Tapi, kalau masa tahanan tidak habis ya harus dijelaskan kenapa dia dilepas ya karena penahanan itu menyangkut yang paling penting adalah tersangkut soal apakah dia punya potensi melarikan diri,” lanjut Anam.&lt;/p&gt;&lt;p&gt;Menanggapi berkas perkara penyidikan terkait dugaan pemalsuan yang bolak-balik antara Direktorat Tindak Pidana Umum Bareskrim Polri dengan Kejaksaan Agung, Anam menekankan soal pentingnya transparansi dan akuntabilitas.&lt;/p&gt;&lt;p&gt;“Yang paling penting dalam konteks penanganan pagar laut ini adalah akuntabilitas di penegak hukum, mau di polisi atau Kejaksaan Agung itu sama-sama. Jadi, akuntabilitasnya memang harus ditunjukkan kepada publik,” kata Anam. Untuk menunjukkan akuntabilitas ini, perlu adanya transparansi. Misalnya, transparansi mengenai persoalan yang dibahas dan substansi kasus. Transparansi dan akuntabilitas ini penting agar publik bisa menilai apakah unsur pidana yang diusut penegak hukum sudah sesuai dengan konstruksi kasus atau bahkan ekspektasi masyarakat.&lt;/p&gt;&lt;p&gt;“Jadi, apa problem-nya jaksa, apa problem-nya polisi, ya sama. Ya itu juga harus transparansi dan akuntabilitas harus dijaga. Apalagi, kasus ini harapan besar terhadap penegakan hukumnya juga besar dan harapan untuk keadilannya juga besar,” tutup Anam. Sebelumnya diberitakan, Bareskrim Polri menangguhkan penahanan terhadap Kepala Desa Kohod, Arsin bin Asip dan tiga tersangka lainnya dalam kasus dugaan pemalsuan surat lahan pagar laut di Tangerang. “Sehubungan sudah habisnya masa penahanan maka penyidik akan menangguhkan penahanan kepada ke 4 tersangka, (Kades Kohod Tangerang) sebelum tanggal 24 April (karena habisnya masa penahanan),” ujar Direktur Tindak Pidana Umum Bareskrim Polri, Brigjen Pol Djuhandhani Rahardjo Puro melalui keterangan resminya, Kamis (24/4/2025).&lt;/p&gt;&lt;p&gt;“Jadi, apa problem-nya jaksa, apa problem-nya polisi, ya sama. Ya itu juga harus transparansi dan akuntabilitas harus dijaga. Apalagi, kasus ini harapan besar terhadap penegakan hukumnya juga besar dan harapan untuk keadilannya juga besar,” tutup Anam. Sebelumnya diberitakan, Bareskrim Polri menangguhkan penahanan terhadap Kepala Desa Kohod, Arsin bin Asip dan tiga tersangka lainnya dalam kasus dugaan pemalsuan surat lahan pagar laut di Tangerang. “Sehubungan sudah habisnya masa penahanan maka penyidik akan menangguhkan penahanan kepada ke 4 tersangka, (Kades Kohod Tangerang) sebelum tanggal 24 April (karena habisnya masa penahanan),” ujar Direktur Tindak Pidana Umum Bareskrim Polri, Brigjen Pol Djuhandhani Rahardjo Puro melalui keterangan resminya, Kamis (24/4/2025).&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;sumber: kompas.com&lt;/p&gt;',
            'gambar' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/berita/264167d7e01bed827.jpg',
            'kategori' => 'Kompolnas',
            'dibaca' => 0,
            'sfacebook' => 0,
            'stwitter' => 0,
            'swa' => 0,
            'penulis' => 'c46ca720-f134-4ccb-8ccb-6d9ed994de99',
            'tag' => 'Kompolnas;penangguhan penahanan Kades Kohod',
            'publikasi' => 'Terbit',
            'dibuat' => '2025-04-26 11:45:15',
        ]);
        
        DB::terhubung()->input('berita', [
            'id' => '853ac0c9-4ce7-4828-b76d-f277967795f0',
            'judul' => 'Kapolres Simalungun Terima Kunjungan Tim Itwasda Polda Sumut untuk Penilaian Nominasi Kompolnas Awards 2025',
            'slug' => 'Kapolres-Simalungun-Terima-Kunjungan-Tim-Itwasda-Polda-Sumut-untuk-Penilaian-Nominasi-Kompolnas-Awards-2025',
            'potongan' => 'Kapolres Simalungun AKBP Marganda Aritonang, S.H., S.I.K., M.M menerima kunjungan Tim Inspektorat Pengawasan Daerah (Itwasda) Polda Sumut dalam rangka Penilaian Pengusulan Nominasi Kompolnas Awards Tahun 2025, pada Selasa, (22/4/2025) dimulai sekitar pukul 09.30 WIB di Aula Andar Siahaan, Mako Polres Simalungun, Jalan Jhon Horailam, Kecamatan Pamatang Raya, Kabupaten Simalungun.',
            'isi' => '&lt;p&gt;Kapolres Simalungun AKBP Marganda Aritonang, S.H., S.I.K., M.M menerima kunjungan Tim Inspektorat Pengawasan Daerah (Itwasda) Polda Sumut dalam rangka Penilaian Pengusulan Nominasi Kompolnas Awards Tahun 2025, pada Selasa, (22/4/2025) dimulai sekitar pukul 09.30 WIB di Aula Andar Siahaan, Mako Polres Simalungun, Jalan Jhon Horailam, Kecamatan Pamatang Raya, Kabupaten Simalungun.&lt;/p&gt;&lt;p&gt;Tim Itwasda Polda Sumut yang hadir dipimpin AKBP Triyadi, S.I.K., M.H., didampingi enam anggota tim lainnya, yaitu Kompol Parluhutan Panjaitan, SH, Kompol Muliani, S.H., M.H, Kompol Rolihardo Sinaga, SH, Penata TK I Wardianto, S.M.Kom, M.M., IPDA Ahmad Syafrizal, S.H., dan AIPDA Mhd Nazril Vadyan Lubis, S.H.&lt;/p&gt;&lt;p&gt;Kasi Humas Polres Simalungun, AKP Verry Purba, saat dikonfirmasi pada pukul 21.00 WIB, menjelaskan kegiatan ini merupakan bagian dari upaya peningkatan profesionalisme Polri dalam pengamanan kamtibmas di wilayah hukum Polres Simalungun.&lt;/p&gt;&lt;p&gt;Kompolnas Awards merupakan penghargaan prestisius yang diberikan kepada satuan kepolisian yang dinilai berprestasi dalam pelaksanaan tugas dan fungsinya. Penilaian ini meliputi berbagai aspek, mulai dari kinerja pelayanan publik, penanganan kasus, hingga inovasi dalam pengamanan kamtibmas.&lt;/p&gt;&lt;p&gt;“Polres Simalungun merasa terhormat menjadi salah satu satuan yang dinominasikan dalam Kompolnas Awards 2025. Ini merupakan pengakuan atas kerja keras dan dedikasi seluruh personel dalam melayani, melindungi, dan mengayomi masyarakat Simalungun,” ungkap AKP Verry.&lt;/p&gt;&lt;p&gt;Dalam proses penilaian tersebut, Tim Itwasda Polda Sumut melakukan evaluasi terhadap berbagai program dan inovasi yang telah dilaksanakan oleh Polres Simalungun dalam upaya meningkatkan pelayanan kepada masyarakat dan menjaga stabilitas keamanan di wilayah Kabupaten Simalungun.&lt;/p&gt;&lt;p&gt;“Kami berharap hasil penilaian ini dapat menjadi motivasi bagi seluruh jajaran Polres Simalungun untuk terus meningkatkan profesionalisme dalam menjalankan tugas pengamanan kamtibmas,” tambahnya.&lt;/p&gt;&lt;p&gt;“Kunjungan Tim Itwasda Polda Sumut ini menunjukkan komitmen Polri dalam mewujudkan transparansi dan akuntabilitas dalam setiap aspek pelaksanaan tugas, sekaligus upaya untuk terus mendorong peningkatan kualitas pelayanan kepada masyarakat melalui kompetisi positif antar satuan kepolisian,” Pungkas AKP Verry.&lt;/p&gt;&lt;p&gt;Saetelah penerimaan Tim Itwasda, kegiatan dilanjutkan dengan pendalaman materi yang diawali dengan pemaparan profil Mako Polres Simalungun dan profil Polsek jajaran.&lt;/p&gt;&lt;p&gt;Kegiatan tersebut diikuti Wakapolres Kompol Edi Sukamto, para Kabag, Kasat, Kasi, beberapa Kapolsek, para Perwira, Brigadir dan ASN Polres Simalungun, serta para Operator Polres Simalungun yang terlibat dalam penilaian pengusulan nominasi Kompolnas Awards 2025. (Fred)&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;sumber: jurnalx.co.id&lt;/p&gt;',
            'gambar' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/berita/9794IMG_20250422_213913.jpg',
            'kategori' => 'Kompolnas',
            'dibaca' => 9,
            'sfacebook' => 0,
            'stwitter' => 0,
            'swa' => 0,
            'penulis' => 'c46ca720-f134-4ccb-8ccb-6d9ed994de99',
            'tag' => 'Kompolnas Award',
            'publikasi' => 'Terbit',
            'dibuat' => '2025-04-27 00:13:22',
        ]);
        
        DB::terhubung()->input('berita', [
            'id' => '8dbc7308-59bb-4b50-956b-f44d2e002869',
            'judul' => 'Kompolnas Siap Mewujudkan Profesionalisme dan Kemandirian Polri',
            'slug' => 'Kompolnas-Siap-Mewujudkan-Profesionalisme-dan-Kemandirian-Polri',
            'potongan' => '----',
            'isi' => '&lt;p&gt;Jakarta, Komisi Kepolisian Nasional menegaskan komitmennya untuk terus memperkuat koordinasi dan sinergi dengan Polri dalam rangka meningkatkan profesionalisme dan kemandirian institusi kepolisian.Pernyataan tersebut disampaikan oleh Ketua Kompolnas Jendral Polisi (Purn) Budi Gunawan pada saat pelantikan Anggota Kompolnas 2024-2028 pada Selasa (7/5/2025) untuk mendukung menuju visi Indonesia Emas 2045. &lt;/p&gt;&lt;p&gt;“Kami akan melakukan konsolidasi, koordinasi, sinergi dengan Polri agar pelaksanaan tugas kedepan pertama, memberi masukan kepada bapak Presiden dalam menentukan Arah Kebijakan Polri. Yang kedua, dalam hal memperkuat kapasitas dan kapabilitas serta kemampuan, kemudian profesionalisme Polri, termasuk kemandirian Polri dalam mengemban tugas pokok dan fungsinya di dalam pemeliharaan stabilitas keamanan ketertiban masyarakat penegakan hukum juga dalam hal pelayanan perlindungan dan pengayoman kepada masyarakat.” ujar Ketua Kompolnas Jend. Pol (P) Budi Gunawan.&lt;/p&gt;&lt;p&gt;Langkah ini dinilai penting dalam menjawab tantangan keamanan di era modern, serta mendukung tata kelola kepolisian yang demokratis dan berbasis hak asasi manusia. Kompolnas bertekad untuk terus menjadi mitra strategis dalam memastikan bahwa Polri mampu menjalankan tugasnya secara profesional, transparan, dan dipercaya oleh masyarakat.&lt;/p&gt;',
            'gambar' => 'assets/storage/NULL/berita/6390Screenshot_2025-05-07_102643.jpg',
            'kategori' => 'Kompolnas',
            'dibaca' => 3,
            'sfacebook' => 0,
            'stwitter' => 0,
            'swa' => 0,
            'penulis' => 'c46ca720-f134-4ccb-8ccb-6d9ed994de99',
            'tag' => 'Kompolnas',
            'publikasi' => 'Terbit',
            'dibuat' => '2025-05-07 10:27:13',
        ]);
        
        DB::terhubung()->input('berita', [
            'id' => '97038c6f-3f82-4dc8-a61e-147a53b9d671',
            'judul' => 'Mabes Polri dan Polda Papua Barat Olah TKP Hilangnya Iptu Tomi Samuel Marbun',
            'slug' => 'Mabes-Polri-dan-Polda-Papua-Barat-Olah-TKP-Hilangnya-Iptu-Tomi-Samuel-Marbun',
            'potongan' => 'JAKARTA-Tim Gabungan Mabes Polri bersama Polda Papua Barat melaksanakan olah Tempat Kejadian Perkara (TKP) di lokasi hilangnya mantan Kasat Reskrim Polres Teluk Bintu Iptu Tomi Samuel Marbun. Langkah itu merupakan tahap krusial dalam operasi pencarian Iptu Tomi.',
            'isi' => '&lt;p&gt;&lt;strong&gt;JAKARTA&lt;/strong&gt;-Tim Gabungan Mabes Polri bersama Polda Papua Barat melaksanakan olah Tempat Kejadian Perkara (TKP) di lokasi hilangnya mantan Kasat Reskrim Polres Teluk Bintu Iptu Tomi Samuel Marbun. Langkah itu merupakan tahap krusial dalam operasi pencarian Iptu Tomi.&lt;/p&gt;&lt;p&gt;Kasubbid Dokidenkrim Pusident Bareskrim Polri yang juga Kasubsatgas Identifikasi Adek Candra menyampaikan bahwa tim identifikasi telah tiba di TKP hilangnya perwira pertama Polri berdarah Batak tersebut.&lt;/p&gt;&lt;p&gt;“Kami telah melakukan pengecekan awal menggunakan drone untuk mendapatkan gambaran situasi di lapangan. Hasilnya akan kami kembangkan untuk investigasi lebih lanjut,” terang dia.&lt;/p&gt;&lt;p&gt;Adek menyatakan, dalam proses olah TKP, tim gabungan itu membawa perlengkapan teknologi tinggi seperti Faro Tripod dan Faro Monopod. Kedua alat tersebut mampu memvisualisasikan kondisi di lokasi hilangnya Iptu Tomi dalam bentuk tiga dimensi.&lt;/p&gt;&lt;p&gt;“Kami juga menggunakan kamera digital, drone, dan alat ukur lainnya untuk menggambarkan kondisi lapangan secara visual dan detail,” jelasnya.&lt;/p&gt;&lt;p&gt;Di tempat yang sama Direktur Kriminal Umum Polda Papua Barat Kombes Nuvia Jaya menjelaskan bahwa saat ini pihaknya tengah mempersiapkan rekonstruksi peristiwa hilangnya Iptu Tomi pada akhir tahun lalu. Dia hilang saat mengejar Kelompok Kriminal Bersenjata (KKB).&lt;/p&gt;&lt;p&gt;“Kami akan melakukan pemotretan lokasi tempat korban dilaporkan hanyut, kemudian melakukan rekonstruksi dengan menempatkan rekan-rekan yang berada di lokasi saat kejadian sesuai dengan posisi mereka waktu itu,” jelasnya.&lt;/p&gt;&lt;p&gt;Olah TKP tersebut merupakan bagian dari tahap ketiga pencarian dan pertolongan yang dilakukan sebagai upaya maksimal dalam menemukan keberadaan Iptu Tomi serta memberikan kepastian bagi keluarga dan institusi Polri.(*/jawapos)&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;sumber: cenderawasihpos.jawapos.com&lt;/p&gt;',
            'gambar' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/berita/1720iptu-tomi-Polda-PB_(1).jpg',
            'kategori' => 'Polri',
            'dibaca' => 1,
            'sfacebook' => 0,
            'stwitter' => 0,
            'swa' => 0,
            'penulis' => 'c46ca720-f134-4ccb-8ccb-6d9ed994de99',
            'tag' => 'Papua; Iptu Tomi Samuel Marbun',
            'publikasi' => 'Terbit',
            'dibuat' => '2025-04-28 01:03:28',
        ]);
        
        DB::terhubung()->input('berita', [
            'id' => '976e4c96-4898-4b46-81e7-5870b0417204',
            'judul' => 'Sinergitas TNI-Polri dan Warga, Wujudkan Cooling System yang Kondusif di Lengkong Karya',
            'slug' => 'Sinergitas-TNI-Polri-dan-Warga-Wujudkan-Cooling-System-yang-Kondusif-di-Lengkong-Karya',
            'potongan' => 'Tangerang Selatan, Kicaunews.com – Dalam upaya menciptakan suasana aman dan damaiBhabinkamtibmas Kelurahan Lengkong Karya bersama Babinsa, serta tokoh masyarakat melaksanakan kegiatan cooling system pada Minggu, 27 Maret 2025. Kegiatan tersebut berlangsung di kediaman Ketua RT 02 Kp. Ciater II, Bapak H. Adih, yang juga dihadiri para Ketua RT dan RW dari RW 02 hingga RW 05.',
            'isi' => '&lt;p&gt;&lt;strong&gt;Tangerang Selatan&lt;/strong&gt;, Kicaunews.com – Dalam upaya menciptakan suasana aman dan damaiBhabinkamtibmas Kelurahan Lengkong Karya bersama Babinsa, serta tokoh masyarakat melaksanakan kegiatan cooling system pada Minggu, 27 Maret 2025. Kegiatan tersebut berlangsung di kediaman Ketua RT 02 Kp. Ciater II, Bapak H. Adih, yang juga dihadiri para Ketua RT dan RW dari RW 02 hingga RW 05.&lt;/p&gt;&lt;p&gt;Dalam suasana kekeluargaan, para peserta kegiatan berdiskusi terbuka seputar keamanan lingkungan, pencegahan hoaks, dan pentingnya menjaga netralitas serta kerukunan di tengah masyarakat. Aipda Bed Bernad selaku Bhabinkamtibmas menyampaikan bahwa peran aktif warga sangat diperlukan untuk mencegah potensi gangguan kamtibmas. Babinsa pun menegaskan pentingnya sinergi tiga pilar — TNI, Polri, dan masyarakat — dalam menghadapi dinamika sosial di tahun politik.&lt;/p&gt;&lt;p&gt;Kapolsek Serpong, Kompol Suhardono, S.H., M.M., mengapresiasi inisiatif tersebut dan menyampaikan, “Kegiatan ini adalah bentuk konkret dari komitmen bersama untuk menjaga situasi tetap aman dan terkendali. Sinergitas antara TNI, Polri, serta tokoh masyarakat menjadi kunci utama dalam menciptakan kedamaian di wilayah Serpong.”&lt;/p&gt;&lt;p&gt;Dengan semangat gotong royong dan komunikasi yang baik antara aparat dan warga, kegiatan cooling system ini menjadi contoh positif bagaimana kolaborasi di tingkat akar rumput mampu menjaga stabilitas dan keharmonisan di lingkungan perkampungan.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;sumber: kicaunews.com&lt;/p&gt;',
            'gambar' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/berita/935IMG-20250427-WA0036.jpg',
            'kategori' => 'Polri',
            'dibaca' => 7,
            'sfacebook' => 0,
            'stwitter' => 0,
            'swa' => 0,
            'penulis' => 'c46ca720-f134-4ccb-8ccb-6d9ed994de99',
            'tag' => 'Cooling System',
            'publikasi' => 'Terbit',
            'dibuat' => '2025-04-28 01:07:20',
        ]);
        
        DB::terhubung()->input('berita', [
            'id' => 'b1a4c60e-1e7b-4746-9093-5ce9fc75842f',
            'judul' => 'POLRI dan UMJ Ajak Mahasiswa untuk Tidak Terjerat Pinjol Ilegal',
            'slug' => 'POLRI-dan-UMJ-Ajak-Mahasiswa-untuk-Tidak-Terjerat-Pinjol-Ilegal',
            'potongan' => 'Universitas Muhammadiyah Jakarta (UMJ) bersama Kepolisian Republik Indonesia mengadakan seminar bagi mahasiswa untuk tidak terjerat pinjaman online ilegal. Kegiatan ini diadakan pada Rabu (23/4) di Aula Kasman Singodimedjo Universitas Muhammadiyah Jakarta. Kegiatan yang menghadirkan 200 mahasiswa ini bertajuk tentang Hidup Bahagia tanpa Pinjaman Ilegal.',
            'isi' => '&lt;p&gt;&lt;strong&gt;Universitas Muhammadiyah Jakarta (UMJ) &lt;/strong&gt;bersama Kepolisian Republik Indonesia&nbsp;mengadakan seminar bagi mahasiswa untuk tidak terjerat pinjaman online ilegal. Kegiatan ini diadakan pada Rabu (23/4) di Aula Kasman Singodimedjo Universitas Muhammadiyah Jakarta. Kegiatan yang menghadirkan 200 mahasiswa ini bertajuk tentang Hidup Bahagia tanpa Pinjaman Ilegal.&lt;/p&gt;&lt;p&gt;Rektor Universitas Muhammadiyah Jakarta, Prof. Dr. Ma’mun Murod, M.Si., dalam sambutannya menyampaikan bahwa kegiatan ini merupakan forum edukasi yang diberikan oleh polri kepada mahasiswa ditengah dinamika persoalan pinjaman online ilegal.&lt;/p&gt;&lt;p&gt;“Melalui program Polri Goes to campus ini diharapkan dapat memberikan manfaat positif dan kontribusi bagi pengembangan wawasan hingga literasi mahasiswa terkait pengelolaan keuangan yang baik dan benar,” ucapnya.&lt;/p&gt;&lt;p&gt;Ma’mun menambahkan bahwa acara ini menjadi bagian dari tindak lanjut kerjasama terkait studi lanjut anggota polri di kampus UMJ, sekaligus sebagai mitra strategis demi terciptanya suasana lingkungan akademik yang aman, nyaman, dan kondusif.&lt;/p&gt;&lt;p&gt;Brigjen Pol. Gatot Repli Handoko, S.I.K., Kepala Biro Multimedia Divisi Humas Polri menyatakan bahwa Program Polri Goes to Campus diadakan oleh&nbsp;dan UMJ sebagai bentuk sosialisasi dan diskusi agar mahasiswa dan generasi milenial saat ini tidak terjebak pada jerat pinjaman illegal.&lt;/p&gt;&lt;p&gt;“Untuk memenuhi kebutuhan ekonomi yang mencukupi, kami menghimbau agar masyarakat dapat merencakanan keuangan secara bijak, hidup bebas pinjaman menjadi suatu tantangan, disisi lain juga peluang untuk mendidik masyarakat tentang pentingnya mengelola, memanage keuangan demi mencapai tujuan investasi keuangan yang stabil,” ujarnya.&lt;/p&gt;&lt;p&gt;Menurut Gatot, pada perkembangan media digital di Indonesia, 60% pengguna pinjol mayoritas anak muda.”Menurut data Asosiasi Fintech Pendanaan Bersama Indonesia (AFPI), 60% usia 19-34 tahun, dan usia 35-54 mencapai 40% yang melakukan pinjaman online dan pengguna didominasi dari daerah Pulau Jawa dengan prosentase 82%. Hal ini membuktikan bahwa pentingnya memberikan literasi keamanan dalam hal pinjaman online ini kepada masyarakat agar tidak terjerat pada kasus pinjol ilegal,” tutupnya.&lt;/p&gt;&lt;p&gt;Turut hadir narasumber POLRI Goes to campus, antara lain Sampor Ali,M.M.(Dosen FEB UMJ), Dr. Rohimi Zam Zam (Dosen FIP UMJ), dan Kasubdit IV Dittipideksus Bareskrim Polri, Komisaris Besar Polisi Dr. Bismo Teguh Prakoso, S.H., S.I.K., M.H.&lt;/p&gt;&lt;p&gt;Editor : Sofia Hasna&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;sumber: umj.ac.id&lt;/p&gt;',
            'gambar' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/berita/5390Screenshot_2025-04-27_11.44.46_(1).png',
            'kategori' => 'Polri',
            'dibaca' => 4,
            'sfacebook' => 0,
            'stwitter' => 0,
            'swa' => 0,
            'penulis' => 'c46ca720-f134-4ccb-8ccb-6d9ed994de99',
            'tag' => 'pinjol',
            'publikasi' => 'Terbit',
            'dibuat' => '2025-04-27 11:45:51',
        ]);
        
        DB::terhubung()->input('berita', [
            'id' => 'e9c8946e-0b68-4a2d-94ce-0b85454960d8',
            'judul' => 'Kompolnas Apresiasi Polri Amankan Mudik: Terima Kasih Sudah Beri Pelayanan Terbaik',
            'slug' => 'Kompolnas-Apresiasi-Polri-Amankan-Mudik:-Terima-Kasih-Sudah-Beri-Pelayanan-Terbaik',
            'potongan' => 'Jakarta - Anggota Kompolnas Irjen (Purn) Ida Oetari Poernamasari mengapresiasi kinerja Polri dalam memberikan pelayanan terbaik selama mudik Lebaran 2025. Ida mengatakan masyarakat merasakan dampak yang baik dari pengamanan mudik tersebut.',
            'isi' => '&lt;p&gt;&lt;strong&gt;Jakarta&lt;/strong&gt; - Anggota Kompolnas Irjen (Purn) Ida Oetari Poernamasari mengapresiasi kinerja Polri dalam memberikan pelayanan terbaik selama mudik Lebaran 2025. Ida mengatakan masyarakat merasakan dampak yang baik dari pengamanan mudik tersebut.&lt;/p&gt;&lt;p&gt;&quot;Terima kasih sudah berbuat, memberikan pelayanan yang terbaik kepada masyarakat sehingga mudik mereka nyaman, aman, dan pulangnya nyaman, yang juga berdampak akan menaikkan citra Polri,&quot; kata Ida seperti diberitakan Antara yang dikutip, Rabu (23/4/2025).&lt;/p&gt;&lt;p&gt;Ida juga mengapresiasi peran Satgas Humas Operasi Ketupat 2025 yang secara berkala membagikan informasi kepada masyarakat. Dengan demikian, masyarakat dapat mendapatkan perkembangan rekayasa lalu lintas selama mudik.&lt;/p&gt;&lt;p&gt;&quot;Selalu update informasi, bukan setiap hari, tetapi secara berkala. Waktunya 3 jam sekali, 5 jam sekali, atau 2 jam sekali. Masyarakat melihat terus atau men-tag semua informasi yang humas berikan kepada masyarakat,&quot; katanya.&lt;/p&gt;&lt;p&gt;Ida juga mengingatkan pimpinan di Polri untuk memberikan apresiasi kepada personel dalam Operasi Ketupat 2025 yang telah mengorbankan waktunya untuk bertugas.&lt;/p&gt;&lt;p&gt;Ia menuturkan bahwa anggota Polri juga manusia biasa sehingga mereka juga perlu mendapatkan haknya untuk cuti supaya mereka tidak burn out (jenuh).&lt;/p&gt;&lt;p&gt;&quot;Jadi, pimpinan Polri harus memberikan apresiasi kepada mereka yang bertugas full untuk melayani masyarakat,&quot; ucapnya.&lt;/p&gt;&lt;p&gt;Berdasarkan data Korlantas Polri, secara nasional angka kecelakaan turun sampai 30 persen dibanding tahun lalu. Penurunan angka ini berkat kontribusi petugas yang mengamankan jalur selama periode operasi, juga kesadaran masyarakat dalam berlalu lintas kian meningkat.&lt;/p&gt;&lt;p&gt;Dari sisi petugas kepolisian, keberhasilan penanganan mudik ini terkait erat dengan skema rekayasa lalu lintas yang dikendalikan secara terpusat. Rekayasa itu antara lain dengan penggunaan sistem ganjil genap, contraflow, one way lokal, hingga one way nasional. Operasi ini didukung peralatan mutakhir seperti monitoring CCTV, body worn camera, algoritma road safety, e-Turjawali, GPS Ranmor Korlantas, Jasamarga Integrated Digital Map, hingga integrated road safety management system.&lt;/p&gt;&lt;p&gt;Kapolri Jenderal Listyo Sigit Prabowo juga menekankan bahwa selain arus mudik, jajaran mengamankan dan mengelola kepadatan di lokasi-lokasi wisata. Hal itu disampaikan Jenderal Sigit saat mengecek jalur mudik Trans Jawa.&lt;/p&gt;&lt;p&gt;&quot;Kemudian juga pasca dari kegiatan mudik ada 227 objek wisata yang harus dijaga dan diamankan karena itu juga menjadi tempat tujuan wisata,&quot; kata ujar Jenderal Sigit di Tol Kalikangkung Km 414, Jumat (28/3).&lt;/p&gt;&lt;p&gt;Tak hanya urusan mudik, Jenderal Sigit juga sebelumnya meminta jajaran menjaga stabilitas harga sembilan bahan pokok (sembako) sesuai dengan aturan. Jenderal Sigit menegaskan Polri akan mengambil tindakan jika ada pihak yang memainkan harga bahan pokok memanfaatkan momentum Ramadan.&lt;/p&gt;&lt;p&gt;&quot;Terkait harga sembilan bahan pokok selama bulan Ramadan di pengecer atau di pasar tradisional, harga harus sesuai HET (harga eceran tertinggi). Besok saya akan turunkan anggota di lapangan untuk mengontrol, kalau ada yang harganya melebihi HET akan kita telusuri penyebabnya ada di mana,&quot; ujar Sigit seusai rapat koordinasi terbatas yang dipimpin oleh Menko Pangan Zulkifli Hasan di kantor Kemenko Pangan, Jakarta Pusat, Rabu (26/2).&lt;/p&gt;&lt;p&gt;Untuk pengendalian harga pangan, jajaran Polri melakukan sejumlah langkah yakni:&lt;/p&gt;&lt;p&gt;1. Melakukan monitoring harga melalui aplikasi Satgas Pangan Polri, PIHPS, SP2KP Kemendag, Panel Harga BAPANAS secara realtime.&lt;/p&gt;&lt;p&gt;2. Memberikan sosialisasi kepada masyarakat dan pelaku usaha agar tidak melakukan penimbunan stok.&lt;/p&gt;&lt;p&gt;3. Melakukan pengecekan ke produsen barang kebutuhan pokok dan barang penting (bapokting), dan tempat penyimpanan (cold storage).&lt;/p&gt;&lt;p&gt;4. Melakukan pengecekan langsung ke pasar tradisional dan retail modern untuk mengetahui stok, harga dan ketersediaan bahan pokok.&lt;/p&gt;&lt;p&gt;5. Melakukan operasi pasar dengan menggelar Gerakan Pasar Murah.&lt;/p&gt;&lt;p&gt;6. Memastikan kelancaran distribusi bapokting.&lt;/p&gt;&lt;p&gt;Dalam upaya menjaga stabilitas harga dan stok bapokting, Satgas Pangan Polri menemukan menonjol, yakni MinyaKita yang isinya tak sesuai dengan ukuran kemasan. Temuan ini telah diproses secara hukum.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;sumber: detik.com&lt;/p&gt;',
            'gambar' => 'assets/storage/eb7182de-6109-4e6c-a44d-235237244ef5/berita/7678ida-oetari-poernamasari-1745388332567.png',
            'kategori' => 'Kompolnas',
            'dibaca' => 2,
            'sfacebook' => 0,
            'stwitter' => 0,
            'swa' => 0,
            'penulis' => 'c46ca720-f134-4ccb-8ccb-6d9ed994de99',
            'tag' => 'Mudik Lebaran 2025',
            'publikasi' => 'Terbit',
            'dibuat' => '2025-04-26 23:20:41',
        ]);
        
        DB::terhubung()->input('berita', [
            'id' => 'ea335917-19e4-4814-b495-2f3c14c2f534',
            'judul' => 'Kompolnas Menggelar Acara Malam Apresiasi  Bersama Mitra Kompolnas dan Pisah Sambut Komisioner Perioder 2020-2024  ke Periode 2024-2028',
            'slug' => 'Kompolnas-Menggelar-Acara-Malam-Apresiasi--Bersama-Mitra-Kompolnas-dan-Pisah-Sambut-Komisioner-Perioder-2020-2024--ke-Periode-2024-2028',
            'potongan' => '----',
            'isi' => '&lt;p&gt;Komisi Kepolisian Nasional (Kompolnas) menggelar Malam Apresiasi Bersama Mitra Kompolnas dan Pisah Sambut Komisoner Periode 2020-2024 ke Periode 2024-2028 pada Jumat (8/11/2025).Acara tersebut diselenggarakan untuk memberikan apresiasi kepada seluruh Kementerian serta Lembaga-lembaga yang telah menjalin Kerjasama bersama Kompolnas.Selain acara tersebut, diselenggarakan juga pisah sambut antara Komisioner periode 2020-2024 ke Komisioner periode 2024-2028.&lt;/p&gt;',
            'gambar' => 'assets/storage/NULL/berita/846Screenshot_2025-05-07_103342.jpg',
            'kategori' => 'Kompolnas',
            'dibaca' => 5,
            'sfacebook' => 0,
            'stwitter' => 0,
            'swa' => 0,
            'penulis' => 'c46ca720-f134-4ccb-8ccb-6d9ed994de99',
            'tag' => 'Kompolnas',
            'publikasi' => 'Terbit',
            'dibuat' => '2025-05-07 10:34:11',
        ]);
        
        DB::terhubung()->input('berita', [
            'id' => 'ed3af351-e87b-438d-90b2-44a6db5ac614',
            'judul' => 'Presiden Prabowo Resmi Melantik Anggota Kompolnas Periode 2024-2028',
            'slug' => 'Presiden-Prabowo-Resmi-Melantik-Anggota-Kompolnas-Periode-2024-2028',
            'potongan' => '----',
            'isi' => '&lt;p&gt;Jakarta – Presiden Republik Indonesia Prabowo Subianto hari ini resmi melantik Anggota Kompolnas dengan masa jabatan tahun 2024-2028 di Istana Negara, Selasa (5/11/24). Dalam Keputusan Presiden RI Nomor 80/M 2024 tentang Pemberhentian dan Pengangkatan Keanggotaan Komisi Kepolisian Nasional menyebut Budi Gunawan sebagai Ketua Kompolnas dan Tito sebagai Wakil Ketua Kompolnas.&lt;/p&gt;&lt;p&gt;Selain itu, Prabowo juga melantik tujuh anggota Kompolnas. Mereka adalah Menteri Hukum Supratman Andi Agtas, Irjen Pol (Purn) Arief Wicaksono Sudiutomo, Irjen Pol (Purn) Ida Oetari Poernamasasi, Supardi Hamid, Gufron, Muhammad Choirul Anam, dan Dr. Yusuf. Gufron sebelumnya dikenal sebagai aktivis yang memimpin Imparsial, sementara Anam pernah menjadi komisioner Komnas HAM. Kemudian Supardi dikenal sebagai pengajar atau krimonolog di Perguruan Tinggi Ilmu Kepolisian (PTIK).&lt;/p&gt;&lt;p&gt;“Demi Allah saya bersumpah, bahwa saya akan setia kepada Undang-Undang Dasar Negara Republik Indonesia Tahun 1945 serta akan menjalankan segala peraturan perundang-undangan dengan selurus-lurusnya demi darma bakti saya kepada bangsa dan negara. Bahwa saya dalam menjalankan tugas jabatan akan menjunjung tinggi etika jabatan bekerja dengan sebaik-baiknya dengan penuh rasa tanggung jawab,” demikian bunyi sumpah jabatan tersebut.&lt;/p&gt;&lt;p&gt;Berikut Adalah Susunan Komisioner Kompolnas Periode 2024-2028:&lt;/p&gt;&lt;p&gt;-Menko Polkam, Jenderal Pol (P) Prof. Dr. Budi Gunawan, S.H., M.Si., Ph.D. selaku Ketua merangkap Anggota&lt;/p&gt;&lt;p&gt;-Mendagri, Jenderal Pol (P) Prof. Drs. H. Muhammad Tito Karnavian., M.A., Ph.D. selaku Wakil Ketua merangkap Anggota&lt;/p&gt;&lt;p&gt;-Menkum, Dr. Supratman Andi Agtas, S.H., M.H., selaku Wakil Ketua merangkap Anggota&lt;/p&gt;&lt;p&gt;-Irjen Pol (Purn) Drs. Arief Wicaksono Sudiutomo selaku Anggota&lt;/p&gt;&lt;p&gt;-Irjen Pol (Purn) Ida Oetari Poernamasasi, S.A.P., M.A., selaku Anggota&lt;/p&gt;&lt;p&gt;-Dr. Supardi Hamid, M.Si., selaku Anggota&lt;/p&gt;&lt;p&gt;-Gufron, S.H.I., Selaku Anggota&lt;/p&gt;&lt;p&gt;-Muhammad Choirul Anam, S.H., selaku Anggota&lt;/p&gt;&lt;p&gt;-Dr. Yusuf, S.Ag., M.H., selaku Anggota&lt;/p&gt;',
            'gambar' => 'assets/storage/NULL/berita/1227Screenshot_2025-05-07_084210.jpg',
            'kategori' => 'Kompolnas',
            'dibaca' => 6,
            'sfacebook' => 0,
            'stwitter' => 0,
            'swa' => 0,
            'penulis' => 'c46ca720-f134-4ccb-8ccb-6d9ed994de99',
            'tag' => 'Kompolnas',
            'publikasi' => 'Terbit',
            'dibuat' => '2025-05-07 08:25:29',
        ]);
    }
}
$create = new berita();
$create->buattabel();
