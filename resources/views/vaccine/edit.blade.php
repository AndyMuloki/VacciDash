<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Vaccine
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="product_name" class="block font-medium text-sm text-gray-700">Product Name</label>
                            <input type="text" name="product_name" id="product_name" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('product_name',$item->product_name) }}" />
                            @error('product_name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="lot_number" class="block font-medium text-sm text-gray-700">Lot Number</label>
                            <input type="text" name="lot_number" id="lot_number" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('lot_number',$item->lot_number) }}" />
                            @error('lot_number')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="amount(vials)" class="block font-medium text-sm text-gray-700">Amount in Vials</label>
                            <input type="number" name="amount(vials)" id="amount(vials)" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('amount(vials)',$item->amount(vials) }}" />
                            @error('amount(vials)')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="expiry_date" class="block font-medium text-sm text-gray-700">Expiry Date</label>
                            <input type="date" name="expiry_date" id="expiry_date" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                value="{{ old('expiry_date',$item->expiry_date}}" />
                            @error('expiry_date')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>