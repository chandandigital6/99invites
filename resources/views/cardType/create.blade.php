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

        <form action="{{ route('cardType.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="msg">Message</label>
                <textarea name="msg" id="msg" class="textarea">{{ old('msg') }}</textarea>
                @error('msg')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @error('image')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="page">Page</label>
                <select class="form-control" id="page" name="page">
                    <option value="">Select Page</option>
                    <option value="card_1" {{ old('page') == 'card_1' ? 'selected' : '' }}>Card 1</option>
                    <option value="card_2" {{ old('page') == 'card_2' ? 'selected' : '' }}>Card 2</option>
                    <option value="card_3" {{ old('page') == 'card_3' ? 'selected' : '' }}>Card 3</option>
                </select>
                @if ($errors->has('page'))
                    <span class="text-danger">{{ $errors->first('page') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="card_id">Card</label>
                <select name="card_id" id="card_id" class="form-control">
                    <option value="">Select Card</option>
                    @foreach($cards as $card)
                        <option value="{{ $card->id }}" {{ old('card_id') == $card->id ? 'selected' : '' }}>{{ $card->card_title }}</option>
                    @endforeach
                </select>
                @error('card_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create CardType</button>
        </form>

    </div>


@endsection
