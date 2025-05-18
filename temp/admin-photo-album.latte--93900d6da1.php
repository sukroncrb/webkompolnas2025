<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/admin/photo/album.latte */
final class Template_93900d6da1 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/admin/photo/album.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 8 */;
		$this->renderBlock('js', get_defined_vars()) /* line 128 */;
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
                            <h4 class="fw-semibold mb-8">Album Photo</h4>
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
		echo '/photo">Album</a>
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
            
                <div class="row">
                    <div class="col-lg-8 ">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-7">
                                    <h4 class="card-title">Info Album</h4>
                                    <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                        <i class="ti ti-menu fs-5 d-flex"></i>
                                    </button>
                                </div>
                                
                                <div class="row">
                                    <div id="msgformInput"></div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                        <input class="form-control" id="judul" name="judul" data-label="Judul Album">
                                        <label for="keterangan">Judul</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                        <textarea class="form-control" style=\'height: 100px;\' id="keterangan" name="keterangan" data-label="Keterangan Album"></textarea>
                                        <label for="keterangan">Keterangan</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                        <select type="text" class="form-control" id="kategori" name="kategori" data-label="Kategori" placeholder="Kategori">
                                            <option value="">Pilih Kategori</option>
                                            <option value="Kunjungan Kerja">Kunjungan Kerja</option>
                                            <option value="Kegiatan Sekretariat">Kegiatan Kompolnas</option>
                                            <option value="Kegiatan Sekretariat">Kegiatan Sekretariat</option>
                                            <option value="Audiensi">Audiensi</option>
                                            <option value="Rapat">Rapat</option>
                                        </select>
                                        <label for="kategori">Kategori</label>
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
                                    <h4 class="card-title mb-7">Cover</h4>
                                    <div id=\'errorupload\'></div>
                                    <div style=\'position: relative; width: 100%; min-height: 180px; padding: 10px; border-radius: 5px; border: 2px dashed #bdbdbd; background: #eee;\'>
                                        <input type="file" id="fileInput" style=\'position: absolute; z-index: 2; cursor: pointer; top: 0px; left: 0px; right: 0px; bottom: 0px; opacity: 0;\'>
                                        <input type=\'hidden\' id=\'cover\' name=\'cover\' data-label="Cover">
                                        <img id="preview" style="width: 100%; display: none; position: relative; z-index: 1;">
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
                                        Keterangan diharapkan bisa menjelaskan isi album secara singkat
                                    </div>
                                </div>
                                <div class="button-group">
                                    <input type=\'hidden\' id=\'tipe\' name=\'tipe\' value=\'ALBUM\'>
                                    <button class="btn btn-primary">
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
        </div>
    </div>
</form>
';
	}


	/** {block js} on line 128 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 129 */;
		echo '/assets/admin/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 130 */;
		echo '/assets/admin/libs/select2/dist/js/select2.full.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 131 */;
		echo '/assets/admin/libs/select2/dist/js/select2.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 132 */;
		echo '/assets/admin/js/forms/select2.init.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 133 */;
		echo '/assets/admin/libs/jquery.repeater/jquery.repeater.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 134 */;
		echo '/assets/admin/libs/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 135 */;
		echo '/assets/admin/js/forms/repeater-init.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 136 */;
		echo 'assets/admin/libs/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 137 */;
		echo 'assets/admin/libs/quill/dist/quill.min.js"></script>
<script>

el(\'#formInput\').onsubmit = (e) => {
    e.preventDefault();

    const fid = "formInput";
    const field = [
        \'judul|setText\',
        \'keterangan|setText\',
        \'kategori|setText\',
        \'cover|setPilihan\',
    ];
    const form = el(\'form[id="\'+fid+\'"]\');
    const formData = new FormData(form);
    const message = el("#msg"+fid);
    const preview = el(\'#preview\');

    if(validasi({
        fid: fid,
        field: field
    })){
        fetch(baseurl + \'api/photo\', {
            method: \'POST\',
            headers: {
                \'x-api-key\': apikey
            },
            body: formData
        }).then(response => response.json()).then(result => {
            if(result.code == 200){
                window.location.href = baseurl + prefix + "/photo/album/" +result.data;
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
    el("#keterangan").value = "";
    el("#kategori").value = "";
    el("#cover").value = "";
    preview.src = "";
    preview.style.display = \'none\';
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

    xhr.open(\'POST\', \'/api/photo\');

    xhr.setRequestHeader(\'x-api-key\', apikey);

    const formData = new FormData();
    formData.append(\'__csrf\', el("#__csrf").value);
    formData.append(\'tipe\', \'UPLOAD\');
    formData.append(\'folder\', \'galeri\');
    formData.append(\'file\', file);
    xhr.send(formData);
}
</script>
';
	}
}
