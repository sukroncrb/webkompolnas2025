<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/project/php/kompolnas/vendor/abiesoft/Http/../../../templates/web/regulasi/uu.latte */
final class Template_f2137b9a1b extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/project/php/kompolnas/vendor/abiesoft/Http/../../../templates/web/regulasi/uu.latte';

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
                    <li><span>Regulasi</span></li>
                    <li><span>Undang-undang</span></li>
                </ul>
            </div>
            <h3>Undang-undang</h1>
        </div>
    </div>
    <div class="container konten page">
        Undang-undang
    </div>
</section>
';
	}
}
