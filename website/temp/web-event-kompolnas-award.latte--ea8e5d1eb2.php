<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/web/event/kompolnas-award.latte */
final class Template_ea8e5d1eb2 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/web/event/kompolnas-award.latte';

	public const Blocks = [
		['content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('content', get_defined_vars()) /* line 2 */;
		echo "\n";
		$this->renderBlock('js', get_defined_vars()) /* line 58 */;
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
        <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 19 */;
		echo 'assets/storage/default/event_award.jpg" class="w-full">
        
        <div class="profile">
            <div class="grid grid-cols-1 grid-rows-1 gap-8 border-b-1 border-b-gray-200 py-8
                sm:grid-cols-1
                md:grid-cols-1
                lg:grid-cols-3
                xl:grid-cols-3
                2xl:grid-cols-3
            ">
                <div class="button-nama border-0 border-r-gray-200
                    sm:border-0
                    md:border-0
                    lg:border-r-1
                    xl:border-r-1
                    2xl:border-r-1
                ">
                    <ul class="font-semibold">
                        <li class="item-profile-btn" class="cursor-pointer hover:text-yellow-400 py-4">Tentang Event</li>
                    </ul>
                </div>
                <div class="col-start-1 col-span-1
                    sm:col-start-1 sm:col-span-1
                    md:col-start-1 md:col-span-1
                    lg:col-start-2 lg:col-span-2
                    xl:col-start-2 xl:col-span-2
                    2xl:col-start-2 2xl:col-span-2
                ">
                    <div class="detail-info">
                        Tentang Event
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
';
	}


	/** {block js} on line 58 */
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
