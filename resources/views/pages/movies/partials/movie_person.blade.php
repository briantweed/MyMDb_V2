<div class="col-lg-1 col-md-2 col-sm-3 col-4 pb-2 text-center">
    <a href="{{ route('people.show', [$person->slug]) }}">
        <img class="img-fluid pb-3" src="{{ $person->imagePath }}" alt="{{ $person->fullname }}" title="{{ $person->fullname }} {{ $person->pivot->character ? ' - ' . $person->pivot->character : ($person->pivot->position ? ' - ' . $person->pivot->position : '') }}">
    </a>
</div>