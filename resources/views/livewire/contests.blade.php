<div class="p-6">
    <div class="flex items-center justify-end px-4 py-3 text-right sm:px-6">
        <x-jet-button wire:click="createShowModal">
            {{ __('Create') }}
        </x-jet-button>
    </div>
{{--    Data table--}}
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">TItle</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Description</th>
{{--                Load a small image here--}}
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Image</th>
                <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @if ($data->count())
            @foreach($data as $item)
                <tr>
                    <td class="px-6 py-4 text-sm whitespace-nowrap">{{$item->title}}</td>
                    <td class="px-6 py-4 text-sm whitespace-nowrap">{{$item->description}}</td>
                    <td class="px-6 py-4 text-sm whitespace-nowrap"><img src="{{$item->image}}" class="w-12" alt="2"></td>
                    <td class="px-6 py-4 text-right text-sm">
                        <x-jet-button wire:click="updateShowModal({{$item->id}})">
                            {{ __('Update') }}
                        </x-jet-button>
                        <x-jet-danger-button wire:click="createShowModal">
                            {{ __('Delete') }}
                        </x-jet-danger-button>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td class="px-6 py-4 text-sm whitespace-nowrap" colspan="4">No data resutls found!</td>
            </tr>
        @endif
        </tbody>
    </table>
{{--    Adds the pagination for this data set--}}
    {{$data->links()}}
{{--    Modal Form--}}
    <x-jet-dialog-modal wire:model="modalFormVisible">
        <x-slot name="title">
            {{ __('Save Page') }} {{$modelId}}
        </x-slot>

        <x-slot name="content">
            <div class="mt-4">
                <x-jet-label for="title" value="{{ __('Title') }}" />
                <x-jet-input id="title" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="title" />
                @error('title') <span class="error">{{$message}}</span> @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="description" value="{{ __('Description') }}" />
                <x-jet-input id="description" class="block mt-1 w-full" type="text" wire:model.debounce.800ms="description" />
                @error('description') <span class="error">{{$message}}</span> @enderror
            </div>
            <div class="mt-4">
                <x-jet-label for="image" value="{{ __('Image') }}" />
                <x-jet-input id="image" class="block mt-1 w-full" type="file" wire:model.debounce.800ms="image" />
                @error('image') <span class="error">{{$message}}</span> @enderror
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('modalFormVisible')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            @if($modelId)
                <x-jet-button class="ml-2" wire:click="update" wire:loading.attr="disabled">
                    {{ __('Update') }}
                </x-jet-button>
            @else
                <x-jet-button class="ml-2" wire:click="create" wire:loading.attr="disabled">
                    {{ __('Create') }}
                </x-jet-button>
            @endif
        </x-slot>
    </x-jet-dialog-modal>
</div>
