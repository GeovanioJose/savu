<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tipo de Visita') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 justify-center">
           
            <div class="grid grid-cols-1 gap-4">
                <!-- component -->
                <x-card titulo="Tipo de Visita">
                    
                    <div >
                        <x-input-label>Nome</x-input-label>
                        <x-text-input
							class="w-full mt-2 mb-6 px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
							name="nome"
							value="{{ $tipoVisita->nome }}"
                            
						>
                        </x-text-input>
                    </div>
                    <div >
                        <x-input-label>Descriçao</x-input-label>
                        <x-text-input
							class="w-full mt-2 mb-6 px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
							name="descricao"
							value="{{ $tipoVisita->descricao }}"
						>
                        </x-text-input>
                    </div>
                    <div >
                        <x-input-label>Duração</x-input-label>
                        <x-text-input
							class="w-full mt-2 mb-6 px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
							name="duracao"
							value="{{ $tipoVisita->duracao }}"
						>
                        </x-text-input>
                    </div>
                    <div class="flex flex-row" >
                        <div class="basis-1/6 pr-4">
                            <x-input-label>De</x-input-label>
                            <x-text-input
                                type="time"
                                class="w-full mt-2 mb-6 px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
                                name="manha_inicio"
                                value="{{ $tipoVisita->manha_inicio }}">
                            </x-text-input>
                        </div>
                        <div class="basis-1/6">
                            <x-input-label>às</x-input-label>
                            <x-text-input
                                type="time"
                                class="w-full mt-2 mb-6 px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
                                name="manha_fim"
                                value="{{ $tipoVisita->manha_fim }}">
                            </x-text-input>
                        </div>
                    </div>

                    <div class="flex flex-row" >
                        <div class="basis-1/6 pr-4">
                            <x-input-label>De</x-input-label>
                            <x-text-input
                                type="time"
                                class="w-full mt-2 mb-6 px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
                                name="tarde_inicio"
                                value="{{ $tipoVisita->tarde_inicio }}">
                            </x-text-input>
                        </div>
                        <div class="basis-1/6">
                            <x-input-label>às</x-input-label>
                            <x-text-input
                                type="time"
                                class="w-full mt-2 mb-6 px-3 py-2 text-gray-700 border rounded-lg focus:outline-none"
                                name="tarde_fim"
                                value="{{ $tipoVisita->tarde_fim }}">
                            </x-text-input>
                        </div>
                    </div>
                    <x-input-label>Imagens</x-input-label>
                    <div class="justify-center">
                        @foreach ($tipoVisita->fotos as $foto)
                            <div class="mr-12 p-4">
                                <img class="h-auto max-w-lg mx-auto"  src="{{  asset('storage/'.$foto->path) }}" alt="image description">
                            </div>
                        @endforeach
                    </div>
                </x-card>
            </div>
            <br>
            <x-primary-button  class="bg-green-500 mb-4">
                <a href="{{ url()->previous() }}">
                    Voltar
                </a>
            </x-primary-button>
           
            
        </div>
    </div>

</x-app-layout>
