<x-layouts.app title="npalabras">

    <h1>Calcular el numero de palabras de una cadena ingresada</h1>
    <form action="{{ route('npalabras') }}" method="post">
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
        La cadena: {{ $cadena }} tiene {{$total}} palabras 
    @endisset
    </x-layouts.app>