<div>
    <h2 wire:mouseover="$set('name','LEO')">{{ $name }}</h2>
    <form wire:submit.prevent="$set('name', 'New Value')" action="#">
        <input wire:model="name" type="text">
        <button>submit</button>
    </form>
</div>

{{--lectia 3--}}

{{--<div>--}}
{{--    <h2 wire:mouseover="$set('name','LEO')">{{ $name }}</h2>--}}
{{--    <form wire:submit.prevent="$set('name', 'New Value')" action="#">--}}
{{--        <input wire:model="name" type="text">--}}
{{--        <button>submit</button>--}}
{{--    </form>--}}
{{--</div>--}}


{{--<div>--}}
{{--    <h2>{{ $name }}</h2>--}}
{{--    <form wire:submit.prevent="$set('name', 'New Value')" action="#">--}}
{{--        <input wire:model="name" type="text">--}}
{{--        <button>submit</button>--}}
{{--    </form>--}}
{{--</div>--}}

{{--<div>--}}
{{--    <h2>{{ $name }}</h2>--}}
{{--    <input wire:model="name" type="text">--}}
{{--    <button wire:click="$set('name', 'New Value')">reset input!</button>--}}

{{--</div>--}}


{{--<div>--}}
{{--    <h2>{{ $name }}</h2>--}}
{{--    <input wire:model="name" type="text">--}}
{{--    <button wire:click="resetName($event.target.innerText)">reset input!</button>--}}

{{--</div>--}}



{{--<div>--}}
{{--    <h2>{{ $name }}</h2>--}}
{{--    <input wire:model="name" type="text">--}}
{{--    <button wire:click="resetName('Initial')">reset input!</button>--}}

{{--</div>--}}


{{--<div>
    <h2>{{ $name }}</h2>
    <input wire:model="name" type="text">
    <button wire:click="resetName">reset input!</button>

</div>--}}



{{--lectia 2--}}

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

{{--lectia 1--}}
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
