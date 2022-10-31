<x-layouts.app title="fibo">

<h1>Serie Fibonacci hasta un numero dado</h1>
    <form action="{{ route('fibo') }}" method="post">
        @csrf
        <input 
            type="number" 
            value="{{ isset($n) ? $n : 1  }}" 
            min="1" 
            max="30" 
            required
            name="n"
        >
        
        @error('n')
        <div>
            {{ message }}
        </div>
        @enderror
        <button type="submit">
            Calcular
        </button>
    </form>
    @isset($suma)
        <section>
           La serie Fibonacci hasta {{ $n }} es: 
        @for ($i = 0; $i <$n; $i++)
            {{ $fibonacci[$i] }}
        @endfor
        </section>
    @endisset

</x-layouts.app>