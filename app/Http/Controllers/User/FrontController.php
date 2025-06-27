<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index(){
            $title = "Home";
            return view('user.index',['title' => $title]);
    }

    public function propertiesCategory(){
        $title = "Property Category";
        return view('user.project-overview',['title' => $title]);
    }

    public function property($id){
        $title = "Properties";
        $id = decrypt($id);
        $property = DB::table('property')->where('property_category',$id)->orderBy('id','desc')->get();
        // dd($id);
        return view('user.project',['title' => $title, 'property' => $property]);
    }


    public function propertyDetails($id){
        $id = decrypt($id);
        $title = "Property Details";

        $data = DB::table('property')->where('id',$id)->first();

        return view('user.project-details',['title' => $title, 'data' => $data]);
    }

    public function partnerPayment(){
        $title = "Partner Payment";
        return view('user.partner_payment',['title' => $title]);
    }

    public function propertyEnquery($id){
        $id = decrypt($id);

        $title = "Property Enquery";
        return view('user.enquery',['title' => $title, 'id' => $id]);
    }


    public function enqueryStore(Request $request, $id){
        $id = decrypt($id);

        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'contact' => 'required|string|max:10',
        ]);


        $property = DB::table('property')->where('id', $id)->first();

        if (!$property) {
            return back()->with('error', 'Property not found!');
        }

        DB::table('property_enquiries')->insert([
            'property_id'      => $id,
            'property_name'    => $property->property_name,
            'property_category'=> $property->property_category,
            'name'             => $request->name,
            'email'            => $request->email,
            'contact'          => $request->contact,
            'created_at'       => now(),
            // 'updated_at'       => now(),
        ]);

        return back()->with('success', 'Enquiry submitted successfully!');

    }


    public function aboutUs(){
        $title = "About Us";
        return view('user.about',['title' => $title]);
    }

    public function contactUs(){
        $title = "Contact Us";
        return view('user.contact',['title' => $title]);
    }

    public function messageStore(Request $request){
        $request->validate([
            'name'          => 'required|string|max:255',
            'email'         => 'required|email|max:255',
            // 'contact' => 'required|max:15',
            'property_type' => 'required|string|max:255',
            'contact'       => 'required|numeric|digits_between:10,15',
            'message' => 'required'
        ]);

        // Insert data into the `contact` table
        DB::table('contact')->insert([
            'name'          => $request->name,
            'email'         => $request->email,
            'contact' => $request->contact,
            'property_type' => $request->property_type,
            // 'contact'       => $request->contact,
            'message' => $request->message,
            'created_at'    => now(),
        ]);

        // Redirect with success message
        return redirect()->back()->with('success', 'Your message has been submitted successfully.');
    }
}
