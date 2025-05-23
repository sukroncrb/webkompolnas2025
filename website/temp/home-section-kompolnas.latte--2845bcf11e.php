<?php

use Latte\Runtime as LR;

/** source: /home/sukroncrb2025/Project/kompolnas/website/templates/web/home/section/kompolnas.latte */
final class Template_2845bcf11e extends Latte\Runtime\Template
{
	public const Source = '/home/sukroncrb2025/Project/kompolnas/website/templates/web/home/section/kompolnas.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="container">
    <div class="grid grid-cols-1 grid-rows-1 gap-4
        sm:grid-cols-1
        md:grid-cols-1
        lg:grid-cols-3
        xl:grid-cols-4
        2xl:grid-cols-4
    ">
        <div class="col-span-1 border-0 border-r-gray-200 py-10
            sm:col-span-1 sm:border-0
            md:col-span-1 md:border-0
            lg:col-span-3 lg:border-r-1
            xl:col-span-3 xl:border-r-1
            2xl:col-span-3 2xl:border-r-1
        ">
            <h1 class="font-semibold text-2xl mb-8">Berita Kompolnas</h1>
            <div class="grid grid-cols-1 grid-rows-2 gap-6 mr-0
                sm:grid-cols-1 sm:mr-0
                md:grid-cols-2 md:mr-0
                lg:grid-cols-3 lg:mr-6
                xl:grid-cols-3 xl:mr-6
                2xl:grid-cols-3 2xl:mr-6
            " id=\'listberitakompolnas\'>
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

            <div class="w-full text-center mt-8">
                <button 
                    onclick="window.location.href=this.dataset.link"
                    data-link="';
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 104 */;
		echo 'berita/kompolnas"
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
        </div>
        <div class="col-start-1 py-10 px-4
            sm:col-start-1
            md:col-start-1
            lg:col-start-2
            xl:col-start-4
            2xl:col-start-4
        ">
        
            <div class="widget overflow-hidden">
                <h1 class="font-semibold mb-4">Komisioner</h1>
                <div class="ml-[-60%]
                    sm:ml-[-60%]
                    md:ml-[-60%]
                    lg:ml-[-60%]
                    xl:ml-[-60%]
                    2xl:ml-[-60%]
                ">
                    <div class="container-caraousel">
                        <div class="card-carousel" style="width: 140%;">
';
		$no = 1 /* line 145 */;
		foreach ($komisioner as $k) /* line 146 */ {
			echo '                                <div class="card" id="';
			echo LR\Filters::escapeHtmlAttr($no) /* line 147 */;
			echo '" onClick="window.location.href=this.dataset.link" data-link="';
			echo LR\Filters::escapeHtmlAttr($baseurl) /* line 147 */;
			echo 'tentang-kompolnas/komisioner/k';
			echo LR\Filters::escapeHtmlAttr($no) /* line 147 */;
			echo '">
                                    <div class="w-[180px] h-[200px] mb-[10px] rounded-[10px] bg-gray-300 overflow-hidden">
                                        <img src=\'';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 149 */;
			echo LR\Filters::escapeHtmlAttr($k->photo) /* line 149 */;
			echo '\' class="w-[180px] h-[200px] object-cover">
                                    </div>
                                    <div class="font-semibold text-sm">';
			echo LR\Filters::escapeHtmlText($k->nama) /* line 151 */;
			echo '</div>
                                    <div class="mt-1 text-sm">';
			echo LR\Filters::escapeHtmlText($k->jabatan) /* line 152 */;
			echo '</div>
                                </div>
';
			$no = $no + 1 /* line 154 */;
		}

		echo '                        </div>
                        <a href="#" class="visuallyhidden card-controller">Carousel controller</a>
                    </div>
                </div>
            </div>

            <div class="widget mt-8">
                <h1 class="font-semibold mb-4">Pengumuman</h1>
                <div class="w-full">
                    <img style=\'cursor: pointer;\' src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($baseurl)) /* line 165 */;
		echo LR\Filters::escapeHtmlAttr($banner) /* line 165 */;
		echo '" class="w-full" onClick=\'window.location.href=this.dataset.link\' data-link=\'';
		echo LR\Filters::escapeHtmlAttr($linkbanner) /* line 165 */;
		echo '\'>
                </div>
            </div>


        </div>
    </div>
</div>';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['k' => '146'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
