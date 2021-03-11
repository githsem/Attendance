<?php 
    $title = 'Index';
    require_once "includes/header.php"; ?>


    <h1 class="text-center">Registration for IT Conference</h1>

    
    <form>
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname">        
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname">        
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date Of Birth</label>
            <input type="date" class="form-control" id="dob">        
        </div>
        <div class="mb-3">
            <label for="specialty" class="form-label">Area of Expertise</label>
            <select class="form-select" id="specialty">
                <option value="1">Database Admin </option>
                <option value="2">Software Developer</option>
                <option value="3">Web Administrator</option>
                <option value="3">Other</option>
            </select>       
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="text" class="form-control" id="phone" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="phoneHelp">
            <div id="phone" class="form-text">We'll never share your number with anyone else.</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>  
    </form>

    

<?php require_once "includes/footer.php"; ?>    
    

   