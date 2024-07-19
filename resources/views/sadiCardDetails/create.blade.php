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

        <form action="{{ route('sadiCardDetails.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Haldi Event Section -->
            <div class="card mb-3">
                <div class="card-header">
                    Haldi Event
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="haldi_image">Haldi Image</label>
                        <input type="file" class="form-control-file" id="haldi_image" name="haldi_image">
                        @error('haldi_image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="haldi_title">Haldi Title</label>
                        <input type="text" class="form-control" id="haldi_title" name="haldi_title" value="{{ old('haldi_title') }}">
                        @error('haldi_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="haldi_msg">Haldi Message</label>
                        <textarea class="form-control textarea" id="haldi_msg" name="haldi_msg">{{ old('haldi_msg') }}</textarea>
                        @error('haldi_msg')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="haldi_date_time">Haldi Date and Time</label>
                        <input type="text" class="form-control" id="haldi_date_time" name="haldi_date_time" value="{{ old('haldi_date_time') }}">
                        @error('haldi_date_time')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="haldi_venue">Haldi Venue</label>
                        <input type="text" class="form-control" id="haldi_venue" name="haldi_venue" value="{{ old('haldi_venue') }}">
                        @error('haldi_venue')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Repeat similar sections for Mehndi, Sangeet, Barat, Vidai, Reception -->
            <!-- Mehndi Event Section -->
            <div class="card mb-3">
                <div class="card-header">
                    Mehndi Event
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="mehndi_image">Mehndi Image</label>
                        <input type="file" class="form-control-file" id="mehndi_image" name="mehndi_image">
                        @error('mehndi_image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mehndi_title">Mehndi Title</label>
                        <input type="text" class="form-control" id="mehndi_title" name="mehndi_title" value="{{ old('mehndi_title') }}">
                        @error('mehndi_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mehndi_msg">Mehndi Message</label>
                        <textarea class="form-control textarea" id="mehndi_msg" name="mehndi_msg">{{ old('mehndi_msg') }}</textarea>
                        @error('mehndi_msg')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mehndi_date_time">Mehndi Date and Time</label>
                        <input type="text" class="form-control" id="mehndi_date_time" name="mehndi_date_time" value="{{ old('mehndi_date_time') }}">
                        @error('mehndi_date_time')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mehndi_venue">Mehndi Venue</label>
                        <input type="text" class="form-control" id="mehndi_venue" name="mehndi_venue" value="{{ old('mehndi_venue') }}">
                        @error('mehndi_venue')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Sangeet Event Section -->
            <div class="card mb-3">
                <div class="card-header">
                    Sangeet Event
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="sangeet_image">Sangeet Image</label>
                        <input type="file" class="form-control-file" id="sangeet_image" name="sangeet_image">
                        @error('sangeet_image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sangeet_title">Sangeet Title</label>
                        <input type="text" class="form-control" id="sangeet_title" name="sangeet_title" value="{{ old('sangeet_title') }}">
                        @error('sangeet_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sangeet_msg">Sangeet Message</label>
                        <textarea class="form-control textarea" id="sangeet_msg" name="sangeet_msg">{{ old('sangeet_msg') }}</textarea>
                        @error('sangeet_msg')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sangeet_date_time">Sangeet Date and Time</label>
                        <input type="text" class="form-control" id="sangeet_date_time" name="sangeet_date_time" value="{{ old('sangeet_date_time') }}">
                        @error('sangeet_date_time')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sangeet_venue">Sangeet Venue</label>
                        <input type="text" class="form-control" id="sangeet_venue" name="sangeet_venue" value="{{ old('sangeet_venue') }}">
                        @error('sangeet_venue')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Barat Event Section -->
            <div class="card mb-3">
                <div class="card-header">
                    Barat Event
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="barat_image">Barat Image</label>
                        <input type="file" class="form-control-file" id="barat_image" name="barat_image">
                        @error('barat_image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="barat_title">Barat Title</label>
                        <input type="text" class="form-control" id="barat_title" name="barat_title" value="{{ old('barat_title') }}">
                        @error('barat_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="barat_msg">Barat Message</label>
                        <textarea class="form-control textarea" id="barat_msg" name="barat_msg">{{ old('barat_msg') }}</textarea>
                        @error('barat_msg')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="barat_date_time">Barat Date and Time</label>
                        <input type="text" class="form-control" id="barat_date_time" name="barat_date_time" value="{{ old('barat_date_time') }}">
                        @error('barat_date_time')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="barat_venue">Barat Venue</label>
                        <input type="text" class="form-control" id="barat_venue" name="barat_venue" value="{{ old('barat_venue') }}">
                        @error('barat_venue')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>


            <!-- Vidai Event Section -->
            <div class="card mb-3">
                <div class="card-header">
                    Vidai Event
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="vidai_image">Vidai Image</label>
                        <input type="file" class="form-control-file" id="vidai_image" name="vidai_image">
                        @error('vidai_image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="vidai_title">Vidai Title</label>
                        <input type="text" class="form-control" id="vidai_title" name="vidai_title" value="{{ old('vidai_title') }}">
                        @error('vidai_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="vidai_msg">Vidai Message</label>
                        <textarea class="form-control textarea" id="vidai_msg" name="vidai_msg">{{ old('vidai_msg') }}</textarea>
                        @error('vidai_msg')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="vidai_date_time">Vidai Date and Time</label>
                        <input type="text" class="form-control" id="vidai_date_time" name="vidai_date_time" value="{{ old('vidai_date_time') }}">
                        @error('vidai_date_time')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="vidai_venue">Vidai Venue</label>
                        <input type="text" class="form-control" id="vidai_venue" name="vidai_venue" value="{{ old('vidai_venue') }}">
                        @error('vidai_venue')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>


            <!-- Reception Event Section -->
            <div class="card mb-3">
                <div class="card-header">
                    Reception Event
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="reception_image">Reception Image</label>
                        <input type="file" class="form-control-file" id="reception_image" name="reception_image">
                        @error('reception_image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="reception_title">Reception Title</label>
                        <input type="text" class="form-control" id="reception_title" name="reception_title" value="{{ old('reception_title') }}">
                        @error('reception_title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="reception_msg">Reception Message</label>
                        <textarea class="form-control textarea" id="reception_msg" name="reception_msg">{{ old('reception_msg') }}</textarea>
                        @error('reception_msg')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="reception_date_time">Reception Date and Time</label>
                        <input type="text" class="form-control" id="reception_date_time" name="reception_date_time" value="{{ old('reception_date_time') }}">
                        @error('reception_date_time')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="reception_venue">Reception Venue</label>
                        <input type="text" class="form-control" id="reception_venue" name="reception_venue" value="{{ old('reception_venue') }}">
                        @error('reception_venue')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- Child Message Section -->
            <div class="card mb-3">
                <div class="card-header">
                    Child Message
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="child_msg">Child Message</label>
                        <textarea class="form-control textarea" id="child_msg" name="child_msg">{{ old('child_msg') }}</textarea>
                        @error('child_msg')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Family Details Section -->
            <div class="card mb-3">
                <div class="card-header">
                    Family Details (Father)
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="f_family_title_name">Father's Family Title/Name</label>
                        <input type="text" class="form-control" id="f_family_title_name" name="f_family_title_name" value="{{ old('f_family_title_name') }}">
                        @error('f_family_title_name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="f_family_member_name">Father's Family Member Name</label>
                        <input type="text" class="form-control" id="f_family_member_name" name="f_family_member_name" value="{{ old('f_family_member_name') }}">
                        @error('f_family_member_name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="f_contact_details">Father's Contact Details</label>
                        <textarea class="form-control textarea" id="f_contact_details" name="f_contact_details">{{ old('f_contact_details') }}</textarea>
                        @error('f_contact_details')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="f_map_location">Father's Map Location</label>
                        <input type="text" class="form-control" id="f_map_location" name="f_map_location" value="{{ old('f_map_location') }}">
                        @error('f_map_location')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>


            <!-- Family Details Section -->
            <div class="card mb-3">
                <div class="card-header">
                    Family Details (Mother)
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="m_family_title_name">Mother's Family Title/Name</label>
                        <input type="text" class="form-control" id="m_family_title_name" name="m_family_title_name" value="{{ old('m_family_title_name') }}">
                        @error('m_family_title_name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="m_family_member_name">Mother's Family Member Name</label>
                        <input type="text" class="form-control" id="m_family_member_name" name="m_family_member_name" value="{{ old('m_family_member_name') }}">
                        @error('m_family_member_name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="m_contact_details">Mother's Contact Details</label>
                        <textarea class="form-control textarea" id="m_contact_details" name="m_contact_details">{{ old('m_contact_details') }}</textarea>
                        @error('m_contact_details')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="m_map_location">Mother's Map Location</label>
                        <input type="text" class="form-control" id="m_map_location" name="m_map_location" value="{{ old('m_map_location') }}">
                        @error('m_map_location')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>


            <!-- Sadi Card  -->
            <div class="card mb-3">
                <div class="card-header">
                 SadiCard
                </div>
                <div class="card-body">
                    <div class="form-group">
{{--                        <label for="m_family_title_name">Mother's Family Title/Name</label>--}}

                        <label for="sadiCard_id" class="form-label">Select Sadi Card</label>
                        <select class="form-control" id="sadiCard_id" name="sadiCard_id">
                            <option value="">Select</option>
                            @foreach($sadiCards as $sadiCard)
                                <option value="{{ $sadiCard->id }}">{{ $sadiCard->m_name }} & {{ $sadiCard->f_name }}</option>
                        @endforeach
                        </select>
                    </div>



                </div>
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


@endsection
