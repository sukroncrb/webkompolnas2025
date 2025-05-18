<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/php/abiesoft/vendor/abiesoft/Http/../../../templates/admin/tugas/otentikasi/index.latte */
final class Template_02819e786b extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/php/abiesoft/vendor/abiesoft/Http/../../../templates/admin/tugas/otentikasi/index.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('content', get_defined_vars()) /* line 2 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = '../../main.latte';
		return get_defined_vars();
	}


	/** {block content} on line 2 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class=\'body-wrapper\'>
    <div class=\'container-fluid\'>
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Otentikasi</h4>
                        <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a class="text-muted text-decoration-none" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 13 */;
		echo LR\Filters::escapeHtmlAttr($prefix_dashboard) /* line 13 */;
		echo '/tugas?p=otentikasi">Otentikasi</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">List</li>
                        </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5" style=\'min-height: 150px;\'>
                            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 21 */;
		echo '/assets/admin/images/custom-apps/icons/otentikasi-icon.png" alt="modernize-img" class="img-fluid mb-n4" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        



        <div class="card overflow-hidden chat-application">
            <div class="d-flex align-items-center justify-content-between gap-6 m-3 d-lg-none">
                <button class="btn btn-primary d-flex" type="button" data-bs-toggle="offcanvas" data-bs-target="#chat-sidebar" aria-controls="chat-sidebar">
                    <i class="ti ti-menu-2 fs-5"></i>
                </button>
                <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search Contact" />
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
            </div>
            <div class="d-flex w-100">
                <div class="left-part border-end w-20 flex-shrink-0 d-none d-lg-block">
                    <ul class="list-group mh-n100" data-simplebar>
                        <li class="list-group-item border-0 p-0 mx-9 mt-9">
                            <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                                <i class="ti ti-arrow-right fs-5"></i>Baru
                                <span class=\'badge ms-auto text-bg-primary\'>0</span>
                            </a>
                        </li>
                        <li class="list-group-item border-0 p-0 mx-9 mt-9">
                            <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                                <i class="ti ti-arrows-right-left fs-5"></i>Refisi
                                <span class=\'badge ms-auto text-bg-primary\'>0</span>
                            </a>
                        </li>
                        <li class="border-bottom my-3"></li>
                        <li class="fw-semibold text-dark text-uppercase mx-9 my-2 px-3 fs-2">
                          LABELS
                        </li>
                        <li class="list-group-item border-0 p-0 mx-9">
                            <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                                <i class="ti ti-bookmark fs-5 text-primary"></i>Surat Klarifikasi
                            </a>
                        </li>
                        <li class="list-group-item border-0 p-0 mx-9">
                            <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                                <i class="ti ti-bookmark fs-5 text-warning"></i>Surat Tembusan
                            </a>
                        </li>
                        <li class="list-group-item border-0 p-0 mx-9">
                            <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                                <i class="ti ti-bookmark fs-5 text-success"></i>Surat Informasi
                            </a>
                        </li>
                        <li class="list-group-item border-0 p-0 mx-9">
                            <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                                <i class="ti ti-bookmark fs-5 text-danger"></i>Surat Info Jawaban
                            </a>
                        </li>
                    </ul>
                </div>






              
              <div class="d-flex w-100">
                <div class="min-width-340">
                  <div class="border-end user-chat-box h-100">
                    <div class="px-4 pt-9 pb-6 d-none d-lg-block">
                      <form class="position-relative">
                        <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search" />
                        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                      </form>
                    </div>
                    <div class="app-chat">
                      <ul class="chat-users mh-n100" data-simplebar>
                        
                        <li>
                          <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-start chat-user hover:bg-light-subtle" id="chat_user_1" data-user-id="1">
                            <div class="position-relative w-100 ms-2">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                  <h6 class="mb-0">1/1/RES/I/2025</h6>
                                  <span class="badge text-bg-warning">Tembusan</span>
                                </div>
                                <h6 class="fw-semibold text-dark">
                                  Surat Info Tembusan Atas Nama Tompson
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                  <p class="mb-0 fs-2 text-muted">Barusaja</p>
                                </div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-start chat-user hover:bg-light-subtle" id="chat_user_1" data-user-id="1">
                            <div class="position-relative w-100 ms-2">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                  <h6 class="mb-0">1/1/RES/I/2025</h6>
                                  <span class="badge text-bg-primary">Klarifikasi</span>
                                </div>
                                <h6 class="fw-semibold text-dark">
                                  Surat Permohonan Klarifikasi Atas Nama Tompson
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                  <p class="mb-0 fs-2 text-muted">Barusaja</p>
                                </div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-start chat-user hover:bg-light-subtle" id="chat_user_1" data-user-id="1">
                            <div class="position-relative w-100 ms-2">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                  <h6 class="mb-0">1/1/RES/I/2025</h6>
                                  <span class="badge text-bg-success">Informasi</span>
                                </div>
                                <h6 class="fw-semibold text-dark">
                                  Surat Informasi Permohonan Klarifikasi Atas Nama Tompson
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                  <p class="mb-0 fs-2 text-muted">Barusaja</p>
                                </div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class="px-4 py-3 bg-hover-light-black d-flex align-items-start chat-user hover:bg-light-subtle" id="chat_user_1" data-user-id="1">
                            <div class="position-relative w-100 ms-2">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                  <h6 class="mb-0">1/1/RES/I/2025</h6>
                                  <span class="badge text-bg-danger">Jawaban</span>
                                </div>
                                <h6 class="fw-semibold text-dark">
                                  Surat Informasi Jawaban Atas Nama Tompson
                                </h6>
                                <div class="d-flex align-items-center justify-content-between">
                                  <p class="mb-0 fs-2 text-muted">Barusaja</p>
                                </div>
                            </div>
                          </a>
                        </li>
                        
                      </ul>
                    </div>
                  </div>
                </div>


                <div class="w-100">
                  <div class="chat-container h-100 w-100">
                    <div class="chat-box-inner-part h-100">
                      <div class="chatting-box app-email-chatting-box">
                        <div class="p-9 py-3 border-bottom chat-meta-user">
                          <ul class="list-unstyled mb-0 d-flex align-items-center">
                            <li class="d-lg-none d-block">
                              <a class="text-dark back-btn px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5" href="javascript:void(0)">
                                <i class="ti ti-arrow-left"></i>
                              </a>
                            </li>
                            <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Star">
                              <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5" href="javascript:void(0)">
                                <i class="ti ti-star"></i>
                              </a>
                            </li>
                            <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="important">
                              <a class="d-block text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5" href="javascript:void(0)">
                                <i class="ti ti-alert-circle"></i>
                              </a>
                            </li>
                            <li class="position-relative" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete">
                              <a class="text-dark px-2 fs-5 bg-hover-primary nav-icon-hover position-relative z-index-5" href="javascript:void(0)">
                                <i class="ti ti-trash"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        
                        
                        
                        
                        <div class="position-relative overflow-hidden">
                          <div class="position-relative">
                            <div class="chat-box email-box mh-n100 p-9" data-simplebar="init">
                              <div class="chat-list chat active-chat" data-user-id="1">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between flex-wrap gap-6">
                                  <div class="d-flex align-items-center gap-2">
                                    <img src="../assets/images/profile/user-8.jpg" alt="user8" width="48" height="48" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold mb-0">
                                        James Smith
                                      </h6>
                                      <p class="mb-0">hello@loremipsum.com</p>
                                    </div>
                                  </div>
                                  <span class="badge text-bg-primary">Promotional</span>
                                </div>
                                <div class="border-bottom pb-7 mb-7">
                                  <h4 class="fw-semibold text-dark mb-3">
                                    Kindly check this latest updated
                                  </h4>
                                  <p class="mb-3 text-dark">Hello Andrew,</p>
                                  <p class="mb-3 text-dark">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Quisque bibendum
                                    hendrerit lobortis. Nullam ut lacus eros.
                                    Sed at luctus urna, eu fermentum diam. In
                                    et tristique mauris.
                                  </p>
                                  <p class="mb-3 text-dark">
                                    Ut id ornare metus, sed auctor enim.
                                    Pellentesque nisi magna, laoreet a augue
                                    eget, tempor volutpat diam.
                                  </p>
                                  <p class="mb-0 text-dark">Regards,</p>
                                  <h6 class="fw-semibold mb-0 text-dark pb-1">
                                    James Smith
                                  </h6>
                                </div>
                                <div class="mb-3">
                                  <h6 class="fw-semibold mb-0 text-dark mb-3">
                                    Attachments
                                  </h6>
                                  <div class="d-block d-sm-flex align-items-center gap-4">
                                    <a href="javascript:void(0)" class="hstack gap-3 mb-2 mb-sm-0">
                                      <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-1 text-bg-light p-6">
                                          <img src="../assets/images/chat/icon-adobe.svg" alt="matdash-img" width="24" height="24" />
                                        </div>
                                        <div>
                                          <h6 class="fw-semibold">
                                            service-task.pdf
                                          </h6>
                                          <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                            <span>2 MB</span>
                                            <span>2 Dec 2024</span>
                                          </div>
                                        </div>
                                      </div>
                                    </a>
                                    <a href="javascript:void(0)" class="hstack gap-3 file-chat-hover">
                                      <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-1 text-bg-light p-6">
                                          <img src="../assets/images/chat/icon-zip-folder.svg" alt="matdash-img" width="24" height="24" />
                                        </div>
                                        <div>
                                          <h6 class="fw-semibold">
                                            work-project.zip
                                          </h6>
                                          <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                            <span>2 MB</span>
                                            <span>2 Dec 2024</span>
                                          </div>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="chat-list chat" data-user-id="2">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between flex-wrap gap-6">
                                  <div class="d-flex align-items-center gap-2">
                                    <img src="../assets/images/profile/user-5.jpg" alt="user8" width="48" height="48" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold mb-0">
                                        Katherine Flintoff
                                      </h6>
                                      <p class="mb-0">hello@loremipsum.com</p>
                                    </div>
                                  </div>
                                  <span class="badge text-bg-danger">Social</span>
                                </div>
                                <div class="border-bottom pb-7 mb-7">
                                  <h4 class="fw-semibold text-dark mb-3">
                                    Kindly check this latest updated
                                  </h4>
                                  <p class="mb-3 text-dark">Hello Andrew,</p>
                                  <p class="mb-3 text-dark">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Quisque bibendum
                                    hendrerit lobortis. Nullam ut lacus eros.
                                    Sed at luctus urna, eu fermentum diam. In
                                    et tristique mauris.
                                  </p>
                                  <p class="mb-3 text-dark">
                                    Ut id ornare metus, sed auctor enim.
                                    Pellentesque nisi magna, laoreet a augue
                                    eget, tempor volutpat diam.
                                  </p>
                                  <p class="mb-0 text-dark">Regards,</p>
                                  <h6 class="fw-semibold mb-0 text-dark pb-1">
                                    Katherine Flintoff
                                  </h6>
                                </div>
                                <div class="mb-3">
                                  <h6 class="fw-semibold mb-0 text-dark mb-3">
                                    Attachments
                                  </h6>
                                  <div class="d-block d-sm-flex align-items-center gap-4">
                                    <a href="javascript:void(0)" class="hstack gap-3 mb-2 mb-sm-0">
                                      <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-1 text-bg-light p-6">
                                          <img src="../assets/images/chat/icon-adobe.svg" alt="matdash-img" width="24" height="24" />
                                        </div>
                                        <div>
                                          <h6 class="fw-semibold">
                                            service-task.pdf
                                          </h6>
                                          <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                            <span>2 MB</span>
                                            <span>2 Dec 2024</span>
                                          </div>
                                        </div>
                                      </div>
                                    </a>
                                    <a href="javascript:void(0)" class="hstack gap-3 file-chat-hover">
                                      <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-1 text-bg-light p-6">
                                          <img src="../assets/images/chat/icon-zip-folder.svg" alt="matdash-img" width="24" height="24" />
                                        </div>
                                        <div>
                                          <h6 class="fw-semibold">
                                            work-project.zip
                                          </h6>
                                          <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                            <span>2 MB</span>
                                            <span>2 Dec 2024</span>
                                          </div>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="chat-list chat" data-user-id="3">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between flex-wrap gap-6">
                                  <div class="d-flex align-items-center gap-2">
                                    <img src="../assets/images/profile/user-3.jpg" alt="user8" width="48" height="48" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold mb-0">
                                        Bianca Macdowells
                                      </h6>
                                      <p class="mb-0">hello@loremipsum.com</p>
                                    </div>
                                  </div>
                                  <span class="badge text-bg-success">Health</span>
                                </div>
                                <div class="border-bottom pb-7 mb-7">
                                  <h4 class="fw-semibold text-dark mb-3">
                                    Kindly check this latest updated
                                  </h4>
                                  <p class="mb-3 text-dark">Hello Andrew,</p>
                                  <p class="mb-3 text-dark">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Quisque bibendum
                                    hendrerit lobortis. Nullam ut lacus eros.
                                    Sed at luctus urna, eu fermentum diam. In
                                    et tristique mauris.
                                  </p>
                                  <p class="mb-3 text-dark">
                                    Ut id ornare metus, sed auctor enim.
                                    Pellentesque nisi magna, laoreet a augue
                                    eget, tempor volutpat diam.
                                  </p>
                                  <p class="mb-0 text-dark">Regards,</p>
                                  <h6 class="fw-semibold mb-0 text-dark pb-1">
                                    Bianca Macdowells
                                  </h6>
                                </div>
                                <div class="mb-3">
                                  <h6 class="fw-semibold mb-0 text-dark mb-3">
                                    Attachments
                                  </h6>
                                  <div class="d-block d-sm-flex align-items-center gap-4">
                                    <a href="javascript:void(0)" class="hstack gap-3 mb-2 mb-sm-0">
                                      <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-1 text-bg-light p-6">
                                          <img src="../assets/images/chat/icon-adobe.svg" alt="matdash-img" width="24" height="24" />
                                        </div>
                                        <div>
                                          <h6 class="fw-semibold">
                                            service-task.pdf
                                          </h6>
                                          <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                            <span>2 MB</span>
                                            <span>2 Dec 2024</span>
                                          </div>
                                        </div>
                                      </div>
                                    </a>
                                    <a href="javascript:void(0)" class="hstack gap-3 file-chat-hover">
                                      <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-1 text-bg-light p-6">
                                          <img src="../assets/images/chat/icon-zip-folder.svg" alt="matdash-img" width="24" height="24" />
                                        </div>
                                        <div>
                                          <h6 class="fw-semibold">
                                            work-project.zip
                                          </h6>
                                          <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                            <span>2 MB</span>
                                            <span>2 Dec 2024</span>
                                          </div>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="chat-list chat" data-user-id="4">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between flex-wrap gap-6">
                                  <div class="d-flex align-items-center gap-2">
                                    <img src="../assets/images/profile/user-3.jpg" alt="user8" width="48" height="48" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold mb-0">
                                        Michael Knight
                                      </h6>
                                      <p class="mb-0">hello@loremipsum.com</p>
                                    </div>
                                  </div>
                                  <span class="badge text-bg-primary">Social</span>
                                </div>
                                <div class="border-bottom pb-7 mb-7">
                                  <h4 class="fw-semibold text-dark mb-3">
                                    Kindly check this latest updated
                                  </h4>
                                  <p class="mb-3 text-dark">Hello Andrew,</p>
                                  <p class="mb-3 text-dark">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Quisque bibendum
                                    hendrerit lobortis. Nullam ut lacus eros.
                                    Sed at luctus urna, eu fermentum diam. In
                                    et tristique mauris.
                                  </p>
                                  <p class="mb-3 text-dark">
                                    Ut id ornare metus, sed auctor enim.
                                    Pellentesque nisi magna, laoreet a augue
                                    eget, tempor volutpat diam.
                                  </p>
                                  <p class="mb-0 text-dark">Regards,</p>
                                  <h6 class="fw-semibold mb-0 text-dark pb-1">
                                    Michael Knight
                                  </h6>
                                </div>
                                <div class="mb-3">
                                  <h6 class="fw-semibold mb-0 text-dark mb-3">
                                    Attachments
                                  </h6>
                                  <div class="d-block d-sm-flex align-items-center gap-4">
                                    <a href="javascript:void(0)" class="hstack gap-3 mb-2 mb-sm-0">
                                      <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-1 text-bg-light p-6">
                                          <img src="../assets/images/chat/icon-adobe.svg" alt="matdash-img" width="24" height="24" />
                                        </div>
                                        <div>
                                          <h6 class="fw-semibold">
                                            service-task.pdf
                                          </h6>
                                          <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                            <span>2 MB</span>
                                            <span>2 Dec 2024</span>
                                          </div>
                                        </div>
                                      </div>
                                    </a>
                                    <a href="javascript:void(0)" class="hstack gap-3 file-chat-hover">
                                      <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-1 text-bg-light p-6">
                                          <img src="../assets/images/chat/icon-zip-folder.svg" alt="matdash-img" width="24" height="24" />
                                        </div>
                                        <div>
                                          <h6 class="fw-semibold">
                                            work-project.zip
                                          </h6>
                                          <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                            <span>2 MB</span>
                                            <span>2 Dec 2024</span>
                                          </div>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="chat-list chat" data-user-id="5">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between flex-wrap gap-6">
                                  <div class="d-flex align-items-center gap-2">
                                    <img src="../assets/images/profile/user-11.jpg" alt="user8" width="48" height="48" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold mb-0">
                                        Jonathan Higgings
                                      </h6>
                                      <p class="mb-0">hello@loremipsum.com</p>
                                    </div>
                                  </div>
                                  <span class="badge text-bg-primary">Promotional</span>
                                </div>
                                <div class="border-bottom pb-7 mb-7">
                                  <h4 class="fw-semibold text-dark mb-3">
                                    Kindly check this latest updated
                                  </h4>
                                  <p class="mb-3 text-dark">Hello Andrew,</p>
                                  <p class="mb-3 text-dark">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Quisque bibendum
                                    hendrerit lobortis. Nullam ut lacus eros.
                                    Sed at luctus urna, eu fermentum diam. In
                                    et tristique mauris.
                                  </p>
                                  <p class="mb-3 text-dark">
                                    Ut id ornare metus, sed auctor enim.
                                    Pellentesque nisi magna, laoreet a augue
                                    eget, tempor volutpat diam.
                                  </p>
                                  <p class="mb-0 text-dark">Regards,</p>
                                  <h6 class="fw-semibold mb-0 text-dark pb-1">
                                    Jonathan Higgings
                                  </h6>
                                </div>
                                <div class="mb-3">
                                  <h6 class="fw-semibold mb-0 text-dark mb-3">
                                    Attachments
                                  </h6>
                                  <div class="d-block d-sm-flex align-items-center gap-4">
                                    <a href="javascript:void(0)" class="hstack gap-3 mb-2 mb-sm-0">
                                      <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-1 text-bg-light p-6">
                                          <img src="../assets/images/chat/icon-adobe.svg" alt="matdash-img" width="24" height="24" />
                                        </div>
                                        <div>
                                          <h6 class="fw-semibold">
                                            service-task.pdf
                                          </h6>
                                          <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                            <span>2 MB</span>
                                            <span>2 Dec 2024</span>
                                          </div>
                                        </div>
                                      </div>
                                    </a>
                                    <a href="javascript:void(0)" class="hstack gap-3 file-chat-hover">
                                      <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-1 text-bg-light p-6">
                                          <img src="../assets/images/chat/icon-zip-folder.svg" alt="matdash-img" width="24" height="24" />
                                        </div>
                                        <div>
                                          <h6 class="fw-semibold">
                                            work-project.zip
                                          </h6>
                                          <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                            <span>2 MB</span>
                                            <span>2 Dec 2024</span>
                                          </div>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="chat-list chat" data-user-id="6">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between flex-wrap gap-6">
                                  <div class="d-flex align-items-center gap-2">
                                    <img src="../assets/images/profile/user-5.jpg" alt="user8" width="48" height="48" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold mb-0">
                                        Mike Torello
                                      </h6>
                                      <p class="mb-0">hello@loremipsum.com</p>
                                    </div>
                                  </div>
                                  <span class="badge text-bg-primary">Health</span>
                                </div>
                                <div class="border-bottom pb-7 mb-7">
                                  <h4 class="fw-semibold text-dark mb-3">
                                    Kindly check this latest updated
                                  </h4>
                                  <p class="mb-3 text-dark">Hello Andrew,</p>
                                  <p class="mb-3 text-dark">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Quisque bibendum
                                    hendrerit lobortis. Nullam ut lacus eros.
                                    Sed at luctus urna, eu fermentum diam. In
                                    et tristique mauris.
                                  </p>
                                  <p class="mb-3 text-dark">
                                    Ut id ornare metus, sed auctor enim.
                                    Pellentesque nisi magna, laoreet a augue
                                    eget, tempor volutpat diam.
                                  </p>
                                  <p class="mb-0 text-dark">Regards,</p>
                                  <h6 class="fw-semibold mb-0 text-dark pb-1">
                                    Mike Torello
                                  </h6>
                                </div>
                                <div class="mb-3">
                                  <h6 class="fw-semibold mb-0 text-dark mb-3">
                                    Attachments
                                  </h6>
                                  <div class="d-block d-sm-flex align-items-center gap-4">
                                    <a href="javascript:void(0)" class="hstack gap-3 mb-2 mb-sm-0">
                                      <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-1 text-bg-light p-6">
                                          <img src="../assets/images/chat/icon-adobe.svg" alt="matdash-img" width="24" height="24" />
                                        </div>
                                        <div>
                                          <h6 class="fw-semibold">
                                            service-task.pdf
                                          </h6>
                                          <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                            <span>2 MB</span>
                                            <span>2 Dec 2024</span>
                                          </div>
                                        </div>
                                      </div>
                                    </a>
                                    <a href="javascript:void(0)" class="hstack gap-3 file-chat-hover">
                                      <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-1 text-bg-light p-6">
                                          <img src="../assets/images/chat/icon-zip-folder.svg" alt="matdash-img" width="24" height="24" />
                                        </div>
                                        <div>
                                          <h6 class="fw-semibold">
                                            work-project.zip
                                          </h6>
                                          <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                            <span>2 MB</span>
                                            <span>2 Dec 2024</span>
                                          </div>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="chat-list chat" data-user-id="7">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between flex-wrap gap-6">
                                  <div class="d-flex align-items-center gap-2">
                                    <img src="../assets/images/profile/user-6.jpg" alt="user8" width="48" height="48" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold mb-0">
                                        Bianca Macdowells
                                      </h6>
                                      <p class="mb-0">hello@loremipsum.com</p>
                                    </div>
                                  </div>
                                  <span class="badge text-bg-success">Health</span>
                                </div>
                                <div class="border-bottom pb-7 mb-7">
                                  <h4 class="fw-semibold text-dark mb-3">
                                    Kindly check this latest updated
                                  </h4>
                                  <p class="mb-3 text-dark">Hello Andrew,</p>
                                  <p class="mb-3 text-dark">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Quisque bibendum
                                    hendrerit lobortis. Nullam ut lacus eros.
                                    Sed at luctus urna, eu fermentum diam. In
                                    et tristique mauris.
                                  </p>
                                  <p class="mb-3 text-dark">
                                    Ut id ornare metus, sed auctor enim.
                                    Pellentesque nisi magna, laoreet a augue
                                    eget, tempor volutpat diam.
                                  </p>
                                  <p class="mb-0 text-dark">Regards,</p>
                                  <h6 class="fw-semibold mb-0 text-dark pb-1">
                                    Bianca Macdowells
                                  </h6>
                                </div>
                                <div class="mb-3">
                                  <h6 class="fw-semibold mb-0 text-dark mb-3">
                                    Attachments
                                  </h6>
                                  <div class="d-block d-sm-flex align-items-center gap-4">
                                    <a href="javascript:void(0)" class="hstack gap-3 mb-2 mb-sm-0">
                                      <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-1 text-bg-light p-6">
                                          <img src="../assets/images/chat/icon-adobe.svg" alt="matdash-img" width="24" height="24" />
                                        </div>
                                        <div>
                                          <h6 class="fw-semibold">
                                            service-task.pdf
                                          </h6>
                                          <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                            <span>2 MB</span>
                                            <span>2 Dec 2024</span>
                                          </div>
                                        </div>
                                      </div>
                                    </a>
                                    <a href="javascript:void(0)" class="hstack gap-3 file-chat-hover">
                                      <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-1 text-bg-light p-6">
                                          <img src="../assets/images/chat/icon-zip-folder.svg" alt="matdash-img" width="24" height="24" />
                                        </div>
                                        <div>
                                          <h6 class="fw-semibold">
                                            work-project.zip
                                          </h6>
                                          <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                            <span>2 MB</span>
                                            <span>2 Dec 2024</span>
                                          </div>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                              <div class="chat-list chat" data-user-id="8">
                                <div class="hstack align-items-start mb-7 pb-1 align-items-center justify-content-between flex-wrap gap-6">
                                  <div class="d-flex align-items-center gap-2">
                                    <img src="../assets/images/profile/user-7.jpg" alt="user8" width="48" height="48" class="rounded-circle" />
                                    <div>
                                      <h6 class="fw-semibold mb-0">
                                        Michael Knight
                                      </h6>
                                      <p class="mb-0">hello@loremipsum.com</p>
                                    </div>
                                  </div>
                                  <span class="badge text-bg-primary">Social</span>
                                </div>
                                <div class="border-bottom pb-7 mb-7">
                                  <h4 class="fw-semibold text-dark mb-3">
                                    Kindly check this latest updated
                                  </h4>
                                  <p class="mb-3 text-dark">Hello Andrew,</p>
                                  <p class="mb-3 text-dark">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. Quisque bibendum
                                    hendrerit lobortis. Nullam ut lacus eros.
                                    Sed at luctus urna, eu fermentum diam. In
                                    et tristique mauris.
                                  </p>
                                  <p class="mb-3 text-dark">
                                    Ut id ornare metus, sed auctor enim.
                                    Pellentesque nisi magna, laoreet a augue
                                    eget, tempor volutpat diam.
                                  </p>
                                  <p class="mb-0 text-dark">Regards,</p>
                                  <h6 class="fw-semibold mb-0 text-dark pb-1">
                                    Michael Knight
                                  </h6>
                                </div>
                                <div class="mb-3">
                                  <h6 class="fw-semibold mb-0 text-dark mb-3">
                                    Attachments
                                  </h6>
                                  <div class="d-block d-sm-flex align-items-center gap-4">
                                    <a href="javascript:void(0)" class="hstack gap-3 mb-2 mb-sm-0">
                                      <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-1 text-bg-light p-6">
                                          <img src="../assets/images/chat/icon-adobe.svg" alt="matdash-img" width="24" height="24" />
                                        </div>
                                        <div>
                                          <h6 class="fw-semibold">
                                            service-task.pdf
                                          </h6>
                                          <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                            <span>2 MB</span>
                                            <span>2 Dec 2024</span>
                                          </div>
                                        </div>
                                      </div>
                                    </a>
                                    <a href="javascript:void(0)" class="hstack gap-3 file-chat-hover">
                                      <div class="d-flex align-items-center gap-3">
                                        <div class="rounded-1 text-bg-light p-6">
                                          <img src="../assets/images/chat/icon-zip-folder.svg" alt="matdash-img" width="24" height="24" />
                                        </div>
                                        <div>
                                          <h6 class="fw-semibold">
                                            work-project.zip
                                          </h6>
                                          <div class="d-flex align-items-center gap-3 fs-2 text-muted">
                                            <span>2 MB</span>
                                            <span>2 Dec 2024</span>
                                          </div>
                                        </div>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="px-9 py-3 border-top chat-send-message-footer">
                              <div class="d-flex align-items-center justify-content-between">
                                <ul class="list-unstyled mb-0 d-flex align-items-center gap-7">
                                  <li>
                                    <a class="text-dark bg-hover-primary d-flex align-items-center gap-1" href="javascript:void(0)">
                                      <i class="ti ti-arrow-back-up fs-5"></i>
                                      Reply
                                    </a>
                                  </li>
                                  <li>
                                    <a class="text-dark bg-hover-primary d-flex align-items-center gap-1" href="javascript:void(0)">
                                      <i class="ti ti-arrow-forward-up fs-5"></i>
                                      Forward
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>










                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="offcanvas offcanvas-start user-chat-box" tabindex="-1" id="chat-sidebar" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasExampleLabel">
                    Otentikasi
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <ul class="list-group h-n150" data-simplebar>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                        <i class="ti ti-arrow-right fs-5"></i>Baru
                        <span class=\'badge ms-auto text-bg-primary\'>0</span>
                    </a>
                  </li>
                  <li class="border-bottom my-3"></li>
                  <li class="fw-semibold text-dark text-uppercase mx-9 my-2 px-3 fs-2">
                    LABELS
                  </li>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                      <i class="ti ti-bookmark fs-5 text-primary"></i>Promotional
                    </a>
                  </li>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                      <i class="ti ti-bookmark fs-5 text-warning"></i>Social
                    </a>
                  </li>
                  <li class="list-group-item border-0 p-0 mx-9">
                    <a class="d-flex align-items-center gap-6 list-group-item-action text-dark px-3 py-8 mb-1 rounded-1" href="javascript:void(0)">
                      <i class="ti ti-bookmark fs-5 text-success"></i>Health
                    </a>
                  </li>
                </ul>
              </div>
            </div>



    </div>
</div>
';
	}
}
