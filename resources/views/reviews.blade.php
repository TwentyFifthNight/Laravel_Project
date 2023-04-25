<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Revievs</title>
    
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/darkmode.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!--><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">-->
    
    <style>
        body {
          background-color: #D7CECE;
          color: black;
          font-family: "Lato", sans-serif;
        }
    </style>
</head>
<body>
    @include('layouts.navbar')
    
    <div class="itemsSet" id="games" style="grid-template-columns:none">
        <div id={{$game->id}} class="item" style="border: none">
            <img width="220" src="/img/{{$game->img}}" alt="{{$game->name}}">
            <div class="details w3-center">
                <h3>{{$game->name}}</h3>
            </div>
        </div>
    </div>
    
    <section >
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="card" style="background: #2d3138; border: 1px solid rgba(0,0,0,10);">
                        @forelse ($reviews as $review)
                        <div class="card-body my-2 mx-2 dark-mode" style="border-radius: 15px;">
                                <div>
                                    @auth
                                        @if($review->user_id == \Auth::user()->id)
                                        <a href="{{route('delete',$review->id)}}">
                                        <i class="fa fa-times w3-right w3-button"></i>
                                        </a>
                                        @endif
                                        <a href="{{route('like',$review->id)}}">
                                            <i class="fa fa-heart w3-right w3-button"></i>
                                        </a>
                                    @endauth
                                    <p class="w3-right px-1 py-md-1">
                                        Likes&nbsp; {{$review->likes->count()}}
                                    </p>
                                    <h6 class="fw-bold text-primary mb-1">{{$review->user->name}}</h6>
                                    
                                    <p class="text-muted small mb-0">
                                      Shared publicly - {{$review->updated_at->format('M o')}}
                                    </p>
                                </div>

                            <p class="mt-3 mb-4 pb-2">
                                {{$review->message}}
                            </p>
                        </div>
                        @empty
                        <div class="card-body">
                            <p class="mt-3 mb-4 pb-2 w3-center">
                                Brak komentarzy
                            </p>
                        </div>
                        @endforelse
                        @auth
                        <div class="card-footer py-3">
                            <form action="{{route('save',$game->id)}}" id="revForm" method="post"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('message')?'has-error':'' }}" id="rolesBox">
                                    <input type="hidden" id="game_id" name="game_id" value="{{$game->id}}">
                                    <textarea class="form-control" id="textArea" name="textArea" rows ="4"
                                              style="color: #040404; background-color: #bdbcc1;" required></textarea>
                                </div>
                                <div class="float-end mt-2 pt-1">
                                    <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
                                    <button type="button" id="cancel" class="btn btn-outline-primary btn-sm">Cancel</button>
                                </div>
                            </form>
                        </div>
                        @endauth
                        @guest
                        <div class="card-footer py-3">
                            <p class="mt-3 mb-4 pb-2 w3-center">
                                Zaloguj się, aby dodawać komentarze
                            </p>
                        </div>
                        @endguest
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
   
<script src="/js/DropDownNavigation.js"></script>
<script src="/js/darkmode.js"></script>
<script src="/js/clearText.js"></script>
</body>
</html>