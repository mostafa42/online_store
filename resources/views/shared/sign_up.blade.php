<!-- Modal -->
<div class="modal fade" id="sign_up" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background-color: #052342">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color: #fff; font-size: 20px;">Sign up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    style="color: #fff; font-size: 20px;">
                    <span aria-hidden="true" style="color: #fff; font-size: 20px;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="/action_page.php">

                        <div class="form-group">
                            <input type="text" class="email-bt" placeholder="Name" name="name">
                        </div>


                        <div class="form-group">
                            <input type="email" class="email-bt" placeholder="Email" name="Email">
                        </div>

                        <div class="form-group">
                            <input type="password" class="email-bt" placeholder="Password" name="password">
                        </div>

                        <div class="form-group">
                            <input type="password" class="email-bt" placeholder="Password confirmation" name="password_confirmation">
                        </div>

                    </form>
                </div>
                <div class="send_btn">
                    <button class="main_bt">Login</button>
                </div>
            </div>
        </div>
    </div>
</div>
