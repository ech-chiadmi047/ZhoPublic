<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;


class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            if (Auth::check()) {
            $notifications_filter = Notification::whereHas('catering', function ($query) {
                $query->where('user_id', '=', Auth::user()->id);
            })->orWhereHas('place', function ($query1) {
                $query1->where('user_id', '=', Auth::user()->id);
            })->orWhereHas('company', function ($query2) {
                $query2->where('user_id', '=', Auth::user()->id);
            })->orWhereHas('equipment', function ($query3) {
                $query3->where('user_id', '=', Auth::user()->id);
            })->orWhereHas('entertainment', function ($query4) {
                $query4->where('user_id', '=', Auth::user()->id);
            })->orWhereHas('suggestion', function ($query5) {
                $query5->where('user_id', '=', Auth::user()->id);
            })->get();

            $notifications = $notifications_filter->where('status',0);
            $client_notifications = Notification::where('notification','Your account is verified')->where('status', 0)
            ->where('user_id', '=', Auth::user()->id)->get();
            $notif_num_client = $client_notifications->count();
            $notif_num = $notifications->count();
            $client_num = $notif_num+$notif_num_client ;


            $admin_notifications = Notification::where('notification','wants to verify their account')->where('status', 0)->get();
            $message_notifications = Notification::where('notification','sent a message')->where('status', 0)->get();
            $notif_num_admin = $admin_notifications->count();
            $message_notifications_num = $message_notifications->count();
            $admin_num = $notif_num+$notif_num_admin+$message_notifications_num;

            $view->with(compact('notifications','admin_notifications','client_num','admin_num','client_notifications','message_notifications'));
        }
        });
    }
}
