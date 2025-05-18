<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/php/abiesoft/templates/web/home/section/quotes.latte */
final class Template_228e7870f9 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/php/abiesoft/templates/web/home/section/quotes.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="container">
    <div class="quotes">
        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 3 */;
		echo 'assets/web/images/quotes.png" class="w-6"/>
        <div>Bersama-sama Polri membangun Polri yang </div><div>Profesional dan Mandiri.</div>
        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 5 */;
		echo 'assets/web/images/quotes.png" class="w-6 right-img"/>
    </div>
</div>';
	}
}
