@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">留言列表</div>

                    <div class="panel-body">
                        <table border="1">
                            <tr>
                                <td> id </td>
                                <td> user_id </td>
                                <td> title </td>
                                <td> content </td>
                                <td> created_at </td>
                                <td> updated_at </td>
                            </tr>
                        </table>
                        @foreach($messages as $msg)
                            <table border="1">
                                <tr>
                                    <td> {{$msg['id']}} </td>
                                    <td> {{$msg['user_id']}} </td>
                                    <td> {{$msg['title']}} </td>
                                    <td> {{$msg['content']}} </td>
                                    <td> {{$msg['created_at']}} </td>
                                    <td> {{$msg['updated_at']}} </td>
                                </tr>
                            </table>
                            {{--<p>{{$msg['id']}}</p>--}}
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
