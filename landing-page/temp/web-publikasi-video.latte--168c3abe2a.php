<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/web/publikasi/video.latte */
final class Template_168c3abe2a extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/vendor/abiesoft/Http/../../../templates/web/publikasi/video.latte';

	public const Blocks = [
		['css' => 'blockCss', 'content' => 'blockContent', 'js' => 'blockJs'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('css', get_defined_vars()) /* line 2 */;
		$this->renderBlock('content', get_defined_vars()) /* line 20 */;
		$this->renderBlock('js', get_defined_vars()) /* line 206 */;
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
		echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/bootstrap-table.min.css">

<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.29.0/tableExport.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/bootstrap-table.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/bootstrap-table-locale-all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/extensions/export/bootstrap-table-export.min.js"></script>

<style>
  .select,
  #locale {
    width: 100%;
  }
  .like {
    margin-right: 10px;
  }
</style>
';
	}


	/** {block content} on line 20 */
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
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 26 */;
		echo '\'><span>Home</span></a></li>
                    <li><span>Youtube Kompolnas</span></li>
                </ul>
            </div>
            <h3>';
		echo LR\Filters::escapeHtmlText($title) /* line 30 */;
		echo '</h1>
        </div>
    </div>
        <div class="container konten page grid grid-cols-1 grid-rows-3 gap-6
                sm:grid-cols-2
                md:grid-cols-2
                lg:grid-cols-3
                xl:grid-cols-3
                2xl:grid-cols-3" id=\'semuavideo\'>

            <div class=\'item-video\'>
                <div class="rounded-xl overflow-hidden"><div class="shimmer" style="width: 100%; background: #eee; height: 230px; border-radius: 15px;"></div></div>
                <div style=\'font-weight: bold; margin-top: 10px; margin-bottom: 10px;\'>
                    <div class="shimmer" style="width: 100%; background: #eee; height: 16px;"></div>
                    <div class="shimmer" style="width: 25%; background: #eee; height: 16px;"></div>
                </div>
                <div class=\'font-semibold mt-2 flex justify-between items-center\'>
                    <div class=\'flex justify-between items-center\'>
                        <div style=\'width: 35px; height: 35px; overflow: hidden; border-radius: 50%; margin-right: 10px;\'>
                            <div class="shimmer" style="width: 35px; background: #eee; height: 35px; border-radius: 50%;"></div>
                        </div>
                        <div><div class="shimmer" style="width: 130px; background: #eee; height: 16px;"></div></div>
                    </div>
                    <div class=\'flex justify-between items-center\'>
                        <div class="shimmer" style="width: 50px; background: #eee; height: 16px;"></div>
                    </div>
                </div>
            </div>
            <div class=\'item-video\'>
                <div class="rounded-xl overflow-hidden"><div class="shimmer" style="width: 100%; background: #eee; height: 230px; border-radius: 15px;"></div></div>
                <div style=\'font-weight: bold; margin-top: 10px; margin-bottom: 10px;\'>
                    <div class="shimmer" style="width: 100%; background: #eee; height: 16px;"></div>
                    <div class="shimmer" style="width: 25%; background: #eee; height: 16px;"></div>
                </div>
                <div class=\'font-semibold mt-2 flex justify-between items-center\'>
                    <div class=\'flex justify-between items-center\'>
                        <div style=\'width: 35px; height: 35px; overflow: hidden; border-radius: 50%; margin-right: 10px;\'>
                            <div class="shimmer" style="width: 35px; background: #eee; height: 35px; border-radius: 50%;"></div>
                        </div>
                        <div><div class="shimmer" style="width: 130px; background: #eee; height: 16px;"></div></div>
                    </div>
                    <div class=\'flex justify-between items-center\'>
                        <div class="shimmer" style="width: 50px; background: #eee; height: 16px;"></div>
                    </div>
                </div>
            </div>
            <div class=\'item-video\'>
                <div class="rounded-xl overflow-hidden"><div class="shimmer" style="width: 100%; background: #eee; height: 230px; border-radius: 15px;"></div></div>
                <div style=\'font-weight: bold; margin-top: 10px; margin-bottom: 10px;\'>
                    <div class="shimmer" style="width: 100%; background: #eee; height: 16px;"></div>
                    <div class="shimmer" style="width: 25%; background: #eee; height: 16px;"></div>
                </div>
                <div class=\'font-semibold mt-2 flex justify-between items-center\'>
                    <div class=\'flex justify-between items-center\'>
                        <div style=\'width: 35px; height: 35px; overflow: hidden; border-radius: 50%; margin-right: 10px;\'>
                            <div class="shimmer" style="width: 35px; background: #eee; height: 35px; border-radius: 50%;"></div>
                        </div>
                        <div><div class="shimmer" style="width: 130px; background: #eee; height: 16px;"></div></div>
                    </div>
                    <div class=\'flex justify-between items-center\'>
                        <div class="shimmer" style="width: 50px; background: #eee; height: 16px;"></div>
                    </div>
                </div>
            </div>
            <div class=\'item-video\'>
                <div class="rounded-xl overflow-hidden"><div class="shimmer" style="width: 100%; background: #eee; height: 230px; border-radius: 15px;"></div></div>
                <div style=\'font-weight: bold; margin-top: 10px; margin-bottom: 10px;\'>
                    <div class="shimmer" style="width: 100%; background: #eee; height: 16px;"></div>
                    <div class="shimmer" style="width: 25%; background: #eee; height: 16px;"></div>
                </div>
                <div class=\'font-semibold mt-2 flex justify-between items-center\'>
                    <div class=\'flex justify-between items-center\'>
                        <div style=\'width: 35px; height: 35px; overflow: hidden; border-radius: 50%; margin-right: 10px;\'>
                            <div class="shimmer" style="width: 35px; background: #eee; height: 35px; border-radius: 50%;"></div>
                        </div>
                        <div><div class="shimmer" style="width: 130px; background: #eee; height: 16px;"></div></div>
                    </div>
                    <div class=\'flex justify-between items-center\'>
                        <div class="shimmer" style="width: 50px; background: #eee; height: 16px;"></div>
                    </div>
                </div>
            </div>
            <div class=\'item-video\'>
                <div class="rounded-xl overflow-hidden"><div class="shimmer" style="width: 100%; background: #eee; height: 230px; border-radius: 15px;"></div></div>
                <div style=\'font-weight: bold; margin-top: 10px; margin-bottom: 10px;\'>
                    <div class="shimmer" style="width: 100%; background: #eee; height: 16px;"></div>
                    <div class="shimmer" style="width: 25%; background: #eee; height: 16px;"></div>
                </div>
                <div class=\'font-semibold mt-2 flex justify-between items-center\'>
                    <div class=\'flex justify-between items-center\'>
                        <div style=\'width: 35px; height: 35px; overflow: hidden; border-radius: 50%; margin-right: 10px;\'>
                            <div class="shimmer" style="width: 35px; background: #eee; height: 35px; border-radius: 50%;"></div>
                        </div>
                        <div><div class="shimmer" style="width: 130px; background: #eee; height: 16px;"></div></div>
                    </div>
                    <div class=\'flex justify-between items-center\'>
                        <div class="shimmer" style="width: 50px; background: #eee; height: 16px;"></div>
                    </div>
                </div>
            </div>
            <div class=\'item-video\'>
                <div class="rounded-xl overflow-hidden"><div class="shimmer" style="width: 100%; background: #eee; height: 230px; border-radius: 15px;"></div></div>
                <div style=\'font-weight: bold; margin-top: 10px; margin-bottom: 10px;\'>
                    <div class="shimmer" style="width: 100%; background: #eee; height: 16px;"></div>
                    <div class="shimmer" style="width: 25%; background: #eee; height: 16px;"></div>
                </div>
                <div class=\'font-semibold mt-2 flex justify-between items-center\'>
                    <div class=\'flex justify-between items-center\'>
                        <div style=\'width: 35px; height: 35px; overflow: hidden; border-radius: 50%; margin-right: 10px;\'>
                            <div class="shimmer" style="width: 35px; background: #eee; height: 35px; border-radius: 50%;"></div>
                        </div>
                        <div><div class="shimmer" style="width: 130px; background: #eee; height: 16px;"></div></div>
                    </div>
                    <div class=\'flex justify-between items-center\'>
                        <div class="shimmer" style="width: 50px; background: #eee; height: 16px;"></div>
                    </div>
                </div>
            </div>
            <div class=\'item-video\'>
                <div class="rounded-xl overflow-hidden"><div class="shimmer" style="width: 100%; background: #eee; height: 230px; border-radius: 15px;"></div></div>
                <div style=\'font-weight: bold; margin-top: 10px; margin-bottom: 10px;\'>
                    <div class="shimmer" style="width: 100%; background: #eee; height: 16px;"></div>
                    <div class="shimmer" style="width: 25%; background: #eee; height: 16px;"></div>
                </div>
                <div class=\'font-semibold mt-2 flex justify-between items-center\'>
                    <div class=\'flex justify-between items-center\'>
                        <div style=\'width: 35px; height: 35px; overflow: hidden; border-radius: 50%; margin-right: 10px;\'>
                            <div class="shimmer" style="width: 35px; background: #eee; height: 35px; border-radius: 50%;"></div>
                        </div>
                        <div><div class="shimmer" style="width: 130px; background: #eee; height: 16px;"></div></div>
                    </div>
                    <div class=\'flex justify-between items-center\'>
                        <div class="shimmer" style="width: 50px; background: #eee; height: 16px;"></div>
                    </div>
                </div>
            </div>
            <div class=\'item-video\'>
                <div class="rounded-xl overflow-hidden"><div class="shimmer" style="width: 100%; background: #eee; height: 230px; border-radius: 15px;"></div></div>
                <div style=\'font-weight: bold; margin-top: 10px; margin-bottom: 10px;\'>
                    <div class="shimmer" style="width: 100%; background: #eee; height: 16px;"></div>
                    <div class="shimmer" style="width: 25%; background: #eee; height: 16px;"></div>
                </div>
                <div class=\'font-semibold mt-2 flex justify-between items-center\'>
                    <div class=\'flex justify-between items-center\'>
                        <div style=\'width: 35px; height: 35px; overflow: hidden; border-radius: 50%; margin-right: 10px;\'>
                            <div class="shimmer" style="width: 35px; background: #eee; height: 35px; border-radius: 50%;"></div>
                        </div>
                        <div><div class="shimmer" style="width: 130px; background: #eee; height: 16px;"></div></div>
                    </div>
                    <div class=\'flex justify-between items-center\'>
                        <div class="shimmer" style="width: 50px; background: #eee; height: 16px;"></div>
                    </div>
                </div>
            </div>
            <div class=\'item-video\'>
                <div class="rounded-xl overflow-hidden"><div class="shimmer" style="width: 100%; background: #eee; height: 230px; border-radius: 15px;"></div></div>
                <div style=\'font-weight: bold; margin-top: 10px; margin-bottom: 10px;\'>
                    <div class="shimmer" style="width: 100%; background: #eee; height: 16px;"></div>
                    <div class="shimmer" style="width: 25%; background: #eee; height: 16px;"></div>
                </div>
                <div class=\'font-semibold mt-2 flex justify-between items-center\'>
                    <div class=\'flex justify-between items-center\'>
                        <div style=\'width: 35px; height: 35px; overflow: hidden; border-radius: 50%; margin-right: 10px;\'>
                            <div class="shimmer" style="width: 35px; background: #eee; height: 35px; border-radius: 50%;"></div>
                        </div>
                        <div><div class="shimmer" style="width: 130px; background: #eee; height: 16px;"></div></div>
                    </div>
                    <div class=\'flex justify-between items-center\'>
                        <div class="shimmer" style="width: 50px; background: #eee; height: 16px;"></div>
                    </div>
                </div>
            </div>

        </div>
