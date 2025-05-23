<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/website/templates/admin/main.latte */
final class Template_a29ab59a76 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/website/templates/admin/main.latte';

	public const Blocks = [
		['css' => 'blockCss', 'title' => 'blockTitle', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<!DOCTYPE html>
<html lang="id" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

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
    <meta name="prefix" content="';
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 11 */;
		echo '" />

    <link rel="shortcut icon" type="image/png" href="$baseurl}assets/admin/images/logos/favicon.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 14 */;
		echo 'favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 15 */;
		echo 'favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 16 */;
		echo 'favicon/favicon-16x16.png">
    <link rel="manifest" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 17 */;
		echo 'favicon/site.webmanifest">

    <link rel="shortcut icon" type="image/png" href="$baseurl}assets/admin/images/logos/favicon.png" />
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 20 */;
		echo 'assets/admin/css/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 22 */;
		echo 'assets/admin/css/style.css" />
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 23 */;
		echo 'assets/admin/css/animasi-skm.css" />
';
		$this->renderBlock('css', get_defined_vars()) /* line 24 */;
		echo '    <title>';
		$this->renderBlock('title', get_defined_vars()) /* line 25 */;
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
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 37 */;
		echo 'assets/admin/images/custom-apps/img/Logo_Kompolnas.png\'><span>KOMPOLNAS</span></span>
            </div>
        </div>
    </div>
    
    <div id="main-wrapper">
';
		$this->createTemplate('./components/sidebar.latte', $this->params, 'include')->renderToContentType('html') /* line 43 */;
		echo '
        <div class="page-wrapper">
';
		$this->createTemplate('./components/header.latte', $this->params, 'include')->renderToContentType('html') /* line 46 */;
		$this->createTemplate('./components/aside.latte', $this->params, 'include')->renderToContentType('html') /* line 47 */;
		$this->renderBlock('content', get_defined_vars()) /* line 48 */;
		echo '        </div>
    </div>

    <script>
        function handleColorTheme(e) {
            document.documentElement.setAttribute("data-color-theme", e);
        }
    </script>

    <div class="dark-transparent sidebartoggler"></div>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 59 */;
		echo '/assets/admin/js/vendor.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 60 */;
		echo 'assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 61 */;
		echo 'assets/admin/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 62 */;
		echo 'assets/admin/js/theme/app.init.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 63 */;
		echo 'assets/admin/js/theme/theme.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 64 */;
		echo 'assets/admin/js/theme/app.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 65 */;
		echo 'assets/admin/js/theme/sidebarmenu.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 66 */;
		echo 'assets/admin/js/jam.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 68 */;
		echo 'assets/admin/js/style.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 69 */;
		echo 'assets/admin/js/form.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 70 */;
		echo 'assets/admin/js/validasi.js"></script>
    <script>
    setInterval(()=>{
        setJamDigital(\'jam\');
    }, 1000);

    setJamDigital(\'jam\');
    </script>
';
		$this->renderBlock('js', get_defined_vars()) /* line 78 */;
		echo '
</body>

</html>';
	}


	/** {block css} on line 24 */
	public function blockCss(array $ʟ_args): void
	{
	}


	/** {block title} on line 25 */
	public function blockTitle(array $ʟ_args): void
	{
	}


	/** {block content} on line 48 */
	public function blockContent(array $ʟ_args): void
	{
	}


	/** {block js} on line 78 */
	public function blockJs(array $ʟ_args): void
	{
	}
}
