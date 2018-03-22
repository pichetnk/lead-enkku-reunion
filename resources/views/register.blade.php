@extends('layouts.app')
@section('content')
<div id="register-header">


</div> 
<div id="appRegister" class="container-fluid">
 
    <div class="row">
     <div class="col">
        <div id="header-text">
            <center>
                <h1>   LEAD EN. Reunion </h1>                
                <h3> VOLUME #2 </h3>
                <br>
                <h3>WAR OF THE WINTER</h3>
                <h4>4-25 MARCH 2018  @ KHAOYAI</h4>
            </center>
        </div>
        </div>
    </div>


    


    <div class="row justify-content-center "  >
        <div class="col-6 bg" >
            <div class="row justify-content-center "  >
                <div class="col" >
                    <div class="text-center">
                        <img src="/images/team-fire.png" class="img-team-register mx-auto ">
                        <img src="/images/team-grandt.png" class="img-team-register mx-auto " >
                        <img src="/images/icon-ice.png"  class="img-team-register mx-auto ">
                        <img src="/images/team-ocain.png"  class="img-team-register mx-auto">
                        <img src="/images/team-heaven.png"  class="img-team-register mx-auto">
                     </div>
               </div>          
            </div>
            <div class="row justify-content-center "  >
                <div class="col-8"  >
                   <h3> REGISTER </h3>
                   <form>
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                        <input type="text"  class="form-control" id="inputName" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputSecret" class="col-sm-4 col-form-label">Secret Code</label>
                        <div class="col-sm-8">
                        <input type="password" class="form-control" id="inputSecret" placeholder="Secret Code">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
           </div>
      </div>
  </div>

</div>

<div id="register-footer">  

</div>
@endsection