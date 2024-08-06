<?php

namespace App\Http\Controllers;

use App\Http\Requests\userCreateRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $users)
    {
        $users = User::paginate(10);
        return view('index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Return the signup page to create a user
        return view('sign_up');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(userCreateRequest $request)
    {   
       $dob= sprintf('%04d-%02d-%02d', $request->year, $request->month, $request->day);
       $dateOfBirth= $validatedDate = Carbon::createFromFormat('Y-m-d', $dob);
        $request->dateOfBirth= $dateOfBirth;
       
        // dd($dateOfBirth);
        // dd($request->request);
        // Validate the combined date
        // $user = new User;
        // $user->date_of_birth = $dob;
        // dd($user->date_of_birth);
        
        $name=request()->input('name');
        $email=request()->input('email');
        $password=bcrypt(request()->input('password'));
        $phone=request()->input('phone');
        $gender=request()->input('gender');
        

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'phone' => $phone,
            'date_of_birth' => $dateOfBirth,
            'gender' => $gender,  // assuming gender is a radio button with values 'M' and 'F'
            // ... other fields
        ]);
        
        return redirect()->route('login')->with('Success','Registration successfull.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $id)
    {
        //
    }

    public function login(Request $request)
    {
        

        $credentials = $request->only('email', 'password');

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Authentication passed
            $request->session()->regenerate();

            return redirect()->route('patients.index')
                             ->with('success', 'You are successfully logged in!');
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}

