<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/php/abiesoft/templates/web/components/footer.latte */
final class Template_112b7c142f extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/php/abiesoft/templates/web/components/footer.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="footer">
    <div class="footer-top">
        <div class="container my-20">
            <div class="grid grid-cols-4 grid-rows-1 gap-4 mb-10">
                <div class="text-left">
                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 6 */;
		echo 'assets/web/images/logo.png" class="w-30 mt-0">
                </div>
                <div>
                    <ul class="text-left">
                        <li class="mb-4 hover:underline cursor-pointer"></li>
                        <li class="mb-4 hover:underline cursor-pointer">Sekretariat</li>
                        <li class="mb-4 hover:underline cursor-pointer">Umum</li>
                        <li class="mb-4 hover:underline cursor-pointer">Dukungan Teknis</li>
                        <li class="mb-4 hover:underline cursor-pointer">Hukum dan Informatika</li>
                    </ul>
                </div>
                <div>
                    <ul class="text-left">
                        <li class="mb-4 hover:underline cursor-pointer">Hubungi Kami</li>
                        <li class="mb-4 hover:underline cursor-pointer">FAQ</li>
                    </ul>
                </div>
                <div>
                    <div>Sosial Media Kami :</div>
                    <div class="flex justify-center items-center gap-3 mt-4">
                        <a href=\'javascript:void(0)\' class=\'w-10 h-10 flex justify-center items-center rounded-full bg-white\'><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 26 */;
		echo 'assets/web/images/icons/icons8-facebook.svg" class="w-6"></a>
                        <a href=\'javascript:void(0)\' class=\'w-10 h-10 flex justify-center items-center rounded-full bg-white\'><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 27 */;
		echo 'assets/web/images/icons/icons8-instagram.svg" class="w-6"></a>
                        <a href=\'javascript:void(0)\' class=\'w-10 h-10 flex justify-center items-center rounded-full bg-white\'><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 28 */;
		echo 'assets/web/images/icons/icons8-tiktok.svg" class="w-6"></a>
                        <a href=\'javascript:void(0)\' class=\'w-10 h-10 flex justify-center items-center rounded-full bg-white\'><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 29 */;
		echo 'assets/web/images/icons/icons8-x.svg" class="w-6">
                        <a href=\'javascript:void(0)\' class=\'w-10 h-10 flex justify-center items-center rounded-full bg-white\'><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 30 */;
		echo 'assets/web/images/icons/icons8-youtube.svg" class="w-6"></a>
                    </div>
                </div>
            </div>
            <div class="font-bold border-t-1 border-sky-600 pt-10">KOMPOLNAS</div>
            <div>Jl. Tirtayasa VII No. 20 Keb. Baru - Jakarta Selatan</div>
            <div>Telp. 021 7392315 - Fax. 021 7392317</div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container flex justify-between items-center">
            <div>&nbsp;</div>
            <div>&copy; ';
		echo LR\Filters::escapeHtmlText(date('Y')) /* line 42 */;
		echo ' | KOMPOLNAS</div>
        </div>
    </div>
</div>';
	}
}
