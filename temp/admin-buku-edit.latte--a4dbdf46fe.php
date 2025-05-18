<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/admin/buku/edit.latte */
final class Template_a4dbdf46fe extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/admin/buku/edit.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 8 */;
		$this->renderBlock('js', get_defined_vars()) /* line 156 */;
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
		echo '/assets/admin/libs/dropzone/dist/min/dropzone.min.css">
<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 4 */;
		echo '/assets/admin/libs/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 5 */;
		echo 'assets/admin/libs/sweetalert2/dist/sweetalert2.min.css">
<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 6 */;
		echo 'assets/admin/libs/quill/dist/quill.snow.css">
';
	}


	/** {block content} on line 8 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<form id="formInput" name="formInput" method="post">
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <h4 class="fw-semibold mb-8">Edit Baru</h4>
                            <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a class="text-muted text-decoration-none" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 20 */;
		echo '">Home</a>
								</li>
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 23 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 23 */;
		echo '/buku">Buku</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">Edit</li>
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
            
                <div class="row">
                    <div class="col-lg-8 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-7">
                                    <h4 class="card-title">Buku</h4>
                                    <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                        <i class="ti ti-menu fs-5 d-flex"></i>
                                    </button>
                                </div>
                                
                                <div class="row">
                                    <div id="msgformInput"></div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="judul" name="judul" data-label="Judul" placeholder="Judul buku" value="';
		echo LR\Filters::escapeHtmlAttr($judul) /* line 53 */;
		echo '" />
                                        <label for="judul">Judul</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                        <textarea class="form-control" style=\'height: 80px;\' id="keterangan" name="keterangan" data-label="Keterangan buku" placeholder="Potongan buku">';
		echo LR\Filters::escapeHtmlText($keterangan) /* line 59 */;
		echo '</textarea>
                                        <label for="keterangan">Keterangan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="penulis" name="penulis" data-label="Penulis" placeholder="Penulis buku"  value="';
		echo LR\Filters::escapeHtmlAttr($penulis) /* line 65 */;
		echo '"/>
                                        <label for="penulis">Penulis</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="isbn" name="isbn" data-label="Nomor ISBN" placeholder="Nomor ISBN"  value="';
		echo LR\Filters::escapeHtmlAttr($isbn) /* line 71 */;
		echo '"/>
                                        <label for="isbn">Nomor ISBN</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                        <input type="date" class="form-control" id="terbit" name="terbit" data-label="Tanggal terbit" placeholder="Tanggal terbit"  value="';
		echo LR\Filters::escapeHtmlAttr($terbit) /* line 77 */;
		echo '"/>
                                        <label for="terbit">Tanggal terbit</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="penerbit" name="penerbit" data-label="Penerbit" placeholder="Penerbit"  value="';
		echo LR\Filters::escapeHtmlAttr($penerbit) /* line 83 */;
		echo '"/>
                                        <label for="tanggpenerbital">Penerbit</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                        <select type="text" class="form-control" id="kategori" name="kategori" data-label="Kategori" placeholder="Kategori">
                                            <option value="';
		echo LR\Filters::escapeHtmlAttr($kategori) /* line 90 */;
		echo '">';
		echo LR\Filters::escapeHtmlText($kategori) /* line 90 */;
		echo '</option>
                                            <option value="Laporan Tahunan">Laporan Tahunan</option>
                                            <option value="Laporan SKM">Laporan SKM</option>
                                            <option value="Laporan Kunjungan Kerja">Laporan Kunjungan Kerja</option>
                                            <option value="Karya Tulis">Karya Tulis</option>
                                            <option value="Arah Bijak">Arah Bijak</option>
                                        </select>
                                        <label for="kategori">Kategori</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="link" name="link" data-label="Judul" placeholder="Link file" value="';
		echo LR\Filters::escapeHtmlAttr($link) /* line 102 */;
		echo '" />
                                        <label for="link">Link file</label>
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
                                    <h4 class="card-title mb-7">Cover Buku</h4>
                                    <div id=\'errorupload\'></div>
                                    <div style=\'position: relative; width: 100%; min-height: 420px; padding: 10px; border-radius: 5px; border: 2px dashed #bdbdbd; background: #eee;\'>
                                        <input type="file" id="fileInput" style=\'position: absolute; z-index: 2; cursor: pointer; top: 0px; left: 0px; right: 0px; bottom: 0px; opacity: 0;\'>
                                        <input type=\'hidden\' id=\'cover\' name=\'cover\' data-label="Cover" value="';
		echo LR\Filters::escapeHtmlAttr($cover) /* line 118 */;
		echo '">
                                        <img id="preview" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 119 */;
		echo LR\Filters::escapeHtmlAttr($cover) /* line 119 */;
		echo '" style="width: 100%; display: block; position: relative; z-index: 1;">
                                        <div style=\'display: flex; justify-content: center; align-items: center; position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: 0;\'>
                                            <div style=\'color: #bdbdbd; font-weight: bold;\'>
                                                Klik untuk upload file
                                            </div>
                                        </div>
                                        <progress id="progressBar" value="0" max="100" style="width: 100%; display: none;"></progress>
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
                                        Cover buku berbentuk potrait
                                    </div>
                                </div>
                                <div class="button-group">
                                    <input type=\'hidden\' id="id" name="id" value="';
		echo LR\Filters::escapeHtmlAttr($id) /* line 142 */;
		echo '">
                                    <input type=\'hidden\' id="tipe" name="tipe" value="PATCH">
                                    <button class="btn btn-primary">
                                    Simpan Perubahan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</form>
