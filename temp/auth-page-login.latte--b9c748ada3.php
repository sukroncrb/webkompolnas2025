<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/auth/page/login.latte */
final class Template_b9c748ada3 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/auth/page/login.latte';

	public const Blocks = [
		['content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('content', get_defined_vars()) /* line 2 */;
		echo "\n";
		$this->renderBlock('js', get_defined_vars()) /* line 64 */;
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

		echo '    <div id="main-wrapper" class="auth-customizer-none">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 w-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3 auth-card">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class=\'flex-center\'>
                                <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 11 */;
		echo '" class="p-0030">
                                    <div class=\'animasi-logo-skm\'>
                                        <span class=\'teks-s\'>KOMISI</span>
                                        <span class=\'teks-k\'>KEPOLISIAN</span>
                                        <span class=\'teks-m\'>NASIONAL</span>
                                        <span class=\'teks-skm\'><img src=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 16 */;
		echo 'assets/admin/images/custom-apps/img/Logo_Kompolnas.png\'><span>KOMPOLNAS</span></span>
                                    </div>
                                </a>
                            </div>
                            <div id="msgformInput"></div>
                            <form method="post" id="formInput" name="formInput">
                                <div class="mb-3">
                                    <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="email" data-label="Email" name="email" placeholder="name@example.com" />
                                    <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating mb-3">
                                    <input type="password" class="form-control" data-label="Password" id="psw" name="psw" placeholder="Password" />
                                    <label for="psw">Password</label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="form-check flex-center px-0">
                                        <div class="form-check form-switch mb-0">
                                            <input class="form-check-input cursor-pointer" type="checkbox" name="ingatkan" role="switch" id="flexSwitchCheckChecked">
                                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                                Ingatkan
                                            </label>
                                        </div>
                                    </div>
                                    <a class="text-primary fw-medium" href="../main/authentication-forgot-password.html">Lupa password?</a>
                                </div>
                                <button class="btn btn-primary w-100 py-8 rounded-2">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
';
	}


	/** {block js} on line 64 */
	public function blockJs(array $ʟ_args): void
	{
		echo '<script>
sf({
    fid: \'formInput\',
    field: [
        \'email|setEmail\',
        \'psw|setText\'
    ]
});
</script>
';
	}
}
