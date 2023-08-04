<div id="search-bar">
    <form class="d-flex" role="search">
        <input class="form-control me-2" wire:model.live.debounce.500="search" type="search" placeholder="Search" aria-label="Search">
    </form>
    @if(sizeof($users)>0)
    <div class="dropdown-menu d-block py-0">
        @foreach($users as $user)
            <div class="px-3 py-1 border-bottom">
                <div class="d-flex flex-column ml-3">
                    <span>{{$user->name}}</span>
                    <small>{{$user->email}}</small>
                </div>
            </div>
        @endforeach
    </div>
    @endif
</div>
