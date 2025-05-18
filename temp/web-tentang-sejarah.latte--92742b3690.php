<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/web/tentang/sejarah.latte */
final class Template_92742b3690 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/web/tentang/sejarah.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 5 */;
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
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 3 */;
		echo 'assets/web/css/carousel.css" />
';
	}


	/** {block content} on line 5 */
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
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 11 */;
		echo '\'><span>Home</span></a></li>
                    <li><span>Tentang Kompolnas</span></li>
                    <li><span>Sejarah</span></li>
                </ul>
            </div>
            <h3>Sejarah</h1>
        </div>
    </div>
    <div class="container konten page">
        <div class="block justify-center items-center gap-4
            sm:block
            md:block
            lg:flex
            xl:flex
            2xl:flex
        ">
            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 27 */;
		echo 'assets/web/images/gedung_kompolnas.jpg" class="w-full">
            <div class="w-full text-center py-4
                sm:w-full sm:text-center
                md:w-full md:text-center
                lg:w-[150px] lg:text-left
                xl:w-[150px] xl:text-left
                2xl:w-[150px] 2xl:text-left
            ">
                <div class="font-semibold">Gedung Komisi Kepolisian Nasional</div>
                <div>Jl. Tirtayasa VII No. 20 Kebayoran Baru, Jakarta Selatan</div>
            </div>
        </div>
        <h1 class="text-center my-8 text-[28pt] leading-[45px] font-bold
            sm:text-[28pt] sm:leading-[45px]
            md:text-[28pt] md:leading-[45px]
            lg:text-[34pt] lg:leading-[60px]
            xl:text-[34pt] xl:leading-[60px]
            2xl:text-[34pt] 2xl:leading-[60px]
        ">Sejarah Terbentuknya Komisi Kepolisian Nasional (Kompolnas)</h1>
        <div class="format-koran">
            <p>
                Sejalan dengan proses reformasi nasional yang menuntut dilakukannya demokratisasi pemerintahan, pemerintah kemudian menerbitkan Ketetapan Majelis Permusyawaratan Rakyat (TAP MPR) Nomor VI Tahun 2000 tentang Pemisahan TNI dan Polri, dan TAP MPR RI No. VII/MPR/2000 yang mengatur tentang Peran Tentara Nasional Indonesia (TNI) dan Kepolisian Negara Republik Indonesia (Polri).    
            </p>
            <p>
                Selanjutnya amanat tersebut melahirkan Undang-Undang Nomor 2 Tahun 2002 tentang Kepolisian Negara Republik Indonesia, dan Undang-Undang Nomor 34 Tahun 2004 tentang Tentara Nasional Indonesia.
            </p>
            <p>
                Reformasi ini menempatkan TNI berkedudukan di bawah Presiden dalam hal pengerahan dan penggunaan kekuatan militer, sedangkan dalam kebijakan dan strategi pertahanan serta dukungan administrasi, TNI di bawah koordinasi Departemen Pertahanan. Sementara Polri berada langsung di bawah Presiden RI, sehingga Arah Kebijakan Polri ditetapkan oleh Presiden RI.
            </p>
            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 56 */;
		echo 'assets/web/images/sby.jpg" class="w-full">
            <p>
                Sehubungan belum ada Lembaga yang membantu Presiden dalam menetapkan arah kebijakan Polri, maka Presiden RI Dr. H. Susilo Bambang Yudoyono pada waktu itu membentuk Lembaga Kepolisian Nasional yang disebut Komisi Kepolisian Nasional (Komponas) dengan menerbitkan Peraturan Presiden Nomor 17 Tahun 2005 pada tanggal 7 Februari 2005 tentang Komisi Kepolisian Nasional. Selanjutnya Peraturan ini dipandang sudah tidak sesuai lagi dengan kebutuhan untuk mewujudkan profesionalisme, akuntabilitas, dan kemandirian Kompolnas, sehingga diganti dengan Peraturan Presiden Nomor 17 Tahun 2011 pada tanggal 4 Maret 2011 tentang Komisi Kepolisian Nasional.
            </p>
            <p>
                Berdasarkan ketentuan Pasal 38 Undang-Undang No. 2 Tahun 2002 dan Pasal 4 Peraturan Presiden No. 17 Tahun 2011, Tugas Kompolnas adalah Membantu Presiden dalam menentukan arah kebijakan Polri; dan
            </p>
            <p>
                Memberikan pertimbangan ke Presiden dalam pengangkatan dan pemberhentian Kapolri.
                Kedudukan Kompolnas di bawah dan bertanggung jawab kepada Presiden RI. Sementara keanggotaan Kompolnas sebanyak 9 (sembilan) orang yang terdiri dari unsur Pemerintah (ex-officio) sebanyak 3 (tiga) orang yakni Menko Polhukam, Menteri Dalam Negeri, dan Menteri Hukum dan HAM, unsur Pakar Kepolisian sebanyak 3 (tiga) orang, dan unsur Tokoh Masyarakat sebanyak 3 (tiga) orang.
            </p>
        </div>
        <div class="my-8">
            <div class="mb-4">Berikut daftar nama-nama Anggota Kompolnas pada masanya:</div>
            <div class="periode mb-1">
                <input type="checkbox" id="periode1" class="peer hidden">
                <label for="periode1" class="font-semibold flex justify-between items-center cursor-pointer p-3 bg-white shadow-sm ">
                    <span>Periode I dan II Tahun 2006-2012</span>
                    <svg class="w-4 rotate-none peer-checked:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                    </svg>
                </label>
                <div class="hidden peer-checked:block p-3">
                    <div class="grid grid-cols-1 grid-rows-none gap-4
                        sm:grid-cols-1 sm:grid-rows-none
                        md:grid-cols-1 md:grid-rows-none
                        lg:grid-cols-2 lg:grid-rows-3
                        xl:grid-cols-2 xl:grid-rows-3
                        2xl:grid-cols-2 2xl:grid-rows-3
                    ">
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://gard.co.id/wp-content/uploads/2023/08/komisaris-utama.png" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Irjen Pol (P) Drs. Ronny Lihawa, M.Si.</div>
                                <div>Sekretaris Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Adnan_Pandu_Praja.jpg/220px-Adnan_Pandu_Praja.jpg" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Adnan Pandu Praja, S.H., LL.M.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://awsimages.detik.net.id/customthumb/2010/09/27/158/KOM-NOVELdalam.jpg?w=600&q=90" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Novel Ali, S.H.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://pwi.or.id/uploads/images/avatar/avatar-0101-7723-4453fcecf0414f808e86048bca8cb588.jpeg" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Sukarni Ilyas, S.H.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBc2pxEFxk0Pwiky1PZTmkA9KObolh_fF9uA&s" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Prof. Dr. H. La Ode Husen, S.H., M.Hum.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://i1.rgstatic.net/ii/profile.image/913412473249792-1594785912655_Q512/Erlyn-Indarti.jpg" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Prof. Erlyn Indarti, S.H., M.A., Ph.D.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="periode mb-1">
                <input type="checkbox" id="periode3" class="peer hidden">
                <label for="periode3" class="font-semibold flex justify-between items-center cursor-pointer p-3 bg-white shadow-sm ">
                    <span>Periode III Tahun 2012-2016</span>
                    <svg class="w-4 rotate-none peer-checked:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                    </svg>
                </label>
                <div class="hidden peer-checked:block p-3">
                    <div class="grid grid-cols-1 grid-rows-none gap-4
                        sm:grid-cols-1 sm:grid-rows-none
                        md:grid-cols-1 md:grid-rows-none
                        lg:grid-cols-2 lg:grid-rows-3
                        xl:grid-cols-2 xl:grid-rows-3
                        2xl:grid-cols-2 2xl:grid-rows-3
                    ">
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://rmol.id/images/berita/normal/2015/02/710603_09365112022015_Irjen-Pol-(Purn)-Logan-Siagian.jpg" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Irjen Pol (P) Drs Logan Siagian M.H.</div>
                                <div>Sekretaris Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://i0.wp.com/kabartangsel.com/wp-content/uploads/2014/01/Kompolnas-Syafriadi-Cut-Ali.jpg?fit=664%2C498&ssl=1" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Brigjen Pol (P) Syafriadi Cut Ali</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://antikorupsi.org/sites/default/files/styles/article_img_body/public/articleimage/adrianus-meliala.jpg?itok=2Q1YPX1J" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Prof. Drs. Adrianus E. Meliala M.Si. M.Sc.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://deepublishstore.com/wp-content/uploads/2020/08/Hamidah-scaled.jpg" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Dr. Hamidah Abdurrachman, S.H., M.H.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://asset-2.tstatic.net/tribunnews/foto/images/preview/m-nasser-komisioner-kompolnas_20150624_171626.jpg" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Dr. M. Nasser, Sp. KK. D.LAW.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://fh.ubharajaya.ac.id/wp-content/uploads/2024/07/Edi-Saputra-Hasibuan.png" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Drs. Edi Saputra Hasibuan, S.H., M.H.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="periode mb-1">
                <input type="checkbox" id="periode4" class="peer hidden">
                <label for="periode4" class="font-semibold flex justify-between items-center cursor-pointer p-3 bg-white shadow-sm ">
                    <span>Periode IV Tahun 2016-2020</span>
                    <svg class="w-4 rotate-none peer-checked:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                    </svg>
                </label>
                <div class="hidden peer-checked:block p-3">
                    <div class="grid grid-cols-1 grid-rows-none gap-4
                        sm:grid-cols-1 sm:grid-rows-none
                        md:grid-cols-1 md:grid-rows-none
                        lg:grid-cols-2 lg:grid-rows-3
                        xl:grid-cols-2 xl:grid-rows-3
                        2xl:grid-cols-2 2xl:grid-rows-3
                    ">
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaWzzdw6ljP7p6EBkbYSBn7EiFgkiju5Z-Xg&s" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Irjen Pol (P) Drs. Bekto Suprapto, M.Si.</div>
                                <div>Sekretaris Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://cdn.rri.co.id/berita/Manokwari/o/1727007316893-1000160559/l5x5ifd92pt4o97.jpeg" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Irjen Pol (P) Drs. Yotje Mende, M.Hum.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://lemhannas.go.id/cdn/library/2/4/7/0/bapak-andrea-taprof.jpg">
                            </div>
                            <div>
                                <div class="font-semibold">Andrea H. Poeloengan, S.H, M.Hum, M.TCP.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://i2.wp.com/revolusinews.com/wp-content/uploads/2023/05/IMG-20230512-WA0027.jpg">
                            </div>
                            <div>
                                <div class="font-semibold">Ir. Dede Farhan Aulawi, S.E., M.M.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 270 */;
		echo 'assets/web/images/image.png">
                            </div>
                            <div>
                                <div class="font-semibold">Alm. Dr. Benedictus Bambang Nurhadi, S.H., M.Hum.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://womenunlimited.id/images/photo-1672383468.8541.jpg">
                            </div>
                            <div>
                                <div class="font-semibold">Poengky Indarti, S.H., LLM.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="periode mb-1">
                <input type="checkbox" id="periode5" class="peer hidden">
                <label for="periode5" class="font-semibold flex justify-between items-center cursor-pointer p-3 bg-white shadow-sm ">
                    <span>Periode V Tahun 2020-2024</span>
                    <svg class="w-4 rotate-none peer-checked:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                    </svg>
                </label>
                <div class="hidden peer-checked:block p-3">
                    <div class="grid grid-cols-1 grid-rows-none gap-4
                        sm:grid-cols-1 sm:grid-rows-none
                        md:grid-cols-1 md:grid-rows-none
                        lg:grid-cols-2 lg:grid-rows-3
                        xl:grid-cols-2 xl:grid-rows-3
                        2xl:grid-cols-2 2xl:grid-rows-3
                    ">
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRamI59Ne4arh8a4pocZfjFCkZ-OvVpU8TV9Q&s" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Dr. Benny Jozua Mamoto, S.H., M.Si.</div>
                                <div>Sekretaris Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://asset-2.tstatic.net/tribunnews/foto/bank/images/pudji-hartanto-iskandar-okq123.jpg" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Drs. Pudji Hartanto Iskandar, M.M.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://media.licdn.com/dms/image/v2/C5103AQHu3WGwBxx6tg/profile-displayphoto-shrink_200_200/profile-displayphoto-shrink_200_200/0/1517440171507?e=2147483647&v=beta&t=a6GosGnZdjPoI4XFfteKzgOmR6uAyqVdiZXb_5R3AGE" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Prof. Dr. Albertus Wahyurudhanto, M.M.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://www.pilar.id/wp-content/uploads/2023/05/img-pilar-133.jpg" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Dr. (C) Yusuf, S.Ag., M.H.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnd5JSGkQwu1WXh5kgixQMakZSECAaIbHoLQ&s" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">H. Mohammad Dawam, S.H.I., M.H.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                        <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                            <div class="w-20 h-20 rounded-full overflow-hidden">
                                <img src="https://womenunlimited.id/images/photo-1672383468.8541.jpg" class="w-20 h-20 object-cover">
                            </div>
                            <div>
                                <div class="font-semibold">Poengky Indarti, S.H., LLM.</div>
                                <div>Anggota Kompolnas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-justify">
            Dalam melaksanakan tugas dan wewenangnya tersebut, Kompolnas dibantu oleh Sekretariat Kompolnas yang berada di bawah lingkungan Kementerian Koordinator Bidang Politik, Hukum dan Keamanan (Kemenko Polhukam). Sekretariat Kompolnas secara fungsional berada di bawah dan bertanggung jawab kepada Kompolnas dan secara administratif bertanggung jawab kepada Menteri Koordinator Bidang Politik, Hukum dan Keamanan (Menko Polhukam) melalui Sekretaris Menteri Koordinator Politik, Hukum dan Keamanan (Ses Menko Polhulkam). Sekretariat Kompolnas dipimpin oleh Kepala Sekretariat Kompolnas yang membawahi Bagian Dukungan Teknis, Bagian Hukum, Informasi dan Komunikasi, Bagian Perencanaan dan Kerja Sama, dan Bagian Umum. Sekretariat Kompolnas mempunyai tugas memberikan dukungan teknis dan administratif kepada Kompolnas.
        </p>
    </div>
</section>
';
	}
}
