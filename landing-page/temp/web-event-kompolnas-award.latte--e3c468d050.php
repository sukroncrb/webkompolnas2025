<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/web/event/kompolnas-award.latte */
final class Template_e3c468d050 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/web/event/kompolnas-award.latte';

	public const Blocks = [
		['content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('content', get_defined_vars()) /* line 2 */;
		echo "\n";
		$this->renderBlock('js', get_defined_vars()) /* line 24 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = '../main.latte';
		return get_defined_vars();
	}


	/** {block content} on line 2 */
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
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 9 */;
		echo '\'><span>Home</span></a></li>
                        <li><span>Event</span></li>
                        <li><span>';
		echo LR\Filters::escapeHtmlText($title) /* line 11 */;
		echo '</span></li>
                    </ul>
                </div>
                <h3>';
		echo LR\Filters::escapeHtmlText($title) /* line 14 */;
		echo '</h1>
            </div>
        </div>
    </div>
    <div class="container konten page">
        Event Kompolnas Award
    </div>
</section>
';
	}


	/** {block js} on line 24 */
	public function blockJs(array $ʟ_args): void
	{
		echo '<script>
/*
el(\'#formInput\').onsubmit = (e) => {
    e.preventDefault();
    const fid = "formInput";
    const field = [
        \'email|setEmail\',
        \'noktp|setKtp\',
        \'nama|setText\',
        \'alamat|setText\',
        \'pekerjaan|setText\',
        \'nohp|setText\',
        \'informasi|setText\',
        \'tujuan|setText\',
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
                            <strong class="font-bold block my-4">Permohonan anda sudah terkirim</strong>
                            <div class="block">
                                Terima kasih sudah mengirimkan permohanan.
                            </div>
                            <div class="block">Untuk informasi permohonan anda selanjutnya akan diinfokan melaluli email <a href=\'mailto:`+el("#email").value+`\'><strong class="font-bold">`+el("#email").value+`</strong></a> 
                            </div>
                            <div class=\'block mb-4\'>Silahkan cek email anda secara berkala.</div>
                        </div>
                    `;
                    el("#email").value = "";
                    el("#noktp").value = "";
                    el("#nama").value = "";
                    el("#alamat").value = "";
                    el("#pekerjaan").value = "";
                    el("#nohp").value = "";
                    el("#informasi").value = "";
                    el("#tujuan").value = "";
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
*/
</script>
';
	}
}
