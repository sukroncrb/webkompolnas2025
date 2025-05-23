<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/website/templates/auth/main.latte */
final class Template_55b7f0583c extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/website/templates/auth/main.latte';

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

    <link rel="shortcut icon" type="image/png" href="$baseurl}assets/admin/images/logos/favicon.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 13 */;
		echo 'favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 14 */;
		echo 'favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 15 */;
		echo 'favicon/favicon-16x16.png">
    <link rel="manifest" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 16 */;
		echo 'favicon/site.webmanifest">
    
    <link rel="shortcut icon" type="image/png" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 18 */;
		echo 'assets/admin/images/logos/favicon.png" />
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 19 */;
		echo 'assets/admin/css/styles.css" />
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 20 */;
		echo 'assets/admin/css/animasi-skm.css" />
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 21 */;
		echo 'assets/auth/css/style.css" />
';
		$this->renderBlock('css', get_defined_vars()) /* line 22 */;
		echo '    <title>';
		$this->renderBlock('title', get_defined_vars()) /* line 23 */;
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
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 35 */;
		echo 'assets/admin/images/custom-apps/img/Logo_Kompolnas.png\'><span>KOMPOLNAS</span></span>
            </div>
        </div>
    </div>
    
';
		$this->renderBlock('content', get_defined_vars()) /* line 40 */;
		echo '
    <script>
        function handleColorTheme(e) {
            document.documentElement.setAttribute("data-color-theme", e);
        }
    </script>

    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 48 */;
		echo 'assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 49 */;
		echo 'assets/admin/js/theme/theme.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 50 */;
		echo 'assets/admin/js/style.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 51 */;
		echo 'assets/admin/js/form.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 52 */;
		echo 'assets/admin/js/validasi.js"></script>
';
		$this->renderBlock('js', get_defined_vars()) /* line 53 */;
		echo '
</body>

</html>';
	}


	/** {block css} on line 22 */
	public function blockCss(array $ʟ_args): void
	{
	}


	/** {block title} on line 23 */
	public function blockTitle(array $ʟ_args): void
	{
	}


	/** {block content} on line 40 */
	public function blockContent(array $ʟ_args): void
	{
	}


	/** {block js} on line 53 */
	public function blockJs(array $ʟ_args): void
	{
	}
}
