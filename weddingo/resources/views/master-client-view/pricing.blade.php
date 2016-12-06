@extends('layouts.master-client-layout.header-ext')
@section('title', 'Pricing')
@section('content')
<div class="col-md-12">
                    <div class="white-box">
                        <div class="row pricing-plan">
                            <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                <div class="pricing-box">
                                    <div class="pricing-body b-l">
                                        <div class="pricing-header">
                                            <h4 class="text-center">Silver</h4>
                                            <h2 class="text-center"><span class="price-sign">$</span>24</h2>
                                            <p class="uppercase">per month</p>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="price-row"><i class="icon-user"></i> 3 Members</div>
                                            <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                            <div class="price-row"><i class="icon-drawar"></i> 50GB Storage</div>
                                            <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                            <div class="price-row">
                                                <button class="btn btn-success waves-effect waves-light m-t-20">Sign up</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                <div class="pricing-box b-l">
                                    <div class="pricing-body">
                                        <div class="pricing-header">
                                            <h4 class="text-center">Gold</h4>
                                            <h2 class="text-center"><span class="price-sign">$</span>34</h2>
                                            <p class="uppercase">per month</p>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="price-row"><i class="icon-user"></i> 5 Members</div>
                                            <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                            <div class="price-row"><i class="icon-drawar"></i> 80GB Storage</div>
                                            <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                            <div class="price-row">
                                                <button class="btn btn-success waves-effect waves-light m-t-20">Sign up</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                <div class="pricing-box featured-plan">
                                    <div class="pricing-body">
                                        <div class="pricing-header">
                                            <h4 class="price-lable text-white bg-warning"> Popular</h4>
                                            <h4 class="text-center">Platinum</h4>
                                            <h2 class="text-center"><span class="price-sign">$</span>45</h2>
                                            <p class="uppercase">per month</p>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="price-row"><i class="icon-user"></i> 10 Members</div>
                                            <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                            <div class="price-row"><i class="icon-drawar"></i> 120GB Storage</div>
                                            <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                            <div class="price-row">
                                                <button class="btn btn-lg btn-info waves-effect waves-light m-t-20">Sign up</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-12 col-sm-6 no-padding">
                                <div class="pricing-box">
                                    <div class="pricing-body b-r">
                                        <div class="pricing-header">
                                            <h4 class="text-center">Dimond</h4>
                                            <h2 class="text-center"><span class="price-sign">$</span>54</h2>
                                            <p class="uppercase">per month</p>
                                        </div>
                                        <div class="price-table-content">
                                            <div class="price-row"><i class="icon-user"></i> 15 Members</div>
                                            <div class="price-row"><i class="icon-screen-smartphone"></i> Single Device</div>
                                            <div class="price-row"><i class="icon-drawar"></i> 1TB Storage</div>
                                            <div class="price-row"><i class="icon-refresh"></i> Monthly Backups</div>
                                            <div class="price-row">
                                                <button class="btn btn-success waves-effect waves-light m-t-20">Sign up</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
@section('ext-footer-scripts')
<script src="js/custom.min.js"></script>
@endsection