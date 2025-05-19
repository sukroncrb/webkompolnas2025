<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/web/berita/kompolnas.latte */
final class Template_33bb78aedd extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/web/berita/kompolnas.latte';

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
		$this->renderBlock('js', get_defined_vars()) /* line 185 */;
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
        <div class="container konten flex justify-between items-center">
            <div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 12 */;
		echo '\'><span>Home</span></a></li>
                        <li><a href=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 13 */;
		echo 'berita\'><span>Berita</span></a></li>
                        <li><span>Kompolnas</span></li>
                    </ul>
                </div>
                <h3>Berita Kompolnas</h1>
            </div>
            <div>
                <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 20 */;
		echo 'berita/polri">Berita Polri</a>
            </div>
        </div>
    </div>
    <div class="container konten page">
        <div class="grid grid-cols-1 grid-rows-4 gap-6
            sm:grid-cols-1
            md:grid-cols-2
            lg:grid-cols-3
            xl:grid-cols-3
            2xl:grid-cols-3
        " id="beritakompolnas">
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>

        </div>

        <div id="btnload"></div>
            
    </div>
</section>
';
	}


	/** {block js} on line 185 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script>
let startfrom = 0;
let databerita = [];

async function getBerita(x) {
    const elementid = x.elementid;
    const jumlahitem = x.jumlahitem;
    const url = baseurl + "api/berita";
    try {
        const response = await fetch(url, {
            method: \'GET\',
            headers: {
                \'x-api-key\': apikey,
                \'tipe\': \'web\'
            }
        });
        if (!response.ok) {
            throw new Error(`Response status: ${response.status}`);
        }
        const result = await response.json();

        for(let i= 0; i<result.data.length; i++){
            if(result.data[i].kategori == "Kompolnas"){
                databerita.push(result.data[i]);
            }
        }

        getLoadBerita({
            elementid: elementid,
            jumlahitem: jumlahitem,
            startfrom: startfrom
        });
    } catch (error) {
        console.error(error.message);
    }
}

function getLoadBerita(x) {
    const elementid = x.elementid;
    const jumlahitem = x.jumlahitem;
    let startfrom = x.startfrom;
    let itemberita = \'\';


    if(startfrom != 0){
        el("#btnload").innerHTML = `<div class="mt-8 grid grid-cols-1 grid-rows-4 gap-6
            sm:grid-cols-1
            md:grid-cols-2
            lg:grid-cols-3
            xl:grid-cols-3
            2xl:grid-cols-3
        ">
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>
            <articles>
                <div class="shimmer bg-gray-200 w-full  h-[280px] overflow-hidden rounded-md
                    sm:h-[280px]
                    md:h-[250px]
                    lg:h-[170px]
                    xl:h-[180px]
                    2xl:h-[180px]
                "></div>
                
                <div class="w-full shimmer bg-gray-200 h-[20px]"></div>
                <div class="shimmer bg-gray-200 h-[16px]" style="width: 30%;"></div>
            </articles>

        </div>`;
    }

    setTimeout(()=>{
        for(let i=0; i< databerita.length; i++){
            if(i == (startfrom + 1) || i < (startfrom + jumlahitem)){
                itemberita += `
                <articles
                    onClick=\'window.location.href=this.dataset.link\'
                    data-link=\'`+baseurl+`berita/kompolnas/`+databerita[i].slug+`\'
                >
                    <div class="w-full h-[280px] overflow-hidden rounded-md
                        sm:h-[280px]
                        md:h-[250px]
                        lg:h-[170px]
                        xl:h-[180px]
                        2xl:h-[180px]
                    ">
                        <img src="`+baseurl+databerita[i].gambar+`" class="w-full h-[280px] object-cover
                            sm:h-[280px]
                            md:h-[250px]
                            lg:h-[170px]
                            xl:h-[180px]
                            2xl:h-[180px]
                        ">
                    </div>
                    <h1 class="my-2 font-semibold">`+databerita[i].judul+`</h1>
                    <small>`+databerita[i].kategori+` | `+window.tanggal.toFormatFB(databerita[i].waktu)+`</small>
                </articles>
                `;
            }
        }
        el(\'#\'+elementid).innerHTML = itemberita;
        startfrom = startfrom + jumlahitem;

        if(startfrom < databerita.length){
            el("#btnload").innerHTML = `
                <div class="w-full text-center mt-8">
                    <button 
                        onclick="getLoadBerita({
                            elementid: \'`+elementid+`\',
                            jumlahitem: `+jumlahitem+`,
                            startfrom: `+startfrom+`
                        })"
                        type="button"
                        class="
                            mt-2
                            text-white 
                            bg-sky-600 
                            hover:bg-sky-700 
                            font-medium 
                            rounded-lg
                            mx-auo 
                            text-sm 
                            px-5 
                            py-2.5 
                            me-2 
                            mb-2 
                            focus:outline-none 
                            dark:focus:ring-sky-700
                            cursor-pointer">
                    Berita Lainnya
                    </button>
                </div>
            `;
        }else{
            el("#btnload").innerHTML = `<div class=\'text-center text-gray-300 mt-8\'>Semua data sudah ditampilkan</div>`;
        }

    },500);

}


getBerita({
  elementid: \'beritakompolnas\',
  jumlahitem: 12
});
</script>
';
	}
}
