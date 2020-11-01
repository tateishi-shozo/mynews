@extends('layouts.profile')
@section('title', '登録済みのMyプロフィール')

@section('content')
    <div class="container">
        <div class="row">
            <h2>登録済みのMyプロフィール</h2>
        </div>
        @csrf
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">名前</th>
                                <th width="20%">趣味</th>
                                <th width="50%">自己紹介</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $profile)
                                <tr>
                                    <td>{{ \Str::limit($profile->name, 100) }}</td>
                                    <td>{{ \Str::limit($profile->hobby, 250) }}</td>
                                    <td>{{ \Str::limit($profile->introduction, 250) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\ProfileController@edit',['id' => $profile->id]) }}">編集</a>
                                        </div>
                                         <div>
                                            <a href="{{ action('Admin\ProfileController@delete',['id' => $profile->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection