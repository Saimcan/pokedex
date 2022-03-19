@extends('layouts.app')

<div class="md:container md:mx-auto">
    <h3 class="font-medium leading-tight text-5xl mt-0 mb-2 text-black text-center">&nbsp;</h3>
</div>

@section('messages')
    @if(\Illuminate\Support\Facades\Session::has('message'))
        <div class="md:container md:mx-auto">
            <div class="p-10 flex flex-col gap-5 items-center">
                <div class="flex bg-white flex-row shadow-md border border-gray-100 rounded-lg overflow-hidden md:w-5/12">
                    <div class="flex w-3 bg-gradient-to-t from-green-500 to-green-400"></div>
                    <div class="flex-1 p-3">
                        <h1 class="md:text-xl text-gray-600">Success</h1>
                        <p class="text-gray-400 text-xs md:text-sm font-light">{{ \Illuminate\Support\Facades\Session::get('message') }}</p>
                    </div>
                </div>
            </div>
        </div>
    @else
    @endif
@endsection

@section('header')
    <div class="md:container md:mx-auto">
        <h3 class="font-medium leading-tight text-5xl mt-0 mb-2 text-black text-center">&nbsp;</h3>
    </div>
@endsection

@section('content')
    <div class="flex justify-center">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2 text-center">{{ ucfirst($pokemon->identifier) }}</h5>

                <form action="/{{ $pokemon->id }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group mb-6">
                        <label for="identifier" class="form-label inline-block mb-2 text-gray-700">Name</label>
                        <input name="name" type="text" class="form-control
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
                        <input name="species_id" type="text" class="form-control block
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
                        <input name="height" type="text" class="form-control block
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
                        <input name="weight" type="text" class="form-control block
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
                        <input name="base_experience" type="text" class="form-control block
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
