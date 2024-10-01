<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ $links['CSS'] }}">
    <script src="{{ $links['JS'] }}"></script>
</head>
<body>
    <div class="popup-binder">
        <div id="paymentpopup" class="popup display-none">
            <div class="display-flex-space-between">
                <span>Payment</span>
                <div class="action-icon-light" onclick="popup('paymentpopup', 'none')">
                    <span class="material-symbols-sharp">
                    close
                    </span>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="breaker-dotted-feint"></div>
            <div class="breaker"></div>
            <form id="paymentform" action="/case_payment_{{ $case->id }}" method="POST">
                @csrf
                @method("POST")
                <div>
                    <span class="nowrap">Amount paid - </span><br>
                    <div class="breaker"></div>
                    <div class="input-container">
                        <input type="text" name="amount" autocomplete="off" placeholder="Enter amount paid">
                    </div>
                </div>
            </form>
            <div class="breaker"></div>
            <button class="button-100" onclick="submitForm('paymentform')">
                <span>Save changes</span>
            </button>
        </div>
    </div>
    @include("components.header")
    <div class="container">
        <div class="display-flex-space-between">
            <div class="display-flex-align">
                <div class="action-icon-light" onclick="redirect('/cases')">
                    <span class="material-symbols-sharp">
                    west
                    </span>
                </div>
                <span>View case</span>
                <span class="gray-dark">|</span>
                <span>{{ ucwords($case->first_name." ".$case->last_name) }}</span>
            </div>
            <div class="display-flex-align mid-gap">
                <div class="text-align-center cursor-pointer" onclick="submitForm('casedeleteform')">
                    <span class="material-symbols-sharp">
                    cycle
                    </span><br>
                    <span>Switch <br> agent</span>
                </div>
                <div class="text-align-center cursor-pointer" onclick="popup('paymentpopup', 'block')">
                    <span class="material-symbols-sharp">
                    credit_score
                    </span><br>
                    <span>Mark as <br> paid</span>
                </div>
                <form id="casedeleteform" action="/case_delete_{{ $case->id }}" method="POST" class="display-none">
                    @csrf
                    @method("POST")
                </form>
                <div class="text-align-center cursor-pointer" onclick="submitForm('casedeleteform')">
                    <span class="material-symbols-sharp">
                    delete
                    </span><br>
                    <span>Delete <br> case</span>
                </div>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="breaker-dotted-feint"></div>
        <div class="breaker"></div>
        <div class="display-flex-space-between-top mid-gap">
            <div> 
                <span>Application type - <span>{{ ucwords($case->application_type) }}</span></span><br>
                <span>ID number - <span>{{ $case->id_number }}</span></span><br>
                <span>Title - <span>{{ ucwords($case->title) }}</span></span><br>
                <span>Names - <span>{{ ucwords($case->first_name." ".$case->last_name) }}</span></span><br>
                <span>Marital - {{ ucwords($case->marital) }}</span><br>
                <span>Physical address - {{ ucwords($case->physical_address) }}</span><br>
                <span>Mobile 1 - <span>{{ $case->mobile_1 }}</span></span><br>
                <span>Mobile 2 - <span>{{ $case->mobile_2 }}</span></span><br>
                @if($case->email)
                    <div class="display-flex-align">
                        <span>Email - </span>
                        <div class="display-flex-align" style="gap: 0;">
                            <span>{{ json_decode($case->email)[0] }}</span>
                            <span class="material-symbols-sharp">
                            alternate_email
                            </span>
                            <span>{{ json_decode($case->email)[1] }}</span>
                        </div>
                    </div>
                @else
                    <span>Email - --</span>
                @endif
                <div class="breaker"></div>
                <span>Employer - <span>{{ $case->employer }}</span></span><br>
                <span>Employer address - {{ ucwords($case->employer_address) }}</span><br>
                <div class="breaker"></div>
                <span>Bank - <span>{{ ucwords($case->bank) }}</span></span><br>
                <span>Account type - <span>{{ ucwords($case->account_type) }}</span></span><br>
                <span>Account number - <span>{{ $case->account_number }}</span></span><br>
                <span>Branch code - <span>{{ ucwords($case->branch_code) }}</span></span><br>
                <div class="breaker"></div>
                <span>Branch - <span>{{ ucwords($case->branch) }}</span></span><br>
                <span>Date signed - <span>{{ $case->date_signed }}</span></span><br>
                <div class="breaker"></div>
                <span>Paid - <span>{{ $case->paid ? "Yes" : "No" }}</span></span><br>
                @if($case->paid)
                    <span>Amount paid - R <span>{{ number_format($case->paid_amount, 2, ".", ",") }}</span></span><br>
                    <span>Date paid - {{ $case->date_paid }}</span>
                @endif
                <div class="breaker"></div>
                <span>Attending agent - <span>{{ ucwords($agent->first_name. " ".$agent->last_name) }}</span></span><br>
                <span>Agent's extension - <span>{{ $agent->extension }}</span></span><br>
                <span>Agent's mobile - <span>{{ $agent->mobile }}</span></span>
            </div>
            @if($case->dependents || $case->income || $case->expenses || $case->debts)
                <div>
                    <span>Dependents</span>
                    <div class="breaker"></div>
                    <div class="table-binder-norm-gray">
                        <table>
                            <tr>
                                <th>
                                    <span class="material-symbols-sharp">
                                    tag
                                    </span>
                                </th>
                                <th class="nowrap">Full name</th>
                                <th class="nowrap">Age</th>
                                <th>Relationship</th>
                                <th>ID number</th>
                            </tr>
                            <div class="display-none">
                                {{ $counter = 1 }}
                            </div>
                            @foreach(json_decode($case->dependents) as $dependent)
                                <tr>
                                    <td>{{ $counter }}</td>
                                    <td>{{ ucwords($dependent->fullname) }}</td>
                                    <td>{{ ucwords($dependent->age) }}</td>
                                    <td>{{ ucwords($dependent->relationship) }}</td>
                                    <td>{{ ucwords($dependent->idnumber) }}</td>
                                </tr>
                                <div class="display-none">
                                    {{ $counter++ }}
                                </div>
                            @endforeach
                            <div class="display-none">
                                {{ $counter = 1 }}
                            </div>
                        </table>
                    </div>
                    <div class="breaker"></div>
                    <span>Income</span>
                    <div class="breaker"></div>
                    <div class="table-binder-norm-gray">
                        <table>
                            <tr>
                                <th>
                                    <span class="material-symbols-sharp">
                                    tag
                                    </span>
                                </th>
                                <th class="nowrap">Income</th>
                                <th class="nowrap">Category</th>
                                <th>Current</th>
                                <th>Proposed</th>
                            </tr>
                            <div class="display-none">
                                {{ $counter = 1 }}
                            </div>
                            @foreach(json_decode($case->income) as $income)
                                <tr>
                                    <td>{{ $counter }}</td>
                                    <td>{{ ucwords($income->income) }}</td>
                                    <td>{{ ($income->category) }}</td>
                                    <td>R {{ $income->current ? number_format($income->current, 2, ".", ",") : "0.00" }}</td>
                                    <td>R {{ $income->proposed ? number_format($income->proposed, 2, ".", ",") : "0.00" }}</td>
                                </tr>
                                <div class="display-none">
                                    {{ $counter++ }}
                                </div>
                            @endforeach
                            <div class="display-none">
                                {{ $counter = 1 }}
                            </div>
                        </table>
                    </div>
                    <div class="breaker"></div>
                    <span>Expenses</span>
                    <div class="breaker"></div>
                    <div class="table-binder-norm-gray">
                        <table>
                            <tr>
                                <th>
                                    <span class="material-symbols-sharp">
                                    tag
                                    </span>
                                </th>
                                <th class="nowrap">Expense</th>
                                <th class="nowrap">Monthly expense</th>
                                <th>Proposed expense</th>
                            </tr>
                            <div class="display-none">
                                {{ $counter = 1 }}
                            </div>
                            @foreach(json_decode($case->expenses) as $expenses)
                                <tr>
                                    <td>{{ $counter }}</td>
                                    <td>{{ ucwords($expenses->expense) }}</td>
                                    <td>R {{ $expenses->monthly ? number_format($expenses->monthly, 2, ".", ",") : "0.00" }}</td>
                                    <td>R {{ $expenses->proposed ? number_format($expenses->proposed, 2, ".", ",") : "0.00" }}</td>
                                </tr>
                                <div class="display-none">
                                    {{ $counter++ }}
                                </div>
                            @endforeach
                            <div class="display-none">
                                {{ $counter = 1 }}
                            </div>
                        </table>
                    </div>
                    <div class="breaker"></div>
                    <span>Debts</span>
                    <div class="breaker"></div>
                    <div class="table-binder-norm-gray">
                        <table>
                            <tr>
                                <th>
                                    <span class="material-symbols-sharp">
                                    tag
                                    </span>
                                </th>
                                <th class="nowrap">Creditor</th>
                                <th class="nowrap">Account number</th>
                                <th>Outstanding</th>
                                <th>Instalment</th>
                            </tr>
                            <div class="display-none">
                                {{ $counter = 1 }}
                            </div>
                            @foreach(json_decode($case->debts) as $debts)
                                <tr>
                                    <td>{{ $counter }}</td>
                                    <td>{{ ucwords($debts->nameofcreditor) }}</td>
                                    <td>{{ ucwords($debts->accountnumber) }}</td>
                                    <td>R {{ $debts->outstanding ? number_format($debts->outstanding, 2, ".", ",") : "0.00" }}</td>
                                    <td>R {{ $debts->instalment ? number_format($debts->instalment, 2, ".", ",") : "0.00" }}</td>
                                </tr>
                                <div class="display-none">
                                    {{ $counter++ }}
                                </div>
                            @endforeach
                        </table>
                    </div>
                </div>
            @endif
            <div>
                <div class="upload-docs" style="width: 400px;"> 
                    <div class="display-flex-space-between">
                        <div class="display-flex-align">
                            <span class="material-symbols-sharp">
                            draft
                            </span>
                            <div>
                                <span>Upload ID</span><br>
                                <span>Not uploaded</span>
                            </div>
                        </div>
                        <div class="display-flex-align">
                                    <span class="gray-dark">|</span>
                                    <div class="text-align-center">
                                        <span class="material-symbols-sharp">
                                        open_in_new
                                        </span><br>
                                        <span>View</span>
                                    </div>
                                </div>
                    </div>
                    <div class="breaker"></div>
                    <div class="display-flex-space-between">
                        <div class="display-flex-align">
                            <span class="material-symbols-sharp">
                            draft
                            </span>
                            <div>
                                <span>Credit report</span><br>
                                <span>Not uploaded</span>
                            </div>
                        </div>
                        <div class="display-flex-align">
                                    <span class="gray-dark">|</span>
                                    <div class="text-align-center">
                                        <span class="material-symbols-sharp">
                                        open_in_new
                                        </span><br>
                                        <span>View</span>
                                    </div>
                                </div>
                    </div>
                    <div class="breaker"></div>
                    <div class="display-flex-space-between">
                        <div class="display-flex-align">
                            <span class="material-symbols-sharp">
                            draft
                            </span>
                            <div>
                                <span>Form 16</span><br>
                                <span>Not uploaded</span>
                            </div>
                        </div>
                        <div class="display-flex-align">
                                    <span class="gray-dark">|</span>
                                    <div class="text-align-center">
                                        <span class="material-symbols-sharp">
                                        open_in_new
                                        </span><br>
                                        <span>View</span>
                                    </div>
                                </div>
                    </div>
                    <div class="breaker"></div>
                    <div class="display-flex-space-between">
                        <div class="display-flex-align">
                            <span class="material-symbols-sharp">
                            draft
                            </span>
                            <div>
                                <span>Payslip</span><br>
                                <span>Not uploaded</span>
                            </div>
                        </div>
                        <div class="display-flex-align">
                                    <span class="gray-dark">|</span>
                                    <div class="text-align-center">
                                        <span class="material-symbols-sharp">
                                        open_in_new
                                        </span><br>
                                        <span>View</span>
                                    </div>
                                </div>
                    </div>
                    <div class="breaker"></div>
                    <div class="display-flex-space-between">
                        <div class="display-flex-align">
                            <span class="material-symbols-sharp">
                            draft
                            </span>
                            <div>
                                <span>Bank statement</span><br>
                                <span>Not uploaded</span>
                            </div>
                        </div>
                        <div class="display-flex-align">
                                    <span class="gray-dark">|</span>
                                    <div class="text-align-center">
                                        <span class="material-symbols-sharp">
                                        open_in_new
                                        </span><br>
                                        <span>View</span>
                                    </div>
                                </div>
                    </div>
                    <div class="breaker"></div>
                    <div class="display-flex-space-between">
                        <div class="display-flex-align">
                            <span class="material-symbols-sharp">
                            draft
                            </span>
                            <div>
                                <span>Form 17.1</span><br>
                                <span>Not uploaded</span>
                            </div>
                        </div>
                        <div class="display-flex-align">
                                    <span class="gray-dark">|</span>
                                    <div class="text-align-center">
                                        <span class="material-symbols-sharp">
                                        open_in_new
                                        </span><br>
                                        <span>View</span>
                                    </div>
                                </div>
                    </div>
                    <div class="breaker"></div>
                    <div class="display-flex-space-between">
                        <div class="display-flex-align">
                            <span class="material-symbols-sharp">
                            draft
                            </span>
                            <div>
                                <span>Certificate of balance</span><br>
                                <span>Not uploaded</span>
                            </div>
                        </div>
                        <div class="display-flex-align">
                                    <span class="gray-dark">|</span>
                                    <div class="text-align-center">
                                        <span class="material-symbols-sharp">
                                        open_in_new
                                        </span><br>
                                        <span>View</span>
                                    </div>
                                </div>
                    </div>
                    <div class="breaker"></div>
                    <div class="display-flex-space-between">
                        <div class="display-flex-align">
                            <span class="material-symbols-sharp">
                            draft
                            </span>
                            <div>
                                <span>Form 17.2</span><br>
                                <span>Not uploaded</span>
                            </div>
                        </div>
                        <div class="display-flex-align">
                                    <span class="gray-dark">|</span>
                                    <div class="text-align-center">
                                        <span class="material-symbols-sharp">
                                        open_in_new
                                        </span><br>
                                        <span>View</span>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>