<?php

namespace App\Http\Controllers\master_client;

use Response;
use Request;
use App\PricingPackage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\BuyingInvitationsHistory;
use App\Http\Controllers\Controller;

class PricingController extends Controller
{
    public function __construct()
    {
        $this->middleware('pricing_auth');
    }

    public function index()
    {
        $packages = PricingPackage::all();
        $data = array('packages' => $packages);
        return view('master-client-view.pricing', $data);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function store()
    {
        $historyPackages = Auth::User()->buyingInvitationsHistory()->get();
        $sum = 0;
        foreach ($historyPackages as $package) {
            $sum = $sum + ($package->amount * $package->pricingPackage()->get()[0]->amount_orders);
        }
        $packages = PricingPackage::all();
        foreach ($packages as $package) {
            $amount = Request::get($package->id);
            $sum = $sum + ($package->amount_orders * $amount);
        }
        if ($sum < 100) {
            return Response::json([
                'success' => false,
                'errors' => "יש לקנות 100 הזמנות לפחות באופן חד פעמי"
            ]);
        }
        foreach ($packages as $package) {
            $amount = Request::get($package->id);
            if ($amount > 0) {
                $buying = new BuyingInvitationsHistory();
                $buying->user_id = Auth::User()->id;
                $buying->wedding_id = Auth::User()->Wedding()->id;
                $buying->pricing_package_id = $package->id;
                $buying->amount = $amount;
                $buying->total_price = $package->price * $amount;
                $buying->save();
            }
        }
        return Response::json([
            'success' => true,
            'errors' => null
        ]);
    }
}
