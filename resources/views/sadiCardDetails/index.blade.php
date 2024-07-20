@extends('layouts.aap')

@section('content')


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <h1>CardDetails </h1>
                            <a href="{{ route('sadiCardDetails.create') }}" class="btn btn-light">Create </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="" method="GET" class="mb-4">
                            <div class="input-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Haldi Image</th>
                                    <th>Haldi Title</th>
                                    <th>Haldi Message</th>
                                    <th>Haldi Date & Time</th>
                                    <th>Haldi Venue</th>
                                    <th>Mehndi Image</th>
                                    <th>Mehndi Title</th>
                                    <th>Mehndi Message</th>
                                    <th>Mehndi Date & Time</th>
                                    <th>Mehndi Venue</th>
                                    <th>Card Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($sadiCardDetailsData as $sadiCardDetails)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if($sadiCardDetails->haldi_image)
                                                <img src="{{ asset('storage/'.$sadiCardDetails->haldi_image) }}" alt="Haldi Image" style="max-width: 100px;">
                                            @endif
                                        </td>
                                        <td>{{ $sadiCardDetails->haldi_title }}</td>
                                        <td>{{ $sadiCardDetails->haldi_msg }}</td>
                                        <td>{{ $sadiCardDetails->haldi_date_time }}</td>
                                        <td>{{ $sadiCardDetails->haldi_venue }}</td>
                                        <td>
                                            @if($sadiCardDetails->mehndi_image)
                                                <img src="{{ asset('storage/'.$sadiCardDetails->mehndi_image) }}" alt="Mehndi Image" style="max-width: 100px;">
                                            @endif
                                        </td>
                                        <td>{{ $sadiCardDetails->mehndi_title }}</td>
                                        <td>{{ $sadiCardDetails->mehndi_msg }}</td>
                                        <td>{{ $sadiCardDetails->mehndi_date_time }}</td>
                                        <td>{{ $sadiCardDetails->mehndi_venue }}</td>

                                        <td>
                                            @if($sadiCardDetails->sadiCard)
                                                {{ $sadiCardDetails->sadiCard->m_name }} & {{ $sadiCardDetails->sadiCard->f_name }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('sadiCardDetails.edit', $sadiCardDetails->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('sadiCardDetails.delete', $sadiCardDetails->id) }}" class="btn btn-danger">Delete</a>
                                            <a href="{{ route('sadiCardDetails.duplicate', $sadiCardDetails->id) }}" class="btn btn-warning">Duplicate</a>
                                            <a href="{{ route('sadiCardDetails.show', $sadiCardDetails->id) }}" class="btn btn-info">show</a>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="11">No Sadi Cards found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card-footer">
                        <!-- Pagination links can be added here if needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
