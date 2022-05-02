
<div>
<select wire:model="attribute" type="text" name="attribute" id="attribute" class="rounded border appearance-none bg-white dark:bg-gray-700 text-black dark:text-white border-gray-300 h-14 w-40 py-2 focus:outline-none focus:ring-2 focus:ring-blue-200 focus:border-blue-500 text-base pl-4 pr-10">
              <option value="" selected>select languages</option>
                 @foreach($languages as $language)
                    <option value="{{ $language }}">{{ $language }}</option>
                @endforeach
              </select>
</div> 