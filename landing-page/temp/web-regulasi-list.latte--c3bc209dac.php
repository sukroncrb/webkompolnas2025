<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/web/regulasi/list.latte */
final class Template_c3bc209dac extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/web/regulasi/list.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 20 */;
		$this->renderBlock('js', get_defined_vars()) /* line 94 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['r' => '60'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
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
                    <li><span>Regulasi</span></li>
                    <li><span>';
		echo LR\Filters::escapeHtmlText($title) /* line 28 */;
		echo '</span></li>
                </ul>
            </div>
            <h3>';
		echo LR\Filters::escapeHtmlText($title) /* line 31 */;
		echo '</h1>
        </div>
    </div>

    <div class="container konten page">
          
        <div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Judul
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nomor
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Penetapan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Opsi
                        </th>
                    </tr>
                </thead>
                <tbody>
';
		if ($jumlahdata > 0) /* line 59 */ {
			foreach ($regulasi as $r) /* line 60 */ {
				echo '                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                              ';
				echo LR\Filters::escapeHtmlText($r->judul) /* line 63 */;
				echo '
                          </th>
                          <td class="px-6 py-4">
                              ';
				echo LR\Filters::escapeHtmlText($r->nomor) /* line 66 */;
				echo '
                          </td>
                          <td class="px-6 py-4">
                              ';
				echo LR\Filters::escapeHtmlText(\Abiesoft\Resource\Utilities\Tanggal::full($r->tanggalpenetapan)) /* line 69 */;
				echo '
                          </td>
                          <td class="px-6 py-4">
                              ';
				echo LR\Filters::escapeHtmlText($r->status) /* line 72 */;
				echo '
                          </td>
                          <td class="px-6 py-4">
                              <a href="';
				echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 75 */;
				echo 'regulasi/';
				echo LR\Filters::escapeHtmlAttr($page) /* line 75 */;
				echo '/';
				echo LR\Filters::escapeHtmlAttr($r->id) /* line 75 */;
				echo '" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Lihat</a>
                          </td>
                      </tr>
';

			}

		} else /* line 79 */ {
			echo '                      <tr>
                        <td colspan="5">
                          <div style=\'padding: 40px 20px; text-align: center; font-weight: bold;\'>BELUM ADA DATA</div>
                        </td>
                      </tr>
';
		}
		echo '                </tbody>
            </table>
        </div>

    </div>

</section>
';
	}


	/** {block js} on line 94 */
	public function blockJs(array $ʟ_args): void
	{
		echo '<script>
  
</script>
';
	}
}
