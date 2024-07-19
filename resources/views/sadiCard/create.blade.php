@extends('layouts.aap')
@section('content')
    <div class="container mt-5">
        <h1>Create </h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('sadiCard.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">

            </div>
            <div class="mb-3">
                <label for="mantra" class="form-label">Mantra</label>
                <textarea class="form-control textarea" id="mantra" name="mantra"></textarea>
            </div>
            <div class="mb-3">
                <label for="m_name" class="form-label">Mother's Name</label>
                <input type="text" class="form-control" id="m_name" name="m_name">
            </div>
            <div class="mb-3">
                <label for="f_name" class="form-label">Father's Name</label>
                <input type="text" class="form-control" id="f_name" name="f_name">
            </div>
            <div class="mb-3">
                <label for="in_request" class="form-label">In Request</label>
                <textarea class="form-control textarea" id="in_request" name="in_request"></textarea>
            </div>
            <div class="mb-3">
                <label for="data_and_time" class="form-label">Date and Time</label>
                <input type="datetime-local" class="form-control" id="data_and_time" name="data_and_time">
            </div>
            <div class="mb-3">
                <label for="venue_address" class="form-label">Venue Address</label>
                <textarea class="form-control textarea" id="venue_address" name="venue_address"></textarea>
            </div>
            <div class="mb-3">
                <label for="marriage_to_follow" class="form-label">Marriage to Follow</label>
                <textarea class="form-control textarea" id="marriage_to_follow" name="marriage_to_follow"></textarea>
            </div>
            <div class="mb-3">
                <label for="cardType_id" class="form-label">Card Type</label>
                <select class="form-control" id="cardType_id" name="cardType_id">
                    <option value="">Select</option>
                    @foreach($cardTypes as $cardType)

                        <option value="{{ $cardType->id }}" {{ old('cardType_id') == $cardType->id ? 'selected' : '' }}>{{ $cardType->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


@endsection
