<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/project/php/kompolnas/vendor/abiesoft/Http/../../../templates/admin/dashboard/index.latte */
final class Template_71d1588880 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/project/php/kompolnas/vendor/abiesoft/Http/../../../templates/admin/dashboard/index.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 7 */;
		$this->renderBlock('js', get_defined_vars()) /* line 87 */;
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
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center gap-4 mb-4">
                    <div class="position-relative">
                        <div class="border border-2 border-primary rounded-circle">
                            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($sesi['photo'])) /* line 15 */;
		echo '" class="rounded-circle m-1" alt="user1" width="60" />
                        </div>
                    </div>
                    <div>
                    <h3 class="fw-semibold">';
		echo LR\Filters::escapeHtmlText($sesi['nama']) /* line 19 */;
		echo '</span>
                    </h3>
                    <span>';
		echo LR\Filters::escapeHtmlText($sesi['namagrup']) /* line 21 */;
		echo '</span>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="p-4 mb-4">
                    <div class="text-center">
                        <h5 class="card-title fw-semibold mb-1">Statistik Pengunjung</h5>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div>
                        <div class=\'d-sm-flex d-block align-items-center justify-content-between\'>
                            <div>
                                <h5 class="card-title fw-semibold mb-1">Bulan <span id=\'bulanini\'></span></h5>
                            </div>
                            <select class="form-select w-auto" id=\'pilihanbulan\'></select>
                        </div>
                        <div id="pengunjung" class="mb-7 pb-8 mx-n4"></div>
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                            <div class="bg-primary-subtle rounded me-8 p-8 d-flex align-items-center justify-content-center">
                                <i class="ti ti-grid-dots text-primary fs-6"></i>
                            </div>
                            <div>
                                <p class="fs-3 mb-0 fw-normal">Pengunjung Bulan <span id=\'bulanini2\'></span></p>
                                <h6 class="fw-semibold text-dark fs-4 mb-0" id=\'totalpengunjung\'>0</h6>
                            </div>
                            </div>
                            <div class="d-flex align-items-center">
                            <div class="text-bg-light rounded me-8 p-8 d-flex align-items-center justify-content-center">
                                <i class="ti ti-grid-dots text-muted fs-6"></i>
                            </div>
                            <div>
                                <p class="fs-3 mb-0 fw-normal">Pengunjung Hari Ini</p>
                                <h6 class="fw-semibold text-dark fs-4 mb-0" id=\'pengunjunghariini\'>0</h6>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold">Device</h4>
                        <div id="deviceData" class="mb-4"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold">Os</h4>
                        <div id="osData" class="mb-4"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
';
	}


	/** {block js} on line 87 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 88 */;
		echo 'assets/admin/libs/apexcharts/dist/apexcharts.min.js"></script>
<script>

var pengunjung = {
    series: [
        {
            name: "Pengunjung",
            data: [],
        },
    ],

    chart: {
        toolbar: {
            show: false,
        },
        height: 260,
        type: "line",
        fontFamily: "inherit",
        foreColor: "#adb0bb",
    },
    colors:[],
    plotOptions: {
        bar: {
        borderRadius: 4,
        columnWidth: "45%",
        distributed: true,
        endingShape: "rounded",
        },
    },

    dataLabels: {
        enabled: false,
    },
    legend: {
        show: false,
    },
    grid: {
        yaxis: {
            lines: {
                show: false,
            },
        },
        xaxis: {
            lines: {
                show: false,
            },
        },
    },
    xaxis: {
        categories: [],
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
    },
    yaxis: {
        labels: {
            show: false,
        },
    },
    tooltip: {
        theme: "light",
    },
};

var chartPengunjung = new ApexCharts(document.querySelector("#pengunjung"), pengunjung);
chartPengunjung.render();

var device = {
    color: "#adb5bd",
    series: [],
    labels: [],
    chart: {
        type: "donut",
        fontFamily: "inherit",
        foreColor: "#adb0bb",
    },
    plotOptions: {
        pie: {
            donut: {
                size: \'88%\',
                background: \'transparent\',
                labels: {
                    show: true,
                    name: {
                        show: true,
                        offsetY: 7,
                    },
                    value: {
                        show: false,
                    },
                    total: {
                        show: true,
                        color: \'#7C8FAC\',
                        fontSize: \'20px\',
                        fontWeight: "600",
                        label: \'Device\',
                    },
                },
            },
        },
    },
    stroke: {
        show: false,
    },
    dataLabels: {
        enabled: false,
    },

    legend: {
        show: false,
    },
    colors: ["var(--bs-primary)", "var(--bs-danger)", "var(--bs-secondary)"],

    tooltip: {
        theme: "dark",
        fillSeriesColor: false,
    },
};

var chartDevice = new ApexCharts(document.querySelector("#deviceData"), device);
chartDevice.render();


