<div>
    <div class="mb-8">
        <label class="inline-block w-32 font-bold">Region:</label>
        <select name="region_id" wire:model="region"
            class="p-2 px-4 py-2 pr-8 leading-tight bg-white border rounded shadow p-2 bg-white" style="width:100%">
            <option value=''>Choose a region</option>
            @foreach ($regions as $region)
                <option value={{ $region->id }} class="form-control">{{ $region->name }}</option>
            @endforeach
        </select>
    </div>
    @if (count($districts) > 0)
        <div class="mb-8">
            <label class="inline-block w-32 font-bold">District:</label>
            <select name="district_id" wire:model="district"
                class="p-2 px-4 py-2 pr-8 leading-tight bg-white border border-gray-400 rounded shadow appearance-none hover:border-gray-500 focus:outline-none focus:shadow-outline"
                style="width:100%">
                <option value=''>Choose a district</option>
                @foreach ($districts as $district)
                    <option value={{ $district->id }}>{{ $district->name }}</option>
                @endforeach
            </select>
        </div>
    @endif
</div>
