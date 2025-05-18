<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/templates/web/components/floating.latte */
final class Template_114b6e5b78 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/templates/web/components/floating.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div id="float-menu" class="overflow-auto border-t-1 border-solid border-gray-200 fixed z-99 bg-white h-[400px] right-0 left-0 transition-all
    bottom-[-400px]
    lg:bottom-[-400px]
    xl:bottom-[-400px]
    2xl:bottom-[-400px]
">
    <div class="menu-mobile">
        <ul>
            <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 9 */;
		echo '\'>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"></path>
                </svg>
            </li>
            <li>
                <span>
                    Tentang Kompolnas    
                </span>
                <svg class="down" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                </svg>
                <line></line>
                <ul>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 23 */;
		echo 'tentang-kompolnas/sejarah\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 23 */;
		echo 'tentang-kompolnas/sejarah\'>Sejarah</a></li>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 24 */;
		echo 'tentang-kompolnas/arti-logo-dan-lambang\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 24 */;
		echo 'tentang-kompolnas/arti-logo-dan-lambang\'>Arti logo dan lambang</a></li>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 25 */;
		echo 'tentang-kompolnas/visi-dan-misi\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 25 */;
		echo 'tentang-kompolnas/visi-dan-misi\'>Visi dan Misi</a></li>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 26 */;
		echo 'tentang-kompolnas/tupoksi\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 26 */;
		echo 'tentang-kompolnas/tupoksi\'>Tupoksi</a></li>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 27 */;
		echo 'tentang-kompolnas/struktur-organisasi\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 27 */;
		echo 'tentang-kompolnas/struktur-organisasi\'>Struktur Organisasi</a></li>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 28 */;
		echo 'tentang-kompolnas/komisioner\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 28 */;
		echo 'tentang-kompolnas/komisioner\'>Komisioner</a></li>
                </ul>
            </li>
            <li>
                <span>Data dan Publikasi</span>
                <svg class="down" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                </svg>
                <line></line>
                <ul>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 38 */;
		echo 'data-dan-publikasi/buku\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 38 */;
		echo 'data-dan-publikasi/buku\'>Buku</a></li>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 39 */;
		echo 'data-dan-publikasi/video\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 39 */;
		echo 'data-dan-publikasi/video\'>Video</a></li>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 40 */;
		echo 'data-dan-publikasi/photo\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 40 */;
		echo 'data-dan-publikasi/photo\'>Photo</a></li>
                </ul>
            </li>
            <li>
                <a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 44 */;
		echo 'berita\'>
                    <span>Berita</span>
                    <line></line>
                </a>
            </li>
            <li>
                <span>Regulasi</span>
                <svg class="down" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                </svg>
                <line></line>
                <ul>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 56 */;
		echo 'regulasi/uud-45\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 56 */;
		echo 'regulasi/uud-45\'>UUD 1945</a></li>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 57 */;
		echo 'regulasi/tap-mpr-ri\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 57 */;
		echo 'regulasi/tap-mpr-ri\'>TAP MPR RI</a></li>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 58 */;
		echo 'regulasi/undang-undang\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 58 */;
		echo 'regulasi/undang-undang\'>Undang-undang</a></li>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 59 */;
		echo 'regulasi/peraturan-presiden\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 59 */;
		echo 'regulasi/peraturan-presiden\'>Peraturan Presiden</a></li>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 60 */;
		echo 'regulasi/peraturan-kompolnas\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 60 */;
		echo 'regulasi/peraturan-kompolnas\'>Peraturan Kompolnas</a></li>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 61 */;
		echo 'regulasi/peraturan-polri\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 61 */;
		echo 'regulasi/peraturan-polri\'>Peraturan Polri</a></li>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 62 */;
		echo 'regulasi/peraturan-kapolri\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 62 */;
		echo 'regulasi/peraturan-kapolri\'>Peraturan Kapolri</a></li>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 63 */;
		echo 'regulasi/surat-edaran\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 63 */;
		echo 'regulasi/surat-edaran\'>Surat Edaran</a></li>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 64 */;
		echo 'regulasi/peraturan-menko\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 64 */;
		echo 'regulasi/peraturan-menko\'>Permenko</a></li>
                </ul>
            </li>
            <li>
                <a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 68 */;
		echo 'hubungi-kami\'>
                    <span>Hubungi Kami</span>
                    <line></line>
                </a>
            </li>
        </ul>
    </div>
</div>


<div class="fab">
    <button class="btn bottom-[-100px] transition-all" id="fabUp">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18"></path>
        </svg>
    </button>
</div>


';
		if (isset($sesi['id'])) /* line 87 */ {
			echo '    <div onClick=\'window.location.href=this.dataset.link\' data-link=\'';
			echo LR\Filters::escapeHtmlAttr($baseurl) /* line 88 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 88 */;
			echo '\' style=\'cursor: pointer; position: fixed; bottom: 30px; left: 30px; z-index: 999; background: #005e94; border-radius: 50px; padding: 10px; display: flex; justify-content: start; align-items: center;\'>
        <div style=\'width: 40px; height: 40px; overflow:hidden; border-radius: 50%;\'>
            <img src="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($sesi['photo'])) /* line 90 */;
			echo '"  style=\'width: 40px; height: 40px; object-fit:cover;\'>
        </div>
        <div style=\'margin-left: 10px; color: #fff; padding-right: 10px;\'>
            <div><strong>';
			echo LR\Filters::escapeHtmlText($sesi['nama']) /* line 93 */;
			echo '</strong></div>
        </div>
    </div>
';
		}
	}
}
