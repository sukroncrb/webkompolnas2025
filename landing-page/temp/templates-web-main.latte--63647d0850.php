<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/abiesoft/templates/web/main.latte */
final class Template_63647d0850 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/abiesoft/templates/web/main.latte';

	public const Blocks = [
		['title' => 'blockTitle', 'css' => 'blockCss', 'content' => 'blockContent'],
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
';
		$this->renderBlock('css', get_defined_vars()) /* line 7 */;
		echo '</head>
<body>
';
		$this->renderBlock('content', get_defined_vars()) /* line 10 */;
		echo '</body>
</html>';
	}


	/** {block title} on line 6 */
	public function blockTitle(array $ʟ_args): void
	{
	}


	/** {block css} on line 7 */
	public function blockCss(array $ʟ_args): void
	{
	}


	/** {block content} on line 10 */
	public function blockContent(array $ʟ_args): void
	{
	}
}
