<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/templates/web/components/footer.latte */
final class Template_54a1d7b3ed extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/templates/web/components/footer.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="footer">
    <div class="footer-top">
        <div class="container my-20">
            <div class="grid grid-cols-1 grid-rows-1 gap-4 mb-10
                sm:grid-cols-1
                md:grid-cols-1
                lg:grid-cols-4
                xl:grid-cols-4
                2xl:grid-cols-4
            ">
                <div class="block text-center
                    mt-0
                    sm:mt-20 sm:text-center
                    md:mt-20 md:text-center
                    lg:mt-0 lg:text-left
                    xl:mt-0 xl:text-left
                    2xl:mt-0 2xl:text-left
                ">
                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 19 */;
		echo 'assets/web/images/logo.png" class="w-50 mt-0 mx-auto
                        sm:w-50
                        md:w-50
                        lg:w-40
                        xl:w-40
                        2xl:w-40
                    ">
                </div>
                <div>
                    <ul class="text-center
                        sm:text-center
                        md:text-center
                        lg:text-left
                        xl:text-left
                        2xl:text-left
                    ">
                        <li class="mb-4 hover:underline cursor-pointer"></li>
                        <li class="mb-4 hover:underline cursor-pointer">Sekretariat</li>
                        <li class="mb-4 hover:underline cursor-pointer">Umum</li>
                        <li class="mb-4 hover:underline cursor-pointer">Dukungan Teknis</li>
                        <li class="mb-4 hover:underline cursor-pointer">Hukum dan Informatika</li>
                    </ul>
                </div>
                <div class="
                    clear-both
                    mb-0
                    sm:mb-10
                    md:mb-10
                    lg:mb-0
                    xl:mb-0
                    2xl:mb-0">
                    <ul class="text-center
                        sm:text-center
                        md:text-center
                        lg:text-left
                        xl:text-left
                        2xl:text-left">
                        <li class="mb-4 hover:underline cursor-pointer" onClick=\'window.location.href=this.dataset.link\' data-link=\'';
		echo LR\Filters::escapeHtmlAttr($basurl) /* line 56 */;
		echo 'hubungi-kami\'>Hubungi Kami</li>
                        <li class="mb-4 hover:underline cursor-pointer">FAQ</li>
                    </ul>
                </div>
                <div>
                    <div>Sosial Media Kami :</div>
                    <div class="flex justify-center items-center gap-3 mt-4">
                        <a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($webinfo['facebook'])) /* line 63 */;
		echo '\' class=\'w-10 h-10 flex justify-center items-center rounded-full bg-white\'><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 63 */;
		echo 'assets/web/images/icons/icons8-facebook.svg" class="w-6"></a>
                        <a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($webinfo['instagram'])) /* line 64 */;
		echo '\' class=\'w-10 h-10 flex justify-center items-center rounded-full bg-white\'><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 64 */;
		echo 'assets/web/images/icons/icons8-instagram.svg" class="w-6"></a>
                        <a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($webinfo['tiktok'])) /* line 65 */;
		echo '\' class=\'w-10 h-10 flex justify-center items-center rounded-full bg-white\'><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 65 */;
		echo 'assets/web/images/icons/icons8-tiktok.svg" class="w-6"></a>
                        <a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($webinfo['twitter'])) /* line 66 */;
		echo '\' class=\'w-10 h-10 flex justify-center items-center rounded-full bg-white\'><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 66 */;
		echo 'assets/web/images/icons/icons8-x.svg" class="w-6">
                        <a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($webinfo['youtube'])) /* line 67 */;
		echo '\' class=\'w-10 h-10 flex justify-center items-center rounded-full bg-white\'><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 67 */;
		echo 'assets/web/images/icons/icons8-youtube.svg" class="w-6"></a>
                    </div>
                </div>
            </div>
            <div class="font-bold border-t-1 border-sky-600 pt-10">';
		echo LR\Filters::escapeHtmlText($webinfo['nama']) /* line 71 */;
		echo '</div>
            <div>';
		echo LR\Filters::escapeHtmlText($webinfo['alamat']) /* line 72 */;
		echo '</div>
            <div>Telp. ';
		echo LR\Filters::escapeHtmlText($webinfo['notlp']) /* line 73 */;
		echo ' - Fax. ';
		echo LR\Filters::escapeHtmlText($webinfo['fax']) /* line 73 */;
		echo '</div>
        </div>
        <div class="clear-both">&nbsp;</div>
    </div>
    <div class="footer-bottom">
        <div class="container flex justify-center items-center
            sm:justify-center
            md:justify-center
            lg:justify-between
            xl:justify-between
            2xl:justify-between
        ">
            <div class="hidden sm:hidden
            md:hidden
            lg:block
            xl:block
            2xl:block">&nbsp;</div>
            <div class="text-sm">&copy; ';
		echo LR\Filters::escapeHtmlText(date('Y')) /* line 90 */;
		echo ' | ';
		echo LR\Filters::escapeHtmlText($webinfo['nama']) /* line 90 */;
		echo '</div>
        </div>
    </div>
</div>';
	}
}
