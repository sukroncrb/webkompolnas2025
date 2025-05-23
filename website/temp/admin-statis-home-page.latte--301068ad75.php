<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/admin/statis/home-page.latte */
final class Template_301068ad75 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/admin/statis/home-page.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 27 */;
		echo "\n";
		$this->renderBlock('js', get_defined_vars()) /* line 194 */;
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
<style>
.list-media svg {
    width: 30px; 
    margin-right: 10px;
}

.float-status {
    position: absolute; 
    z-index: 9; 
    background: #fff; 
    padding: 5px 15px; 
    border-radius: 20px; 
    border: 1px solid #eee; 
    text-align: center; 
    bottom: -20px; 
    left: 50%; 
    transform: translate(-50%, 0);
}
</style>
';
	}


	/** {block content} on line 27 */
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
						<h4 class="fw-semibold mb-8">';
		echo LR\Filters::escapeHtmlText($title) /* line 34 */;
		echo '</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a class="text-muted text-decoration-none" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 38 */;
		echo '">Home</a>
								</li>
								<li class="breadcrumb-item" aria-current="page">Statis</li>
								<li class="breadcrumb-item" aria-current="page">';
		echo LR\Filters::escapeHtmlText($title) /* line 41 */;
		echo '</li>
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
            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3" style=\'display: block; min-height: 353px;\'>
                            <img id=\'coverphotobanner\' style="width: 100%;" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 58 */;
		echo LR\Filters::escapeHtmlAttr($bannerphoto) /* line 58 */;
		echo '">
                        </div>
                        <h6 class="font-semibold text-center mb-3">Banner Photo Kompolnas</h6>
                        <form method="post" id="formBanner" name="formBanner" data-id="';
		echo LR\Filters::escapeHtmlAttr($bannerphotoid) /* line 61 */;
		echo '">
                            <div id="msgformBanner"></div>
                            <div class="form-group">
                                <input type="file" data-label="Media" id="media" name="media" class="form-control">
                            </div>
                            <div class="form-group mt-3">
                                <input type=\'hidden\' id=\'folder\' name=\'folder\' value=\'homepage\'>
                                <input type=\'hidden\' id=\'jenis\' name=\'jenis\' value=\'PHOTO\'>
                                <input type=\'hidden\' id=\'tipe\' name=\'tipe\' value=\'HOME_PAGE_BANNER_PHOTO\'>
                                <button class="btn btn-primary">
                                Simpan Perubahan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3" style=\'min-height: 272px;\'>
                            <div class="text-center"><img style="width: 20px;" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 82 */;
		echo 'assets/web/images/quotes.png"></div>
                            <h2 class="font-semibold text-center mt-3 mb-3" id="viewQuotes">';
		echo LR\Filters::escapeHtmlText($quotes) /* line 83 */;
		echo '</h2>
                            <div class="text-center"><img style="width: 20px; transform: rotate(180deg);" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 84 */;
		echo 'assets/web/images/quotes.png"></div>
                        </div>
                        <h6 class="font-semibold text-center mb-3">Quotes</h6>
                        <form method="post" id="formQuotes" name="formQuotes" data-id="';
		echo LR\Filters::escapeHtmlAttr($quotesid) /* line 87 */;
		echo '">
                            <div id="msgformQuotes"></div>
                            <div class="form-group">
                                <textarea id="keterangan" name="keterangan" data-label="Quotes" class="form-control" style=\'height: 120px;\'>';
		echo LR\Filters::escapeHtmlText($quotes) /* line 90 */;
		echo '</textarea>
                            </div>
                            <div class="form-group mt-3">
                                <input type=\'hidden\' id=\'tipe\' name=\'tipe\' value=\'HOME_PAGE_QUOTES\'>
                                <button class="btn btn-primary">
                                Simpan Perubahan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div style=\'position: relative; margin-bottom: 30px;\'>
                            <div class="mb-2" id="viewshortcut" style=\'height: 220px; overflow: auto; overflow-x: hidden;\'></div>
                            <div id=\'floatstatus\'></div>
                        </div>
                        <h6 class="font-semibold text-center mb-3">Shortcut Fiture</h6>
                        <form method="post" id="formShortcut" name="formShortcut">
                            <div id="msgformShortcut"></div>
                            <div class="col-12 form-group mb-3">
                                <textarea data-label="Icon" id="media" name="media" placeholder="Pastekan code svg disini" class="form-control"></textarea>
                                <small>untuk mendapatkan icon berupa code svg bisa didapat di <a href=\'https://heroicons.com\' target="_blank">heroicons.com</a></small>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group mb-3">
                                    <input class="form-control" data-label="Label" placeholder="Label" id="label" name="label">
                                </div>
                                <div class="col-6 form-group mb-3">
                                    <input class="form-control" data-label="Link" placeholder="Link" id="link" name="link">
                                </div>
                            </div>
                            <input type=\'hidden\' id=\'tipe\' name=\'tipe\' value=\'HOME_PAGE_SHORTCUT\'>
                            <button class="btn btn-primary">
                            Simpan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-lg-5">
                                <h6 class="font-semibold text-center mb-3">Profile Komisioner</h6>
                                <form>
                                    <div class="row">
                                        <div class="col-12 col-lg-4 form-group mb-3">
                                            <input type="file" class="form-control" placeholder="Icon">
                                        </div>
                                        <div class="col-12 col-lg-8 form-group mb-3" placeholder="Nama">
                                            <input class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <textarea class="form-control" placeholder="Keterangan"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 col-lg-7">
                                Kanana
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <img id=\'coverphotobanner\' style="width: 100%;" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 163 */;
		echo LR\Filters::escapeHtmlAttr($banneryoutube) /* line 163 */;
		echo '">
                        </div>
                        <h6 class="font-semibold text-center mb-3">Banner Youtube Kompolnas</h6>
                        <form method="post" id="formBannerYoutube" name="formBannerYoutube" data-id="';
		echo LR\Filters::escapeHtmlAttr($banneryoutubeid) /* line 166 */;
		echo '">
                            <div id="msgformBannerYoutube"></div>
                            <div class="form-group">
                                <input type="file" data-label="Media" id="media" name="media" class="form-control">
                                <input id="link" name="link" class="form-control mt-3" placeholder="Link channel youtube" value="';
		echo LR\Filters::escapeHtmlAttr($linkbanneryoutube) /* line 170 */;
		echo '">
                            </div>
                            <div class="form-group mt-3">
                                <input type=\'hidden\' id=\'folder\' name=\'folder\' value=\'homepage\'>
                                <input type=\'hidden\' id=\'jenis\' name=\'jenis\' value=\'PHOTO\'>
                                <input type=\'hidden\' id=\'tipe\' name=\'tipe\' value=\'HOME_PAGE_BANNER_YOUTUBE\'>
                                <button class="btn btn-primary">
                                Simpan Perubahan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-12">
                <div class="card">
                    <div class="card-body">Link</div>
                </div>
            </div>
        </div>
	</div>
