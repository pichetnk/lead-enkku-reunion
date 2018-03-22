@extends('layouts.app')
@section('content')
 
<div id="appTeam" class="container-fluid">
    <div class="row justify-content-center "  >
        <div class="col-10" >
            <div class="row justify-content-center "  >
                <div class="col-2" >
                      <div class="text-center">
                        <img src="/images/team-fire.png" class="img-team-register mx-auto ">
                      </div>
                </div>
                <div class="col-2" >
                      <div class="text-center">
                        <img src="/images/team-grandt.png" class="img-team-register mx-auto " >
                    </div>
                </div>
                <div class="col-2" ></div>
                <div class="col-2" >
                      <div class="text-center"> 
                        <img src="/images/team-ocain.png"  class="img-team-register mx-auto">
                        
                        </div>
                </div> 
                <div class="col-2" >
                      <div class="text-center"> 
                         <img src="/images/team-heaven.png"  class="img-team-register mx-auto">
                     </div>
                </div> 
                
            </div>
            <div class="row justify-content-center "  >
                <div class="col-6 myprofile"  >
                <div class="team-leader text-center">
                        <div class="leader-profile-pic">
                            <img   class="rounded-circle" alt="75x75" src="//graph.facebook.com/{{ $userDetail->facebook_id }}/picture?width=125&height=125" data-holder-rendered="true" style="width: 125px; height: 125px;">

                          </div>
                         <div class="leader-profile-name">
                             
                              <h4> <p class="text-left">  {{$teamName}} </p> </h4>  <h4> <p class="text-left">   {{$userDetail->nickname}} </p></h4>
                        </div>
                  </div>    

                 </div>
            </div>
            <div class="row justify-content-center "  >
                <div class="col-8 team"  >
                            <div class="row team-fire">
                                <div class="logo">
                                     <img src="/images/team-fire.png" class="img-responsive" alt="">
                                </div>

                                 <div class="col">  
                                         <div class="team-name ">
                                             <h1>FRIE TEAM</h1>
                                         </div>
                                         <div class="team-leader">
                                            <div class="leader-profile-pic">
                                                <img data-src="holder.js/75x75" class="rounded-circle" alt="75x75" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1624ccfb6dc%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1624ccfb6dc%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.34375%22%20y%3D%2242%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 150px; height:150px;">

                                            </div>
                                            <div class="leader-profile-name">
                                               <h4> <p class="text-left"> TEAM LEADER </p> </h4>  <h4> <p class="text-left">  Pichet </p></h4>
                                            </div>
                                         </div>       
                                 </div>
                            </div>
                          
                            <div class="row team-member">
                                 <div class="col">  
                                     @foreach ($teamFrie as $user)
                                     <div class="member"> 
                                            <div class="profile-pic">
                                            <img   class="rounded-circle" alt="75x75" src="//graph.facebook.com/{{ $user->facebook_id }}/picture?width=125&height=125" data-holder-rendered="true" style="width: 125px; height: 125px;">

                                            </div>
                                            <div class="profile-name">
                                                  <p class="text-center"> {{$user->nickname}} </p>
                                               
                                            </div>
                                     </div>
                                     @endforeach
                                    
                                   

                                 </div>

                            </div>  

                             <div class="row team-grandt">
                                <div class="logo">
                                     <img src="/images/team-grandt.png" class="img-responsive" alt="">
                                </div>
                                <div class="col">  
                                        <div class="team-name ">
                                             <h1>GRANDT TEAM</h1>
                                         </div>
                                         <div class="team-leader">
                                            <div class="leader-profile-pic">
                                                <img data-src="holder.js/75x75" class="rounded-circle" alt="75x75" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1624ccfb6dc%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1624ccfb6dc%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.34375%22%20y%3D%2242%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 150px; height:150px;">

                                            </div>
                                            <div class="leader-profile-name">
                                               <h4> <p class="text-left"> TEAM LEADER </p></h4>  <h4> <p class="text-left">  Pichet</p></h4>
                                            </div>
                                         </div>       
                                 </div>
                            </div>
                               
                            <div class="row team-member">
                                 <div class="col">  
                                    @foreach ($teamGrandt as $user)
                                     <div class="member"> 
                                            <div class="profile-pic">
                                            <img   class="rounded-circle" alt="75x75" src="//graph.facebook.com/{{ $user->facebook_id }}/picture?width=125&height=125" data-holder-rendered="true" style="width: 125px; height: 125px;">

                                            </div>
                                            <div class="profile-name">
                                                  <p class="text-center"> {{$user->nickname}} </p>
                                               
                                            </div>
                                     </div>
                                     @endforeach
                                   

                                 </div>

                            </div>  


                             <div class="row team-ocain">
                                <div class="logo">
                                     <img src="/images/team-ocain.png" class="img-responsive" alt="">
                                </div>
                                <div class="col">  
                                        <div class="team-name ">
                                             <h1>OCAIN TEAM</h1>
                                         </div>
                                         <div class="team-leader">
                                            <div class="leader-profile-pic">
                                                <img data-src="holder.js/75x75" class="rounded-circle" alt="75x75" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1624ccfb6dc%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1624ccfb6dc%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.34375%22%20y%3D%2242%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 150px; height:150px;">

                                            </div>
                                            <div class="leader-profile-name">
                                               <h4> <p class="text-left"> TEAM LEADER </p></h4>  <h4> <p class="text-left">  Pichet </p></h4>
                                            </div>
                                         </div>       
                                 </div>
                               
                            </div>

                            <div class="row team-member">
                                 <div class="col">  
                                     @foreach ($teamOcain as $user)
                                     <div class="member"> 
                                            <div class="profile-pic">
                                            <img   class="rounded-circle" alt="75x75" src="//graph.facebook.com/{{ $user->facebook_id }}/picture?width=125&height=125" data-holder-rendered="true" style="width: 125px; height: 125px;">

                                            </div>
                                            <div class="profile-name">
                                                  <p class="text-center"> {{$user->nickname}} </p>
                                               
                                            </div>
                                     </div>
                                     @endforeach
                                    
                                   

                                 </div>

                            </div>  

                            <div class="row team-heaven">
                                <div class="logo">
                                     <img src="/images/team-heaven.png" class="img-responsive" alt="">
                                </div>

                                <div class="col">  
                                        <div class="team-name ">
                                             <h1>HEAVEN TEAM</h1>
                                         </div>
                                         <div class="team-leader">
                                            <div class="leader-profile-pic">
                                                <img data-src="holder.js/75x75" class="rounded-circle" alt="75x75" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2275%22%20height%3D%2275%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2075%2075%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1624ccfb6dc%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1624ccfb6dc%22%3E%3Crect%20width%3D%2275%22%20height%3D%2275%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2219.34375%22%20y%3D%2242%22%3E75x75%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 150px; height:150px;">

                                            </div>
                                            <div class="leader-profile-name">
                                               <h4> <p class="text-left"> TEAM LEADER </h4>  <h4> <p class="text-left">  Pichet </P></h4>
                                            </div>
                                         </div>       
                                 </div>
                            </div>
                            <div class="row team-member">
                                 <div class="col">  
                                     @foreach ($teamHeaven as $user)
                                     <div class="member"> 
                                            <div class="profile-pic">
                                            <img   class="rounded-circle" alt="75x75" src="//graph.facebook.com/{{ $user->facebook_id }}/picture?width=125&height=125" data-holder-rendered="true" style="width: 125px; height: 125px;">

                                            </div>
                                            <div class="profile-name">
                                                  <p class="text-center"> {{$user->nickname}} </p>
                                               
                                            </div>
                                     </div>
                                     @endforeach
                                   

                                 </div>

                            </div>  

                  
                </div>
           </div>
      </div>
  </div>

</div>

<div id="team-footer">  

</div>
@endsection