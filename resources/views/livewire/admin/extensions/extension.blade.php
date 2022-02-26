
<div>
    @if($updateMode)
        @include('livewire.admin.extensions.update')
    @else
        @include('livewire.admin.extensions.create')
    @endif


<table class="table-auto w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Nombre</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">acciones</th>
            </tr>
        </thead>
        <tbody> 'title' => 'required|min:5',
            'days' => 'required',
            'price' => 'required',
            'suplement' => 'required',
            'complement' => 'required',
            'abstract' => 'required',
            'img_url' => 'required',
            'destination_id' => 'required',
            @forelse ($extension as $item)
                <tr class="text-center">
                    <td class="border px-4 py-2">{{ $item->id }}</td>
                    <td class="border px-4 py-2">{{ $item->title }}</td>
                    <td class="border px-4 py-2">{{ $item->days }}</td>
                    <td class="border px-4 py-2">{{ $item->price }}</td>
                    <td class="border px-4 py-2">{{ $item->suplement }}</td>
                    <td class="border px-4 py-2">{{ $item->complement }}</td>
                    <td class="border px-4 py-2">{{ $item->name }}</td>
                    <td class="border px-4 py-2">{{ $item->email }}</td>
                    <td class="border px-4 py-2">
                        <button wire:click="edit({{ $item->id }})" class="px-2 py-1 bg-blue-200 text-blue-500 hover:bg-blue-500 hover:text-white rounded">Editar</button>
                        <button wire:click="destroy({{ $item->id }})" class="px-2 py-1 bg-red-200 text-red-500 hover:bg-red-500 hover:text-white rounded">Borrar</button>
                    </td>
                </tr>
            @empty
                <tr class="text-center">
                    <td colspan="4" class="py-3 italic">No hay información</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

