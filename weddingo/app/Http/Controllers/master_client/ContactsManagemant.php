<?php

namespace App\Http\Controllers\master_client;

use App\master_client\User;
use App\master_client\Wedding;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\master_client\CategoryInvitation;
use App\master_client\WeddingInvitation;
use League\Flysystem\Exception;

class ContactsManagemant extends Controller
{
    public function index() {
        $categories = CategoryInvitation::all();
        $guests = WeddingInvitation::all();
        return view("master-client-view.contacts-management", array("categories" => $categories, "guests" => $guests));
    }

    public function add_guests_category(Request $request) {
        try {
            $category_invitation = new CategoryInvitation;
            $category_invitation->name = $request->name;
            $category_invitation->save();
            return "successfuly added.";
        } catch(Exception $e){
            // do task when error
            // TODO: handle this while in production mode
            return $e->getMessage();   // insert query
        }
    }

    public function get_all_category_invitations() {
        /*
        $categories = CategoryInvitation::all();
        return json_encode($categories);
        */
        try {
            $wedding = new Wedding;
            $wedding->id = 1;
            $wedding->name = "Gal And Zohar";
            $wedding->date = "26/12/2016";
            return $wedding->getWeddingGuests();
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function add_wedding_guest(Request $request) {
        try {
            $wedding_guest = new WeddingInvitation;
            $wedding_guest->name = $request->name;
            $wedding_guest->phone_number = $request->phone_number;
            $wedding_guest->wedding_id = 2;
            $wedding_guest->guests_num = 3;
            $wedding_guest->is_coming = 1;
            $wedding_guest->category_id = 1;
            $wedding_guest->save();
            return "Guest has been added successfuly.";
        } catch(Exception $e){
            // do task when error
            // TODO: handle this while in production mode
            return $e->getMessage();   // insert query
        }
    }

    public function remove_wedding_guest(Request $request) {
        try {
            $id = $request->guest_id;
            $wedding_guest = WeddingInvitation::find($id);
            $wedding_guest->delete();
            return "Guest has been deleted successfuly";
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function update_wedding_guest(Request $request) {
        /*
        try {
            $id = $request->guest_id;
            $wedding_guest = WeddingInvitation::find($id);
            $wedding_guest->name = $request->name;
            $wedding_guest->phone_number = $request->phone_number;
            $wedding_guest->wedding_id = 2;
            $wedding_guest->guests_num = $request->guests_num;
            $wedding_guest->is_coming = $request->is_coming;
            $wedding_guest->category_id = $request->category_id;
            $wedding_guest->save();
            return "Wedding Guest has been updated successfuly";
        } catch(Exception $e) {
            return $e->getMessage();
        } */
        return 1;
    }

    public function get_updated_guest_data(Request $request) {
        try {
            $id = $request->id;
            $wedding_guest = WeddingInvitation::find($id);
            // return var_dump($wedding_guest->id);
            return response()->json($wedding_guest);
            // return Response::json($wedding_guest);
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function get_all_wedding_category() {
        return CategoryInvitation::all();
    }

    public function get_all_wedding_guests() {
        return WeddingInvitation::all();
    }
}
