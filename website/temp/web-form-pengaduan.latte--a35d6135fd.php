<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/web/form/pengaduan.latte */
final class Template_a35d6135fd extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/web/form/pengaduan.latte';

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
		$this->renderBlock('js', get_defined_vars()) /* line 105 */;
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
		echo 'assets/web/css/carousel.css" />
';
	}


	/** {block content} on line 5 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<section>
    <div class="banner">
        <div class="container konten">
            <div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 12 */;
		echo '\'><span>Home</span></a></li>
                        <li><span>Pengaduan</span></li>
                    </ul>
                </div>
                <h3>';
		echo LR\Filters::escapeHtmlText($title) /* line 16 */;
		echo '</h1>
            </div>
        </div>
    </div>
    <div class="container konten page">
        <div>
            <form class="max-w-lg mx-auto" id="formInput" name="formInput">
                <div id="msgformInput"></div>
                <div class="mb-5">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" class="form-control" placeholder="email@email.com" data-label="Email"/>
                    <small>Pastikan email yang digunakan adalah email aktif.</small>
                </div>
                <div class="hr"><span>Info Pengadu</span></div>
                <div class="mb-5">
                    <label for="noktp" class="form-label">Nomor KTP</label>
                    <input id="noktp" name="noktp" class="form-control" data-label="Nomor KTP" maxLength="16"/>
                </div>
                <div class="mb-5">
                    <label for="nama" class="form-label">Nama</label>
                    <input id="nama" name="nama" class="form-control" data-label="Nama"/>
                </div>
                <div class="grid grid-cols-2 grid-rows-1 gap-6">
                    <div class="mb-5">
                        <label for="tempatlahir" class="form-label">Tempat Lahir</label>
                        <input id="tempatlahir" name="tempatlahir" class="form-control" data-label="Tempat lahir"/>
                    </div>
                    <div class="mb-5">
                        <label for="tgllahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" id="tgllahir" name="tgllahir" class="form-control" data-label="Tanggal lahir"/>
                    </div>
                </div>
                <div class="mb-5">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea id="alamat" name="alamat" class="form-control" data-label="Alamat"></textarea>
                </div>
                <div class="mb-5">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input id="pekerjaan" name="pekerjaan" class="form-control" data-label="Pekerjaan"/>
                </div>
                <div class="mb-5">
                    <label for="nohp" class="form-label">Nomor Hp.</label>
                    <input id="nohp" name="nohp" class="form-control" data-label="Nomor Hp"/>
                </div>

                <div class="hr"><span>Info Laporan</span></div>
                <div class="mb-5">
                    <label for="satuanterlapor" class="form-label">Keterangan tentang anggota/ pejabat terlapor/ kesatuan pelapor (contoh: Mabes/Polda/Polres/Polsek)</label>
                    <textarea id="satuanterlapor" name="satuanterlapor" class="form-control" data-label="Satuan terlapor"></textarea>
                </div>
                <div class="mb-5">
                    <label for="namaterlapor" class="form-label">Nama dan pejabat terlapor</label>
                    <textarea id="namaterlapor" name="namaterlapor" class="form-control" data-label="Nama terlapor"></textarea>
                </div>
                <div class="mb-5">
                    <label for="bentukperbuatan" class="form-label">Bentuk perbuatan/ pasal</label>
                    <textarea id="bentukperbuatan" name="bentukperbuatan" class="form-control min-h-[100px]" data-label="Bentuk perbuatan"></textarea>
                </div>
                <div class="mb-5">
                    <label for="kerugian" class="form-label">Kerugian yang dialami</label>
                    <textarea id="kerugian" name="kerugian" class="form-control min-h-[100px]" data-label="Kerugian"></textarea>
                </div>
                <div class="mb-5">
                    <label for="kronologi" class="form-label">Kronologi singkat apa yang dikeluhkan</label>
                    <textarea id="kronologi" name="kronologi" class="form-control min-h-[200px]" data-label="Kronologi"></textarea>
                </div>

                <div class="hr"><span>Dokumen</span></div>
                <div class="mb-5">
                    <label for="dokumen" class="form-label">Upload dokumen ktp pengadu dan kelengkapan berkas pengaduan yang diperlukan seperti LP jika ada, lalu satukan berkas ke dalam satu bentuk file pdf</label>
                    <input type=\'file\' id="dokumen" name="dokumen" class="form-control" accept="application/pdf" data-label="Dokumen"/>
                </div>

                <div class="hr"><span>Pernyataan</span></div>
                <div class="flex items-start mb-5">
                    <div class="flex items-center h-5">
                    <input id="konfirmasi" name="konfirmasi" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"/>
                    </div>
                    <label for="konfirmasi" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Menyatakan bahwa data ini benar</label>
                </div>
                <input type=\'hidden\' id=\'tipe\' name=\'tipe\' value=\'PENGADUAN\'>
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 cursor-pointer">Kirim</button>
            </form>

        </div>
    </div>
</section>
';
	}


	/** {block js} on line 105 */
	public function blockJs(array $ʟ_args): void
	{
		echo '<script>
el(\'#formInput\').onsubmit = (e) => {
    e.preventDefault();
    const fid = "formInput";
    const field = [
        \'email|setEmail\',
        \'noktp|setKtp\',
        \'nama|setText\',
        \'tempatlahir|setText\',
        \'tgllahir|setText\',
        \'alamat|setText\',
        \'pekerjaan|setText\',
        \'nohp|setText\',
        \'satuanterlapor|setText\',
        \'namaterlapor|setText\',
        \'bentukperbuatan|setText\',
        \'kerugian|setText\',
        \'kronologi|setText\',
        \'dokumen|setText\',
    ];
    const form = el(\'form[id="\'+fid+\'"]\');
    const formData = new FormData(form);
    const message = el("#msg"+fid);


    if(validasi({
        fid: fid,
        field: field
    })){

        if(el("#konfirmasi").checked == false){
            message.innerHTML = `
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Konfirmasi</strong>
                    <span class="block sm:inline">Belum dicentang</span>
                </div>
            `;
            window.scrollTo({ top: 0, behavior: \'smooth\' });
        }else{
            fetch(baseurl + \'api/form\', {
                method: \'POST\',
                headers: {
                    \'x-api-key\': apikey,
                    \'tipe\' : \'web\'
                },
                body: formData
            }).then(response => response.json()).then(result => {
                if(result.code == 200){
                    message.innerHTML = `
                        <div class="text-center bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                            <strong class="font-bold block my-4">Pengaduan anda sudah terkirim</strong>
                            <div class="block">
                                Terima kasih sudah mengirimkan pengaduan.
                            </div>
                            <div class="block">Untuk informasi pengaduan anda selanjutnya akan diinfokan melaluli email <a href=\'mailto:`+el("#email").value+`\'><strong class="font-bold">`+el("#email").value+`</strong></a> 
                            </div>
                            <div class=\'block mb-4\'>Silahkan cek email anda secara berkala.</div>
                        </div>
                    `;
                    el("#email").value = "";
                    el("#noktp").value = "";
                    el("#nama").value = "";
                    el("#tempatlahir").value = "";
                    el("#tgllahir").value = "";
                    el("#alamat").value = "";
                    el("#pekerjaan").value = "";
                    el("#nohp").value = "";
                    el("#satuanterlapor").value = "";
                    el("#namaterlapor").value = "";
                    el("#bentukperbuatan").value = "";
                    el("#kerugian").value = "";
                    el("#kronologi").value = "";
                    el("#dokumen").value = "";
                    window.scrollTo({ top: 0, behavior: \'smooth\' });
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
}
</script>
';
	}
}
