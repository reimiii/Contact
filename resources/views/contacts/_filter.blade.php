<div class="row">
    <div class="col-md-6"></div>
    <div class="col-md-6">
        <form>
            <div class="row">
                <div class="col">
                    <select id="c_id_filter" name="c_id" class="custom-select">
                        @foreach($companies as $id => $name)
                            <option {{ $id == request('c_id') ? 'selected' : '' }} value="{{ $id }}">{{
                        $name
                        }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control"
                               name="search" value="{{ request('search') }}"
                               placeholder="Search..." aria-label="Search..."
                               aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary"
                                    id="btn-clear"
                                    type="button">
                                <i class="fa fa-refresh"></i>
                            </button>
                            <button class="btn btn-outline-secondary"
                                    type="submit" id="button-addon2">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>