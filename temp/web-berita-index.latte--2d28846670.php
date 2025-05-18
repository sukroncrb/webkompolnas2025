<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/project/abiesoft/vendor/abiesoft/Http/../../../templates/web/berita/index.latte */
final class Template_2d28846670 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/project/abiesoft/vendor/abiesoft/Http/../../../templates/web/berita/index.latte';

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
                    <li><span>Berita</span></li>
                </ul>
            </div>
            <h3>Berita</h1>
        </div>
    </div>
    <div class="container konten page">
        <div class="grid grid-cols-3 grid-rows-4 gap-6 mr-6">
            <articles>
                <div class="w-full h-[170px] overflow-hidden rounded-md">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-[300px] h-[170px] object-cover">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[170px] overflow-hidden rounded-md">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-[300px] h-[170px] object-cover">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[170px] overflow-hidden rounded-md">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-[300px] h-[170px] object-cover">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[170px] overflow-hidden rounded-md">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-[300px] h-[170px] object-cover">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[170px] overflow-hidden rounded-md">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-[300px] h-[170px] object-cover">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[170px] overflow-hidden rounded-md">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-[300px] h-[170px] object-cover">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[170px] overflow-hidden rounded-md">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-[300px] h-[170px] object-cover">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[170px] overflow-hidden rounded-md">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-[300px] h-[170px] object-cover">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[170px] overflow-hidden rounded-md">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-[300px] h-[170px] object-cover">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[170px] overflow-hidden rounded-md">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-[300px] h-[170px] object-cover">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[170px] overflow-hidden rounded-md">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-[300px] h-[170px] object-cover">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[170px] overflow-hidden rounded-md">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-[300px] h-[170px] object-cover">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
        </div>
    </div>
</section>
';
	}
}
