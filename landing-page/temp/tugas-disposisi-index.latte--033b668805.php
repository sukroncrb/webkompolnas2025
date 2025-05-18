<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/php/abiesoft/vendor/abiesoft/Http/../../../templates/admin/tugas/disposisi/index.latte */
final class Template_033b668805 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/php/abiesoft/vendor/abiesoft/Http/../../../templates/admin/tugas/disposisi/index.latte';

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

		$this->parentName = '../../main.latte';
		return get_defined_vars();
	}


	/** {block content} on line 2 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class=\'body-wrapper\'>
    <div class=\'container-fluid\'>
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Disposisi</h4>
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 13 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 13 */;
		echo '/tugas?p=disposisi">Disposisi</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">List</li>
                        </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5" style=\'min-height: 150px;\'>
                            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 21 */;
		echo '/assets/admin/images/custom-apps/icons/disposisi-icon.png" alt="modernize-img" class="img-fluid mb-n4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\'card\'>
            <div class=\'card-body\'>
                <h5 class=\'card-title fw-semibold mb-4\'>Disposisi</h5>
                <p class=\'mb-0\'>Hello tugas</p>
            </div>
        </div>
    </div>
</div>
';
	}
}
