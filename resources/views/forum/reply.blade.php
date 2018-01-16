<div class="card margin-ten">
    <div class="card-header">
        <a href="#">
            {{ $reply->owner->name }}
        </a> said {{ $reply->created_at->diffForHumans() }}&#8230;
    </div>
    <div class="card-body text-left">
        {{ $reply->body }}
    </div>
</div>
