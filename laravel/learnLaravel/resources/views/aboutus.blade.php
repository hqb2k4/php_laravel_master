<div>
    <h1>About Us</h1>
    <p>This is the about us page of our Laravel application.</p>
    <h2>Name: {{ $name }}</h2>
    <h2>Age: {{ $age }}</h2>

    <!-- Blade Directive -->
    @for ($i = 0; $i < 5; $i++)
        <p>Iteration {{ $i + 1 }}: Breathing in, I calm body and mind. Breathing out, I smile./p>   
    @endfor

    <!-- SubView -->
    @include('SubView.Input', ['myName' => $name])
</div>
