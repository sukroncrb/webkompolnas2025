<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/web/tentang/komisioner.latte */
final class Template_433c44438c extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/web/tentang/komisioner.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 21 */;
		echo "\n";
		$this->renderBlock('js', get_defined_vars()) /* line 91 */;
		echo "\n";
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = '../main.latte';
		return get_defined_vars();
	}


	/** {block css} on line 2 */
	public function blockCss(array $ʟ_args): void
	{
		echo '<style>
.paragraph p{
    margin-bottom: 8px;
    text-align: justify;
}

.item-profile-btn  {
    cursor: pointer;
    padding: 10px 20px;
}

.item-profile-btn:hover,
.item-profile-btn.active  {
    color: #005e94;
    background-color:rgb(203, 236, 255);
}
</style>
';
	}


	/** {block content} on line 21 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<section>
    <div class="banner">
        <div class="container konten">
            <div class="breadcrumb">
                <ul>
                    <li><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 27 */;
		echo '\'><span>Home</span></a></li>
                    <li><span>Tentang Kompolnas</span></li>
                    <li><span>Komisioner</span></li>
                </ul>
            </div>
            <h3>Komisioner</h1>
        </div>
    </div>
    <div class="container konten page">
        
        <div class="profile">
            <div class="grid grid-cols-1 grid-rows-1 gap-8 border-b-1 border-b-gray-200 py-8
                sm:grid-cols-1
                md:grid-cols-1
                lg:grid-cols-3
                xl:grid-cols-3
                2xl:grid-cols-3
            ">
                <div class="button-nama border-0 border-r-gray-200
                    sm:border-0
                    md:border-0
                    lg:border-r-1
                    xl:border-r-1
                    2xl:border-r-1
                ">
                    <ul class="font-semibold">
                        <li class="item-profile-btn active" onclick="setProfileActive(this.dataset.content)" data-content="k1" class="cursor-pointer hover:text-yellow-400 py-4">Prof. Dr. Budi Gunawan, S.H., M.Si.</li>
                        <li class="item-profile-btn" onclick="setProfileActive(this.dataset.content)" data-content="k2" class="cursor-pointer hover:text-yellow-400 py-4">Prof. H.M. Tito Karnavian, Ph.D. </li>
                        <li class="item-profile-btn" onclick="setProfileActive(this.dataset.content)" data-content="k3" class="cursor-pointer hover:text-yellow-400 py-4">Dr. Supratman Andi Agtas, S.H., M.H.</li>
                        <li class="item-profile-btn" onclick="setProfileActive(this.dataset.content)" data-content="k4" class="cursor-pointer hover:text-yellow-400 py-4">Irjen Pol. (P) Drs. Arief Wicaksono Sudiutomo</li>
                        <li class="item-profile-btn" onclick="setProfileActive(this.dataset.content)" data-content="k5" class="cursor-pointer hover:text-yellow-400 py-4">Irjen Pol. (P) Ida Oetari Poernamasasi, S.AP., M.A</li>
                        <li class="item-profile-btn" onclick="setProfileActive(this.dataset.content)" data-content="k6" class="cursor-pointer hover:text-yellow-400 py-4">Dr. Supardi Hamid, S.Sos., M.Si. </li>
                        <li class="item-profile-btn" onclick="setProfileActive(this.dataset.content)" data-content="k7" class="cursor-pointer hover:text-yellow-400 py-4">Dr. Yusuf Warsyim, S.Ag., M.H </li>
                        <li class="item-profile-btn" onclick="setProfileActive(this.dataset.content)" data-content="k8" class="cursor-pointer hover:text-yellow-400 py-4">Mohammad Choirul Anam, S.H. </li>
                        <li class="item-profile-btn" onclick="setProfileActive(this.dataset.content)" data-content="k9" class="cursor-pointer hover:text-yellow-400 py-4">Gufron, S.H.I.  </li>
                    </ul>
                </div>
                <div class="col-start-1 col-span-1
                    sm:col-start-1 sm:col-span-1
                    md:col-start-1 md:col-span-1
                    lg:col-start-2 lg:col-span-2
                    xl:col-start-2 xl:col-span-2
                    2xl:col-start-2 2xl:col-span-2
                ">
                    <div class="detail-info">
                        <div class="flex justify-start items-center gap-6 mb-8">
                            <div class="block w-[130px] h-[150px] rounded-md overflow-hidden">
                                <img id="show-photo" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 74 */;
		echo 'assets/storage/default/pp.jpg" class="w-[130px] h-[150px] object-fit">
                            </div>
                            <div>
                                <div class="font-semibold" id="show-nama">Loading..</div>
                                <div id="show-jabatan">Loading..</div>
                            </div>
                        </div>
                        <div class="paragraph" id="show-deskripsi">Loading..</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
