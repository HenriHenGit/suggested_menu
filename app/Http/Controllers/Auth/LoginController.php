<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            // Kiểm tra xem người dùng đã tồn tại trong cơ sở dữ liệu chưa
            $existingUser = User::where('email', $user->getEmail())->first();

            if ($existingUser) {
                // Nếu người dùng đã tồn tại, đăng nhập và chuyển hướng đến trang dashboard
                Auth::login($existingUser);
                return redirect('/dashboard');
            } else {
                // Nếu người dùng chưa tồn tại, tạo người dùng mới
                $newUser = new User();
                $newUser->name = $user->getName();
                $newUser->email = $user->getEmail();
                // Lưu các thông tin khác từ Google nếu cần thiết
                // $newUser->google_id = $user->getId();
                // $newUser->avatar = $user->getAvatar();
                $newUser->save();

                // Đăng nhập người dùng mới và chuyển hướng đến trang dashboard
                Auth::login($newUser);
                return redirect('/dashboard');
            }
        } catch (\Exception $e) {
            // Xử lý ngoại lệ nếu có lỗi xảy ra
            return redirect('/login')->with('error', 'Đăng nhập qua Google thất bại. Vui lòng thử lại.');
        }
    }
}