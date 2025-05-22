<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/web/berita/detail.latte */
final class Template_9db0bb2cb9 extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/website/vendor/abiesoft/Http/../../../templates/web/berita/detail.latte';

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
		$this->renderBlock('js', get_defined_vars()) /* line 169 */;
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
                        <li><span>Berita</span></li>
                    </ul>
                </div>
                <h3>';
		echo LR\Filters::escapeHtmlText($judul) /* line 16 */;
		echo '</h1>
            </div>
        </div>
    </div>
    <div class="container konten page">

        <img src=\'';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($gambar)) /* line 22 */;
		echo '\' class="w-full">

        <div class="grid grid-cols-1 grid-rows-1 gap-6
            sm:grid-cols-1
            md:grid-cols-1
            lg:grid-cols-3
            xl:grid-cols-3
            2xl:grid-cols-3
        ">
            <div class="col-span-2">
                <div class="bg-sky-50 gap-4 p-4 my-4 flex justify-between rounded-[35px] items-center relative">
                    <div class="flex gap-4 justify-start items-center rounded-xl text-center">
                        <button id="btndengarkan" data-status=\'off\' class="w-[35px] h-[35px] flex justify-center items-center pl-[2px] rounded-full bg-sky-700 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 24 24" stroke-width="0" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z"></path>
                            </svg>
                        </button>
                        <div>Dengarkan berita <span id="waktudengar"></span></div>
                    </div>
                    <svg width="28px" height="28px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <rect width="32" height="192" x="16" y="160" fill="var(--ci-primary-color, #000000)" class="ci-primary"></rect>
                        <rect width="32" height="192" x="376" y="160" fill="var(--ci-primary-color, #000000)" class="ci-primary"></rect>
                        <rect width="32" height="328" x="104" y="88" fill="var(--ci-primary-color, #000000)" class="ci-primary"></rect>
                        <rect width="32" height="320" x="288" y="96" fill="var(--ci-primary-color, #000000)" class="ci-primary"></rect>
                        <rect width="32" height="320" x="464" y="96" fill="var(--ci-primary-color, #000000)" class="ci-primary"></rect>
                        <rect width="32" height="480" x="192" y="16" fill="var(--ci-primary-color, #000000)" class="ci-primary"></rect>
                    </svg>
                </div>
                <div id="isiberita" class="isi-berita">
                    ';
		echo $isi /* line 51 */;
		echo '
                </div>        
            </div>
            <div class="col-start-1
            sm:col-start-1
            md:col-start-1
            lg:col-start-3
            xl:col-start-3
            2xl:col-start-3
            ">
                <div class="text-center py-8">
                    <div class="text-sm">';
		echo LR\Filters::escapeHtmlText($dibuat) /* line 62 */;
		echo ' | ';
		echo LR\Filters::escapeHtmlText($oleh) /* line 62 */;
		echo '</div>
                    <div class="mt-8">
                        <div>Bagikan :</div>
                        <div class="flex justify-center items-center gap-4 mt-4">
                            <button class="btn-icon" onClick=\'window.location.href=this.dataset.link\' data-link=\'whatsapp://send?text=';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 66 */;
		echo LR\Filters::escapeHtmlAttr(ltrim($_SERVER['REQUEST_URI'], '/')) /* line 66 */;
		echo '\'>
                                <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 67 */;
		echo 'assets/web/images/icons/icons8-whatsapp.svg" class="w-[28px]">
                            </button>
                            <button class="btn-icon" onClick=\'window.location.href=this.dataset.link\' data-link=\'https://www.facebook.com/sharer/sharer.php?u=';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 69 */;
		echo LR\Filters::escapeHtmlAttr(ltrim($_SERVER['REQUEST_URI'], '/')) /* line 69 */;
		echo '\'>
                                <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 70 */;
		echo 'assets/web/images/icons/icons8-facebook.svg" class="w-[28px]">
                            </button>
                            <button class="btn-icon" onClick=\'window.location.href=this.dataset.link\' data-link=\'https://twitter.com/intent/tweet?text=';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 72 */;
		echo LR\Filters::escapeHtmlAttr(ltrim($_SERVER['REQUEST_URI'], '/')) /* line 72 */;
		echo '\'>
                                <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 73 */;
		echo 'assets/web/images/icons/icons8-x.svg" class="w-[28px]">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hr"></div>

        <div class="mt-8 grid grid-cols-1 grid-rows-1 gap-6
            sm:grid-cols-1
            md:grid-cols-2
            lg:grid-cols-3
            xl:grid-cols-3
            2xl:grid-cols-3
        " id="beritaterkait">
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
    </div>
    <input type=\'hidden\' id=\'kategoriberita\' name=\'kategoriberita\' value=\'';
		echo LR\Filters::escapeHtmlAttr($kategori) /* line 164 */;
		echo '\'>
    <input type=\'hidden\' id=\'idberita\' name=\'idberita\' value=\'';
		echo LR\Filters::escapeHtmlAttr($id) /* line 165 */;
		echo '\'>
</section>
';
	}


	/** {block js} on line 169 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script>
window.speechSynthesis.cancel();

const itemList = document.querySelectorAll(\'#isiberita p\');

const listenButton = document.getElementById(\'listen\');
const stopButton = document.getElementById(\'stop\');
let currentIndex = 0; // Indeks elemen yang sedang dibaca
let isReading = false; // Status membaca

let teks = el("#isiberita").innerText;
let lamabaca = teks.split(" ").length / 190 / 60 * 100;
el("#waktudengar").innerHTML = lamabaca.toFixed(0) + " menit";

// Mendapatkan daftar suara setelah SpeechSynthesis API siap
let voices = [];
window.speechSynthesis.onvoiceschanged = () => {
    voices = window.speechSynthesis.getVoices();
};

// Fungsi untuk memilih suara perempuan berbahasa Indonesia
function getIndonesianFemaleVoice() {
    return voices.find(voice => voice.lang === \'id-ID\' && voice.name.toLowerCase().includes(\'female\'));
}

// Fungsi untuk membaca item satu per satu
function readNextItem() {
    if (currentIndex < itemList.length) {
        const item = itemList[currentIndex];
        const utterance = new SpeechSynthesisUtterance(item.textContent);
        utterance.lang = \'id-ID\'; // Bahasa Indonesia
        
        // Pilih suara perempuan
        const femaleVoice = getIndonesianFemaleVoice();
        if (femaleVoice) {
            utterance.voice = femaleVoice;
        }

        // Highlight elemen saat ini
        item.classList.add(\'highlight\');

        // Hapus highlight setelah selesai
        utterance.onend = () => {
            item.classList.remove(\'highlight\');
            currentIndex++; // Lanjut ke item berikutnya
            readNextItem(); // Rekursi untuk item berikutnya
        };

        window.speechSynthesis.speak(utterance);
    } else {
        // Reset status setelah selesai membaca semua item
        isReading = false;
        currentIndex = 0;
    }
}

el("#btndengarkan").addEventListener(\'click\', () => {
    if(el("#btndengarkan").dataset.status == "off"){
        if (!isReading) {
            isReading = true;
            readNextItem();
        }
        el("#btndengarkan").innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 24 24" stroke-width="0" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 0 1 7.5 5.25h9a2.25 2.25 0 0 1 2.25 2.25v9a2.25 2.25 0 0 1-2.25 2.25h-9a2.25 2.25 0 0 1-2.25-2.25v-9Z" />
            </svg>
        `;
            el("#btndengarkan").dataset.status = "on";
    }else{
        window.speechSynthesis.cancel(); // Hentikan pembacaan
        if (currentIndex < itemList.length) {
            itemList[currentIndex].classList.remove(\'highlight\'); // Hapus highlight elemen aktif
        }
        isReading = false; // Reset status
        currentIndex = 0; // Reset indeks
        el("#btndengarkan").innerHTML = `
            <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" viewBox="0 0 24 24" stroke-width="0" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.347a1.125 1.125 0 0 1 0 1.972l-11.54 6.347a1.125 1.125 0 0 1-1.667-.986V5.653Z" />
            </svg>
        `;
        el("#btndengarkan").dataset.status = "off";
    }
});

async function getBerita(x) {
    const endpoint = x.endpoint;
    const elementid = x.elementid;

    let itemberita = \'\';
    let databerita = [];
    databerita[endpoint] = [];

    const url = baseurl + "api/berita/"+endpoint+"/"+el("#idberita").value;
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

        if(result.data.length > 0){

          for(let i= 0; i<result.data.length; i++){
              databerita[endpoint].push(result.data[i]);
          }

          for(let i=0; i<databerita[endpoint].length; i++){

              itemberita += `
              <articles
                      onClick=\'window.location.href=this.dataset.link\'
                      data-link=\'`+baseurl+`berita/`+endpoint+`/`+databerita[endpoint][i].slug+`\'
                  >
                  <div class="w-full h-[280px] overflow-hidden rounded-md
                      sm:h-[280px]
                      md:h-[250px]
                      lg:h-[170px]
                      xl:h-[180px]
                      2xl:h-[180px]
                  ">
                      <img src="`+baseurl+databerita[endpoint][i].gambar+`" class="w-full h-[280px] object-cover
                          sm:h-[280px]
                          md:h-[250px]
                          lg:h-[170px]
                          xl:h-[180px]
                          2xl:h-[180px]
                      ">
                  </div>
                  <h1 class="my-2 font-semibold">`+databerita[endpoint][i].judul+`</h1>
                  <small>`+databerita[endpoint][i].kategori+` | `+window.tanggal.toFormatFB(databerita[endpoint][i].waktu)+`</small>
              </articles>
              `;
          }

        }else{

          itemberita = "Kosong";
          
        }
        

        el(\'#\'+elementid).innerHTML = itemberita;
    } catch (error) {
        console.error(error.message);
    }
}

getBerita({
  elementid: \'beritaterkait\',
  endpoint: el("#kategoriberita").value
});
</script>
';
	}
}
