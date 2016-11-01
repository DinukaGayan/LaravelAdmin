Please Do not Download this Project.it is still on Testing


composer require dinuka/quickadmin dev-master.

Add Laraveldaily\Quickadmin\QuickadminServiceProvider::class, to your \config\app.php providers after App\Providers\RouteServiceProvider::class, otherwise you will not be able to add new ones to freshly generated controllers.

Configure your .env file with correct database information

Run php artisan quickadmin:install and fill the required information.

Register middleware 'role' => \dinuka\Quickadmin\Middleware\HasPermissions::class, in your App\Http\Kernel.php at $routeMiddleware
Access QuickAdmin panel by visiting http://yourdomain/admin.



in Illuminate\Foundation\Auth\ResetsPasswords.php  replace following function .

public function reset(Request $request)
    {

        $this->email = DB::table('password_resets')->where('token', $request->token)->value('email');

        $this->validate($request, [
            'token' => 'required', 
            'password' => 'required|confirmed|min:6',
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        $response = $this->broker()->reset(
            $this->credentials($request), function ($user, $password) {
                $user->email = $this->email;
                $this->resetPassword($user, $password);
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $response == Password::PASSWORD_RESET
                    ? $this->sendResetResponse($response)
                    : $this->sendResetFailedResponse($request, $response);
    }


Searching 7165 files for "/home"

C:\Users\dinuka\Desktop\LARAVEL\testgithub\app\Http\Controllers\Auth\RegisterController.php:
   28       * @var string
   29       */
   30:     protected $redirectTo = '/home';
   31  
   32      /**

C:\Users\dinuka\Desktop\LARAVEL\testgithub\app\Http\Middleware\RedirectIfAuthenticated.php:
   19      {
   20          if (Auth::guard($guard)->check()) {
   21:             return redirect('/home');
   22          }
   23  
