@extends('layouts.app')

@section('header')
    <div class="md:container md:mx-auto">
        <h3 class="font-medium leading-tight text-5xl mt-0 mb-2 text-black text-center">&nbsp;</h3>
    </div>
@endsection

@section('content')
    <div class="flex justify-center">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2 text-center">{{ ucfirst($pokemon->identifier) }}</h5>

                <form action="/{{ $pokemon->id }}" method="PATCH">
                    @csrf
                    @method('patch')
                    <div class="form-group mb-6">
                        <label for="identifier" class="form-label inline-block mb-2 text-gray-700">Name</label>
                        <input type="text" class="form-control
        block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="identifier"
                               aria-describedby="identifier" placeholder="Name" value="{{ ucfirst($pokemon->identifier) }}">
                    </div>

                    <div class="form-group mb-6">
                        <label for="species_id" class="form-label inline-block mb-2 text-gray-700">Species ID</label>
                        <input type="text" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="species_id"
                               placeholder="Species ID" value="{{ $pokemon->species_id }}">
                    </div>

                    <div class="form-group mb-6">
                        <label for="height" class="form-label inline-block mb-2 text-gray-700">Height</label>
                        <input type="text" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="weight"
                               placeholder="Weight" value="{{ $pokemon->height }}">
                    </div>

                    <div class="form-group mb-6">
                        <label for="height" class="form-label inline-block mb-2 text-gray-700">Weight</label>
                        <input type="text" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="height"
                               placeholder="Weight" value="{{ $pokemon->weight }}">
                    </div>

                    <div class="form-group mb-6">
                        <label for="base_experience" class="form-label inline-block mb-2 text-gray-700">Base Experience</label>
                        <input type="text" class="form-control block
        w-full
        px-3
        py-1.5
        text-base
        font-normal
        text-gray-700
        bg-white bg-clip-padding
        border border-solid border-gray-300
        rounded
        transition
        ease-in-out
        m-0
        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="base_experience"
                               placeholder="Base Experience" value="{{ $pokemon->base_experience }}">
                    </div>


                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 text-center">
                            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <button type="submit" class="inline-block px-6 py-2.5 bg-gray-800 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-900 hover:shadow-lg focus:bg-gray-900 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-900 active:shadow-lg transition duration-150 ease-in-out">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

        </div>
    </div>
@endsection
