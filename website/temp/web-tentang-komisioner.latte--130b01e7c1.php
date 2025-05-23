<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/web/tentang/komisioner.latte */
final class Template_130b01e7c1 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/web/tentang/komisioner.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 21 */;
		echo "\n";
		$this->renderBlock('js', get_defined_vars()) /* line 102 */;
		echo "\n";
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['k' => '54'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		$this->parentName = '../main.latte';
		return get_defined_vars();
	}


	/** {block css} on line 2 */
	public function blockCss(array $ʟ_args): void
	{
		echo '<style>
.paragraph p{
    margin-bottom: 8px;
    text-align: justify;
}

.item-profile-btn  {
    cursor: pointer;
    padding: 10px 20px;
}

.item-profile-btn:hover,
.item-profile-btn.active  {
    color: #005e94;
    background-color:rgb(203, 236, 255);
}
</style>
';
	}


	/** {block content} on line 21 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<section>
    <div class="banner">
        <div class="container konten">
            <div class="breadcrumb">
                <ul>
                    <li><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 27 */;
		echo '\'><span>Home</span></a></li>
                    <li><span>Tentang Kompolnas</span></li>
                    <li><span>Komisioner</span></li>
                </ul>
            </div>
            <h3>Komisioner</h1>
        </div>
    </div>
    <div class="container konten page">
        
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
';
		$no = 1 /* line 53 */;
		foreach ($komisioner as $k) /* line 54 */ {
			echo '                            <li class="item-profile-btn" onclick="setProfileActive(this.dataset.content)" id="k';
			echo LR\Filters::escapeHtmlAttr($no) /* line 55 */;
			echo '" data-content="k';
			echo LR\Filters::escapeHtmlAttr($no) /* line 55 */;
			echo '" 
                            data-nama="';
			echo LR\Filters::escapeHtmlAttr($k->nama) /* line 56 */;
			echo '"
                            data-jabatan="';
			echo LR\Filters::escapeHtmlAttr($k->jabatan) /* line 57 */;
			echo '"
                            data-photo="';
			echo LR\Filters::escapeHtmlAttr($k->photo) /* line 58 */;
			echo '"
                            data-keterangan="';
			echo LR\Filters::escapeHtmlAttr(html_entity_decode($k->keterangan)) /* line 59 */;
			echo '"
                            class="cursor-pointer hover:text-yellow-400 py-4">';
			echo LR\Filters::escapeHtmlText($k->nama) /* line 60 */;
			echo '</li>
';
			$no = $no + 1 /* line 61 */;
		}

		echo '                        <input type="hidden" id="idkomisioner" value="';
		echo LR\Filters::escapeHtmlAttr($idkomisioner) /* line 63 */;
		echo '">
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
                        <div class="flex justify-start items-center gap-6 mb-8">
                            <div class="block w-[130px] h-[150px] rounded-md overflow-hidden">
                                <img id="show-photo" src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 85 */;
		echo 'assets/storage/default/pp.jpg" class="w-[130px] h-[150px] object-fit">
                            </div>
                            <div>
                                <div class="font-semibold" id="show-nama">Loading..</div>
                                <div id="show-jabatan">Loading..</div>
                            </div>
                        </div>
                        <div class="paragraph" id="show-deskripsi">Loading..</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
';
	}


	/** {block js} on line 102 */
	public function blockJs(array $ʟ_args): void
	{
		echo '<script>
function showProfileDefault(x){
    let showphoto = el("#show-photo");
    let shownama = el("#show-nama");
    let showjabatan = el("#show-jabatan");
    let showdeskripsi = el("#show-deskripsi");
    showphoto.src = baseurl + el("#"+x).dataset.photo;
    shownama.innerHTML = el("#"+x).dataset.nama;
    showjabatan.innerHTML = el("#"+x).dataset.jabatan;
    showdeskripsi.innerHTML = el("#"+x).dataset.keterangan;


    let datacontent = document.querySelectorAll(".item-profile-btn");
    if(datacontent){
        for(let i=0; i<datacontent.length; i++){
            datacontent[i].classList.remove("active");
            if(datacontent[i].dataset.content == x){
                datacontent[i].classList.add("active");
                showphoto.src = baseurl + el("#"+x).dataset.photo;
                shownama.innerHTML = el("#"+x).dataset.nama;
                showjabatan.innerHTML = el("#"+x).dataset.jabatan;
                showdeskripsi.innerHTML = el("#"+x).dataset.keterangan;
            }
        }
    }
}

if(el("#idkomisioner").value != ""){
    showProfileDefault(el("#idkomisioner").value);
}else{
    showProfileDefault("k1");
}

setProfileActive = (x) =>{
    let datacontent = document.querySelectorAll(".item-profile-btn");
    let showphoto = el("#show-photo");
    let shownama = el("#show-nama");
    let showjabatan = el("#show-jabatan");
    let showdeskripsi = el("#show-deskripsi");

    showphoto.src = baseurl + "assets/storage/default/pp.jpg";
    shownama.innerHTML = "Loading..";
    showjabatan.innerHTML = "Loading..";
    showdeskripsi.innerHTML = "Loading..";

    if(datacontent){
        for(let i=0; i<datacontent.length; i++){
            datacontent[i].classList.remove("active");
            if(datacontent[i].dataset.content == x){
                datacontent[i].classList.add("active");
                showphoto.src = baseurl + el("#"+x).dataset.photo;
                shownama.innerHTML = el("#"+x).dataset.nama;
                showjabatan.innerHTML = el("#"+x).dataset.jabatan;
                showdeskripsi.innerHTML = el("#"+x).dataset.keterangan;
            }
        }
    }

    
    if(Number(window.location.href.slice(-1))) {
        if(window.location.href.slice(-2) != x){
            const stateObj = { foo: "tentang-kompolnas/komisioner/"+window.location.href.slice(-2) };
            history.pushState(stateObj, "", x);
        }
    }
}
</script>
';
	}
}
