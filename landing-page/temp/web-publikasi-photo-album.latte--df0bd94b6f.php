<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/web/publikasi/photo-album.latte */
final class Template_df0bd94b6f extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/web/publikasi/photo-album.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 20 */;
		$this->renderBlock('js', get_defined_vars()) /* line 53 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['p' => '41'], $this->params) as $ʟ_v => $ʟ_l) {
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

		echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/bootstrap-table.min.css">

<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.29.0/tableExport.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/bootstrap-table.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/bootstrap-table-locale-all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/extensions/export/bootstrap-table-export.min.js"></script>
<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 9 */;
		echo 'assets/web/package/spotlight/css/spotlight.min.css">
<style>
  .select,
  #locale {
    width: 100%;
  }
  .like {
    margin-right: 10px;
  }
</style>
';
	}


	/** {block content} on line 20 */
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
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 26 */;
		echo '\'><span>Home</span></a></li>
                    <li><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 27 */;
		echo 'data-dan-publikasi/photo\'><span>Album Photo</span></a></li>
                    <li><span>Photo</span></li>
                </ul>
            </div>
            <h3>';
		echo LR\Filters::escapeHtmlText($title) /* line 31 */;
		echo '</h1>
        </div>
    </div>
';
		if ($photo->hitung()) /* line 34 */ {
			echo '        <div class="container konten page grid grid-cols-1 grid-rows-3 gap-6
                sm:grid-cols-2
                md:grid-cols-2
                lg:grid-cols-4
                xl:grid-cols-4
                2xl:grid-cols-4">
';
			foreach ($photo->hasil() as $p) /* line 41 */ {
				echo '                <div class="spotlight"  data-title="';
				echo LR\Filters::escapeHtmlAttr($p->keterangan) /* line 42 */;
				echo '"  data-src="';
				echo LR\Filters::escapeHtmlAttr($baseurl) /* line 42 */;
				echo LR\Filters::escapeHtmlAttr($p->gambar) /* line 42 */;
				echo '">
                    <img src="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 43 */;
				echo LR\Filters::escapeHtmlAttr($p->gambar) /* line 43 */;
				echo '">
                    <div class=\'text-center mt-2\'>';
				echo LR\Filters::escapeHtmlText($p->keterangan) /* line 44 */;
				echo '</div>
                </div>
';

			}

			echo '        </div>
';
		} else /* line 48 */ {
			echo '        <div>....</div>
';
		}
		echo '</section>
';
	}


	/** {block js} on line 53 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 54 */;
		echo 'assets/web/package/spotlight/js/spotlight.bundle.js" defer></script>
<script>

</script>
';
	}
}
