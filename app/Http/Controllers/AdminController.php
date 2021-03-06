<?php

namespace App\Http\Controllers;

use App\Models\EventSpace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Venues;
use App\Models\Hotel;
use App\Models\HotelRoom;
use App\Models\User;
use App\Models\Audit;
use App\Models\Announcement;
// use Storage;
use Auth;
use Illuminate\Support\Facades\Hash;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $announcement =Announcement::get();
        $eventspace =EventSpace::count();
        $rooms =HotelRoom::count();
        return view('admin.main-menu',compact('announcement','eventspace','rooms'));
    }


    public function add_hotel()
    {
        return view('admin.add-new-hotel');
    }

    public function add_room()
    {
        return view('admin.add-new-room');
    }

    public function add_eventspace()
    {
        $hotel_name = Hotel::distinct('hotel_name')->get();
        return view('admin.add-new-eventspace',compact('hotel_name'));
    }

    public function forms()
    {
        return view('admin.forms');
    }

    public function list_venue()
    {
        $hotels = Hotel::get();
        $rooms = HotelRoom::get();
        // dd($hotels->hotel_name);
        $eventspaces = EventSpace::get();
        return view('admin.list-venue',compact('hotels','rooms','eventspaces'));
    }

    public function user()
    {
        $currentUser = Auth::user();
        $user = User::where([['status','!=','0']])->get();
        $user_deact = User::where([['status','!=','1']])->get();
        return view('admin.user-list', compact('user','user_deact', 'currentUser'));

    }

    public function userDelete($id){

        // logout user
        $userToLogout = User::find($id);

        // dd($userToLogout);

        if($userToLogout->status == false){
            User::find($id)->update([
              'status' => 1,
              'blocked_at'=> null
              ]);
          $success = 'success';
          $text = 'User has been activated';
        }
        elseif($userToLogout->status == true){
            // dd('masuk');
            User::find($id)->update([
              'status' => 0,
              'blocked_at'=> now()
              ]);

          $success = 'success';
          $text = 'User has been deactivated';
        }
        return redirect()->back()->with($success,$text);
    }

    public function updateUserRole(Request $request,$id){
        $users=User::find($id);
        // dd($request->all());
        $users->roles = $request->role;
        $users->save();
        $success = 'success';
        $text = 'User role has been changed';

        return redirect()->back()->with($success,$text);
      }


    public function add_user()
    {
        return view('admin.add-user');
    }

    public function viewAuditList()
  {
      $data = Audit::get();
      return view('admin.audit-trail.audit-trail-log', compact('data'));
  }

  public function viewAuditListFilter(Request $request)
  {
      $tarikh_mula = date($request->tarikh_mula);
      $tarikh_akhir = date($request->tarikh_akhir);

      // $data = Audit::whereBetween('created_at', [$tarikh_mula.' 00:00:00',$tarikh_akhir.' 23:59:59'])
      //             ->where('event', 'Log Masuk')
      //             ->orWhere('event', 'Log Keluar')
      //             ->orderBy('created_at', 'desc')
      //             ->get();


      $data = Audit:: where('updated_at', '>', $tarikh_mula.' 00:00:00')
                  ->where('updated_at', '<', $tarikh_akhir.' 23:59:59')
                  ->orderBy('updated_at', 'asc')
                  ->get();

      return view('admin.audit-trail.audit-trail-log-filter', compact('data'));
  }


        public function update_profile(Request $request){
            // dd($request->all());
            $users = User::findOrFail(Auth::user()->id);


            $users->name = $request->name;

            $users->email = $request->email;


            // if(!(Hash::check($request->get('password'), Auth::user()->password))){
            //     return redirect()->back()->with("error","Kata laluan semasa tidak betul");
            //   }

            // if(strcmp($request->get('password'),$request->get('new_password'))== 0){
            //     return redirect()->back()->with("error","Kata laluan semasa tidak boleh sama dengan kata laluan baru");
            //   }

            // if(strcmp($request->get('new_password'),$request->get('password_confirmation'))== 1){
            //     return redirect()->back()->with("error","Kata laluan baru tidak sama dengan kata laluan pengesahan");
            //   }

            //   $validatedData = $request->validate([
            //           'password' => 'required',
            //           'new_password' => 'required|string|min:6',
            //     ]);

            //     $hashed_random_password = Hash::make($request->get('new_password'));

            //     $users->password = $hashed_random_password;

                // $gambar_profile = "";

                if ($files = request()->file('gambar_profile') != null) {
                    // dd($request->gambar_profile);
                    $profile_picture = request()->file('gambar_profile')->store('public/storage/profile');
                    $users->profile_picture = $profile_picture;
    }


            $users->save();

            return redirect()->back()->with("success", "Your profile has been updated");
        }

        public function update_profile_admin()
        {

            $users = auth()->user();

            return view('admin.update-profile', compact('users'));
        }

        public function update_password_admin()
        {

            $users = auth()->user();

            return view('admin.update-password', compact('users'));
        }

        public function update_password(Request $request)
    {

        // Validate change password form
        $this->validator($request->all())->validate();

        $user = User::findOrFail(Auth::user()->id);

        if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
            return redirect()->back()->with("error", "The previous password is not the same.");
        }

        if (strcmp($request->get('old_password'), $request->get('password')) == 0) {
            return redirect()->back()->with("error", "The previous password cannot be the same as the current password.");
        }

        if (strcmp($request->get('password'), $request->get('password_confirmation')) == 1) {
            return redirect()->back()->with("error", "New passwords are not the same.");
        }


        $hashed_random_password = Hash::make($request->get('password'));

        $user->password = $hashed_random_password;

        $user->save();


        return redirect()->route('admin.password-profile')->with("success", "Password has been changed successfully.");
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'old_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required', 'string'],
        ]);
    }

  public function addUser(Request $request)
  {
    $hashed_random_password = Hash::make("1234567890");

    User::create([
        "name" => $request->name,
        "email" => $request->email,
        "password" =>$hashed_random_password,
        "roles" => $request ->roles,
    ]);

    $users = User::get();
    return redirect()->back()->with("success", "User has been added successfully");
  }

  //delete function
  public function deleteHotel(Request $request)
  {
    $hotel = Hotel::findOrFail($request->id);
    $hotel->delete();

    session()->flash('message', 'Venue Has Been Deleted Successfully.');

    return redirect()->back();
  }

  public function deleteEventSpace(Request $request)
  {
    $eventspace = EventSpace::findOrFail($request->id);
    $eventspace->delete();

    session()->flash('message', 'Event Space Has Been Deleted Successfully.');

    return redirect()->back();
  }

  public function deleteHotelRoom(Request $request)
  {
    $hotelroom = HotelRoom::findOrFail($request->id);
    $hotelroom->delete();

    session()->flash('message', 'Room Has Been Deleted Successfully.');

    return redirect()->back();
  }


}
