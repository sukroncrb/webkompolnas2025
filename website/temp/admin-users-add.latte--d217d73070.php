<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/admin/users/add.latte */
final class Template_d217d73070 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/admin/users/add.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 8 */;
		echo "\n";
		$this->renderBlock('js', get_defined_vars()) /* line 111 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['g' => '66'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
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
<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 6 */;
		echo 'assets/admin/libs/sweetalert2/dist/sweetalert2.min.css">
';
	}


	/** {block content} on line 8 */
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
                        <h4 class="fw-semibold mb-8">User Baru</h4>
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 19 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 19 */;
		echo '">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 22 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 22 */;
		echo '/users">Users</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">Baru</li>
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
        <form id="formInput" name="formInput" method="post">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-7">
                                <h4 class="card-title">Informasi user</h4>
                                <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                    <i class="ti ti-menu fs-5 d-flex"></i>
                                </button>
                            </div>
                            
                            <div class="row">
                                <div id="msgformInput"></div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="nama" name="nama" data-label="Nama" placeholder="Nama" />
                                        <label for="nama">Nama</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="email" name="email" data-label="Email" placeholder="Email" />
                                    <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                    <select type="text" class="form-control" id="grupid" name="grupid" data-label="Grup" placeholder="Jenis kelamin">
                                        <option value="">Pilih Grup</option>
';
		foreach ($grup as $g) /* line 66 */ {
			echo '                                        <option value="';
			echo LR\Filters::escapeHtmlAttr($g->id) /* line 67 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($g->nama) /* line 67 */;
			echo '</option>
';

		}

		echo '                                    </select>
                                    <label for="grupid">Pilih grup</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="psw" name="psw" data-label="Password" placeholder="Password" />
                                        <label for="psw">Password</label>
                                    </div>
                                    <small>Kosongkan Password jika ingin menggunakan password default</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="alert bg-light-subtle" role="alert">
                                <strong>Catatan:</strong>
                                <div>
                                    Pastikan email yang digunakan adalah email yang bisa menerima email. Email ini akan berfungsi untuk recovery password dikemudian hari.
                                </div>
                                <div>Password defaultnya 1234.</div>
                            </div>
                            <div class="button-group">
                                <button type="submit" class="btn btn-primary">
                                Simpan
                                </button>
                                <button type="button" onClick=\'resetForm()\' class="btn btn-danger">
                                Reset form
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
';
	}


	/** {block js} on line 111 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 112 */;
		echo 'assets/admin/libs/sweetalert2/dist/sweetalert2.min.js"></script>
<script>
el(\'#formInput\').onsubmit = (e) => {
    e.preventDefault();
    const fid = "formInput";
    const field = [
        \'nama|setText\',
        \'email|setEmail\',
        \'grupid|setPilihan\'
    ]
    const form = el(\'form[id="\'+fid+\'"]\');
    const formData = new FormData(form);
    const message = el("#msg"+fid);

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
                message.innerHTML = "";
                el("#nama").value = "";
                el("#email").value = "";
                el("#grupid").value = "";
                el("#psw").value = "";
                Swal.fire(
                    "Sip!",
                    "User baru sudah dibuat",
                    "success"
                );
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

function resetForm() {
    el("#nama").value = "";
    el("#email").value = "";
    el("#grupid").value = "";
    el("#psw").value = "";
}
</script>
';
	}
}
