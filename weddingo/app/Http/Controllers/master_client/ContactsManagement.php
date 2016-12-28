<?php

namespace App\Http\Controllers\master_client;

use App\master_client\User;
use App\master_client\Wedding;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\master_client\CategoryInvitation;
use App\master_client\WeddingInvitation;
use League\Flysystem\Exception;

class ContactsManagement extends Controller
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
        }
    }

    public function get_updated_guest_data(Request $request) {
        try {
            $id = $request->id;
            $wedding_guest = WeddingInvitation::find($id);
            return response()->json($wedding_guest);
        }
        catch(Exception $e) {
            return $e->getMessage();
        }
    }

    public function get_wedding_categories() {
        $categories = CategoryInvitation::all();
        $html_output = "";
        foreach($categories as $cat) {
            $html_output .= '<li><a href="javascript:void(0)">'. $cat->name . '<span>103</span></a></li>';
        }
        return $html_output;
    }

    public function get_wedding_guests() {
        $guests = WeddingInvitation::all();
        $html_output = "";
        foreach($guests as $guest) {
            $html_output .= '<tr class="{{ $guest->id }}">';
            $html_output .= '<td>' . $guest->name . '</td>';
            $html_output .= '<td>' . $guest->phone_number . '</td>';
            $html_output .= '<td>' . $guest->guests_num . '</td>';
            if($guest->is_coming == 1) {
                $html_output .= '<td>אישר\ה הגעה</td>';
            } else if($guest->is_coming == 2) {
                $html_output .= '<td>ביטל\ה הגעה</td>';
            } else if($guest->is_coming == 0) {
                $html_output .= '<td>לא מעודכן</td>';
            }
            $html_output .= '<td><span class="label label-danger"><a href=\'\' style="color: #fff;" id="remove_wedding_guest" class="' . $guest->id . '">X</a></span> </td>';
            $html_output .= '<td><span class="label label-danger"><a href=\'\' data-toggle="modal" data-target="#responsive-modal" style="color: #fff;" id="edit_wedding_guest" class="' . $guest->id . '">X</a></span> </td></tr>';
        }
        return $html_output;
    }

    public function test_ajax() {
        return 1;
    }
}
