@extends('admin.master')

@section('content')
<div class="container">
    <div class="col-lg-10">

            <fieldset>
                <legend>Bank Accounts</legend>

                <div class="card-body">
                    <!-- Credit Card -->
                    <div id="pay-invoice">
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center">Add Bank Account</h3>
                            </div>
                            <hr>
                            <form action="{{route('setting.bank.post')}}" method="post" novalidate="novalidate">
                            @csrf
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="cc-exp" class="control-label mb-1">Routing No</label>
                                            <input id="cc-exp" name="routing_no" type="tel" class="form-control cc-exp"
                                               >
                                            <span class="help-block" data-valmsg-for="cc-exp"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="cc-exp" class="control-label mb-1">Account Name</label>
                                            <input id="cc-exp" name="accont_name" type="tel" class="form-control cc-exp"
                                         >
                                            <span class="help-block" data-valmsg-for="cc-exp"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="cc-exp" class="control-label mb-1">Bank Name</label>
                                            <input id="cc-exp" name="bank_name" type="tel" class="form-control cc-exp"
                                               >
                                            <span class="help-block" data-valmsg-for="cc-exp"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="cc-exp" class="control-label mb-1">Account No</label>
                                            <input id="cc-exp" name="account_no" type="tel" class="form-control cc-exp"
                                         >
                                            <span class="help-block" data-valmsg-for="cc-exp"
                                                data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="x_card_code" class="control-label mb-1">Type</label>
                                        <div class="input-group">
                                            <select id="inputState" name="type" class="form-control">
                                                <option selected>Choose...</option>
                                                <option value="Saving">Saving</option>
                                                <option value="Checking">Checking</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        <span id="payment-button-amount">Save</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
    </div> <!-- .card -->

</div>
<!--/.col-->


<table class="table table-default">
    <thead>
        <tr>

            <th>Account Name</th>
            <th>Account No</th>
            <th>Routing No</th>
            <th>Type</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody id="gvBankAccounts">
    @foreach($bank as $bank)        
        <tr>
            <th scope="row">{{$bank->account_name}}</th>
            <td>{{$bank->account_no}}</td>
            <td>{{$bank->routing_no}}</td>
            <td>{{$bank->type}}</td>
            <td>  <a  href="#"><i class="fa fa-edit fa-fw" aria-hidden="true"></i></a>
            <a  href="#"><i class="fa fa-trash-o fa-fw" aria-hidden="true"></i></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
@stop