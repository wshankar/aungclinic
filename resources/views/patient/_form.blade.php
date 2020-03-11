@csrf
<div class="row">
   <div class="form-group col-md-4">
     <input type="text" name="name" id="patient-name" value="{{ old('name', $patient->name ) }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" placeholder="Name">

     @if ($errors->has('name'))
         <div class="invalid-feedback">
           <strong>{{ $errors->first('name') }}</strong>
         </div>
     @endif
   </div>
   <div class="form-group col-md-2">
     <input type="text" name="age" id="patient-age" value="{{ old('age', $patient->age) }}" class="form-control {{ $errors->has('age') ? 'is-invalid' : ''}}" placeholder="Age">

     @if ($errors->has('age'))
         <div class="invalid-feedback">
           <strong>{{ $errors->first('age') }}</strong>
         </div>
     @endif
   </div>
   <div class="form-group col-md-2">
     <input type="text" name="sex" id="patient-sex" value="{{ old('sex', $patient->sex) }}" class="form-control {{ $errors->has('sex') ? 'is-invalid' : ''}}" placeholder="Gender">

     @if ($errors->has('sex'))
         <div class="invalid-feedback">
           <strong>{{ $errors->first('sex') }}</strong>
         </div>
     @endif
   </div>
   <div class="form-group col-md-4">
     <input type="text" name="address" id="patient-address" value="{{ old('address', $patient->address) }}" class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}" placeholder="Address">

     @if ($errors->has('address'))
         <div class="invalid-feedback">
           <strong>{{ $errors->first('address') }}</strong>
         </div>
     @endif
   </div>
   <div class="form-group col-md-4">
     <button type="submit" class="btn btn-outline-primary btn-sm">{{ $buttonText }}</button>
   </div>
</div>
