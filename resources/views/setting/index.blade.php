@extends('dashboardcontent') 

@section('contenting') 
<div class="content5">
    <center><h1>Setting dashboard</h1></center>
    <div class="">
       <b> Send Notifications to Users </b>
       <div class="container2">
        <form action="/action_page.php">
            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Email:</label>
              <input list="browsers" class="form-control" name="myBrowser" onclick="fun()"/></label>
                <datalist id="browsers">
                    {{-- <option value="Chrome">
                    <option value="Firefox">
                    <option value="Internet Explorer">
                    <option value="Opera">
                    <option value="Safari">
                    <option value="Microsoft Edge"> --}}
                </datalist>
            </div>
            <div class="mb-3">
                <label for="comment">Comments:</label>
                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
       </div>
    </div>
    {{-- send Mail  --}}
    <div class="">
        <b> Send Mail to Users </b>
        <div class="container2">
         <form action="/action_page.php">
             <div class="mb-3 mt-3">
               <label for="email" class="form-label">Email:</label>
               <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
             </div>
             <div class="mb-3">
                 <label for="comment">Comments:</label>
                 <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
             </div>
             <button type="submit" class="btn btn-primary">Submit</button>
           </form>
        </div>
     </div>
     {{-- send both --}}
     <b>Send Mail and Notification to all Users</b>
     <div class="container3">
        <button type="button" class="btn btn-primary">Send Mail</button>
        <button type="button" class="btn btn-primary">Send Notification</button>
     </div>
     {{-- enable chat option with users --}}
     <b>Enable Chat option with Users </b>
     <div class="">
        <div class="container2">
         <form action="/action_page.php">
             <div class="mb-3 mt-3">
               <label for="email" class="form-label">Email:</label>
               <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
             </div>
             <button type="submit" class="btn btn-primary">Enable Chat </button>
           </form>
        </div>
     </div>
</div>
@endsection