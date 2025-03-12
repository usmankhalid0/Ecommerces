@extends('dashboardcontent') 

@section('contenting') 
<div class="content5">
    <center><h1>Setting dashboard</h1></center>
    <div class="">
       <b class="cntered"> Send Notifications to  Mail to Users </b>
       <div class="container2">
        <form id="send_Notification">
            <div class="mb-3 mt-3">
              <label for="email" class="form-label">Email:</label>
              <input list="browsers" class="form-control" name="emailnaotify" onclick="fun()"/></label>
                <datalist id="browsers">
                </datalist>
            </div>
            <div class="mb-3">
                <label for="comment">Comments:</label>
                <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
          </form>
       </div>
    </div>
    {{-- send Mail  --}}
    <div class="">
        <b class="cntered"> Send Notification to user website Account </b>
        <div class="container2">
         <form id="todatabase">
             <div class="mb-3 mt-3">
               <label for="email" class="form-label">Email:</label>
               <input list="browsers" class="form-control" name="email" onclick="fun()"/></label>
                <datalist id="browsers">
             </div>
             <div class="mb-3">
                 <label for="comment">Comments:</label>
                 <textarea class="form-control" rows="5" id="comment" name="message"></textarea>
             </div>
             <button type="submit" class="btn btn-primary">Send</button>
           </form>
        </div>
     </div>
     {{-- send both --}}
     <b class="cntered">Send Mail and Notification to all Users</b>
     <div class="container3">
        <button type="button" class="btn btn-primary">Send Mail</button>
        <button type="button" class="btn btn-primary">Send Notification</button>
     </div>
     {{-- enable chat option with users --}}
     <b class="cntered">Enable Chat option with Users </b>
     <div class="">
        <div class="container2">
         <form action="/action_page.php">
             <div class="mb-3 mt-3">
               <label for="email" class="form-label">Email:</label>
               <input list="browsers" class="form-control" name="myBrowser" onclick="fun()"/></label>
                <datalist id="browsers">
             </div>
             <button type="submit" class="btn btn-primary">Enable Chat </button>
           </form>
        </div>
     </div>
</div>
@endsection