@extends('layouts.aap')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                        <form action="{{route('birthDayCard.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                                @error('image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control textarea" id="address" name="address">{{ old('address') }}</textarea>
                                @error('address')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="datetime">Date and Time</label>
                                <input type="datetime-local" class="form-control" id="datetime" name="datetime" value="{{ old('datetime') }}">
                                @error('datetime')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="other">Other</label>
                                <textarea class="form-control textarea" id="other" name="other">{{ old('other') }}</textarea>
                                @error('other')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="other_image">Other Image</label>
                                <input type="file" class="form-control-file" id="other_image" name="other_image">
                                @error('other_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="cardType_id">Card Type</label>
                                <select class="form-control " id="cardType_id" name="cardType_id">
                                    <option value="">Select Card Type</option>
                                    @foreach($cardTypes as $cardType)
                                        <option value="{{ $cardType->id }}" {{ old('cardType_id') == $cardType->id ? 'selected' : '' }}>
                                            {{ $cardType->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('cardType_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
