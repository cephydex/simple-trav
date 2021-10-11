@extends('site.app')

@section('content')

    <div class="row">
        <div class="col-lg-10">
            <div style="margin-top: 150px;">&nbsp;</div>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-11">
                            <h4 class="card-title1">Student List</h4>
                        </div>
                        <div class="col-md-1">
                            <a href="{{route('students.create')}}" class="btn btn-sm btn-primary">
                                <i class="fa fa-plus-circle">&nbsp;</i>Add
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if(count($entities) > 0)
                        <?php $cnt = 1 ?>
                        <div class="table-responsive pt-3">
                            <table class="table table-sm table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Sex</th>
                                    <th>Father</th>
                                    <th>Mother</th>
                                    <th>Created</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($entities as $e)
                                    <tr>
                                        <td>{{$cnt++}}</td>
                                        <td id="{{$e->id}}">{{$e->fname}} {{$e->lname}}</td>
                                        <td>{{$e->sex == 'M'?'Male': 'Female'}}</td>
                                        <td>{{$e->father_name}}</td>
                                        <td>{{$e->mother_name}}</td>
                                        <td>{{ date('d/m/Y', strtotime($e->created_at)) }}</td>
                                        <!-- <td>
                                            <a class="btn btn-sm btn-info" href="#"><i class="ti-more-alt"></i></a>
                                            <button id="btnEditSys" class="btn btn-sm btn-info" data-toggle="modal" data-target="#mdlEditSys"><i class="fa fa-edit"></i></button> |
                                            <button id="btnDelSys" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
                                        </td> -->
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="alert alert-info">
                            Ooops no <strong>Student(s)</strong> have been added yet...
                        </p>
                    @endif
                </div>
            </div>
            <div>&nbsp;</div>
        </div>
    </div>

    <!-- Modal -->
    {{-- 
    <div class="modal fade" id="mdlAddSys" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New System</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id='frmAddSys' method="post" action="{{route('systems.store')}}" class='form-horizontal'>
                    <div class="modal-body">
                        @csrf
                        <div class="form-group">
                            <label for="region_id">Region</label>
                            <select class="form-control" id="region_id" name="region_id">
                                <option value="">-- Select Region --</option>
                                @foreach($regions as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                @endforeach
                            </select>
                            <input type="hidden" value="create" id="mode" name="mode">
                        </div>
                        <div class="form-group">
                            <label for="name" class="control-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control">
                            @if ($errors->has('name'))
                                <small class="help-block text-danger">
                                    {{ $errors->first('name') }}
                                </small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="code">Code</label>
                            <input type="text" class="form-control" id="code" name="code" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-close"></i></button>
                        <button type="submit" class="btn btn-primary">Enter</button>
                    </div>
                </form>
            </div>
        </div>
    </div> 
    --}}
    
@endsection