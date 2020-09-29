@if($collection instanceof \Illuminate\Pagination\LengthAwarePaginator )
    <div class="row">
        <div class="col-12">
            {{ $collection->appends($_GET)->links() }}
        </div>
    </div>
@endif
