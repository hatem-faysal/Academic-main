 <a href="javascript:;" class="ms-3" data-bs-toggle="modal" data-bs-target="#delete{{ $id }}"><i class='bx bxs-trash'></i></a>
<div class="modal fade" id="delete{{ $id }}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteLabel{{ $id }}"> {{ ('Delete') }}<span style="color: #ababab"><i
                            class="fa fa-trash"></i></span></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                {{ __('Are you sure you want to delete :name?', ['name' => $name]) }}
                <form action="{{ $route }}" method="post">
                    @csrf
                    @method('delete')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">{{ ('Close') }}</button>
                <button type="submit" class="btn btn-primary">{{ ('Delete') }}</button>
            </div>
            </form>
        </div>
    </div>
</div>