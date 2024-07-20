@extends('layouts.aap')
@section('content')


    <div class="container">
        <div class="card">
            <div class="card-header">
                Sadi Card Details
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $sadiCardDetails->sadiCard->m_name }} & {{ $sadiCardDetails->sadiCard->f_name }}</h5>

                <h6>Father's Family Details</h6>
                <p><strong>Title/Name:</strong> {{ $sadiCardDetails->f_family_title_name }}</p>
                <p><strong>Member Name:</strong> {{ $sadiCardDetails->f_family_member_name }}</p>
                <p><strong>Contact Details:</strong> {{ $sadiCardDetails->f_contact_details }}</p>
                <p><strong>Map Location:</strong> {{ $sadiCardDetails->f_map_location }}</p>

                <h6>Mother's Family Details</h6>
                <p><strong>Title/Name:</strong> {{ $sadiCardDetails->m_family_title_name }}</p>
                <p><strong>Member Name:</strong> {{ $sadiCardDetails->m_family_member_name }}</p>
                <p><strong>Contact Details:</strong> {{ $sadiCardDetails->m_contact_details }}</p>
                <p><strong>Map Location:</strong> {{ $sadiCardDetails->m_map_location }}</p>

                <h6>Events</h6>
                <p><strong>Haldi Title:</strong> {{ $sadiCardDetails->haldi_title }}</p>
                <p><strong>Haldi Message:</strong> {{ $sadiCardDetails->haldi_msg }}</p>
                <p><strong>Haldi Date and Time:</strong> {{ $sadiCardDetails->haldi_date_time }}</p>
                <p><strong>Haldi Venue:</strong> {{ $sadiCardDetails->haldi_venue }}</p>
                @if($sadiCardDetails->haldi_image)
                    <p><strong>Haldi Image:</strong> <img src="{{ Storage::url($sadiCardDetails->haldi_image) }}" alt="Haldi Image" class="img-thumbnail" style="max-width: 150px;"></p>
                @endif

                <p><strong>Mehndi Title:</strong> {{ $sadiCardDetails->mehndi_title }}</p>
                <p><strong>Mehndi Message:</strong> {{ $sadiCardDetails->mehndi_msg }}</p>
                <p><strong>Mehndi Date and Time:</strong> {{ $sadiCardDetails->mehndi_date_time }}</p>
                <p><strong>Mehndi Venue:</strong> {{ $sadiCardDetails->mehndi_venue }}</p>
                @if($sadiCardDetails->mehndi_image)
                    <p><strong>Mehndi Image:</strong> <img src="{{ Storage::url($sadiCardDetails->mehndi_image) }}" alt="Mehndi Image" class="img-thumbnail" style="max-width: 150px;"></p>
                @endif

                <p><strong>Sangeet Title:</strong> {{ $sadiCardDetails->sangeet_title }}</p>
                <p><strong>Sangeet Message:</strong> {{ $sadiCardDetails->sangeet_msg }}</p>
                <p><strong>Sangeet Date and Time:</strong> {{ $sadiCardDetails->sangeet_date_time }}</p>
                <p><strong>Sangeet Venue:</strong> {{ $sadiCardDetails->sangeet_venue }}</p>
                @if($sadiCardDetails->sangeet_image)
                    <p><strong>Sangeet Image:</strong> <img src="{{ Storage::url($sadiCardDetails->sangeet_image) }}" alt="Sangeet Image" class="img-thumbnail" style="max-width: 150px;"></p>
                @endif

                <p><strong>Barat Title:</strong> {{ $sadiCardDetails->barat_title }}</p>
                <p><strong>Barat Message:</strong> {{ $sadiCardDetails->barat_msg }}</p>
                <p><strong>Barat Date and Time:</strong> {{ $sadiCardDetails->barat_date_time }}</p>
                <p><strong>Barat Venue:</strong> {{ $sadiCardDetails->barat_venue }}</p>
                @if($sadiCardDetails->barat_image)
                    <p><strong>Barat Image:</strong> <img src="{{ Storage::url($sadiCardDetails->barat_image) }}" alt="Barat Image" class="img-thumbnail" style="max-width: 150px;"></p>
                @endif

                <p><strong>Vidai Title:</strong> {{ $sadiCardDetails->vidai_title }}</p>
                <p><strong>Vidai Message:</strong> {{ $sadiCardDetails->vidai_msg }}</p>
                <p><strong>Vidai Date and Time:</strong> {{ $sadiCardDetails->vidai_date_time }}</p>
                <p><strong>Vidai Venue:</strong> {{ $sadiCardDetails->vidai_venue }}</p>
                @if($sadiCardDetails->vidai_image)
                    <p><strong>Vidai Image:</strong> <img src="{{ Storage::url($sadiCardDetails->vidai_image) }}" alt="Vidai Image" class="img-thumbnail" style="max-width: 150px;"></p>
                @endif

                <p><strong>Reception Title:</strong> {{ $sadiCardDetails->reception_title }}</p>
                <p><strong>Reception Message:</strong> {{ $sadiCardDetails->reception_msg }}</p>
                <p><strong>Reception Date and Time:</strong> {{ $sadiCardDetails->reception_date_time }}</p>
                <p><strong>Reception Venue:</strong> {{ $sadiCardDetails->reception_venue }}</p>
                @if($sadiCardDetails->reception_image)
                    <p><strong>Reception Image:</strong> <img src="{{ Storage::url($sadiCardDetails->reception_image) }}" alt="Reception Image" class="img-thumbnail" style="max-width: 150px;"></p>
                @endif

                <h6>Child Message</h6>
                <p>{{ $sadiCardDetails->child_msg }}</p>

                <a href="{{ route('sadiCardDetails.index') }}" class="btn btn-primary">Back to List</a>
            </div>
        </div>
    </div>


@endsection