';
	}


	/** {block js} on line 156 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 157 */;
		echo '/assets/admin/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 158 */;
		echo '/assets/admin/libs/select2/dist/js/select2.full.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 159 */;
		echo '/assets/admin/libs/select2/dist/js/select2.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 160 */;
		echo '/assets/admin/js/forms/select2.init.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 161 */;
		echo '/assets/admin/libs/jquery.repeater/jquery.repeater.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 162 */;
		echo '/assets/admin/libs/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 163 */;
		echo '/assets/admin/js/forms/repeater-init.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 164 */;
		echo 'assets/admin/libs/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 165 */;
		echo 'assets/admin/libs/quill/dist/quill.min.js"></script>
<script>

el(\'#formInput\').onsubmit = (e) => {
    e.preventDefault();

    const fid = "formInput";
    const field = [
        \'judul|setText\',
        \'keterangan|setText\',
        \'penulis|setText\',
        \'isbn|setText\',
        \'terbit|setText\',
        \'penerbit|setText\',
        \'kategori|setText\',
        \'cover|setPilihan\',
        \'link|setText\'
    ];
    const form = el(\'form[id="\'+fid+\'"]\');
    const formData = new FormData(form);
    const message = el("#msg"+fid);
    const preview = el(\'#preview\');

    if(validasi({
        fid: fid,
        field: field
    })){
        fetch(baseurl + \'api/buku\', {
            method: \'POST\',
            headers: {
                \'x-api-key\': apikey
            },
            body: formData
        }).then(response => response.json()).then(result => {
            //console.log(result);
            if(result.code == 200){
                message.innerHTML = "";
                Swal.fire(
                    "Sip!",
                    "Buku telah diperbarui",
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

document.getElementById(\'fileInput\').addEventListener(\'change\', function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = el(\'#preview\');
            preview.src = e.target.result;
            preview.style.display = \'block\';
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
        if(result.code == 200){
            let namafile = result.data;
            el("#cover").value = namafile;
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

    xhr.open(\'POST\', \'/api/buku\');

    xhr.setRequestHeader(\'x-api-key\', apikey);

    const formData = new FormData();
    formData.append(\'__csrf\', el("#__csrf").value);
    formData.append(\'tipe\', \'UPLOAD\');
    formData.append(\'folder\', \'buku\');
    formData.append(\'file\', file);
    xhr.send(formData);
}
</script>
';
	}
}
