<?php

use Latte\Runtime as LR;

/** source: /home/abiesof1/kompolnas/templates/web/home/section/polri.latte */
final class Template_e3186279cc extends Latte\Runtime\Template
{
	public const Source = '/home/abiesof1/kompolnas/templates/web/home/section/polri.latte';


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
            <h1 class="font-semibold text-2xl mb-8">Berita Polri</h1>
            <div class="grid grid-cols-1 grid-rows-2 gap-6 mr-0
                sm:grid-cols-1 sm:mr-0
                md:grid-cols-2 md:mr-0
                lg:grid-cols-3 lg:mr-6
                xl:grid-cols-3 xl:mr-6
                2xl:grid-cols-3 2xl:mr-6
            " id=\'listberitapolri\'>
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
		echo LR\Filters::escapeHtmlAttr($baseurl) /* line 103 */;
		echo 'berita/polri"
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
            lg:col-start-4
            xl:col-start-4
            2xl:col-start-4
        ">

            <div class="widget mt-8">
                <h1 class="font-semibold mb-4">Statistik Pengunjung</h1>
                <div class="flex justify-between items-center py-2 border-b-1 border-solid border-gray-100">
                    <div>Total Pengunjung</div>
                    <div class="font-semibold"><span id=\'ptotal\'>0</span></div>
                </div>
                <div class="flex justify-between items-center py-2 border-b-1 border-solid border-gray-100">
                    <div>Hari ini</div>
                    <div class="font-semibold"><span id=\'phariini\'>0</span></div>
                </div>
                <div class="flex justify-between items-center py-2 border-b-1 border-solid border-gray-100">
                    <div>Kemarin</div>
                    <div class="font-semibold"><span id=\'pkemarin\'>0</span></div>
                </div>
                <div class="flex justify-between items-center py-2 border-b-1 border-solid border-gray-100">
                    <div>Minggu ini</div>
                    <div class="font-semibold"><span id=\'pmingguini\'>0</span></div>
                </div>
                <div class="flex justify-between items-center py-2 border-b-1 border-solid border-gray-100">
                    <div>Bulan ini</div>
                    <div class="font-semibold"><span id=\'pbulanini\'>0</span></div>
                </div>
                <div class="flex justify-between items-center py-2">
                    <div>Tahun ini</div>
                    <div class="font-semibold"><span id=\'ptahunini\'>0</span></div>
                </div>
            </div>

            

        </div>
    </div>
</div>';
	}
}