var os = {
    color: "#adb5bd",
    series: [],
    labels: [],
    chart: {
        type: "donut",
        fontFamily: "inherit",
        foreColor: "#adb0bb",
    },
    plotOptions: {
        pie: {
            donut: {
                size: \'88%\',
                background: \'transparent\',
                labels: {
                    show: true,
                    name: {
                        show: true,
                        offsetY: 7,
                    },
                    value: {
                        show: false,
                    },
                    total: {
                        show: true,
                        color: \'#7C8FAC\',
                        fontSize: \'20px\',
                        fontWeight: "600",
                        label: \'Os\',
                    },
                },
            },
        },
    },
    stroke: {
        show: false,
    },
    dataLabels: {
        enabled: false,
    },

    legend: {
        show: false,
    },
    colors: ["var(--bs-primary)", "var(--bs-danger)", "var(--bs-secondary)", "var(--bs-warning)"],

    tooltip: {
        theme: "dark",
        fillSeriesColor: false,
    },
};

var chartOs = new ApexCharts(document.querySelector("#osData"), os);
chartOs.render();

function loadDashboard(){

    fetch(baseurl + \'api/data/pengunjung\', {
        method: \'GET\',
        headers: {
            \'x-api-key\': apikey
        }
    }).then(response => response.json()).then(result => {

        console.log(result.data);

        let itempilihanbulan = "<option value=\'"+result.data.valueaktif+"\'>"+result.data.labelaktif+"</option>";
        for(let i=0; i<result.data.pilihanbulan.length; i++){
            itempilihanbulan += `<option value=\'`+result.data.pilihanbulan[i].value+`\'>`+result.data.pilihanbulan[i].label+`</option>`;
        }

        el("#pilihanbulan").addEventListener(\'change\', ()=>{
            updateDashboard(el("#pilihanbulan").value);
        });

        el("#pilihanbulan").innerHTML = itempilihanbulan;
        el(\'#bulanini\').innerHTML = result.data.bulanini;
        el(\'#bulanini2\').innerHTML = result.data.bulanini;
        el(\'#totalpengunjung\').innerHTML = result.data.totalpengunjung;
        el(\'#pengunjunghariini\').innerHTML = result.data.pengunjunghariini;

        chartPengunjung.updateSeries([
        {
            name: "Pengunjung",
            data: result.data.pengunjung,
        },
        ]);

        chartPengunjung.updateOptions({
        xaxis: {
            categories: result.data.tanggal,
        },
            colors: result.data.warna,
        });

        let dataJumlahDevice = [];
        let namaDeviceBaru = [];

        for(let i=0; i< result.data.device.length; i++){
            dataJumlahDevice.push(result.data.device[i].jumlah);
            namaDeviceBaru.push(result.data.device[i].device);
        }

        chartDevice.updateSeries(dataJumlahDevice);
        chartDevice.updateOptions({
            labels: namaDeviceBaru,
        });

        let dataJumlahOSBaru = [];
        let namaOSBaru = [];

        for(let i=0; i< result.data.os.length; i++){
            dataJumlahOSBaru.push(result.data.os[i].jumlah);
            namaOSBaru.push(result.data.os[i].os);
        }

        chartOs.updateSeries(dataJumlahOSBaru);
        chartOs.updateOptions({
            labels: namaOSBaru,
        });

    }).catch(error => {
        console.log(error);
        return false;
    });
}


function updateDashboard(periode){
    fetch(baseurl + \'api/data/pengunjung/\'+periode, {
        method: \'GET\',
        headers: {
            \'x-api-key\': apikey
        }
    }).then(response => response.json()).then(result => {

        console.log(result.data);
        
        el(\'#bulanini\').innerHTML = result.data.bulanini;
        el(\'#bulanini2\').innerHTML = result.data.bulanini;
        el(\'#totalpengunjung\').innerHTML = result.data.totalpengunjung;
        el(\'#pengunjunghariini\').innerHTML = result.data.pengunjunghariini;

        chartPengunjung.updateSeries([
        {
            name: "Pengunjung",
            data: result.data.pengunjung,
        },
        ]);

        chartPengunjung.updateOptions({
        xaxis: {
            categories: result.data.tanggal,
        },
            colors: result.data.warna,
        });

        let dataJumlahDevice = [];
        let namaDeviceBaru = [];

        for(let i=0; i< result.data.device.length; i++){
            dataJumlahDevice.push(result.data.device[i].jumlah);
            namaDeviceBaru.push(result.data.device[i].device);
        }

        chartDevice.updateSeries(dataJumlahDevice);
        chartDevice.updateOptions({
            labels: namaDeviceBaru,
        });
        
        let dataJumlahOSBaru = [];
        let namaOSBaru = [];

        for(let i=0; i< result.data.os.length; i++){
            dataJumlahOSBaru.push(result.data.os[i].jumlah);
            namaOSBaru.push(result.data.os[i].os);
        }

        chartOs.updateSeries(dataJumlahOSBaru);
        chartOs.updateOptions({
            labels: namaOSBaru,
        });

    }).catch(error => {
        console.log(error);
        return false;
    });
}

loadDashboard();
</script>
';
	}
}
