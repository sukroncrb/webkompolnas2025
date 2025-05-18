<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/project/php/kompolnas/templates/web/main.latte */
final class Template_927c6904c9 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/project/php/kompolnas/templates/web/main.latte';

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
    <meta name="baseurl" content="';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 6 */;
		echo '">
    <meta property="og:url" content="';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 7 */;
		echo '"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Kompolnas Official"/>
    <meta property="og:description" content="Website Resmi Komisi Kepolisian Nasional"/>
    <title>';
		$this->renderBlock('title', get_defined_vars()) /* line 11 */;
		echo '</title>
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 12 */;
		echo 'assets/web/css/style.css">
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 13 */;
		echo 'assets/admin/css/animasi-skm.css" />
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 15 */;
		echo 'assets/web/css/shimmer.css">
';
		$this->renderBlock('css', get_defined_vars()) /* line 16 */;
		echo '</head>
<body>

    <div itemprop="blog Post" itemscope="itemscope" itemtype="http://schema.org/BlogPosting">
        <div itemprop="image" itemscope="itemscope" itemtype="http://schema.org/ImageObject">
            <meta content="';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 22 */;
		echo 'assets/web/images/12334.png" itemprop=\'https';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 22 */;
		echo '\'/>
        </div>
    </div>

    <div id=\'opsi\' data-apikey="';
		echo LR\Filters::escapeHtmlAttr($apikey) /* line 26 */;
		echo '"></div>
';
		$this->createTemplate('./components/header.latte', $this->params, 'include')->renderToContentType('html') /* line 27 */;
		$this->renderBlock('content', get_defined_vars()) /* line 28 */;
		$this->createTemplate('./components/footer.latte', $this->params, 'include')->renderToContentType('html') /* line 29 */;
		$this->createTemplate('./components/floating.latte', $this->params, 'include')->renderToContentType('html') /* line 30 */;
		echo '
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 32 */;
		echo 'assets/web/js/jquery-3.7.0.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 33 */;
		echo 'assets/admin/js/jam.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 34 */;
		echo 'assets/web/js/web.js"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 35 */;
		echo 'assets/web/js/validasi.js"></script>
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
                fabUp.classList.add("bottom-[95px]");
            }else{
                fabUp.classList.remove("bottom-[95px]");
                fabUp.classList.add("bottom-[-100px]");
            }
        });

        fabUp.addEventListener("click", ()=>{
            window.scrollTo({
                top:0,
                behavior: "smooth"
            });
        });

        
    </script>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="c4dd1880-97b3-4279-ac1c-08c391050270";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
';
		$this->renderBlock('js', get_defined_vars()) /* line 82 */;
		echo '</body>
</html>';
	}


	/** {block title} on line 11 */
	public function blockTitle(array $ʟ_args): void
	{
	}


	/** {block css} on line 16 */
	public function blockCss(array $ʟ_args): void
	{
	}


	/** {block content} on line 28 */
	public function blockContent(array $ʟ_args): void
	{
	}


	/** {block js} on line 82 */
	public function blockJs(array $ʟ_args): void
	{
	}
}
