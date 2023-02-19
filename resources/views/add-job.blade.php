@extends('layouts.app')

@section('page_title', 'Junior Jobs')

@section('page_styles')
<style>
    #job-form {
  width: 60%;
  margin: 0 auto;
  padding: 30px;
  background-color: white;
  box-shadow: 0 0 10px #ddd;
}

#job-form h2 {
  text-align: center;
  margin-bottom: 30px;
}

#job-form .form-group {
  margin-bottom: 30px;
}

#job-form label {
  font-weight: bold;
  display: block;
  margin-bottom: 10px;
}

#job-form input,
#job-form textarea, #job-form select {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ddd;
}

#submit-job {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: none;
  background-color: #00c7fc;
  color: white;
  cursor: pointer;
}

header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
}

#jobs-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.job {
  width: calc(33.33% - 20px);
  background-color: lightgray;
  padding: 20px;
  text-align: center;
  margin-bottom: 20px;
  cursor: pointer;
}

.job img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.job h3 {
  margin-top: 20px;
}

.job p {
  margin-top: 10px;
  font-size: 12px;
}
.text-danger{
    color:  #cc0000;
}

</style>
@endsection

@section('content')
 <!-- Add the header -->
 <header class="header">
    <h1>Junior Jobs</h1>
    <button style="background-color: transparent; border: 2px solid black; padding: 10px 10px; margin-top: 5px; float: right;">
      <a href="{{route('home')}}" style="color: black; font-size: 10px; text-decoration: none;">Back To Home?</a>
    </button>


  </header>
  <div id="job-form">
    <h2>Post a Job</h2>
    <form method="POST" action="{{route('web.jobs.store')}}" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="job-title">Job Title:</label>
        <input type="text" id="job-title" class="form-control" name="title" value="{{old('title')}}">
        @error('title')
            <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="job-description">Job Description:</label>
        <textarea id="job-description" class="form-control" name="description">{{old('description')}}</textarea>
        @error('description')
            <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="job-location">Location:</label>
        <input type="text" id="job-location" class="form-control" name="location" value="{{old('location')}}">
        @error('location')
            <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="job-salary">Salary:</label>
        <input type="text" id="job-salary" class="form-control" name="salary" value="{{old('salary')}}">
        @error('salary')
            <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="category">Category:</label>
        <select  id="category" name="category" class="form-control">
            @foreach ($categories as $category)
               <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        @error('category')
            <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <div class="form-group">
        <label for="job-image">Job Image:</label>
        <input type="file" id="job-image" class="form-control" name="image">
        @error('image')
            <span class="text-danger">{{$message}}</span>
        @enderror
      </div>
      <button id="submit-job" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <div id="jobs-container"></div>
@endsection

@section('page_scripts')

@endsection
