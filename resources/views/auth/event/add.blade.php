@include('auth.shareable.sidebar')
<div class="content-wrapper">
       <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Events </h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
          <div class="container card">
            <div class="card-body">

                   <form method="POST" action="{{ route('save-event') }}" enctype="multipart/form-data">
                     @csrf       

                            <!-- Basic Information -->
                            <div class="form-group">

                                <div class="row mt-2">
                                    <div class="col-md-8 mt-2 ">
                                        <label class="form-label" for="event_title" >Event Title</label>
                                        <input type="text" name="event_title" class="form-control" placeholder="Blog Title">
                                    </div>
                                    <div class="col-md-4 mt-2">
                                        <label class="form-label" for="event_category">Category</label>
                                        <select class="form-select form-control" name="event_category" required>
                                            <option value="Governmental" selected>Business</option>
                                            <option value="Privately Owned">Technology</option>
                                            <option value="Share Company">Sport</option>
                                            <option value="NGO">News</option>
                                            <option value="NGO">Health and Fitness</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    
                                </div>
                            </div>
                            

                            <!-- Service Information  -->
                            <div class="form-group">
                                <div class="row mt-4">
                                    <div class="col-12 mt-2">
                                        <label class="form-label" for="description">Description</label>
                                        <textarea class="form-control" name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea>
                                    </div>
                                </div>
                            </div> 

                            <!-- Gallery Information  -->
                            <div class="form-group">
                                <div class="row mt-4">
                                    <div class="col-12 mt-2">
                                        <label class="form-label" for="cover_photo">Choose Cover Photo</label>
                                        <input class="form-control" type="file" name="cover_photo" id="cover-photo">
                                    </div>
                                </div>
                            </div> 

                            <div class="row mt-5" >
                                    <button type="submit" class="btn btn-lg" style="background-color:orange; color:white;">Save Information</button>
                            </div>
                    </form>
              </div>
          </div>
        </section>
</div>
@include('auth.shareable.footer')
