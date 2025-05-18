<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/project/kompolnas/templates/web/home/section/quotes.latte */
final class Template_6e59201951 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/project/kompolnas/templates/web/home/section/quotes.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="container">
    <div class="quotes">
        <div>
            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 4 */;
		echo 'assets/web/images/quotes.png" class="w-6 mx-auto mb-4"/>
            <div>Bersama-sama Polri membangun Polri yang </div>
            <div>Profesional dan Mandiri.</div>
            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 7 */;
		echo 'assets/web/images/quotes.png" class="w-6 right-img rotate-180 mx-auto mt-4"/>
        </div>
    </div>
</div>';
	}
}
