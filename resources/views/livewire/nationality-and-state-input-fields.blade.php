<div class="md:flex gap-2">
    <x-select id="nationality" name="nationality" label="Nationality *" group-class="md:w-6/12"  wire:model.live="nationality">
{{--        @foreach ($nationalities as $item)--}}
{{--            <option value="{{$item}}">{{$item}}</option>--}}
{{--        @endforeach--}}
            <option value="India">India</option>
            <option value="Nepal">Nepal</option>

    </x-select>
    <x-select id="state" name="state" label="State *" group-class="md:w-6/12"  wire:init="loadInitialStates" wire:model.live="state">
{{--        @if (isset($states))--}}
{{--            @foreach ($states as $item)--}}
{{--                <option value="{{$item['name']}}"  wire:key="{{ $loop->index }}">{{$item['name']}}</option>--}}
{{--            @endforeach--}}
{{--        @else --}}
{{--            <option value="" disabled>Select a country first</option>--}}
{{--        @endif--}}
        <option value="Himachal Pradesh" >Himachal Pradesh</option>
        <option value="UP" >UP</option>
        <option value="Punjab" >Punjab</option>

    </x-select>
</div>
