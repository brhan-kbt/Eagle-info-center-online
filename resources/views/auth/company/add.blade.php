@include('auth.shareable.sidebar')
<div class="content-wrapper">
       <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add New Company</h1>
                    </div>
                
                </div>
            </div>
        </section>
        <section class="content">
          <div class="container card">
            <div class="card-body">

                    <form method="POST" action="{{ route('save-company') }}" enctype="multipart/form-data">
                    @csrf

                        <!-- Basic Information -->
                        <div class="form-group">
                        <h3 style="color:orange; font-weight:bold;">Basic Information</h3>

                            <div class="row mt-2">
                                <div class="col-md-6 mt-2 ">
                                    <label class="form-label" for="company_name" >Company Name</label>
                                    <input type="text" name="company_name" class="form-control" placeholder="Company Name">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="company_owner">Company Owner</label>
                                    <input type="text" name="company_owner" class="form-control"  placeholder="Company Owner">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6 mt-2">
                                    <label for="businesscategory" class="form-label">Business Category</label>
                                    <select class="form-select form-control" name="businesscategory" required>
                                        <option value="">select category</option>
                                        <option value="Education">Education</option>
                                        <option value="Government Office">Government Office</option>
                                        <option value="IT/Telecome">IT/Telecom</option>
                                        <option value="Finance">Finance</option>
                                        <option value="Hospitality">Hospitality</option>
                                        <option value="Transport">Transport</option>
                                        <option value="Building">Building</option>
                                        <option value="Religion">Religion</option>
                                        <option value="Sport">Sport</option>
                                        <option value="Construction">Construction</option>
                                        <option value="Real Estate">Real Estate</option>
                                        <option value="Tourism">Tourism</option>
                                        <option value="NGO">NGO</option>
                                        <option value="Tour and Travel Agencies">Tour and Travel Agencies</option>
                                        <option value="Medias">Medias</option>
                                        <option value="Advertising Organizations">Advertising Organizations</option>
                                        <option value="Condominiums">Condominiums</option>
                                        <option value="Embassies">Embassies</option>
                                        <option value="International Organizations">International Organizations</option>
                                        <option value="Libraries">Libraries</option>
                                        <option value="Book Stores">Book Stores</option>
                                        <option value="Local Market">Local Market</option>
                                        <option value="Local Name">Local Name</option>
                                        <option value="Ye Menfesawi Guzo Mahiberat">Ye Menfesawi Guzo Mahiberat</option>
                                        <option value="Fire Control">Fire Control</option>
                                        <option value="Post Office">Post Office</option>
                                        <option value="Gas Stations">Gas Stations</option>
                                        <option value="Supermarkets">Supermarkets</option>
                                        <option value="Cinema and Theatre">Cinema and Theatre</option>
                                        <option value="Industry Parks">Industry Parks</option>
                                        <option value="Investment">Investment</option>
                                        <option value="Trade">Trade</option>
                                        <option value="Youth Centers">Youth Centers</option>
                                        <option value="Emergency Numbers">Emergency Numbers</option>
                                        <option value="Event and Daily Info">Event and Daily Info</option>
                                        <option value="Short Code Users">Short Code Users</option>
                                        <option value="Market Areas">Market Areas</option>
                                        <option value="Professionals Address">Professionals Address</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label for="typeofbusiness" class="form-label">Type of Company</label>
                                    <select class="form-select form-control" name="typeofbusiness" required>
                                        <option value="Governmental" selected>Governmental</option>
                                        <option value="Privately Owned">Privately Owned</option>
                                        <option value="Share Company">Share Company</option>
                                        <option value="NGO">NGO</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <h3 style="color:orange; font-weight:bold;">Location Information</h3>
                            <div class="row mt-4">
                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="city">City</label>
                                    <input class="form-control" type="text" name="city" placeholder="City" id="city">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="sub_city">Sub City</label>
                                    <input class="form-control" type="text" name="sub_city" placeholder="Sub City" id="sub_city">
                                </div>
                            </div>
                            <div class="row mt-4" >
                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="woreda">Woreda</label>
                                    <input class="form-control" type="text" name="woreda" placeholder="Woreda" id="woreda">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="sefer">Sefer</label>
                                    <input class="form-control" type="text" name="sefer" placeholder="Sefer" id="sefer">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="specific_location">Specific Location</label>
                                    <input class="form-control" type="text" name="specific_location" placeholder="Specific Location" id="specific_location">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="gmap">Google Maps Url</label>
                                    <input class="form-control" type="text" name="gmap" placeholder="Google Maps longitude" id="gmap">
                                </div>
                            </div>
                        </div> 

                        <!-- Contact Information  -->
                        <div class="form-group">
                            <h3 style="color:orange; font-weight:bold;">Contact Information</h3>
                            <div class="row mt-4">
                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="company_email">Company Email</label>
                                    <input class="form-control" type="text" name="company_email" placeholder="Company Email" id="company_email">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="website">Website</label>
                                    <input class="form-control" type="text" name="website" placeholder="Website" id="website">
                                </div>
                            </div>
                            <div class="row mt-4" >
                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="fax">FAX</label>
                                    <input class="form-control" type="text" name="fax" placeholder="fax" id="fax">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="pobox">PO BOX</label>
                                    <input class="form-control" type="text" name="pobox" placeholder="PO BOX" id="pobox">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-4 mt-2">
                                    <label class="form-label" for="telephone">Telephone</label>
                                    <input class="form-control" type="text" name="telephone" placeholder="Telephone" id="telephone">
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label class="form-label" for="mobile">Mobile</label>
                                    <input class="form-control" type="text" name="mobile" placeholder="Mobile" id="mobile">
                                </div>
                                <div class="col-md-4 mt-2">
                                    <label class="form-label" for="altmobile">Alternative Mobile</label>
                                    <input class="form-control" type="text" name="altmobile" placeholder="Alternative Mobile" id="altmobile">
                                </div>
                            </div>
                        </div> 

                        <!-- Service Information  -->
                        <div class="form-group">
                            <h3 style="color:orange; font-weight:bold;">Service Information</h3>
                            <div class="row mt-4">
                                <div class="col-12 mt-2">
                                    <label class="form-label" for="service">Service</label>
                                    <textarea class="form-control" name="service" id="service" cols="30" rows="10" placeholder="Service of the company"></textarea>
                                </div>
                            </div>
                        </div> 

                        <!-- Gallery Information  -->
                        <div class="form-group">
                            <h3 style="color:orange; font-weight:bold;">Service Information</h3>
                            <div class="row mt-4">
                                <div class="col-12 mt-2">
                                    <label class="form-label" for="cover_photo">Choose Cover Photo</label>
                                    <input class="form-control" type="file" name="cover_photo" id="cover_photo">
                                </div>
                            </div>
                        </div> 

                        <div class="row mt-5" >
                                <button class="btn btn-lg" style="background-color:orange; color:white;" type="submit">Save Information</button>
                        </div>


                    </form>
              </div>
          </div>
        </section>
</div>
@include('auth.shareable.footer')