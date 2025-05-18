<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/admin/users/info.latte */
final class Template_edd1157ffc extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/admin/users/info.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 5 */;
		$this->renderBlock('js', get_defined_vars()) /* line 233 */;
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
		echo 'assets/admin/libs/sweetalert2/dist/sweetalert2.min.css">
';
	}


	/** {block content} on line 5 */
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
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 16 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 16 */;
		echo '/profile/detail/?uid=';
		echo LR\Filters::escapeHtmlAttr($sesi['id']) /* line 16 */;
		echo '&p=info">Akun</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Seting</li>
                        </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
							<div style=\'width: 168px; height: 165px;\'></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <ul class="nav nav-pills user-profile-tab mb-4" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-account-tab" data-bs-toggle="pill" data-bs-target="#pills-account" type="button" role="tab" aria-controls="pills-account" aria-selected="true">
                        <i class="ti ti-user-circle me-2 fs-6"></i>
                        <span class="d-none d-md-block">Akun</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-security-tab" data-bs-toggle="pill" data-bs-target="#pills-security" type="button" role="tab" aria-controls="pills-security" aria-selected="false">
                        <i class="ti ti-lock me-2 fs-6"></i>
                        <span class="d-none d-md-block">Keamanan</span>
                    </button>
                </li>
            </ul>
            <div class="card-body mb-4">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-stretch">
                                <div class="card w-100 border position-relative overflow-hidden">
                                <div class="card-body p-4">
                                    <div id=\'errorupload\'></div>
                                    <h4 class="card-title">Ubah Profile</h4>
                                    <p class="card-subtitle mb-4">Ubah foto anda di sini</p>
                                    <div class="text-center">
                                        <div style=\'width: 120px; height: 120px; overflow:hidden; border-radius: 50%; margin: 0 auto;\'><img id="preview" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($sesi['photo'])) /* line 62 */;
		echo '" alt="modernize-img" style=\'width: 120px; height: 120px; object-fit: cover;\'></div>
                                        <div class="d-flex align-items-center justify-content-center my-4 gap-6 relative">
                                            <input type="file" id="fileInput" style=\'position: absolute; z-index: 2; cursor: pointer; top: 0px; left: 0px; right: 0px; bottom: 0px; opacity: 0;\'>
                                            <input type=\'hidden\' id=\'photo\' name=\'photo\' data-label="Photo">
                                            <button class="btn btn-primary">Ganti</button>
                                        </div>
                                        <progress id="progressBar" value="0" max="100" style="width: 100%; display: none;"></progress>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-stretch">
                                <div class="card w-100 border position-relative overflow-hidden">
                                <div class="card-body p-4">
                                    <h4 class="card-title">Password</h4>
                                    <p class="card-subtitle mb-4">Abaikan form ini jika password tidak ingin diubah</p>
                                    <form method="post" id="formUpdatePassword" name="formUpdatePassword">
                                        <div id="msgformUpdatePassword"></div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div class="form-floating mb-3">
                                                    <input type="password" class="form-control" data-label="Password baru" id="pswbaru" name="pswbaru" placeholder="Password baru"/>
                                                        <label for="pswbaru">Password baru</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <div class="form-floating mb-3">
                                                    <input type="password" class="form-control" data-label="Konfirmasi Password" id="konfirmasipsw" name="konfirmasipsw" placeholder="Konfirmasi password"/>
                                                        <label for="konfirmasipsw">Konfirmasi password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <div class="form-floating mb-3">
                                                    <input type="password" class="form-control" data-label="Password lama" id="psw" name="psw" placeholder="Password"/>
                                                        <label for="psw">Password saat ini</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                                                    <input type=\'hidden\' id=\'tipe\' name=\'tipe\' value=\'PASS\'>
                                                    <button class="btn btn-primary">Simpan perubahan</button>
                                                </div>
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
                                        <p class="card-subtitle mb-4">Silahkan klik edit untuk mengubah informasi detail akun anda.</p>
                                        <form method="post" id="formUpdate" name="formUpdate">
                                            <div id="msgformUpdate"></div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="mb-3">
                                                        <div class="form-floating mb-3">
                                                        <input type="text" data-label="Nama" class="form-control" id="nama" name="nama" placeholder="Nama" value="';
		echo LR\Filters::escapeHtmlAttr($sesi['nama']) /* line 127 */;
		echo '" disabled/>
                                                            <label for="nama">Nama</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <div class="form-floating mb-3">
                                                        <input type="t" data-label="Email" class="form-control" id="email" name="email" placeholder="name@example.com" value="';
		echo LR\Filters::escapeHtmlAttr($sesi['email']) /* line 135 */;
		echo '" disabled/>
                                                        <label for="email">Email</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="mb-3">
                                                        <div class="form-floating mb-3">
                                                        <input type="text" data-label="Nomor Hp" class="form-control" id="nohp" name="nohp" placeholder="nohp" value="';
		echo LR\Filters::escapeHtmlAttr($sesi['nohp']) /* line 143 */;
		echo '" disabled/>
                                                        <label for="nohp">Nomor hp</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                                                        <input type=\'hidden\' id=\'tipe\' name=\'tipe\' value=\'INFO\'>
                                                        <button id="btnEditSwitch" type="button" onclick=\'setEditEnable(this.dataset.id)\' data-id=\'formUpdate\' class="btn btn-primary">Edit</button>
                                                        <button id=\'btnSubmitEdit\' class="btn btn-primary hide">Simpan perubahan</button>
                                                        <button id=\'btnCancelEdit\' type="button" onclick="setEditDisabled(this.dataset.id)" data-id=\'formUpdate\' class="btn bg-danger-subtle text-danger hide">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
                                        <h5 class="fs-4 fw-semibold mb-2">';
		echo LR\Filters::escapeHtmlText($sesi['email']) /* line 203 */;
		echo '</h5>
                                        <p class="mb-0">Verifikasi email ini agar bisa digunakan untuk reset password.</p>
                                    </div>
                                    <button class="btn bg-primary-subtle text-primary">Kirim Verifikasi</button>
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
                                
                                <div id=\'daftarperangkat\'></div>
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


	/** {block js} on line 233 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 234 */;
		echo 'assets/admin/libs/sweetalert2/dist/sweetalert2.min.js"></script>
