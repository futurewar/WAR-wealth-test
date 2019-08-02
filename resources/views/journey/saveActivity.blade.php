@extends('layouts.app')
@section('pageName')
Activity
@endsection

@section('saveActivity') Activity
@endsection

@section('content')
<div class="activity"> 

    <div class="activity_container">
        <h5> How would you allocate a 100M</h5>
        <div class="row">
            <form class="col s12" id="saveActivityForm">
                
                <div class="row">
                    <div class="input-field col s4">
                        Treasury Bills & Bonds:
                        <div class="input-field inline">
                            <input id="t-bill" class="validate" type="number" name="balanced">
                            <label for="t-bill"></label>
                        </div>
                    </div>
                    <div class="input-field col s4">
                        Bonds:
                        <div class="input-field inline">
                            <input id="bonds" class="validate" type="number" name="balanced">
                            <label for="bonds"></label>
                        </div>
                    </div>
                    <div class="input-field col s4">
                        Call Deposit Account:
                        <div class="input-field inline">
                            <input id="c-deposit" class="validate" type="number" name="balanced">
                            <label for="c-deposit"></label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s4">
                        Fixed Deposit Account:
                            <div class="input-field inline">
                                <input id="f-account" class="validate" type="number" name="balanced">
                                <label for="f-account"></label>
                            </div>
                    </div>
                    <div class="input-field col s4">
                        Investment Funds:
                            <div class="input-field inline">
                                    <input id="i-funds" class="validate" type="number" name="aggressive">
                                    <label for="i-funds"></label>
                                    </div>
                    </div>
                    <div class="input-field col s4">
                        Offshore Investments:
                        <div class="input-field inline">
                            <input id="offshore" class="validate" type="number" name="aggressive">
                            <label for="offshore"></label>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s4">
                        Pension Plans:
                        <div class="input-field inline">
                            <input id="pensions" class="validate" type="number" name="balanced">
                            <label for="pensions"></label>
                        </div>
                    </div>
                    <div class="input-field col s4">
                        Savings Plans:
                        <div class="input-field inline">
                            <input id="savings" class="validate" type="number" name="balanced">
                            <label for="savings"></label>
                        </div>
                    </div>
                    <div class="input-field col s4">
                        Savings Account:
                        <div class="input-field inline">
                            <input id="s-account" class="validate" type="number"name="balanced">
                            <label for="s-account"></label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s4">
                        Equities:
                        <div class="input-field inline">
                            <input id="equities" class="validate" type="number" name="aggressive">
                            <label for="equities"></label>
                        </div>
                        </div>
                        <div class="input-field col s4">
                            Retirement Plan:
                            <div class="input-field inline">
                                <input id="r-plan" class="validate" type="text" class="number" name="balanced">
                                <label for="r-plan"></label>
                            </div>
                        </div>
                </div>
 
            </form>
              </div>

    <div class="res right-align">
        <a href="#" id="activityDone" class="waves-effect waves-light btn transparent">Done</a>

    </div>

              
</div>
@endsection
