<div class="card margin-ten-around border border-secondary">
    <div class="card-header bg-secondary text-light">
        <a href="#" class="text-light">
            {{ $reply->owner->name }}
        </a> said {{ $reply->created_at->diffForHumans() }}&#8230;
    </div>
    <div class="card-body text-left bg-dark text-white">
        {{ $reply->body }}
    </div>
</div>
