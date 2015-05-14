<?php

class AdminController extends BaseController {

    public function index() {
        if (Auth::check()) {
            return Redirect::route('admin dashboard');
        }
        return View::make('admin.login');
    }

    public function login() {
        $rules = array(
            'username' => 'required',
            'password' => 'required'
        );


        $validator = Validator::make(Input::all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::route('home')
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'username'     => Input::get('username'),
                'password'  => Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt(($userdata), true)) {

                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to('secure');
                // for now we'll just echo success (even though echoing in a controller is bad)
                return Redirect::route('admin dashboard');

            } else {        

                // validation not successful, send back to form 
                return Redirect::route('home')
                    ->withErrors(array('message' => 'Username and/or password are incorrect'));

            }

        }
    }

    public function dashboard() {
       return 'dashboard'; 
    }
}
