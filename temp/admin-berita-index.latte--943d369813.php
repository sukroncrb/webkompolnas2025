<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/admin/berita/index.latte */
final class Template_943d369813 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/admin/berita/index.latte';

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
		$this->renderBlock('js', get_defined_vars()) /* line 79 */;
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
						<h4 class="fw-semibold mb-8">Semua berita</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a class="text-muted text-decoration-none" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 16 */;
		echo '">Home</a>
								</li>
								<li class="breadcrumb-item" aria-current="page">Berita</li>
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
		<div class="widget-content searchable-container list">
			<div class="card card-body" style="margin-left: -20px;">
				<div class="row">
					<div class="col-md-4 col-xl-3">
						<form class="position-relative" id=\'formSearch\' name=\'formSearch\' onSubmit=\'return searchData()\'>
							<select id="opsi" name="opsi" class=\'form-control position-absolute\' style=\'width: 90px; right: 0; border: 0; font-weight: bold; cursor: pointer; padding-right: 10px;\'>
								<option value=\'judul\'>Judul</option>
								<option value=\'kategori\'>Kategori</option>
                <option value=\'publikasi\'>Publikasi</option>
							</select>
							<input type=\'hidden\' id=\'tipe\' name=\'tipe\' value=\'SEARCH\'>
							<input type="text" class="form-control product-search ps-5" id="keyword" name="keyword" placeholder="Enter untuk mencari..." style=\'padding-right: 90px;\' />
							<i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
						</form>
					</div>
					<div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0 gap-2">
						<button id=\'refresh\' onClick="refresh()" class="btn btn-primary d-flex align-items-center">
							<i class="ti ti-refresh fs-5" title="Refresh"></i>
						</button>
						<a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 49 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 49 */;
		echo '/berita/add" id="btn-add-contact" class="btn btn-primary d-flex align-items-center">
							<i class="ti ti-plus text-white me-1 fs-5"></i> Buat berita </a>
					</div>
				</div>
			</div>
			
			<div class="card card-body" style="margin-left: -20px;">
				<div class="table-responsive">
					<table class="table search-table align-middle">
						<thead class="header-item">
							<th>Judul</th>
							<th class=\'text-center\'>Kategori</th>
              <th class=\'text-center\'>Dilihat</th>
							<th class=\'text-center\'>Publikasi</th>
							<th class="text-center">Opsi</th>
						</thead>
						<tbody id="daftarberita"></tbody>
					</table>
					<div id="btnload">
						<div style=\'text-align: center; padding: 20px;\'>
							<div class=\'loader\'></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
';
	}


	/** {block js} on line 79 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 80 */;
		echo 'assets/admin/libs/sweetalert2/dist/sweetalert2.min.js"></script>
<script>
let semuadata = [];
const elementid = \'daftarberita\';
const jumlahitem = 10;
let startfrom = 0;

async function getDataFromDB() {
    semuadata = [];

    el("#"+elementid).innerHTML = "";
    el("#btnload").innerHTML = `<div style=\'text-align: center; padding: 20px;\'>
      <div class=\'loader\'></div>
    </div>`;

    const url = baseurl + "api/berita/tabel";
    try {
        const response = await fetch(url, {
            method: \'GET\',
            headers: {
                \'x-api-key\': apikey
            }
        });
        if (!response.ok) {
            throw new Error(`Response status: ${response.status}`);
        }
        const result = await response.json();

        if(result.code != 403){
            for(let i= 0; i<result.data.length; i++){
                semuadata.push(result.data[i]);
            }

            getLoadData({
                startfrom: startfrom
            });
        }else{
          console.log(result.code);
        }

    } catch (error) {
        getDataFromDB();
    }

}

function refresh() {
    el("#refresh").children[0].style.transform = "rotate(100deg)";
    setTimeout(()=>{
      el("#refresh").children[0].style.transform = "rotate(0)";
      getDataFromDB();
    },100);
}

