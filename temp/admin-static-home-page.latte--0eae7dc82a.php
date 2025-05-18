<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/admin/static/home-page.latte */
final class Template_0eae7dc82a extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/admin/static/home-page.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 5 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = '../main.latte';
		return get_defined_vars();
	}


	/** {block css} on line 2 */
	public function blockCss(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 3 */;
		echo 'assets/admin/libs/sweetalert2/dist/sweetalert2.min.css">
';
	}


	/** {block content} on line 5 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="body-wrapper">
	<div class="container-fluid">
		<div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
			<div class="card-body px-4 py-3">
				<div class="row align-items-center">
					<div class="col-9">
						<h4 class="fw-semibold mb-8">';
		echo LR\Filters::escapeHtmlText($title) /* line 12 */;
		echo '</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a class="text-muted text-decoration-none" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 16 */;
		echo '">Home</a>
								</li>
								<li class="breadcrumb-item" aria-current="page">Static</li>
								<li class="breadcrumb-item" aria-current="page">';
		echo LR\Filters::escapeHtmlText($title) /* line 19 */;
		echo '</li>
							</ol>
						</nav>
					</div>
					<div class="col-3">
						<div class="text-center mb-n5">
							<div style=\'width: 168px; height: 165px;\'></div>
                        </div>
					</div>
				</div>
			</div>
		</div>
        <div class="row">
            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <div class="card-body">Banner Photo Kompolnas</div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <div class="card-body">Quotes</div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <div class="card-body">Menu</div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-body">Komisioner</div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="card">
                    <div class="card-body">Link</div>
                </div>
            </div>
        </div>
	</div>
</div>
';
	}
}
