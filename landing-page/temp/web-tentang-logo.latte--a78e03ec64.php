<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/web/tentang/logo.latte */
final class Template_a78e03ec64 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/web/tentang/logo.latte';

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
                    <li><span>Arti Logo dan Lambang</span></li>
                </ul>
            </div>
            <h3>Arti Logo dan Lambang</h1>
        </div>
    </div>
    <div class="container konten page">
        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 20 */;
		echo 'assets/web/images/arti_logo.svg" class="mx-auto mb-4">
        <div class="grid grid-cols-1 grid-rows-1 gap-8 border-b-1 border-b-gray-200 py-8
            sm:grid-cols-1
            md:grid-cols-1
            lg:grid-cols-3
            xl:grid-cols-3
            2xl:grid-cols-3
        ">
            <div class="font-semibold">Tulisan Kompolnas yang melingkar</div>
            <div class="col-start-1 col-span-1
                sm:col-start-1 sm:col-span-1
                md:col-start-1 md:col-span-1
                lg:col-start-2 lg:col-span-2
                xl:col-start-2 xl:col-span-2
                2xl:col-start-2 2xl:col-span-2
            ">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
        <div class="grid grid-cols-1 grid-rows-1 gap-8 border-b-1 border-b-gray-200 py-8
            sm:grid-cols-1
            md:grid-cols-1
            lg:grid-cols-3
            xl:grid-cols-3
            2xl:grid-cols-3
        ">
            <div class="font-semibold">Warna Kuning</div>
            <div class="col-start-1 col-span-1
                sm:col-start-1 sm:col-span-1
                md:col-start-1 md:col-span-1
                lg:col-start-2 lg:col-span-2
                xl:col-start-2 xl:col-span-2
                2xl:col-start-2 2xl:col-span-2
            ">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
        <div class="grid grid-cols-1 grid-rows-1 gap-8 border-b-1 border-b-gray-200 py-8
            sm:grid-cols-1
            md:grid-cols-1
            lg:grid-cols-3
            xl:grid-cols-3
            2xl:grid-cols-3
        ">
            <div class="font-semibold">Lambang Garuda Pancasila</div>
            <div class="col-start-1 col-span-1
                sm:col-start-1 sm:col-span-1
                md:col-start-1 md:col-span-1
                lg:col-start-2 lg:col-span-2
                xl:col-start-2 xl:col-span-2
                2xl:col-start-2 2xl:col-span-2
            ">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
        <div class="grid grid-cols-1 grid-rows-1 gap-8 border-b-1 border-b-gray-200 py-8
            sm:grid-cols-1
            md:grid-cols-1
            lg:grid-cols-3
            xl:grid-cols-3
            2xl:grid-cols-3
        ">
            <div class="font-semibold">Bentuk logo yang melingkar</div>
            <div class="col-start-1 col-span-1
                sm:col-start-1 sm:col-span-1
                md:col-start-1 md:col-span-1
                lg:col-start-2 lg:col-span-2
                xl:col-start-2 xl:col-span-2
                2xl:col-start-2 2xl:col-span-2
            ">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
    </div>
</section>
';
	}
}
