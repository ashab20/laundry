<div class="step_wrapper">
    <div class="card">
        <div class="parent">
            <div class="top-div">
                <!-- <img src="https://imgur.com/3U0Yawd.png"> -->
                <h5> Add Customer</h5>
            </div>
            <ul class="progress-bar">
                <li class="active"></li>
                <li></li>
                <li></li>
                <!--<li></li>-->
            </ul>
            <span>
                <?php if ($this->session->flashdata('msg')) {
                    echo $this->session->flashdata('msg');
                } ?>
            </span>
        </div> 
        <?= form_open() ?>
        <div class="step active">
            <div class="card-body">
               
                <div class="form-row">
                    <div class="form-group col-6">                        
                    <label for="">Phone:</label>
                        <input class="form-control" type="text" placeholder="Phone" name="contact" value="<?= set_value('contact') ?>" id="contact" />
                        <small id="name" class="form-text text-danger"><?= form_error('contact'); ?></small>
                    </div>
                    <div class="form-group col-6">
                    <label for="">Name:</label>
                        <input class="form-control" type="text" placeholder="Name" name="name" value="<?= set_value('name') ?>" />
                        <small id="name" class="form-text text-danger"><?= form_error('name'); ?></small>
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-12">
                        <label for="">Address:</label>
                        <textarea name="address" id="address" class="form-control" rows="2" placeholder="Address:" valus="  <?= set_value('address') ?>">

                  </textarea>
                        <small id="name" class="form-text text-danger"><?= form_error('address'); ?></small>
                    </div>
                </div>
                <div class="form-group button">
                    <button class="create-workspace btn btn-primary btn-block mt-3" type="button">Add</button>
                </div>
                
            </div>

        </div>
        <div class="step">

            <div class="content">
                <h4>Let's set up a home for all your work</h4>
                <p>You can always create another workspace later.</p>
            </div>
            <div class="input-text">
                <input type="text" placeholder="Eden" require>
                <span>Workspace Name</span>
            </div>
            <div class="input-text">
                <input type="text" placeholder="Example : https://www.google.com/">
                <span>Workspace URL(optional)</span>
            </div>
            <div class="button button_gap">
                <button type="button" class="back-click">Back</button>
                <button type="button" class="next-click">Next</button>
            </div>

        </div>
        <div class="step">

            <div class="content">
                <h4>How are you planning to use Eden?</h4>
                <p>We'll stream line your setup accordingly.</p>
            </div>
            <div class="radio-text">
                <input type="radio" name="Select" id="radio-button-1">

                <input type="radio" name="Select" id="radio-button-2">
                <label for="radio-button-1" class="radio-button-1">
                    <i class="fa fa-user"></i>
                    <h5>For Myself</h5>
                    <p>Write better.Think more clearly.Stay organized.</p>

                </label>
                <label for="radio-button-2" class="radio-button-2">
                    <i class="fa fa-users"></i>
                    <h5>With my team</h5>
                    <p>Wikis,docs,tasks and projects all in one space.</p>
                </label>


            </div>
            <div class="button button_gap1">
                <button type="button" class="back-click">Back</button>
                <button type="button" class="finish-click">Finish</button>
            </div>

        </div>
        <div class="step">

            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
            </svg>
            <div class="content">
                <h2>Congratulations! <span id="shown_name"></span></h2>
                <p>You have completed onboarding,you can start using the Eden!</p>
            </div>
            <div class="button launch">
                <button>Launch Eden</button>
            </div>

        </div>
        </form>
    </div>

</div>