<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/abiesoft/templates/admin/main_error.latte */
final class Template_ade028a671 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/abiesoft/templates/admin/main_error.latte';

	public const Blocks = [
		['css' => 'blockCss', 'title' => 'blockTitle', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 9 */;
		echo 'assets/admin/images/logos/favicon.png" />
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 10 */;
		echo 'assets/admin/css/styles.css" />
';
		$this->renderBlock('css', get_defined_vars()) /* line 11 */;
		echo '    <title>';
		$this->renderBlock('title', get_defined_vars()) /* line 12 */;
		echo '</title>

</head>

<body class="link-sidebar">

    <div class="preloader">
        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 19 */;
		echo 'assets/admin/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    
';
		$this->renderBlock('content', get_defined_vars()) /* line 22 */;
		echo '
    <script>
        function handleColorTheme(e) {
            document.documentElement.setAttribute("data-color-theme", e);
        }
    </script>

    <div class="dark-transparent sidebartoggler"></div>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 31 */;
		echo 'assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 32 */;
		echo 'assets/admin/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 33 */;
		echo 'assets/admin/js/theme/app.init.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 34 */;
		echo 'assets/admin/js/theme/theme.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 35 */;
		echo 'assets/admin/js/theme/app.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 36 */;
		echo 'assets/admin/js/theme/sidebarmenu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
';
		$this->renderBlock('js', get_defined_vars()) /* line 38 */;
		echo '
</body>

</html>';
	}


	/** {block css} on line 11 */
	public function blockCss(array $ʟ_args): void
	{
	}


	/** {block title} on line 12 */
	public function blockTitle(array $ʟ_args): void
	{
	}


	/** {block content} on line 22 */
	public function blockContent(array $ʟ_args): void
	{
	}


	/** {block js} on line 38 */
	public function blockJs(array $ʟ_args): void
	{
	}
}