</section>
';
	}


	/** {block js} on line 206 */
	public function blockJs(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<script>
let startfrom = 0;
let dataalbum = [];

async function getAlbum(x) {
    
    const elementid = x.elementid;
    const jumlahitem = x.jumlahitem;
    const url = baseurl + "api/youtube-api";
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

        //console.log(result.items);

        let itemyoutube = "";
        for(let i=0; i<result.items.length; i++){
            itemyoutube += `
                <div class=\'item-video\' onClick=\'window.location.href=this.dataset.link\' data-link=\'`+baseurl+`data-dan-publikasi/video/`+result.items[i].id.videoId+`\'>
                    <div class="rounded-xl overflow-hidden"><img src="`+result.items[i].snippet.thumbnails.default.url+`" style=\'width: 100%;\'></div>
                    <div style=\'font-weight: bold; margin-top: 10px; margin-bottom: 10px;\'>`+result.items[i].snippet.title+`</div>
                    <div class=\'font-semibold mt-2 flex justify-between items-center\'>
                        <div class=\'flex justify-between items-center\'>
                            <div style=\'width: 35px; height: 35px; overflow: hidden; border-radius: 50%; margin-right: 10px;\'>
                                <img src=\'https://upload.wikimedia.org/wikipedia/commons/5/57/Logo_Kompolnas.png\' style=\'width: 35px; height: 35px; object-fit: cover;\'>
                            </div>
                            <div>Kompolnas RI</div>
                        </div>
                        <div class=\'flex justify-between items-center hidden\'>
                            <svg style=\'width: 20px; margin-right: 10px;\' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                            <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                            </svg>
                            <span style=\'font-weight: 500; font-size: 11pt;\'>10K</span>
                        </div>
                    </div>
                </div>
            `;
        }

        el("#semuavideo").innerHTML = itemyoutube;

        /*
        for(let i= 0; i<result.data.length; i++){
            dataalbum.push(result.data[i]);
        }

        getLoadAlbum({
            elementid: elementid,
            jumlahitem: jumlahitem,
            startfrom: startfrom
        });
        */
    } catch (error) {
        console.error(error.message);
    }
}

