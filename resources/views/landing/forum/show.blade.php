@extends('landing.app')
@section('content')
<div class="first-content">  
    <div class="container">   
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-4" 
                            style="
                                display: flex;
                                justify-content: space-between;
                                align-items: center;    
                            ">
                            <div style="justify-content: flex-start; align-items: center; display:flex">
                                <div class="mr-3">
                                    <img src="{{ empty($user->detail->thumbnail) ? asset('img/avatar.jpg') : url('storage/'.$user->detail->thumbnail) }}" class="user-image rounded-circle" style="height: 50px; width: 50px">
                                </div>
                                <div>
                                    <p class="mb-0 font-weight-normal">{{ $user->name }}</p>
                                    <p class="mb-0 font-weight-normal">{{ date('d M Y H:i', strtotime($forum->created_at))}}</p>
                                </div>
                            </div>
                            <div class="badge badge-{{ $forum->status === 'terbuka' ? 'success' : ($forum->status === 'tertutup' ? 'danger' : 'info')  }}">{{ ucfirst($forum->status) }}</div>
                        </div>
                        <h2 class="mb-5">{{ $forum->judul }}</h2>
                        <p class="card-text">{!! nl2br(htmlentities($forum->konten)) !!}</p>
                    </div>
                </div>
                @if(count($forum->comments))
                    <h4 class="py-3 text-center">Jawaban</h4>
                    @php
                        $comments = $forum
                                        ->comments()
                                        ->join('users', 'users.id', '=', 'forum_comments.user_id')
                                        ->join('user_details', 'user_details.user_id', '=', 'users.id')
                                        ->select('forum_comments.*', 'users.name', 'user_details.thumbnail')
                                        ->orderBy('forum_comments.id', 'asc')
                                        ->get();
                    @endphp
                    @foreach($comments as $comment)
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="mb-4" style="justify-content: flex-start; align-items: center; display:flex">
                                    <div class="mr-3">
                                        <img src="{{ empty($comment->thumbnail) ? asset('img/avatar.jpg') : url('storage/'.$comment->thumbnail) }}" class="user-image rounded-circle" style="height: 50px; width: 50px">
                                    </div>
                                    <div>
                                        <p class="mb-0 font-weight-normal">{{ $comment->name }}</p>
                                        <p class="mb-0 font-weight-normal">{{ date('d M Y H:i', strtotime($comment->created_at))}}</p>
                                    </div>
                                </div>
                                <p class="card-text">{!! nl2br(htmlentities($comment->comment)) !!}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h4 class="py-3 text-center">Belum ada jawaban</h4>
                @endif
                <div class="card my-2 px-3">
                    <div class="form-group">
                        <h6 class="card-title pt-3">Jawaban untuk pertanyaan</h6>
                        <form action="{{ route('landing.forum.comment.store', [$forum->slug]) }}" method="POST">
                            @csrf
                            @method('POST')

                            <textarea class="form-control" style="height: 200px" placeholder="Tulis disini jawabannya" name="comment">{{ old('comment') }}</textarea>
                            <button type="submit" class="btn float-right my-2 clearfix">Jawab</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="card ">
                    <div class="card-body">
                        <h5 class="card-title">Forum Lainnya</h5>
                        <a href="#"><h6 class="card-text forum-lain">Judul Forum Lain</h6></a>
                        <a href="#"><h6 class="card-text forum-lain">Judul Forum Lain</h6></a>
                        <a href="#"><h6 class="card-text forum-lain">Judul Forum Lain</h6></a>
                        <a href="#"><h6 class="card-text forum-lain">Judul Forum Lain</h6></a>
                        <a href="#"><h6 class="card-text forum-lain">Judul Forum Lain</h6></a>
                        <a href="#"><h6 class="card-text forum-lain">Judul Forum Lain</h6></a>
                        <a href="#"><h6 class="card-text forum-lain">Judul Forum Lain</h6></a>
                        <a href="#"><h6 class="card-text forum-lain">Judul Forum Lain</h6></a>
                    </div>
                </div>
            </div>

        </div>  
    </div>
</div>  
@endsection