<script>
function setEditEnable(x) {
    const message = el("#msg"+x);
    document.forms[x][\'nama\'].removeAttribute(\'disabled\');
    document.forms[x][\'email\'].removeAttribute(\'disabled\');
    document.forms[x][\'nohp\'].removeAttribute(\'disabled\');
    el("#btnSubmitEdit").classList.remove("hide");
    el("#btnCancelEdit").classList.remove("hide");
    el("#btnEditSwitch").classList.add("hide");
    message.innerHTML = ``;
    return false;
}

function setEditDisabled(x) {
    const message = el("#msg"+x);
    document.forms[x][\'nama\'].setAttribute(\'disabled\',true);
    document.forms[x][\'email\'].setAttribute(\'disabled\',true);
    document.forms[x][\'nohp\'].setAttribute(\'disabled\', true);
    el("#btnSubmitEdit").classList.add("hide");
    el("#btnCancelEdit").classList.add("hide");
    el("#btnEditSwitch").classList.remove("hide");
    message.innerHTML = ``;
    return false;
}

function updateUser(x) {
    const fid = x.fid;
    const field = x.field;
    el(\'#\'+fid).onsubmit = (e) => {
        e.preventDefault();
        const form = el(\'form[id="\'+fid+\'"]\');
        const formData = new FormData(form);
        const message = el("#msg"+fid);
        message.innerHTML = ``;
        if(validasi({
            fid: fid,
            field: field
        })){
            fetch(baseurl + \'api/users\', {
                method: \'POST\',
                headers: {
                    \'x-api-key\': apikey
                },
                body: formData
            }).then(response => response.json()).then(result => {
                if(result.code == 200){
                    if(result.data.info == "redirect"){
                        window.location.href = result.data.url;
                    }else{
                        if(result.data.nama){
                            el("#namauser").innerText = result.data.nama;
                        }
                        Swal.fire(
                            "Sip!",
                            result.data.info,
                            "success"
                        );
                    }
                }else{
                    message.innerHTML = `
                        <div class="alert alert-danger text-danger" role="alert">
                            `+result.info+`
                        </div>
                    `;
                }
            }).catch(error => {
                console.log(error);
            });
        }

    }
}

updateUser({
    fid: \'formUpdate\',
    field: [
        \'nama|setText\',
        \'email|setEmail\',
        \'nohp|setNoHp\'
    ]
});

updateUser({
    fid: \'formUpdatePassword\',
    field: [
        \'pswbaru|setText\',
        \'konfirmasipsw|setText\',
        \'psw|setText\'
    ]
});

getDataToInner({
    endpoint: \'sesi\',
    elementid: \'daftarperangkat\'
});


document.getElementById(\'fileInput\').addEventListener(\'change\', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            el(\'#preview\').src = e.target.result;
            el(\'#preview2\').src = e.target.result;
        };
        reader.readAsDataURL(file);

        uploadFile(file);
    }
});

function uploadFile(file){
    const xhr = new XMLHttpRequest();
    const progressBar = el(\'#progressBar\');
    progressBar.style.display = \'block\';

    el("#errorupload").innerHTML = ``;

    xhr.upload.onprogress = function(event) {
        if (event.lengthComputable) {
            const percent = Math.round((event.loaded / event.total) * 100);
            progressBar.value = percent;
        }
    };

    xhr.onload = function() {
        
        const result = JSON.parse(xhr.responseText);

        // console.log(result);

        if(result.code == 200){
            let namafile = result.data;
            el("#photo").value = namafile;
            progressBar.style.display = \'none\';
        }else{
            el("#errorupload").innerHTML = `
                <div class="alert alert-danger text-danger" role="alert">
                    `+result.info+`
                </div>
            `;
            progressBar.style.display = \'none\';
        }
    };

    xhr.open(\'POST\', \'/api/users\');

    xhr.setRequestHeader(\'x-api-key\', apikey);

    const formData = new FormData();
    formData.append(\'__csrf\', el("#__csrf").value);
    formData.append(\'tipe\', \'UPLOAD\');
    formData.append(\'folder\', \'pp\');
    formData.append(\'file\', file);
    xhr.send(formData);
}

</script>
';
	}
}
