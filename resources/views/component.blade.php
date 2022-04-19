<style>
    .upercase {
        text-transform: uppercase;
    }

    .red {
        color: red;
    }

    .green {
        color: green;
    }
</style>
<x-alert title="Teste de componente!" :name="$name" class="green">
    <x-slot name="header">
        <h2>atigo cadastrat</h2>
    </x-slot>
    <p>defeito</p>
</x-alert>
