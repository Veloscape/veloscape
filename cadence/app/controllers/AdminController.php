<?php
use Log;

class AdminController extends BaseController {

    public function index() {
        Log::info('authcheck');
        Log::info(Auth::check());
        if (Auth::check()) {
            return Redirect::route('admin dashboard');
        }
        $urls = array(
            'url_wordpress' => '/wp-admin'
        );

        return View::make('admin.login', $urls);
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
                'user_login'     => Input::get('username'),
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
        return View::make('admin.dashboard'); 
    }

    public function routes() {
        if (Input::get('id')) {
            $id = Input::get('id');
            return $this->showRoute($id);
        }
        $routes = MapRoute::with('markers')->orderBy('created_at', 'desc')->get();
        return View::make('admin.routes')->with('routes', $routes);
    }

    public function showRoute($id) {
        $route = MapRoute::find($id);
        if ($route == null) {
            return Redirect::route('admin routes')->withErrors(array('message' => 'Route (#'.$id.') could not be located.'));
        }

        return View::make('admin.route-single', array('route' => $route));
    }

    public function export() {
        /** if query string is missing export then do nothing **/
        if (Input::get('export') == null) {
            return Redirect::back();
        }
        $routes = MapRoute::with('markers.values')->orderBy('created_at', 'desc')->get();
        Excel::create(Carbon::now()->toDateString().'_veloscape_routes', function($excel) use ($routes) {
            $excel->sheet('Routes', function($sheet) use ($routes) {
                $sheet->fromArray($routes->toArray()); 
            });
            $excel->sheet('Markers', function($sheet) use ($routes) {
                $sheet->appendRow(array('route_id', 'marker_no.', 'lat', 'lng', 'location', 'surface type', 'safety', 'momentum', 'enjoyment', 'comments'));
                foreach($routes as $route) {
                    foreach($route->markers as $marker) {
                        $row = array(
                            $marker->map_route_id,
                            $marker->marker_no,
                            $marker->lat,
                            $marker->lng,
                            $marker->rev_geo,
                        );
                        foreach($marker->values as $value) {
                            array_push($row, $value->value);
                        }
                        $sheet->appendRow($row);
                    }
                    $sheet->appendRow(array(""));
                }
            });
        })->export(Input::get('export'));
    }
}
