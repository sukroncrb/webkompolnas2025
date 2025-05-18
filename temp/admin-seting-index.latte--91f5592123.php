<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/admin/seting/index.latte */
final class Template_91f5592123 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/admin/seting/index.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 5 */;
		echo "\n";
		$this->renderBlock('js', get_defined_vars()) /* line 267 */;
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

		echo '<div class=\'body-wrapper\'>
    <div class="container-fluid">
    <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
      <div class="card-body px-4 py-3">
        <div class="row align-items-center">
          <div class="col-9">
            <h4 class="fw-semibold mb-8">Setingan Website</h4>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a class="text-muted text-decoration-none" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 16 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 16 */;
		echo '">Home</a>
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
          <button class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-info-tab" data-bs-toggle="pill" data-bs-target="#pills-info" type="button" role="tab" aria-controls="pills-info" aria-selected="true">
            <i class="ti ti-info-circle me-2 fs-6"></i>
            <span class="d-none d-md-block">Info</span>
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-mail-tab" data-bs-toggle="pill" data-bs-target="#pills-mail" type="button" role="tab" aria-controls="pills-mail" aria-selected="false">
            <i class="ti ti-mail me-2 fs-6"></i>
            <span class="d-none d-md-block">Email Service</span>
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-3" id="pills-youtube-tab" data-bs-toggle="pill" data-bs-target="#pills-youtube" type="button" role="tab" aria-controls="pills-youtube" aria-selected="false">
            <i class="ti ti-video me-2 fs-6"></i>
            <span class="d-none d-md-block">Youtube Service</span>
          </button>
        </li>
      </ul>
      <div class="card-body mb-4">
        <div class="tab-content" id="pills-tabContent">
          
          
          <div class="tab-pane fade show active" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab" tabindex="0">
            
            <div class="row justify-content-md-center mb-2">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="card-title">Informasi Umum</h4>
                            <p class="card-subtitle mb-4">Semua informasi yang berkaitan dengan website yang dikelola</p>
                            <form id="formInfo" name="formInfo" method="post">
                                <div class="row">
                                    <div id="msgformInfo"></div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="nama" name="nama" data-label="Nama" value="';
		echo LR\Filters::escapeHtmlAttr($webinfo['nama']) /* line 68 */;
		echo '" />
                                            <label for="nama">Nama</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <textarea style="height: 100px;" type="text" class="form-control" id="alamat" name="alamat" data-label="Alamat">';
		echo LR\Filters::escapeHtmlText($webinfo['alamat']) /* line 74 */;
		echo '</textarea>
                                            <label for="alamat">Alamat</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="latitude" name="latitude" data-label="Latitude"  value="';
		echo LR\Filters::escapeHtmlAttr($webinfo['latitude']) /* line 80 */;
		echo '"/>
                                            <label for="latitude">Latitude</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="longitude" name="longitude" data-label="Longitude" value="';
		echo LR\Filters::escapeHtmlAttr($webinfo['longitude']) /* line 86 */;
		echo '" />
                                            <label for="longitude">Longitude</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="email" name="email" data-label="Email" value="';
		echo LR\Filters::escapeHtmlAttr($webinfo['email']) /* line 92 */;
		echo '" />
                                            <label for="email">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="notlp" name="notlp" data-label="No. Telp" value="';
		echo LR\Filters::escapeHtmlAttr($webinfo['notlp']) /* line 98 */;
		echo '" />
                                            <label for="notlp">No Tel.</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="fax" name="fax" data-label="No. Fax" value="';
		echo LR\Filters::escapeHtmlAttr($webinfo['fax']) /* line 104 */;
		echo '" />
                                            <label for="fax">No. Fax.</label>
                                        </div>
                                    </div>

                                    <h5 class="card-title" style=\'font-size: 12pt; margin-top: 10px;\'>Sosial Media Kompolnas</h5>
                                    <p class="card-subtitle mb-4">Link profil sosial media kompolnas</p>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="youtube" name="youtube" data-label="Youtube" value="';
		echo LR\Filters::escapeHtmlAttr($webinfo['youtube']) /* line 113 */;
		echo '" />
                                            <label for="youtube">Youtube</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="facebook" name="facebook" data-label="Facebook" value="';
		echo LR\Filters::escapeHtmlAttr($webinfo['facebook']) /* line 119 */;
		echo '" />
                                            <label for="facebook">Facebook</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="instagram" name="instagram" data-label="Instagram" value="';
		echo LR\Filters::escapeHtmlAttr($webinfo['instagram']) /* line 125 */;
		echo '" />
                                            <label for="instagram">Instagram</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="twitter" name="twitter" data-label="Twitter" value="';
		echo LR\Filters::escapeHtmlAttr($webinfo['twitter']) /* line 131 */;
		echo '" />
                                            <label for="twitter">X / Twitter</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="tiktok" name="tiktok" data-label="Tiktok" value="';
		echo LR\Filters::escapeHtmlAttr($webinfo['tiktok']) /* line 137 */;
		echo '" />
                                            <label for="tiktok">Tiktok</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="button-group">
                                            <input type=\'hidden\' id=\'tipe\' name=\'tipe\' value=\'INFO\'>
                                            <input type=\'hidden\' id=\'id\' name=\'id\' value=\'';
		echo LR\Filters::escapeHtmlAttr($webinfo['id']) /* line 144 */;
		echo '\'>
                                            <button class="btn btn-primary"> Simpan Perubahan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>  
          </div>


          <div class="tab-pane fade show" id="pills-mail" role="tabpanel" aria-labelledby="pills-mail-tab" tabindex="0">
            
            <div class="row justify-content-md-center mb-2">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="card-title">Konfigurasi Email</h4>
                            <p class="card-subtitle mb-4">Konfigurasi email</p>
                            <form id="formMail" name="formMail" method="post">
                                <div class="row">
                                    <div id="msgformMail"></div>
                                    <div class="col-8">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="smtp" name="smtp" data-label="SMTP" placeholder="SMTP" value="';
		echo LR\Filters::escapeHtmlAttr($smtp) /* line 170 */;
		echo '" />
                                            <label for="smtp">SMTP</label>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="port" name="port" data-label="Port" placeholder="Port"   value="';
		echo LR\Filters::escapeHtmlAttr($port) /* line 176 */;
		echo '"/>
                                            <label for="port">Port</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="useremail" name="useremail" data-label="Email" placeholder="Email" value="';
		echo LR\Filters::escapeHtmlAttr($useremail) /* line 182 */;
		echo '" />
                                            <label for="useremail">Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="emailpsw" name="emailpsw" data-label="Password" placeholder="Password" value="';
		echo LR\Filters::escapeHtmlAttr($emailpsw) /* line 188 */;
		echo '" />
                                            <label for="emailpsw">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="emailpengirim" name="emailpengirim" data-label="Email pengirim" placeholder="Email pengirim" value="';
		echo LR\Filters::escapeHtmlAttr($emailpengirim) /* line 194 */;
		echo '" />
                                            <label for="emailpengirim">Email pengirim</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="namapengirim" name="namapengirim" data-label="Nama pengirim" placeholder="Nama pengirim" value="';
		echo LR\Filters::escapeHtmlAttr($namapengirim) /* line 200 */;
		echo '" />
                                            <label for="namapengirim">Nama Pengirim</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="button-group">
                                            <input type=\'hidden\' id=\'id\' name=\'id\' value=\'';
		echo LR\Filters::escapeHtmlAttr($mailserviceid) /* line 206 */;
		echo '\'>
                                            <input type=\'hidden\' id=\'tipe\' name=\'tipe\' value=\'EMAIL_SERVICE\'>
                                            <button class="btn btn-primary"> Simpan Perubahan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>  
          </div>


          <div class="tab-pane fade show" id="pills-youtube" role="tabpanel" aria-labelledby="pills-youtube-tab" tabindex="0">
            
            <div class="row justify-content-md-center mb-2">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="card-title">Youtube Api Service</h4>
                            <p class="card-subtitle mb-4">Konfigurasi Youtube</p>
                            <form id="formYoutube" name="formYoutube" method="post">
                                <div class="row">
                                    <div id="msgformYoutube"></div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="apikeyyoutube" name="apikeyyoutube" data-label="Apikey" placeholder="Apikey" value="';
		echo LR\Filters::escapeHtmlAttr($apikeyyoutube) /* line 233 */;
		echo '" />
                                            <label for="apikeyyoutube">Youtube Apikey</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="channelid" name="channelid" data-label="Channel ID" placeholder="Channel ID" value="';
		echo LR\Filters::escapeHtmlAttr($channelid) /* line 239 */;
		echo '" />
                                            <label for="channelid">Channel ID</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="button-group">
                                            <input type=\'hidden\' id=\'id\' name=\'id\' value=\'';
		echo LR\Filters::escapeHtmlAttr($youtubeserviceid) /* line 245 */;
		echo '\'>
                                            <input type=\'hidden\' id=\'tipe\' name=\'tipe\' value=\'YOUTUBE_SERVICE\'>
                                            <button class="btn btn-primary"> Simpan Perubahan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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


	/** {block js} on line 267 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 268 */;
		echo 'assets/admin/libs/sweetalert2/dist/sweetalert2.min.js"></script>
