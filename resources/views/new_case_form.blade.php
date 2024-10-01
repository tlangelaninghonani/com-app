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
        <div id="dependentspopup" class="popup display-none">
            <div class="display-flex-space-between">
                <span>Dependents</span>
                <div class="action-icon-light" onclick="popup('dependentspopup', 'none')">
                    <span class="material-symbols-sharp">
                    close
                    </span>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="breaker-dotted-feint"></div>
            <div class="breaker"></div>
            <div>
                <span class="nowrap">Full name - </span><br>
                <div class="breaker"></div>
                <div class="input-container">
                    <input type="text" id="dependentfullname" autocomplete="off" placeholder="Enter full name">
                </div>
            </div>
            <div class="breaker"></div>
            <div>
                <span class="nowrap">Age - </span><br>
                <div class="breaker"></div>
                <div class="input-container">
                    <input type="text" id="dependentage" autocomplete="off" placeholder="Enter age">
                </div>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-align mid-gap" style=" flex-wrap: wrap;">
                <input type="text" id="dependentrelationship" class="display-none">
                <div class="display-flex-align cursor-pointer" onclick="selectDependentRelationship('parent')">
                    <span class="material-symbols-sharp dependent-relationship" id="relationshipparent">
                    check_box_outline_blank
                    </span>
                    <span>Parent</span>
                </div>
                <div class="display-flex-align cursor-pointer" onclick="selectDependentRelationship('child')">
                    <span class="material-symbols-sharp dependent-relationship" id="relationshipchild">
                    check_box_outline_blank
                    </span>
                    <span>Child</span>
                </div>
                <div class="display-flex-align cursor-pointer" onclick="selectDependentRelationship('sibling')">
                    <span class="material-symbols-sharp dependent-relationship" id="relationshipsibling">
                    check_box_outline_blank
                    </span>
                    <span>Sibling</span>
                </div>
                <div class="display-flex-align cursor-pointer" onclick="selectDependentRelationship('relative')">
                    <span class="material-symbols-sharp dependent-relationship" id="relationshiprelative">
                    check_box_outline_blank
                    </span>
                    <span>Relative</span>
                </div>
            </div>
            <div class="breaker"></div>
            <div>
                <span class="nowrap">ID number - </span><br>
                <div class="breaker"></div>
                <div class="input-container">
                    <input type="text" id="dependentidnumber" autocomplete="off" placeholder="Enter ID number">
                </div>
            </div>
            <div class="breaker"></div>
            <button class="button-100" onclick="addDependent()">
                <span>Add</span>
            </button>
        </div>
        <div id="incomepopup" class="popup display-none">
            <div class="display-flex-space-between">
                <span>Income</span>
                <div class="action-icon-light" onclick="popup('incomepopup', 'none')">
                    <span class="material-symbols-sharp">
                    close
                    </span>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="breaker-dotted-feint"></div>
            <div class="breaker"></div>
            <div>
                <span class="nowrap">Income - </span><br>
                <div class="breaker"></div>
                <div class="input-container">
                    <input type="text" id="income" autocomplete="off" placeholder="Enter income">
                </div>
            </div>
            <div class="breaker"></div>
            <div class="display-flex-align mid-gap" style=" flex-wrap: wrap;">
                <input type="text" id="incomecategory" class="display-none">
                <div class="display-flex-align cursor-pointer" onclick="selectIncomeCategory('category1')">
                    <span class="material-symbols-sharp income-category" id="incomecategory1">
                    check_box_outline_blank
                    </span>
                    <span>Category 1</span>
                </div>
                <div class="display-flex-align cursor-pointer" onclick="selectIncomeCategory('category2')">
                    <span class="material-symbols-sharp income-category" id="incomecategory2">
                    check_box_outline_blank
                    </span>
                    <span>Category 2</span>
                </div>
                <div class="display-flex-align cursor-pointer" onclick="selectIncomeCategory('category3')">
                    <span class="material-symbols-sharp income-category" id="incomecategory3">
                    check_box_outline_blank
                    </span>
                    <span>Category 3</span>
                </div>
                <div class="display-flex-align cursor-pointer" onclick="selectIncomeCategory('category4')">
                    <span class="material-symbols-sharp income-category" id="incomecategory4">
                    check_box_outline_blank
                    </span>
                    <span>Category 4</span>
                </div>
            </div>
            <div class="breaker"></div>
            <div>
                <span class="nowrap">Curent - </span><br>
                <div class="breaker"></div>
                <div class="input-container">
                    <input type="text" id="incomecurrent" autocomplete="off" placeholder="Enter current">
                </div>
            </div>
            <div class="breaker"></div>
            <div>
                <span class="nowrap">Proposed - </span><br>
                <div class="breaker"></div>
                <div class="input-container">
                    <input type="text" id="incomeproposed" autocomplete="off" placeholder="Enter proposed">
                </div>
            </div>
            <div class="breaker"></div>
            <button class="button-100" onclick="addIncome()">
                <span>Add</span>
            </button>
        </div>
        <div id="expensespopup" class="popup display-none">
            <div class="display-flex-space-between">
                <span>Expenses</span>
                <div class="action-icon-light" onclick="popup('expensespopup', 'none')">
                    <span class="material-symbols-sharp">
                    close
                    </span>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="breaker-dotted-feint"></div>
            <div class="breaker"></div>
            <div>
                <span class="nowrap">Expense name - </span><br>
                <div class="breaker"></div>
                <div class="input-container">
                    <input type="text" id="expense" autocomplete="off" placeholder="Enter expense name">
                </div>
            </div>
            <div class="breaker"></div>
            <div>
                <span class="nowrap">Monthly expense - </span><br>
                <div class="breaker"></div>
                <div class="input-container">
                    <input type="text" id="expensemonthly" autocomplete="off" placeholder="Enter monthly expense">
                </div>
            </div>
            <div class="breaker"></div>
            <div>
                <span class="nowrap">Proposed expense - </span><br>
                <div class="breaker"></div>
                <div class="input-container">
                    <input type="text" id="expenseproposed" autocomplete="off" placeholder="Enter proposed expense">
                </div>
            </div>
            <div class="breaker"></div>
            <button class="button-100" onclick="addExpense()">
                <span>Add</span>
            </button>
        </div>
        <div id="debtspopup" class="popup display-none">
            <div class="display-flex-space-between">
                <span>Expenses</span>
                <div class="action-icon-light" onclick="popup('debtspopup', 'none')">
                    <span class="material-symbols-sharp">
                    close
                    </span>
                </div>
            </div>
            <div class="breaker"></div>
            <div class="breaker-dotted-feint"></div>
            <div class="breaker"></div>
            <div>
                <span class="nowrap">Name of creditor - </span><br>
                <div class="breaker"></div>
                <div class="input-container">
                    <input type="text" id="nameofcreditor" autocomplete="off" placeholder="Enter name of creditor">
                </div>
            </div>
            <div class="breaker"></div>
            <div>
                <span class="nowrap">Account number - </span><br>
                <div class="breaker"></div>
                <div class="input-container">
                    <input type="text" id="debtaccountnumber" autocomplete="off" placeholder="Enter account number">
                </div>
            </div>
            <div class="breaker"></div>
            <div>
                <span class="nowrap">Outstanding - </span><br>
                <div class="breaker"></div>
                <div class="input-container">
                    <input type="text" id="debtoutstanding" autocomplete="off" placeholder="Enter outstanding">
                </div>
            </div>
            <div class="breaker"></div>
            <div>
                <span class="nowrap">Installment - </span><br>
                <div class="breaker"></div>
                <div class="input-container">
                    <input type="text" id="debtinstalment" autocomplete="off" placeholder="Enter installment">
                </div>
            </div>
            <div class="breaker"></div>
            <button class="button-100" onclick="addDebt()">
                <span>Add</span>
            </button>
        </div>
    </div>
    @include("components.header")
    <div class="container">
    <div class="display-flex-space-between">
            <div class="display-flex-align mid-gap">
                <div class="action-icon-light" onclick="redirect('/cases')">
                    <span class="material-symbols-sharp">
                    west
                    </span>
                </div>
                <span>Form 16</span>
            </div>
            <!-- <button onclick="submitForm('newcaseuploadform')">
                <span>Submit</span>
            </button> -->
            <div class="text-align-center cursor-pointer" onclick="submitForm16('newcaseuploadform')">
                <span class="material-symbols-sharp">
                cloud_upload
                </span><br>
                <span>Submit <br> case</span>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="breaker-dotted-feint"></div>
        <div class="breaker"></div>
        <form id="newcaseuploadform" action="/new_case_upload" method="POST">
            <input type="text" class="display-none" name="dependents" id="dependentsdata">
            <input type="text" class="display-none" name="income" id="incomedata">
            <input type="text" class="display-none" name="expenses" id="expensesdata">
            <input type="text" class="display-none" name="debts" id="debtsdata">
            @csrf
            @method("POST")
            <div class="display-flex-space-between-top mid-gap">
                <div class="w-100">
                    <div>
                        <span class="nowrap">Application type - </span><br>
                        <div class="breaker"></div>
                        <div class="display-flex-align mid-gap" style=" flex-wrap: wrap;">
                            <input type="text" name="applicationtype" class="display-none" id="applicationtype">
                            <div class="display-flex-align cursor-pointer" onclick="selectApplicationType('single')">
                                <span class="material-symbols-sharp application-type" id="single">
                                check_box_outline_blank
                                </span>
                                <span>Single</span>
                            </div>
                            <div class="display-flex-align cursor-pointer" onclick="selectApplicationType('joint')">
                                <span class="material-symbols-sharp application-type" id="joint">
                                check_box_outline_blank
                                </span>
                                <span>Joint</span>
                            </div>
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap">ID number or passport number - </span><br>
                        <div class="breaker"></div>
                        <div class="input-container">
                            <input type="text" name="idnumber" autocomplete="off" placeholder="Enter ID number or passport number">
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap">Title - </span><br>
                        <div class="breaker"></div>
                        <div class="input-container">
                            <input type="text" name="title" autocomplete="off" placeholder="Enter title">
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap">First name - </span><br>
                        <div class="breaker"></div>
                        <div class="input-container">
                            <input type="text" name="firstname" autocomplete="off" placeholder="Enter first name">
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap">Last name - </span><br>
                        <div class="breaker"></div>
                        <div class="input-container">
                            <input type="text" name="lastname" autocomplete="off" placeholder="Enter last name">
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap">Marital status - </span><br>
                        <div class="breaker"></div>
                        <div class="display-flex-align mid-gap" style=" flex-wrap: wrap;">
                            <input type="text" name="maritalstatus" class="display-none" id="maritalstatus">
                            <div class="display-flex-align cursor-pointer" onclick="selectMarital('single')">
                                <span class="material-symbols-sharp marital" id="maritalsingle">
                                check_box_outline_blank
                                </span>
                                <span>Single</span>
                            </div>
                            <div class="display-flex-align cursor-pointer" onclick="selectMarital('married')">
                                <span class="material-symbols-sharp marital" id="maritalmarried">
                                check_box_outline_blank
                                </span>
                                <span>Married</span>
                            </div>
                            <div class="display-flex-align cursor-pointer" onclick="selectMarital('divorced')">
                                <span class="material-symbols-sharp marital" id="maritaldivorced">
                                check_box_outline_blank
                                </span>
                                <span>Divorced</span>
                            </div>
                            <div class="display-flex-align cursor-pointer" onclick="selectMarital('widow')">
                                <span class="material-symbols-sharp marital" id="maritalwidow">
                                check_box_outline_blank
                                </span>
                                <span>Widow</span>
                            </div>
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <span>Physical address - </span>
                    <div class="breaker"></div>
                    <textarea name="physicaladdress" id="" placeholder="Enter physical address"></textarea>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap">Mobile 1 - </span><br>
                        <div class="breaker"></div>
                        <div class="input-container">
                            <input type="text" name="mobile1" autocomplete="off" placeholder="Enter mobile 1">
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap">Mobile 2 - </span><br>
                        <div class="breaker"></div>
                        <div class="input-container">
                            <input type="text" name="mobile2" autocomplete="off" placeholder="Enter mobile 2">
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap">Email address - </span><br>
                        <div class="breaker"></div>
                        <div class="display-flex-align">
                            <div class="input-container">
                                <input type="text" name="emailusername" autocomplete="off" placeholder="Enter email username">
                            </div>
                            <span class="material-symbols-sharp">
                            alternate_email
                            </span>
                            <div class="input-container">
                                <input type="text" name="emailserver" autocomplete="off" placeholder="Enter email server">
                            </div>
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap">Name of employer - </span><br>
                        <div class="breaker"></div>
                        <div class="input-container">
                            <input type="text" name="employer" autocomplete="off" placeholder="Enter name of employer">
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <span>Employer's address - </span>
                    <div class="breaker"></div>
                    <textarea name="employeraddress" id="" placeholder="Enter employer's address"></textarea>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap">Bank - </span><br>
                        <div class="breaker"></div>
                        <div class="input-container">
                            <input type="text" name="bank" autocomplete="off" placeholder="Enter bank">
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap">Account type - </span><br>
                        <div class="breaker"></div>
                        <div class="input-container">
                            <input type="text" name="accounttype" autocomplete="off" placeholder="Enter account type">
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap">Account number - </span><br>
                        <div class="breaker"></div>
                        <div class="input-container">
                            <input type="text" name="accountnumber" autocomplete="off" placeholder="Enter account number">
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap">Branch code - </span><br>
                        <div class="breaker"></div>
                        <div class="input-container">
                            <input type="text" name="branchcode" autocomplete="off" placeholder="Enter branch code">
                        </div>
                    </div>
                </div>
                <div class="w-100">
                    <div>
                        <div class="display-flex-space-between">
                            <span>Dependents -</span>
                            <div class="display-flex-align  cursor-pointer" onclick="popup('dependentspopup', 'block')">
                                <span class="material-symbols-sharp">
                                add
                                </span>
                                <span>Add dependent</span>
                            </div>
                        </div>
                        <div class="breaker"></div>
                        <div class="table-binder-norm-gray">
                            <table id="dependentstable">
                                <tr>
                                    <th>
                                        <span class="material-symbols-sharp">
                                        tag
                                        </span>
                                    </th>
                                    <th class="nowrap">Names</th>
                                    <th class="nowrap">Age</th>
                                    <th>Relationship</th>
                                    <th>ID</th>
                                </tr>
                            </table>
                        </div>
                        <div class="breaker"></div>
                        <div class="display-flex-space-between">
                            <span>Income -</span>
                            <div class="display-flex-align  cursor-pointer" onclick="popup('incomepopup', 'block')">
                                <span class="material-symbols-sharp">
                                add
                                </span>
                                <span>Add income</span>
                            </div>
                        </div>
                        <div class="breaker"></div>
                        <div class="table-binder-norm-gray">
                            <table id="incometable">
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
                            </table>
                        </div>
                        <div class="breaker"></div>
                        <div class="display-flex-space-between">
                            <span>Monthly commitments -</span>
                            <div class="display-flex-align  cursor-pointer" onclick="popup('expensespopup', 'block')">
                                <span class="material-symbols-sharp">
                                add
                                </span>
                                <span>Add expense</span>
                            </div>
                        </div>
                        <div class="breaker"></div>
                        <div class="table-binder-norm-gray">
                            <table id="expensetable">
                                <tr>
                                    <th>
                                        <span class="material-symbols-sharp">
                                        tag
                                        </span>
                                    </th>
                                    <th class="nowrap">Expense name</th>
                                    <th class="nowrap">Monthly expense</th>
                                    <th>Proposed expense</th>
                                </tr>
                            </table>
                        </div>
                        <div class="breaker"></div>
                        <div class="display-flex-space-between">
                            <span>Debt obligations -</span>
                            <div class="display-flex-align  cursor-pointer" onclick="popup('debtspopup', 'block')">
                                <span class="material-symbols-sharp">
                                add
                                </span>
                                <span>Add debt</span>
                            </div>
                        </div>
                        <div class="breaker"></div>
                        <div class="table-binder-norm-gray">
                            <table id="debtstable">
                                <tr>
                                    <th>
                                        <span class="material-symbols-sharp">
                                        tag
                                        </span>
                                    </th>
                                    <th class="nowrap">Name of creditor</th>
                                    <th class="nowrap">Account number</th>
                                    <th>Outstanding</th>
                                    <th>Installment</th>
                                </tr>
                            </table>
                        </div>
                        <div class="breaker"></div>
                        <span>Product</span>
                        <div class="breaker"></div>
                        <div class="display-flex-align mid-gap" style=" flex-wrap: wrap;">
                            <input type="text" name="product" class="display-none" id="product">
                            <div class="display-flex-align cursor-pointer" onclick="selectProduct('review')">
                                <span class="material-symbols-sharp product" id="review">
                                check_box_outline_blank
                                </span>
                                <span>Review</span>
                            </div>
                            <div class="display-flex-align cursor-pointer" onclick="selectProduct('score')">
                                <span class="material-symbols-sharp product" id="score">
                                check_box_outline_blank
                                </span>
                                <span>Score update</span>
                            </div>
                            <div class="display-flex-align cursor-pointer" onclick="selectProduct('removal')">
                                <span class="material-symbols-sharp product" id="removal">
                                check_box_outline_blank
                                </span>
                                <span>Removal</span>
                            </div>
                            <div class="display-flex-align cursor-pointer" onclick="selectProduct('transfer')">
                                <span class="material-symbols-sharp product" id="transfer">
                                check_box_outline_blank
                                </span>
                                <span>Transfer</span>
                            </div>
                        </div>
                        <div class="breaker"></div>
                        <span class="nowrap">Attending agent</span><br>
                        <input id="attendingagentid" type="text" value="Hello" name="attendingagentid" class="display-none">
                        <div class="breaker"></div>
                        <div class="input-container">
                            <input type="text" name="agentid" autocomplete="off" placeholder="Search agent" onkeyup="searchAgent(this.value)">
                        </div>
                        <div class="breaker"></div>
                        <div class="content-auto-width">
                            <div class="top-agents">
                                @foreach($agents as $agent)
                                    @if($cases->where("agent_id", $agent->id)->count() >= 3)
                                        <div class="top-agent-binder-cont cursor-pointer" id="{{ $agent->id_number.$agent->first_name.$agent->last_name }}" onclick="selectAgent('{{ $agent->id }}')">
                                            <div class="ext" id="ext{{ $agent->id }}">
                                                <span class="material-symbols-sharp">
                                                done
                                                </span>
                                            </div>
                                            <div class="top-agent-binder">
                                                <div class="top-agent">
                                                    <span class="text-mid-norm">{{ strtoupper(substr($agent->first_name, 0, 1).substr($agent->last_name , 0, 1)) }}</span>
                                                </div>
                                                <div class="breaker"></div>
                                                <span>{{ ucwords($agent->first_name." ".$agent->last_name) }}</span>
                                            </div>
                                        </div>
                                    @else
                                        <div class="top-agent-binder-cont cursor-pointer display-none" id="{{ $agent->id_number.$agent->first_name.$agent->last_name }}" onclick="selectAgent('{{ $agent->id }}')">
                                            <div class="ext" id="ext{{ $agent->id }}">
                                                <span class="material-symbols-sharp">
                                                done
                                                </span>
                                            </div>
                                            <div class="top-agent-binder">
                                                <div class="top-agent">
                                                    <span class="text-mid-norm">{{ strtoupper(substr($agent->first_name, 0, 1).substr($agent->last_name , 0, 1)) }}</span>
                                                </div>
                                                <div class="breaker"></div>
                                                <span>{{ ucwords($agent->first_name." ".$agent->last_name) }}</span>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100">
                    <div class="upload-docs"> 
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
                                    upload_file
                                    </span><br>
                                    <span>Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="breaker"></div>
                        <div class="breaker-dotted-feint"></div>
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
                                    upload_file
                                    </span><br>
                                    <span>Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="breaker"></div>
                        <div class="breaker-dotted-feint"></div>
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
                                    upload_file
                                    </span><br>
                                    <span>Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="breaker"></div>
                        <div class="breaker-dotted-feint"></div>
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
                                    upload_file
                                    </span><br>
                                    <span>Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="breaker"></div>
                        <div class="breaker-dotted-feint"></div>
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
                                    upload_file
                                    </span><br>
                                    <span>Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="breaker"></div>
                        <div class="breaker-dotted-feint"></div>
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
                                    upload_file
                                    </span><br>
                                    <span>Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="breaker"></div>
                        <div class="breaker-dotted-feint"></div>
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
                                    upload_file
                                    </span><br>
                                    <span>Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="breaker"></div>
                        <div class="breaker-dotted-feint"></div>
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
                                    upload_file
                                    </span><br>
                                    <span>Upload</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>

        dependents = [];
        dependentsCount = 1;

        function addDependent(){

            data = {
                "fullname": document.querySelector("#dependentfullname").value,
                "age": document.querySelector("#dependentage").value,
                "relationship": document.querySelector("#dependentrelationship").value,
                "idnumber": document.querySelector("#dependentidnumber").value,
            };   


            dependents.push(data);

            const table = document.querySelector("#dependentstable");
            const tr = document.createElement("tr");

            let tdCount = document.createElement("td");
            let td1 = document.createElement("td");
            let td2 = document.createElement("td");
            let td3 = document.createElement("td");
            let td4 = document.createElement("td");

            tdCount.innerHTML = dependentsCount; 
            td1.innerHTML = data.fullname;
            td2.innerHTML = data.age;
            td3.innerHTML = data.relationship;
            td4.innerHTML = data.idnumber;

            tr.appendChild(tdCount);
            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);

            table.appendChild(tr);
            
            dependentsCount++;

            popup('dependentspopup', 'none')

            console.log(dependents);
        }

        function selectDependentRelationship(relationship){

            document.querySelectorAll(".dependent-relationship").forEach((item, index) => {

                item.innerHTML = "check_box_outline_blank";
            });

            document.querySelector("#relationship" + relationship).innerHTML = "check_box";

            document.querySelector("#dependentrelationship").value = relationship;
        }

        income = [];
        incomeCount = 1;

        function addIncome(){

            data = {
                "income": document.querySelector("#income").value,
                "category": document.querySelector("#incomecategory").value,
                "current": document.querySelector("#incomecurrent").value,
                "proposed": document.querySelector("#incomeproposed").value,
            };   

            income.push(data);

            const table = document.querySelector("#incometable");
            const tr = document.createElement("tr");

            let tdCount = document.createElement("td");
            let td1 = document.createElement("td");
            let td2 = document.createElement("td");
            let td3 = document.createElement("td");
            let td4 = document.createElement("td");

            tdCount.innerHTML = incomeCount; 
            td1.innerHTML = data.income;
            td2.innerHTML = data.category;
            td3.innerHTML = data.current;
            td4.innerHTML = data.proposed;

            tr.appendChild(tdCount);
            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);

            table.appendChild(tr);

            incomeCount++;

            popup('incomepopup', 'none')
        }

        function selectIncomeCategory(category){

            document.querySelectorAll(".income-category").forEach((item, index) => {

                item.innerHTML = "check_box_outline_blank";
            });

            document.querySelector("#income" + category).innerHTML = "check_box";

            document.querySelector("#incomecategory").value = category;
        }

        expenses = [];
        expenseCount = 1;

        function addExpense(){

            data = {
                "expense": document.querySelector("#expense").value,
                "monthly": document.querySelector("#expensemonthly").value,
                "proposed": document.querySelector("#expenseproposed").value,
            };   

            expenses.push(data);

            const table = document.querySelector("#expensetable");
            const tr = document.createElement("tr");

            let tdCount = document.createElement("td");
            let td1 = document.createElement("td");
            let td2 = document.createElement("td");
            let td3 = document.createElement("td");

            tdCount.innerHTML = expenseCount; 
            td1.innerHTML = data.expense;
            td2.innerHTML = data.monthly;
            td3.innerHTML = data.proposed;

            tr.appendChild(tdCount);
            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);

            table.appendChild(tr);

            expenseCount++;

            popup('expensespopup', 'none')
        }

        debts = [];
        debtCount = 1;

        function addDebt(){

            data = {
                "nameofcreditor": document.querySelector("#nameofcreditor").value,
                "accountnumber": document.querySelector("#debtaccountnumber").value,
                "outstanding": document.querySelector("#debtoutstanding").value,
                "instalment": document.querySelector("#debtinstalment").value,
            };   

            debts.push(data);

            const table = document.querySelector("#debtstable");
            const tr = document.createElement("tr");

            let tdCount = document.createElement("td");
            let td1 = document.createElement("td");
            let td2 = document.createElement("td");
            let td3 = document.createElement("td");
            let td4 = document.createElement("td");

            tdCount.innerHTML = debtCount; 
            td1.innerHTML = data.nameofcreditor;
            td2.innerHTML = data.accountnumber;
            td3.innerHTML = data.outstanding;
            td4.innerHTML = data.instalment;

            tr.appendChild(tdCount);
            tr.appendChild(td1);
            tr.appendChild(td2);
            tr.appendChild(td3);
            tr.appendChild(td4);

            table.appendChild(tr);

            debtCount++;

            popup('debtspopup', 'none')
        }

        function searchAgent(agentId){

        if(agentId === ""){

            return;
        }

        document.querySelectorAll(".top-agent-binder-cont").forEach((item, value) => {

            if(item.id.toLowerCase().includes(agentId.toLowerCase())){

                item.classList.remove("display-none");
                document.querySelector(".top-agents").prepend(item);

            }else{

                item.classList.add("display-none");
            }
        });
        }

        function selectAgent(agentId){

        document.querySelectorAll(".ext").forEach((item, index) => {

            item.style.display = "none";
        });

        document.querySelector("#ext" + agentId).style.display = "flex";

        document.querySelector("#attendingagentid").value = agentId;
        }

        function selectApplicationType(type){

            document.querySelectorAll(".application-type").forEach((item, index) => {
            item.innerHTML = "check_box_outline_blank";
            });

        document.querySelector("#" + type).innerHTML = "check_box";
        document.querySelector("#applicationtype").value = type;
        }

        function selectMarital(marital){

        document.querySelectorAll(".marital").forEach((item, index) => {
        item.innerHTML = "check_box_outline_blank";
        });

        document.querySelector("#marital" + marital).innerHTML = "check_box";
        document.querySelector("#maritalstatus").value = marital;
        }

        function selectProduct(product){

        document.querySelectorAll(".product").forEach((item, index) => {
        item.innerHTML = "check_box_outline_blank";
        });

        document.querySelector("#" + product).innerHTML = "check_box";
        document.querySelector("#product").value = product;
        }

        function submitForm16(formId){

            document.querySelector("#dependentsdata").value = JSON.stringify(dependents);
            document.querySelector("#incomedata").value = JSON.stringify(income);
            document.querySelector("#expensesdata").value = JSON.stringify(expenses);
            document.querySelector("#debtsdata").value = JSON.stringify(debts);

            document.querySelector("#"+formId).submit();
        }

    </script>
</body>
</html>