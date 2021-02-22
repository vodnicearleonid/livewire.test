<div>
    <h3>{{ implode(',',$greeting) }}, {{ strtoupper($name) }}! </h3>
    <input wire:model="name" type="text">
    <input wire:model="ok" type="checkbox">
    @if($ok)
        <h2>Show is true!</h2>
    @endif

    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Larevedere</option>
    </select>
</div>

{{--<div>
    <h3>{{ implode(',',$greeting) }}, {{ strtoupper($name) }}! </h3>
    <input wire:model="name" type="text">
    <input wire:model="ok" type="checkbox">
    @if($ok)
        <h2>Show is true!</h2>
    @endif

    <select wire:model="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye!</option>
        <option>Larevedere</option>
    </select>
</div>--}}

{{--<div>
    <h3>{{ $greeting }}, {{ strtoupper($name) }}! </h3>
    <input wire:model="name" type="text">
    <input wire:model="ok" type="checkbox">
    @if($ok)
        <h2>Show is true!</h2>
    @endif

    <select wire:model="greeting">
        <option>Hello</option>
        <option>Goodbye!</option>
        <option>Larevedere</option>
    </select>
</div>--}}

{{--<div>
    <h3>{{ $greeting }}, {{ strtoupper($cat) }}! COMPONENT CREATED </h3>
    <input wire:model="cat" type="text">
    <input wire:model="ok" type="checkbox">
    @if($ok)
        <h2>Show is true!</h2>
    @endif

    <select wire:model="greeting">
        <option>Hello</option>
        <option>Goodbye!</option>
        <option>Larevedere</option>
    </select>
</div>--}}

{{--<div>
    <h3>Cat, {{ strtoupper($cat) }}! COMPONENT CREATED </h3>
    <input wire:model="cat" type="text">
    <input wire:model="ok" type="checkbox">
    @if($ok)
        <h2>Show is true!</h2>
    @endif
</div>--}}

{{--<div>
    <h3>Cat, {{ strtoupper($cat) }}! COMPONENT CREATED </h3>
    <input wire:model="cat" type="text">
</div>--}}

{{--<div>
    <h3>Hello, {{ $name }}! COMPONENT CREATED </h3>
    <h3>Cat, {{ $cat }}! COMPONENT CREATED </h3>
    <input wire:model="cat" type="text">
</div>--}}

{{--<div>
        <h3>Hello, {{ $name }}! COMPONENT CREATED </h3>
    <h3>Cat, {{ $cat }}! COMPONENT CREATED </h3>
    <input wire:model="cat" type="text">
        <input wire:model.lazy="cat" type="text">
</div>--}}

{{--<div>
        <h3>Hello, {{ $name }}! COMPONENT CREATED </h3>
    <h3>Cat, {{ $cat }}! COMPONENT CREATED </h3>
    <input wire:model="cat" type="text">
        <input wire:model.debounce.2000ms="cat" type="text">
</div>--}}
