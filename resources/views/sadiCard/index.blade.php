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
                            <h1>Card </h1>
                            <a href="{{ route('sadiCard.create') }}" class="btn btn-light">Create </a>
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
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Mantra</th>
                                    <th>Mother's Name</th>
                                    <th>Father's Name</th>
                                    <th>In Request</th>
                                    <th>Date and Time</th>
                                    <th>Venue Address</th>
                                    <th>Marriage to Follow</th>
                                    <th>Card Type</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($sadiCardData as $sadiCard)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            @if($sadiCard->image)
                                                <img src="{{ asset('storage/'.$sadiCard->image) }}" alt="{{ $sadiCard->title }}" style="max-width: 100px;">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>{{ $sadiCard->mantra }}</td>
                                        <td>{{ $sadiCard->m_name }}</td>
                                        <td>{{ $sadiCard->f_name }}</td>
                                        <td>{{ $sadiCard->in_request }}</td>
                                        <td>{{ $sadiCard->data_and_time }}</td>
                                        <td>{{ $sadiCard->venue_address }}</td>
                                        <td>{{ $sadiCard->marriage_to_follow }}</td>
                                        <td>{{ $sadiCard->cardType->title ?? 'N/A' }}</td>
                                        <td>
                                            <a href="{{ route('sadiCard.edit', $sadiCard->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('sadiCard.delete', $sadiCard->id) }}" class="btn btn-danger">Delete</a>
                                            <a href="{{ route('sadiCard.duplicate', $sadiCard->id) }}" class="btn btn-warning">Duplicate</a>
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
