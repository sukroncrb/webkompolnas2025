<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/website/templates/web/home/section/youtube.latte */
final class Template_efd58f192d extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/website/templates/web/home/section/youtube.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="bg-gray-100 py-8" style="cursor: pointer;" onClick="window.location.href=this.dataset.link" data-link="';
		echo LR\Filters::escapeHtmlAttr($banneryoutubelink) /* line 1 */;
		echo '">
    <div class="container">
        <img src=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 3 */;
		echo LR\Filters::escapeHtmlAttr($banneryoutubeimage) /* line 3 */;
		echo '\'>
    </div>
</div>';
	}
}
