<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNotificationRequest;
use App\Http\Requests\UpdateNotificationRequest;
use App\Models\Notification;
use Illuminate\Http\Request;


class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNotificationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $notification = Notification::find($id);
        $notification->status = '1';
        $notification->save();
        if(isset($notification->suggestion_id)){
            return redirect()->route('zho-suggestion.show', [$notification->suggestion_id]);
        }
        elseif(isset($notification->catering_id)){
            return redirect()->route('zho-catering.show', [$notification->catering_id]);
        }
        elseif(isset($notification->company_id)){
            return redirect()->route('zho-company.show', [$notification->company_id]);
        }
        elseif(isset($notification->entertainment_id)){
            return redirect()->route('zho-entertainment.show', [$notification->entertainment_id]);
        }
        elseif(isset($notification->equipment_id)){
            return redirect()->route('zho-equipment.show', [$notification->equipment_id]);
        }
        elseif(isset($notification->place_id)){
            return redirect()->route('zho-place.show', [$notification->place_id]);
        }
        elseif($notification->notification == 'Your account is verified'){
            return redirect()->route('my_profile');
        }
        elseif($notification->notification == 'sent a message'){
            return redirect()->route('all_messages');
        }
        elseif($notification->notification == 'wants to verify their account'){
            return redirect()->route('admin_verification');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notification $notification)
    {
        //
    }
}
