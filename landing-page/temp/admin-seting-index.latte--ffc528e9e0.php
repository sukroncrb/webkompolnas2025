<?php

use Latte\Runtime as LR;

/** source: /home/abiesof1/kompolnas/vendor/abiesoft/Http/../../../templates/admin/seting/index.latte */
final class Template_ffc528e9e0 extends Latte\Runtime\Template
{
	public const Source = '/home/abiesof1/kompolnas/vendor/abiesoft/Http/../../../templates/admin/seting/index.latte';

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
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class=\'body-wrapper\'>
    <div class=\'container-fluid\'>
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
            <div class="col-9">
                <h4 class="fw-semibold mb-8">Setingan Aplikasi</h4>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a class="text-muted text-decoration-none" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 13 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 13 */;
		echo '/profile/detail/?uid=7afcdc06-6502-42d0-8a50-ce6be88ab8db&p=info">Akun</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Seting</li>
                </ol>
                </nav>
            </div>
            <div class="col-3">
                <div class="text-center mb-n5" style=\'min-height: 150px;\'>
                <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 21 */;
		echo 'assets/admin/images/custom-apps/icons/seting-icon.png" alt="modernize-img" class="img-fluid mb-n4" />
                </div>
            </div>
            </div>
        </div>
        </div>
        
        <div class="container">
            <div class="row justify-content-md-center mb-2">
                <div class="col-lg-6">
                    <div class="card">
                    <div class="card-body p-4">
                        <h4 class="card-title">Informasi Website</h4>
                        <p class="card-subtitle mb-4">Semua informasi yang berkaitan dengan website yang dikelola</p>
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <form id="formInput" name="formInput" method="post">
                                    <div class="row">
                                        <div id="msgformInput"></div>
                                        <div class="col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="nama" name="nama" data-label="Nama" placeholder="Nama" />
                                                <label for="nama">Nama</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
';
	}
}