<script>

el("#formInfo").addEventListener("submit", (e)=>{
    e.preventDefault();
    const fid = "formInfo";
    const field = [
        \'nama|setText\',
        \'alamat|setText\',
        \'latitude|setText\',
        \'longitude|setText\',
        \'email|setEmail\',
        \'notlp|setText\',
        \'fax|setText\',
        \'youtube|setText\',
        \'facebook|setText\',
        \'instagram|setText\',
        \'twitter|setText\',
        \'tiktok|setText\',
    ];
    const form = el(\'form[id="\'+fid+\'"]\');
    const formData = new FormData(form);
    const message = el("#msg"+fid);
    const preview = el(\'#preview\');

    if(validasi({
        fid: fid,
        field: field
    })){
        fetch(baseurl + \'api/info\', {
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
                    "Informasi telah diperbarui",
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
});

el("#formMail").addEventListener("submit", (e)=>{
    e.preventDefault();
    const fid = "formMail";
    const field = [
        \'smtp|setText\',
        \'port|setAngkaOnly\',
        \'useremail|setEmail\',
        \'emailpsw|setText\',
        \'emailpengirim|setEmail\',
        \'namapengirim|setText\',
    ];
    const form = el(\'form[id="\'+fid+\'"]\');
    const formData = new FormData(form);
    const message = el("#msg"+fid);
    const preview = el(\'#preview\');

    if(validasi({
        fid: fid,
        field: field
    })){
        fetch(baseurl + \'api/seting\', {
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
                    "Informasi telah diperbarui",
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
});

el("#formYoutube").addEventListener("submit", (e)=>{
    e.preventDefault();
    const fid = "formYoutube";
    const field = [
        \'apikeyyoutube|setText\',
        \'channelid|setText\',
    ];
    const form = el(\'form[id="\'+fid+\'"]\');
    const formData = new FormData(form);
    const message = el("#msg"+fid);
    const preview = el(\'#preview\');

    if(validasi({
        fid: fid,
        field: field
    })){
        fetch(baseurl + \'api/seting\', {
            method: \'POST\',
            headers: {
                \'x-api-key\': apikey
            },
            body: formData
        }).then(response => response.json()).then(result => {
            console.log(result);
            if(result.code == 200){
                message.innerHTML = "";
                Swal.fire(
                    "Sip!",
                    "Setingan youtube telah diperbarui",
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
});

</script>
';
	}
}
