<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\UserDetail;
use App\User;
use App\OrdersDetail;
use App\Orders;
class ApiController extends Controller
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

   public function getuser(Request $request,$facebookId) {

           if (!$facebookId) {
                return response()->json([
                    'error' => "Bad Request"
                ], 400 );
            }

          
        $user = User::where('facebook_id', $facebookId)->first();

        return response()->json($user, 200);                        
    }

    


    public function getTeam(Request $request,$team) {

           $listTeam = array('r','b','g','o','y');

           if (!in_array($team, $listTeam)) {
                return response()->json([
                    'error' => "Bad Request Team name"
                ], 400 );
            }

            $teamMember= DB::table('user_details')->select('facebook_id','nickname','team','group','generation')
                                  ->where('team', $team)
                                  ->orderBy('generation', 'desc')->get();

           return response()->json($teamMember, 200);                        
    }


    public function register(Request $request){

        $facebook_id = $request->input('facebook_id');
        $nickname = $request->input('nickname');
        $secretcode = $request->input('secretcode');
       // $joinEvent = $request->input('join_event');
       
        if(!$request->has('facebook_id') || 
          // !$request->has('nickname') || 
            !$request->has('secretcode') || 
           !$request->has('nickname')){
              return response()->json([
                    'error' => "Bad Request",
                    'error_code' => "00"
                ], 200 );
        }

        if($secretcode!='reunionvol2') {
            return response()->json([
                'error' => "Secret Code Incorrect",
                'error_code' => "00"
            ], 200 );
        }

        $userDetail = UserDetail::where('facebook_id', $facebook_id)->first();
        if ($userDetail) {
            return response()->json([
                    'error' => "Bad Request this user register Done",
                    'error_code' => "01"
                ], 200 );
        }
        

     
      //  $team = $this->randomTeam();
        $userDetail= UserDetail::create([
            'nickname'   => $nickname,
            'facebook_id'  => $facebook_id,   
            'team' => $this->randomTeam($facebook_id),
            /*'generation' => $generation,*/
            /*'join_event' => $joinEvent*/
        ]);       
    
        

        return response()->json($userDetail, 200);         
        
    }

 


    private function randomTeam($fbId){
      
        $count = array('f'=>0,'g'=>0,'o'=>0);
        $teams = array('f'=>3,'g'=>3,'o'=>3);
        $myTeam ="";
        $sumCount =0;
/*
        if($generation==0){
                $countTeamGenetation=DB::table('user_details')
                                    ->select(DB::raw('team , count(*) as teamCount')) 
                                    ->where('generation', '=', '0')
                                    ->groupBy('team') ->get();
                foreach ($countTeamGenetation as $obj) {
                    $count[$obj->team]= $obj->teamCount;                 
                }

                asort($count);
                $checkEqu =0;
                $randomArray = array();
                foreach ($count as $key => $value) {
                    if($checkEqu == $value || $checkEqu == $value -1){
                        array_push($randomArray,$key);
                    }
                    $checkEqu = $value;
                }
                $myTeam = $randomArray[mt_rand(0, count($randomArray) - 1)];
                return $myTeam;    
        }

*/

        $count = array('f'=>0,'g'=>0,'o'=>0);
        $countTeamObj=DB::table('user_details')->select(DB::raw('team , count(*) as teamCount')) ->groupBy('team') ->get();
        
        foreach ($countTeamObj as $obj) {
         
            $count[$obj->team]= $obj->teamCount;
            $sumCount += $obj->teamCount;
        }

        foreach ($teams as $team=>$value) {
            $teams[$team] = (($sumCount+1-$count[$team])/($sumCount+1)/4)*25;
        }
          
        $tempTeam = array();
        foreach ($teams as $team=>$value)   {
                $tempTeam = array_merge($tempTeam, array_fill(0, $value, $team));
        }

        $myTeam = $tempTeam[array_rand($tempTeam)];
        
        return $myTeam;
    }


    public function getComeEvent(){
    
      $data= DB::table('user_details')->select('facebook_id as facebookid','nickname as name','team','generation')
                                  ->where('come_event', 'Y')
                                  ->get();

        
      return response()->json($data, 200 );

    }





}
