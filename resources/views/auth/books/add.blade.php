@include('auth.shareable.sidebar')
<div class="content-wrapper">
       <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Book</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
          <div class="container card">
            <div class="card-body">

            <form method="POST" action="{{ route('save-book') }}" enctype="multipart/form-data">
                     @csrf   
                        <!-- Basic Information -->
                        <div class="form-group">

                            <div class="row mt-2">
                                <div class="col-md-6 mt-2 ">
                                    <label class="form-label" for="book_title" >Book Title</label>
                                    <input type="text" name="book_title" class="form-control" placeholder="Book Title">
                                </div>
                                <div class="col-md-6 mt-2 ">
                                    <label class="form-label" for="book_author" >Book Author</label>
                                    <input type="text" name="book_author" class="form-control" placeholder="Book Author">
                                </div>
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
                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="cover_photo">Choose Cover Photo</label>
                                    <input class="form-control" type="file" name="cover_photo" id="cover_photo">
                                </div>

                                <div class="col-md-6 mt-2">
                                    <label class="form-label" for="book_file">Choose File</label>
                                    <input class="form-control" type="file" name="book_file" id="book_file">
                                </div>
                            </div>
                        </div> 

                        <div class="row mt-5" >
                                <button type="submit" class="btn btn-lg" style="background-color:orange; color:white;">Save Information</a>
                        </div>
                    </form>
              </div>
          </div>
        </section>
</div>
@include('auth.shareable.footer')
