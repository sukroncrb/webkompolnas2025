<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/abiesoft/vendor/abiesoft/Http/../../../templates/admin/dashboard/index.latte */
final class Template_e8ab03287a extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/abiesoft/vendor/abiesoft/Http/../../../templates/admin/dashboard/index.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 7 */;
		$this->renderBlock('js', get_defined_vars()) /* line 454 */;
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
            <div class="col-lg-8 d-flex align-items-stretch">
                <div class="card w-100 bg-primary-subtle overflow-hidden shadow-none">
                    <div class="card-body position-relative">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="d-flex align-items-center mb-7">
                                    <div class="rounded-circle overflow-hidden me-6">
                                        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 18 */;
		echo 'assets/admin/images/profile/user-1.jpg" alt="modernize-img" width="40" height="40">
                                    </div>
                                    <h5 class="fw-semibold mb-0 fs-5">';
		echo LR\Filters::escapeHtmlText($sapa) /* line 20 */;
		echo ', Sukron</h5>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="border-end pe-4 border-muted border-opacity-10">
                                        <span>Kemarin </span><span>18</span>
                                        <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">
                                            <span>5</span>
                                            <i class="ti ti-arrow-down-left fs-5 lh-base text-danger"></i>
                                        </h3>
                                        <p class="mb-0 text-dark">Tugas hari ini</p>
                                    </div>
                                    <div class="ps-4">
                                        <span>Kemarin </span><span>5</span>
                                        <h3 class="mb-1 fw-semibold fs-8 d-flex align-content-center">
                                            <span>10</span>
                                            <i class="ti ti-arrow-up-right fs-5 lh-base text-success"></i>
                                        </h3>
                                        <p class="mb-0 text-dark">Dikerjakan hari ini</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="welcome-bg-img mb-n7 text-end">
                                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 43 */;
		echo 'assets/admin/images/backgrounds/welcome-bg.svg" alt="modernize-img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
              <div class="card">
                <div class="card-header">Pengumuman</div>
                <div class="card-body">
                    <h4 class="card-title">Piket Komisioner</h4>
                    <p class="card-text">
                        Yang menandatangani surat hari ini adalah ....
                    </p>
                    <a href="javascript:void(0)" class="btn btn-primary">Lihat pengumuman</a>
                </div>
              </div>
            </div>


            <div class="col-lg-12">
                <div>
                
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#anda" role="tab">
                                <span>Anda</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#surat" role="tab">
                                <span>Surat</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#skm" role="tab">
                                <span>SKM</span>
                            </a>
                        </li>
                    </ul>
                    
                    <div class="tab-content" style=\'margin: 10px -18px;\'>




                        <!--





                        
                            Anda
                        -->
                        <div class="tab-pane active" id="anda" role="tabpanel">
                            <div class="p-3">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body calender-sidebar app-calendar">
                                            <div id="calendar"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="eventModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="eventModalLabel">
                                                    Add / Edit Event
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div>
                                                            <label class="form-label">Event Title</label>
                                                            <input id="event-title" type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mt-6">
                                                        <div>
                                                            <label class="form-label">Event Color</label>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="n-chk">
                                                                <div class="form-check form-check-primary form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="event-level" value="Danger" id="modalDanger" />
                                                                    <label class="form-check-label" for="modalDanger">Danger</label>
                                                                </div>
                                                            </div>
                                                            <div class="n-chk">
                                                                <div class="form-check form-check-warning form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="event-level" value="Success" id="modalSuccess" />
                                                                    <label class="form-check-label" for="modalSuccess">Success</label>
                                                                </div>
                                                            </div>
                                                            <div class="n-chk">
                                                                <div class="form-check form-check-success form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="event-level" value="Primary" id="modalPrimary" />
                                                                    <label class="form-check-label" for="modalPrimary">Primary</label>
                                                                </div>
                                                            </div>
                                                            <div class="n-chk">
                                                                <div class="form-check form-check-danger form-check-inline">
                                                                    <input class="form-check-input" type="radio" name="event-level" value="Warning" id="modalWarning" />
                                                                    <label class="form-check-label" for="modalWarning">Warning</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 mt-6">
                                                    <div>
                                                        <label class="form-label">Enter Start Date</label>
                                                        <input id="event-start-date" type="date" class="form-control" />
                                                    </div>
                                                    </div>

                                                    <div class="col-md-12 mt-6">
                                                    <div>
                                                        <label class="form-label">Enter End Date</label>
                                                        <input id="event-end-date" type="date" class="form-control" />
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <button type="button" class="btn btn-success btn-update-event" data-fc-event-public-id="">
                                                    Update changes
                                                </button>
                                                <button type="button" class="btn btn-primary btn-add-event">
                                                    Add Event
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <!--





                        
                            Surat
                        -->
                        <div class="tab-pane p-3" id="surat" role="tabpanel">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-primary">
                                                    <i class="ti ti-mail fs-6"></i>
                                                </div>
                                                <div class="ms-3 align-self-center">
                                                    <h4 class="mb-0 fs-5">Total Surat</h4>
                                                    <span>Semua surat</span>
                                                </div>
                                                <div class="ms-auto align-self-center">
                                                    <h2 class="fs-7 mb-0">1000</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div>
                                                    <h4 class="card-title"><span>860 surat</span></h4>
                                                    <p class="card-subtitle mb-1">Datang langsung</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="text-success display-6">
                                                        <i class="ti ti-walk"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="progress text-bg-light">
                                                <div class="progress-bar text-bg-success" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div>
                                                    <h4 class="card-title"><span>10 surat</span></h4>
                                                    <p class="card-subtitle mb-1">Lewat Email</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="text-primary display-6">
                                                        <i class="ti ti-mail-forward"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="progress text-bg-light">
                                                <div class="progress-bar text-bg-primary" role="progressbar" style="width: 0.10%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div>
                                                    <h4 class="card-title"><span>0 surat</span></h4>
                                                    <p class="card-subtitle mb-1">Lewat E-skm</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="text-danger display-6">
                                                        <i class="ti ti-screen-share"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="progress text-bg-light">
                                                <div class="progress-bar text-bg-danger" role="progressbar" style="width: 0%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <div>
                                                    <h4 class="card-title"><span>130 surat</span></h4>
                                                    <p class="card-subtitle mb-1">Lewat Pos</p>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="text-warning display-6">
                                                        <i class="ti ti-mailbox"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="progress text-bg-light">
                                                <div class="progress-bar text-bg-warning" role="progressbar" style="width: 13%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="ms-3 align-self-center">
                                                    <h4 class="mb-0 fs-5">Asli</h4>
                                                    <span>Tujuan surat ke Kompolnas</span>
                                                </div>
                                                <div class="ms-auto align-self-center">
                                                    <h2 class="fs-7 mb-0">800</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body bg-danger">
                                            <div class="d-flex flex-row">
                                                <div class="ms-3 align-self-center text-white">
                                                    <h4 class="mb-0 fs-5 text-white">Tembusan</h4>
                                                    <span>Hanya sebagai tembusan</span>
                                                </div>
                                                <div class="ms-auto align-self-center text-white">
                                                    <h2 class="fs-7 mb-0 text-white">200</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>



                        <!--






                            SKM
                        -->
                        <div class="tab-pane p-3" id="skm" role="tabpanel">
                            <div class="row">

                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="round-40 rounded-circle text-white d-flex align-items-center justify-content-center text-bg-primary">
                                                    <i class="ti ti-file-symlink fs-6"></i>
                                                </div>
                                                <div class="ms-3 align-self-center">
                                                    <h4 class="mb-0 fs-5">Total SKM</h4>
                                                    <span>Hanya pengaduan yang di proses</span>
                                                </div>
                                                <div class="ms-auto align-self-center">
                                                    <h2 class="fs-7 mb-0">500</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-row">
                                                <div class="ms-3 align-self-center">
                                                    <h4 class="mb-0 fs-5">Asli</h4>
                                                    <span>Tujuan surat ke Kompolnas</span>
                                                </div>
                                                <div class="ms-auto align-self-center">
                                                    <h2 class="fs-7 mb-0">300</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body bg-danger">
                                            <div class="d-flex flex-row">
                                                <div class="ms-3 align-self-center text-white">
                                                    <h4 class="mb-0 fs-5 text-white">Tembusan</h4>
                                                    <span>Hanya sebagai tembusan</span>
                                                </div>
                                                <div class="ms-auto align-self-center text-white">
                                                    <h2 class="fs-7 mb-0 text-white">200</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                        <h4 class="card-title">SKM Perpolda</h4>
                                        <div id="chart-polda"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Dugaan pelanggaran</h4>
                                            <div id="pie-pelanggaran"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Penanganan</h4>
                                            <div id="pie-penanganan"></div>
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
</div>
';
	}


	/** {block js} on line 454 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 455 */;
		echo '/assets/admin/libs/apexcharts/dist/apexcharts.min.js"></script>
