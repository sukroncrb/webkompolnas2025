<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/project/php/kompolnas/vendor/abiesoft/Http/../../../templates/web/regulasi/perpres.latte */
final class Template_7e140e8eee extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/project/php/kompolnas/vendor/abiesoft/Http/../../../templates/web/regulasi/perpres.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 20 */;
		$this->renderBlock('js', get_defined_vars()) /* line 130 */;
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
                    <li><span>UUD 1945</span></li>
                </ul>
            </div>
            <h3>UUD 1945</h1>
        </div>
    </div>
    <div class="container konten page">
        <div class="grid grid-cols-1 grid-rows-1 gap-8
          sm:grid-cols-1
          md:grid-cols-1
          lg:grid-cols-3
          xl:grid-cols-3
          2xl:grid-cols-3
        ">
          <div class="text-center
            sm:text-center
            md:text-center
            lg:text-right
            xl:text-right
            2xl:text-right
          ">
            <h3 class="font-semibold text-lg mb-4">Informasi Dokumen</h3>
            <div class="border-b-1 border-solid border-gray-200 py-2">
              <div class="font-semibold text-sm">Bentuk Peraturan:</div>
              <div>Undang undang</div>
            </div>
            <div class="border-b-1 border-solid border-gray-200 py-2">
              <div class="font-semibold text-sm">Pemerkarsa:</div>
              <div>Pemerinta pusat</div>
            </div>
            <div class="border-b-1 border-solid border-gray-200 py-2">
              <div class="font-semibold text-sm">Nomor:</div>
              <div>-</div>
            </div>
            <div class="border-b-1 border-solid border-gray-200 py-2">
              <div class="font-semibold text-sm">Tentang:</div>
              <div>Undang-Undang Dasar Tahum 1945</div>
            </div>
            <div class="border-b-1 border-solid border-gray-200 py-2">
              <div class="font-semibold text-sm">Pejabat pengundang:</div>
              <div>-</div>
            </div>
            <h3 class="font-semibold text-lg mt-8 mb-4">Penetapan</h3>
            <div class="border-b-1 border-solid border-gray-200 py-2">
              <div class="font-semibold text-sm">Tempat:</div>
              <div>Jakarta</div>
            </div>
            <div class="border-b-1 border-solid border-gray-200 py-2">
              <div class="font-semibold text-sm">Oleh:</div>
              <div>-</div>
            </div>
            <div class="border-b-1 border-solid border-gray-200 py-2">
              <div class="font-semibold text-sm">Tanggal:</div>
              <div>1 Juni 1945</div>
            </div>
          </div>
          <div class="col-span-1
            sm:col-span-1
            md:col-span-1
            lg:col-span-2
            xl:gcol-span-2
            2xl:col-span-2
          ">
            <div class="w-full h-auto bg-white block relative shadow-lg overflow-hidden">
              <div class="bg-green-600 text-white absolute left-[-40px] top-[30px] rotate-[-40deg] text-center w-[200px] p-2 font-semibold">Masih Berlaku</div>
              <div class="relative block text-center py-8 px-10">
                <h3 class="font-semibold text-2xl pt-[20px]">UUD 1945</h3>
                <div>Undang-Undang Dasar Tahum 1945</div>
              </div>
              <div class="w-full h-[500px] bg-gray-300 overflow-hidden">
              
              </div>
              <div class="py-8 flex justify-center items-center gap-6">
                <div class="inline-flex rounded-md shadow-xs" role="group">
                  <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                    Download
                  </button>
                  <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
                    Bagikan
                  </button>
                </div>
              </div>
              <div class="grid grid-cols-3 grid-rows-1 gap-8 text-center px-4 pb-8">
                  <div>
                    <div>dibaca</div>
                    <div class="font-semibold text-2xl">0</div>
                  </div>
                  <div>
                    <div>didownload</div>
                    <div class="font-semibold text-2xl">0</div>
                  </div>
                  <div>
                    <div>dibagikan</div>
                    <div class="font-semibold text-2xl">0</div>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</section>
';
	}


	/** {block js} on line 130 */
	public function blockJs(array $ʟ_args): void
	{
		echo '<script>
  
</script>
';
	}
}
