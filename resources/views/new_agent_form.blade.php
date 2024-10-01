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
        <div class="display-flex-space-between">
            <div class="display-flex-align">
                <div class="action-icon-light" onclick="redirect('/agents')">
                    <span class="material-symbols-sharp">
                    west
                    </span>
                </div>
                <span>Agent's information sheet</span>
            </div>
            <div class="text-align-center cursor-pointer" onclick="submitForm('newagentuploadform')">
                <span class="material-symbols-sharp">
                cloud_upload
                </span><br>
                <span>Submit <br> agent</span>
            </div>
        </div>
        <div class="breaker"></div>
        <div class="breaker-dotted-feint"></div>
        <div class="breaker"></div>
        <form id="newagentuploadform" action="/new_agent_upload" method="POST">
            @csrf
            @method("POST")
            <div class="display-flex-space-between-top mid-gap">
                <div class="w-100">
                    <div>
                        <span class="nowrap">Agent's ID number - </span><br>
                        <div class="breaker"></div>
                        <div class="input-container">
                            <input type="text" name="idnumber" autocomplete="off" placeholder="Enter agent's ID number">
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap">Agent's first name - </span><br>
                        <div class="breaker"></div>
                        <div class="input-container">
                            <input type="text" name="firstname" autocomplete="off" placeholder="Enter agent's first name">
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap">Agent's last name - </span><br>
                        <div class="breaker"></div>
                        <div class="input-container">
                            <input type="text" name="lastname" autocomplete="off" placeholder="Enter agent's last name">
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap">Agent's extension - </span><br>
                        <div class="breaker"></div>
                        <div class="input-container">
                            <input type="text" name="extension" autocomplete="off" placeholder="Enter agent's extension">
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <div>
                        <span class="nowrap">Agent's mobile - </span><br>
                        <div class="breaker"></div>
                        <div class="input-container">
                            <input type="text" name="mobile" autocomplete="off" placeholder="Enter agent's mobile">
                        </div>
                    </div>
                </div>
                <div class="w-100">
                    <span>Branch -</span>
                    <div class="breaker"></div>
                    <div class="display-flex-align mid-gap">
                        <input type="text" name="branch" class="display-none" id="branch">
                        <div class="display-flex-align cursor-pointer" onclick="selectBranch('giyanibranch')">
                            <span class="material-symbols-sharp branch" id="giyanibranch">
                            check_box_outline_blank
                            </span>
                            <span>Giyani</span>
                        </div>
                        <div class="display-flex-align cursor-pointer" onclick="selectBranch('polokwanebranch')">
                            <span class="material-symbols-sharp branch" id="polokwanebranch">
                            check_box_outline_blank
                            </span>
                            <span>Polokwane</span>
                        </div>
                        <div class="display-flex-align cursor-pointer" onclick="selectBranch('johannesburgbranch')">
                            <span class="material-symbols-sharp branch" id="johannesburgbranch">
                            check_box_outline_blank
                            </span>
                            <span>Johannesburg</span>
                        </div>
                        <div class="display-flex-align cursor-pointer" onclick="selectBranch('bloemfonteinbranch')">
                            <span class="material-symbols-sharp branch" id="bloemfonteinbranch">
                            check_box_outline_blank
                            </span>
                            <span>Bloemfontein</span>
                        </div>
                    </div>
                    <div class="breaker"></div>
                    <span>Documents -</span>
                    <div class="breaker"></div>
                    <div class="upload-docs"> 
                        <div class="display-flex-space-between">
                            <div class="display-flex-align">
                                <span class="material-symbols-sharp">
                                draft
                                </span>
                                <div>
                                    <span>Agent's ID document</span><br>
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
                        <div class="display-flex-space-between">
                            <div class="display-flex-align">
                                <span class="material-symbols-sharp">
                                draft
                                </span>
                                <div>
                                    <span>Agent's personal information sheet</span><br>
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
                <script>
                    function selectBranch(branchId){

                        const branches = {
                            "giyanibranch": "giyani",
                            "polokwanebranch": "polokwane",
                            "johannesburgbranch": "johannesburg",
                            "bloemfonteinbranch": "bloemfontein"
                        }

                        document.querySelectorAll(".branch").forEach((item, index) => {
                            item.innerHTML = "check_box_outline_blank";
                        });

                        document.querySelector("#" + branchId).innerHTML = "check_box";
                        document.querySelector("#branch").value = branches[branchId];
                    }
                    
                </script>
            </div>
        </form>
    </div>
</body>
</html>