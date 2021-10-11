@extends('site.app')
@section('content')
<div style="margin-top: 90px;">&nbsp;</div>
    <div class="row">
        <div class="col-md-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add New Student</h4>
                    <br/>
                    <form id='frmAStudent' action='{{route("students.store")}}' method='POST' class='form-horizontal forms-sample'>
                        @csrf
                        <div class="form-group row">
                            <label for="fname" class="control-label col-md-2">First Name</label>
                        	<div class="col-md-4">
                                <input type="text" value="{{old('fname')}}" class="form-control" id="fname" name="fname" placeholder="Name">
                                @if ($errors->has('name'))
                                    <small class="help-block text-danger">
                                        {{ $errors->first('fname') }}
                                    </small>
                                @endif
                        	</div>
                            <label for="lname" class="control-label col-md-2">Last Name</label>
                        	<div class="col-md-4">
                                <input type="text" value="{{old('lname')}}" class="form-control" id="lname" name="lname" placeholder="Name">
                                @if ($errors->has('name'))
                                    <small class="help-block text-danger">
                                        {{ $errors->first('lname') }}
                                    </small>
                                @endif
                        	</div>
                        </div>
                                                                       
                        <div class="form-group row">
                        	<label for="sex" class="control-label col-md-2">Sex</label>
                        	<div class="col-md-4">
                        		<select class="form-control" id="sex" name="sex">
                                    <option value="">-- Select Sex --</option>                                    
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>                                    
                                </select>
                        	</div>

                            <label for="dob" class="control-label col-md-2">Date of Birth</label><br/>
                            <div class="col-md-4"> 
                            	<input type="text" value="{{old('dob')}}" class="form-control" id="dob" name="dob" placeholder="Date of Birth" autocomplete="off">
                                @if ($errors->has('dob'))
                                    <small class="help-block text-danger">
                                        {{ $errors->first('dob') }}
                                    </small>
                                @endif                                   	
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="father_name" class="control-label col-md-2">Father's Name</label>
                            <div class="col-md-4">
                            	<input type="text" value="{{old('father_name')}}" class="form-control" id="father_name" name="father_name" placeholder="Father's Name">
                                @if ($errors->has('father_name'))
                                    <small class="help-block text-danger">
                                        {{ $errors->first('father_name') }}
                                    </small>
                                @endif
                            </div>
                            <label for="mother_name" class="control-label col-md-2">Mother's Name</label><br/>
                            <div class="col-md-4"> 
                            	<input type="text" value="{{old('mother_name')}}" class="form-control" id="mother_name" name="mother_name" placeholder="Mother's Name" autocomplete="off">
                                @if ($errors->has('mother_name'))
                                    <small class="help-block text-danger">
                                        {{ $errors->first('mother_name') }}
                                    </small>
                                @endif                                   	
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="hometown" class="control-label col-md-2">Hometown</label>
                            <div class="col-md-4">
                            	<input type="text" value="{{old('hometown')}}" class="form-control" id="hometown" name="hometown" placeholder="Hometown">
                                @if ($errors->has('hometown'))
                                    <small class="help-block text-danger">
                                        {{ $errors->first('hometown') }}
                                    </small>
                                @endif
                            </div>
                            
                            <label for="nationality" class="control-label col-md-2">Nationality</label><br/>
                            <div class="col-md-4"> 
                            	<select class="form-control input-sm" id="nationality" name="nationality">
                                    <option value="">-- Select Nationality --</option>
                                    <option value="Ghanaian">Ghanaian</option>
                                    <option value="Nigerian">Nigerian</option>
                                    <option value="Togolese">Togolese</option>
                                    <option value="Ivorian">Ivorian</option>
                                    <option value="Burkinabe">Burkinabe</option>
                                    <option value="Senegalese">Senegalese</option>
                                </select>                                   	
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="control-label col-md-2">Address</label><br/>
                            <div class="col-md-4"> 
                            	<textarea class="form-control" id="address" name="address" placeholder="Address" autocomplete="off">{{old('address')}}</textarea>
                                @if ($errors->has('address'))
                                    <small class="help-block text-danger">
                                        {{ $errors->first('address') }}
                                    </small>
                                @endif                                   	
                            </div>
                        </div>
                        <hr/>
                        <div class="form-group row">
                            <label class="control-label col-md-2">&nbsp;</label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-sm btn-primary mr-2">Submit</button>
                                <a class="btn btn-sm btn-light" href="{{route('students.index')}}">Cancel</a>
                            </div>                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection