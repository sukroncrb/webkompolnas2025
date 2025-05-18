<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/abiesoft/vendor/abiesoft/Http/../../../templates/admin/surat/edit.latte */
final class Template_8a5d24b797 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/abiesoft/vendor/abiesoft/Http/../../../templates/admin/surat/edit.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 7 */;
		$this->renderBlock('js', get_defined_vars()) /* line 281 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = '../main.latte';
		return get_defined_vars();
	}


	/** {block css} on line 2 */
	public function blockCss(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 3 */;
		echo '/assets/admin/libs/quill/dist/quill.snow.css">
<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 4 */;
		echo '/assets/admin/libs/dropzone/dist/min/dropzone.min.css">
<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 5 */;
		echo '/assets/admin/libs/select2/dist/css/select2.min.css">
';
	}


	/** {block content} on line 7 */
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
                        <h4 class="fw-semibold mb-8">Edit Pengaduan</h4>
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 18 */;
		echo '">Surat</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Edit</li>
                        </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5" style=\'min-height: 150px;\'>
                            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 27 */;
		echo '/assets/admin/images/custom-apps/icons/mail-icon.png" alt="modernize-img" class="img-fluid mb-n4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 ">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-7">
                            <h4 class="card-title">Informasi Pengadu</h4>
                            <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <i class="ti ti-menu fs-5 d-flex"></i>
                            </button>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="tb-noktp" placeholder="Nomor KTP" maxLength="16"/>
                                    <label for="tb-noktp">Nomor KTP</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="tb-titeldepan" placeholder="H., Dr. dll" />
                                    <label for="tb-titeldepan">Titel Depan</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="tb-email" placeholder="name@example.com" />
                                <label for="tb-email">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="tb-titelbelakang" placeholder="SH,MH dll" />
                                <label for="tb-titelbelakang">Titel Belakang</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                <select type="text" class="form-control" id="tb-jeniskelamin" placeholder="Jenis kelamin">
                                    <option value="">Pilih Jenis kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <label for="tb-jeniskelamin">Jenis Kelamin</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="tb-tempatlahir" placeholder="Tempat lahir" />
                                <label for="tb-tempatlahir">Tempat lahir</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                <input type="datetime" class="form-control" id="tb-tgllahir" placeholder="Tanggal lahir" />
                                <label for="tb-tgllahir">Tanggal lahir</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                <textarea class="form-control" style=\'height: 100px;\' id="tb-alamat" placeholder="Tanggal lahir"></textarea>
                                <label for="tb-alamat">Alamat</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="tb-nohp" placeholder="Nomor Hp" />
                                <label for="tb-nohp">Nomor Hp</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="tb-email" placeholder="Email" />
                                <label for="tb-email">Email</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="tb-pekerjaan" placeholder="Pekerjaan" />
                                <label for="tb-pekerjaan">Pekerjaan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="mb-7">
                            <h4 class="card-title">Informasi Lembaga/ Badan Hukum/ Organisasi</h4>
                            <p class="fs-2 mb-0">
                                Jika pengadu adalah perorangan, maka abaikan form ini.
                            </p>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="tb-namalembaga" placeholder="Nama lembaga" />
                                <label for="tb-namalembaga">Nama lembaga</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                <select type="text" class="form-control" id="tb-jenislembaga" placeholder="Jenis lembaga">
                                    <option value="">Pilih Jenis lembaga</option>
                                    <option value="lembaganegara">Lembaga negara</option>
                                    <option value="badanhukum">Badan hukum</option>
                                    <option value="organisasi">LSM</option>
                                </select>
                                <label for="tb-jenislembaga">Jenis lembaga</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="tb-notlplembaga" placeholder="Nomor telp. lembaga" />
                                <label for="tb-notlplembaga">Nomor telp. lembaga</label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="tb-namaclient" placeholder="Nama client" />
                                <label for="tb-namaclient">Nama client</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating mb-3">
                                <textarea class="form-control" style=\'height: 100px;\' id="tb-alamat" placeholder="Tanggal lahir"></textarea>
                                <label for="tb-alamat">Alamat lembaga</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="offcanvas-md offcanvas-end overflow-auto" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-7">
                                <h4 class="card-title">Informasi Surat</h4>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="tb-nosurat" placeholder="Nomor surat" />
                                    <label for="tb-nosurat">Nomor surat</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="tb-tglsurat" placeholder="Tanggal surat" />
                                    <label for="tb-tglsurat">Tanggal surat</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <select type="text" class="form-control" id="tb-jenissurat" placeholder="Jenis Surat">
                                            <option value="">Pilih Jenis Surat</option>
                                            <option value="Asli">Asli</option>
                                            <option value="Tembusan">Tembusan</option>
                                        </select>
                                        <label for="tb-jenissurat">Jenis Surat</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                    <textarea class="form-control" style=\'height: 75px;\' id="tb-perihal" placeholder="Perihal"></textarea>
                                    <label for="tb-perihal">Perihal</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title mb-7">Dokumen pengaduan</h4>
                        <form action="#" class="dropzone dz-clickable mb-2">
                            <div class="dz-default dz-message">
                            <button class="dz-button" type="button">Drag atau drop disini untuk upload dokumen</button>
                            </div>
                        </form>
                        <p class="fs-2 text-center mb-0">
                            Pastikan dokumen yang diupload pdf (*.pdf).
                        </p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-7">
                                <h4 class="card-title">Sumber penerimaan</h4>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select type="text" class="form-control" id="tb-sumber" placeholder="Jenis Surat">
                                            <option value="">Pilih sumber</option>
                                            <option value="Langsung">Datang langsung</option>
                                            <option value="POS">Via pos</option>
                                            <option value="Email">Email</option>
                                            <option value="Online">Online</option>
                                        </select>
                                        <label for="tb-sumber">Sumber</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <select type="text" class="form-control" id="tb-status" placeholder="Status dokumen">
                                            <option value="">Pilih status dokumen</option>
                                            <option value="L">Lengkap</option>
                                            <option value="BL">Belum lengkap</option>
                                        </select>
                                        <label for="tb-status">Status dokumen</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" style=\'height: 70px;\' id="tb-catatan" placeholder="Catatan"></textarea>
                                        <label for="tb-catatan">Catatan tambahan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="alert bg-light-subtle" role="alert">
                            <strong>Quote:</strong>
                            <div>
                                Quote random akan tampil disini.
                            </div>
                        </div>
                        <div class="button-group">
                            <button type="button" class="btn btn-primary">
                            Simpan Perubahan
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
';
	}


	/** {block js} on line 281 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 282 */;
		echo '/assets/admin/libs/quill/dist/quill.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 283 */;
		echo '/assets/admin/js/forms/quill-init.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 284 */;
		echo '/assets/admin/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 285 */;
		echo '/assets/admin/libs/select2/dist/js/select2.full.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 286 */;
		echo '/assets/admin/libs/select2/dist/js/select2.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 287 */;
		echo '/assets/admin/js/forms/select2.init.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 288 */;
		echo '/assets/admin/libs/jquery.repeater/jquery.repeater.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 289 */;
		echo '/assets/admin/libs/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 290 */;
		echo '/assets/admin/js/forms/repeater-init.js"></script>
';
	}
}
