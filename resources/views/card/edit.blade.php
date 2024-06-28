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

        <form action="{{ route('card.update',$card->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="card_title">Card Title:</label>
                <input type="text" class="form-control" id="card_title" name="card_title" value="{{ old('card_title', $card->card_title) }}">
                @error('card_title')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="card_heading">Card Heading:</label>
                <input type="text" class="form-control" id="card_heading" name="card_heading" value="{{ old('card_heading', $card->card_heading) }}">
                @error('card_heading')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if($card->image)
                    <img src="{{ asset('storage/' . $card->image) }}" alt="{{ $card->card_title }}" style="max-width: 100px; margin-top: 10px;">
                @endif
                @error('image')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" id="status" name="status">
                    <option value="0" {{ old('status', $card->status) == '0' ? 'selected' : '' }}>Inactive</option>
                    <option value="1" {{ old('status', $card->status) == '1' ? 'selected' : '' }}>Active</option>
                </select>
                @error('status')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update Card</button>
        </form>

    </div>


@endsection
