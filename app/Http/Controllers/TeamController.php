<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserDetail;
use App\User;
use Auth;
class TeamController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function show(){
        $userDetail= UserDetail::where('facebook_id',Auth::user()->facebook_id)->first();
        if(!$userDetail) {
                return redirect()->route('register');
        }

         
        $teamImg="";
        if($userDetail->team=='f') {
                $teamName="FRIE";
        }else if($userDetail->team=='g'){
                $teamName="GRANDT";
        }else if($userDetail->team=='o'){
                $teamName="OCAIN";
        }else if($userDetail->team=='h'){
                $teamName="HEAVEN";
        } 
        
 
          /* $teamRed=[];
        $teamBlue=[];
        $teamGreen=[];
        $teamOrange=[];
        $teamYellow=[];*/
        /*
frie : c1272c
grandt : faaf3a

ocain : 0070bb
heaven : 998575
f,g,o,h        
*/

      
        $teamFrie= DB::table('user_details')->select('facebook_id','nickname','team','group','generation')
                                  ->where('team', 'f')
                                  ->orderBy('generation', 'asc')->get();

        $teamGrandt= DB::table('user_details')->select('facebook_id','nickname','team','group','generation')
                                  ->where('team', 'g')
                                  ->orderBy('generation', 'asc')->get();

        $teamOcain= DB::table('user_details')->select('facebook_id','nickname','team','group','generation')
                                  ->where('team', 'o')
                                  ->orderBy('generation', 'asc')->get();

        $teamHeaven= DB::table('user_details')->select('facebook_id','nickname','team','group','generation')
                                  ->where('team', 'h')
                                  ->orderBy('generation', 'asc')->get();

 
 
       return view('team' , [
                'teamFrie' => $teamFrie,
                'teamGrandt' => $teamGrandt,       
                'teamOcain' => $teamOcain,
                'teamHeaven' => $teamHeaven,
                'user'=>Auth::user(), 
                'userDetail' => $userDetail ,
                'teamName' => $teamName,
            ]);      
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
       $userDetail= UserDetail::where('facebook_id',Auth::user()->facebook_id)->first();
       if(!$userDetail) {
              return redirect()->route('register');
       }

      
      $teamImg="";
      if($userDetail->team=='b') {
            $teamImg="team_blue";
      }else if($userDetail->team=='g'){
             $teamImg="team_green";
      }else if($userDetail->team=='o'){
             $teamImg="team_orange";
      }else if($userDetail->team=='r'){
             $teamImg="team_red";
      }else if($userDetail->team=='y'){
             $teamImg="team_yellow";
      } 
      return view('profile' , ['user'=>Auth::user(), 'userDetail' => $userDetail,'teamImg'=>$teamImg] );


      
       
    }


    public function team()
    {

    }
}
