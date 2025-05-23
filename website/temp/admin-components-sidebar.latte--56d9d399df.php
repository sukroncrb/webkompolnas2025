<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/website/templates/admin/components/sidebar.latte */
final class Template_56d9d399df extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/website/templates/admin/components/sidebar.latte';


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


                <!--- Admin -->
';
		if ($sesi['namagrup'] == 'Administrator') /* line 50 */ {
			echo '
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 53 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 53 */;
			echo '/berita" aria-expanded="false">
                            <span>
                                <i class="ti ti-news"></i>
                            </span>
                            <span class="hide-menu">Berita</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 61 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 61 */;
			echo '/buku" aria-expanded="false">
                            <span>
                                <i class="ti ti-book"></i>
                            </span>
                            <span class="hide-menu">Buku</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 69 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 69 */;
			echo '/photo" aria-expanded="false">
                            <span>
                                <i class="ti ti-photo"></i>
                            </span>
                            <span class="hide-menu">Photo</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 85 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 85 */;
			echo '/pengumuman" aria-expanded="false">
                            <span>
                                <i class="ti ti-speakerphone"></i>
                            </span>
                            <span class="hide-menu">Pengumuman</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 93 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 93 */;
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
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 109 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 109 */;
			echo '/statis/editor/home-page" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Home Page</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 117 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 117 */;
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
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 133 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 133 */;
			echo '/form/data/ppid" aria-expanded="false">
                            <span>
                                <i class="ti ti-news"></i>
                            </span>
                            <span class="hide-menu">Permohonan Data</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 141 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 141 */;
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
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 164 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 164 */;
			echo '/users" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Semua user</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 172 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 172 */;
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
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 182 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 182 */;
			echo '/seting" aria-expanded="false">
                            <span>
                                <i class="ti ti-settings"></i>
                            </span>
                            <span class="hide-menu">Seting</span>
                        </a>
                    </li>

';
		}
		echo '


                <!--- Humas -->
';
		if ($sesi['namagrup'] == 'Humas') /* line 195 */ {
			echo '                
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 198 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 198 */;
			echo '/berita" aria-expanded="false">
                            <span>
                                <i class="ti ti-news"></i>
                            </span>
                            <span class="hide-menu">Berita</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 206 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 206 */;
			echo '/buku" aria-expanded="false">
                            <span>
                                <i class="ti ti-book"></i>
                            </span>
                            <span class="hide-menu">Buku</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 214 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 214 */;
			echo '/photo" aria-expanded="false">
                            <span>
                                <i class="ti ti-photo"></i>
                            </span>
                            <span class="hide-menu">Photo</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 230 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 230 */;
			echo '/pengumuman" aria-expanded="false">
                            <span>
                                <i class="ti ti-speakerphone"></i>
                            </span>
                            <span class="hide-menu">Pengumuman</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 238 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 238 */;
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
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 254 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 254 */;
			echo '/statis/editor/home-page" class="sidebar-link">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                    <i class="ti ti-circle"></i>
                                    </div>
                                    <span class="hide-menu">Home Page</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 262 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 262 */;
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
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 278 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 278 */;
			echo '/form/data/ppid" aria-expanded="false">
                            <span>
                                <i class="ti ti-news"></i>
                            </span>
                            <span class="hide-menu">Permohonan Data</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 286 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 286 */;
			echo '/form/data/pengaduan" aria-expanded="false">
                            <span>
                                <i class="ti ti-news"></i>
                            </span>
                            <span class="hide-menu">Pengaduan</span>
                        </a>
                    </li>

';
		}
		echo '




                <!--- Humas -->
';
		if ($sesi['namagrup'] == 'Hukum') /* line 301 */ {
			echo '                
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 304 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 304 */;
			echo '/regulasi" aria-expanded="false">
                            <span>
                                <i class="ti ti-file-text-spark"></i>
                            </span>
                            <span class="hide-menu">Regulasi</span>
                        </a>
                    </li>

';
		}
		echo '






                <!--- Humas -->
';
		if ($sesi['namagrup'] == 'Penulis') /* line 321 */ {
			echo '                
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 324 */;
			echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 324 */;
			echo '/berita" aria-expanded="false">
                            <span>
                                <i class="ti ti-news"></i>
                            </span>
                            <span class="hide-menu">Berita</span>
                        </a>
                    </li>

';
		}
		echo '                
                
            </ul>
        </nav>

        <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3 text-center">
            <span class="fs-2">';
		echo LR\Filters::escapeHtmlText($tanggaldanhari) /* line 339 */;
		echo '</span>
            <h6 class="mb-0 fs-6 fw-semibold"><span id=\'jam\'>Loading..</span> WIB</h6>
        </div>
    </div>
</aside>';
	}
}
