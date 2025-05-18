<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/abiesoft/vendor/abiesoft/Http/../../../templates/admin/surat/read.latte */
final class Template_e60859aa78 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/abiesoft/vendor/abiesoft/Http/../../../templates/admin/surat/read.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('content', get_defined_vars()) /* line 2 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = '../main.latte';
		return get_defined_vars();
	}


	/** {block content} on line 2 */
	public function blockContent(array $ʟ_args): void
	{
		echo '<div class=\'body-wrapper\'>
    <div class=\'container-fluid\'>
        <div class=\'card\'>
            <div class=\'card-body\'>
                <h5 class=\'card-title fw-semibold mb-4\'>Surat</h5>
                <p class=\'mb-0\'>Hello surat</p>
            </div>
        </div>
    </div>
</div>
';
	}
}
