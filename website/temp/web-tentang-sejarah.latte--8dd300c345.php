<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/web/tentang/sejarah.latte */
final class Template_8dd300c345 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/web/tentang/sejarah.latte';

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

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['p' => '71', 'k' => '88'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
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
            
';
		foreach ($periode as $p) /* line 71 */ {
			echo '                <div class="periode mb-1">
                    <input type="checkbox" id="';
			echo LR\Filters::escapeHtmlAttr($p->id) /* line 73 */;
			echo '" class="peer hidden">
                    <label for="';
			echo LR\Filters::escapeHtmlAttr($p->id) /* line 74 */;
			echo '" class="font-semibold flex justify-between items-center cursor-pointer p-3 bg-white shadow-sm ">
                        <span>';
			echo LR\Filters::escapeHtmlText($p->periode) /* line 75 */;
			echo '</span>
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
';
			foreach ($komisioner as $k) /* line 88 */ {
				if ($k->periode == $p->periode) /* line 89 */ {
					echo '                            <div class="border-b-1 border-b-gray-300 py-3 flex justify-start items-center gap-4">
                                <div class="w-20 h-20 rounded-full overflow-hidden">
                                    <img src="';
					echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 92 */;
					echo LR\Filters::escapeHtmlAttr($k->photo) /* line 92 */;
					echo '" class="w-20 h-20 object-cover">
                                </div>
                                <div>
                                    <div class="font-semibold">';
					echo LR\Filters::escapeHtmlText($k->nama) /* line 95 */;
					echo '</div>
                                    <div>';
					echo LR\Filters::escapeHtmlText($k->jabatan) /* line 96 */;
					echo '</div>
                                </div>
                            </div>
';
				}

			}

			echo '                        </div>
                    </div>
                </div>
';

		}

		echo '
        </div>
        <p class="text-justify">
            Dalam melaksanakan tugas dan wewenangnya tersebut, Kompolnas dibantu oleh Sekretariat Kompolnas yang berada di bawah lingkungan Kementerian Koordinator Bidang Politik, Hukum dan Keamanan (Kemenko Polhukam). Sekretariat Kompolnas secara fungsional berada di bawah dan bertanggung jawab kepada Kompolnas dan secara administratif bertanggung jawab kepada Menteri Koordinator Bidang Politik, Hukum dan Keamanan (Menko Polhukam) melalui Sekretaris Menteri Koordinator Politik, Hukum dan Keamanan (Ses Menko Polhulkam). Sekretariat Kompolnas dipimpin oleh Kepala Sekretariat Kompolnas yang membawahi Bagian Dukungan Teknis, Bagian Hukum, Informasi dan Komunikasi, Bagian Perencanaan dan Kerja Sama, dan Bagian Umum. Sekretariat Kompolnas mempunyai tugas memberikan dukungan teknis dan administratif kepada Kompolnas.
        </p>
    </div>
</section>
';
	}
}
