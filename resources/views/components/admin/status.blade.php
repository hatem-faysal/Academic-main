    @if ($status=='Active')
    <div class="badge rounded-pill text-success bg-light-success p-2 text-uppercase px-3"><i
    class='bx bxs-circle me-1'></i>{{ App\Models\StaticConst::STATUS[0] }}</div>
    @else
        <div class="badge rounded-pill text-info bg-light-info p-2 text-uppercase px-3"><i class="bx bxs-circle align-middle me-1"></i>{{ App\Models\StaticConst::STATUS[1] }}</div>
    @endif