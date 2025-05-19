<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/admin/error/404.latte */
final class Template_5efa55b0b1 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/admin/error/404.latte';

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

		$this->parentName = '../main_error.latte';
		return get_defined_vars();
	}


	/** {block content} on line 2 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div id="main-wrapper">
    <div class="position-relative overflow-hidden min-vh-100 w-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-lg-4">
                    <div class="text-center">
                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 9 */;
		echo 'assets/admin/images/backgrounds/errorimg.svg" alt="modernize-img" class="img-fluid" width="500">
                        <h1 class="fw-semibold mb-7 fs-9">Opps!!!</h1>
                        <h4 class="fw-semibold mb-7">Halaman tidak ditemukan.</h4>
                        <a class="btn btn-primary" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 12 */;
		echo '" role="button">Kembali ke Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
';
	}
}
