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
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contact as $key => $contact)
                    @if (is_object($contact))
                        <tr>
                            <td>{{ (int)$key + 1 }}</td>
                            <td>{{ optional($contact)->name }}</td>
                            <td>{{ optional($contact)->email }}</td>
                            <td>{{ optional($contact)->subject }}</td>
                            <td>{{ optional($contact)->message }}</td>
                            <td>
                                <form id="delete-form-{{ $contact->id }}" action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure to delete this?')){
                                    event.preventDefault();
                                    document.getElementById('delete-form-{{ $contact->id }}').submit();
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