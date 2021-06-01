@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav class="navbar navbar-toggler navbar-light bg-dark">
                <a class="btn btn-primary" href="{{route('blog.admin.categories.create')}}">Добавить</a>
            </nav>
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <tr>
                            <th>
                                №
                            </th>
                            <th>
                                Категория
                            </th>
                            <th>
                                Родитель
                            </th>
                        </tr>

                        @foreach($paginator as $item)

                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                    <a href="{{route('blog.admin.categories.edit',$item->id)}}">
                                        {{$item->title}}</a>
                                </td>
                                <td @if(in_array($item->parent_id,[0,1])) style="color:#ccc" @endif>
                                    {{$item->parent_id}}{{-- $item->parentCategory->title --}}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @if($paginator->total() > $paginator->count())
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{$paginator->links()}}
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
