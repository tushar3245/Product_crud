<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
     public function store(Request $request)
    {
        $Data = $request->only([  'name',
        'father_name',
        'mother_name',
        'date_of_birth',
        'gender',
        'undergraduate_name',
        'admission_session',
        'reg_no',
        'batch',
        'year_of_passing',
        'graduating_session_class',
        'cgpa',
        'graduate_name',
        'session',
        'reg_id_no',
        'g_batch',
        'year_passing',
        'graduating_session_2',
        'official_address',
        'employer',
        'designation',
        'present_address',
        'mobile',
        'email',
        'paid',
        'bank_name',
        'branch',
        'bank_no',
        'transformation',
        'potu',
        'screenshot',]);

        if ($request->hasFile('potu')) {
            $image = $request->file('potu');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $Data['potu'] = 'images/' . $imageName;
        }
        if ($request->hasFile('screenshot')) {
            $image = $request->file('screenshot');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('images'), $imageName);
            $Data['screenshot'] = 'images/' . $imageName;
        }


        
        $post = Post::create($Data);
        
        return redirect('/regtistration_form')->with('success', 'Car saved successfully!');





        /*// Mark the post as a draft

        Post::create($validatedData);

        // Flash a success message to the session
        $request->session()->flash('success', 'Data has been successfully saved.');

        // Redirect back to the form with the success message
       */ return redirect()->back();
    }
}
