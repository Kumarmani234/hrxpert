<div>
    <div class="row m-0">

       

        <div class="col-md-3 mb-4">
            <div style="background:white; border:1px solid grey; border-radius:5px; padding: 10px 0px;">
                <h4 class="m-0 pb-3 ps-4">Catalog Filters</h4>
                <p class="m-0 pb-2 ps-4 pt-2 catalogFilter activeCatalog" id="infTech" onclick="changeSideMenu('infTech')">Information Technology</p>
                <p class="m-0 pb-2 ps-4 pt-2 catalogFilter" id="standChanges" onclick="changeSideMenu('standChanges')">Standard Changes</p>
            </div>
        </div>


        <div id="informationTech" class="col-md-9 mb-4 showIt">
            <div class="row m-0" style="background:white; border:1px solid grey; border-radius:5px;">
                <div class="row m-0">
                    <div class="col-6">
                        <h4 class="mb-4 mt-4">Popular Items</h4>
                    </div>
                    <div class="col-6" style="text-align: right; margin: auto; font-size: 13px;">
                        <i class="fas fa-table catalogCardIcon activeCatalog" id="catCardView" onclick="changeView('catCardView')"></i>
                        <span style="border: 1px solid" class="me-3 ms-1"></span>
                        <i class="far fa-list-alt catalogCardIcon" id="catListView" onclick="changeView('catListView')"></i>
                    </div>
                </div>
                <section id="catalogCardView" class="showIt">
                    <div class="row m-0">
                        <div class="col-md-4 mb-4">
                            <div style="background:white;border:1px solid #d3d3d3;border-radius:5px; padding: 10px 15px;">
                                <p style="text-decoration:underline; font-size: 12px;"><b>Members to Distribution List</b></p>
                                <div class="row m-0 mb-5">
                                    <div class="col-5 p-0">
                                        <img src="https://snow.payg.in/89294c29871c7510279786a50cbb35b5.iix?t=medium" style="height:6em;">
                                    </div>
                                    <div class="col-7">
                                        <p style="cursor: pointer" wire:click="ItRequest">Add Members to Distribution List</p>
                                    </div>
                                    @if($ItRequestaceessDialog)
                                    <div class="modal" tabindex="-1" role="dialog" style="display: block;">
                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Request for IT Accessories</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <!-- <div>
                                                    <h5 style="padding: 20px;font-size: 15px;" class="modal-title"><b>Request for IT
                                                            Accessories</b></h5>
                                                    <button wire:click="closeItRequestaccess" type="button" class="close"
                                                        data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true" style="color: black;">×</span>
                                                    </button>

                                                </div> -->
                                                <div class="modal-body">
                                                    <div class="row m-0">
                                                        <div class="col-4 m-auto">
                                                            <img src="https://milvusrobotics.com/assets/careers/support.b904d83a.png" style="height:7em">
                                                        </div>
                                                        <div class="col-8 m-auto">
                                                            <p style="font-size:15px;">
                                                                Please use this catalogue item to raise new request for IT accessories
                                                                like Headset, Mouse, Keyboard, Monitor etc.</p>
                                                        </div>
                                                    </div>
                                                    <hr style="border: 1px solid #ccc;margin: 10px 0;">
                                                    <form wire:submit.prevent="submit">
                                                        <div class="row m-0">
                                                            <div class="row">
                                                                <div class="mb-3">
                                                                    <label for="cc_to" class="form-label">Request For</label>
                                                                    <input wire:model="cc_to" type="text" id="cc_to" class="form-control" readonly>
                                                                </div>
                                                                <div class="row m-0">
                                                                    <div class="mb-3 p-0">
                                                                        <button type="button" class="btn btn-outline-primary" wire:click="NamesSearch">
                                                                            <i class="fa fa-plus me-4"></i>
                                                                            Add
                                                                        </button>
                                                                    </div>
                                                                    <div class="row m-0 p-0">
                                                                        <p style="font-size: 12px;">
                                                                            <strong>Request: </strong>
                                                                            {{ implode(', ', array_unique($selectedPeopleNames)) }}
                                                                        </p>
                                                                    </div>
                                                                    @error('cc_to') <span class="text-danger"
                                                                        style="margin-left:20px">{{ $message }}</span> @enderror
                                                                </div>
                                                            </div>
                                                            @if($isNames)
                                                            <div style="border-radius:5px;background-color:grey;padding:8px;width:320px;margin-top:10px;">
                                                                <div class="input-group" style="margin-bottom: 10px;">
                                                                    <input wire:model="searchTerm"
                                                                        style="font-size: 10px;cursor: pointer; border-radius: 5px 0 0 5px;"
                                                                        type="text" class="form-control"
                                                                        placeholder="Search for Emp.Name or ID"
                                                                        aria-label="Search" aria-describedby="basic-addon1">
                                                                    <div class="input-group-append">
                                                                        <button wire:click="filter"
                                                                            style="border-radius: 0 5px 5px 0; background-color: #007BFF; color: #fff; border: none;"
                                                                            class="btn me-3" type="button">
                                                                            <i style="text-align: center;"
                                                                                class="fa fa-search"></i>
                                                                        </button>
                                                                        <button wire:click="closePeoples" type="button" style="margin-top: -7px;"
                                                                            class="close" data-dismiss="modal"
                                                                            aria-label="Close">
                                                                            <span aria-hidden="true"
                                                                                style="color: white; font-size: 24px; font-weight: 300">x</span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                @if ($peopleData->isEmpty())
                                                                <div class="container"
                                                                    style="text-align: center; color: white;font-size:12px;overflow-y:auto;max-height:300px">
                                                                    No People Found
                                                                </div>
                                                                @else
                                                                @foreach($peopleData as $people)
                                                                <div wire:model="cc_to"
                                                                    wire:click="selectPerson('{{ $people->emp_id }}')"
                                                                    class="container"
                                                                    style="cursor: pointer; background-color: darkgrey; padding: 5px; margin-bottom: 8px; width: 300px; border-radius: 5px;">
                                                                    <div class="row align-items-center">
                                                                        <div class="col-auto">
                                                                            <input type="checkbox" wire:model="selectedPeople"
                                                                                value="{{ $people->emp_id }}"
                                                                                wire:click="selectPerson({{ $people->emp_id }})">
                                                                        </div>

                                                                        <div class="col">
                                                                            <h6 class="username"
                                                                                style="font-size: 12px; color: white;">
                                                                                {{ $people->first_name }}
                                                                                {{ $people->last_name }}</h6>
                                                                            <p class="mb-0"
                                                                                style="font-size: 12px; color: white;">
                                                                                (#{{ $people->emp_id }})</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                                @endif
                                                            </div>
                                                            @endif
                                                        </div>

                                                        <div class="form-group mt-2">
                                                            <label for="selectedEquipment">Select Equipment</label>
                                                            <select wire:model="selected_equipment" class="form-control">
                                                                <option value="keyboard">Keyboard</option>
                                                                <option value="mouse">Mouse</option>
                                                                <option value="headset">Headset</option>
                                                                <option value="monitor">Monitor</option>
                                                            </select>

                                                            @error('selected_equipment')
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>


                                                        <div class="form-group mt-2">
                                                            <label for="contactDetails">Business Justification</label>
                                                            <input wire:model="subject" type="text" class="form-control">
                                                            @error('subject') <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mt-2">
                                                            <label for="reason">Specific Information</label>
                                                            <textarea wire:model="description" class="form-control"></textarea>
                                                            @error('description') <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="row m-0">
                                                            <label for="fileInput" style="cursor: pointer;">
                                                                <i class="fa fa-paperclip"></i> Attach Image
                                                            </label>
                                                            @error('file_path') <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="row m-0">
                                                            <input class="form-control" wire:model="image" type="file" accept="image/*">
                                                            @if ($image)
                                                            <div class="row m-0">
                                                                <img height="100" width="100" src="{{ $image->temporaryUrl() }}"
                                                                    alt="Image Preview" style="max-width: 300px;">
                                                            </div>
                                                            @endif
                                                        </div>

                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" wire:click="cancel" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="button" wire:click="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-backdrop fade show blurred-backdrop"></div>
                                    @endif

                                </div>

                                <a href="" style="color:blue; cursor: pointer">View Details</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div style="background:white; border:1px solid #d3d3d3; border-radius:5px; padding: 10px 15px;">
                                <p style="text-decoration:underline; font-size: 12px;"><b>Add Members to Mailbox</b></p>
                                <div class="row m-0 mb-5">
                                    <div class="col-5 p-0">
                                        <img src="https://snow.payg.in/c3d8c429871c7510279786a50cbb3564.iix?t=medium" style="height:6em;">
                                    </div>
                                    <div class="col-7">
                                        <p style="cursor: pointer">Add Members to Mailbox</p>
                                    </div>
                                </div>
                                <a href="" style="color:blue; cursor: pointer">View Details</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div style="background:white; border:1px solid #d3d3d3; border-radius:5px; padding: 10px 15px;">
                                <p style="text-decoration:underline; font-size: 12px;"><b>Devops Access Request</b></p>
                                <div class="row m-0 mb-5">
                                    <div class="col-5 p-0">
                                        <img src="https://snow.payg.in/3111f90f878cb950279786a50cbb359b.iix?t=medium" style="height:6em;">
                                    </div>
                                    <div class="col-7">
                                        <p style="cursor: pointer">Devops Access Request</p>
                                    </div>
                                </div>
                                <a href="" style="color:blue; cursor: pointer">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="row m-0">
                        <div class="col-md-4 mb-4">
                            <div style="background:white; border:1px solid #d3d3d3; border-radius:5px; padding: 10px 15px;">
                                <p style="text-decoration:underline; font-size: 12px;"><b>ID Card Request</b></p>
                                <div class="row m-0 mb-5">
                                    <div class="col-5 p-0">
                                        <img src="https://snow.payg.in/673ac469871c7510279786a50cbb3563.iix?t=medium" style="height:6em;">
                                    </div>
                                    <div class="col-7">
                                        <p style="cursor: pointer">New ID Card Request</p>
                                    </div>
                                </div>
                                <a href="" style="color:blue; cursor: pointer">View Details</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div style="background:white; border:1px solid #d3d3d3; border-radius:5px; padding: 10px 15px;">
                                <p style="text-decoration:underline; font-size: 12px;"><b>MMS Account Request</b></p>
                                <div class="row m-0 mb-5">
                                    <div class="col-5 p-0">
                                        <img src="https://snow.payg.in/79ee2f8187c0b510e34c63d70cbb355f.iix?t=medium" style="width: 7em; height:6em;">
                                    </div>
                                    <div class="col-7">
                                        <p style="cursor: pointer">MMS Account Request</p>
                                    </div>
                                </div>
                                <a href="" style="color:blue; cursor: pointer">View Details</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div style="background:white; border:1px solid #d3d3d3; border-radius:5px; padding: 10px 15px;">
                                <p style="text-decoration:underline; font-size: 12px;"><b>New Distribution List</b></p>
                                <div class="row m-0 mb-5">
                                    <div class="col-5 p-0">
                                        <img src="https://snow.payg.in/feaa4ca9871c7510279786a50cbb3576.iix?t=medium" style="height:6em;">
                                    </div>
                                    <div class="col-7">
                                        <p style="cursor: pointer">New Distribution List</p>
                                    </div>
                                </div>
                                <a href="" style="color:blue; cursor: pointer">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div class="row m-0">
                        <div class="col-md-4 mb-4">
                            <div style="background:white; border:1px solid #d3d3d3; border-radius:5px; padding: 10px 15px;">
                                <p style="text-decoration:underline; font-size: 12px;"><b>New Laptop</b></p>
                                <div class="row m-0 mb-5">
                                    <div class="col-5 p-0">
                                        <img src="https://snow.payg.in/1a00f1cb878cb950279786a50cbb35ea.iix?t=medium" style="height:6em;">
                                    </div>
                                    <div class="col-7">
                                        <p style="cursor: pointer">Laptop Request</p>
                                    </div>
                                </div>
                                <a href="" style="color:blue; cursor: pointer">View Details</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div style="background:white; border:1px solid #d3d3d3; border-radius:5px; padding: 10px 15px;">
                                <p style="text-decoration:underline; font-size: 12px;"><b>New Mailbox Request</b></p>
                                <div class="row m-0 mb-5">
                                    <div class="col-5 p-0">
                                        <img src="https://snow.payg.in/723bc4e9871c7510279786a50cbb3585.iix?t=medium" style="width: 7em; height:6em;">
                                    </div>
                                    <div class="col-7">
                                        <p style="cursor: pointer">New Mailbox Request</p>
                                    </div>
                                </div>
                                <a href="" style="color:blue; cursor: pointer">View Details</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div style="background:white; border:1px solid #d3d3d3; border-radius:5px; padding: 10px 15px;">
                                <p style="text-decoration:underline; font-size: 12px;"><b>O365 Desktop License Access</b></p>
                                <div class="row m-0 mb-5">
                                    <div class="col-5 p-0">
                                        <img src="https://snow.payg.in/a9fa00e9871c7510279786a50cbb3525.iix?t=medium" style="height:6em;">
                                    </div>
                                    <div class="col-7">
                                        <p style="cursor: pointer">O365 Desktop License Access</p>
                                    </div>
                                </div>
                                <a href="" style="color:blue; cursor: pointer">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div id="showBtnDiv" class="row m-0 mb-4 showIt" style="text-align: center">
                        <h6>Showing 9 items</h6>
                        <div>
                            <button class="btn btn-outline-primary" onclick="showMoreItems()">Show More Items</button>
                        </div>
                    </div>

                    <div id="requestCard" class="row m-0 hideIt">
                        <div class="col-md-4 mb-4">
                            <div style="background:white; border:1px solid #d3d3d3; border-radius:5px; padding: 10px 15px;">
                                <p style="text-decoration:underline; font-size: 12px;"><b>Other Request</b></p>
                                <div class="row m-0 mb-5">
                                    <p class="p-0" style="cursor: pointer; margin-bottom: 4.4em;">Other Service Request</p>
                                </div>
                                <a href="" style="color:blue; cursor: pointer">View Details</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div style="background:white; border:1px solid #d3d3d3; border-radius:5px; padding: 10px 15px;">
                                <p style="text-decoration:underline; font-size: 12px;"><b>Privilege Access Request</b></p>
                                <div class="row m-0 mb-5">
                                    <p class="p-0" style="cursor: pointer; margin-bottom: 4.4em;">Privilege Access Request</p>
                                </div>
                                <a href="" style="color:blue; cursor: pointer">View Details</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div style="background:white; border:1px solid #d3d3d3; border-radius:5px; padding: 10px 15px;">
                                <p style="text-decoration:underline; font-size: 12px;"><b>Remove from Distribution List</b></p>
                                <div class="row m-0 mb-5">
                                    <div class="col-5 p-0">
                                        <img src="https://snow.payg.in/6dfb082d871c7510279786a50cbb3590.iix?t=medium" style="height:6em;">
                                    </div>
                                    <div class="col-7">
                                        <p style="cursor: pointer">Remove Members from Distribution List</p>
                                    </div>
                                </div>
                                <a href="" style="color:blue; cursor: pointer">View Details</a>
                            </div>
                        </div>
                    </div>

                    <div id="removeCard" class="row m-0 hideIt">
                        <div class="col-md-4 mb-4">
                            <div style="background:white; border:1px solid #d3d3d3; border-radius:5px; padding: 10px 15px;">
                                <p style="text-decoration:underline; font-size: 12px;"><b>Remove from Mailbox</b></p>
                                <div class="row m-0 mb-5">
                                    <div class="col-5 p-0">
                                        <img src="https://snow.payg.in/6dfb082d871c7510279786a50cbb3590.iix?t=medium" style="height:6em;">
                                    </div>
                                    <div class="col-7">
                                        <p style="cursor: pointer">Remove Members from Mailbox</p>
                                    </div>
                                </div>
                                <a href="" style="color:blue; cursor: pointer">View Details</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div style="background:white; border:1px solid #d3d3d3; border-radius:5px; padding: 10px 15px;">
                                <p style="text-decoration:underline; font-size: 12px;"><b>Request for IT Accessories</b></p>
                                <div class="row m-0 mb-5">
                                    <div class="col-5 p-0">
                                        <img src="https://snow.payg.in/cc7c281087dc7150fc21ed7bbbbb356b.iix?t=medium" style="width: 7em; height:6em;">
                                    </div>
                                    <div class="col-7">
                                        <p style="cursor: pointer">Request for IT Accessories</p>
                                    </div>
                                </div>
                                <a href="" style="color:blue; cursor: pointer">View Details</a>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div style="background:white; border:1px solid #d3d3d3; border-radius:5px; padding: 10px 15px;">
                                <p style="text-decoration:underline; font-size: 12px;"><b>SIM Request</b></p>
                                <div class="row m-0 mb-5">
                                    <div class="col-5 p-0">
                                        <img src="https://snow.payg.in/ef99c469871c7510279786a50cbb357f.iix?t=medium" style="height:6em;">
                                    </div>
                                    <div class="col-7">
                                        <p style="cursor: pointer">New SIM Request</p>
                                    </div>
                                </div>
                                <a href="" style="color:blue; cursor: pointer">View Details</a>
                            </div>
                        </div>
                    </div>

                </section>

                <section id="cataLogListView" class="hideIt table-responsive">
                    <table class="table" style="font-size: 14px;">
                        <thead>
                            <tr>
                                <th scope="col">Item</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="https://snow.payg.in/89294c29871c7510279786a50cbb35b5.iix?t=medium" class="me-3" style="height:6em;">
                                    <a style="cursor: pointer; color: blue; text-decoration: underline; font-size: 14px" wire:click="ItRequest">Add Members to Distribution List</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <p style="font-size: 14px">Add Members to Distribution List</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="https://snow.payg.in/c3d8c429871c7510279786a50cbb3564.iix?t=medium" class="me-3" style="height:6em;">
                                    <a style="cursor: pointer; color: blue; text-decoration: underline; font-size: 14px">Add Members to Mailbox</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <p style="font-size: 14px">Add Members to Mailbox</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="https://snow.payg.in/3111f90f878cb950279786a50cbb359b.iix?t=medium" class="me-3" style="height:6em;">
                                    <a style="cursor: pointer; color: blue; text-decoration: underline; font-size: 14px">Devops Access Request</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <p style="font-size: 14px">Devops Access Request</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="https://snow.payg.in/673ac469871c7510279786a50cbb3563.iix?t=medium" class="me-3" style="height:6em;">
                                    <a style="cursor: pointer; color: blue; text-decoration: underline; font-size: 14px">ID Card Request</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <p style="font-size: 14px">New ID Card Request</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="https://snow.payg.in/79ee2f8187c0b510e34c63d70cbb355f.iix?t=medium" class="me-3" style="height:6em;">
                                    <a style="cursor: pointer; color: blue; text-decoration: underline; font-size: 14px">MMS Account Request</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <p style="font-size: 14px">MMS Account Request</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="https://snow.payg.in/feaa4ca9871c7510279786a50cbb3576.iix?t=medium" class="me-3" style="height:6em;">
                                    <a style="cursor: pointer; color: blue; text-decoration: underline; font-size: 14px">New Distribution List</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <p style="font-size: 14px">New Distribution List</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="https://snow.payg.in/1a00f1cb878cb950279786a50cbb35ea.iix?t=medium" class="me-3" style="height:6em;">
                                    <a style="cursor: pointer; color: blue; text-decoration: underline; font-size: 14px">New Laptop Request</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <p style="font-size: 14px">New Laptop Request</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="https://snow.payg.in/723bc4e9871c7510279786a50cbb3585.iix?t=medium" class="me-3" style="height:6em;">
                                    <a style="cursor: pointer; color: blue; text-decoration: underline; font-size: 14px">New Mailbox Request</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <p style="font-size: 14px">New Mailbox Request</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="https://snow.payg.in/a9fa00e9871c7510279786a50cbb3525.iix?t=medium" class="me-3" style="height:6em;">
                                    <a style="cursor: pointer; color: blue; text-decoration: underline; font-size: 14px">O365 Desktop License Access</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <p style="font-size: 14px">O365 Desktop License Access</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a style="cursor: pointer; color: blue; text-decoration: underline; font-size: 14px">Other Request</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <p style="font-size: 14px">Other Service Request</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a style="cursor: pointer; color: blue; text-decoration: underline; font-size: 14px">Privilege Access Request</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <p style="font-size: 14px">Privilege Access Request</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="https://snow.payg.in/6dfb082d871c7510279786a50cbb3590.iix?t=medium" class="me-3" style="height:6em;">
                                    <a style="cursor: pointer; color: blue; text-decoration: underline; font-size: 14px">Remove Members from Distribution List</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <p style="font-size: 14px">Remove Members from Distribution List</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="https://snow.payg.in/6dfb082d871c7510279786a50cbb3590.iix?t=medium" class="me-3" style="height:6em;">
                                    <a style="cursor: pointer; color: blue; text-decoration: underline; font-size: 14px">Remove Members from Mailbox</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <p style="font-size: 14px">Remove Members from Mailbox</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="https://snow.payg.in/cc7c281087dc7150fc21ed7bbbbb356b.iix?t=medium" class="me-3" style="height:6em;">
                                    <a style="cursor: pointer; color: blue; text-decoration: underline; font-size: 14px">Request for IT Accessories</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <p style="font-size: 14px">Request for IT Accessories</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="https://snow.payg.in/ef99c469871c7510279786a50cbb357f.iix?t=medium" class="me-3" style="height:6em;">
                                    <a style="cursor: pointer; color: blue; text-decoration: underline; font-size: 14px">SIM Request</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <p style="font-size: 14px">New SIM Request</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

            </div>
        </div>

        <div id="standardChanges" class="col-md-9 mb-4 hideIt">
            <div class="row m-0" style="background:white; border:1px solid grey; border-radius:5px;">
                <div class="row m-0">
                    <div class="col-6">
                        <h4 class="mt-4 mb-2">Standard Changes</h4>
                        <p class="mb-4">Standard Change Template Library</p>
                    </div>
                    <div class="col-6" style="text-align: right; margin: auto; font-size: 13px;">
                        <i class="fas fa-table catalogCardIcon activeCatalog" id="standCardView" onclick="changeView('standCardView')"></i>
                        <span style="border: 1px solid" class="me-3 ms-1"></span>
                        <i class="far fa-list-alt catalogCardIcon" id="standListView" onclick="changeView('standListView')"></i>
                    </div>
                </div>

                <section id="standardCardView" class="showIt">
                    <div style="row m-0">
                        <div class="col-md-4 mb-4">
                            <div style="background:white; border:1px solid #d3d3d3; border-radius:5px; padding: 10px 15px;">
                                <p style="text-decoration:underline; font-size: 12px;"><b>Shifting Distribution List to Shared Mailbox</b></p>
                                <div class="row m-0 mb-5">
                                    <p class="p-0" style="cursor: pointer">Shifting Distribution List to Shared Mailboxt</p>
                                </div>
                                <a href="" style="color:blue; cursor: pointer">View Details</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="standardListView" class="hideIt table-responsive">
                    <table class="table" style="font-size: 14px;">
                        <thead>
                            <tr>
                                <th scope="col">Item</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a style="cursor: pointer; color: blue; text-decoration: underline; font-size: 14px">Shifting Distribution List to Shared Mailbox</a>
                                </td>
                                <td style="vertical-align: middle;">
                                    <p style="font-size: 14px">Shifting Distribution List to Shared Mailbox</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </section>

            </div>
        </div>



        <script>
        $(document).ready(function() {
            $('#example').hierarchySelect({
                hierarchy: false,
                width: 'auto'
            });
        });

        function changeSideMenu(txt) {
            if(txt == 'infTech') {
                $('#infTech').addClass('activeCatalog');
                $('#standChanges').removeClass('activeCatalog');
                $('#informationTech').addClass('showIt').removeClass('hideIt');
                $('#standardChanges').addClass('hideIt').removeClass('showIt');
            } else {
                $('#standChanges').addClass('activeCatalog');
                $('#infTech').removeClass('activeCatalog');
                $('#informationTech').addClass('hideIt').removeClass('showIt');
                $('#standardChanges').addClass('showIt').removeClass('hideIt');
            }
        }

        function changeView(txt) {
            if (txt == 'catCardView') {
                $('#catCardView').addClass('activeCatalog');
                $('#catListView').removeClass('activeCatalog');
                $('#catalogCardView').addClass('showIt').removeClass('hideIt');
                $('#cataLogListView').addClass('hideIt').removeClass('showIt');
            } else if (txt == 'catListView') {
                $('#catListView').addClass('activeCatalog');
                $('#catCardView').removeClass('activeCatalog');
                $('#catalogCardView').addClass('hideIt').removeClass('showIt');
                $('#cataLogListView').addClass('showIt').removeClass('hideIt');
            } else if (txt == 'standCardView') {
                $('#standCardView').addClass('activeCatalog');
                $('#standListView').removeClass('activeCatalog');
                $('#standardCardView').addClass('showIt').removeClass('hideIt');
                $('#standardListView').addClass('hideIt').removeClass('showIt');
            } else if (txt == 'standListView') {
                $('#standListView').addClass('activeCatalog');
                $('#standCardView').removeClass('activeCatalog');
                $('#standardCardView').addClass('hideIt').removeClass('showIt');
                $('#standardListView').addClass('showIt').removeClass('hideIt');
            }
        }

        function showMoreItems() {
            $('#requestCard').addClass('showIt').removeClass('hideIt');
            $('#removeCard').addClass('showIt').removeClass('hideIt');
            $('#showBtnDiv').addClass('hideIt').removeClass('showIt');
        }
        </script>