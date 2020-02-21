<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $user->name }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <section class="container">
        <div class="row">
            <div class="col-12 my-3 pt-3 shadow">
                <img src="{{ $user->image->url }}" alt="" class="float-left rounded-circle mr-2">
                <h1>{{ $user->name }}</h1>
                <h3>{{ $user->email }}</h3>

            <p>
                <strong>Instragram</strong>: {{ $user->profile->instagram }} <br />
                <strong>Web</strong>: {{ $user->profile->web }} <br />
            </p>
                <p>
                    <strong>Pais</strong>: {{ $user->location->country }} <br />
                    <strong>Nivel</strong>: @if($user->level)<a href="{{ route('level', $user->level->id) }}">{{ $user->level->name }}</a><br />
                    @else
                          ---
                    @endif <hr />
                </p>
                <p>
                    <strong>Grupos</strong>:
                    @forelse($user->groups as $group)
                        <span class="badge badge-primary"> {{ $group->name }}</span>
                    @empty
                        <em>No pertenece a ningun grupo</em>
                    @endforelse
                </p>

                <h3>Posts</h3>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-6">
                            <div class="card mb-3">
                                <div class="row no-gutters">
                                    <div class="col-md-4">
                                        <img src="{{ $post->image->url }}" class="card-img" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                                <h5 class="card-title">{{ $post->name }}</h5>
                                                <h6 class="card-subtitle text-muted">
                                                   <span class="badge badge-secondary">{{ $post->category->name }}</span>

                                                    {{ $post->comments_count }}
                                                    {{ Str::plural('comentario', $post->comments_count) }}
                                                </h6>
                                                <p class="card-text small">
                                                    @foreach($post->tags as $tag)
                                                        <span class="badge badge-light">
                                                        #{{ $tag->name }}
                                                        </span>

                                                    @endforeach
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</body>
</html>
