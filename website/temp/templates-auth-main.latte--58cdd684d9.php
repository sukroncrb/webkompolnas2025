<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/templates/auth/main.latte */
final class Template_58cdd684d9 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/templates/auth/main.latte';

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
    <meta name="baseurl" content="';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 9 */;
		echo '" />
    <meta name="apikey" content="';
		echo LR\Filters::escapeHtmlAttr($apikey) /* line 10 */;
		echo '" />
    <link rel="shortcut icon" type="image/png" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 11 */;
		echo 'assets/admin/images/logos/favicon.png" />
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 12 */;
		echo 'assets/admin/css/styles.css" />
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 13 */;
		echo 'assets/admin/css/animasi-skm.css" />
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 14 */;
		echo 'assets/auth/css/style.css" />
';
		$this->renderBlock('css', get_defined_vars()) /* line 15 */;
		echo '    <title>';
		$this->renderBlock('title', get_defined_vars()) /* line 16 */;
		echo '</title>

</head>

<body class="link-sidebar">

    <div class="preloader">
        <div class="skm-loader">
            <div class=\'animasi-logo-skm\'>
                <span class=\'teks-s\'>KOMISI</span>
                <span class=\'teks-k\'>KEPOLISIAN</span>
                <span class=\'teks-m\'>NASIONAL</span>
                <span class=\'teks-skm\'><img src=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 28 */;
		echo 'assets/admin/images/custom-apps/img/Logo_Kompolnas.png\'><span>KOMPOLNAS</span></span>
            </div>
        </div>
    </div>
    
';
		$this->renderBlock('content', get_defined_vars()) /* line 33 */;
		echo '
    <script>
        function handleColorTheme(e) {
            document.documentElement.setAttribute("data-color-theme", e);
        }
    </script>

    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 41 */;
		echo 'assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 42 */;
		echo 'assets/admin/js/theme/theme.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 43 */;
		echo 'assets/admin/js/style.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 44 */;
		echo 'assets/admin/js/form.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 45 */;
		echo 'assets/admin/js/validasi.js"></script>
';
		$this->renderBlock('js', get_defined_vars()) /* line 46 */;
		echo '
</body>

</html>';
	}


	/** {block css} on line 15 */
	public function blockCss(array $ʟ_args): void
	{
	}


	/** {block title} on line 16 */
	public function blockTitle(array $ʟ_args): void
	{
	}


	/** {block content} on line 33 */
	public function blockContent(array $ʟ_args): void
	{
	}


	/** {block js} on line 46 */
	public function blockJs(array $ʟ_args): void
	{
	}
}