/*

function getLoadAlbum(x) {
    const elementid = x.elementid;
    const jumlahitem = x.jumlahitem;
    let startfrom = x.startfrom;
    let itemalbum = \'\';


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
        for(let i=0; i< dataalbum.length; i++){
            if(i == (startfrom + 1) || i < (startfrom + jumlahitem)){
                itemalbum += `
                <articles 
                    onClick=\'window.location.href=this.dataset.link\'
                    data-link=\'`+baseurl+`data-dan-publikasi/photo/`+dataalbum[i].id+`/`+dataalbum[i].judul.replaceAll(" ","-").replaceAll("\'","").replaceAll(",","").replaceAll("/","").replaceAll("?","").replaceAll(";","").replaceAll(\'"\',"").replaceAll("|","").replaceAll("(","").replaceAll(")","").toLowerCase()+`\'
                >
                    <div class="w-full h-[280px] overflow-hidden rounded-md
                        sm:h-[280px]
                        md:h-[250px]
                        lg:h-[170px]
                        xl:h-[180px]
                        2xl:h-[180px]
                    ">
                        <img src="`+baseurl+dataalbum[i].cover+`" class="w-full h-[280px] object-cover
                            sm:h-[280px]
                            md:h-[250px]
                            lg:h-[170px]
                            xl:h-[180px]
                            2xl:h-[180px]
                        ">
                    </div>
                    <h1 class="my-2 font-semibold">`+dataalbum[i].judul+`</h1>
                    <small>`+dataalbum[i].keterangan+`</small>
                </articles>
                `;
            }
        }
        el(\'#\'+elementid).innerHTML = itemalbum;
        startfrom = startfrom + jumlahitem;

        if(startfrom < dataalbum.length){
            el("#btnload").innerHTML = `
                <div class="w-full text-center mt-8">
                    <button 
                        onclick="getLoadAlbum({
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
                    Album Lainnya
                    </button>
                </div>
            `;
        }else{
            el("#btnload").innerHTML = `<div class=\'text-center text-gray-300 mt-8\'>Semua data sudah ditampilkan</div>`;
        }
        
    },500);

}

*/


getAlbum({
  elementid: \'semuavideo\',
  jumlahitem: 12
});

</script>
';
	}
}
