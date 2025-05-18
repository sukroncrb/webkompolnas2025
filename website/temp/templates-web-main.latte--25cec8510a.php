<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/project/kompolnas/templates/web/main.latte */
final class Template_25cec8510a extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/project/kompolnas/templates/web/main.latte';

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
		$this->createTemplate('./components/floating.latte', $this->params, 'include')->renderToContentType('html') /* line 17 */;
		echo '
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 19 */;
		echo 'assets/web/js/jquery-3.7.0.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 20 */;
		echo 'assets/admin/js/style.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 21 */;
		echo 'assets/admin/js/jam.js"></script>
    <script>
        setInterval(()=>{
            setJamDigital(\'jam\');
        }, 1000);

        setJamDigital(\'jam\');

        el("#switch-menu").addEventListener("click", ()=>{
            if(el("#float-menu").classList.contains("bottom-[-400px]")){
                el("#float-menu").classList.remove("bottom-[-400px]");
                el("#float-menu").classList.add("bottom-0");
            }else{
                el("#float-menu").classList.remove("bottom-0");
                el("#float-menu").classList.add("bottom-[-400px]");
            }
        });

        window.addEventListener("click", (e)=>{
            if(e.target.dataset.opsi != "switch") {
                el("#float-menu").classList.remove("bottom-0");
                el("#float-menu").classList.add("bottom-[-400px]");
            }
        });

        let fabUp = el("#fabUp");
        window.addEventListener("scroll", ()=>{
            const currentOffset = window.pageYOffset;
            if(currentOffset > 100) {
                fabUp.classList.remove("bottom-[-100px]");
                fabUp.classList.add("bottom-[30px]");
            }else{
                fabUp.classList.remove("bottom-[30px]");
                fabUp.classList.add("bottom-[-100px]");
            }
        });

        fabUp.addEventListener("click", ()=>{
            window.scrollTo({
                top:0,
                behavior: "smooth"
            });
        })
    </script>
';
		$this->renderBlock('js', get_defined_vars()) /* line 65 */;
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


	/** {block js} on line 65 */
	public function blockJs(array $ʟ_args): void
	{
	}
}
