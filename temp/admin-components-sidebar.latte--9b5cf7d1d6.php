<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/templates/admin/components/sidebar.latte */
final class Template_9b5cf7d1d6 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/templates/admin/components/sidebar.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<aside class="left-sidebar with-vertical">
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 4 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 4 */;
		echo '" class="text-nowrap logo-img">
                <div class=\'animasi-logo-skm\'>
                    <span class=\'teks-s\'>KOMISI</span>
                    <span class=\'teks-k\'>KEPOLISIAN</span>
                    <span class=\'teks-m\'>NASIONAL</span>
                    <span class=\'teks-skm\'><img src=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 11 */;
		echo 'assets/admin/images/custom-apps/img/Logo_Kompolnas.png\'><span>KOMPOLNAS</span></span>
                </div>
            </a>
            <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
                <i class="ti ti-x"></i>
            </a>
        </div>
 
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 27 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 27 */;
		echo '/dashboard" aria-expanded="false">
                        <span>
                            <i class="ti ti-home"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 35 */;
		echo '" aria-expanded="false">
                        <span>
                            <i class="ti ti-browser"></i>
                        </span>
                        <span class="hide-menu">Live Website</span>
                    </a>
                </li>

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Website</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 48 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 48 */;
		echo '/berita" aria-expanded="false">
                        <span>
                            <i class="ti ti-news"></i>
                        </span>
                        <span class="hide-menu">Berita</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 56 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 56 */;
		echo '/buku" aria-expanded="false">
                        <span>
                            <i class="ti ti-book"></i>
                        </span>
                        <span class="hide-menu">Buku</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 64 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 64 */;
		echo '/photo" aria-expanded="false">
                        <span>
                            <i class="ti ti-photo"></i>
                        </span>
                        <span class="hide-menu">Photo</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 80 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 80 */;
		echo '/pengumuman" aria-expanded="false">
                        <span>
                            <i class="ti ti-speakerphone"></i>
                        </span>
                        <span class="hide-menu">Pengumuman</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 88 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 88 */;
		echo '/regulasi" aria-expanded="false">
                        <span>
                            <i class="ti ti-file-text-spark"></i>
                        </span>
                        <span class="hide-menu">Regulasi</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                        <i class="ti ti-box-multiple"></i>
                        </span>
                        <span class="hide-menu">Halaman Statis</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 104 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 104 */;
		echo '/statis/editor/home-page" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Home Page</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 112 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 112 */;
		echo '/statis/editor/tentang-kompolnas" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Tentang Kompolnas</span>
                            </a>
                        </li>
                    </ul>
                </li>

                
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Formulir Online</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 128 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 128 */;
		echo '/form/data/ppid" aria-expanded="false">
                        <span>
                            <i class="ti ti-news"></i>
                        </span>
                        <span class="hide-menu">Permohonan Data</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 136 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 136 */;
		echo '/form/data/pengaduan" aria-expanded="false">
                        <span>
                            <i class="ti ti-news"></i>
                        </span>
                        <span class="hide-menu">Pengaduan</span>
                    </a>
                </li>



                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Seting</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                        <i class="ti ti-users"></i>
                        </span>
                        <span class="hide-menu">Users</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 159 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 159 */;
		echo '/users" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Semua user</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 167 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 167 */;
		echo '/grup" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Grup</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 177 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 177 */;
		echo '/seting" aria-expanded="false">
                        <span>
                            <i class="ti ti-settings"></i>
                        </span>
                        <span class="hide-menu">Seting</span>
                    </a>
                </li>


                
                
            </ul>
        </nav>

        <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3 text-center">
            <span class="fs-2">';
		echo LR\Filters::escapeHtmlText($tanggaldanhari) /* line 192 */;
		echo '</span>
            <h6 class="mb-0 fs-6 fw-semibold"><span id=\'jam\'>Loading..</span> WIB</h6>
        </div>
    </div>
</aside>';
	}
}
