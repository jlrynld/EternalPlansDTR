<?php
namespace App\Http\Controllers;

use App\Http\Requests\SignUpRequest;
use App\Models\User;
use Illuminate\Http\Request;

class SignUpController extends Controller {

    public function index() {
        return view('contents.auth.sign-up');
}

    public function signUp(SignUpRequest $request){
          try {
                User::create([
                    'type' => $request->type,
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                ]);

                return redirect()->route('sign-in.index')->with('success','Account has been registered');
            } catch (\Throwable $th) {
                return back()->with('error', $th->getMessage());
            }
}



}


?>
