
<div class="modalContainer">
    <!-- Trigger/Open The Modal -->
    <button id="myBtn">Proceed to payment</button>

    <!-- The Modal -->
    <div id="myModal" class="modal" style="opacity: 1.0;">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <p><a href="indexLogin.php?tempUser=login&ses_id=<?php echo  $ses_id; ?>">Login</a> or <a href="signUpCustomer.php?tempUser=signup&ses_id=<?php echo  $ses_id; ?>">Sign up to continue</a></p>
        </div>
    </div> 
</div>  

<script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>   