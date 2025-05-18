<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/project/php/kompolnas/vendor/abiesoft/Http/../../../templates/web/publikasi/photo.latte */
final class Template_f5ddf519cc extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/project/php/kompolnas/vendor/abiesoft/Http/../../../templates/web/publikasi/photo.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 4 */;
		echo "\n";
		$this->renderBlock('js', get_defined_vars()) /* line 24 */;
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
	}


	/** {block content} on line 4 */
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
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 10 */;
		echo '\'><span>Home</span></a></li>
                    <li><span>Publikasi</span></li>
                    <li><span>Photo</span></li>
                </ul>
            </div>
            <h3>Publikasi Photo</h1>
        </div>
    </div>
    <div class="container konten page">
        
    </div>
</section>
';
	}


	/** {block js} on line 24 */
	public function blockJs(array $ʟ_args): void
	{
		echo "\n";
	}
}
