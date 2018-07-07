@extends('Templates.masterTemplate')

@section('outside')
    <!--Summary-->
    <div class="modal fade " id="viewSummaryModal" tabindex="-1" role="dialog" aria-labelledby="viewSummaryLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewSummaryLabel"><i class="fas fa-ship"></i> Energy Sun</h5>
                    <button type="button" class="close modalClose"></button>
                    <span aria-hidden="true"><i class="ion-close-round"></i></span>
                    </button>
                </div>
                <div class="modal-body modalBody">
                    <!-- Carousel -->
                    <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#imageCarousel" data-slide-to="1"></li>
                            <li data-target="#imageCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="{{URL::asset('/others/stisla_admin_v1.0.0/dist/img/tb1.jpg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/others/stisla_admin_v1.0.0/dist/img/tb2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/others/stisla_admin_v1.0.0/dist/img/tb3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div><br>
                    <div class="container">
                        <div class="row">
                            <div class="col align-self-center">
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Main Information</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Name</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Length</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Breadth</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Depth</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Horse Power</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Maximum Speed</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Bollard Pull</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Gross Tonnage</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Net Tonnage</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Last Dry Docked</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">License Number</th>
                                            <td>249438442378</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">License Expiration Date</th>
                                            <td>2000-05-04</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <table class="table table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Boat Specification</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Built In</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Builder</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Maker Power</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Hull Material</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Drive</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Cylinder per Cycle</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Auxiliary Engine</th>
                                            <td>Aquarius</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Boat Classification</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Classification Number</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Official Number</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">IMO Number</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Flag</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Type</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Trading Area</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Home Port</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ISPS Code Compliance</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ISM Code Standard</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Insurances</th>
                                            <td>Aquarius</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="addFinish" class="btn btn-primary" role="button">Add</button>
                </div>
            </div>
        </div>
    </div>
    <!--Info-->
    <div class="modal fade " id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoModalLabel"><i class="fas fa-ship"></i> Energy Sun</h5>
                    <button type="button" class="close modalClose"></button>
                    <span aria-hidden="true"><i class="ion-close-round"></i></span>
                    </button>
                </div>
                <div class="modal-body modalBody">
                    <!-- Carousel -->
                    <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#imageCarousel" data-slide-to="1"></li>
                            <li data-target="#imageCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/others/stisla_admin_v1.0.0/dist/img/tb1.JPG" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/others/stisla_admin_v1.0.0/dist/img/tb2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/others/stisla_admin_v1.0.0/dist/img/tb3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div><br>
                    <div class="container">
                        <div class="row">
                            <div class="col align-self-center">
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Main Information</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Name</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Length</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Breadth</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Depth</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Horse Power</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Maximum Speed</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Bollard Pull</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Gross Tonnage</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Net Tonnage</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Last Dry Docked</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">License Number</th>
                                            <td>249438442378</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">License Expiration Date</th>
                                            <td>2000-05-04</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <table class="table table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Boat Specification</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Built In</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Builder</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Maker Power</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Hull Material</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Drive</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Cylinder per Cycle</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Auxiliary Engine</th>
                                            <td>Aquarius</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col">
                                <table class="table table-striped">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Boat Classification</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Classification Number</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Official Number</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">IMO Number</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Flag</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Type</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Trading Area</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Home Port</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ISPS Code Compliance</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">ISM Code Standard</th>
                                            <td>Aquarius</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Insurances</th>
                                            <td>Aquarius</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="modalEdit" class="btn btn-primary" role="button">Edit Information</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="section">
        <h1 class="section-header">
            <div>
                Tugboat
                <small class="ml-1 smCat">
                        Maintenance
                        </small>
            </div>
        </h1>

        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <form id="selectViews">
                    <div class="btn-group mt-3 btn-group-toggle" id="sbtn" role="group" aria-label="Button group with nested dropdown">
                        <button id="detView" type="button" class="btn btn-secondary btn-lg" data-toggle="tooltip" title="Detailed View"><i class="fas fa-align-left"></i></button>
                        <button id="cardView" type="button" class="btn btn-secondary btn-lg active" data-toggle="tooltip" title="Card View"><i class="fas fa-credit-card"></i></button>
                        <div id="sortSelect" class="btn-group" role="group">
                            <button id="sortDdown" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sort
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a id="sortName" class="dropdown-item active" href="#">Name</a>
                                <a id="sortHP" class="dropdown-item" href="#">Horse Power</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @include('Tugboat.card')
        <div id="cardLayout">
            <div class="row mt-3">
                <div class="col-12 col-sm-6 col-lg-3">
                    <a href="/tugboat/create" id="addCard" class="card text-center border-dark bounceIn animated">
                        <div class="card-body">
                            <i id="addCardIcon" class="ion-plus-circled"></i>
                        </div>
                    </a>
                </div>
                @if(count($tugboats)>0)
                    @foreach($tugboats as $tugboats)
                        <div class="col-12 col-sm-6 col-lg-3">
                            <div id="cardwInfo" class="card text-center border-dark bounceIn animated" style="width: 15rem;">
                                <img class="card-img-top" src="/others/stisla_admin_v1.0.0/dist/img/example-image.jpeg" alt="Image cannot be found">
                                <div class="card-body">
                                <h6 class="card-title" id="ctitle">{{$tugboats->strName}}</h6>
                                    <span data-toggle="modal" data-target="#infoModal">
                                        <button type="button" class="btn btn-primary nCustom" data-toggle="tooltip" title="View Information">
                                        <i class="fas fa-info custSize"></i>
                                        </button>
                                    </span>
                                    <br>
                                    <div class="mr-1">
                                        <button id="editCard" class="btn btn-secondary optCustom" data-toggle="tooltip" title="Edit" role="button">
                                        <i class="fas fa-edit iconcenter custSize"></i>
                                        </button>
                                        <button id="delCard" type="button" class="btn btn-danger optCustom" data-toggle="tooltip" title="Delete">
                                        <i class="fas fa-trash custSize"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        <div id="detLayout" class="mt-3">
            <table id="detailedTable" class="table table-striped table-bordered fadeIn animated" style="width:100%">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">Classification Number</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Length</th>
                        <th class="text-center">Horse Power</th>
                        <th class="text-center">Gross Tonnage</th>
                        <th class="text-center">License Expiration Date</th>
                        <th class="noSortAction text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>56684138</td>
                        <td>Energy Sun</td>
                        <td>24.74 Meters</td>
                        <td>1521.24 HP</td>
                        <td>108.00 Tons</td>
                        <td>05/04/2021</td>
                        <td>
                            <div class="ml-1 mr-1">
                                <button id="detEdit" class="btn btn-secondary optCustom" data-toggle="tooltip" title="Edit" role="button">
                                        <i class="fas fa-edit iconcenter custSize"></i>
                                    </button>
                                <button id="delDet" type="button" class="btn btn-danger optCustom" data-toggle="tooltip" title="Delete">
                                        <i class="fas fa-trash custSize"></i>
                                    </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="editLayout">
            <div class="card animated bounceInLeft">
                <div class="card-header">
                    <spanstyle="height:50px;">
                        <a id="btnEditgoBack" href="tugboat.html" class="btn btn-lg btn-link float-left mt-1" data-toggle="tooltip" title="Back" role="button">
                            <i class="ion-chevron-left custSize"></i>
                            </a>
                        <button class="btn btn-lg btn-link float-right"></button>
                        <h3 class="text-center">EDIT</h3>
                        </span>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-4">
                            <ul class="nav nav-pills flex-column" id="editTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active tabEdit" id="editPicTab" data-toggle="tab" href="#editPicContent" role="tab" aria-controls="picAControl" aria-selected="true">Pictures</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tabEdit" id="editMinfoTab" data-toggle="tab" href="#editMinfoContent" role="tab" aria-controls="minfoAControl" aria-selected="false">Main Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tabEdit" id="editTSpecTab" data-toggle="tab" href="#editTSpecContent" role="tab" aria-controls="tSpecAControl" aria-selected="false">Tugboat Specification</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tabEdit" id="editTClassTab" data-toggle="tab" href="#editTClassContent" role="tab" aria-controls="tClassAControl" aria-selected="false">Tugboat Classification</a>
                                </li>
                            </ul>
                        </div>
        
                        <div class="col-12 col-sm-12 col-md-8">
                            <div class="tab-content" id="editTabContent">
                                <!-- Picture tab -->
                                <div class="tab-pane fade show active" id="editPicContent" role="tabpanel" aria-labelledby="editPicTab">
                                    <form>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <img src="/others/stisla_admin_v1.0.0/dist/img/example-image.jpeg" class="img-thumbnail" id="editfPic"><br><br>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" accept='image/*' id="editFirstPic" onchange="ValidateSingleInput(this);">
                                                        <label class="custom-file-label" for="editFirstPic" id="editLblfirstPic">First Picture<sup class="text-primary">&#10033;</sup></label>
                                                        <small id="editFirstFileChosen" class="form-text text-muted">No First Picture chosen.</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <img src="/others/stisla_admin_v1.0.0/dist/img/example-image.jpeg" class="img-thumbnail" id="editsPic"><br><br>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" accept='image/*' id="editSecPic" onchange="ValidateSingleInput(this);">
                                                        <label class="custom-file-label" for="editSecPic" id="editLblsecPic">Second Picture<sup class="text-primary">&#10033;</sup></label>
                                                        <small id="editSecFileChosen" class="form-text text-muted">No Second Picture chosen.</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <img src="/others/stisla_admin_v1.0.0/dist/img/example-image.jpeg" class="img-thumbnail" id="edittPic"><br><br>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" accept='image/*' id="editThirdPic" onchange="ValidateSingleInput(this);">
                                                        <label class="custom-file-label" for="editThirdPic" id="editLblthirdPic">Third Picture<sup class="text-primary">&#10033;</sup></label>
                                                        <small id="editThirdFileChosen" class="form-text text-muted">No Third Picture chosen.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><br>
                                        <button id="btnEItemPics" type="submit" class="btn btn-primary float-right font-weight-bold">Submit</button><br>
                                    </form>
                                </div>
                                <!-- Main Info Tab -->
                                <div class="tab-pane fade" id="editMinfoContent" role="tabpanel" aria-labelledby="editMinfoTab">
                                    <form id="editFormInfo" class="needs-validation" novalidate>
                                        <!-- First Row w/ 2 Columns-->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editName">Name<sup class="text-primary">&#10033;</sup></label>
                                                    <input type="text" class="form-control" id="editName" placeholder="Tugboat Name" required>
                                                    <div class="invalid-feedback">
                                                        Please enter a Name.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editLength">Length<sup class="text-primary">&#10033;</sup></label>
                                                    <div class="input-group mb-3">
                                                        <input type="number" class="form-control" id="editLength" placeholder="Tugboat Length" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">m</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Second Row w/ 2 Columns-->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editBreadth">Breadth<sup class="text-primary">&#10033;</sup></label>
                                                    <div class="input-group mb-3">
                                                        <input type="number" class="form-control" id="editBreadth" placeholder="Tugboat Breadth" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">m</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editDepth">Depth<sup class="text-primary">&#10033;</sup></label>
                                                    <div class="input-group mb-3">
                                                        <input type="number" class="form-control" id="editDepth" placeholder="Tugboat Depth" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">m</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Third Row w/ 2 Columns-->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editHorsePower">Horse Power<sup class="text-primary">&#10033;</sup></label>
                                                    <div class="input-group mb-3">
                                                        <input type="number" class="form-control" id="editHorsePower" placeholder="Tugboat Horse Power" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">HP</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editMaxSpeed">Maximum Speed*</label>
                                                    <div class="input-group mb-3">
                                                        <input type="number" class="form-control" id="editMaxSpeed" placeholder="Tugboat Max Speed" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">knots</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fourth Row w/ 2 Columns-->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editBollardPull">Bollard Pull<sup class="text-primary">&#10033;</sup></label>
                                                    <div class="input-group mb-3">
                                                        <input type="number" class="form-control" id="editBollardPull" placeholder="Tugboat Bollard Pull" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">tons</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editGrossTonnage">Gross Tonnage<sup class="text-primary">&#10033;</sup></label>
                                                    <div class="input-group mb-3">
                                                        <input type="number" class="form-control" id="editGrossTonnage" placeholder="Tugboat Gross Tonnage" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">tons</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fifth Row w/ 2 Columns-->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editNetTonnage">Net Tonnage<sup class="text-primary">&#10033;</sup></label>
                                                    <div class="input-group mb-3">
                                                        <input type="number" class="form-control" id="editNetTonnage" placeholder="Tugboat Net Tonnage" required>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">tons</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editLastDryDocked">Last Dry Docked<sup class="text-primary">&#10033;</sup></label>
                                                    <input class="form-control" id="editLastDryDocked" placeholder="YYYY-MM-DD">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Sixth Row w/ 3 Columns-->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editLicenseNum">License Number<sup class="text-primary">&#10033;</sup></label>
                                                    <input type="number" class="form-control" id="editLicenseNum" placeholder="Tugboat License Number">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editLicenseExpDate">License Expiration Date<sup class="text-primary">&#10033;</sup></label>
                                                    <input class="form-control" id="editLicenseExpDate" placeholder="YYYY-MM-DD">
                                                </div>
                                            </div>
                                        </div>
                                        <button id="btnEmInfoSubmit" type="submit" class="btn btn-primary float-right font-weight-bold">Submit</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="editTSpecContent" role="tabpanel" aria-labelledby="editTSpecTab">
                                    <form id="editFormSpec">
                                        <!-- First Row w/ 2 Columns-->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editLocBuilt">Location Built<sup class="text-primary">&#10033;</sup></label>
                                                    <input type="text" class="form-control" id="editLocBuilt" placeholder="Tugboat Location Built">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editDateBuilt">Date Built<sup class="text-primary">&#10033;</sup></label>
                                                    <input class="form-control" id="editDateBuilt" placeholder="YYYY-MM-DD">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Second Row w/ 2 Columns-->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editBuilder">Builder<sup class="text-primary">&#10033;</sup></label>
                                                    <input type="text" class="form-control" id="editBuilder" placeholder="Tugboat Builder">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editMakerPower">Maker Power<sup class="text-primary">&#10033;</sup></label>
                                                    <input type="text" class="form-control" id="editMakerPower" placeholder="Tugboat Maker Power">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Third Row w/ 2 Columns-->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editHullMaterial">Hull Material<sup class="text-primary">&#10033;</sup></label>
                                                    <input type="text" class="form-control" id="editHullMaterial" placeholder="Tugboat Hull Material">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editDrive">Drive<sup class="text-primary">&#10033;</sup></label>
                                                    <input type="text" class="form-control" id="editDrive" placeholder="Tugboat Drive">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fourth Row w/ 2 Columns-->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Cylinder per Circle<sup class="text-primary">&#10033;</sup></label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="editCyl" name="editCyl" placeholder="Cylinder">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">/</span>
                                                        </div>
                                                        <input type="text" class="form-control" name="editCircle" placeholder="Circle">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editAuxEngine">Auxiliary Engine<sup class="text-primary">&#10033;</sup></label>
                                                    <input type="text" class="form-control" id="editAuxEngine" placeholder="Tugboat Auxiliary Engine">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" id="btnETSpecSubmit" class=" btn btn-primary float-right font-weight-bold">Submit</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="editTClassContent" role="tabpanel" aria-labelledby="editTClassTab">
                                    <form id="editFormClass">
                                        <!-- First Row w/ 2 Columns-->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editClassNum">Classification Number<sup class="text-primary">&#10033;</sup></label>
                                                    <input type="number" class="form-control" id="editClassNum" placeholder="Tugboat Classification Number">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editOfficialNum">Official Number<sup class="text-primary">&#10033;</sup></label>
                                                    <input type="number" class="form-control" id="editOfficialNum" placeholder="Tugboat Official Number">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Second Row w/ 2 Columns-->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editIMONum">IMO Number<sup class="text-primary">&#10033;</sup></label>
                                                    <input type="number" class="form-control" id="editIMONum" placeholder="Tugboat IMO Number">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>Flag<sup class="text-primary">&#10033;</sup></label><br>
        
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Third Row w/ 2 Columns-->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editType">Type<sup class="text-primary">&#10033;</sup></label>
                                                    <input type="text" class="form-control" id="editType" placeholder="Tugboat Type">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editTradingArea">Trading Area<sup class="text-primary">&#10033;</sup></label>
                                                    <input type="text" class="form-control" id="editTradingArea" placeholder="Tugboat Trading Area">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fourth Row w/ 2 Columns-->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editHomePort">Home Port<sup class="text-primary">&#10033;</sup></label>
                                                    <input type="text" class="form-control" id="editHomePort" placeholder="Tugboat Home Port">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>ISPS Code Compliance<sup class="text-primary">&#10033;</sup></label><br>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="editISPSComplianceYes" name="editISPSCompliance" value="yes" class="custom-control-input" checked>
                                                        <label class="custom-control-label" for="editISPSComplianceYes">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="editISPSComplianceNo" name="editISPSCompliance" value="no" class="custom-control-input">
                                                        <label class="custom-control-label" for="editISPSComplianceNo">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fifth Row w/ 2 Columns-->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group">
                                                    <label>ISM Code Standard<sup class="text-primary">&#10033;</sup></label><br>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="editCStandardYes" name="editCStandard" value="yes" class="custom-control-input" checked>
                                                        <label class="custom-control-label" for="editCStandardYes">Yes</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="editCStandardNo" name="editCStandard" value="no" class="custom-control-input">
                                                        <label class="custom-control-label" for="editCStandardNo">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <label for="editInsurance1">Insurance # 1<sup class="text-primary">&#10033;</sup></label>
                                                    <input type="text" class="form-control" id="editInsurance1" name="editInsurance1" placeholder="Tugboat Insurance # 1">
                                                    <button type="button" id="btnEditInsuranceAdd" class="btn btn-primary float-right mt-2 btn-lg" data-toggle="tooltip" title="Add field for another Insurance"><i class="fas fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Sixth Row w/ 2 Columns-->
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group" id="editTClassInsurance1">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group" id="editTClassInsurance2">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group" id="editTClassInsurance3">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" id="btnETClassSubmit" class="btn btn-primary float-right font-weight-bold">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripted')
    @include('Tugboat.tugboatScripts')
    <script type="text/javascript">
        
        //$(document).ready( function() {
        //    $.get('/tugboat/create' ,function(data){
        //        if(data = null){
        //            console.log("data is null");
        //        }
        //       else{
        //            console.log("success");
        //          console.log(data);
        //        }
        //    });
        // });

        //$(document).ready( function(){
        //    $.ajaxSetup({
        //        headers : {
        //            'X-CSRF-TOKEN' : $('meta[name="_token"]').attr('content')
        //        }
        //    })

        //    $.ajax({
        //        url : "/tugboat/tojson",
        //        type : 'GET',
        //        dataType : 'JSON',
        //        success : function(data){
        //            console.log('success', data);
        //            alert("this is working");
        //        }
        //    });
        //});

        var eo = document.getElementById("maintenanceTree");
        var et = document.getElementById("tugboatMenu");

        eo.className = "active";
        et.className = "active";
    </script>

@endsection