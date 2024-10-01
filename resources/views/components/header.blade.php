<div class="header">
    @include("components.logo_white")
    @if(
        Route::getfacaderoot()->current()->uri == "insights" 
        || Route::getfacaderoot()->current()->uri == "cases"
        || Route::getfacaderoot()->current()->uri == "agents"
        || Route::getfacaderoot()->current()->uri == "compensation"
        || Route::getfacaderoot()->current()->uri == "panel"
        )
        <div class="display-flex-align mid-gap">
            @if(Route::getfacaderoot()->current()->uri == "insights")
                <div class="header-selected cursor-pointer header-item-selected" onclick="redirect('/insights')">
                    <span class="material-symbols-sharp">
                    query_stats
                    </span>
                    <span>Insights</span>
                </div>
            @else
                <div class="display-flex-align cursor-pointer header-item" onclick="redirect('/insights')">
                    <span class="material-symbols-sharp">
                    query_stats
                    </span>
                    <span>Insights</span>
                </div>
            @endif
            @if(Route::getfacaderoot()->current()->uri == "cases")
                <div class="header-selected cursor-pointer header-item-selected" onclick="redirect('/cases')">
                    <span class="material-symbols-sharp">
                    folder
                    </span>
                    <span>Cases</span>
                </div>
            @else
            <div class="display-flex-align cursor-pointer header-item" onclick="redirect('/cases')">
                <span class="material-symbols-sharp">
                folder
                </span>
                <span>Cases</span>
            </div>
            @endif
            @if(Route::getfacaderoot()->current()->uri == "agents")
                <div class="header-selected cursor-pointer header-item-selected" onclick="redirect('/agents')">
                <span class="material-symbols-sharp">
                groups_2
                </span>
                    <span>Agents</span>
                </div>
            @else
            <div class="display-flex-align cursor-pointer header-item" onclick="redirect('/agents')">
                <span class="material-symbols-sharp">
                groups_2
                </span>
            <span>Agents</span>
            </div>
            @endif
            @if(Route::getfacaderoot()->current()->uri == "compensation")
                <div class="header-selected cursor-pointer header-item-selected" onclick="redirect('/compensation')">
                <span class="material-symbols-sharp">
                database
                </span>
                    <span>Compensation</span>
                </div>
            @else
            <div class="display-flex-align cursor-pointer header-item" onclick="redirect('/compensation')">
                <span class="material-symbols-sharp">
                database
                </span>
                <span>Compensation</span>
            </div>
            @endif
            @if(Route::getfacaderoot()->current()->uri == "panel")
                <div class="header-selected cursor-pointer header-item-selected" onclick="redirect('/panel')">
                <span class="material-symbols-sharp">
                settings
                </span>
                    <span>Panel</span>
                </div>
            @else
            <div class="display-flex-align cursor-pointer header-item" onclick="redirect('/panel')">
                <span class="material-symbols-sharp">
                settings
                </span>
                <span>Panel</span>
            </div>
            @endif
        </div>
    @endif
    <div class="display-flex-align mid-gap">
        <div class="display-flex-align">
            <div>
                <span>{{ ucwords($user->role) }}</span><br>
            </div>
        </div>
        <span>|</span>
        <form id="authoutform" action="/auth_out" method="POST" class="display-none">
            @csrf
            @method("POST")
        </form>
        <span class="material-symbols-sharp cursor-pointer" onclick="submitForm('authoutform')">
        power_settings_new
        </span>
    </div>
</div>