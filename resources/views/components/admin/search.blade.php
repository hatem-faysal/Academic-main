{{-- <div>
    <ul class="nav nav-tabs dzm-tabs" id="myTab" role="tablist">
        <form action="{{ $route??'' }}" method="get">
            <div class="input-group">
                <input class="form-control" name="name" value="{{ Request()->query('name')??'' }}"
                    placeholder="{{ ('Search for...') }}" type="search">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">
                        <span class="input-group-btn"><i class="fa fa-search"></i></span>
                    </button>
                </span>
            </div>
        </form>
    </ul>
</div> --}}

    <div class="position-relative">
        <form action="{{ $route??'' }}" method="get">
            <input type="text" name="name" value="{{ Request()->query('name')??'' }}" class="form-control ps-5 radius-30" placeholder="Search Order"> <span
                class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
        </form>
    </div>
                    
                    
                    