<x-layouts.app title="nvocales">


<h1>Calcular el numero de vocales de una cadena ingresada</h1>
<form action="{{ route('nvocales') }}" method="post">
        @csrf
        <input type="text" name="cadena">
        @error('cadena')
            <div>
                {{ $message }}
            </div>
        @enderror
        <button type="submit">
            Verificar
        </button>
    </form>
    @isset($total)
        La cadena: {{ $cadena }} tiene {{$total}} vocales
    @endisset
    </x-layouts.app>