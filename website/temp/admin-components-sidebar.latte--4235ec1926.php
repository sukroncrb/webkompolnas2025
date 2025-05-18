<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/php/abiesoft/templates/admin/components/sidebar.latte */
final class Template_4235ec1926 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/php/abiesoft/templates/admin/components/sidebar.latte';


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

                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Menu</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <span class="d-flex">
                        <i class="ti ti-layout-dashboard"></i>
                        </span>
                        <span class="hide-menu">Tugas Saya</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 48 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 48 */;
		echo '/tugas?p=verifikasi" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Verifikasi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 56 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 56 */;
		echo '/tugas?p=otentikasi" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Otentikasi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 64 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 64 */;
		echo '/tugas?p=disposisi" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Disposisi</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 72 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 72 */;
		echo '/tugas?p=penanganan" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Penanganan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 82 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 82 */;
		echo '/surat" aria-expanded="false">
                        <span>
                            <i class="ti ti-mail-down"></i>
                        </span>
                        <span class="hide-menu">Surat</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 90 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 90 */;
		echo '/skm" aria-expanded="false">
                        <span>
                            <i class="ti ti-mail-star"></i>
                        </span>
                        <span class="hide-menu">SKM</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 98 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 98 */;
		echo '/berkas" aria-expanded="false">
                        <span>
                            <i class="ti ti-replace"></i>
                        </span>
                        <span class="hide-menu">Berkas</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 106 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 106 */;
		echo '/laporan" aria-expanded="false">
                        <span>
                            <i class="ti ti-report"></i>
                        </span>
                        <span class="hide-menu">Laporan</span>
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
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 127 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 127 */;
		echo '/users" class="sidebar-link">
                                <div class="round-16 d-flex align-items-center justify-content-center">
                                <i class="ti ti-circle"></i>
                                </div>
                                <span class="hide-menu">Semua user</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 135 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 135 */;
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
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 145 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 145 */;
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
		echo LR\Filters::escapeHtmlText($tanggaldanhari) /* line 157 */;
		echo '</span>
            <h6 class="mb-0 fs-6 fw-semibold"><span id=\'jam\'>Loading..</span> WIB</h6>
        </div>
    </div>
</aside>';
	}
}
