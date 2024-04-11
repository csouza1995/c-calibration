@section('breadcrumbs')
    <x-layouts.breadcrumbs :links="$links"></x-layouts.breadcrumbs>
@endsection

<div class="container mx-auto mt-4 px-4 py-4 bg-white shadow-lg rounded-lg">
    <p class="text-4xl text-gray-500">
        Sistema de controle de Calibração de Instrumentos c-Calibrations
    </p>

    <p class="text-2xl text-gray-500">
        Instruções de Uso
    </p>

    <hr class="my-4">

    {{-- steps --}}
    <div class="flex">
        <div class="w-1/12 border border-cyan-600 bg-cyan-600 text-white font-bold py-2 px-4 rounded-md mr-2">
            Passo 1
        </div>
        <div class="w-3/12 border border-gray-300 bg-gray-300 text-gray-500 font-bold py-2 px-4 rounded-md mr-2">
            CADASTRO
        </div>
        <div class="w-8/12 border border-gray-400 bg-white-300 text-gray-700 py-2 px-4 rounded-md">
            Área de todos os cadastros do sistema.
        </div>
    </div>

    <div class="flex mt-2">
        <div class="w-1/12 border border-cyan-600 bg-cyan-600 text-white font-bold py-2 px-4 rounded-md mr-2">
            Passo 2
        </div>
        <div class="w-3/12 border border-gray-300 bg-gray-300 text-gray-500 font-bold py-2 px-4 rounded-md mr-2">
            CONTROLE DE INSTRUMENTOS
        </div>
        <div class="w-8/12 border border-gray-400 bg-white-300 text-gray-700 py-2 px-4 rounded-md">
            Área para controle do status dos instrumentos, assim como a previsão da próxima calibragem de cada um
        </div>
    </div>

    <div class="flex mt-2">
        <div class="w-1/12 border border-cyan-600 bg-cyan-600 text-white font-bold py-2 px-4 rounded-md mr-2">
            Passo 3
        </div>
        <div class="w-3/12 border border-gray-300 bg-gray-300 text-gray-500 font-bold py-2 px-4 rounded-md mr-2">
            CONTROLE DE CALIBRAÇÃO
        </div>
        <div class="w-8/12 border border-gray-400 bg-white-300 text-gray-700 py-2 px-4 rounded-md">
            Área para controle de todas as calibrações realizadas e as respectivas inforamções: data, local e responsável
        </div>
    </div>

    <div class="flex mt-2">
        <div class="w-1/12 border border-cyan-600 bg-cyan-600 text-white font-bold py-2 px-4 rounded-md mr-2">
            Passo 4
        </div>
        <div class="w-3/12 border border-gray-300 bg-gray-300 text-gray-500 font-bold py-2 px-4 rounded-md mr-2">
            ANÁLISE DE INSTRUMENTOS
        </div>
        <div class="w-8/12 border border-gray-400 bg-white-300 text-gray-700 py-2 px-4 rounded-md">
            Para visualizar todas as calibrações realizadas de um instrumento e os respectivos resultados
        </div>
    </div>

    <div class="flex mt-2">
        <div class="w-1/12 border border-cyan-600 bg-cyan-600 text-white font-bold py-2 px-4 rounded-md mr-2">
            Passo 5
        </div>
        <div class="w-3/12 border border-gray-300 bg-gray-300 text-gray-500 font-bold py-2 px-4 rounded-md mr-2">
            DASHBOARD
        </div>
        <div class="w-8/12 border border-gray-400 bg-white-300 text-gray-700 py-2 px-4 rounded-md">
            Resumo das informações da planilha de forma visual, resumida e rápida
        </div>
    </div>

    <hr class="my-4">

    <p class="text-sm text-gray-500">
        Esse sistema foi baseada na planila de Controle de Calibração de Instrumentos de Medição 4.0 da <a class="text-cyan-700" href="https://luz.vc/">Luz Planilhas</a>
    </p>
</div>
