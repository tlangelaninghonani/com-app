<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ $links['CSS'] }}">
    <script src="{{ $links['JS'] }}"></script>
</head>
<body>
    @include("components.header")
    <div class="container">
        <div class="display-flex-align mid-gap">
            <div class="input-container w-100">
                <span class="material-symbols-sharp">
                search
                </span>
                <input type="text" name="email" autocomplete="off" placeholder="Search">
            </div>
            <div>
                <span class="nowrap">Records - {{ $cases->count() }}</span>
            </div>
            <div class="display-flex-align cursor-pointer">
                <span class="material-symbols-sharp">
                cloud_download
                </span>
                <span class="nowrap">Export</span>
            </div>
            <div class="display-flex-align cursor-pointer">
                <span class="material-symbols-sharp">
                tune
                </span>
                <span class="nowrap">Filter</span>
            </div> 
            <span class="gray-dark">|</span>
            <div class="text-align-center cursor-pointer" onclick="redirect('/new_case_form')">
                <span class="material-symbols-sharp">
                add
                </span><br>
                <span>Add <br> case</span>
            </div>
        </div>
    </div>
    <div class="table-binder">
        <table>
            <thead>
                <tr>
                    <th>
                        <span class="material-symbols-sharp">
                        tag
                        </span>
                    </th>
                    <th>Case number</th>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Full name</th>
                    <th>Mobile 1</th>
                    <th>Mobile 2</th>
                    <th>Type</th>
                    <th>Bank</th>
                    <th>Acc type</th>
                    <th>Acc number</th>
                    <th>Branch</th>
                    <th>Date signed</th>
                    <th>Product</th>
                    <th>Paid</th>
                    <th>Amount</th>
                    <!-- <th>Form 16</th>
                    <th>Form 17.1</th>
                    <th>Form 17.2</th> -->
                    <th class="gray">Agent's name</th>
                    <th class="gray">Agent's extension</th>
                    <th class="gray">Agent's mobile</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cases as $case)
                <form id="view_case_form_{{ $case->id }}" action="/view_case_form_{{ $case->id }}" method="POST">
                    @csrf
                    @method("POST")
                </form>
                    <div class="display-none">
                        {{ $agent = $agentsClass::find($case->agent_id) }}
                    </div>
                    <tr onclick="submitForm('view_case_form_{{ $case->id }}')">
                        <td>{{ $case->id }}</td>
                        <td>{{ $case->case_number }}</td>
                        <td>{{ $case->id_number }}</td>
                        <td>{{ ucwords($case->title) }}</td>
                        <td>{{ ucwords($case->first_name." ".$case->last_name) }}</td>
                        <td>{{ $case->mobile_1 }}</td>
                        <td>{{ $case->mobile_2 }}</td>
                        <td>{{ ucwords($case->application_type) }}</td>
                        <td>{{ ucwords($case->bank) }}</td>
                        <td>{{ ucwords($case->account_type) }}</td>
                        <td>{{ $case->account_number }}</td>
                        <td>{{ ucwords($case->branch) }}</td>
                        <td>{{ $case->date_signed }}</td>
                        <td>{{ ucwords($case->product) }}</td>
                        <td>{{ $case->paid ? "Yes" : "No" }}</td>
                        <td class="nowrap">R {{ number_format($case->paid_amount, 2, ".", ",") }}</td>
                        <!-- <td>{{ $case->form_16 }}</td>
                        <td>{{ $case->form_17_1 }}</td>
                        <td>{{ $case->form_17_2 }}</td> -->
                        <td class="gray">{{ ucwords($agent->first_name. " ".$agent->last_name) }}</td>
                        <td class="gray">{{ $agent->extension }}</td>
                        <td class="gray">{{ $agent->mobile }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>