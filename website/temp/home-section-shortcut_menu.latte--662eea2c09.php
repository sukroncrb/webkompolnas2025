<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/templates/web/home/section/shortcut_menu.latte */
final class Template_662eea2c09 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/templates/web/home/section/shortcut_menu.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="container">
    <div class="grid grid-cols-1 grid-rows-1 gap-1 mb-10 mx-auto max-w-[1100px] p-0
        sm:grid-cols-1
        md:grid-cols-2
        lg:grid-cols-4
        xl:grid-cols-4
        2xl:grid-cols-4
    ">
';
		foreach ($shortcut as $sc) /* line 9 */ {
			echo '        <div onClick=\'window.location.href=this.dataset.link\' data-link="';
			echo LR\Filters::escapeHtmlAttr($sc->link) /* line 10 */;
			echo '" class="button-short-cut p-4 bg-gray-200 hover:shadow-sm hover:bg-gray-100 cursor-pointer rounded-sm flex justify-center items-center">
            <div class="flex justify-center items-center gap-4 h-full">
                ';
			echo $sc->media /* line 12 */;
			echo '
                <div>
                    <h3 class="font-semibold text-md">';
			echo LR\Filters::escapeHtmlText($sc->label) /* line 14 */;
			echo '</h3>
                </div>
            </div>
        </div>
';

		}

		echo '    </div>
</div>';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['sc' => '9'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
