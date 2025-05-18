<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/web/publikasi/video-detail.latte */
final class Template_24c64f4b26 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/web/publikasi/video-detail.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 25 */;
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
		echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/bootstrap-table.min.css">

<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.29.0/tableExport.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/bootstrap-table.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/bootstrap-table-locale-all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/extensions/export/bootstrap-table-export.min.js"></script>

<style>
  .select,
  #locale {
    width: 100%;
  }
  .like {
    margin-right: 10px;
  }

  .iframeyoutube {
    width: 100%;
    height: 550px;
  }
</style>
';
	}


	/** {block content} on line 25 */
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
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 31 */;
		echo '\'><span>Home</span></a></li>
                    <li><span>Youtube Kompolnas</span></li>
                </ul>
            </div>
            <h3>';
		echo LR\Filters::escapeHtmlText($title) /* line 35 */;
		echo '</h1>
        </div>
    </div>
        
    <div class="container konten mb-8">
        <iframe class="iframeyoutube" src="https://www.youtube.com/embed/';
		echo LR\Filters::escapeHtmlAttr($id) /* line 40 */;
		echo '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</section>
';
	}
}
