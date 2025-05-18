<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/templates/admin/main.latte */
final class Template_183b9fede4 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/templates/admin/main.latte';

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
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 13 */;
		echo 'assets/admin/css/styles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 15 */;
		echo 'assets/admin/css/style.css" />
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 16 */;
		echo 'assets/admin/css/animasi-skm.css" />
';
		$this->renderBlock('css', get_defined_vars()) /* line 17 */;
		echo '    <title>';
		$this->renderBlock('title', get_defined_vars()) /* line 18 */;
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
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 30 */;
		echo 'assets/admin/images/custom-apps/img/Logo_Kompolnas.png\'><span>KOMPOLNAS</span></span>
            </div>
        </div>
    </div>
    
    <div id="main-wrapper">
';
		$this->createTemplate('./components/sidebar.latte', $this->params, 'include')->renderToContentType('html') /* line 36 */;
		echo '
        <div class="page-wrapper">
';
		$this->createTemplate('./components/header.latte', $this->params, 'include')->renderToContentType('html') /* line 39 */;
		$this->createTemplate('./components/aside.latte', $this->params, 'include')->renderToContentType('html') /* line 40 */;
		$this->renderBlock('content', get_defined_vars()) /* line 41 */;
		echo '        </div>
    </div>

    <script>
        function handleColorTheme(e) {
            document.documentElement.setAttribute("data-color-theme", e);
        }
    </script>

    <div class="dark-transparent sidebartoggler"></div>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 52 */;
		echo '/assets/admin/js/vendor.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 53 */;
		echo 'assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 54 */;
		echo 'assets/admin/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 55 */;
		echo 'assets/admin/js/theme/app.init.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 56 */;
		echo 'assets/admin/js/theme/theme.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 57 */;
		echo 'assets/admin/js/theme/app.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 58 */;
		echo 'assets/admin/js/theme/sidebarmenu.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 59 */;
		echo 'assets/admin/js/jam.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 61 */;
		echo 'assets/admin/js/style.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 62 */;
		echo 'assets/admin/js/form.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 63 */;
		echo 'assets/admin/js/validasi.js"></script>
    <script>
    setInterval(()=>{
        setJamDigital(\'jam\');
    }, 1000);

    setJamDigital(\'jam\');
    </script>
';
		$this->renderBlock('js', get_defined_vars()) /* line 71 */;
		echo '
</body>

</html>';
	}


	/** {block css} on line 17 */
	public function blockCss(array $ʟ_args): void
	{
	}


	/** {block title} on line 18 */
	public function blockTitle(array $ʟ_args): void
	{
	}


	/** {block content} on line 41 */
	public function blockContent(array $ʟ_args): void
	{
	}


	/** {block js} on line 71 */
	public function blockJs(array $ʟ_args): void
	{
	}
}