function getLoadData(x) {
    let startfrom = x.startfrom;
    let itemdata = \'\';
    let dcsrf = el("#__csrf").value;

    if(startfrom != 0){
        el("#btnload").innerHTML = `<div style=\'text-align: center; padding: 20px;\'>
          <div class=\'loader\'></div>
        </div>`;
    }

    setTimeout(()=>{
        for(let i=0; i< semuadata.length; i++){
            let statusberita = `<span class=\'badge text-bg-danger\'>`+semuadata[i].publikasi+`</span>`;
            if(semuadata[i].publikasi == "Terbit"){
              statusberita = `<span class=\'badge text-bg-secondary\'>`+semuadata[i].publikasi+`</span>`;
            }
            
            if(i == (startfrom + 1) || i < (startfrom + jumlahitem)){
                itemdata += `
                  <tr>
                    <td>
                      <div>`+semuadata[i].judul+`</div>
                    </td>
                    <td>
                      <div class=\'text-center\'>`+semuadata[i].kategori+`</div>
                    </td>
                    <td>
                      <div class=\'text-center\'>`+semuadata[i].dibaca+`</div>
                    </td>
                    <td>
                      <div class=\'text-center\'>`+statusberita+`</div>
                    </td>
                    <td>
                      <div class="action-btn text-center" style=\'display: flex; justify-content: center; align-items: center; gap: 5px;\'>
                        <a href="`+baseurl+prefix+`/berita/`+semuadata[i].id+`/edit" class="text-dark hover:text-primary edit ms-2">
                          <i class="ti ti-edit fs-5"></i>
                        </a>
                        <form method="post" data-id="`+semuadata[i].id+`" data-label="`+semuadata[i].judul+`" id="formHapus`+semuadata[i].id+`" name="formHapus`+semuadata[i].id+`" onSubmit="return hps([this.dataset.id,this.dataset.label])">
                          <input type=\'hidden\' id=\'id\' name=\'id\' value=\'`+semuadata[i].id+`\'>
                          <input type=\'hidden\' id=\'tipe\' name=\'tipe\' value=\'DELETE\'>
                          <input type=\'hidden\' id=\'__csrf\' name=\'__csrf\' value=\'`+dcsrf+`\'>
                          <button class="text-danger delete ms-2" style=\'background: none; outline: none; border: none;\'>
                            <i class="ti ti-trash fs-5"></i>
                          </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                `;
            }
        }
        el(\'#\'+elementid).innerHTML = itemdata;
        startfrom = startfrom + jumlahitem;

        if(startfrom < semuadata.length){
            el("#btnload").innerHTML = `
                <div class="w-full text-center mt-8">
                    <button 
                        onclick="getLoadData({
                            startfrom: `+startfrom+`
                        })"
                        type="button"
                          class="btn btn-primary">
                        Lihat lainnya
                    </button>
                </div>
            `;
        }else{
          if(semuadata.length == 0){
            el("#btnload").innerHTML = `
              <div style=\'display: flex; justify-content: center; align-items: center; width: 100%; height: 95px; color: #e1e1e1; font-weight: bold;\'>
                <span>BELUM ADA DATA</span>
              </div>
            `;
          }else{
            el("#btnload").innerHTML = ``;
          }
        }

    },500);

}

function hps(x) {
  Swal.fire({
    title: "Konfirmasi",
    html: "Ingin menghapus berita <strong class=\'text-danger\'>"+x[1] +"</strong> ?",
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
    const form = el(\'form[id="formHapus\'+x[0]+\'"]\');
    const formData = new FormData(form);
    fetch(baseurl + \'api/berita\', {
        method: \'POST\',
        headers: {
            \'x-api-key\': apikey
        },
        body: formData
    }).then(response => response.json()).then(result => {
        if(result.code == "200"){
          Swal.fire({
            title: "Ok!",
            html: "Berita <strong class=\'text-danger\'>"+result.data.judul +"</strong> sudah dihapus.",
            icon: "success"
          });

          semuadata = semuadata.filter(item => item.id !== result.data.id);

          getLoadData({
              startfrom: 0
          });
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


function searchData() {
    const form = el(\'form[id="formSearch"]\');
    const formData = new FormData(form);
    fetch(baseurl + \'api/berita\', {
        method: \'POST\',
        headers: {
            \'x-api-key\': apikey
        },
        body: formData
    }).then(response => response.json()).then(result => {
        if(result.code == "200"){
          semuadata = [];
          if(result.data.length > 0){
            for(let i= 0; i<result.data.length; i++){
                semuadata.push(result.data[i]);
            }
            getLoadData({
                startfrom: 0
            });
          }else{
            el(\'#\'+elementid).innerHTML = "";
            el("#btnload").innerHTML = `
              <div style=\'display: flex; justify-content: center; align-items: center; width: 100%; height: 95px; color: #e1e1e1; font-weight: bold;\'>
                <span>DATA TIDAK DITEMUKAN</span>
              </div>
            `;
          }
          return false;
        }
    }).catch(error => {
        console.log(error);
        return false;
    });

    return false;
}

getDataFromDB();
</script>
';
	}
}
