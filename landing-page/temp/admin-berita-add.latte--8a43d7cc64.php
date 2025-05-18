<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/admin/berita/add.latte */
final class Template_8a43d7cc64 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/admin/berita/add.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 8 */;
		$this->renderBlock('js', get_defined_vars()) /* line 173 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['p' => '124'], $this->params) as $ʟ_v => $ʟ_l) {
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
                            <h4 class="fw-semibold mb-8">Berita Baru</h4>
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
		echo '/berita">Berita</a>
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
                                    <h4 class="card-title">Berita</h4>
                                    <button class="navbar-toggler border-0 shadow-none d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                        <i class="ti ti-menu fs-5 d-flex"></i>
                                    </button>
                                </div>
                                
                                <div class="row">
                                    <div id="msgformInput"></div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="judul" name="judul" onKeyUp="setSlug(this.value)" data-label="Judul" placeholder="Judul berita" />
                                        <label for="judul">Judul</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="viewslug" name="viewslug" placeholder="Slug berita" disabled/>
                                        <input type=\'hidden\' id=\'slug\' name=\'slug\'>
                                        <label for="slug">Slug</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                        <textarea class="form-control" style=\'height: 100px;\' id="potongan" name="potongan" data-label="Potongan berita" placeholder="Potongan berita"></textarea>
                                        <label for="potongan">Potongan berita</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div id="editorisi"></div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="tag" name="tag" data-label="Tag" placeholder="Tag berita" />
                                        <label for="tag">Tag</label>
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
                                    <h4 class="card-title mb-7">Gambar</h4>
                                    <div id=\'errorupload\'></div>
                                    <div style=\'position: relative; width: 100%; min-height: 150px; padding: 10px; border-radius: 5px; border: 2px dashed #bdbdbd; background: #eee;\'>
                                        <input type="file" id="fileInput" style=\'position: absolute; z-index: 2; cursor: pointer; top: 0px; left: 0px; right: 0px; bottom: 0px; opacity: 0;\'>
                                        <input type=\'hidden\' id=\'gambar\' name=\'gambar\'>
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
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-7">
                                        <h4 class="card-title">Opsi</h4>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3">
                                            <select type="text" class="form-control" id="kategori" name="kategori" data-label="Kategori" placeholder="Kategori">
                                                <option value="">Pilih Kategori</option>
                                                <option value="Kompolnas">Kompolnas</option>
                                                <option value="Polri">Polri</option>
                                            </select>
                                            <label for="kategori">Kategori</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3">
                                            <select type="text" class="form-control" id="penulis" name="penulis" data-label="Penulis" placeholder="Penulis">
                                                <option value="">Pilih Penulis</option>
';
		foreach ($penulis as $p) /* line 124 */ {
			echo '                                                    <option value="';
			echo LR\Filters::escapeHtmlAttr($p->id) /* line 125 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($p->nama) /* line 125 */;
			echo '</option>
';

		}

		echo '                                            </select>
                                            <label for="penulis">Penulis</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-floating mb-3">
                                                <select type="text" class="form-control" id="publikasi" name="publikasi" data-label="Publikasi" placeholder="Publikasi">
                                                    <option value="">Pilih publikasi</option>
                                                    <option value="Terbit">Terbit</option>
                                                    <option value="Draft">Draft</option>
                                                </select>
                                                <label for="publikasi">Publikasi</label>
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
                                    <strong>Catatan:</strong>
                                    <div>
                                        Buatlah berita dengan bijak dan dapat dipertanggung jawabkan.
                                    </div>
                                </div>
                                <div class="button-group">
                                    <input type=\'hidden\' id=\'isi\' name=\'isi\'>
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


	/** {block js} on line 173 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 174 */;
		echo '/assets/admin/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 175 */;
		echo '/assets/admin/libs/select2/dist/js/select2.full.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 176 */;
		echo '/assets/admin/libs/select2/dist/js/select2.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 177 */;
		echo '/assets/admin/js/forms/select2.init.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 178 */;
		echo '/assets/admin/libs/jquery.repeater/jquery.repeater.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 179 */;
		echo '/assets/admin/libs/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 180 */;
		echo '/assets/admin/js/forms/repeater-init.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 181 */;
		echo 'assets/admin/libs/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 182 */;
		echo 'assets/admin/libs/quill/dist/quill.min.js"></script>
<script>

const editorisi = new Quill("#editorisi", {
  theme: "snow",
});

editorisi.on(\'text-change\', () => {
  el("#isi").value = editorisi.root.innerHTML;
});

function setSlug(slug){
    let viewslug = slug.replaceAll(" ","-")
        .replaceAll("\'","")
        .replaceAll(\'"\',"")
        .replaceAll("?","")
        .replaceAll("*","")
        .replaceAll("!","")
        .replaceAll(".","")
        .replaceAll(",","")
        .replaceAll(";","")
        .replaceAll("\'","")
        .replaceAll("+","")
        .replaceAll("^","")
        .replaceAll("$","")
        .replaceAll("%","")
        .replaceAll("~","");
    el("#slug").value = viewslug;
    el("#viewslug").value = viewslug;
}

el(\'#formInput\').onsubmit = (e) => {
    e.preventDefault();

    const fid = "formInput";
    const field = [
        \'judul|setText\',
        \'potongan|setText\',
        \'isi|setText\',
        \'tag|setText\',
        \'kategori|setPilihan\',
        \'penulis|setPilihan\',
        \'publikasi|setPilihan\'
    ];
    const form = el(\'form[id="\'+fid+\'"]\');
    const formData = new FormData(form);
    const message = el("#msg"+fid);
    const preview = el(\'#preview\');

    if(validasi({
        fid: fid,
        field: field
    })){
        fetch(baseurl + \'api/berita\', {
            method: \'POST\',
            headers: {
                \'x-api-key\': apikey
            },
            body: formData
        }).then(response => response.json()).then(result => {
            console.log(result);
            if(result.code == 200){
                message.innerHTML = "";
                el("#judul").value = "";
                el("#slug").value = "";
                el("#viewslug").value = "";
                el("#potongan").value = "";
                el("#isi").value = "";
                editorisi.root.innerHTML = "";
                el("#tag").value = "";
                el("#kategori").value = "";
                el("#penulis").value = "";
                el("#publikasi").value = "";
                preview.src = "";
                preview.style.display = \'none\';
                Swal.fire(
                    "Sip!",
                    "Berita telah dibuat",
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
    el("#judul").value = "";
    el("#slug").value = "";
    el("#viewslug").value = "";
    el("#potongan").value = "";
    el("#isi").value = "";
    el("#tag").value = "";
    el("#gambar").value = "";
    el("#kategori").value = "";
    el("#penulis").value = "";
    el("#publikasi").value = "";
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
            el("#gambar").value = namafile;
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

    xhr.open(\'POST\', \'/api/berita\');

    xhr.setRequestHeader(\'x-api-key\', apikey);

    const formData = new FormData();
    formData.append(\'__csrf\', el("#__csrf").value);
    formData.append(\'tipe\', \'UPLOAD\');
    formData.append(\'folder\', \'berita\');
    formData.append(\'file\', file);
    xhr.send(formData);
}
</script>
';
	}
}
