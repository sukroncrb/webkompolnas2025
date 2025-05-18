<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/php/abiesoft/templates/web/main.latte */
final class Template_e6aa90d1b2 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/php/abiesoft/templates/web/main.latte';

	public const Blocks = [
		['title' => 'blockTitle', 'css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>';
		$this->renderBlock('title', get_defined_vars()) /* line 6 */;
		echo '</title>
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 7 */;
		echo 'assets/web/css/style.css">
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 8 */;
		echo 'assets/admin/css/animasi-skm.css" />
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 9 */;
		echo 'assets/web/css/struktur.css">
';
		$this->renderBlock('css', get_defined_vars()) /* line 10 */;
		echo '</head>
<body>

';
		$this->createTemplate('./components/header.latte', $this->params, 'include')->renderToContentType('html') /* line 14 */;
		$this->renderBlock('content', get_defined_vars()) /* line 15 */;
		$this->createTemplate('./components/footer.latte', $this->params, 'include')->renderToContentType('html') /* line 16 */;
		echo '
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 18 */;
		echo 'assets/web/js/jquery-3.7.0.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 19 */;
		echo 'assets/admin/js/style.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 20 */;
		echo 'assets/admin/js/jam.js"></script>
    <script>
        setInterval(()=>{
            setJamDigital(\'jam\');
        }, 1000);

        setJamDigital(\'jam\');
    </script>
';
		$this->renderBlock('js', get_defined_vars()) /* line 28 */;
		echo '</body>
</html>';
	}


	/** {block title} on line 6 */
	public function blockTitle(array $ʟ_args): void
	{
	}


	/** {block css} on line 10 */
	public function blockCss(array $ʟ_args): void
	{
	}


	/** {block content} on line 15 */
	public function blockContent(array $ʟ_args): void
	{
	}


	/** {block js} on line 28 */
	public function blockJs(array $ʟ_args): void
	{
	}
}
