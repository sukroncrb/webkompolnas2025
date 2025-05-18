<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/project/kompolnas/vendor/abiesoft/Http/../../../templates/web/tentang/tupoksi.latte */
final class Template_e763bc8599 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/project/kompolnas/vendor/abiesoft/Http/../../../templates/web/tentang/tupoksi.latte';

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
                    <li><span>Tupoksi</span></li>
                </ul>
            </div>
            <h3>Tupoksi</h1>
        </div>
    </div>
    <div class="container konten page">
        <div class="font-semibold mb-4">Kompolnas berdasarkan Perpres 17 Tahun 2011 tentang Komisi Kepolisian Nasional menjalankan fungsi, tugas dan wewenang sebagai berikut :</div>
        <div class="grid grid-cols-1 grid-rows-1 gap-8 border-b-1 border-b-gray-200 py-8
            sm:grid-cols-1
            md:grid-cols-1
            lg:grid-cols-3
            xl:grid-cols-3
            2xl:grid-cols-3
        ">
            <div class="font-semibold">Pasal 3 Kompolnas berfungsi : </div>
            <div class="col-start-1 col-span-1
                sm:col-start-1 sm:col-span-1
                md:col-start-1 md:col-span-1
                lg:col-start-2 lg:col-span-2
                xl:col-start-2 xl:col-span-2
                2xl:col-start-2 2xl:col-span-2
            ">
                <ul class="list-decimal mx-4">
                    <li>Kompolnas melaksanakan fungsi pengawasan fungsional terhadap kinerja Polri untuk menjamin profesionalisme dan kemandirian Polri. </li>
                    <li class="mt-4">Pelaksanaan fungsi pengawasan fungsional sebagaimana dimaksud pada ayat (1) dilakukan melalui kegiatan pemantauan dan penilaian terhadap kinerja dan epkumham.go integritas anggota dan pejabat Polri sesuai dengan ketentuan peraturan perundang-undangan. </li>
                </ul>
            </div>
        </div>
        <div class="grid grid-cols-1 grid-rows-1 gap-8 border-b-1 border-b-gray-200 py-8
            sm:grid-cols-1
            md:grid-cols-1
            lg:grid-cols-3
            xl:grid-cols-3
            2xl:grid-cols-3
        ">
            <div class="font-semibold">Pasal 4, Kompolnas bertugas :</div>
            <div class="col-start-1 col-span-1
                sm:col-start-1 sm:col-span-1
                md:col-start-1 md:col-span-1
                lg:col-start-2 lg:col-span-2
                xl:col-start-2 xl:col-span-2
                2xl:col-start-2 2xl:col-span-2
            ">
                <ul class="list-decimal mx-4">
                    <li>Membantu Presiden dalam menetapkan arah kebijakan Polri; dan</li>
                    <li class="mt-4">Memberikan pertimbangan kepada Presiden dalam pengangkatan dan pemberhentian Kapolri.</li>
                </ul>
            </div>
        </div>
        <div class="grid grid-cols-1 grid-rows-1 gap-8 border-b-1 border-b-gray-200 py-8
            sm:grid-cols-1
            md:grid-cols-1
            lg:grid-cols-3
            xl:grid-cols-3
            2xl:grid-cols-3
        ">
            <div class="font-semibold">Pasal 7 Kompolnas berwenang : </div>
            <div class="col-start-1 col-span-1
                sm:col-start-1 sm:col-span-1
                md:col-start-1 md:col-span-1
                lg:col-start-2 lg:col-span-2
                xl:col-start-2 xl:col-span-2
                2xl:col-start-2 2xl:col-span-2
            ">
                <ul class="list-decimal mx-4">
                    <li>Mengumpulkan dan menganalisis data sebagai bahan pemberian saran kepada Presiden yang berkaitan dengan anggar an Kepolisian Negara Republik Indonesia, pengembangan sumber daya manusia Polri, dan pengembangan sarana dan prasarana Polri;</li>
                    <li class="mt-4">Memberikan saran dan pertimbangan lain kepada Presiden dalam upaya mewujudkan Polri yang profesional dan mandiri; dan</li>
                    <li class="mt-4">Menerima saran dan keluhan dari masyarakat mengenai kinerja kepolisian dan menyampaikannya kepada Presiden. </li>
                </ul>
            </div>
        </div>
    </div>
</section>
';
	}
}