';
	}


	/** {block js} on line 91 */
	public function blockJs(array $ʟ_args): void
	{
		echo '<script>
let dataprofile = [
    {
        photo: baseurl + "assets/web/images/komisioner/k1.png",
        nama: "Prof. Dr. Budi Gunawan, S.H., M.Si.",
        jabatan: "Menteri Koordinator Politik dan Keamanan selaku Ketua Kompolnas",
        deskripsi: `
            <p>Prof. Dr. Budi Gunawan, S.H., M.Si. lahir di Surakarta, Jawa Tengah pada tanggal 11 Desember 1959. Budi Gunawan seorang tokoh kepolisian dan intelijen Indonesia yang saat ini menjabat sebagai Menteri Koordinator Bidang Politik dan Keamanan Republik Indonesia. Pada 5 November 2024 Budi Gunawan juga diangkat oleh Presiden Prabowo menjadi Ketua Komisi Kepolisian Nasional (Kompolnas) di Istana Negara, Jakarta pada tanggal 5 November 2024. Sembilan Anggota Kompolnas tersebut dilantik berdasarkan Keputusan Presiden (Keppres) RI Nomor 80/M Tahun 2024 tentang Pemberhentian dan Pengangkatan Keanggotaan Komisi Kepolisian Nasional yang ditetapkan tanggal 4 November 2024. Ia dilantik Presiden RI sebagai Komisioner Kompolnas 2024-2028 dari unsur Pemerintah.</p>
            <p>Budi Gunawan juga menjabat sebagai Ketua Umum Pengurus Besar e-Sports Indonesia (PB ESI). Sebelum memimpin Kemenko Polkam, Ia dikenal sebagai Kepala Badan Intelijen Negara (BIN) di era Presiden Joko Widodo. Ia adalah unsur polisi kedua setelah Sutanto yang memimpin BIN dan unsur polisi petama yang memimpin Kemenko Polkam.</p>
            <p>Perjalanan karier Budi Gunawan dimulai ketika ia lulus dari Akademi Kepolisian pada tahun 1983. Ia dikenal berprestasi baik dalam pendidikan pengembangan Polri maupun pendidikan umum. Ia berhasil menjadi lulusan terbaik di Sekolah Staf dan Pimpinan Polri/Sespimpol (1988) dan Lembaga Ketahanan Nasional/Lemhannas (2005). Program prestisius ini turut mengasah kemampuannya dalam bidang penegakan hukum dan keamanan nasional. Selain itu, ia berhasil meraih predikat Summa Cum Laude dalam program doktor ilmu hukum di Universitas Trisakti. Komitmen terhadap pendidikan dan keunggulan akademik ini menjadi landasan karier dan metode pendekatan yang digunakan Budi Gunawan dalam setiap kebijakan yang dibuatnya.</p>
            <p>Sebagai seorang perwira Polri, Budi Gunawan memegang berbagai posisi penting, di antaranya: Karobinkar SSDM, Kaselapa Lemdiklat, Kapolda Jambi, Kadiv Binkum, Kadiv Propam, Kapolda Bali, dan Kalemdiklat. Sebagai pengakuan atas kontribusinya, ia diangkat menjadi Wakil Kapolri. Kepemimpinan dan keahlian Budi Gunawan di kepolisian tidak luput dari perhatian. Ia dinobatkan sebagai jenderal termuda dan berprestasi di Polri, dan pada masa pemerintahan Presiden Megawati Soekarnoputri, ia menjabat sebagai Ajudan Wakil Presiden (1999-2000) dan Presiden Republik Indonesia (2000-2004).</p>
            <p>Pada tanggal 9 September 2016, Presiden Joko Widodo menunjuk Budi Gunawan sebagai Kepala Badan Intelijen Negara (BIN), menjadikannya perwira polisi kedua yang menduduki jabatan tersebut, setelah Jenderal Polisi Sutanto. Di bawah kepemimpinan Budi Gunawan, BIN mengalami modernisasi dan transformasi yang signifikan. Ia membentuk divisi baru untuk mengatasi ancaman yang muncul, seperti Deputi Bidang Intelijen Siber dan Deputi Bidang Intelijen Pengamanan Aparatur. Selain itu, menyadari meningkatnya ancaman virus dan senjata bio-kimia, Budi Gunawan membentuk divisi Intelijen Medis, "Wangsa Avatara". Divisi khusus ini berfokus pada pemantauan, pendeteksian, dan respons terhadap ancaman biologis, menunjukkan pendekatan proaktif Budi Gunawan untuk mengatasi tantangan keamanan yang kompleks.</p>
            <p>Komitmen Gunawan terhadap dunia akademis dan pendidikan melampaui karier profesionalnya. Ia sering memberikan kuliah umum, seminar, dan lokakarya di berbagai forum dan perguruan tinggi, baik di dalam maupun luar negeri. Keahliannya dicari oleh para akademisi, pembuat kebijakan, dan profesional keamanan, yang menghargai wawasan dan pengalamannya. Sebagai seorang penulis, Gunawan telah berkontribusi dalam wacana publik dalam berbagai topik, termasuk penegakan hukum, keamanan nasional, dan dampak teknologi terhadap masyarakat.</p>
        `
    },
    {
        photo: baseurl + "assets/web/images/komisioner/k2.png",
        nama: "Prof. H.M. Tito Karnavian, Ph.D",
        jabatan: "Menteri Dalam Negeri selaku Wakil Ketua Kompolnas",
        deskripsi: `
            <p>Jenderal Polisi (Purn.) Prof. Drs. H. Muhammad Tito Karnavian, M.A., Ph.D., lahir di Palembang, Sumatera Selatan, 26 Oktober 1964 adalah seorang birokrat dan tokoh kepolisian Indonesia yang menjabat sebagai Menteri Dalam Negeri Indonesia sejak tanggal 23 Oktober 2019 dalam Kabinet Indonesia Maju di bawah pemerintahan Joko Widodo dan Ma\'ruf Amin, sekaligus sebagai Wakil Ketua Kompolnas dari unsur Pemerintah. Sebagai seorang perwira tinggi polisi, dirinya pernah menjabat sebagai Kepala Kepolisian Negara Republik Indonesia ke-23.</p> 
            <p>Tito Karnavian mengenyam pendidikan SMA Negeri 2 Palembang kemudian melanjutkan pendidikan AKABRI pada tahun 1987 karena gratis dan tidak ingin membebankan biaya orang tuanya. Tahun 1993, Tito menyelesaikan pendidikan di Universitas Exeter di Inggris dan meraih gelar MA dalam bidang Police Studies, dan menyelesaikan pendidikan di Sekolah Tinggi Ilmu Kepolisian (STIK) di Jakarta tahun 1996 dan meraih Strata 1 dalam bidang Police Studies.</p>
            <p>Sekolah dasar dan sekolah menengah pertama ditempuh di Sekolah Xaverius, kemudian sekolah menengah atas ditempuh di SMA Negeri 2 Palembang. Tatkala duduk di kelas 3, Tito mulai mengikuti ujian perintis. Semua tes yang Ia jalani lulus, mulai dari Akademi Angkatan Bersenjata Republik Indonesia, Kedokteran di Universitas Sriwijaya, Hubungan Internasional di Universitas Gadjah Mada, dan Sekolah Tinggi Akuntansi Negara. Keempatnya lulus, tapi yang dipilih adalah AKABRI, terutama Akademi Kepolisian.</p>
            <p>Tito termasuk seorang polisi yang mendapat kenaikan pangkat cukup cepat. Saat masih menyandang pangkat AKBP, Ia memimpin tim Densus 88 yang berhasil melumpuhkan teroris Dr. Azahari di Batu, Jawa Timur, pada tanggal 9 November 2005. Pangkatnya dinaikkan, dan Ia menerima penghargaan dari Kapolri saat itu, Jenderal Pol. Sutanto bersama dengan para kompatriotnya, seperti Idham Azis, Saiful Maltha, Petrus Reinhard Golose, Rycko Amelza Dahniel, dan yang lainnya.</p>
            <p>Tito juga pernah memimpin sebuah tim khusus kepolisian yang berhasil membongkar jaringan teroris pimpinan Noordin M. Top. Atas prestasi ini, pangkatnya dinaikkan menjadi Brigadir Jenderal Polisi dan diangkat menjadi Kepala Densus 88 Anti-Teror Mabes Polri. Kariernya terus menanjak, dan Ia sempat menjabat sebagai Kapolda Papua dan Kapolda Metro Jaya. Pada tanggal 14 Maret 2016, Ia diangkat menjadi Kepala Badan Nasional Penanggulangan Terorisme (BNPT) menggantikan Komjen. Pol. Saud Usman Nasution yang memasuki masa pensiun. Pada tanggal 15 Juni 2016, Presiden Joko Widodo mengirim surat kepada DPR-RI, yang isinya menunjuk Tito sebagai calon tunggal Kapolri menggantikan Jenderal Pol. Badrodin Haiti yang akan segera pensiun. Komisi III DPR-RI menyetujui usulan ini dalam sidang paripurna mereka yang digelar pada awal bulan Juli 2016. Tito resmi dilantik sebagai Kapolri oleh Presiden Jokowi pada tanggal 13 Juli 2016.</p> 
            <p>Riwayat pendidikan Tito Karnavian, yaitu : SD Xaverius 4 di Palembang (1976), SMP Xaverius 2 di Palembang (1980), SMA Negeri 2 Palembang (1983), Akademi Kepolisian (1987); Penerima bintang Adhi Makayasa sebagai lulusan Akpol terbaik, Master of Arts (M.A.) in Police Studies, University of Exeter, UK (1993), Perguruan Tinggi Ilmu Kepolisian (PTIK) (1996); Penerima bintang Wiyata Cendekia sebagai lulusan PTIK terbaik, Royal New Zealand Air Force Command & Staff College, Auckland, New Zealand (Sesko) (1998), Bachelor of Arts (B.A.) in Strategic Studies, Massey University, New Zealand (1998), Sespim Pol, Lembang (2000), Lemhannas RI PPSA XVII (2011) penerima Bintang Seroja sebagai peserta Lemhanas terbaik, Ph.D in Strategic Studies with interest on Terrorism and Islamist Radicalization at S. Rajaratnam School of International Studies, Nanyang Technological University, Singapore (magna cum laude) (2013).</p>    
        `
    },
    {
        photo: baseurl + "assets/web/images/komisioner/k3.png",
        nama: "Dr. Supratman Andi Agtas, S.H., M.H.",
        jabatan: "Menteri Hukum selaku Anggota Kompolnas",
        deskripsi: `
            <p>Dr. Supratman Andi Agtas, S.H., M.H. (lahir 28 September 1969) adalah seorang akademisi, advokat, dan politikus Indonesia. Pada tanggal 19 Agustus 2024 dilantik oleh Presiden Joko Widodo sebagai Menteri Hukum dan Hak Asasi Manusia menggantikan Yasonna Laoly. Kemudian Ia dilantik oleh Presiden Prabowo menjadi Anggota Kompolnas 2024-2028 dari unsur Pemerintah. Pelantikan tersebut berdasarkan Keputusan Presiden (Keppres) RI Nomor 80/M Tahun 2024 tentang Pemberhentian dan Pengangkatan Keanggotaan Komisi Kepolisian Nasional yang ditetapkan tanggal 4 November 2024. Sebelumnya ia menjabat sebagai Anggota DPR-RI selama dua periode sejak 2014 hingga 2024. Ia mewakili daerah pemilihan Sulawesi Tengah. Supratman merupakan kader Partai Gerakan Indonesia Raya dan duduk di Komisi VI.</p>
            <p>Karir Dr. Supratman Andi Agtas, S.H., M.H., Dosen Fakultas Hukum Universitas Tadulako (20052012), Pengacara (2012–2014), Anggota Komisi III Dewan Perwakilan Rakyat Republik Indonesia (2014–2018), Anggota Komisi VI Dewan Perwakilan Rakyat Republik Indonesia (2018– 2019, 20192024), Ketua Baleg DPR-RI (2016–2019, 2019–2024), Menteri Hukum dan Hak Asasi Manusia RI (2024–sekarang), Selain di bidang hukum dan politik, Supratman ternyata pernah menjabat sebagai Wakil Ketua Kamar Dagang Indonesia (Kadin) Sulawesi Tengah. Dilansir dari laman fraksigerindra, Supratman juga tercatat pernah menjadi Direktur Utama Perusahaan Daerah Kota Palu pada 20052015, Komisaris PT Citra Nuansa Elok pada 2004-2012, serta Ketua Real Estate Indonesia (REI) Sulawesi Tengah periode 2004-2010. </p>    
        `
    },
    {
        photo: baseurl + "assets/web/images/komisioner/k4.png",
        nama: "Irjen Pol. (P) Drs. Arief Wicaksono Sudiutomo",
        jabatan: "Sekretaris/Anggota Kompolnas",
        deskripsi: `
            <p>Irjen Pol. (P) Drs. Arief Wicaksono Sudiutomo lahir di Semarang, 15 Maret 1960 adalah seorang purnawirawan Polri yang pensiun TMT 1 April 2018. Ia dilantik oleh Presiden Prabowo menjadi Anggota Kompolnas 2024-2028 dari unsur Pakar Kepolisian. Pelantikan tersebut berdasarkan Keputusan Presiden (Keppres) RI Nomor 80/M Tahun 2024 tentang Pemberhentian dan Pengangkatan Keanggotaan Komisi Kepolisian Nasional yang ditetapkan tanggal 4 November 2024.</p>
            <p>Ia pernah menjabat sebagai Deputi Hukum dan Kerja Sama Badan Narkotika Nasional (BNN) pada tahun 2016-2018, Atase Polri KBRI Divhubinter Washington DC 2011-2015, dan Ses NCB Interpol Divhubinter Polri tahun 2010-2011. </p>
            <p>Tanda jasa yang pernah diraih oleh Irjen Pol. (P) Drs. Arief Wicaksono Sudiutomo antara lain: Satya Lencana Kesetiaan 8 tahun, Satya Lencana Dwija Sistha, UN Medal Bosnia & Herzegovina, Satya  Lencana Santi Dharma, UN Medal Eastern Slavonia, dan lain-lain. </p>
            <p>Pendidikan Kejuruan yang pernah diikuti antara lain: Senior Law Enforcement Officers, FBI Academy Quantico di Virginia Amerika Serikat,  Criminal Reduction Course di Jepang, Police Management Development Program Australian Institute Police Management di Manly Australia,  Forensic Course di Seattle Amerika Serikat, FBI Joint Task Force di Amerika Serikat, Anti Terrorism Emimcs Albuquerque di New Mexico Amerika Serikat,  Anti Teror Socoro di New Mexico Amerika Serikat, Dik Lantas IV di Apeldoorn Belanda, dan lain-lain.</p>
        `
    },
    {
        photo: baseurl + "assets/web/images/komisioner/k5.png",
        nama: "Irjen Pol. (P) Ida Oetari Poernamasasi, S.AP., M.A. ",
        jabatan: "Anggota Kompolnas",
        deskripsi: `
            <p>Irjen Pol. (P) Ida Oetari Poernamasasi, S.AP., M.A. merupakan Anggota Kompolnas 20242028 dari unsur Pakar Kepolisian. Dilantik oleh Presiden RI Prabowo Subianto menjadi Anggota Kompolnas 2024-2028 dari unsur Pakar Kepolisian. Pelantikan tersebut berdasarkan Keputusan Presiden (Keppres) RI Nomor 80/M Tahun 2024 tentang Pemberhentian dan Pengangkatan Keanggotaan Komisi Kepolisian Nasional yang ditetapkan tanggal 4 November 2024. Ia merupakan purnawirawan Polri lulusan Sepa Milsuk Polri angkatan IV tahun 1987. Jabatan terakhir di Polri menjabat sebagai Wakil Kepala Kepolisian Daerah Kalimantan Tengah.</p>
            <p>Perempuan kelahiran Probolinggo, Jawa Timur pada tanggal 09 Desember 1964 ini tercatat pernah menduduki sejumlah jabatan penting dan strategis, mulai bertugas di Polda Jatim selama 17 tahun sebagai Tenaga Kesehatan Lingkungan, sebagai Staf Pribadi Pimpinan, sebagai Kabag Perawatan Personil, sebagai Ketua Pusat Pelayanan Terpadu Korban kekerasan terhadap perempuan dan anak. Kemudian pernah bertugas di Mabes Polri, yaitu di SDM Polri di bagian pembinaan Karir, sebagai Kabag Kerja Sama Luar Negeri dan sebagai kabag Penugasan Khusus di Biro pembinaan Karir.  Selanjutnya pernah bertugas di BNN sebagai Direktur Penguatan Lembaga Rehabilitasi Instansi Pemerintah.  Bertugas di Lembaga Pendidikan Polri - Mabes Polri, sebagai Wakapolda Kalteng, dan pernah mengikuti peningkatan Kapasitas di bidang Penanganan kekerasan terhadap Perempuan dan anak, penanganan komprehenship penyalahgunaan narkoba, Trainning and Education, Women in Policing, Tim Lidik Credit Card Froud in Singapore.</p>
            <p>Pada tahun 2004-2006 Ia pernah menjadi pelaksana Harian Gubernur Jawa Timur dalam mengelola Pusat Pelayanan Terpadu bagi Korban kekerasan terhadap Perempuan dan Anak Pertama di Indonesia dan menjadi tempat studi Banding Provinsi lain. Pelayanan satu atap yang dikelola bersama antar stakeholder termasuk LSM berupa : kesehatan, psikologi dan sosial, bantuan hukum, penyidikan dan reintegrasi sosial. Menciptakan bangunan networking dengan Instansi dan NGO didalam dan luar negeri antara lain : ILO, Unicef, UN Women, Save the Children, ICJ. b. Tahun 2014. Kemudian  mengembangkan Pelayanan Rehabilitasi Pecandu Narkoba sebagaimana diamanatkan oleh UU Narkotika di Lampung, Medan, Batam. Kaltim. Membangun Aplikasi SIRENA untuk mendata jumlah Pecandu yang dirawat di Indonesia, Mengembangkan Tim Assesment Terpadu (TAT) untuk menentukan seseorang sebagai Pecandu yang berhadapan dengan hukum.</p>
            <p>Pada tahun 2017 sebagai Pembina Polwan dalam misi pendakian di Puncak Cartenz dan mendapatkan PIN Emas Kapolri. Selanjutnya pada tahun 2019 mendapatkan PIN Emas Kapolri atas membawa Polwan Indonesia di pentas Internasional dan sebagai Ketua Tim Pemenangan Bidding Indonesia menjadi Tuan Rumah Konferensi Polwan Sedunia di Equador. Indonesia menjadi Negara Pertama di Asia yang menjadi tuan rumah konferensi ke 58 Asosiasi Polwan sedunia (the 58th International Association Women Police Conference).  Sampai sekarang Ia masih sebagai The Third Vice President International Association Women Police (IAWP), Polwan Asia pertama sebagai Vice President IAWP Ketua Konferensi ke 58 Asosiasi Polwan sedunia (IAWP) di Indonesia.</p>
            <p>Irjen Pol. (P) Ida Oetari Poernamasasi, S.AP., M.A. memiliki cukup banyak minat dan bakat seperti Pembinaan Sumber Daya Manusia, Critical Thinking in Organization Development, Women in Policing, dan Design Kebijakan Publik.</p>
        `
    },
    {
        photo: baseurl + "assets/web/images/komisioner/k6.png",
        nama: "Dr. Supardi Hamid, S.Sos., M.Si. ",
        jabatan: "Anggota Kompolnas",
        deskripsi: `
            <p>Dr. Supardi Hamid, S.Sos., M.Si. merupakan Anggota Kompolnas 2024-2028 dari unsur Pakar Kepolisian. Ia dilantik oleh Presiden RI Prabowo Subianto menjadi Anggota Kompolnas 2024-2028 berdasarkan Keputusan Presiden (Keppres) RI Nomor 80/M Tahun 2024 tentang Pemberhentian dan Pengangkatan Keanggotaan Komisi Kepolisian Nasional yang ditetapkan tanggal 4 November 2024.</p>
            <p>Pria kelahiran Palembang, 2 Maret 1970 tersebut memiliki latar belakang akademik. Ia merupakan Dosen Tetap di Sekolah Tinggi Ilmu Kepolisian (STIK) dan Dosen Tidak Tetap Departemen Krimnologi FISIP-UI. Ia merupakan pakar kriminologi, pendidikan yang ditempuh di Universitas Indonesia dijurusan Kriminologi mulai dari S1 s.d. S3. Berbagai pelatihan yang pernah ditempuh yaitu Crisis Management di Kedutaan Besar Inggris-PTIK tahun 2005 dan tahun 2006, Sistem Manajemen Keadaan Darurat di ICITAP tahun 2007, dan Distance Learning Training di Northern Arizona University- STIK PTIK tahun 2013.</p>
            <p>Dr. Supardi Hamid, S.Sos., M.Si. memiliki pengalaman kerja sebagai Dosen Program Pascasaraja (Program Magister dan Doktoral) Kriminologi FISIP-UI pada tahun 2016-2019, Dosen Tidak Tetap Universitas Mercu Buana Jakarta tahun 1996-2011, Dosen Tidak Tetap Uhamka Jakarta tahun 2000, Dosen Tidak Tetap STIKOM-Prosia Jakarta tahun 2000, dan Tim Penilai (Assessor) Key Performance Index Fisip- UI tahun 2010.</p>
            <p>Banyak penelitian yang dilakukan oleh  Dr. Supardi Hamid, S.Sos., M.Si. diantaranya, yaitu: sebagai Peneliti Utama tentang Keberlakuan Normatif SE Kapolri tentang Penerapan Restorative Justice dalam Penyelesaian Perkara Pidana yang diselenggarakan oleh Kompolnas tahun 2018, sebagai Peneliti tentang Efektivitas Pengawasan Orang Asing di Indonesia yang diselenggarakan oleh PPITK PTIK tahun 2019, sebagai Peneliti Utama tentang Pencegahan Transformasi Radikal individu kedalam Kelompok Radikal melalui Penguatan Kapasitas Personil dan Kapasitas Kelembagaan Satuan Kewilayahan Polri yang diselenggarakan oleh CTRS tahun 2019, sebagai Peneliti Utama tentang Pendekatan Kesisteman Pengelolaan SDM Polri dalam  penanggulangan Terrorisme dan Radikalisme yang diselenggarakan oleh STIK-PTIK tahun 2021, sebagai  Peneliti Utama tentang Peningkatan Deteksi Aksi dalam Pemetaan Kamtaibmas melalui Pendekatan Pemolisian Prediktif yang diselenggarakan oleh STIK-PTIK tahun 2022, dan lain-lain.</p>
        `
    },
    {
        photo: baseurl + "assets/web/images/komisioner/k7.png",
        nama: "Dr. Yusuf Warsyim, S.Ag., M.H",
        jabatan: "Anggota Kompolnas",
        deskripsi: `
            <p>Yusuf atau lebih dikenal Yusuf Warsyim sebagai Anggota Kompolnas masa bakti tahun 2020-2024 dari unsur Tokoh Masyarakat. Kemudian Ia terpilih kembali untuk periode kedua dan dilantik oleh Presiden RI Prabowo Subianto menjadi Anggota Kompolnas 2024-2028 dari unsur Tokoh Masyarakat. Pelantikan tersebut berdasarkan Keputusan Presiden (Keppres) RI Nomor 80/M Tahun 2024 tentang Pemberhentian dan Pengangkatan Keanggotaan Komisi Kepolisian Nasional yang ditetapkan tanggal 4 November 2024.</p>
            <p>Aktivitas Yusuf sebagai Unsur Tokoh Masyarakat lebih banyak di lingkungan Muhammadiyah sebagai salah satu organisasi terbesar di Indonesia. Keaktifannya saat ini di Koordinator Nasional Forum Keluarga Alumni Ikatan Mahasiswa Muhammadiyah (KORNAS FOKAL IMM) dari sejak tahun 2016 sebagai Anggota Dewan Pertimbangan. Sebelumnya pernah menjabat sebagai Sekretaris Jenderal Dewan Pimpinan Pusat Ikatan Mahasiswa Muhammadiyah (DPP IMM) tahun 1999-2001, Sekretaris Lembaga Hikmah dan Kebijakan Publik (LHKP) PP Muhammadiyah masa amaliyah tahun 2010-2015. Selain di lingkungan Muhammadiyah, Yusuf juga aktif sebagai Ketua Lembaga Masyarakat Utama (eLMU), sebuah lembaga swadaya masyarakat yang pernah bermitra dengan Satpol PP Pemerintah Provinsi DKI Jakarta dalam melakukan pembinaan masyarakat dan sosialisasi peraturan perundangan-undangan kepada masyarakat DKI Jakarta.</p>
            <p>Selain aktif dalam organisasi kemasyarakatan, Yusuf sebelum menjabat sebagai Anggota Kompolnas saat ini, telah cukup lama bekerja sebagai Tenaga Ahli di DPR-RI yang membidangi hukum dan etika. Sejak Masa Keanggotaan Tahun 2009-2014 sebagai Tenaga Ahli di Pimpinan Badan Kehormatan (BK) DPR RI serta Masa Keanggotaan Tahun 2014-2019 dan Tahun 2019- 2024 sebagai Tenaga Ahli di Mahkamah Kehormatan Dewan DPR RI (MKD) yang kemudian mengundurkan diri pada tanggal 18 Agustus 2020 karena dilantik sebagai Anggota Kompolnas oleh Presiden RI Joko Widodo. Dari perjalanan bekerja tersebut, Yusuf telah berpengalaman di bidang penegakan etika, terutama kode etik DPR-RI. Dengan pengalaman tersebut, Yusuf ingin memperkuat Kompolnas memiliki peran yang sangat strategis dalam penegakan Kode Etik Profesi Polri (KEPP) melalui pelaksanaan fungsi pengawasan fungsional yang dimilikinya. Dengan keahliannya, Yusuf aktif menjadi Narasumber dalam berbagai kegiatan yang diselanggarakan oleh Badan Kehormatan (BK) DPRD baik Provinsi maupun Kabupaten/Kota dalam kegiatan seminar dan rapat serta penyusunan peraturan DPRD tentang kode etik DPRD. Melalui MKD DPR-RI dari sejak Masa Keanggotaan Tahun 2014-2019 dan Tahun 20192020, dalam menjalankan pekerjaannya, Yusuf telah sering berhubungan dengan Polri, baik melalui kegiatan penyelidikan dugaan pelanggaran kode etik Anggota DPR-RI yang terkait dengan adanya Laporan Polisi maupun melalui kegiatan sosialisasi fungsi, tugas, dan wewenang MKD DPR-RI di lingkungan kewilayahan Polri.</p>
            <p>Pendidikan terkait dengan keahlian yang dimilikinya, Yusuf kuliah S2 Magister Hukum di Universitas Jayabaya dan saat ini masih berjalan kuliah S3 Ilmu Hukum di Universitas 17 Agustus Jakarta. Yusuf sebelumnya merupakan alumni S1 Institut Agama Islam Negeri (IAIN) Sumatera Utara yang saat ini bernama Universitas Islam Negeri Sumatera Utara (UINSU). Selain pendidikan formal, Yusuf juga telah mengikuti pelatihan keahlian, diantaranya Pelatihan Para Legal tahun 1999 dan Pelatihan Legislative Drafting tahun 2015</p>
            <p>Karya tulis yang pernah dibuat Yusuf, diantaranya, Kekuasaan Presiden Dalam Pemberian Persetujuan Penyidikan Anggota Dewan Perwakilan Rakyat, Tesis Magister Ilmu Hukum (2016), Terobosan Legislasi Sistem Etika Lembaga Perwakilan: Menimbang RUU Etika Lembaga Perwakilan, dalam Buku Menjaga Kehormatan Lembaga Perwakilan (MKD, 2016 dan 2019), dan Peran Etika Dalam Peningkatan Kinerja Anggota DPR-RI, dalam Buku Dinamika dan Tantangan Kinerja Lembaga Perwakilan, Buku (MKD, 2017).</p>
        `
    },
    {
        photo: baseurl + "assets/web/images/komisioner/k8.png",
        nama: "Mohammad Choirul Anam, S.H",
        jabatan: "Anggota Kompolnas",
        deskripsi: `
            <p>Mohammad Choirul Anam sebagai Komisioner Kompolnas 2024-2028 dari unsur Tokoh Masyarakat. Lahir di Malang pada 25 April 1977, adalah seorang advokat dan aktivis hak asasi manusia di Indonesia yang saat ini menjabat sebagai Anggota Komisi Kepolisian Nasional sejak 5 November 2024. Beliau dikenal atas keterlibatannya dalam berbagai organisasi hak asasi manusia dan peran pentingnya di Komisi Nasional Hak Asasi Manusia (Komnas HAM). Karir Choirul Anam di bidang hukum dan HAM dimulai dengan perannya sebagai volunteer di LBH Surabaya, berlanjut dengan jabatan strategis di YLBHI dan HRWG. Pengalamannya mencakup advokasi hukum di berbagai kasus penting, termasuk pembelaan hak-hak marginal dan pekerjaan di Komite Aksi Solidaritas Untuk Munir.</p>
            <p>Di panggung internasional, ia telah mewakili Indonesia di forum HAM di Geneva dan aktif dalam kampanye serta advokasi untuk isu-isu global. Anam juga dikenal atas kemampuannya dalam memimpin dan berkontribusi pada organisasi-organisasi yang berfokus pada pemberdayaan komunitas dan penguatan kapasitas di bidang HAM.</p>
            <p>Salah satu pengalaman Anam adalah menjadi tim legal, lawyer dan sekretaris KASUM (Komite Aksi Solidaritas Untuk Munir). Di samping itu Choirul Anam pernah menjadi Dewan pengawas CMARS (Center for Marginalized Communities Studies) Surabaya dan fasilitator sekolah HAM untuk santri (SEHATI) Jawa Timur.</p>
            <p>Sejumlah pengalaman lainnya adalah menjadi Lawyer and Campaign untuk Koalisi Anti Deportasi terutama untuk BMI korban deportasi Malaysia selama 2 tahun sejak 2002. Ia juga menjadi advokasi dan campaigner AWG (Aceh Working Group) untuk perdamaian dan penegakan HAM di tahun 2003 sampai 2006. Anam juga sempat didelegasikan untuk sidang Komisi HAM di Geneva ke60 dan 61 pada tahun 2004 dan 2005, serta delegasi NGO Indonesia untuk sidang Komite CERD di Geneva, Agustus 2007.</p>
        `
    },
    {
        photo: baseurl + "assets/web/images/komisioner/k9.png",
        nama: "Gufron, S.H.I",
        jabatan: "Anggota Kompolnas",
        deskripsi: `
            <p>Gufron menjabat sebagai Komisioner Kompolnas 2024-2028 dari unsur Tokoh Masyarakat sejak 5 November 2024. Gufron lahir di Majalengka 5 Juli 1980. Memiliki pengalaman selama 20 tahun dalam melakukan pemantauan, penelitian dan advokasi hukum, HAM, serta reformasi sektor keamanan. Sebelum menjadi Anggota Kompolnas, Gufron pernah menjabat sebagai Direktur Imparsial (The Indonesian Human Rights Monitor) dan Ketua Pimpinan Pusat GP Ansor, sebuah organisiasi otonom berbasis kepemudaan Pengurus Besar Nahdlatul Ulama (PBNU).</p>
            <p>Pengalaman Gufron di bidang Internasional diantaranya adalah, Learning Event on Tolerance and Freedom of Religion and Belief di Belanda 2016 dan Kenya 2019, Gwangju Democracy Forum di Korea Selatan 2016, Human Rights Folk School Gwangju di Korea Selatan 2008 dan Asia Pasific Forum di Kuala Lumpur Malaysia 2008.</p>
            <p>Selain itu, Gufron memiliki jumlah karya ilmiah yang telah dipublikasikan baik artikel opini, jurnal, maupun buku. Gufron juga aktif mengisi berbagai pelatian terkait HAM dan Reformasi Sektor Keamanan.</p>
        `
    }
];

function showProfileDefault(x){
    let showphoto = el("#show-photo");
    let shownama = el("#show-nama");
    let showjabatan = el("#show-jabatan");
    let showdeskripsi = el("#show-deskripsi");
    showphoto.src = dataprofile[x].photo;
    shownama.innerHTML = dataprofile[x].nama;
    showjabatan.innerHTML = dataprofile[x].jabatan;
    showdeskripsi.innerHTML = dataprofile[x].deskripsi;
}

showProfileDefault(0);

setProfileActive = (x) =>{
    let datacontent = document.querySelectorAll(".item-profile-btn");
    let showphoto = el("#show-photo");
    let shownama = el("#show-nama");
    let showjabatan = el("#show-jabatan");
    let showdeskripsi = el("#show-deskripsi");

    showphoto.src = baseurl + "assets/storage/default/pp.jpg";
    shownama.innerHTML = "Loading..";
    showjabatan.innerHTML = "Loading..";
    showdeskripsi.innerHTML = "Loading..";

    if(datacontent){
        for(let i=0; i<datacontent.length; i++){
            datacontent[i].classList.remove("active");
            if(datacontent[i].dataset.content == x){
                datacontent[i].classList.add("active");
                showphoto.src = dataprofile[i].photo;
                shownama.innerHTML = dataprofile[i].nama;
                showjabatan.innerHTML = dataprofile[i].jabatan;
                showdeskripsi.innerHTML = dataprofile[i].deskripsi;
            }
        }
    }

}
</script>
';
	}
}
