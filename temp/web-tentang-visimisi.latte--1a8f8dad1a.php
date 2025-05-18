<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/project/abiesoft/vendor/abiesoft/Http/../../../templates/web/tentang/visimisi.latte */
final class Template_1a8f8dad1a extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/project/abiesoft/vendor/abiesoft/Http/../../../templates/web/tentang/visimisi.latte';

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
        <div class="grid grid-cols-3 grid-rows-1 gap-8 border-b-1 border-b-gray-200 pb-8">
            <div class="font-semibold">Visi Kompolnas</div>
            <div class="col-start-2 col-span-2">
                Kompolnas yang mampu memberikan pertimbangan efektif dan terpercaya kepada Presiden
                dalam rangka mewujudkan polri yang Profesional dan Mandiri.
            </div>
        </div>
        <div class="grid grid-cols-3 grid-rows-1 gap-8 py-8">
            <div class="font-semibold">Misi Kompolnas</div>
            <div class="col-start-2 col-span-2">
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
