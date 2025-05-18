<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/templates/web/home/section/link.latte */
final class Template_bc910dc201 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/templates/web/home/section/link.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="container border-t-1 border-t-gray-200">
    <div id="wrapper">
        <div id="carousel2">
            <div id="content">
                <div class="item"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 5 */;
		echo 'assets/web/images/mitra/kumham.png"/></div>
                <div class="item"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 6 */;
		echo 'assets/web/images/mitra/ombudsman.png"/></div>
                <div class="item"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 7 */;
		echo 'assets/web/images/mitra/polhukam.png"/></div>
                <div class="item"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 8 */;
		echo 'assets/web/images/mitra/komjak.png"/></div>
                <div class="item"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 9 */;
		echo 'assets/web/images/mitra/polri.png"/></div>
                <div class="item"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 10 */;
		echo 'assets/web/images/mitra/komnasham.png"/></div>
                <div class="item"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 11 */;
		echo 'assets/web/images/mitra/kpk.png"/></div>
                <div class="item"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 12 */;
		echo 'assets/web/images/mitra/lpsk.png"/></div>
                <div class="item"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 13 */;
		echo 'assets/web/images/mitra/mendagri.png"/></div>
                <div class="item"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 14 */;
		echo 'assets/web/images/mitra/humaspolri.png"/></div>
                <div class="item"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 15 */;
		echo 'assets/web/images/mitra/komisiperempuan.jpg"/></div>
                <div class="item"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 16 */;
		echo 'assets/web/images/mitra/yudisial.png"/></div>
                <div class="item"><img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 17 */;
		echo 'assets/web/images/mitra/dewanpers.jpg"/></div>
            </div>
        </div>
        <button id="prev" class="shadow-md">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            >
            <path fill="none" d="M0 0h24v24H0V0z"></path>
            <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z"></path>
            </svg>
        </button>
        <button id="next" class="shadow-md">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            >
            <path fill="none" d="M0 0h24v24H0V0z"></path>
            <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z"></path>
            </svg>
        </button>
    </div>
</div>
';
	}
}
