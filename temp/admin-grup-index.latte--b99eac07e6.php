<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/project/php/kompolnas/vendor/abiesoft/Http/../../../templates/admin/grup/index.latte */
final class Template_b99eac07e6 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/project/php/kompolnas/vendor/abiesoft/Http/../../../templates/admin/grup/index.latte';

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
		$this->renderBlock('js', get_defined_vars()) /* line 144 */;
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
						<h4 class="fw-semibold mb-8">Semua grup</h4>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a class="text-muted text-decoration-none" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 16 */;
		echo '">Home</a>
								</li>
								<li class="breadcrumb-item" aria-current="page">Grup</li>
							</ol>
						</nav>
					</div>
					<div class="col-3">
						<div class="text-center mb-n5">
							<div style=\'width: 168px; height: 165px;\'></div>
							<!-- <img src="';
		echo LR\Filters::escapeHtmlComment($baseurl) /* line 25 */;
		echo 'assets/admin/images/breadcrumb/blue-grup-icon.png" alt="modernize-img" class="img-fluid mb-n4" /> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		
        <div class="row">

            <div class="col-12
                sm:col-12
                md:col-12
                lg:col-6
                xl:col-4
                2xl:col-4
            ">
                <form id="formInput" name="formInput" method="post">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-7">
                                        <h4 class="card-title">Informasi grup</h4>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="alert bg-light-subtle" role="alert">
                                        <strong>Catatan:</strong>
                                        <div>Setiap grup memiliki aturan tersendiri untuk penggunanya yang akan mengatur batas akses ke halaman di aplikasi ini.</div>
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

            <div class="col-12
                sm:col-12
                md:col-12
                lg:col-6
                xl:col-8
                2xl:col-8
            ">
                <div class="widget-content searchable-container list">
                    <div class="card card-body" style="margin-left: -20px;">
                        <div class="row">
                            <div class="col-md-4 col-xl-3">
                                <form class="position-relative" id=\'formSearch\' name=\'formSearch\' onSubmit=\'return searchData()\'>
                                    <input type=\'hidden\' id=\'opsi\' name=\'opsi\' value=\'nama\'>
                                    <input type=\'hidden\' id=\'tipe\' name=\'tipe\' value=\'SEARCH\'>
                                    <input type="text" class="form-control product-search ps-5" id="keyword" name="keyword" placeholder="Cari grup..." title=\'Enter untuk mencari\' />
                                    <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                                </form>
                            </div>
                            <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0 gap-2">
                                <button id=\'refresh\' onClick="refresh({
                                    elementid: elementid,
                                    jumlahitem: 10,
                                    startfrom: 0
                                })" class="btn btn-primary d-flex align-items-center">
                                    <i class="ti ti-refresh fs-5" title="Refresh"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card card-body" style="margin-left: -20px;">
                        <div class="table-responsive">
                            <table class="table search-table align-middle text-nowrap">
                                <thead class="header-item">
                                    <th>Nama</th>
                                    <th class="text-center">Opsi</th>
                                </thead>
                                <tbody id="daftargrup"></tbody>
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

	</div>
</div>
';
	}


	/** {block js} on line 144 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 145 */;
		echo 'assets/admin/libs/sweetalert2/dist/sweetalert2.min.js"></script>
<script>
const elementid = \'daftargrup\';
const jumlahitem = 10;
let semuadata = [];
let startfrom = 0;

async function getDataFromDB() {
    semuadata = [];

    el("#"+elementid).innerHTML = "";
    el("#btnload").innerHTML = `<div style=\'text-align: center; padding: 20px;\'>
    <div class=\'loader\'></div>
    </div>`;

    const url = baseurl + "api/grup";
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
                elementid: elementid,
                jumlahitem: jumlahitem,
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
    let startfrom = 0;
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
            if(i == (startfrom + 1) || i < (startfrom + jumlahitem)){
                itemdata += `
                <tr class="search-items">
                    <td>
                        <div class="d-flex align-items-center">
                            `+semuadata[i].nama+`
                        </div>
                    </td>
                    <td>
                        <div class="action-btn text-center" style=\'display: flex; justify-content: center; align-items: center; gap: 5px;\'>
                            <form method="post" data-id="`+semuadata[i].id+`" data-label="`+semuadata[i].nama+`" id="formHapus`+semuadata[i].id+`" name="formHapus`+semuadata[i].id+`" onSubmit="return hps([this.dataset.id,this.dataset.label])">
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
        html: "Ingin menghapus grup <strong class=\'text-danger\'>"+x[1] +"</strong> ?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
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
    fetch(baseurl + \'api/grup\', {
        method: \'POST\',
        headers: {
            \'x-api-key\': apikey
        },
        body: formData
    }).then(response => response.json()).then(result => {
        if(result.code == "200"){
        Swal.fire({
            title: "Ok!",
            html: "Grup <strong class=\'text-danger\'>"+result.data.nama +"</strong> sudah dihapus.",
            icon: "success"
        });

        semuadata = semuadata.filter(item => item.nama !== result.data.nama);

        getLoadData({
            elementid: elementid,
            jumlahitem: 10,
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
    fetch(baseurl + \'api/grup\', {
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
                elementid: elementid,
                jumlahitem: jumlahitem,
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

getDataFromDB({
    elementid: elementid,
    jumlahitem: jumlahitem
});


el(\'#formInput\').onsubmit = (e) => {
    e.preventDefault();
    const fid = "formInput";
    const field = [
        \'nama|setText\'
    ]
    const form = el(\'form[id="\'+fid+\'"]\');
    const formData = new FormData(form);
    const message = el("#msg"+fid);

    if(validasi({
        fid: fid,
        field: field
    })){
        fetch(baseurl + \'api/grup\', {
            method: \'POST\',
            headers: {
                \'x-api-key\': apikey
            },
            body: formData
        }).then(response => response.json()).then(result => {
            if(result.code == 200){
                message.innerHTML = "";
                el("#nama").value = "";
                Swal.fire(
                    "Sip!",
                    "Grup baru sudah dibuat",
                    "success"
                );
                getDataFromDB({
                    elementid: elementid,
                    jumlahitem: jumlahitem
                });
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
}
</script>
';
	}
}
