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
                <span class="nowrap">Records - {{ $comps->count() }}</span>
            </div>
            <div>
                <span class="nowrap">Total commission - R {{ number_format(DB::table("compensations")->sum("commission"), 2, ".", ",")  }}</span>
            </div>
            <div class="display-flex-align cursor-pointer">
                <span class="material-symbols-sharp">
                tune
                </span>
                <span class="nowrap">Filter</span>
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
                <th>Commission</th>
            </tr>
            @foreach($comps as $comp)
                <div class="display-none">
                    {{ $agent = $agentsClass::find($comp->agent_id) }}
                </div>
                <tr>
                    <td>{{ $comp->id }}</td>
                    <td>{{ $agent->id_number }}</td>
                    <td>{{ ucwords($agent->first_name. " ".$agent->last_name) }}</td>
                    <td>R {{ number_format($comp->commission, 2, ".", ",") }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>