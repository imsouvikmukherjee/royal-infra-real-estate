<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminDashboard(){
        $title = "Admin Dashboard";
        $balance = DB::table('users')->where('email',Session::get('email'))->where('usertype',Session::get('usertype'))->first();
        // dd($balance->balance);

        $property = DB::table('property')->count();

        $enquery = DB::table('property_enquiries')->count();

        $contact = DB::table('contact')->count();

        $users = DB::table('users')->whereIn('usertype',['1','2','3','4'])->count();

        $pending_withdraw = DB::table('withdrawals')->where('status','0')->count();

        $todayCount = DB::table('scheduled_payments')
        ->whereDate('payment_date', Carbon::today())
        ->count();

        $investor = DB::table('users')->where('usertype','1')->count();

        $approved_withdraw = DB::table('withdrawals')->where('status','1')->count();

        $user_pending_withdraw = DB::table('withdrawals')
    ->where('email', session('email'))
    ->where('status', '0')
    ->count();


    $user_approved_withdraw = DB::table('withdrawals')
    ->where('email', session('email'))
    ->where('status', '1')
    ->count();

    $user_month_profit = DB::table('profit')
    ->where('email', session('email'))
    ->whereMonth('created_at', date('m'))
    ->whereYear('created_at', date('Y'))
    ->selectRaw('SUM(profit_amount) as total_profit, SUM(monthly_amount) as total_monthly')
    ->first();

    // Total balance (profit + monthly amount)
    $current_month_total_balance = $user_month_profit->total_profit + $user_month_profit->total_monthly;


    $user_monthly_withdrawals = DB::table('withdrawals')
    ->where('email', session('email'))  // Filter by logged-in user
    ->where('status', 1)               // Only approved withdrawals
    ->whereMonth('created_at', date('m'))  // Filter current month
    ->whereYear('created_at', date('Y'))   // Filter current year
    ->sum('amount');  // Sum up the withdrawal amounts

        return view('admin.index',['title' => $title, 'balance' => $balance, 'property' => $property, 'enquery' => $enquery, 'contact' => $contact, 'users' => $users, 'pending_withdraw' => $pending_withdraw,
    'todayCount' => $todayCount, 'investor' => $investor, 'approved_withdraw' => $approved_withdraw, 'user_pending_withdraw' => $user_pending_withdraw,
    'user_approved_withdraw' => $user_approved_withdraw, 'current_month_total_balance' => $current_month_total_balance, 'user_monthly_withdrawals' => $user_monthly_withdrawals]);
    }

    public function properties(){
        $title = "Properties";
        $properties = DB::table('property')->select('property.*',DB::raw("DATE_FORMAT(property.created_at, '%Y-%m-%d') AS created_at"))
        ->orderBy('id','desc')->get();
        $balance = DB::table('users')->where('email',Session::get('email'))->where('usertype',Session::get('usertype'))->first();
        return view('admin.property',['title' => $title, 'balance' => $balance, 'properties' => $properties]);
    }


    public function addProperties(){
        $title = "Add Property";
        $balance = DB::table('users')->where('email',Session::get('email'))->where('usertype',Session::get('usertype'))->first();
        return view('admin.add-property',['title' => $title, 'balance' => $balance]);
    }


    public function addPropertyStore(Request $request){
        $request->validate([
            'property_category'    => 'required|string',
            'property_name'        => 'required|string|max:255',
            'property_address'     => 'nullable|string|max:255',
            'property_contact'     => 'nullable|string|max:255',
            'property_map'         => 'nullable|url',
            'property_image'       => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'price'                => 'nullable|numeric|min:0',
            'property_video'       => 'nullable|mimes:mp4,mov,avi,wmv|max:204800', // 200MB max
            'property_description' => 'required|string',
        ]);

        // Handle image upload
        if ($request->hasFile('property_image')) {
            $image = $request->file('property_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('property_image'), $imageName); // Save in public/property_image
        } else {
            $imageName = null;
        }

            // Handle video upload
        if ($request->hasFile('property_video')) {
            $video = $request->file('property_video');
            $videoName = time() . '_' . $video->getClientOriginalName();
            $video->move(public_path('property_videos'), $videoName);
        } else {
            $videoName = null;
        }

        // Insert data using Query Builder
        DB::table('property')->insert([
            'property_category'    => $request->property_category,
            'property_name'        => $request->property_name,
            'property_address'     => $request->property_address,
            'property_contact'     => $request->property_contact,
            'property_map'         => $request->property_map,
            'property_image'       => $imageName,
            'price'                => $request->price,
            'property_video'       => $videoName,
            'property_description' => $request->property_description,
            'created_at'           => now(),
            // 'updated_at'           => now(),
        ]);

        return redirect()->route('admin_properties')->with('success', 'Property added successfully!');
    }


    public function propertyDelete($id){
        $id = decrypt($id);

        $property = DB::table('property')->where('id', $id)->first();

        // Check if property exists
        if (!$property) {
            return redirect()->back()->with('error', 'Property not found.');
        }

        // Delete the property image from storage
        if ($property->property_image && File::exists(public_path('property_image/' . $property->property_image))) {
            File::delete(public_path('property_image/' . $property->property_image));
        }

        // Delete the property video from storage
        if ($property->property_video && File::exists(public_path('property_videos/' . $property->property_video))) {
            File::delete(public_path('property_videos/' . $property->property_video));
        }

        // Delete the property from the database
        DB::table('property')->where('id', $id)->delete();

        return redirect()->back()->with('success', 'Property deleted successfully.');

    }


    public function propertyUpdate($id){
        $id = decrypt($id);
        $title = "Update Property";
        $balance = DB::table('users')->where('email',Session::get('email'))->where('usertype',Session::get('usertype'))->first();
        $data = DB::table('property')->where('id',$id)->first();

        return view('admin.update_property',['title' => $title, 'balance' => $balance, 'data' => $data]);

    }


    public function propertyUpdateStore(Request $request, $id){
        $id = decrypt($id);

        $request->validate([
            'property_category'    => 'required|string',
            'property_name'        => 'required|string|max:255',
            'property_address'     => 'nullable|string|max:255',
            'property_contact'     => 'nullable|string|max:255',
            'property_map'         => 'nullable|url',
            'property_image'       => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'property_video'       => 'nullable|mimes:mp4,mov,avi,wmv|max:204800', // 200MB limit
            'price'                => 'nullable|numeric|min:0',
            'property_description' => 'required|string',
        ]);

        // Fetch existing property data
        $property = DB::table('property')->where('id', $id)->first();

        // Handle image upload
        if ($request->hasFile('property_image')) {
            // Delete the old image if exists
            if ($property->property_image && File::exists(public_path('property_image/' . $property->property_image))) {
                File::delete(public_path('property_image/' . $property->property_image));
            }

            $image = $request->file('property_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('property_image'), $imageName);
        } else {
            $imageName = $property->property_image;
        }

        // Handle video upload
        if ($request->hasFile('property_video')) {
            // Delete the old video if exists
            if ($property->property_video && File::exists(public_path('property_videos/' . $property->property_video))) {
                File::delete(public_path('property_videos/' . $property->property_video));
            }

            $video = $request->file('property_video');
            $videoName = time() . '_' . $video->getClientOriginalName();
            $video->move(public_path('property_videos'), $videoName);
        } else {
            $videoName = $property->property_video;
        }

        // Update property details
        DB::table('property')->where('id', $id)->update([
            'property_category'    => $request->property_category,
            'property_name'        => $request->property_name,
            'property_address'     => $request->property_address,
            'property_contact'     => $request->property_contact,
            'property_map'         => $request->property_map,
            'property_image'       => $imageName,
            'property_video'       => $videoName,
            'price'                => $request->price,
            'property_description' => $request->property_description,
            'updated_at'           => now(),
        ]);

        return redirect()->route('admin_properties')->with('success', 'Property updated successfully!');
    }



    public function adminUsers(){
        $title = "Users";
        $users = DB::table('users')->select('users.*', DB::raw("DATE_FORMAT(users.created_at, '%Y-%m-%d') AS created_at"))
        ->whereIn('usertype', [1, 2, 3, 4])->orderBy('id','desc')->get();

        $balance = DB::table('users')->where('email',Session::get('email'))->where('usertype',Session::get('usertype'))->first();

        return view('admin.users',['title' => $title, 'users' => $users, 'balance' => $balance]);
    }


    public function loginStatus($id){
        $id = decrypt($id);

        $currentStatus = DB::table('users')->where('id', $id)->value('status');

        // Toggle status (0 → 1, 1 → 0)
        $newStatus = $currentStatus == 0 ? 1 : 0;

        // Update the status in the database
        DB::table('users')->where('id', $id)->update(['status' => $newStatus]);

        return back()->with('success', 'User status updated successfully!');
    }

    public function addProfit($id){
        $id = decrypt($id);
        $title = "Add Profit";
        $balance = DB::table('users')->where('email',Session::get('email'))->where('usertype',Session::get('usertype'))->first();
        $property = DB::table('property')->select('property_name')->orderBy('property_name','asc')->get();
        return view('admin.add-profit',['title' => $title, 'balance' => $balance, 'id' => $id, 'property' => $property]);
    }


    public function addProfitStore(Request $request, $id)
    {
        $id = decrypt($id);

        $request->validate([
            'property' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1'
        ]);

        $user = DB::table('users')->where('id', $id)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        $investmentBenefits = DB::table('investment_benefits')->first();

        if (!$investmentBenefits) {
            return redirect()->back()->with('error', 'User benefits data not found');
        }

        $amount = $request->amount;
        $usertype = $user->usertype;
        $currentBalance = $user->balance ?? 0;  // Updated column name
        $profitAmount = 0;
        $monthlyProfit = 0;
        $months = 0;

        $updateData = [];

        if ($usertype == 1) { // Investor
            $profitAmount = ($investmentBenefits->investors_percentage / 100) * $amount;
            $updateData['balance'] = $currentBalance + $profitAmount;

        } elseif ($usertype == 2) { // Channel Partner
            $spotProfit = ($investmentBenefits->channel_partner_percentage_spot / 100) * $amount;
            $profitAmount = $spotProfit; // Only spot profit for now
            $updateData['balance'] = $currentBalance + $spotProfit;

            // Monthly profit calculation
            $monthlyProfit = ($investmentBenefits->channel_partner_percentage_month / 100) * $amount;
            $months = min(24, $investmentBenefits->number_of_months); // Max 24 months

            for ($i = 1; $i <= $months; $i++) {
                $profitDate = Carbon::now()->addMonths($i)->startOfDay();

                DB::table('scheduled_payments')->insert([
                    'user_id' => $id,
                    'amount' => $monthlyProfit,
                    'payment_date' => $profitDate,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }

        } elseif ($usertype == 3) { // Master Channel Partner
            $profitAmount = ($investmentBenefits->master_channel_partner_percentage / 100) * $amount;
            $updateData['balance'] = $currentBalance + $profitAmount;

        } elseif ($usertype == 4) { // Franchise Partner
            $profitAmount = ($investmentBenefits->franchise_partner_percentage / 100) * $amount;
            $updateData['balance'] = $currentBalance + $profitAmount;

        } else {
            return redirect()->back()->with('error', 'Invalid user type');
        }

        // Update user balance
        DB::table('users')->where('id', $id)->update($updateData);

        // Insert profit data into profit table
        DB::table('profit')->insert([
            'username' => $user->name,
            'email' => $user->email,
            'usertype' => $usertype,
            'property_name' => $request->property,
            'total_turnover' => $amount,
            'current_balance' => $updateData['balance'],
            'profit_amount' => $profitAmount,
            'monthly_amount' => ($usertype == 2) ? $monthlyProfit : 0,
            'created_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Profit added successfully');
    }


    // Function to update user balance on scheduled payment dates
    public function updateUserBalance()
    {
        $today = Carbon::today();

        // Get all scheduled payments for today
        $payments = DB::table('scheduled_payments')
                        ->whereDate('payment_date', $today)
                        ->get();

        foreach ($payments as $payment) {
            // Get the user record
            $user = DB::table('users')->where('id', $payment->user_id)->first();

            if ($user) {
                // Update user balance
                DB::table('users')->where('id', $payment->user_id)->update([
                    'balance' => $user->balance + $payment->amount
                ]);

                // Optional: Delete the processed scheduled payment
                DB::table('scheduled_payments')->where('id', $payment->id)->delete();
            }
        }

        return response()->json(['message' => 'User balances updated successfully'], 200);
    }


    public function scheduledPayments(){
        $title = "Scheduled Payments";
        $balance = DB::table('users')->where('email',Session::get('email'))->where('usertype',Session::get('usertype'))->first();


        $schedules = DB::table('scheduled_payments')
    ->join('users', 'users.id', '=', 'scheduled_payments.user_id')
    ->select('users.id AS userid','users.name', 'users.email','scheduled_payments.id AS paymentid', 'scheduled_payments.amount', 'scheduled_payments.payment_date', 'scheduled_payments.status')
    ->orderBy('scheduled_payments.payment_date', 'asc') // Sorting by payment_date in ascending order
    ->get();
        // dd($schedules);
    return view('admin.scheduled_payments',['title' => $title, 'balance' => $balance, 'schedules' => $schedules]);

    }


    public function makeSchedulePayment($userid, $paymentid){
        $userid = decrypt($userid);
        $paymentid = decrypt($paymentid);

        // Fetch the scheduled payment details
        $payment = DB::table('scheduled_payments')->where('id', $paymentid)->first();

        if (!$payment) {
            return redirect()->back()->with('error', 'Payment record not found.');
        }

        // Get the user's current balance
        $user = DB::table('users')->where('id', $userid)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        // Calculate new balance
        $newBalance = $user->balance + $payment->amount;

        // Update the user's balance
        DB::table('users')->where('id', $userid)->update([
            'balance' => $newBalance
        ]);

        // Delete the scheduled payment record
        DB::table('scheduled_payments')->where('id', $paymentid)->delete();

        return redirect()->back()->with('success', 'Payment successfully processed.');
    }


    public function profitHistory(){
        $title = "Profit History";
        $balance = DB::table('users')->where('email',Session::get('email'))->where('usertype',Session::get('usertype'))->first();

        $histories = DB::table('profit')->select('profit.*',DB::raw("DATE_FORMAT(profit.created_at, '%Y-%m-%d') AS created_at"))
        ->orderBy('id','desc')->get();

        $user_history = DB::table('profit')->select('profit.*',DB::raw("DATE_FORMAT(profit.created_at, '%Y-%m-%d') AS created_at"))
        ->where('email',Session::get('email'))->orderBy('id','desc')->get();

        return view('admin.profit_history',['title' => $title, 'balance' => $balance, 'histories' => $histories, 'user_history' => $user_history]);
    }

    public function userDelete($id){
        $id = decrypt($id);
        DB::table('users')->where('id',$id)->delete();
        return redirect()->back()->with('success','User Deleted Successfully');
    }


    public function investment(){
        $title = "Investment Benifites";
        $data = DB::table('investment_benefits')->where('id',1)->first();
        $balance = DB::table('users')->where('email',Session::get('email'))->where('usertype',Session::get('usertype'))->first();
        return view('admin.investment_benifits',['title' => $title, 'balance' => $balance, 'data' => $data]);
    }


    public function investmentBenifitsUpdate(Request $request, $id){
        $id = decrypt($id);

        $request->validate([
            'investors_percentage' => 'required|numeric|min:0',
            'channel_partner_percentage_spot' => 'required|numeric|min:0',
            'channel_partner_percentage_month' => 'required|numeric|min:0',
            'number_of_months' => 'required|integer|min:1',
            'master_channel_partner_percentage' => 'required|numeric|min:0',
            'franchise_partner_percentage' => 'required|numeric|min:0',
        ]);


        DB::table('investment_benefits')->where('id', $id)->update([
            'investors_percentage' => $request->investors_percentage,
            'channel_partner_percentage_spot' => $request->channel_partner_percentage_spot,
            'channel_partner_percentage_month' => $request->channel_partner_percentage_month,
            'number_of_months' => $request->number_of_months,
            'master_channel_partner_percentage' => $request->master_channel_partner_percentage,
            'franchise_partner_percentage' => $request->franchise_partner_percentage,
            'updated_at' => now(),
        ]);

        return redirect()->back()->with('success', 'User benefits updated successfully!');
    }


    public function propertyEnquery(){
        $title = "Property Enquery";
        $enquery = DB::table('property_enquiries')->select('property_enquiries.*',DB::raw("DATE_FORMAT(property_enquiries.created_at, '%Y-%m-%d') AS created_at"))
        ->orderBy('id','desc')->get();
        $balance = DB::table('users')->where('email',Session::get('email'))->where('usertype',Session::get('usertype'))->first();
        return view('admin.property_enquery',['title' => $title, 'balance' => $balance, 'enquery' => $enquery]);
    }


    public function enqueryDelete($id){
        $id = decrypt($id);
        DB::table('property_enquiries')->where('id',$id)->delete();
        return redirect()->back()->with('success','Enquery deleted successfully!');
    }

    public function contactMessage(){
        $title = "Contact Messages";
        $messages = DB::table('contact')->select('contact.*',DB::raw("DATE_FORMAT(contact.created_at, '%Y-%m-%d') AS created_at"))
        ->orderBy('id','desc')->get();

        $balance = DB::table('users')->where('email',Session::get('email'))->where('usertype',Session::get('usertype'))->first();
        return view('admin.contact_messages',['title' => $title, 'messages' => $messages, 'balance' => $balance]);
    }


    public function messageDelete($id){
        $id = decrypt($id);
        DB::table('contact')->where('id',$id)->delete();
        return redirect()->back()->with('success','Message Deleted Successfully');
    }


    public function withdraw(){
        $title = 'Withdraw';
        $balance = DB::table('users')->where('email',Session::get('email'))->where('usertype',Session::get('usertype'))->first();

        return view('admin.withdraw',['title' => $title, 'balance' => $balance]);
    }


    public function withdrawStore(Request $request){

        $request->validate([
            'amount' => 'required|numeric|min:1',
            'bank_name' => 'required|string|max:255',
            'branch' => 'required|string|max:255',
            'account_number' => 'required|numeric',
            'confirm_account_number' => 'required|numeric|same:account_number',
            'ifsc_code' => 'required|string|max:20',
            'accounts_holder_name' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $balance = DB::table('users')->where('id', $user->id)->value('balance');

        if ($request->amount > $balance) {
            return back()->withErrors(['amount' => 'Insufficient balance.'])->withInput();
        }

        DB::table('withdrawals')->insert([
            'user_id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'amount' => $request->amount,
            'bank_name' => $request->bank_name,
            'branch' => $request->branch,
            'account_number' => $request->account_number,
            'ifsc_code' => $request->ifsc_code,
            'accounts_holder_name' => $request->accounts_holder_name,
            'created_at' => now(),

        ]);

        DB::table('users')->where('id', $user->id)->decrement('balance', $request->amount);

        return redirect()->back()->with('success', 'Withdrawal request submitted successfully.');

    }

    public function withdrawRequest(){
        $title = "Withdraw Request";
        $balance = DB::table('users')->where('email',Session::get('email'))->where('usertype',Session::get('usertype'))->first();

        $withdraws = DB::table('withdrawals')->select('withdrawals.*',DB::raw("DATE_FORMAT(withdrawals.created_at, '%Y-%m-%d') AS created_at"))
        ->orderBy('id','desc')->get();

        return view('admin.withdraw_request',['title' => $title, 'balance' => $balance, 'withdraws' => $withdraws]);
    }


    public function approveWithdraw($id){
        $id = decrypt($id);

        DB::table('withdrawals')->where('id',$id)->update([
            'status' => '1'
        ]);

        return redirect()->back()->with('success','Withdraw Approved');
    }


    public function rejectWithdraw($id){
        $id = decrypt($id);

    // Fetch user email and withdrawal amount
    $withdrawal = DB::table('withdrawals')->where('id', $id)->first();

    if (!$withdrawal) {
        return back()->with('error', 'Withdrawal request not found.');
    }

    $useremail = $withdrawal->email;
    $amount = $withdrawal->amount;

    // Update withdrawal status to 'Rejected' (2)
    DB::table('withdrawals')->where('id', $id)->update(['status' => '2']);

    // Add the withdrawal amount back to the user's balance
    DB::table('users')->where('email', $useremail)->increment('balance', $amount);

    return redirect()->back()->with('success', 'Withdrawal request rejected, amount refunded.');


    }


    public function withdrawHistory(){
        $title = "Withdraw History";
        $balance = DB::table('users')->where('email',Session::get('email'))->where('usertype',Session::get('usertype'))->first();
        $withdraws = DB::table('withdrawals')->select('withdrawals.*',DB::raw("DATE_FORMAT(withdrawals.created_at, '%Y-%m-%d') AS created_at"))
        ->where('email',Session::get('email'))->orderBy('id','desc')->get();
        return view('admin.withdraw_history',['title' => $title, 'balance' => $balance, 'withdraws' => $withdraws]);
    }

}
