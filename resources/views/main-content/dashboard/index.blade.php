<x-layout>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<header>
    <h1 class="text-3xl font-bold my-5">{{ $title }}</h1>
</header>


    <div class="flex items-baseline"> {{-- Nama UMKM --}}
        <h2 class="text-2xl font-bold my-2">UMKM :</h2>
        
            <span class="ml-1"><a href="/dashboard/list"><svg width="30" height="17" viewBox="0 0 30 17" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><rect width="30" height="17" fill="url(#pattern0)"/> <defs><pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1"> <use xlink:href="#image0_838_105" transform="matrix(0.0062963 0 0 0.0111111 0.216667 0)"/> </pattern> <image id="image0_838_105" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAABWklEQVR4nO3avUoDQRRA4aPFHfXFBRGsLfQhLMI+kY2F4A+WkYWtQv5A9+7M7PlgId3ce9hkAwlIkiRJkiRJkiRJkiRJkupxMV1proFH4At4A+6AQr8KcA+8Az/AE3CTcfAYebtzbTqNXabddvd9nvvg8a3zuefgHmOXA5HH6xu4nHuAjwOH9xS7HIm8nRrM7uHIAD3ELicib6cGVQzSauxS224BvJwYaACuaEfUulO1g/W4S/UD9rRDM4P2MHtzA9PmzM0NHg3N2uwC0cCMzS8SFc/WzUJR4UzdLRYVzdLtglHBDCliwUVXE3nJhWNtkZdYfLWRMwOsPnJGCCMnBDFyQhgjJwSKtT/4zhV/CGXkhNjhnTz/nR1Gzvm5f9Pp3x1SxRl3qw++hWMPfruYP7aRE2IbOSH24MfF/LEHI/+/AtwCr9M1vvYrnCRJkiRJkiRJkiRJkiSJZL/HXxTfMSb/iQAAAABJRU5ErkJggg=="/></defs></svg></a></span>
</div>
    <main class="md:columns-2">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8 p-6 divide divide-y-2">
        {{-- Card Title --}}
        <div class="text-xl font-bold flex justify-between items-center mb-4">
            <div>Transaksi</div>
        </div> 
        <div class="grid gap-2"> {{-- Card Body--}}
          
            <div class="font-bold mt-2">
                Jumlah Transaksi
            </div>
            <div class="text-2xl font-bold">458</div>
            <div class="mt-20">

          </div>
          </div>
    </div>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8 p-6 divide divide-y-2">
        {{-- Card Title --}}
        <div class="text-xl font-bold flex justify-between items-center mb-4">
            <div>Penjualan Terlaris</div>
        </div> 
        <div class="grid gap-2"> {{-- Card Body--}}
            <div class="mt-4">
                <table class="w-full text-sm">
                    <thead class="bg-[rgba(9,47,105,0.28)] font-bold">
                        <th class="p-2">Menu</th>
                        <th class="p-2">Jumlah Terjual</th>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td class="p-2">Bakmie Ayam Madu</td>
                            <td class="p-2">57</td>
                        </tr>
                        <tr>
                            <td class="p-2">Bakmie Ayam Suwir</td>
                            <td class="p-2">24</td>
                        </tr>
                        <tr>
                            <td class="p-2">Pangsit Kukus</td>
                            <td class="p-2">17</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </main>
    </div>
    
    <!-- Required chart.js -->
    <div class="col-start-1 col-end-3 shadow-lg rounded-lg overflow-hidden mb-12 md:mx-8  ">
    <div class="py-3 pb-4 px-5 bg-white font-bold">
    <div class="flex items-center relative"> Januari
    <div class="my-5 ml-auto after:content-[''] after:absolute after:inline-block after:w-28 after:h-[0.05rem] after:right-0 after:translate-y-[-1rem] after:translate-x-[0.2rem] after:bg-[rgba(9,47,105,0.28)] after:bottom-0 after:p-0 after:m-0">Bulan ini</div>
        <x-dropdown.data-dashboard/>
        
    </div>
    
<canvas id="chartBar" height="35" style="display: block; box-sizing: border-box; width: 100px;"class="pl-4 mt-14"></canvas></div>
    </div></div>


<!-- Chart bar -->
<script>
  const labelsBarChart = {!!json_encode($labelsBarChart)!!}
  const dataBarChart = {
    labels: labelsBarChart,
    datasets: [
      {
        label: "Penjualan Terbanyak per Bulan",
        size: 10,
        barThickness: 30,
        backgroundColor: "hsl(197.2, 94.7%, 22.4%, 0.75)",
        borderColor: "hsl(197.2, 94.7%, 22.4%, 0.75)",
        data: {!!json_encode($data_chart)!!}
      },
    ],
  };
 
  const configBarChart = {
    type: "bar",
    data: dataBarChart,
    options: {},
  };

  var chartBar = new Chart(
    document.getElementById("chartBar"),
    configBarChart
  );
</script>
</x-layout>
