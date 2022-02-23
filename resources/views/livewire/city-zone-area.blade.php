<div>
    <label class="inline-block">
        <span class="text-gray-700">
            Choose City
        </span>
        <select
            id="city"
            wire:model="selectedCityId"
            wire:change="getZonesByCityId"
            class="block w-full mt-1 rounded-md border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 select2">
            <option value="">---</option>
            @forelse ($cities as $city)
                <option value="{{ $city['id'] }}">{{ $city['name'] }}</option>
            @empty

            @endforelse
        </select>
    </label>

    <label class="inline-block">
        <span class="text-gray-700">
            Choose Zone
        </span>
        <select
            id="zone"
              wire:model="selectedZoneId"
             wire:change="getAreasByZoneId"
            class="block w-full mt-1 rounded-md border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 select2">
            <option value="">---</option>
            @forelse ($zones as $zone)
                <option value="{{ $zone['id'] }}">{{ $zone['name'] }}</option>
            @empty

            @endforelse
        </select>
    </label>


    <label class="inline-block">
        <span class="text-gray-700">
            Choose Area
        </span>
        <select
            id="area"
            wire:model="selectedAreaId"
            class="block w-full mt-1 rounded-md border-transparent focus:border-gray-500 focus:bg-white focus:ring-0 select2">
            <option value="">---</option>
            @forelse ($areas as $area)
                <option value="{{ $area['id'] }}">{{ $area['name'] }}</option>
            @empty

            @endforelse
        </select>
    </label>

</div>


@push('js')

    <script>

        $("#city").on('change', function(e) {
            let id = $(this).val()
            @this.set('selectedCityId', id);
            livewire.emit('getZonesByCityId');
        })


        $("#zone").on('change', function(e) {
            let id = $(this).val()
            @this.set('selectedZoneId', id);
            livewire.emit('getAreasByZoneId', id);
        })

    </script>


@endpush
