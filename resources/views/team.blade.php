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
                            <img   class="rounded-circle profile-member" src="//graph.facebook.com/{{ $userDetail->facebook_id }}/picture?width=125&height=125" data-holder-rendered="true"  >

                          </div>
                         <div class="leader-profile-name">
                             
                              <h4> <p class="text-left">  {{$teamName}} </p> </h4>  <h4> <p class="text-left">   {{$userDetail->nickname}} </p></h4>
                        </div>
                  </div>    

                 </div>
            </div>
            <div class="row justify-content-center "  >
                <div class="col-lg-8 col-sm-10 team"  >
                            <div class="row team-fire">
                                <div class="logo">
                                     <img src="/images/team-fire.png" class="img-responsive" alt="">
                                </div>

                                 <div class="col">  
                                         <div class="team-name ">
                                             <h1>FRIE TEAM</h1>
                                         </div>
                                         @if(isset($teamFrieLeader))
                                         <div class="team-leader">
                                            <div class="leader-profile-pic">
                                                <img data-src="holder.js/75x75" class="rounded-circle profile-leader"  src="//graph.facebook.com/{{ $teamFrieLeader->facebook_id }}/picture?width=125&height=125" data-holder-rendered="true"  >

                                            </div>
                                            <div class="leader-profile-name">
                                               <h4> <p class="text-left"> TEAM LEADER </p></h4>  <h4> <p class="text-left">  {{$teamFrieLeader->nickname}}  </p></h4>
                                            </div>
                                         </div>  
                                         @endif       
                                 </div>
                            </div>
                          
                            <div class="row team-member">
                                 <div class="col">  
                                     @foreach ($teamFrie as $user)
                                     <div class="member"> 
                                            <div class="profile-pic">
                                            <img   class="rounded-circle profile-member" alt="75x75" src="//graph.facebook.com/{{ $user->facebook_id }}/picture?width=125&height=125" data-holder-rendered="true"  >

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
                                         @if(isset($teamGrandtLeader))
                                         <div class="team-leader">
                                            <div class="leader-profile-pic">
                                                <img data-src="holder.js/75x75" class="rounded-circle profile-leader"  src="//graph.facebook.com/{{ $teamGrandtLeader->facebook_id }}/picture?width=125&height=125" data-holder-rendered="true"  >

                                            </div>
                                            <div class="leader-profile-name">
                                               <h4> <p class="text-left"> TEAM LEADER </p></h4>  <h4> <p class="text-left">  {{$teamGrandtLeader->nickname}}  </p></h4>
                                            </div>
                                         </div>  
                                         @endif     
                                 </div>
                            </div>
                               
                            <div class="row team-member">
                                 <div class="col">  
                                    @foreach ($teamGrandt as $user)
                                     <div class="member"> 
                                            <div class="profile-pic">
                                            <img   class="rounded-circle profile-member" alt="75x75" src="//graph.facebook.com/{{ $user->facebook_id }}/picture?width=125&height=125" data-holder-rendered="true"  >

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
                                         @if(isset($teamOcainLeader))
                                         <div class="team-leader">
                                            <div class="leader-profile-pic">
                                                <img data-src="holder.js/75x75" class="rounded-circle profile-leader"  src="//graph.facebook.com/{{ $teamOcainLeader->facebook_id }}/picture?width=125&height=125" data-holder-rendered="true"  >

                                            </div>
                                            <div class="leader-profile-name">
                                               <h4> <p class="text-left"> TEAM LEADER </p></h4>  <h4> <p class="text-left">  {{$teamOcainLeader->nickname}}  </p></h4>
                                            </div>
                                         </div>  
                                         @endif     
                                 </div>
                               
                            </div>

                            <div class="row team-member">
                                 <div class="col">  
                                     @foreach ($teamOcain as $user)
                                     <div class="member"> 
                                            <div class="profile-pic">
                                            <img   class="rounded-circle profile-member"  src="//graph.facebook.com/{{ $user->facebook_id }}/picture?width=125&height=125" data-holder-rendered="true"  >

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
                                           
                                 </div>
                            </div>
                            <div class="row team-member">
                                 <div class="col">  
                                     @foreach ($teamHeaven as $user)
                                     <div class="member"> 
                                            <div class="profile-pic">
                                             <img   class="rounded-circle profile-member" alt="75x75" src="//graph.facebook.com/{{ $user->facebook_id }}/picture?width=125&height=125" data-holder-rendered="true"  >

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