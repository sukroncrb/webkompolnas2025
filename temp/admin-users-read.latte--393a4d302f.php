<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/abiesoft/vendor/abiesoft/Http/../../../templates/admin/users/read.latte */
final class Template_393a4d302f extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/abiesoft/vendor/abiesoft/Http/../../../templates/admin/users/read.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('content', get_defined_vars()) /* line 2 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = '../main.latte';
		return get_defined_vars();
	}


	/** {block content} on line 2 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
            <div class="col-9">
                <h4 class="fw-semibold mb-8">Setingan Akun</h4>
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                    <a class="text-muted text-decoration-none" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 13 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 13 */;
		echo '/profile/detail/?uid=7afcdc06-6502-42d0-8a50-ce6be88ab8db&p=info">Akun</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Seting</li>
                </ol>
                </nav>
            </div>
            <div class="col-3">
                <div class="text-center mb-n5" style=\'min-height: 150px;\'>
                <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 21 */;
		echo 'assets/admin/images/custom-apps/icons/seting-icon.png" alt="modernize-img" class="img-fluid mb-n4" />
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="card">
        <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
            <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account" type="button" role="tab" aria-controls="pills-account" aria-selected="true">
                <i class="ti ti-user-circle me-2 fs-6"></i>
                <span class="d-none d-md-block">Akun</span>
            </button>
            </li>
            <li class="nav-item" role="presentation">
            <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-notifications-tab" data-bs-toggle="pill" data-bs-target="#pills-notifications" type="button" role="tab" aria-controls="pills-notifications" aria-selected="false">
                <i class="ti ti-bell me-2 fs-6"></i>
                <span class="d-none d-md-block">Notifikasi</span>
            </button>
            </li>
            <li class="nav-item" role="presentation">
            <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button" role="tab" aria-controls="pills-security" aria-selected="false">
                <i class="ti ti-lock me-2 fs-6"></i>
                <span class="d-none d-md-block">Keamanan</span>
            </button>
            </li>
        </ul>
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
                <div class="row">
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card w-100 border position-relative overflow-hidden">
                    <div class="card-body p-4">
                        <h4 class="card-title">Ubah Profile</h4>
                        <p class="card-subtitle mb-4">Ubah foto anda di sini</p>
                        <div class="text-center">
                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 58 */;
		echo 'assets/admin/images/profile/user-1.jpg" alt="modernize-img" class="img-fluid rounded-circle" width="120" height="120">
                        <div class="d-flex align-items-center justify-content-center my-4 gap-6">
                            <button class="btn btn-primary">Upload</button>
                            <button class="btn bg-danger-subtle text-danger">Reset</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-stretch">
                    <div class="card w-100 border position-relative overflow-hidden">
                    <div class="card-body p-4">
                        <h4 class="card-title">Password</h4>
                        <p class="card-subtitle mb-4">Abaikan form ini jika password tidak ingin diubah</p>
                        <form>
                        <div class="mb-3">
                            <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="tb-email" placeholder="name@example.com" />
                            <label for="tb-email">Password saat ini</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="tb-email" placeholder="name@example.com" />
                            <label for="tb-email">Password baru</label>
                            </div>
                        </div>
                        <div>
                            <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="tb-email" placeholder="name@example.com" />
                            <label for="tb-email">Konfirmasi password</label>
                            </div>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card w-100 border position-relative overflow-hidden mb-0">
                    <div class="card-body p-4">
                        <h4 class="card-title">Informasi Akun</h4>
                        <p class="card-subtitle mb-4">To change your personal detail , edit and save from here</p>
                        <form>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="tb-email" placeholder="name@example.com" />
                                    <label for="tb-email">Nama</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="tb-email" placeholder="name@example.com" />
                                    <label for="tb-email">Email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="tb-email" placeholder="name@example.com" />
                                    <label for="tb-email">Nomor hp</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                            <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                                <button class="btn btn-primary">Simpan perubahan</button>
                                <button class="btn bg-danger-subtle text-danger">Cancel</button>
                            </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-notifications" role="tabpanel" aria-labelledby="pills-notifications-tab" tabindex="0">
                <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="card border shadow-none">
                    <div class="card-body p-4">
                        <h4 class="card-title">Setingan notifikasi</h4>
                        <p class="card-subtitle mb-4">
                        Pilih menu apa saja yang ingin ditampilkan notifikasinya
                        </p>
                        <div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="d-flex align-items-center gap-3">
                            <div class="text-bg-light rounded-1 p-6 d-flex align-items-center justify-content-center">
                                <i class="ti ti-article text-dark d-block fs-7" width="22" height="22"></i>
                            </div>
                            <div>
                                <h5 class="fs-4 fw-semibold">Tugas</h5>
                                <p class="mb-0">Pekerjaan yag merupakan tanggung jawab anda</p>
                            </div>
                            </div>
                            <div class="form-check form-switch mb-0">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                            </div>
                        </div>
                        
                        
                        </div>
                    </div>
                    </div>
                </div>
                
                </div>
            </div>
            <div class="tab-pane fade" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab" tabindex="0">
                <div class="row">
                <div class="col-lg-8">
                    <div class="card border shadow-none">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center justify-content-between py-3">
                            <div>
                                <h5 class="fs-4 fw-semibold mb-0">Email recover</h5>
                                <p class="mb-0">Gunakan email jika lupa sandi</p>
                            </div>
                            <button class="btn bg-primary-subtle text-primary">Setup</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                    <div class="card-body p-4">
                        <div class="text-bg-light rounded-1 p-6 d-inline-flex align-items-center justify-content-center mb-3">
                        <i class="ti ti-device-laptop text-primary d-block fs-7" width="22" height="22"></i>
                        </div>
                        <h4 class="card-title mb-0">Perangkat</h4>
                        <p class="mb-3">Daftar perangkat yang terhubung dengan akun ini.</p>
                        <button class="btn btn-primary mb-4">Logout dari semua perangkat</button>
                        <div class="d-flex align-items-center justify-content-between py-3 border-bottom">
                        <div class="d-flex align-items-center gap-3">
                            <i class="ti ti-device-mobile text-dark d-block fs-7" width="26" height="26"></i>
                            <div>
                            <h5 class="fs-4 fw-semibold mb-0">Android</h5>
                            <p class="mb-0">Jakarta, 1 Jan 2025 10.00 WIB</p>
                            </div>
                        </div>
                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle" href="javascript:void(0)">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between py-3">
                        <div class="d-flex align-items-center gap-3">
                            <i class="ti ti-device-laptop text-dark d-block fs-7" width="26" height="26"></i>
                            <div>
                            <h5 class="fs-4 fw-semibold mb-0">Windows</h5>
                            <p class="mb-0">Jakarta, 1 Jan 2025 10.00 WIB</p>
                            </div>
                        </div>
                        <a class="text-dark fs-6 d-flex align-items-center justify-content-center bg-transparent p-2 fs-4 rounded-circle" href="javascript:void(0)">
                            <i class="ti ti-dots-vertical"></i>
                        </a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
';
	}
}
