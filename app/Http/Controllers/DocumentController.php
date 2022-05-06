<?php

namespace App\Http\Controllers;
use App\Models\Document;
use App\Models\Files;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator; 

class DocumentController extends Controller
{
    //
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function uploadDocumentsave(Request $request)
    {
        $request->validate([
            'doc_name' => 'required',
            'position' => 'required',
            'provincia' => 'required',
            'canton' => 'required',
            'circun' => 'required',
            'parroquia' => 'required',
            'zona' => 'required',
            'junta_no' => 'required',
            'valid_votes' => 'required|numeric',
            'blank_votes' => 'required|numeric',
            'null_votes' => 'required|numeric',
            'doc_start_time' => 'required',
            'doc_end_time' => 'required',
            'comments' => 'required',
            'filenames' => 'required',
            'filenames.*' => 'image'
        ]);
        // mimes:csv,txt,xlx,xls,pdf
        // $request->validate([
        //     'files' => 'required',
        //     'files.*' => 'required|mimes:pdf,xlx,csv|max:2048',
        // ]);

        $files = [];
        if($request->hasfile('filenames'))
         {
            foreach($request->file('filenames') as $file)
            {
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path('doc_images'), $name);  
                $files[] = $name;  
            }
         }
      
        // dd($files);
        // if ($validator->fails())
        // {
        //     return response()->json(['errors'=>$validator->errors()->all()]);
        // }

        // dd($request->all());
      
        // dd($request->all());
        $doc = Document::create([
            'doc_name' => $request->doc_name,
            'position' => $request->position,
            'provincia' => $request->provincia,
            'canton' => $request->canton,
            'circun' => $request->circun,
            'parroquia' => $request->parroquia,
            'zona' => $request->zona,
            'junta_no' => $request->junta_no,
            'valid_votes' => $request->valid_votes,
            'blank_votes' => $request->blank_votes,
            'null_votes' => $request->null_votes,
            'doc_start_time' => $request->doc_start_time,
            'doc_end_time' => $request->doc_end_time,
            'report_disturbance' => $request->report_disturbance,
            'comments' => $request->comments,
            'added_by' => Auth::user()->id,
            'status' => 'active',
            'election' => '2022',

        ]);

        $doc_id = $doc->id;
        foreach($files as $file)
        {
            Files::create([
                'document_id' => $doc_id,
                'file_name' => $file,
            ]);
        }

        // dd($doc_id);
        return redirect()->route('home')->with('message','Document is successfully Uploaded');
        // return view('Staff.uploadDocument');
    }




    public function editDocument($id)
    {
        $id_org = \Crypt::decrypt($id); 
        $doc = Document::find($id_org);
        $files = Files::find($id_org);
        return view('staff.editUploadDocument',compact('doc','files'));
        dd($doc);
    }
}
