<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/web/tentang/visimisi.latte */
final class Template_c2b33cfec3 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/web/tentang/visimisi.latte';

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
                    <li><span>Visi dan Misi</span></li>
                </ul>
            </div>
            <h3>Visi dan Misi</h1>
        </div>
    </div>
    <div class="container konten page">
        <div class="grid grid-cols-1 grid-rows-1 gap-8 border-b-1 border-b-gray-200 py-8
            sm:grid-cols-1
            md:grid-cols-1
            lg:grid-cols-3
            xl:grid-cols-3
            2xl:grid-cols-3
        ">
            <div class="font-semibold">Visi Kompolnas</div>
            <div class="col-start-1 col-span-1
                sm:col-start-1 sm:col-span-1
                md:col-start-1 md:col-span-1
                lg:col-start-2 lg:col-span-2
                xl:col-start-2 xl:col-span-2
                2xl:col-start-2 2xl:col-span-2
            ">
                Kompolnas yang mampu memberikan pertimbangan efektif dan terpercaya kepada Presiden
                dalam rangka mewujudkan polri yang Profesional dan Mandiri.
            </div>
        </div>
        <div class="grid grid-cols-1 grid-rows-1 gap-8 border-b-1 border-b-gray-200 py-8
            sm:grid-cols-1
            md:grid-cols-1
            lg:grid-cols-3
            xl:grid-cols-3
            2xl:grid-cols-3
        ">
            <div class="font-semibold">Misi Kompolnas</div>
            <div class="col-start-1 col-span-1 mx-4
                sm:col-start-1 sm:col-span-1
                md:col-start-1 md:col-span-1
                lg:col-start-2 lg:col-span-2
                xl:col-start-2 xl:col-span-2
                2xl:col-start-2 2xl:col-span-2
            ">
                <ul class="list-decimal">
                    <li class="mt-4">Memantapkan organisasi dan manajemen Kompolnas demi terwujudnya kinerja yang optimal dan dinamis.</li>
                    <li class="mt-4">Mengumpulkan dan menganalisa data yang berkaitan dengan anggaran sumber daya manusia dan sarana prasarana guna menunjang Polri yang ideal.</li>
                    <li class="mt-4">Memberikan saran dan perimbangan tepat dalam rangka menerapkan arah kebijakan Polri serta pengangkatan dan atau pemberhentian Kapolri.</li>
                    <li class="mt-4">Menyelenggarakan tata cara penerimaan dan penanganan saran dan keluhan masyarakat untuk mewujudkan Polri yang disegani masyarakat.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
';
	}
}
