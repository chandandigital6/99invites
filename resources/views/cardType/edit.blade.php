@extends('layouts.aap')
@section('content')
    <div class="container mt-5">
        <h1>Create Service</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('cardType.update',$cardType->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $cardType->title) }}">
                @if ($errors->has('title'))
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="msg">Message</label>
                <textarea class="form-control" id="msg" name="msg">{{ old('msg', $cardType->msg) }}</textarea>
                @if ($errors->has('msg'))
                    <span class="text-danger">{{ $errors->first('msg') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                @endif
                @if($cardType->image)
                    <img src="{{ asset('storage/' . $cardType->image) }}" alt="Card Type Image" width="100">
                @endif
            </div>

            <div class="form-group">
                <label for="page">Page</label>
                <select class="form-control" id="page" name="page">
                    <option value="">Select Page</option>
                    <option value="card_1" {{ old('page', $cardType->page) == 'card_1' ? 'selected' : '' }}>Card 1</option>
                    <option value="card_2" {{ old('page', $cardType->page) == 'card_2' ? 'selected' : '' }}>Card 2</option>
                    <option value="card_3" {{ old('page', $cardType->page) == 'card_3' ? 'selected' : '' }}>Card 3</option>
                </select>
                @if ($errors->has('page'))
                    <span class="text-danger">{{ $errors->first('page') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="card_id">Card</label>
                <select class="form-control" id="card_id" name="card_id">
                    <option value="">Select Card</option>
                    @foreach($cards as $card)
                        <option value="{{ $card->id }}" {{ old('card_id', $cardType->card_id) == $card->id ? 'selected' : '' }}>{{ $card->card_title }}</option>
                    @endforeach
                </select>
                @if ($errors->has('card_id'))
                    <span class="text-danger">{{ $errors->first('card_id') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Create CardType</button>
        </form>

    </div>


@endsection
