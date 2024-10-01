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
                <span class="nowrap">Records - {{ $agents->count() }}</span>
            </div>
            <div class="display-flex-align cursor-pointer">
                <span class="material-symbols-sharp">
                tune
                </span>
                <span class="nowrap">Filter</span>
            </div>
            <span class="gray-dark">|</span>
            <div class="text-align-center cursor-pointer" onclick="redirect('/new_agent_form')">
                <span class="material-symbols-sharp">
                add
                </span><br>
                <span>Add <br> agent</span>
            </div>
        </div>
    </div>
    <div class="table-binder">
        <table>
            <tr>
                <th>
                    <span class="material-symbols-sharp">
                    tag
                    </span>
                </th>
                <th class="nowrap">Agent's ID</th>
                <th class="nowrap">Agent's name</th>
                <th class="nowrap">Agent's extension</th>
                <th class="nowrap">Agent's mobile</th>
                <th class="nowrap">Agent's email</th>
                <th>Branch</th>
                <th class="gray">Signed clients</th>
                <th class="gray">Paid clients</th>
                <th class="gray">Unpaid clients</th>
            </tr>
            @foreach($agents as $agent)
                <tr>
                    <td>{{ $agent->id }}</td>
                    <td>{{ $agent->id_number }}</td>
                    <td>{{ ucwords($agent->first_name. " ".$agent->last_name) }}</td>
                    <td>{{ $agent->extension }}</td>
                    <td>{{ $agent->mobile }}</td>
                    <td>
                        <div class="display-flex-align" style="gap: 0;">
                            <span>{{ $agent->first_name.".".$agent->last_name }}</span>
                            <span class="material-symbols-sharp">
                            alternate_email
                            </span>
                            <span>thehelpinghanddebt.co.za</span>
                        </div>
                    </td>
                    <td>{{ ucwords($agent->branch) }}</td>
                    <td class="gray">{{ $cases->where("agent_id", $agent->id)->count() }}</td>
                    <td class="gray">{{ $cases->where("agent_id", $agent->id)->where("paid", true)->count() }}</td>
                    <td class="gray">{{ $cases->where("agent_id", $agent->id)->where("paid", false)->count() }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>