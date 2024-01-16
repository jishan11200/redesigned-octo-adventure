@extends('admin.layouts.master')
@section('content')
<a href="{{ route('newsroom.create')}}" class="btn btn-primary btn-sm my-3"><em class="icon ni ni-user-add"></em> Add Newsroom</a>
<div class="card card-preview">

    <div class="card-inner">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{ $message }}</p>
        </div>
        @endif
        <table class="datatable-init table table-responsive">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($newsrooms as $key=>$newsroom)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$newsroom->title}}</td>
                   
                    <td>{{$newsroom->sub_title}}</td>

                    
                    <td><img src="{{asset('public/uploads/newsroom/'.$newsroom->image)}}" style="width: 140px; height:80px;" alt="" srcset=""></td>
                    <td>
                        <a href="{{route('newsroom.edit',$newsroom->id)}}"class="btn btn-primary btn-sm float-left"><em class="icon ni ni-edit"></em></a>
                        <form id="delete-form-{{$newsroom->id}}" action="{{route('newsroom.destroy',$newsroom->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                        </form>
                        <button type="button" class="btn btn-danger btn-sm float-left" onclick="if(confirm('Are you sure to delete this?')){
                            event.preventDefault();
                            document.getElementById('delete-form-{{$newsroom->id}}').submit();
                        }else{
                            event.preventDefault();
                        }
                        "><em class="icon ni ni-trash"></em></button>
                    </td>

                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>
@endsection