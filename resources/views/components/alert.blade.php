<div>
    {{ $header }}
    <h1 {{ $attributes->merge(['class' => 'upercase ' . $class]) }}>{{ $title }} {{ $class }}</h1>
    <p>Criado por : {{ $name }}</p>
    {{ $slot }}
</div>
