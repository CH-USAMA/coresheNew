<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ElectionDetails;
use App\Models\User;

use App\Exports\ElectionDetailsExport;
use App\Imports\ElectionDetailsImport;

use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;


class AdminController extends Controller
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
    public function index()
    {
        return view('Admin.homeAdmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function electionDetails(Request $request)
    {

        $search =  $request->input('q');
        if($search!=""){
            $electionDetails = ElectionDetails::where(function ($query) use ($search){
                $query->where('provincia', 'like', '%'.$search.'%')
                    ->orWhere('canton', 'like', '%'.$search.'%');
            })
            ->paginate(10);
            $electionDetails->appends(['q' => $search]);
        }
        else{
        $electionDetails = ElectionDetails::latest()->paginate(10);
        }
        return view('Admin.electionDetails',compact('electionDetails'));
    }

    public function export() 
    {
        return Excel::download(new ElectionDetailsExport, 'ElectionData.xlsx');
    }

    public function importElectionDetails() 
    {
        // dd("here");
        Excel::import(new ElectionDetailsImport,request()->file('file'));
             
        return back();
    }


    

    public function systemCandidates(Request $request)
    {

        $search =  $request->input('q');
        if($search!=""){
            $electionDetails = ElectionDetails::where(function ($query) use ($search){
                $query->where('provincia', 'like', '%'.$search.'%')
                    ->orWhere('canton', 'like', '%'.$search.'%');
            })
            ->paginate(10);
            $electionDetails->appends(['q' => $search]);
        }
        else{
        $systemCandidates = User::where('role','candidate')->paginate(10);
        }
        return view('Admin.systemCandidates',compact('systemCandidates'));
    }


    public function saveCandidate(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'position' => 'required',
            'state' => 'required',
            'city' => 'required',
            'parroquia' => 'required',
            'pol_party' => 'required',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
      
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => '123123123',
            'position' => $request->position,
            'state' => $request->state,
            'city' => $request->city,
            'parroquia' => $request->parroquia,
            'pol_party' => $request->pol_party,
            'role' => 'Candidate',
        ]);
        return response()->json(['success'=>'Candidate is successfully added']);

    }
    public function getCandidate(Request $request)
    {
        // dd($request->all());
    	$User = User::find($request->id);

	    return response()->json([
	      'data' => $User
	    ]);
    }



    public function updateCandidate(Request $request)
    {
        // dd($request->all());
        $validator = \Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,'.$request->update_id,
            'position' => 'required',
            'state' => 'required',
            'city' => 'required',
            'parroquia' => 'required',
            'pol_party' => 'required',

        ]);
        
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
      
        // dd($request->all());
        User::where('id',$request->update_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'position' => $request->position,
            'state' => $request->state,
            'city' => $request->city,
            'parroquia' => $request->parroquia,
            'pol_party' => $request->pol_party,
        ]);
        return response()->json(['success'=>'Candidate is Updated added']);

    }

    public function exportCandidate() 
    {
        return Excel::download(new UsersExport, 'Candidate.xlsx');
    }

    public function importCandidate() 
    {
        // dd("here");
        Excel::import(new UsersImport,request()->file('file'));
             
        return back();
    }

    public function deleteCandidate(Request $request) 
    {
        
        User::where('id',$request->delete_id)->delete();
        return response()->json(['success'=>'Candidate is Deleted Successfully']);
    }

    
    public function getElectionCandidate(Request $request) 
    {
        $matchThese = ['provincia' => 'provin', 'canton' => 'canto','parroquia' => 'parroquia','circun' => 'circun','zona' => 'zona','junta_no' => 'junta' ];
        $results = ElectionDetails::where($matchThese)->get()->first();
        // dd($results->voters);
        $matchCandidate = ['state' => 'state', 'position' => 'position','parroquia' => 'parroquia','city' => 'city' ];
        $resultCandi = User::where($matchCandidate)->get();
       
        $all_candi = '';
        $i=0;
        foreach($resultCandi as $res)
        {
            $i++;
            $all_candi .= ' <tr>
            <th scope="row" class="row_first">'.$i.'</th>
            <td>
               '.$res->name.'
            </td>
            <td><input type="text" class="form-control" name="candidate_'.$i.'"  id="candidate_'.$i.'"></input></td>
        </tr>';
        }
       
    // dd($all_candi);
        return response()->json([
            'total_voters'=> $results->voters,
            'candidates_name'=>$all_candi
        ]);
    }

    
  
}
