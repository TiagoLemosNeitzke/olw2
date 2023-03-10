<x-app-layout>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="px-4 sm:px-6 lg:px-8">

                <x-heading
                    title="Clients"
                    description="A list of all clients."
                />

                <div class="w-full overflow-hidden md:rounded-lg">
                    <livewire:table
                        resource="Client"
                        :columns="[
                         ['label' => 'Client', 'column' => 'user.name'],
                        ['label' => 'Email','column' => 'user.email'],
                        ['label' => 'City', 'column' => 'address.city'],
                        ['label' => 'State', 'column' => 'address.state']
                    ]
                    "
                        edit="clients.edit"
                        delete="clients.destroy"
                    ></livewire:table>
                </div>

            </div>
        </div>
</x-app-layout>