@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white bg-danger">Personal Information</div>
              <div class="row">
                <div class="card-body">
                  <div class="col-md">

                     <b>Full Name</b>: {{$survey->fullname}}
                      
                      </div>
                      </div>
                  <div class="card-body">

                    <div class="col-md">
                      
                      <b>Phone</b>:{{$survey->phone}}
                     
                      </div>
                    </div>

                    <div class="card-body">

                    <div class="col-md">
                      
                     <b>Gender</b>: {{$survey->gender}}
                      </div>
                    </div>

                    <div class="card-body">

                    <div class="col-md">
                     
                      <b>Age</b>: {{$survey->age}}
                      </div>
                    </div>
                </div>
          </div>            
        </div>

        <div class="col-md-2">
            <div class="card">
                <div class="card-header text-white bg-danger">Kios</div>
              <div class="row">
                <div class="card-body">
                  <b>Point</b>: {{$survey->town->name}}
                  <b>Gps </b> Lat: {{$survey->town->latitude}}   || Long:{{$survey->town->longitude}}
                </div>
              </div>
            </div>
        </div>
        <div class="col-md-2">
        <div class="card">
            <div class="card-header text-white bg-primary">Status</div>
                  <div class="card-body">
                    <form method="POST" action="{{ route('surveys.update', $survey->id) }}" 
                      >
                       @method('PATCH')
                        @csrf



                     <div class="form-group">
                     <select class="form-control" name="status">
                        <option> {{$survey->status}}</option>
                        <option value="it has been fixed"> it has been fixed</option>
                        <option> </option>
                      </select>
                      </div>

                        <input class="btn btn-primary btn-block" type="submit" name="">

                    </form>
                  </div>

        </div>
      </div>

    </div>

    <div class="row mt-4">
      <div class="col-md-4">
            <div class="card">
                <div class="card-header text-white bg-primary">
           Infrastructure {{$survey->infrastructure ? 'Yes' : 'No'}}</div>
                  <div class="card-body">
                    <ol class="list-group list-group-flush">
                    <li class="list-group-item">Tap Leakege: 
                      <span class="badge badge-primary badge-pill">{{$survey->leak}}</span></li>
                    <li class="list-group-item">Handle Missing: 
                          <span class="badge badge-primary badge-pill">{{$survey->key}}</span></li>
                    <li class="list-group-item">Broken Tap: 
                          <span class="badge badge-primary badge-pill">{{$survey->tap}}</span></li>
                    <li class="list-group-item">Broken Fence: 
                          <span class="badge badge-primary badge-pill">{{$survey->fence}}</span></li>
                    <li class="list-group-item">Broken Gate:
                          <span class="badge badge-primary badge-pill">{{$survey->gate}}</span></li>
                  </ol>
                  </div>
                
            </div>
    </div>

    <div class="col-md-4">
            <div class="card">
                <div class="card-header text-white bg-primary">
                  Finance {{$survey->finance ? 'Yes' : 'No'}}</div>
                <div class="card-body">
                    <ol class="list-group list-group-flush">
                      <li class="list-group-item">Price: 
                      <span class="badge badge-primary badge-pill">{{$survey->price}}</span></li>
                      <li class="list-group-item">20 Litre Price: 
                      <span class="badge badge-primary badge-pill">{{$survey->pjirgaan}}</span></li>
                    <li class="list-group-item">Extra Cash: 
                      <span class="badge badge-primary badge-pill">{{$survey->extracash}}</span></li>
                    <li class="list-group-item">Bribe: 
                          <span class="badge badge-primary badge-pill">{{$survey->bribe}}</span></li>
                    <li class="list-group-item">A lot of Money: 
                          <span class="badge badge-primary badge-pill">{{$survey->alotofmoney}}</span></li>
                    <li class="list-group-item">keeps Money: 
                          <span class="badge badge-primary badge-pill">{{$survey->kept}}</span></li>
                    <li class="list-group-item">Income:
                          <span class="badge badge-primary badge-pill">{{$survey->income}}</span></li>
                    <li class="list-group-item">Invoice:
                          <span class="badge badge-primary badge-pill">{{$survey->invoice}}</span></li>
                    <li class="list-group-item">Water Cheating:
                          <span class="badge badge-primary badge-pill">{{$survey->cheating}}</span></li>
                  </ol>


                  </div>
            </div>
    </div>


    <div class="col-md-4">
            <div class="card">
                <div class="card-header text-white bg-primary">Quality and Quantity</div>
               <div class="card-body">
                    <ol class="list-group list-group-flush">
                    <li class="list-group-item">Water Test: 
                      <span class="badge badge-primary badge-pill">{{$survey->taste}}</span></li>
                    <li class="list-group-item">Water Dirty: 
                          <span class="badge badge-primary badge-pill">{{$survey->dirtywater}}</span></li>
                    <li class="list-group-item">Washing Clothes: 
                          <span class="badge badge-primary badge-pill">{{$survey->hardwater}}</span></li>
                    <li class="list-group-item">Slow Water: 
                          <span class="badge badge-primary badge-pill">{{$survey->slowwater}}</span></li>
                    <li class="list-group-item">All Four Taps:
                          <span class="badge badge-primary badge-pill">{{$survey->fourtaps}}</span></li>
                  </ol>
                  </div>
            </div>
    </div>
  </div>

    <div class="row mt-4">
      <div class="col-md-4">
            <div class="card">
                <div class="card-header text-white bg-success">Violence</div>
                <div class="card-body">
                    <ol class="list-group list-group-flush">
                    <li class="list-group-item">Security Problems: 
                      <span class="badge badge-primary badge-pill">{{$survey->security}}</span></li>
                      <li class="list-group-item">Gender: 
                          <span class="badge badge-primary badge-pill">{{$survey->sgender}}</span></li>
                    <li class="list-group-item">Security Problems at Night: 
                          <span class="badge badge-primary badge-pill">{{$survey->securitynight}}</span></li>
                    <li class="list-group-item">Security Problems during the day: 
                          <span class="badge badge-primary badge-pill">{{$survey->securityday}}</span></li>
                    
                    
                  </ol>
                  </div>
            </div>
    </div>

    <div class="col-md-4">
            <div class="card">
                <div class="card-header text-white bg-success">Access</div>
               <div class="card-body">
                    <ol class="list-group list-group-flush">
                    <li class="list-group-item">Kiosk is too Far: 
                      <span class="badge badge-primary badge-pill">{{$survey->faraway}}</span></li>
                    <li class="list-group-item">Light at Night: 
                          <span class="badge badge-primary badge-pill">{{$survey->light}}</span></li>
                    <li class="list-group-item">Adults only: 
                          <span class="badge badge-primary badge-pill">{{$survey->toaccess}}</span></li>
                    <li class="list-group-item">Gate Locked: 
                          <span class="badge badge-primary badge-pill">{{$survey->gatelocked}}</span></li>
                    <li class="list-group-item">Over Crowded:
                          <span class="badge badge-primary badge-pill">{{$survey->overcrowded}}</span></li> 
                      <li class="list-group-item">Women waiting vs Men:
                          <span class="badge badge-primary badge-pill">{{$survey->waitingtime}}</span></li>
                      <li class="list-group-item">Waiting more than 15m:
                          <span class="badge badge-primary badge-pill">{{$survey->longer}}</span></li>
                  </ol>
                  </div>
            </div>
    </div>


    <div class="col-md-4">
            <div class="card">
                <div class="card-header text-white bg-success">Health</div>
               <div class="card-body">
                    <ol class="list-group list-group-flush">
                    <li class="list-group-item">Do you drink the water: 
                      <span class="badge badge-primary badge-pill">{{$survey->drink}}</span></li>
                    <li class="list-group-item">Do you feel sick: 
                          <span class="badge badge-primary badge-pill">{{$survey->sick}}</span></li>

                    <li class="list-group-item">Stomachache: 
                          <span class="badge badge-primary badge-pill">{{$survey->stomachache}}</span></li>

                    <li class="list-group-item">Headache: 
                          <span class="badge badge-primary badge-pill">{{$survey->headache}}</span></li>
                   <li class="list-group-item">Diarrhea: 
                          <span class="badge badge-primary badge-pill">{{$survey->diarrhea}}</span></li>

                  </ol>
                  </div>
            </div>
    </div>
</div>
@endsection
