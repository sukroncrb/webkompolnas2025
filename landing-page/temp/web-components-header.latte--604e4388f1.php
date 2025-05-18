<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/templates/web/components/header.latte */
final class Template_604e4388f1 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/templates/web/components/header.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="header">
    <div class="container">
        <div class="header-block">
            <div class="relative header-item w-[350px]">
                <div class=\'animasi-logo-skm w-full\' onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 5 */;
		echo '\'>
                    <span class=\'teks-s w-full cursor-pointer\'>KOMISI</span>
                    <span class=\'teks-k w-full cursor-pointer\'>KEPOLISIAN</span>
                    <span class=\'teks-m w-full cursor-pointer\'>NASIONAL</span>
                    <span class=\'teks-skm w-full cursor-pointer\'><img src=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 9 */;
		echo 'assets/admin/images/custom-apps/img/Logo_Kompolnas.png\'><span>KOMPOLNAS</span></span>
                </div>
            </div>
            <div class="relative w-full">
                <div class="
                    w-[80%] mx-auto relative right-0
                    sm:w-[87%]
                    md:w-[87%]
                    lg:w-[87%]
                    xl:w-[90%]
                    2xl:w-[90%]
                    ">
                    <input class="
                        w-full border border-gray-300 pl-10 rounded-md outline-none p-2 hidden 
                        md:hidden 
                        sm:hidden 
                        lg:block 
                        xl:block 
                        2xl:block" placeholder="Cari">
                    <svg class="
                        absolute w-6 stroke-gray-300 left-auto top-[-30px] right-[-40px]  
                        2xl:left-2 2xl:top-2
                        xl:left-2 xl:top-2
                        lg:left-2 lg:top-2 lg:right-[-40px]
                        md:left-auto md:top-[-30px] md:right-[-40px]
                        sm-left-auto sm-top-[-30px] sm:right-[-40px]
                        " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"></path>
                    </svg>
                </div>
            </div>
            <div class="
                w-[350px]
                hidden relative header-item flex flex-end px-4
                2xl:block
                xl:block
                lg:block
                md:hidden
                sm:hidden">
                <div class="w-full flex justify-center items-center gap-4">
                    <div class="w-[35px] h-[35px] bg-gray-200 rounded-full flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 2.994v2.25m10.5-2.25v2.25m-14.252 13.5V7.491a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.251m-18 0a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25m-18 0v-7.5a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5m-6.75-6h2.25m-9 2.25h4.5m.002-2.25h.005v.006H12v-.006Zm-.001 4.5h.006v.006h-.006v-.005Zm-2.25.001h.005v.006H9.75v-.006Zm-2.25 0h.005v.005h-.006v-.005Zm6.75-2.247h.005v.005h-.005v-.005Zm0 2.247h.006v.006h-.006v-.006Zm2.25-2.248h.006V15H16.5v-.005Z"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="text-sm">';
		echo LR\Filters::escapeHtmlText($tanggaldanharisimple) /* line 55 */;
		echo '</div>
                        <div class="mt-[-5px] font-semibold"><span id=\'jam\'>17:56:00</span> <span>WIB</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="container">
        <div class="menu">
            <div class="w-full flex justify-between items-center">
                <ul>
                    <li onClick="javascript:void(0)" id="switch-menu" data-opsi="switch">
                        <svg data-opsi="switch" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path  data-opsi="switch" stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                        </svg>
                    </li>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 72 */;
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
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 86 */;
		echo 'tentang-kompolnas/sejarah\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 86 */;
		echo 'tentang-kompolnas/sejarah\'>Sejarah</a></li>
                            <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 87 */;
		echo 'tentang-kompolnas/arti-logo-dan-lambang\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 87 */;
		echo 'tentang-kompolnas/arti-logo-dan-lambang\'>Arti logo dan lambang</a></li>
                            <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 88 */;
		echo 'tentang-kompolnas/visi-dan-misi\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 88 */;
		echo 'tentang-kompolnas/visi-dan-misi\'>Visi dan Misi</a></li>
                            <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 89 */;
		echo 'tentang-kompolnas/tupoksi\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 89 */;
		echo 'tentang-kompolnas/tupoksi\'>Tupoksi</a></li>
                            <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 90 */;
		echo 'tentang-kompolnas/struktur-organisasi\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 90 */;
		echo 'tentang-kompolnas/struktur-organisasi\'>Struktur Organisasi</a></li>
                            <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 91 */;
		echo 'tentang-kompolnas/komisioner\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 91 */;
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
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 101 */;
		echo 'data-dan-publikasi/buku\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 101 */;
		echo 'data-dan-publikasi/buku\'>Buku</a></li>
                            <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 102 */;
		echo 'data-dan-publikasi/video\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 102 */;
		echo 'data-dan-publikasi/video\'>Video</a></li>
                            <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 103 */;
		echo 'data-dan-publikasi/photo\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 103 */;
		echo 'data-dan-publikasi/photo\'>Photo</a></li>
                        </ul>
                    </li>
                    <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 106 */;
		echo 'berita\'>
                        <span>Berita</span>
                        <line></line>
                    </li>
                    <li>
                        <span>Regulasi</span>
                        <svg class="down" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                        </svg>
                        <line></line>
                        <ul>
                            <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 117 */;
		echo 'regulasi/uud-45\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 117 */;
		echo 'regulasi/uud-45\'>UUD 1945</a></li>
                            <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 118 */;
		echo 'regulasi/tap-mpr-ri\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 118 */;
		echo 'regulasi/tap-mpr-ri\'>TAP MPR RI</a></li>
                            <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 119 */;
		echo 'regulasi/undang-undang\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 119 */;
		echo 'regulasi/undang-undang\'>Undang-undang</a></li>
                            <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 120 */;
		echo 'regulasi/peraturan-presiden\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 120 */;
		echo 'regulasi/peraturan-presiden\'>Peraturan Presiden</a></li>
                            <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 121 */;
		echo 'regulasi/peraturan-kompolnas\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 121 */;
		echo 'regulasi/peraturan-kompolnas\'>Peraturan Kompolnas</a></li>
                            <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 122 */;
		echo 'regulasi/peraturan-polri\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 122 */;
		echo 'regulasi/peraturan-polri\'>Peraturan Polri</a></li>
                            <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 123 */;
		echo 'regulasi/peraturan-kapolri\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 123 */;
		echo 'regulasi/peraturan-kapolri\'>Peraturan Kapolri</a></li>
                            <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 124 */;
		echo 'regulasi/surat-edaran\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 124 */;
		echo 'regulasi/surat-edaran\'>Surat Edaran</a></li>
                            <li onClick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 125 */;
		echo 'regulasi/peraturan-menko\'><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 125 */;
		echo 'regulasi/peraturan-menko\'>Permenko</a></li>
                        </ul>
                    </li>
                    <li onclick="window.location.href=this.dataset.link" data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 128 */;
		echo 'hubungi-kami\'>
                        <span>Hubungi Kami</span>
                        <line></line>
                    </li>
                </ul>
                <div class="flex justify-end items-center gap-4">
                    <button 
                        onclick="window.location.href=this.dataset.link" 
                        data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 136 */;
		echo 'form/pengaduan\'
                        type="button" 
                        class="
                            mt-2
                            text-white 
                            bg-sky-700 
                            hover:bg-sky-800 
                            font-medium 
                            rounded-lg
                            text-sm 
                            px-5 
                            py-2.5 
                            me-2 
                            mb-2 
                            mr-0
                            focus:outline-none 
                            dark:focus:ring-sky-800
                            cursor-pointer">
                    Pengaduan
                    </button>
                    <button
                        onclick="window.location.href=this.dataset.link" 
                        data-link=\'';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 177 */;
		echo 'form/ppid\'
                        type="button" 
                        class="cursor-pointer">
                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 180 */;
		echo 'assets/web/images/eppid.svg" class="mx-auto w-25">
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="line"></div>
</div>';
	}
}
