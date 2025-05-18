<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/php/abiesoft/vendor/abiesoft/Http/../../../templates/web/regulasi/suratedaran.latte */
final class Template_63f50b17c8 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/php/abiesoft/vendor/abiesoft/Http/../../../templates/web/regulasi/suratedaran.latte';

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
		echo '<section>
    <div class="container">
        Surat Edaran
    </div>
</section>
';
	}
}
