<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/abiesoft/vendor/abiesoft/Http/../../../templates/admin/berkas/index.latte */
final class Template_a6005cf53e extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/abiesoft/vendor/abiesoft/Http/../../../templates/admin/berkas/index.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 5 */;
		$this->renderBlock('js', get_defined_vars()) /* line 69 */;
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
		echo '/assets/admin/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css">
';
	}


	/** {block content} on line 5 */
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
                        <h4 class="fw-semibold mb-8">Berkas</h4>
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 16 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 16 */;
		echo '/berkas">Berkas</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">List</li>
                        </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5" style=\'min-height: 150px;\'>
                            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 24 */;
		echo '/assets/admin/images/custom-apps/icons/berkas-icon.png" alt="modernize-img" class="img-fluid mb-n4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\'row\'>
            <div class=\'col-12\'>
                <div class="datatables">
                <!-- start Add Row -->
                    <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="t_add_row" class="table table-striped w-100 table-bordered display text-nowrap">
                                <thead>
                                <!-- start row -->
                                <tr>
                                    <th>Column 1</th>
                                    <th>Column 2</th>
                                    <th>Column 3</th>
                                    <th>Column 4</th>
                                    <th>Column 5</th>
                                </tr>
                                <!-- end row -->
                                </thead>
                                <tfoot>
                                <!-- start row -->
                                <tr>
                                    <th>Column 1</th>
                                    <th>Column 2</th>
                                    <th>Column 3</th>
                                    <th>Column 4</th>
                                    <th>Column 5</th>
                                </tr>
                                <!-- end row -->
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
';
	}


	/** {block js} on line 69 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 70 */;
		echo '/assets/admin/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 71 */;
		echo '/assets/admin/js/datatable/datatable-api.init.js"></script>
';
	}
}