</div>
';
	}


	/** {block js} on line 194 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 195 */;
		echo '/assets/admin/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 196 */;
		echo '/assets/admin/libs/select2/dist/js/select2.full.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 197 */;
		echo '/assets/admin/libs/select2/dist/js/select2.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 198 */;
		echo '/assets/admin/js/forms/select2.init.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 199 */;
		echo '/assets/admin/libs/jquery.repeater/jquery.repeater.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 200 */;
		echo '/assets/admin/libs/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 201 */;
		echo '/assets/admin/js/forms/repeater-init.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 202 */;
		echo 'assets/admin/libs/sweetalert2/dist/sweetalert2.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 203 */;
		echo 'assets/admin/libs/quill/dist/quill.min.js"></script>
<script>

// Banner Photo
let frB = el("#formBanner");
frB.addEventListener("submit", (e)=> {
    e.preventDefault();
    const fid = frB.id;
    
    const form = el(\'form[id="\'+fid+\'"]\');
    const formData = new FormData(form);

    if(frB.dataset.id){
        formData.append(\'id\', frB.dataset.id);
    }

    let banner = document.forms[fid][\'media\'];

    if(setText(banner.value)){
        el("#msg"+fid).innerHTML = `
            <div class="alert alert-danger text-danger" role="alert">
                <strong>Banner</strong> `+setText(banner.value)+`.
            </div>
        `;
        banner.focus();
    }else{
        el("#msg"+fid).innerHTML = "";
        fetch(baseurl + \'api/statis\', {
            method: \'POST\',
            headers: {
                \'x-api-key\': apikey
            },
            body: formData
        }).then(response => response.json()).then(result => {
            if(result.code == 200){
                el("#coverphotobanner").src = baseurl + result.data;
                Swal.fire(
                    "Sip!",
                    "Banner photo telah diperbarui",
                    "success"
                );
                return false;
            }else{
                Swal.fire({
                    title: "Ups!",
                    html: result.info,
                    icon: "error"
                });
            }
        }).catch(error => {
            console.log(error);
        });
    }
});



// Quotes
let frQ = el("#formQuotes");
frQ.addEventListener("submit", (e)=> {
    e.preventDefault();
    const fid = frQ.id;
    
    const form = el(\'form[id="\'+fid+\'"]\');
    const formData = new FormData(form);

    if(frQ.dataset.id){
        formData.append(\'id\', frQ.dataset.id);
    }

    let keterangan = document.forms[fid][\'keterangan\'];

    if(setText(keterangan.value)){
        el("#msg"+fid).innerHTML = `
            <div class="alert alert-danger text-danger" role="alert">
                <strong>Quotes</strong> `+setText(keterangan.value)+`.
            </div>
        `;
        keterangan.focus();
    }else{
        el("#msg"+fid).innerHTML = "";
        fetch(baseurl + \'api/statis\', {
            method: \'POST\',
            headers: {
                \'x-api-key\': apikey
            },
            body: formData
        }).then(response => response.json()).then(result => {
            if(result.code == 200){
                el("#viewQuotes").innerHTML = result.data;
                Swal.fire(
                    "Sip!",
                    "Quotes telah diperbarui",
                    "success"
                );
                return false;
            }else{
                console.log(result.info);
            }
        }).catch(error => {
            console.log(error);
        });
    }
});


function loadShortcutFiture(){
    fetch(baseurl + \'api/statis\', {
        method: \'GET\',
        headers: {
            \'x-api-key\': apikey
        }
    }).then(response => response.json()).then(result => {
        //console.log(result);
        let konten = "";
        let jumlahHidden = 0;
        if(result.data.length > 4){
            jumlahHidden = result.data.length - 4;
        }
        for(let i=0; i<result.data.length; i++){
            konten += `
                <div style=\'position: relative; margin-top: 4px;\' class=\'list-media\'>
                    <div style=\'display: flex; justify-content: left; align-items: center; padding: 10px 15px; background: #eee; border-radius: 4px;\'>
                        `+result.data[i].media+`
                        <div style=\'font-weight: 500;\'>`+result.data[i].label+`</div>
                    </div>
                    <button id=\'btnHps`+result.data[i].id+`\' data-id="`+result.data[i].id+`" data-label="`+result.data[i].label+`" onClick="return hps(this.id)" style="padding: 0px; background: #fff; border: none; position: absolute; right: 0; z-index: 9; top: 8px; width: 30px; padding: 5px 8px; border-radius: 10px 0 0 10px;">
                        <svg style="width: 10pt;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            `;
        }
        if(jumlahHidden != 0){
            el("#floatstatus").innerHTML = `<div class=\'float-status\'>Ada `+jumlahHidden+` lagi</div>`;
        }else{
            el("#floatstatus").innerHTML = "";
        }
        el("#viewshortcut").innerHTML = konten;
    }).catch(error => {
        console.log(error);
    });
}


loadShortcutFiture();

// Shortcut
let frSc = el("#formShortcut");
frSc.addEventListener("submit", (e)=> {
    e.preventDefault();
    const fid = frSc.id;

    const form = el(\'form[id="\'+fid+\'"]\');
    const formData = new FormData(form);

    let media = document.forms[fid][\'media\'];
    let label = document.forms[fid][\'label\'];
    let link = document.forms[fid][\'link\'];

    if(setText(media.value)){
        el("#msg"+fid).innerHTML = `
            <div class="alert alert-danger text-danger" role="alert">
                <strong>Icon</strong> `+setText(media.value)+`.
            </div>
        `;
        media.focus();
    }else if(setText(label.value)){
        el("#msg"+fid).innerHTML = `
            <div class="alert alert-danger text-danger" role="alert">
                <strong>Label</strong> `+setText(label.value)+`
            </div>
        `;
        label.focus();
    }else if(setText(link.value)){
        el("#msg"+fid).innerHTML = `
            <div class="alert alert-danger text-danger" role="alert">
                <strong>Link</strong> `+setText(link.value)+`
            </div>
        `;
        link.focus();
    }else{
        el("#msg"+fid).innerHTML = "";
        fetch(baseurl + \'api/statis\', {
            method: \'POST\',
            headers: {
                \'x-api-key\': apikey
            },
            body: formData
        }).then(response => response.json()).then(result => {
            //console.log(result);
            if(result.code == 200){
                loadShortcutFiture();
                media.value = "";
                label.value = "";
                link.value = "";
                Swal.fire(
                    "Sip!",
                    "Shorcut telah ditambahkan",
                    "success"
                );
                return false;
            }else{
                console.log(result.info);
            }
        }).catch(error => {
            console.log(error);
        });
    }

});











function hps(x) {
    let id = el("#"+x).dataset.id;
    let label = el("#"+x).dataset.label;
    Swal.fire({
        title: "Konfirmasi",
        html: "Ingin menghapus berita <strong class=\'text-danger\'>"+label+"</strong> ?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Hapus!"
    }).then((result) => {
        if (result.isConfirmed) {
            doRemove(x);
            return false;
        }
        return false;
    });
    return false;
}


function doRemove(x) {
    let id = el("#"+x).dataset.id;
    let label = el("#"+x).dataset.label;
    const formData = new FormData();
    formData.append(\'__csrf\', el("#__csrf").value);
    formData.append(\'tipe\', \'HAPUS_SHORTCUT\');
    formData.append(\'id\', id);
    fetch(baseurl + \'api/statis\', {
        method: \'POST\',
        headers: {
            \'x-api-key\': apikey
        },
        body: formData
    }).then(response => response.json()).then(result => {
        // console.log(result);
        if(result.code == "200"){
          Swal.fire({
            title: "Ok!",
            html: "Shortcut <strong class=\'text-danger\'>"+label+"</strong> sudah dihapus.",
            icon: "success"
          });
          loadShortcutFiture();
        }else{
          Swal.fire({
            title: "Ups!",
            html: result.info,
            icon: "error"
          });
        }
    }).catch(error => {
        console.log(error);
    });
}

</script>
';
	}
}
