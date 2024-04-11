<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DtrRecord;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\DashboardRequest;
use Illuminate\Http\Request;


class DashboardController extends Controller{

public function index()
    {
        $user = User::select('id', 'firstname', 'email')->where('id', Auth::user()->id)->get();
        return view('contents.dashboard.index')->with('user', $user);
    }

    public function getCurrentTime(){
        $dayname = now()->format('l');
        $month = now()->format('M');
        $daynum = now()->format('d');
        $year = now()->format('Y');

        $hour = now()->format('h');
        $minutes = now()->format('i');
        $seconds = now()->format('s');
        $period = now()->format('A');

        return response()->json([
            "dayname" => $dayname,
            "month" => $month,
            "daynum" => $daynum,
            "year" => $year,

            "hour" => $hour,
            "minutes" => $minutes,
            "seconds" => $seconds,
            "period" => $period
        ]);
    }

    public function recordTime(DashboardRequest $request)
{
    try {
        // Get current date and user
        $date = now()->toDateString();
        $userId = auth()->user()->id;
        $firstName = auth()->user()->firstname;
        $lastName = auth()->user()->lastname;

        // Check if a record already exists for the current user and date
        $existingRecord = DtrRecord::where('user_id', $userId)
                                    ->where('date', $date)
                                    ->first();

        // If no record exists, create a new one; otherwise, update the existing record
        if (!$existingRecord) {
            $dtrRecord = new DtrRecord();
            $dtrRecord->user_id = $userId;
            $dtrRecord->date = $date;
            $dtrRecord->firstname = $firstName;
            $dtrRecord->lastname = $lastName;
        } else {
            $dtrRecord = $existingRecord;
        }

        // Set values based on the action
        switch ($request->action) {
            case 'timein':
                $dtrRecord->timein = now()->toTimeString();
                break;
            case 'timeout':
                $dtrRecord->timeout = now()->toTimeString();
                break;
            case 'lunchin':
                $dtrRecord->lunchin = now()->toTimeString();
                break;
            case 'lunchout':
                $dtrRecord->lunchout = now()->toTimeString();
                break;
        }

        // Save the record
        $dtrRecord->save();

        return back()->with('success', 'Time recorded successfully.');
    } catch (\Throwable $th) {
        return back()->with('error', $th->getMessage());
    }
}

}