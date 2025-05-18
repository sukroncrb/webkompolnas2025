<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/abiesoft/templates/admin/components/header.latte */
final class Template_c9a696a87b extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/abiesoft/templates/admin/components/header.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<header class="topbar">
    <div class="with-vertical">
    <nav class="navbar navbar-expand-lg p-0">
        <ul class="navbar-nav">
            <li class="nav-item nav-icon-hover-bg rounded-circle ms-n2">
                <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                    <i class="ti ti-menu-2"></i>
                </a>
            </li>
            <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-lg-flex">
                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <i class="ti ti-search"></i>
                </a>
            </li>
        </ul>


        <div class="d-block d-lg-none py-4">
            <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 19 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 19 */;
		echo '" class="text-nowrap logo-img">
                <div class=\'animasi-logo-skm\'>
                    <span class=\'teks-s\'>SARAN</span>
                    <span class=\'teks-k\'>KELUHAN</span>
                    <span class=\'teks-m\'>MASYARAKAT</span>
                    <span class=\'teks-skm\'><img src=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 24 */;
		echo 'assets/admin/images/custom-apps/img/Logo_Kompolnas.png\'><span>SKM</span></span>
                </div>
            </a>
        </div>
        <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="ti ti-dots fs-7"></i>
        </a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="d-flex align-items-center justify-content-between">
                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                    <li class="nav-item nav-icon-hover-bg rounded-circle dropdown">
                        <a class="nav-link position-relative" href="javascript:void(0)" id="drop2" aria-expanded="false">
                            <i class="ti ti-bell-ringing"></i>
                            <div class="notification bg-primary rounded-circle"></div>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                            <div class="d-flex align-items-center justify-content-between py-3 px-7">
                                <h5 class="mb-0 fs-5 fw-semibold">Notifikasi</h5>
                                <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 Baru</span>
                            </div>
                            <div class="message-body" data-simplebar>
                                <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 45 */;
		echo '" class="py-6 px-7 d-flex align-items-center dropdown-item">
                                    <span class="me-3">
                                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 47 */;
		echo 'assets/admin/images/profile/user-2.jpg" alt="user" class="rounded-circle" width="48" height="48" />
                                    </span>
                                    <div class="w-100">
                                        <h6 class="mb-1 fw-semibold lh-base">Surat Baru</h6>
                                        <span class="fs-2 d-block text-body-secondary">Barusaja</span>
                                    </div>
                                </a>
                            </div>
                            <div class="py-6 px-7 mb-1">
                                <button class="btn btn-outline-primary w-100">Lihat Semua Notifikasi</button>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <div class="user-profile-img">
                            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 64 */;
		echo 'assets/admin/images/profile/user-1.jpg" class="rounded-circle" width="35" height="35" alt="modernize-img" />
                            </div>
                        </div>
                        </a>
                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                        <div class="profile-dropdown position-relative" data-simplebar>
                            <div class="py-3 px-7 pb-0">
                                <h5 class="mb-0 fs-5 fw-semibold">Profile Saya</h5>
                            </div>
                            <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 74 */;
		echo 'assets/admin/images/profile/user-1.jpg" class="rounded-circle" width="80" height="80" alt="modernize-img" />
                                <div class="ms-3">
                                    <h5 class="mb-1 fs-3">Sukron</h5>
                                    <span class="mb-1 d-block">Staf</span>
                                    <p class="mb-0 d-flex align-items-center gap-2">
                                        <i class="ti ti-mail fs-4"></i> sabbayroad@gmail.com
                                    </p>
                                </div>
                            </div>
                            <div class="message-body">
                                <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 84 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 84 */;
		echo '/profile/detail/?uid=7afcdc06-6502-42d0-8a50-ce6be88ab8db&p=info" class="py-8 px-7 mt-8 d-flex align-items-center">
                                    <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 86 */;
		echo 'assets/admin/images/svgs/icon-account.svg" alt="modernize-img" width="24" height="24" />
                                    </span>
                                    <div class="w-100 ps-3">
                                        <h6 class="mb-1 fs-3 fw-semibold lh-base">Akun saya</h6>
                                        <span class="fs-2 d-block text-body-secondary">Setingan profile</span>
                                    </div>
                                </a>
                                <a href="../main/app-notes.html" class="py-8 px-7 d-flex align-items-center">
                                    <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 95 */;
		echo 'assets/admin/images/svgs/icon-tasks.svg" alt="modernize-img" width="24" height="24" />
                                    </span>
                                    <div class="w-100 ps-3">
                                        <h6 class="mb-1 fs-3 fw-semibold lh-base">Tugas Saya</h6>
                                        <span class="fs-2 d-block text-body-secondary">List tugas</span>
                                    </div>
                                </a>
                            </div>
                            <div class="d-grid py-4 px-7 pt-8">
                                <a href="../main/authentication-login.html" class="btn btn-outline-primary">Logout</a>
                            </div>
                        </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>    
</header>';
	}
}
