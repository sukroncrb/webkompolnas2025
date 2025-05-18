<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/templates/web/home/section/quotes.latte */
final class Template_7a09a3a71e extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/templates/web/home/section/quotes.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="container">
    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 2 */;
		echo LR\Filters::escapeHtmlAttr($bannerphoto) /* line 2 */;
		echo '" class="mx-auto w-full sm:w-full md:w-full lg:w-[70%] xl:w-[70%] 2xl:w-[70%]">
    <div class="quotes">
        <div>
            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 5 */;
		echo 'assets/web/images/quotes.png" class="w-6 mx-auto mb-4"/>
            ';
		echo LR\Filters::escapeHtmlText($quotes) /* line 6 */;
		echo '
            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 7 */;
		echo 'assets/web/images/quotes.png" class="w-6 right-img rotate-180 mx-auto mt-4"/>
        </div>
    </div>
</div>';
	}
}
