<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/project/kompolnas/vendor/abiesoft/Http/../../../templates/web/berita/index.latte */
final class Template_3b2545f826 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/project/kompolnas/vendor/abiesoft/Http/../../../templates/web/berita/index.latte';

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
        <div class="grid grid-cols-1 grid-rows-4 gap-6 mr-0
            sm:grid-cols-1 sm:mr-0
            md:grid-cols-2 md:mr-6
            lg:grid-cols-3 lg:mr-6
            xl:grid-cols-3 xl:mr-6
            2xl:grid-cols-3 2xl:mr-6
        ">
            <articles>
                <div class="w-full h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                ">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-full h-[280px] object-cover
                        sm:h-[280px]
                        md:h-[250px]
                        lg:h-[170px]
                        xl:h-[180px]
                        2xl:h-[180px]
                    ">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                ">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-full h-[280px] object-cover
                        sm:h-[280px]
                        md:h-[250px]
                        lg:h-[170px]
                        xl:h-[180px]
                        2xl:h-[180px]
                    ">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                ">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-full h-[280px] object-cover
                        sm:h-[280px]
                        md:h-[250px]
                        lg:h-[170px]
                        xl:h-[180px]
                        2xl:h-[180px]
                    ">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                ">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-full h-[280px] object-cover
                        sm:h-[280px]
                        md:h-[250px]
                        lg:h-[170px]
                        xl:h-[180px]
                        2xl:h-[180px]
                    ">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                ">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-full h-[280px] object-cover
                        sm:h-[280px]
                        md:h-[250px]
                        lg:h-[170px]
                        xl:h-[180px]
                        2xl:h-[180px]
                    ">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                ">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-full h-[280px] object-cover
                        sm:h-[280px]
                        md:h-[250px]
                        lg:h-[170px]
                        xl:h-[180px]
                        2xl:h-[180px]
                    ">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                ">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-full h-[280px] object-cover
                        sm:h-[280px]
                        md:h-[250px]
                        lg:h-[170px]
                        xl:h-[180px]
                        2xl:h-[180px]
                    ">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                ">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-full h-[280px] object-cover
                        sm:h-[280px]
                        md:h-[250px]
                        lg:h-[170px]
                        xl:h-[180px]
                        2xl:h-[180px]
                    ">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                ">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-full h-[280px] object-cover
                        sm:h-[280px]
                        md:h-[250px]
                        lg:h-[170px]
                        xl:h-[180px]
                        2xl:h-[180px]
                    ">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                ">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-full h-[280px] object-cover
                        sm:h-[280px]
                        md:h-[250px]
                        lg:h-[170px]
                        xl:h-[180px]
                        2xl:h-[180px]
                    ">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                ">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-full h-[280px] object-cover
                        sm:h-[280px]
                        md:h-[250px]
                        lg:h-[170px]
                        xl:h-[180px]
                        2xl:h-[180px]
                    ">
                </div>
                <h1 class="my-2 font-semibold">Ini contoh judul berita yang sudah diupload</h1>
                <small>Berita | 1 hari yang lalu</small>
            </articles>
            <articles>
                <div class="w-full h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                ">
                    <img src="https://coffective.com/wp-content/uploads/2018/06/default-featured-image.png.jpg" class="w-full h-[280px] object-cover
                        sm:h-[280px]
                        md:h-[250px]
                        lg:h-[170px]
                        xl:h-[180px]
                        2xl:h-[180px]
                    ">
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
