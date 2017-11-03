<div class="card" style="width: 20rem;">
    <div class="card-body">
        <h4 class="card-title">{{ $post->body  }}</h4>
        <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at->toDayDateTimeString() }}</h6>
        <p class="card-text">
            from <a href="/users/{{ $post->id_from }}">{{ $post->id_from_name($post->id_from)}}</a>
            to <a href="/users/{{ $post->user->id }}">{{ $post->user->name }}</a>
        </p>
    </div>
</div>