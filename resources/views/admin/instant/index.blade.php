@extends('admin.layouts.master')
@section('content')

<div class="card card-preview">

    <div class="card-inner">

        <table class="datatable-init nowrap table">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Port Of Origin</th>
                    <th>Port Of Destination</th>
                    <th>Cargo Weight</th>
                    <th>Commodity and Container</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($instant as $key => $instant)
                    @if (is_object($instant))
                        <tr>
                            <td>{{ (int)$key + 1 }}</td>
                            <td>{{ optional($instant)->name }}</td>
                            <td>{{ optional($instant)->email }}</td>
                            <td>{{ optional($instant)->port_of_origin }}</td>
                            <td>{{ optional($instant)->port_of_destination }}</td>
                            <td>{{ optional($instant)->cargo_weight }}</td>
                            <td>{{ optional($instant)->commodity_details }}</td>
                           
                            <td>
                                <form id="delete-form-{{ $instant->id }}" action="{{ route('admin.instant.destroy', $instant->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure to delete this?')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $instant->id }}').submit();
                                } else {
                                    event.preventDefault();
                                }">Delete</button>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
            
        </table>
    </div>
</div><!-- .card-preview -->

@endsection