<script>

document.addEventListener("DOMContentLoaded", function () {
    
    var barSKMPoldaOpsi = {
        series: [
            {
                data: [1380, 1200, 1100, 690, 580, 540, 470, 448, 430, 400],
            },
        ],
        chart: {
            fontFamily: "inherit",
            type: "bar",
            height:500,
            toolbar: {
                show: false,
            },
        },
        grid: {
            borderColor: "transparent",
        },
        colors: ["var(--bs-primary)"],
        plotOptions: {
            bar: {
                horizontal: true,
                borderRadius: 5,
            },
        },

        dataLabels: {
            enabled: false,
        },

        legend: {
            show: false,
        },

        xaxis: {
            categories: [
                "Polda 1",
                "Polda 2",
                "Polda 3",
                "Polda 4",
                "Polda 5",
                "Polda 6",
                "Polda 7",
                "Polda 8",
                "Polda 9",
                "Polda 10",
            ],
            labels: {
                style: {
                    colors: [
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                    ],
                },
            },
        },
        yaxis: {
            labels: {
                style: {
                    colors: [
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                        "#a1aab2",
                    ],
                },
            },
        },
        tooltip: {
            theme: "dark",
        },
    };

    var barSKMPolda = new ApexCharts(
        document.querySelector("#chart-polda"),
        barSKMPoldaOpsi
    );

    barSKMPolda.render();







    var pieDugaanPelanggaranOpsi = {
        series: [44, 55, 13, 43, 22],
        chart: {
            fontFamily: "inherit",
            width: 380,
            type: "pie",
        },
        colors: [
            "var(--bs-primary)",
            "var(--bs-secondary)",
            "#ffae1f",
            "#fa896b",
            "#39b69a",
        ],
        labels: ["Team A", "Team B", "Team C", "Team D", "Team E"],
        responsive: [
        {
            breakpoint: 480,
            options: {
            chart: {
                width: 200,
            },
            legend: {
                position: "bottom",
            },
            },
        },
        ],
        legend: {
        labels: {
            colors: ["#a1aab2"],
        },
        },
    };

    var pieDugaanPelanggaran = new ApexCharts(
        document.querySelector("#pie-pelanggaran"),
        pieDugaanPelanggaranOpsi
    );

    pieDugaanPelanggaran.render();




    var pieDugaanPenangananOpsi = {
        series: [44, 55, 13, 43, 22],
        chart: {
            fontFamily: "inherit",
            width: 380,
            type: "pie",
        },
        colors: [
            "var(--bs-primary)",
            "var(--bs-secondary)",
            "#ffae1f",
            "#fa896b",
            "#39b69a",
        ],
        labels: ["Team A", "Team B", "Team C", "Team D", "Team E"],
        responsive: [
        {
            breakpoint: 480,
            options: {
            chart: {
                width: 200,
            },
            legend: {
                position: "bottom",
            },
            },
        },
        ],
        legend: {
        labels: {
            colors: ["#a1aab2"],
        },
        },
    };

    var pieDugaanPenanganan = new ApexCharts(
        document.querySelector("#pie-penanganan"),
        pieDugaanPenangananOpsi
    );

    pieDugaanPenanganan.render();
});
</script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 648 */;
		echo 'assets/admin/libs/fullcalendar/index.global.min.js"></script>
<script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 649 */;
		echo 'assets/admin/js/apps/calendar-init.js"></script>
';
	}
}
