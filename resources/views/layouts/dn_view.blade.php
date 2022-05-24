@extends('layouts.app')
@section('content')
<div class="col-sm-6">
    <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal" id="load_select_dmltt" ><i class="material-icons">&#xE147;</i> <span>Thêm mới tin tức</span></a>
</div>

@foreach ($dn as $d)
    <p> {{ $d->username }}</p>
@endforeach
<div>
    {{ $dn->links() }}
</div>

<div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ route('dn.store')}}" method="POST">
                        @csrf
                        <div class="modal-header">                      
                            <h4 class="modal-title">Thêm mới</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">                    
                          
                         
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>  
                        <div class="form-group">
                            <label>password</label>
                            <input type="text" class="form-control" name="password">
                        </div>  
                    
                        </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Hủy">
                        <input type="submit" class="btn btn-success" value="Thêm mới">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

