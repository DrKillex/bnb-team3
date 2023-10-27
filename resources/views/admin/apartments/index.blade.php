@extends('layouts.app')
@section('content')
<div id="plate_index" class="row justify-content-center pb-5">
    <h1 class=" text-center p-3 my-5 shadow">
        I TUOI APPARTAMENTI
    </h1>


    @if ($apartments->count() > 0)
        @foreach ($apartments as $apartment)
            <div class="card m-3 shadow" style="width: 20rem;">
                <div class="wrapper_img p-3">
                    @if ($apartment->image)
                        <img src="{{ asset('storage/' . $apartment->image) }}" class="card-img-top" alt="{{ $apartment->name }}">
                    @else
                        <img src="https://www.tmedical.net/wp-content/uploads/2020/04/IMMAGINE-NON-DISPONIBILE.gif"
                            class="card-img-top h-100 w-100" alt="{{ $apartment->name }}">
                    @endif
                </div>
                <div class="card-body d-flex flex-wrap">
                    <h4 class="card-title col-12">{{ $apartment->name }}</h4>
                    <p class="card-text mb-2 col-12">{{ $apartment->description }}</p>
                    <div class="col-12">
                        @if ($apartment->rooms)
                            <p class="card-text d-inline-block mb-2 mr-2">Camere: {{ $apartment->rooms }}</p>
                        @endif
                        @if ($apartment->rooms)
                            <p class="card-text d-inline-block mb-2 mr-2">Letti: {{ $apartment->beds }}</p>
                        @endif
                        @if ($apartment->rooms)
                            <p class="card-text d-inline-block mb-2 mr-2">Bagni: {{ $apartment->bathrooms }}</p>
                        @endif
                        @if ($apartment->rooms)
                            <p class="card-text d-inline-block mb-2 mr-2">Mq: {{ $apartment->mq }}</p>
                        @endif
                        <p class="card-text d-inline-block mb-2 mr-2">Address: {{ $apartment->address }}</p>
                        <p class="card-text d-inline-block">

                            @if ($apartment->visible)
                                <p class="my-3 mx-3 badge rounded-pill text-bg-success text-center">Visibile</p>
                            @else
                                <p class="my-3 mx-3 badge rounded-pill text-bg-danger text-center">Nascosto</p>
                            @endif
                        </p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="">
                            <a href="{{ route('admin.apartments.show', $apartment->slug) }}"class="btn btn-primary">Dettagli</a>

                        </div>
                        <div class="mx-2">
                            <a href="{{ route('admin.apartments.edit', $apartment->slug) }}" class="btn btn-warning">Modifica</a>

                        </div>


                        <form class="form_delete_post my-2"
                            action="{{ route('admin.apartments.destroy', ['apartment' => $apartment->slug]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <h4>Non hai ancora aggiunto nessun appartamento.</h4>
    @endif
</div>
@endsection


